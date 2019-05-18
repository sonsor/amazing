<?php
namespace App\Repositories;


/**
 * Interface ContactInterface
 * @package App\Repositories
 */
interface ContactInterface
{
    /**
     * @param string $firstName
     * @param string $surname
     * @param string $email
     * @param string|null $phoneNo
     * @param string $message
     * @return int
     */
    public function save(
        string $firstName,
        string $surname,
        string $email,
        ?string $phoneNo,
        string $message
    ): int;
}