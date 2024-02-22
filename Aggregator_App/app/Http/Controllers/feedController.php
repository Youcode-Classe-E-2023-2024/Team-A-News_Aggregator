<?php

namespace App\Http\Controllers;


use App\Models\FeedLink;
use Illuminate\Http\Request;

class feedController extends Controller
{
    function store(Request $request) {
        $request->validation([
           'link' => 'required|url'
        ]);

        FeedLink::create($request);

        $this->storeLinkContent($request->link);

    }

    function storeLinkContent($link) {

/*        $feed = \Feeds::make('http://feed/url/goes/here');*/

    }
}
