<?php

namespace App\Http\Controllers;
use App\Repositories\DownloadInterface;
use Illuminate\Http\Request;

/**
 * Class DownloadsController
 * @package App\Http\Controllers
 */
class DownloadsController extends Controller
{
    /**
     * @var DownloadInterface
     */
    protected $download;

    /**
     * DownloadsController constructor.
     * @param DownloadInterface $download
     */
    public function __construct(DownloadInterface $download)
    {
        $this->download = $download;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('download');
    }

    /**
     * @param Request $request
     * @return array
     */
    public function save(Request $request)
    {
        $data = $request->all([
            'name',
            'email'
        ]);

        $this->download->increase();

        $id = call_user_func_array(array(
            $this->download,
            'save'
        ), $data);

        return $id ? ['message' => 'success']: ['message' => 'error'];
    }
}
