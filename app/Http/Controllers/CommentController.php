<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\News;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function show()
    {
        $comments = Comment::all();
        return view('pages.detailed',compact('comments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'post_id' => 'required|exists:posts,id',
        ]);

        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->news_id = $request->news_id;
        $comment->comment = $request->coment;
        $comment->save();

        return back();
    }
}
