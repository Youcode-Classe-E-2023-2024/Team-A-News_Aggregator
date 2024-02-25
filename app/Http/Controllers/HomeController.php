<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use SimplePie\Item;

class HomeController extends Controller
{
    function index()
    {
        $items = News::with('category')
            ->get()
            ->toArray();

        if (!empty($items)) {
            $mainHero = $items[0];
/*            dd($mainHero);*/
            $fourHeroes = array_slice($items, 1, 4);
            return view('pages.home', compact('fourHeroes', 'mainHero'));
        }
        return view('pages.home');
    }
}
