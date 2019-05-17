<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

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
}