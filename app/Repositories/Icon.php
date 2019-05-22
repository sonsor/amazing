<?php
namespace App\Repositories;

use \App\Icon as Model;

/**
 * Class Icon
 * @package App\Repositories
 */
class Icon implements IconInterface
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * Option constructor.
     * @param Model $mode
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * @param string|null $search
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
        ?string $search,
        array $categories,
        array $variations,
        ?bool $latest,
        int $version,
        ?bool $paid,
        int $page,
        int $limit
    ): array {

        $icons = $this->model->newQuery();
        $icons->select('slug', 'name', 'classes', 'variation_id');
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

        if (!empty($search)) {
            $icons->where(function($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
                $query->orWhereHas('tags', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                });
            });
        }

        $count = $icons->count();
        $icons->take($limit);
        $icons->skip($limit * $page);

        //\Log::debug($icons->toSql());

        return [
            'count' => $count,
            'data' => $icons->get()
        ];

    }

    public function one(string $slug, string $variation): Model
    {
        $icon = $this->model->newQuery();
        $icon->with('variation');
        $icon->with('description');
        $icon->with('version');
        $icon->where('slug', $slug);
        $icon->whereHas('variation', function ($q) use ($variation) {
            $q->where('slug', $variation);
        });

        return $icon->get()->first();


    }

}