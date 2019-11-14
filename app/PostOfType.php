<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostOfType extends Model
{
    protected $table = 'post_of_types';
    function post(){
        return $this->hasMany('App\Post','postOfTypeId');
    }
}
