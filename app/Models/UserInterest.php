<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInterest extends Model
{
    use HasFactory;

    protected $table = 'user_interests';
    protected $fillable = [
        'user_id',
        'category_id'
    ];

    function user() {
        return $this->belongsTo(User::class);
    }

    function category() {
        return $this->belongsToMany(Category::class);
    }
}
