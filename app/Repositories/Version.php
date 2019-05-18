<?php
namespace App\Repositories;

use \App\Version as Model;

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

}