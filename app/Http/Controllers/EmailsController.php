<?php

namespace App\Http\Controllers;

use App\Mail\mailTemplate;
use App\Models\News;
use App\Models\User;
use App\Models\UserInterest;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailsController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.emails', compact('users'));
    }
    function breakingNewsForOne(Request $request) {
        $this->getWhatUserLikes($request->user_id);
    }

    function getWhatUserLikes($user_id): \Illuminate\Database\Eloquent\Collection
    {
        if (!hasInterests()) {
        dd($user_id);
            $news = News::all();
        } else {
            $categories = UserInterest::where('user_id', $user_id)
                ->get();
            $news = News::whereHas('category', function ($query) use ($categories) {
                $query->whereIn('id', $categories);
            });
        }
        return $news;
    }

    function sendMail($user_id)
    {
        $schedule = app(Schedule::class);
        $schedule->call(function () use ($user_id) {
            $news = $this->getWhatUserLikes($user_id);
            $email = User::find($user_id)->email;
            Mail::to($email)
                ->send(new mailTemplate());
        })->everySecond();
    }
}
