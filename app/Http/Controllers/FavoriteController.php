<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = DB::table('favorites')
            ->join('news', 'favorites.news_id', '=', 'news.id')
            ->join('categories', 'news.category_id', '=', 'categories.id')
            ->select('news.*', 'categories.category')
            ->where('favorites.user_id', auth()->user()->id)
            ->get();
        return view('pages.favorite', ['favorites' => $favorites]);
    }

    public function like(Request $request)
    {
        $is_liked = Favorite::where('news_id', $request->news_id)
                                    ->where('user_id', $request->user_id)
                                    ->first();

        if (!$is_liked) {
            $favorite = new Favorite();
            $favorite->user_id = $request->user_id;
            $favorite->news_id = $request->news_id;
            $favorite->save();

            return response()->json([
                'message' => 'Favorite liked successfully!'
            ], 200);
        } else {
            return response()->json([
                'message' => 'You have already liked this news.'
            ]);
        }
    }



    public function unlike(Request $request)
    {
        $favorite = Favorite::where('news_id', $request->news_id)
                            ->where('user_id', $request->user_id)
                            ->first();

        if ($favorite) {
            $favorite->delete();

            return response()->json([
                'message' => 'Favorite unliked (removed) successfully!'
            ], 200);
        } else {
            return response()->json([
                'message' => 'You have not liked this news.'
            ]);
        }
    }



    public function is_liked(Request $request)
    {
        $likes_count = Favorite::where('news_id', $request->news_id)->get();
        $f = Favorite::where('news_id', $request->news_id)->where('user_id', $request->user_id)->get();
        if (count($f) > 0) {
            return response()->json([
                'isliked' => true,
                'likes' => count($likes_count)
            ]);
        } else {
            return response()->json([
                'isliked' => false,
                'likes' => count($likes_count)
            ]);
        }
    }
}
