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
<<<<<<< HEAD
    public function publications()
    {
        return view('publications');
=======

    public function cv()
    {
        return view('cv');
    }

    public function inscription()
    {
        return view('inscription');
>>>>>>> develop
    }
}
