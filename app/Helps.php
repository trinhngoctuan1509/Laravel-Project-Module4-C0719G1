<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helps extends Model
{
    protected $fillable = [
        'fullName', 'email','phoneNumber','reason','note'
    ];
}
