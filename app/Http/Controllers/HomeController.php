<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use SimplePie\Item;

class HomeController extends Controller
{
    function index() {
        $items = News::all()->toArray();

        $mainHero = $items[0];
        $fourHeros = array_slice($items, 1, 4);
        return view('pages.home', compact('fourHeros', 'mainHero'));
    }
}
