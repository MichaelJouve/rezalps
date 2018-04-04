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
        return view('inscription');
    }
    public function cv()
    {
        return view('cv');
    }

    public function inscription()
    {
        return view('inscription');
    }
    public function publications()
    {
        return view('publications');
    }
    public function flux()
    {
        return view('flux');
    }
    public function medias()
    {
        return view('medias');
    }
    public function reseau()
    {
        return view('reseau');
    }
}
