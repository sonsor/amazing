<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CategoryForm;
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

    /**
     * @param Request $request
     * @return array
     */
    public function remove(Request $request)
    {
        $id = $request->route('id');
        $idDeleted = $this->category->remove($id);
        if ($idDeleted) {
            return ['status' => 'success'];
        }
        return ['status' => 'error'];
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $id = $request->route('id', null);
        $data = $this->category->get($id);
        $options = $this->category->options($id);

        return view('admin.category.form', [
            'data' => $data,
            'categories' => $options
        ]);
    }

    /**
     * @param CategoryForm $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryForm $request)
    {
        $id = $request->route('id', null);
        $data = $request->all();
        $id = $this->category->store($id, $data);
        if ($id) {
            session()->flash('success', 'Successfully Saved!');
            return redirect()->route('admin.category.edit', $id);
        }

        return redirect()->back()->withErrors('save_eror', ['There is error in saving']);
    }
}
