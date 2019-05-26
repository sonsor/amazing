<?php
/**
 * Created by PhpStorm.
 * User: wasif
 * Date: 5/26/19
 * Time: 3:42 PM
 */

namespace App\Repositories;
use \App\Description as Model;

/**
 * Interface DescriptionInterface
 * @package App\Repositories
 */
interface DescriptionInterface
{
    /**
     * @param int|null $id
     * @param array $data
     * @return Model
     */
    public function store(?int $id, array $data): Model;

}