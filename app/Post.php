<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'status',
        'title',
        'body',
        'rate',
        'theme_id'
        ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function theme(){
        return $this->belongsTo(Theme::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
