<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\IconForm;
use App\Repositories\CategoryInterface;
use App\Repositories\IconInterface;
use App\Repositories\TagInterface;
use App\Repositories\VariationTypeInterface;
use App\Repositories\VersionInterface;
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
     * @var CategoryInterface
     */
    protected $category;

    /**
     * @var TagInterface
     */
    protected $tag;

    /**
     * @var VariationTypeInterface
     */
    protected $variationType;

    /**
     * @var VersionInterface
     */
    protected $version;

    /**
     * @var array
     */
    protected $columns;

    /**
     * IconController constructor.
     * @param IconInterface $icons
     * @param CategoryInterface $category
     * @param TagInterface $tag
     * @param VariationTypeInterface $variationType
     * @param VersionInterface $version
     */
    public function __construct(
        IconInterface $icons,
        CategoryInterface $category,
        TagInterface $tag,
        VariationTypeInterface $variationType,
        VersionInterface $version
    ) {
        $this->icons = $icons;
        $this->category = $category;
        $this->tag = $tag;
        $this->variationType = $variationType;
        $this->version = $version;
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
     * @return array
     */
    public function remove(Request $request)
    {
        $id = $request->route('id');
        $idDeleted = $this->icons->remove($id);
        if ($idDeleted) {
            return ['status' => 'success'];
        }
        return ['status' => 'error'];
    }

    /**
     * @param Request $request
     */
    public function edit(Request $request)
    {
        $id = $request->route('id', null);
        $data = $this->icons->get($id);

        $categories = $this->category->options(null);
        $tags = $this->tag->options(null);
        $variationType = $this->variationType->getPRivateVariationTypeId();
        $versions = $this->version->options(null);

        return view('admin.icons.form', [
            'data' => $data,
            'categories' => $categories,
            'tags' => $tags,
            'variationType' => $variationType,
            'versions' => $versions
        ]);
    }

    /**
     * @param IconForm $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(IconForm $request)
    {
        $id = $request->route('id', null);
        $data = $request->all();
        $id = $this->icons->store($id, $data);
        if ($id) {
            session()->flash('success', 'Successfully Saved!');
            return redirect()->route('admin.icons.edit', $id);
        }

        return redirect()->back()->withErrors('save_eror', ['There is error in saving']);
    }
}
