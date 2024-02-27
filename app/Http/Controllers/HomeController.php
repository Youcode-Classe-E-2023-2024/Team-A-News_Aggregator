<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use SimplePie\Item;

class HomeController extends Controller
{
    function index()
    {
        $items = News::query()
            ->select('news.*', 'categories.category')
            ->leftJoin('categories', 'news.category_id', '=', 'categories.id')
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

    function getCachedData()
    {
        $userId = Auth::id();
        $user = User::with('userinterest')->find($userId);

        $preferredCategoryIds = isset($user) ? $user->userinterest->pluck('category_id')->flatten()->toArray() : [];

        if (count($preferredCategoryIds) === 0) {
            $preferredCategoryIds = Category::all()->pluck('id')->toArray();
            // here to make the checker true
        }
        $cacheKey = Auth::check() ? "user_{$user->id}_categories_" . implode(',', $preferredCategoryIds) : '';
        $filteredNews = Cache::get($cacheKey);
        if (!$filteredNews) {
            $filteredNews = News::whereHas('category', function ($query) use ($preferredCategoryIds) {
                $query->whereIn('id', $preferredCategoryIds);
            })
                ->with('category')
                ->get()
                ->toArray();

            Cache::put($cacheKey, $filteredNews, 600); // Cache for 600 minutes
        }
        return $filteredNews;
    }
}
