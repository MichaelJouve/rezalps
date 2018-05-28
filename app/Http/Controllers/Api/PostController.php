<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function show(Post $post)
    {
        return $post;
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'publication' => 'required',
//            'user_id' => 'required'
        ]);
        $authUser = Auth::user();

        $post = new Post($validateData);
        $post->user_id = $authUser->id;
        $post->save();

        // thoses tow lines was the automatics.
//        return back();
//        $post = Post::create($request->all());

        return response()->json($post, 201);
    }

    /**
     * @param Request $request
     * @param Post $post
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Post $post)
    {
      //  $authUser = Auth::user();
        $validateData = $this->validate($request, [
            'publication' => 'required',
            'user_id' => 'required'
        ]);

        $post->publication = $validateData['publication'];
        $post->save();

      //  $post->update($request->all());  lines added automaticly

        return response()->json($post, 200);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function delete(Post $post)
    {
        $post->delete();

        return response()->json(null, 204);
    }
}
