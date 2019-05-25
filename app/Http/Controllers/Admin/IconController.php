<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\IconInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class IconController
 * @package App\Http\Controllers\Admin
 */
class IconController extends Controller
{
    /**
     * @var Icon
     */
    protected $icons;

    /**
     * @var array
     */
    protected $columns;

    /**
     * IconController constructor.
     * @param Icon $icons
     */
    public function __construct(IconInterface $icons)
    {
        $this->icons = $icons;
        $this->columns = array(
            array(
                'name' => 'ID',
                'field' => 'id'
            ),
            array(
                'name' => 'Name',
                'field' => 'name'
            ),
            array(
                'name' => 'Slug',
                'field' => 'slug'
            ),
            array(
                'name' => 'Clases',
                'field' => 'classes'
            ),
            array(
                'name' => 'Version',
                'field' => 'version.version'
            )
        );
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list(Request $request)
    {
        $search = $request->get('search');
        $icons = $this->icons->list($search);
        return view('admin.icons.list', [
            'data' => $icons,
            'columns' => $this->columns
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function variations(Request $request)
    {
        $id = $request->route('id');
        $search = $request->get('search');
        $icons = $this->icons->variations($id, $search);

        $columns = array_merge(
            $this->columns,
            array(
                array(
                    'name' => 'Variation',
                    'field' => 'variation.name'
                ),
                array(
                    'name' => 'iOS Code',
                    'field' => 'ios'
                ),
                array(
                    'name' => 'Android Code',
                    'field' => 'android'
                )
            )
        );

        return view('admin.icons.variations', [
            'data' => $icons,
            'columns' => $columns
        ]);
    }
}
