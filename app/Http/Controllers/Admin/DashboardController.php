<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        if (Auth::user() != null and Auth::user()->roles === 2) {
            return view('/admin/dashboard/index');
        }
        else {
            return view('index');
        }
    }
}
