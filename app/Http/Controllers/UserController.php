<?php

namespace App\Http\Controllers;

use App\User;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function network()
    {
        $user = Auth::user();

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
        $authUser = User::with('posts')->findOrFail($id);

        return view('publications', ['authUser' => $authUser]);
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

        $validateData = $request->validate([
            'current-password' => 'required|string',
            'new-password' => 'required|string|min:6|confirmed',
            'new-password_confirmation' => 'required|string|min:6',]);
         dd($validateData);

        // if ( $request->get('current-password') === $user->password)
        // {
        // $validateData = $request->validate([
        //    'new-password' => 'required|string|min:6|confirmed',
        //    'new-password_confirmation' => 'required|string|min:6',
        // ]);
        // }

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

    public function updateCV(Request $request)
    {
        $cv = $request->cv->store('usercv', 'public');

        $user = Auth::user();
        $user->cv = $cv;
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
