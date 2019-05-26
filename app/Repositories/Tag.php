<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use \App\Tag as Model;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class Tag
 * @package App\Repositories
 */
class Tag implements TagInterface
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
        return $this->model->all('id', 'name', 'slug');
    }

    /**
     * @param string|null $search
     * @return LengthAwarePaginator
     */
    public function list(?string $search): LengthAwarePaginator
    {
        $tags = $this->model->newQuery();
        if ($search) {
            $tags->where('name', 'like', '%' . $search . '%');
        }
        return $tags->paginate(20);
    }


    /**
     * @param int $id
     * @return bool
     */
    public function remove(int $id): bool
    {
        $tag = $this->model->findOrFail($id);
        $tag->icons()->detach();
        $tag->delete();
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
}