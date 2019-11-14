<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = [
        'userId', 'title','categoryId','regionId','sellerId','postOfTypeId','statusOfPostId','address','area','directionId','contentPost','price','imagePost1',
        'imagePost2','imagePost3','imagePost4','imagePost5','imagePost6','ableComposition'
    ];
}
