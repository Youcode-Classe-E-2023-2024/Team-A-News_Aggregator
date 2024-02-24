<?php

namespace App\Http\Controllers;

use App\Models\UserInterest;
//use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function submit_interests(Request $request)
    {
        $u = UserInterest::where('user_id', Auth::user()->id)->get();

        if (isset($request->interests)) {
            if (count($request->interests) <= 4 || count($u) <= 4 ) {
                return back()->with('error', 'error, user already have enough interests');
            }
            Validator::make($request->all(), [
                'interests' => 'array|max:4',
                'interests.*' => 'numeric|exists:user_interest,category_id'
            ]);

            foreach ($request->interests as $interest)
            UserInterest::create([
                'user_id' => Auth::user()->id,
                'category_id' => $interest
            ]);
            return back()->with('success', 'interests added successfully');
        } else {
            return back()->with('error', 'error, please select interests');
        }
    }
};
