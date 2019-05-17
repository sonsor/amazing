<?php
namespace App\Repositories;


/**
 * Class Icon
 * @package App\Repositories
 */
class Icon implements IconInterface
{
    /**
     * @param string $search
     * @param array $categories
     * @param array $variations
     * @param bool|null $latest
     * @param int $version
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
        int $version,
        ?bool $paid,
        int $page,
        int $limit
    ): array {

        $icons->select('slug', 'name', 'classes');
        $icons->with('variation:id,slug,classes');
        $icons->whereHas('variation', function ($q) use ($variations) {
            $q->whereIn('id', $variations);
        });

        if ($latest !== null) {
            $icons->whereHas('version', function ($q) use ($version) {
                $q->where('id', $version);
            });
        }


        if (count($categories) > 0) {
            $icons->whereHas('categories', function ($q) use ($categories) {
                $q->whereIn('category_id', $categories);
            });
        }

        if ($paid !== null) {
            $icons->where('paid', $paid);
        }

        if ($search) {
            $icons->where('name', 'like', '%' . $search . '%');
            $icons->orWhereHas('tags', function ($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%');
            });
        }

        $count = $icons->count();
        $icons->take($limit);
        $icons->skip($limit * $page);

        return [
            'count' => $count,
            'data' => $icons->get()
        ];

    }

}