<?php
namespace App\Repositories;

use \App\Option as Model;

/**
 * Class Option
 * @package App\Repositories
 */
class Option implements OptionInterface
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
     * @param string $key
     * @return string
     */
    public function get(string $key): string
    {
        $value = $this->model->select('value')->where('key', $key)->pluck('value');
        return (string) $value->first();
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function set(string $key, string $value): void
    {
        $option = $this->model->where('key', $key)->get()->first() ?? new $this->model();
        $option->key = $key;
        $option->value = $value;
        $option->save();
    }
}