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
        'category'
    ];

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
}
