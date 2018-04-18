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
    public function registration()
    {
        return view('registration');
    }

    public function legal_notice()
    {
        return view('legal_notice');
    }
}
