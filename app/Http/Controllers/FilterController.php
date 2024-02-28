<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function filter(Request $request)
    {
        $filtered_nws = News::where('category_id', $request->category_id)
            ->with('category')
            ->get();

        return response()->json($filtered_nws);
    }
}
