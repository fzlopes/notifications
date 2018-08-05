<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	protected $fillable = ['user_id', 'title', 'body']

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    //Autor post
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
