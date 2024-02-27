<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
            'comment' => 'required',
            'news_id' => 'required|exists:news,id',
        ]);

        $comment = new Comment();
        $comment->news_id = $request->news_id;
        $comment->comment = $request->comment;
        $comment->user_id = Auth::id();
        $comment->save();

        return back();
    }

}
