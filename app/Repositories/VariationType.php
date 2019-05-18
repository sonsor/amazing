<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

/**
 * Class VariationType
 * @package App\Repositories
 */
class VariationType implements VariationTypeInterface
{
    /**
     * @var \App\VariationType
     */
    protected $model;

    /**
     * VariationType constructor.
     * @param \App\VariationType $model
     */
    public function __construct(\App\VariationType $model)
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