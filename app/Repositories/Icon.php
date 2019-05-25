<?php
namespace App\Repositories;

use \App\Icon as Model;
use Illuminate\Pagination\LengthAwarePaginator;

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

    /**
     * @param string $slug
     * @param string $variation
     * @return Model
     */
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

    /**
     * @param Model $icon
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function related(Model $icon)
    {
        $related = $this->model->newQuery();
        $tags = $icon->tags()->get()->pluck('id')->toArray();
        $variation = $icon->variation->id;

        $related->with('variation');

        $related->whereHas('variation', function ($q) use ($variation) {
            $q->where('id', $variation);
        });

        $related->whereHas('tags', function ($q) use ($tags) {
            $q->whereIn('tag_id', $tags);
        });

        $related->take(20);

        return $related->get();
    }

    /**
     * @param string|null $search
     * @return LengthAwarePaginator
     */
    public function list(?string $search): LengthAwarePaginator
    {
        $icons = $this->model->newQuery();
        $icons->with([
            'version',
            'variation'
        ]);

        $icons->whereHas('variation', function ($q) {
            $q->where('slug', 'icon');
        });

        if ($search) {
            $icons->when('name', 'like', '%' . $search . '%');
        }

        return $icons->paginate(20);
    }

    /**
     * @param int $id
     * @param string|null $search
     * @return LengthAwarePaginator
     */
    public function variations(int $id, ?string $search): LengthAwarePaginator
    {
        $icons = $this->model->newQuery();
        $icons->with([
            'version',
            'variation'
        ]);

        $icons->where('parent_id', $id);

        $icons->whereHas('variation', function ($q) {
            $q->where('slug', '!=', 'icon');
        });

        if ($search) {
            $icons->when('name', 'like', '%' . $search . '%');
        }

        return $icons->paginate(20);
    }


    /**
     * @param int $id
     * @return bool
     * @throws \Exception
     */
    public function remove(int $id): bool
    {
        /** @var Model $icon */
        $icon = $this->model->findOrFail($id);
        $variations = $icon->children()->get();
        if ($variations->count() > 0) {
            foreach ($variations as $variation) {
                $this->remove($variation->id);
            }
        }

        $icon->description() ? $icon->description()->delete(): '';
        $icon->categories()->detach();
        $icon->tags()->detach();
        $icon->delete();
        return true;
    }
}