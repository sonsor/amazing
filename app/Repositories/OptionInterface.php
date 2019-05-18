<?php
namespace App\Repositories;


/**
 * Interface OptionInterface
 * @package App\Repositories
 */
interface OptionInterface
{
    /**
     * @param string $key
     * @return string
     */
    public function get(string $key): string;

    /**
     * @param string $key
     * @param string $value
     */
    public function set(string $key, string $value): void;
}