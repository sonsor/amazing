<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use \App\VariationType as Model;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class VariationType
 * @package App\Repositories
 */
class VariationType implements VariationTypeInterface
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
     * @return array
     */
    public function getPublicVariationTypesId(): array
    {
        return $this->model->whereIn('slug', ['solid', 'brand'])->pluck('id')->toArray();
    }

    /**
     * @return Collection
     */
    public function getPublicVariationTypes(): Collection
    {
        return $this->model->select('id as value', 'name', 'slug')->whereIn('slug', ['solid', 'brand'])->get();
    }

    /**
     * @param string|null $search
     * @return LengthAwarePaginator
     */
    public function list(?string $search): LengthAwarePaginator
    {
        $variationTypes = $this->model->newQuery();
        $variationTypes->with('icons');
        if ($search) {
            $variationTypes->where('name', 'like', '%' . $search . '%');
        }
        return $variationTypes->paginate(20);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function remove(int $id): bool
    {
        $variationType = $this->model->findOrFail($id);
        $variationType->delete();
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