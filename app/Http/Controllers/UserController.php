<?php

namespace App\Http\Controllers;

use App\User;
use App\Relationship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function network()
    {
        $user = Auth::user();
        $user->load('sender');

        return view('network', ['user' => $user]);
    }

    public function settings()
    {
        $user = Auth::user();

        return view('settings', ['user' => $user]);
    }

    public function cv()
    {
        $user = Auth::user();

        return view('cv', ['user' => $user]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function publications($id)
    {
        $user = User::with('posts')->findOrFail($id);

        return view('publications', ['user' => $user]);
    }

    public function userPublications($id)
    {
        $user = User::with('posts.comments', 'posts.user')->findOrFail($id);
        /**$user = User::where($user->avatar == $id)->get();*/

        return view('publications', ['user' => $user]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();

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
        return view('settings', ['user' => $user]);
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        if (! Hash::check($request->input('password'), $user->password)) {
            return back()
                ->withErrors(['password' => 'Mot de passe incorrect'])
                ->withInput();
        }

        $validateData = $request->validate([
            'password' => 'required|string',
            'new_password' => 'required|string|min:6|confirmed',
            ]);


        $user->password = $validateData['new-password'];
        $user->save();
        //$user->update($validateData);
        return view('settings', ['user' => $user]);
    }

    public function updateApropos(Request $request)
    {
        $user = Auth::user();
        $validateData = $request->validate([
            'description' => 'max:16000',
        ]);

        $user->update($validateData);
        return view('cv', ['user' => $user]);
    }

    public function updateAvatar(Request $request)
    {
        $avatar = $request->avatar->store('useravatar', 'public');

        $user = Auth::user();
        $user->avatar = $avatar;
        $user->save();

        return view('settings', ['user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
