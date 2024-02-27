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
        $comments = Comment::where('news_id', $news_id)->get();
        $html = '';
        foreach ($comments as $comment) {
            $html .= '<div class="flex mb-4">';
            $html .= '</div>';
        }
        return $html;
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

        @dd($request);

        return back();
    }

}

