<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
        'creator_id',
        'likes',
    ];

    protected function creator(){
        return $this->hasOne(User::class);
    }

    protected function comments(){
        return $this->hasMany(Comments::class);
    }
}
