<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\VariationTypeForm;
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
     * @var array
     */
    protected $columns;

    /**
     * VariationTypeController constructor.
     * @param VariationType $variationType
     */
    public function __construct(VariationType $variationType)
    {
        $this->variationType = $variationType;
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
                'name' => 'Classes',
                'field' => 'classes'
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
        $variationTypes = $this->variationType->list($search);
        return view('admin.variation-type.list', [
            'data' => $variationTypes,
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
        $idDeleted = $this->variationType->remove($id);
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
        $data = $this->variationType->get($id);

        return view('admin.variation-type.form', [
            'data' => $data
        ]);
    }

    /**
     * @param CategoryForm $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(VariationTypeForm $request)
    {
        $id = $request->route('id', null);
        $data = $request->all();
        $id = $this->variationType->store($id, $data);
        if ($id) {
            session()->flash('success', 'Successfully Saved!');
            return redirect()->route('admin.variation.type.edit', $id);
        }

        return redirect()->back()->withErrors('save_eror', ['There is error in saving']);
    }
}
