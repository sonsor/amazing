<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\TagForm;
use App\Repositories\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class TagController
 * @package App\Http\Controllers\Admin
 */
class TagController extends Controller
{
    /**
     * @var Tag
     */
    protected $tag;

    /**
     * @var array
     */
    protected $columns;

    /**
     * TagController constructor.
     * @param Tag $tag
     */
    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
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
        $tags = $this->tag->list($search);
        return view('admin.tag.list', [
            'data' => $tags,
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
        $idDeleted = $this->tag->remove($id);
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
        $data = $this->tag->get($id);

        return view('admin.tag.form', [
            'data' => $data
        ]);
    }

    /**
     * @param CategoryForm $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TagForm $request)
    {
        $id = $request->route('id', null);
        $data = $request->all();
        $id = $this->tag->store($id, $data);
        if ($id) {
            session()->flash('success', 'Successfully Saved!');
            return redirect()->route('admin.tag.edit', $id);
        }

        return redirect()->back()->withErrors('save_eror', ['There is error in saving']);
    }
}
