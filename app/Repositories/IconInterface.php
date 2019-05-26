<?php
namespace App\Repositories;


use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Interface IconInterface
 * @package App\Repositories
 */
interface IconInterface
{
    /**
     * @param string|null $search
     * @param array $categories
     * @param array $variations
     * @param bool|null $latest
     * @param int $vrsion
     * @param bool|null $paid
     * @param int $page
     * @param int $limit
     * @return array
     */
    public function search(
        ?string $search,
        array $categories,
        array $variations,
        ?bool $latest,
        int $vrsion,
        ?bool $paid,
        int $page,
        int $limit
    ): array;

    /**
     * @param string|null $search
     * @return LengthAwarePaginator
     */
    public function list(?string $search): LengthAwarePaginator;

    /**
     * @param int $id
     * @param string|null $search
     * @return LengthAwarePaginator
     */
    public function variations(int $id, ?string $search): LengthAwarePaginator;

    /**
     * @param int $id
     * @return bool
     */
    public function remove(int $id): bool;

    /**
     * @param int|null $id
     * @param $data
     * @return int
     */
    public function store(?int $id, array $data): int;
}