<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class CategoryController
 * @package App\Http\Controllers\Admin
 */
class CategoryController extends Controller
{
    /**
     * @var Category
     */
    protected $category;

    /**
     * @var array
     */
    protected $columns;

    /**
     * CategoryController constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
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
                'name' => 'Parent',
                'field' => 'parent.name'
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
        $categories = $this->category->list($search);
        return view('admin.category.list', [
            'data' => $categories,
            'columns' => $this->columns
        ]);
    }
}
