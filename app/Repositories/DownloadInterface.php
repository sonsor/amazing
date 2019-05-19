<?php
namespace App\Repositories;


/**
 * Interface DownloadInterface
 * @package App\Repositories
 */
interface DownloadInterface
{
    /**
     * @param string $name
     * @param string $email
     * @return int
     */
    public function save(string $name, string $email): int;
}