<?php
namespace App\Repositories;


/**
 * Interface IconInterface
 * @package App\Repositories
 */
interface IconInterface
{
    /**
     * @param string $search
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
        string $search,
        array $categories,
        array $variations,
        ?bool $latest,
        int $vrsion,
        ?bool $paid,
        int $page,
        int $limit
    ): array
}