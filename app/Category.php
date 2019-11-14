<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ='categories';
    function post(){
        return $this->hasMany('App\Post','categoryId');
    }
}
