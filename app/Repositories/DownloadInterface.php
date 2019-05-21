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
     * @return \App\Downloads
     */
    public function save(string $name, string $email): \App\Downloads;

    /**
     * this function is use to increase count of downloads
     */
    public function increase(): void;

    /**
     * @param int $id
     * @return \App\Downloads
     */
    public function get(int $id): \App\Downloads;
}