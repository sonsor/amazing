<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 5/26/19
 * Time: 3:43 PM
 */

namespace App\Repositories;


use \App\Description as Model;

/**
 * Class Description
 * @package App\Providers
 */
class Description implements DescriptionInterface
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
     * @param int|null $id
     * @param array $data
     * @return Model
     */
    public function store(?int $id, array $data): Model
    {
        $instance = $id ? $this->model->find($id): new $this->model;
        $instance->fill($data);
        $instance->save();
        return $instance;
    }
}