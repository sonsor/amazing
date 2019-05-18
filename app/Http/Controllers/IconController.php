<?php

namespace App\Http\Controllers;

use App\Repositories\IconInterface;
use App\Repositories\VariationTypeInterface;
use App\Repositories\VersionInterface;
use Illuminate\Http\Request;

/**
 * Class IconController
 * @package App\Http\Controllers
 */
class IconController extends Controller
{
    /**
     * @var IconInterface
     */
    protected $icons;

    /**
     * @var
     */
    protected $variationType;

    /**
     * @var
     */
    protected $version;

    /**
     * IconController constructor.
     * @param IconInterface $icons
     * @param VariationTypeInterface $variationType
     * @param VersionInterface $version
     */
    public function __construct(
        IconInterface $icons,
        VariationTypeInterface $variationType,
        VersionInterface $version
    ) {
        $this->icons = $icons;
        $this->variationType = $variationType;
        $this->version = $version;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('icons');
    }

    /**
     * @param Request $request
     * @return array
     */
    public function search(Request $request)
    {
        $paid = $request->get('paid', null);
        $categories = $request->get('categories', []);
        $variations = $request->get('variations', []);
        $latest = $request->get('latest', null);
        $search = $request->get('search', '');
        $page = $request->get('page', 0);

        if (count($variations) === 0) {
            $variations = $this->variationType->getPublicVariationTypesId();
        }

        return $this->icons->search(
            $search,
            $categories,
            $variations,
            $latest,
            $this->version->getLatestVersionId(),
            $paid,
            $page,
            100
        );
    }
}
