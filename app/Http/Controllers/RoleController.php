<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RoleController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public static function isAdmin()
    {
        $authUser = Auth::user();

        if ($authUser != null and $authUser->roles == 2) {
            $posts = Post::all();
            $users = User::simplePaginate(2);

            return view('admin', ['posts' => $posts, 'users' => $users, 'authUser' => $authUser ]);
        }
        else {
            return view('index');
        }
    }

    public static function listPosts()
    {
        $authUser = Auth::user();
        $posts = Post::simplePaginate(1);
        $comments = Comment::paginate(10);
        $users = User::all();

        return view('admin-posts', [
                'posts' => $posts,
                'users' => $users,
                'authUser' => $authUser,
                'comments' => $comments
            ]
        );
    }

    public static function listComments()
    {
        $authUser = Auth::user();
        $posts = Post::simplePaginate(1);
        $comments = Comment::paginate(10);
        $users = User::all();

        return view('admin-comments', [
                'posts' => $posts,
                'users' => $users,
                'authUser' => $authUser,
                'comments' => $comments
            ]
        );
    }
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showUser($id)
    {
        $authUser = Auth::user();
        $user = User::where('id', $id)->get();
        return view('show-user', ['user' => $user, 'authUser' => $authUser ]) ;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        //
    }
}
