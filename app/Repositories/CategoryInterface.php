<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 5/17/19
 * Time: 8:35 PM
 */

namespace App\Repositories;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Interface CategoryInterface
 * @package App\Repositories
 */
interface CategoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

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