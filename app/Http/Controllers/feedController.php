<?php

namespace App\Http\Controllers;


use App\Models\FeedLink;
use App\Models\News;
use Illuminate\Http\Request;
use Vedmant\FeedReader\Facades\FeedReader;

class feedController extends Controller
{
    function store(Request $request)
    {

        $request->validate([
            'link' => 'required|url',
            'category' => 'required'
        ]);
        $f = FeedReader::read($request->link);
        $result = [
            'title' => $f->get_title(),
            'description' => $f->get_description(),
            'link' => $f->get_link(),
            'image_url' => $f->get_image_url(),
        ];

        $feed = FeedLink::create($result);
        $this->storeLinkContent($f, $result, $feed->id, $request->category);
        return back();
    }

    function storeLinkContent($f, $result, $feed_id, $category)
    {
        foreach ($f->get_items(0, $f->get_item_quantity()) as $item) {
            $i['title'] = $item->get_title();
            $i['description'] = $item->get_description();
            $i['content'] = $item->get_content();
            $i['thumbnail'] = $item->get_thumbnail();
            $i['date'] = $item->get_date();
            $i['link'] = $item->get_link();

            News::create([
                'title' => $i['title'],
                'description' => $i['description'],
                'category' => $category,
                'thumbnail' => isset($i['thumbnail']['url']) ? $i['thumbnail']['url'] : '',
                'date' => $i['date'],
                'link' => $i['link'],
                'feed_id' => $feed_id
            ]);


            $result['items'][] = $i;
        }
    }

    function destroy($id)
    {
        $feed = FeedLink::find($id);

        $feed->delete();
        return back();
    }
}
