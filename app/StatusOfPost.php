<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusOfPost extends Model
{
    protected $table = 'status_of_posts';
    function post(){
        return $this->hasMany('App\Post','statusOfPostId');
    }
}
