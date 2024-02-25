<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;


class FavoriteController extends Controller
{
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
