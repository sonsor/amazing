<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\VariationType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class VariationTypeController
 * @package App\Http\Controllers\Admin
 */
class VariationTypeController extends Controller
{
    /**
     * @var VariationType
     */
    protected $variationType;

    /**
     * VariationTypeController constructor.
     * @param VariationType $variationType
     */
    public function __construct(VariationType $variationType)
    {
        $this->variationType = $variationType;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list(Request $request)
    {
        $search = $request->get('search');
        $variationTypes = $this->variationType->list($search);
        return view('admin.variation-type.list', compact('variationTypes'));

    }
}
