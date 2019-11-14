<?php

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/28/2018
 * Time: 1:46 PM
 */

namespace App\Repositories\Impl;

use App\Post;
use App\Repositories\PostRepository;
use App\Repositories\Eloquent\EloquentRepository;

class PostRepositoryImpl extends EloquentRepository  implements PostRepository
{
    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = Post::class;
        return $model;
    }

    public function searchPostAdvanced($searchConditionsPostAdvanced)
    {
        $categoryId = $searchConditionsPostAdvanced['categoryId'];
        $directionId = $searchConditionsPostAdvanced['directionId'];
        $postOfTypeId = $searchConditionsPostAdvanced['postOfTypeId'];
        $regionId = $searchConditionsPostAdvanced['regionId'];
        $sellerId = $searchConditionsPostAdvanced['sellerId'];
        $statusId = $searchConditionsPostAdvanced['statusId'];
        $areaRangeId = $searchConditionsPostAdvanced['areaRangeId'];
        $priceRangeId = $searchConditionsPostAdvanced['priceRangeId'];
        $ableComposition = $searchConditionsPostAdvanced['ableComposition'];


        //        **************** Lọc Theo Category ******************
        $posts = $this->model::where('categoryId','=',$categoryId)->get();


        //        ***** Lọc Theo Hướng, Loại Tin, Khu Vực, Người Đăng Tin, Trạng Thái Sử Dụng *****
        if($directionId!=0){
            $posts = $posts->where('directionId','=',$directionId);
        };
        if($postOfTypeId!=0){
            $posts = $posts->where('postOfTypeId','=',$postOfTypeId);
        };
        if($regionId!=0){
            $posts = $posts->where('regionId','=',$regionId);
        };
        if($sellerId!=0){
            $posts = $posts->where('sellerId','=',$sellerId);
        };
        if($statusId!=0){
            $posts = $posts->where('statusId','=',$statusId);
        };


        //        **************** Lọc Theo Khung Giá *******************
        if($priceRangeId!=0){
        switch ($priceRangeId) {
            case 1:
                $posts = $posts->where('price','<',5);
                break;
            case 2:
                echo $posts = $posts->where('price','>=',5)->where('price','<=',10);
                break;
            case 3:
                $posts = $posts->where('price','>=',10)->where('price','<=',20);
                break;
            case 4:
                $posts = $posts->where('price','>=',20)->where('price','<=',50);
                break;
            case 5:
                $posts = $posts->where('price','>',50);
                break;
            }
        };


        //        **************** Lọc Theo Khung Diện Tích *******************
        if($areaRangeId!=0){
            switch ($areaRangeId) {
                case 1:
                    $posts = $posts->where('area','<',100);
                    break;
                case 2:
                    echo $posts = $posts->where('area','>=',100)->where('area','<=',200);
                    break;
                case 3:
                    $posts = $posts->where('area','>=',200)->where('area','<=',300);
                    break;
                case 4:
                    $posts = $posts->where('area','>',300);
                    break;
            }
        };


        //        **************** Lọc Theo Có Thể Trả Giá *******************
        if($ableComposition){
            $posts = $posts->where('ableComposition','=',1);
        }else{
            $posts = $posts->where('ableComposition','=',0);
        }

        return $posts;

    }

    // Lấy Tất cả các các bài đăng -- Nối bảng
    public function getAllPost()
    {
        // TODO: Implement getAllPost() method.
        $model = $this->model->with('categories', 'region', 'seller', 'post_of_types',
            'status_of_posts', 'directions')->get();

        return $model;
    }

    public function searchPostBasic($data)
    {
        // TODO: Implement searchPostBasic() method.
        $result = $this->model->with('categories', 'region', 'seller', 'post_of_types',
            'status_of_posts', 'directions')
            ->where('regionId', 'like', '%' . $data['region'] . '%')
            ->where(function ($query) use ($data) {
                $query->where('title', 'like', '%' . $data['wordSearch'] . '%');
                $query->orwhere('contentPost', 'like', '%' . $data['wordSearch'] . '%');
            })
            ->where('categoryId', 'like', '%' . $data['category'] . '%')
            ->get();
        return $result;
    }
}
