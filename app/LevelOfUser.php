<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LevelOfUser extends Model
{
    protected $table = "level_of_users";
    protected $fillable=[
        'userLevelOfCode','userLevelOfName',
    ];
}
