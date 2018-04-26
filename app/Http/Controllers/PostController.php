<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
class PostController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function flux()
    {
        $user = Auth::user();
        return view('flux', ['user' => $user]);
    }

    public function publications()
    {
        $user = Auth::user();
        $posts = (new \App\Post)->user();
        $posts = Post::orderBy('created_at', 'desc')->where(['user_id' => $user->id])->get();
        $comments = Comment::orderBy('created_at','desc')->get();


        // keep the data in this view because there is redirection to it.
        return view('publications', ['posts' => $posts, 'comments' => $comments, 'user' => $user]);
    }

    public function index()
    {
        $posts = Post::all();

        return view('publications', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validateData = $request->validate([
            'publication' => 'required'
        ]);
        $user = Auth::user();
        $post = Post::create($validateData);
        $posts = Post::orderBy('created_at','desc')->get();

        return view('publications', ['posts' => $posts, 'user' => $user]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
