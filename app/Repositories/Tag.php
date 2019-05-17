<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

/**
 * Class Tag
 * @package App\Repositories
 */
class Tag implements TagInterface
{
    /**
     * @var \App\Tag
     */
    protected $model;

    /**
     * Tag constructor.
     * @param \App\Tag $model
     */
    public function __construct(\App\Tag $model)
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
}