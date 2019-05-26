<?php

namespace App\Http\Controllers;

use App\Repositories\DownloadInterface;
use Illuminate\Http\Request;
use App\Http\Requests\DownloadForm;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Events\DownloadFormSubmitted;


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

        $download = call_user_func_array(array(
            $this->download,
            'save'
        ), $data);


        \Log::debug("download : " . $download->id);;
        if ($download->id > 0) {
            event(new DownloadFormSubmitted($download));
            return redirect()->route('download.success');
        }
        \Log::debug("download : " . $download->id);;
        return redirect()->route('download.error');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function thankyou()
    {
        return view('download.thankyou');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function success()
    {
        return view('download.success');
    }

    public function error()
    {
        return 'errror';
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    public function download(Request $request)
    {
        $token = $request->route('token');
        if (!$this->download->verify($token)) {
            return redirect()->route('download.error');
        }

        $storagePath = \Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
        $fileName = 'test.json';

        return response()->download($storagePath . $fileName, $fileName);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function validateToken(Request $request)
    {
        $token = $request->route('token');
        if (!$this->download->verify($token)) {
            return redirect()->route('download.error');
        }

        Session::flash('download.file.token', $token);
        return redirect()->route('download.thankyou');
    }
}
