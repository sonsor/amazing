<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 5/17/19
 * Time: 8:36 PM
 */

namespace App\Repositories;


use Illuminate\Database\Eloquent\Collection;

/**
 * Interface VariationTypeInterface
 * @package App\Repositories
 */
interface VariationTypeInterface
{
    /**
     * @return array
     */
    public function getPublicVariationTypesId(): array;

    /**
     * @return Collection
     */
    public function getPublicVariationTypes(): Collection;
}