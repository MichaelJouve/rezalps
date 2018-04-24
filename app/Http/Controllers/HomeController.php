<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('index');
    }

    public function legalNotice()
    {
        return view('legal_notice');
    }

    public function cgu()
    {
        return view('cgu');
    }

    public function aboutUs()
    {
        return view('about-us');
    }
}
