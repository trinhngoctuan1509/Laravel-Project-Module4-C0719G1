<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post_view extends Model
{
    protected $table = 'post_view';
    protected $fillable = ['posts_id','ip'];

    public function post(){
        return $this->belongsTo('App\Post','posts_id');
    }
}
