<?php

namespace App\Http\Controllers;
use App\Repositories\DownloadInterface;
use Illuminate\Http\Request;
use App\Http\Requests\DownloadForm;

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
        return view('download.form');
    }

    /**
     * @param Request $request
     * @return array
     */
    public function save(DownloadForm $request)
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
        
        return redirect()->route($id ? 'download.success': 'download.error');
    }

    public function thankyou()
    {
        return view('download.thankyou');
    }

    public function success()
    {
        return view('download.success');
    }

}
