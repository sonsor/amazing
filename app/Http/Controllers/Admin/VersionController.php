<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\Version;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class VersionController
 * @package App\Http\Controllers\Admin
 */
class VersionController extends Controller
{
    /**
     * @var Version
     */
    protected $version;

    /**
     * VersionController constructor.
     * @param Version $version
     */
    public function __construct(Version $version)
    {
        $this->version = $version;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function list(Request $request)
    {
        $search = $request->get('search');
        $versions = $this->version->list($search);
        return view('admin.version.list', compact('versions'));
    }
}
