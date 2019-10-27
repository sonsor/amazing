<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\IconForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// upload files
// use Illuminate\Support\Facades\Input;
// use Response;

class VariationController extends IconController
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list(Request $request)
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

        return view('admin.icons.variation.list', [
            'data' => $icons,
            'icon' => $id,
            'columns' => $columns
        ]);
    }

    /**
     * @param Request $request
     */
    public function edit(Request $request)
    {
        $id = $request->route('id', null);
        $icon = $request->route('icon', null);
        $data = $this->icons->get($id);

        $categories = $this->category->options(null);
        $tags = $this->tag->options(null);
        $variationTypes = $this->variationType->options(null);
        $versions = $this->version->options(null);

        return view('admin.icons.variation.form', [
            'data' => $data,
            'icon' => $icon,
            'categories' => $categories,
            'tags' => $tags,
            'variationTypes' => $variationTypes,
            'versions' => $versions
        ]);
    }

     // upload files
    // public function stuploadFilesore(Request $request){
    //     $destinationPath = 'icon_file'; // upload path
    //     $extension = Input::file('file')->getClientOriginalExtension(); // getting file extension
    //     $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
    //     $upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path
    //     if ($upload_success) {
    //         return response()->json($fileName, 200);
    //     } else {
    //         return response()->json('error', 400);
    //     }
    // }

    /**
     * @param IconForm $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(IconForm $request)
    {
        // dd($request);
        $id = $request->route('id', null);
        $parent = $request->route('icon', null);
        $data = $request->all();
        $id = $this->icons->store($id, $data);
        if ($id) {
            session()->flash('success', 'Successfully Saved!');
            return redirect()->route('admin.icons.variations.edit', [$parent, $id]);
        }

        return redirect()->back()->withErrors('save_eror', ['There is error in saving']);
    }
}
