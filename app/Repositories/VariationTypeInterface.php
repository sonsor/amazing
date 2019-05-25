<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 5/17/19
 * Time: 8:36 PM
 */

namespace App\Repositories;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

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

    /**
     * @param string|null $search
     * @return LengthAwarePaginator
     */
    public function list(?string $search): LengthAwarePaginator;

    /**
     * @param int $id
     * @return bool
     */
    public function remove(int $id): bool;
}