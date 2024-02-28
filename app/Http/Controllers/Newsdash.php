<?php

namespace App\Http\Controllers;
use App\Models\News; 
use Illuminate\Http\Request;

class Newsdash extends Controller
{
    public function index()
    {
        $newsItems = News::all();
        return view('pages.news', compact('newsItems'));
    }
    public function destroy($id)
{
    $newsItem = News::findOrFail($id);
    $newsItem->delete();
    return redirect()->route('news.index')->with('success', 'News item deleted successfully.');
}
}
