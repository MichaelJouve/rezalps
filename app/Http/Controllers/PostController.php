<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
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
        $posts = Post::with('comments.user', 'user')->orderBy('created_at', 'desc')->get();
        return view('flux', ['posts' => $posts, 'user' => $user]);
    }


    public function publications()
    {
        $allposts = Post::all();
        $user = User::with('posts.comments', 'posts.user')->find(Auth::id());
        return view('publications', ['user' => $user, 'allposts' => $allposts]);
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

        Post::create(array_merge($validateData, ['user_id' => $user->id]));
/*
        ou

        $post = new Post($validateData);
        $post->user_id = $user->id;
        $post->save();*/

        return back();
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
        $user = Auth::user();
        $post = Post::findOrFail($id);

        return view('update-publications', ['post' => $post, 'user' => $user]);

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
        $user = Auth::user();
        $comment = Comment::findOrFail($id);

        $this->validate($request, [
            'publication' => 'required'
        ]);

        $validateData = $request->all();

        $comment->update($validateData);

        return view('publications', ['comment' => $comment, 'user' => $user]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('publications');
    }
}
