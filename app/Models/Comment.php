<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    #To get the info of the owner of the comment
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }

    // #To get the categories user a post
    // public function categoryPost()
    // {
    //     return $this->hasMany(CategoryPost::class);
    // }

    // #To get all the comment of a post
    // public function comments()
    // {
    //     return $this->hasMany(Comment::class);
    // }


}


