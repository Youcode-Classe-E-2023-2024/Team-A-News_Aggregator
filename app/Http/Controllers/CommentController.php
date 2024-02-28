<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentController extends Controller
{
    public function show($news_id)
    {
        $comments = Comment::where('news_id', $news_id)
            ->orderBy('id', 'DESC')
            ->with('user')->get();
        return json_encode($comments);
    }

    public function store(Request $request)
    {
//        \Log::info($request->all());


        $request->validate([
            'comment' => 'required',
            'newsId' => 'required|exists:news,id',
        ]);

        $comment = new Comment();
        $comment->news_id = $request->input('newsId');
        $comment->comment = $request->input('comment');
        $comment->user_id = Auth::id();
        $comment->save();
        die();
//        return back();
    }

}

