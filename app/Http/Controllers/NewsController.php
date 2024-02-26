<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($news_id)
    {
        $likes = Favorite::where('news_id', $news_id)->get();

        $nws =  News::where('id', $news_id)->get()->first();
        return view('pages.detailed', ['news' => $nws, 'likes' => count($likes)]);
    }
}
