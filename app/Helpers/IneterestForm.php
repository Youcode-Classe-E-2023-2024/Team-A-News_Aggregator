<?php

use App\Models\User;
use App\Models\UserInterest;
use Illuminate\Support\Facades\Auth;

function hasInterests(): bool
{
    if(Auth::check()) {
        $interests = UserInterest::where("user_id", Auth::id())->get();
        if($interests)
            return true;
    }
    return false;
}
