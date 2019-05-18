<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use \App\VariationType as Model;

/**
 * Class VariationType
 * @package App\Repositories
 */
class VariationType implements VariationTypeInterface
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
     * @return array
     */
    public function getPublicVariationTypesId(): array
    {
        return $this->model->whereIn('slug', ['solid', 'brand'])->pluck('id')->toArray();
    }

    /**
     * @return Collection
     */
    public function getPublicVariationTypes(): Collection
    {
        return $this->model->select('id as value', 'name', 'slug')->whereIn('slug', ['solid', 'brand'])->get();
    }
}