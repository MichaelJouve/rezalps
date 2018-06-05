<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function flux()
    {
        $posts = Post::with('comments.user', 'user')->latest()->get();
        return view('flux', ['posts' => $posts]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function publications()
    {
        $allposts = Post::all();
        $user = User::with('posts.comments', 'posts.user')->withCount('receiver')->find(Auth::id());
        $authUser = Auth::user();

        return view('publications', ['user' => $user, 'allposts' => $allposts, 'authUser' => $authUser]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::all();

        return back();   //before it was a view with posts =>$posts.
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
        $authUser = Auth::user();

//        Post::create(array_merge($validateData, ['authUser_id' => $authUser->id]));

               // ou

                $post = new Post($validateData);
                $post->user_id = $authUser->id;
                $post->save();

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
        $post = Post::findOrFail($id);

        return view('update-publications', ['post' => $post, 'user' => Auth::user()]);
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
        $authUser = Auth::user();
        $post = Post::findOrFail($id);

        $validateData = $this->validate($request, [
            'publication' => 'required'
        ]);

        $post->publication = $validateData['publication'];

        $post->save();

        return view('publications', ['post' => $post, 'user' => $authUser]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('publications');
    }
}
