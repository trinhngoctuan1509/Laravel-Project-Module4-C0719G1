<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traffic extends Model
{
    protected $table = 'traffic';
    protected $fillable = ['ip','time'];
}
