<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 5/17/19
 * Time: 8:36 PM
 */

namespace App\Repositories;


/**
 * Interface VersionInterface
 * @package App\Repositories
 */
interface VersionInterface
{

    /**
     * @return int
     */
    public function getLatestVersionId(): int;

    /**
     * @param string|null $search
     * @return LengthAwarePaginator
     */
    public function list(?string $search): LengthAwarePaginator;
}