<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()) {
            return redirect('flux');
        }
        else{
            return view('index');
        }
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
