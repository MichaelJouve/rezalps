<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Barryvdh\Reflection\DocBlock\Tag\AuthorTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
class PostController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return Post::all();
    }

    public function show(Article $article)
    {
        return $article;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Post::create($request->all());
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
        $post = Post::findOrFail($id);
        $post->update($request->all());

        return $post;
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return 204;
    }
}
