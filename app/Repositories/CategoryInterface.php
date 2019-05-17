<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 5/17/19
 * Time: 8:35 PM
 */

namespace App\Repositories;


use Illuminate\Database\Eloquent\Collection;

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
}