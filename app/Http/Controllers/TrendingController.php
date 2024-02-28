<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\News;
use Illuminate\Http\Request;

class TrendingController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.trending', ['trends' => $this->trends()]);
    }

    public function trends()
    {
        $news = News::withCount(['favorites', 'comments'])->get()
                    ->join('categories', 'favorites.category_id', '=', 'categories.category')
                    ->get();
        
        $trending_news = $news->sortByDesc(function ($item) {
            return $item->favorites_count + $item->comments_count;
        })->take(4);
        dd($trending_news);
    }
}
