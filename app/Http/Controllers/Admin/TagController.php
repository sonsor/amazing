<?php

namespace App\Http\Controllers\Admin;

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
     * TagController constructor.
     * @param Tag $tag
     */
    public function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list(Request $request)
    {
        $search = $request->get('search');
        $tags = $this->tag->list($search);
        return view('admin.tag.list', compact('tags'));
    }
}
