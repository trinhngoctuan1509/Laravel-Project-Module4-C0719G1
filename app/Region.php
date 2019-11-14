<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table ='regions';

    function post(){
        return $this->hasMany('App\Post','regionId');
    }
}
