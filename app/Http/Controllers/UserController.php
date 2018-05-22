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
//        $user->findFollowed(10, ['created_at', 'desc'], $queries = array());

        $sugUser = User::doesntHave('sender')->get();

        return view('network', ['user' => $user, 'sugUser' => $sugUser, 'authUser' => $user]);
    }

    public function userNetwork($id)
    {
        $authUser = Auth::user();
        $user = User::findOrFail($id);
        $sugUser = User::doesntHave('sender')->get();

        return view('network', ['user' => $user, 'sugUser' => $sugUser, 'authUser' => $authUser]);
    }

    public function settings()
    {
        $authUser = Auth::user();

        return view('settings', ['authUser' => $authUser, 'user' => $authUser]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function cv()
    {
        $authUser = Auth::user();

        return view('cv', ['authUser' => $authUser, 'user' => $authUser]);
    }

    public function userCv($id)
    {
        $authUser = Auth::user();
        $user = User::findOrFail($id);

        return view('cv', ['authUser' => $authUser, 'user' => $user]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function publications($id)
    {
        $user = User::with('posts', 'relationships')->findOrFail($id);


        return view('publications', ['user' => $user]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userPublications($id)
    {
        $user = User::with('posts.comments', 'posts.user', 'sender')->withCount('receiver')->findOrFail($id);
        $authUser = Auth::user();
        $following = Relationship::where('receiver_id', $user->id)->where('sender_id', $authUser->id)->first();

        return view('publications', ['user' => $user, 'authUser' => $authUser, 'id' => $id, 'following' => $following]);
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
        $authUser = Auth::user();

        $validateData = $request->validate([
            'name' => 'min:3|max:250',
            'email' => 'email',
            'phone_number' => 'nullable|min:10|max:12',
            'birthdate' => 'nullable|date',
            'city' => 'nullable|max:250',
            'website' => 'nullable|min:3|max:250',
            'job' => 'nullable'
        ]);

        $authUser->update($validateData);
        return view('settings', ['authUser' => $authUser, 'user' => $authUser]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function updatePassword(Request $request)
    {
        $authUser = Auth::user();

        if (!Hash::check($request->input('password'), $authUser->password)) {
            return back()
                ->withErrors(['password' => 'Mot de passe incorrect'])
                ->withInput();
        }

        $validateData = $request->validate([
            'password' => 'required|string',
            'new_password' => 'required|string|min:6|confirmed',
        ]);


        $authUser->password = $validateData['new-password'];
        $authUser->save();
        //$user->update($validateData);
        return view('settings', ['authUser' => $authUser, 'user' => $authUser]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updateApropos(Request $request)
    {
        $authUser = Auth::user();
        $validateData = $request->validate([
            'description' => 'max:16000',
        ]);

        $authUser->update($validateData);
        return view('cv', ['authUser' => $authUser, 'user' => $authUser]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updateAvatar(Request $request)
    {
        $avatar = $request->avatar->store('useravatar', 'public');

        $authUser = Auth::user();
        $authUser->avatar = $avatar;
        $authUser->save();

        return view('settings', ['authUser' => $authUser, 'user' => $authUser]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function updateCV(Request $request)
    {
        $cv = $request->cv->store('usercv', 'public');

        $authUser = Auth::user();
        $authUser->cv = $cv;
        $authUser->save();

        return view('settings', ['authUser' => $authUser, 'user' => $authUser]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
