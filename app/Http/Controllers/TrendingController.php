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
        $trending_news = News::withCount(['favorites', 'comments'])
            ->get()
            ->sortByDesc(function ($item) {
                return $item->favorites_count + $item->comments_count;
            })
            ->take(7);

        // for better ordering
        $t = [];
        foreach ($trending_news as $trend) {
            $t [] = $trend;
        }

//        dd($t);
        return $t;
    }
}
