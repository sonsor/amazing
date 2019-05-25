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
}