<?php

use App\Models\User;
use App\Models\UserInterest;
use Illuminate\Support\Facades\Auth;

function hasInterests(): bool
{
    $interests = UserInterest::where("user_id", Auth::id())->get();
    if ($interests)
        return true;
    return false;
}
