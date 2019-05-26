<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use \App\Category as Model;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class Category
 * @package App\Repositories
 */
class Category implements CategoryInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * Option constructor.
     * @param Model $mode
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all('id as value', 'name', 'slug');
    }

    /**
     * @param string $search
     * @return Collection
     */
    public function list(?string $search): LengthAwarePaginator
    {
        $categories = $this->model->newQuery();
        $categories->with('parent');
        $categories->with('children');

        if ($search) {
            $categories->where('name', 'like', '%' . $search . '%');
        }
        return $categories->paginate(20);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function remove(int $id): bool
    {
        $category = $this->model->findOrFail($id);
        $category->icons()->detach();
        $category->delete();
        return true;
    }

    /**
     * @param int|null $id
     * @return Model
     */
    public function get(?int $id): Model
    {
        if (!$id) {
            return $this->model;
        }

        return $this->model->findOrFail($id);
    }

    /**
     * @param int|null $id
     * @return array
     */
    public function options(?int $id): array
    {
        $query = $this->model->newQuery();
        $query->select('id', 'name');
        $id ? $query->where('id', '!=', $id): '';
        $query->orderBy('name', 'asc');
        $query = $query->get();

        $options = [];
        foreach ($query as $row) {
            $options[$row->id] = $row->name;
        }
        return $options;
    }

    /**
     * @param int|null $id
     * @param $data
     * @return int
     */
    public function store(?int $id, $data): int
    {
        $instance = $id ? $this->model->find($id): new $this->model;
        $instance->fill($data);
        $instance->save();
        return $instance->id;
    }
}