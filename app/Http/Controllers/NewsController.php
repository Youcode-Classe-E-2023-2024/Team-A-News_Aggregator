<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($news_slug)
    {
        $news =  News::where('slug', $news_slug)->get()->first();
        $likes = Favorite::where('news_id', $news->id)->get();

        return view('pages.detailed', ['news' => $news, 'likes' => count($likes)]);
    }
}
