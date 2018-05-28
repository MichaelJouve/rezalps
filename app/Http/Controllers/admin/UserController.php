<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public static function isAdmin()
    {


        if (Auth::user()->roles == 2) {
            $posts = Post::all();
            $users = User::all();

            return view('admin', ['posts' => $posts, 'users' => $users ]);
        } else {
            return redirect('admin-connexion');
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showUser($id)
    {

    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::user()->roles == 2) {
            $posts = Post::all();
            $users = User::all();

            return view('admin.user.index', ['posts' => $posts, 'users' => $users]);
        } else {
            return redirect('admin-connexion');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(User $user)
    {
        return view('admin.user.show', ['user' => $user]);
    }

    /**
     * @param User $user
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

        $validateData = $request->validate([
            'name' => 'min:3|max:250',
            'email' => 'email',
            'phone_number' => 'nullable|min:10|max:12',
            'birthdate' => 'nullable|date',
            'city' => 'nullable|max:250',
            'website' => 'nullable|min:3|max:250',
            'job' => 'nullable'
        ]);

        $user->update($validateData);
        $request->session()->flash('status', 'Modification validée !');
        return redirect()->route('admin-user-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $user = User::findOrFail($id);
            $user->delete();
            return back();
        }
    }
}
