<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use \App\Tag as Model;
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
}