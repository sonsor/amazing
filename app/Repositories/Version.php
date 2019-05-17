<?php
namespace App\Repositories;

/**
 * Class Version
 * @package App\Repositories
 */
class Version implements VersionInterface
{
    /**
     * @var App\Version
     */
    protected $model;

    /**
     * Version constructor.
     * @param App\Version $model
     */
    public function __construct(App\Version $model)
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