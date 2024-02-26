<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use SimplePie\Item;

class HomeController extends Controller
{
    function index()
    {
        $items = News::query()
            ->select('news.*', 'categories.category')
            ->leftJoin('categories', 'news.category', '=', 'categories.id')
            ->orderBy('news.created_at', 'desc')
            ->get()
            ->toArray();

        if (!empty($items)) {
            $mainHero = $items[0];
            $fourHeroes = array_slice($items, 1, 4);
            return view('pages.home', compact('fourHeroes', 'mainHero'));
        }
        return view('pages.home');
    }
}
