<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FeedLink;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() {
        $feed_links = FeedLink::all();
        $categories = Category::all();
        return view('pages.dashboard', compact('feed_links', 'categories'));
    }
}
