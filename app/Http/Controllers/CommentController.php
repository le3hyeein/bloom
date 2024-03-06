<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(Request $request, $id) {
        return view('layouts\comment', [
            "posts" => post::where('id_photo', $id)->first()
        ]);
    }

    public function postComments(Request $request, post $post)
    {
        $comment = New Comment;
        $comment->content = $request->content;
        $comment->user_id = auth()->user()->id;
        $comment->id_photo = $post->id;
        $comment->username = auth()->user()->username;

        $post->comments()->save($comment);

        return back()->with('notif', 'Komentar terkirim');
    }

    // public function show($postId)
    // {
    //     $post = Post::find($postId);

    //     return view('posts.show', compact('post'));
    // }
}
