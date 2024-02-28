<?php

use App\Models\User;
use App\Models\UserInterest;
use Illuminate\Support\Facades\Auth;

function hasInterests(): bool
{
    $interests = UserInterest::where("user_id", Auth::id())->get();
    if (count($interests) !== 0)
        return true;
    return false;
}
