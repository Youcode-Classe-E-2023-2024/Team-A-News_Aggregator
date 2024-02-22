<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'content_id'
    ];
}
