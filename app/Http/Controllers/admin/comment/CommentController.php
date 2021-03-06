<?php

namespace App\Http\Controllers\admin\comment;

use App\Comment;
use App\User;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user() != null and Auth::user()->roles == 2) {
            $posts = Post::simplePaginate(3);
            $comments = Comment::paginate(4);
            $users = User::all();

            return view('admin/comment/index', [
                    'posts' => $posts,
                    'users' => $users,
                    'comments' => $comments
                ]
            );
        }
        else {
            return view('index');
        }
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
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        return view('admin.comment.edit', ['comment'=>$comment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {


        $validateData = $request->validate([
            'content' => 'required',
        ]);
        $comment->update($validateData);
        $request->session()->flash('status', 'Modification validée !');
        return redirect()->route('admin-comments-index');
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        {
            $comment = Comment::findOrFail($id);
            $comment->delete();
            return back();
        }
    }
}
