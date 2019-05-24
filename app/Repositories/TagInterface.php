<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Interface TagInterface
 * @package App\Repositories
 */
interface TagInterface
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
}