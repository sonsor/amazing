<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

/**
 * Class Category
 * @package App\Repositories
 */
class Category implements CategoryInterface
{
    /**
     * @var \App\Category
     */
    protected $model;

    /**
     * Category constructor.
     * @param \App\Category $model
     */
    public function __construct(\App\Category $model)
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
}