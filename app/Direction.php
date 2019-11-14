<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    protected $table = 'directions';

    function post(){
        return $this->hasMany('App\Post','directionId');
    }
}
