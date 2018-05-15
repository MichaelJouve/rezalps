<?php

namespace App\Http\Controllers;

use App\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * CommentController constructor.
     */
    function __construct()
    {
        $this->middleware('auth');
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

    public function createComment(Request $request)
    {
        $validateData = $request->validate([
            'content' => 'required',
            'post_id' => 'required|int'
        ]);

        $user = Auth::user();
        Comment::create(array_merge($validateData, ['user_id' => $user->id]));

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
     * @param  \App\Comment  $comments
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comments
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comments
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
     * @param  \App\Comment  $comments
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return redirect()->route('flux');
    }
}
