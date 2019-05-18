<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use \App\Category as Model;

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
}