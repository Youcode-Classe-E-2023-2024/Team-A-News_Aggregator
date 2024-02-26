<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'feed_id',
        'link',
        'date',
        'category_id'
    ];

    function category() {
        return $this->belongsTo(Category::class);
    }
}
