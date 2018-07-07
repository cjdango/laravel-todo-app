<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->user_id = auth()->id();
        });
    }
}
