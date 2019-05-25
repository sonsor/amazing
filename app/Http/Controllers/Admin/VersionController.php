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
     * @var array
     */
    protected $columns;

    /**
     * VersionController constructor.
     * @param Version $version
     */
    public function __construct(Version $version)
    {
        $this->version = $version;
        $this->columns = array(
            array(
                'name' => 'ID',
                'field' => 'id'
            ),
            array(
                'name' => 'Version',
                'field' => 'version'
            ),
            array(
                'name' => 'Change Log',
                'field' => 'changeLog'
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
        $versions = $this->version->list($search);
        return view('admin.version.list', [
            'data' => $versions,
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
        $idDeleted = $this->version->remove($id);
        if ($idDeleted) {
            return ['status' => 'success'];
        }
        return ['status' => 'error'];
    }
}
