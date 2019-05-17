<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function examples()
    {
        return view('examples');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }

    public function license()
    {
        return view('license');
    }

    public function privacyPolicy()
    {
        return view('privacy-policy');
    }

    public function tac()
    {
        return view('tac');
    }
}
