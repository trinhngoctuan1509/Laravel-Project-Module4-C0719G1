<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $fillable = [
        'userId', 'title','categoryId','regionId','sellerId','postOfTypeId','statusOfPostId','address','area','directionId','contentPost','price','imagePost1',
        'imagePost2','imagePost3','imagePost4','imagePost5','imagePost6','ableComposition','post_availability_status_id'
    ];
    public function categories(){
        return $this->belongsTo('App\Category','categoryId')->select(array('id', 'categoryName'));
    }
    public function region(){
        return $this->belongsTo('App\Region','regionId')->select(array('id', 'regionName'));
    }
    public function seller(){
        return $this->belongsTo('App\Seller','sellerId')->select(array('id', 'sellerName'));
    }
    public function post_of_types(){
        return $this->belongsTo('App\PostOfType','postOfTypeId')->select(array('id', 'postOfTypeName'));
    }
    public function status_of_posts(){
        return $this->belongsTo('App\StatusOfPost','statusOfPostId')->select(array('id', 'statusOfPostName'));
    }
    public function directions(){
    return $this->belongsTo('App\Direction','directionId')->select(array('id', 'directionName'));
    }
    public function user(){
        return $this->belongsTo('App\User','userId');
    }

    public function post_availability_status(){
        return $this->belongsTo('App\PostAvailabilityStatus','post_availability_status_id');
    }

//    public function post_view(){
//        return $this->hasMany('App\post_view','posts_id');
//    }

}
