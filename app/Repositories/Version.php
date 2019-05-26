<?php
namespace App\Repositories;

use \App\Version as Model;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class Version
 * @package App\Repositories
 */
class Version implements VersionInterface
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
     * @return int
     */
    public function getLatestVersionId(): int
    {
        return $this->model->orderBy('created_at', 'desc')->pluck('id')->first();
    }

    /**
     * @param string|null $search
     * @return LengthAwarePaginator
     */
    public function list(?string $search): LengthAwarePaginator
    {
        $versions = $this->model->newQuery();
        $versions->with('icons');
        if ($search) {
            $versions->where('version', 'like', '%' . $search . '%');
        }
        return $versions->paginate(20);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function remove(int $id): bool
    {
        $version = $this->model->findOrFail($id);
        $version->delete();
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
}