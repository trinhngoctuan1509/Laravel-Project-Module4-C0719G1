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
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class PostRepositoryImpl extends EloquentRepository implements PostRepository
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


//    *********************************************************************
//    ******************** Start Search Post General **********************
//    *********************************************************************
    public function searchPostGeneral($conditionsOfSearchPostGeneral)
    {
        $categoryId = $conditionsOfSearchPostGeneral['categoryId'];
        $directionId = $conditionsOfSearchPostGeneral['directionId'];
        $postOfTypeId = $conditionsOfSearchPostGeneral['postOfTypeId'];
        $regionId = $conditionsOfSearchPostGeneral['regionId'];
        $sellerId = $conditionsOfSearchPostGeneral['sellerId'];
        $statusOfPostId = $conditionsOfSearchPostGeneral['statusOfPostId'];
        $areaRangeId = $conditionsOfSearchPostGeneral['areaRangeId'];
        $priceRangeId = $conditionsOfSearchPostGeneral['priceRangeId'];
        $ableComposition = $conditionsOfSearchPostGeneral['ableComposition'];


        //        **************** Nối bảng ******************
        $posts = $this->model->with('categories', 'region', 'seller', 'post_of_types',
            'status_of_posts', 'directions');


//        //        **************** Lọc Theo Category ******************
        if ($categoryId != 0) {
            $posts = $posts->where('categoryId', '=', $categoryId);
        }
//
        //        ***** Lọc Theo Hướng, Loại Tin, Khu Vực, Người Đăng Tin, Trạng Thái Sử Dụng *****
        if ($directionId != 0) {
            $posts = $posts->where('directionId', '=', $directionId);
        };
        if ($postOfTypeId != 0) {
            $posts = $posts->where('postOfTypeId', '=', $postOfTypeId);
        };
        if ($regionId != 0) {
            $posts = $posts->where('regionId', '=', $regionId);
        };
        if ($sellerId != 0) {
            $posts = $posts->where('sellerId', '=', $sellerId);
        };
        if ($statusOfPostId != 0) {
            $posts = $posts->where('statusOfPostId', '=', $statusOfPostId);
        };


        //        **************** Lọc Theo Khung Giá *******************
        if ($priceRangeId != 0) {
            switch ($priceRangeId) {
                case 1:
                    $posts = $posts->where('price', '<', 5000000);
                    break;
                case 2:
                    $posts = $posts->where('price', '>=', 5000000)->where('price', '<=', 10000000);
                    break;
                case 3:
                    $posts = $posts->where('price', '>=', 10000000)->where('price', '<=', 20000000);
                    break;
                case 4:
                    $posts = $posts->where('price', '>=', 20000000)->where('price', '<=', 50000000);
                    break;
                case 5:
                    $posts = $posts->where('price', '>', 50000000);
                    break;
            }
        };


        //        **************** Lọc Theo Khung Diện Tích *******************
        if ($areaRangeId != 0) {
            switch ($areaRangeId) {
                case 1:
                    $posts = $posts->where('area', '<', 100);
                    break;
                case 2:
                    echo $posts = $posts->where('area', '>=', 100)->where('area', '<=', 200);
                    break;
                case 3:
                    $posts = $posts->where('area', '>=', 200)->where('area', '<=', 300);
                    break;
                case 4:
                    $posts = $posts->where('area', '>', 300);
                    break;
            }
        };


        //        **************** Lọc Theo Có Thể Trả Giá *******************
        if ($ableComposition) {
            $posts = $posts->where('ableComposition', '=', 1)->get();
        } else {
            $posts = $posts->where('ableComposition', '=', 0)->get();
        }
        return $posts;
    }
    //    *********************************************************************
    //    ******************** End Search Post General ************************
    //    *********************************************************************


    //    *********************************************************************
    //    ******************** Start Search Post By Title *********************
    //    *********************************************************************
    public function searchPostByTitle($keywordOfSearchPostByTitle)
    {
        $title = $keywordOfSearchPostByTitle['title'];
        $posts = $this->model->with('categories', 'region', 'seller', 'post_of_types',
            'status_of_posts', 'directions')->where('title', 'like', '%' . $title . '%')->get();
        return $posts;
    }
    //    *********************************************************************
    //    ******************** End Search Post By Title ***********************
    //    *********************************************************************


    //    *********************************************************************
    //    ******************** Start Search Post By Fengshui *********************
    //    *********************************************************************
    public function searchPostByFengshui($conditionsOfSearchPostByFengshui)
    {
        $yearOfBirth = $conditionsOfSearchPostByFengshui['yearOfBirth'];
        $gender = $conditionsOfSearchPostByFengshui['gender'];
        $numberOfFengshui = $yearOfBirth % 4;
        $directionIdOfFengshui = null;

        if ($gender == 1) {
            switch ($numberOfFengshui) {
                case 0:
                    $directionIdOfFengshui = 1;
                    break;
                case 1:
                    $directionIdOfFengshui = 2;
                    break;
                case 2:
                    $directionIdOfFengshui = 3;
                    break;
                case 3:
                    $directionIdOfFengshui = 4;
                    break;
            }
        } else {
            switch ($numberOfFengshui) {
                case 0:
                    $directionIdOfFengshui = 5;
                    break;
                case 1:
                    $directionIdOfFengshui = 6;
                    break;
                case 2:
                    $directionIdOfFengshui = 7;
                    break;
                case 3:
                    $directionIdOfFengshui = 8;
                    break;
            }
        }

        $posts = $this->model->with('categories', 'region', 'seller', 'post_of_types',
            'status_of_posts', 'directions')->where('directionId', '=', $directionIdOfFengshui)->get();
        return $posts;

    }

    //    *********************************************************************
    //    ******************** End Search Post By Fengshui *********************
    //    *********************************************************************


    // Lấy Tất cả các các bài đăng -- Nối bảng
    public function getAllPost()
    {

        $model = $this->model->with('user', 'categories', 'region', 'seller', 'post_of_types',
            'status_of_posts', 'directions')->where('post_availability_status_id', 1)->get();

        return $model;
    }

    public function findByIdAllpost($id)
    {
        $model = $this->model->with('user', 'categories', 'region', 'seller', 'post_of_types',
            'status_of_posts', 'directions')->where('post_availability_status_id', 1)->find($id);
        return $model;
    }

    public function searchPostBasic($data)
    {

        $result = $this->model->with('user', 'categories', 'region', 'seller', 'post_of_types',
            'status_of_posts', 'directions')
            ->where('post_availability_status_id', 1)
            ->where('regionId', 'like', '%' . $data['region'] . '%')
            ->where(function ($query) use ($data) {
                $query->where('title', 'like', '%' . $data['wordSearch'] . '%');
                $query->orwhere('contentPost', 'like', '%' . $data['wordSearch'] . '%');
            })
            ->where('categoryId', 'like', '%' . $data['category'] . '%')
            ->get();
        return $result;
    }

// function get bài đăng đang chờ duyệt
    public function getPostApproval()
    {
        $countPost = $this->model->with('post_of_types', 'categories')->where('post_availability_status_id', '=', 2)->get();
        $postApproval = $this->model->with('post_of_types', 'categories')->where('post_availability_status_id', '=', 2)->orderBy('updated_at','desc')->paginate(5);
        $count=count($countPost);
        $data=[
            "postApproval"=>$postApproval,
            "count"=>$count
        ];

        return $data;
    }

    //    *********************************************************************
    //    ***************** Get tất cả bài Post bằng UserId *******************
    //    *********************************************************************
    public function getAllPostOfUserByUserId($id)
    {
        $posts = $this->model->with('categories', 'region', 'seller', 'post_of_types',
            'status_of_posts', 'directions', 'post_availability_status')->where('userId', '=', $id)->paginate(3);
        return $posts;
    }

    // function get bài đăng đang đã duyệt
    public function getPostAppred()
    { $countPosts = $this->model->with('post_of_types', 'categories')->where('post_availability_status_id', '=', 1)->get();
        $postApproval = $this->model->with('post_of_types', 'categories')->where('post_availability_status_id', '=', 1)->orderBy('updated_at','desc')->paginate(5);
       $count=count($countPosts);
       $data=[
           "postApproval"=>$postApproval,
           "count"=>$count
       ];

        return $data;
    }

    public function getNumberOfPostOfUserByUserId($id)
    {
        $posts = $this->model->where('userId', '=', $id)->get();
        $numberOfPosts = count($posts);
        return $numberOfPosts;
    }

//search post đang chờ duyệt
    public function searchPostApproval($data)
    {  $countPosts = $this->model->with('post_of_types', 'categories')->where('post_availability_status_id', '=', 2)
        ->where('title', 'like', '%' . $data['title'] . '%')->get();
        $posts = $this->model->with('post_of_types', 'categories')->where('post_availability_status_id', '=', 2)
            ->where('title', 'like', '%' . $data['title'] . '%')->orderBy('updated_at','desc')->paginate(5);
        $count=count($countPosts);

            $data=[
                "postApproval"=>$posts,
                "count"=>$count
            ];
        return $data;
    }

    //search post đang đã duyệt
    public function searchPostAppred($data)
    {
        $postsCount = $this->model->with('post_of_types', 'categories')->where('post_availability_status_id', '=', 1)
            ->where('title', 'like', '%' . $data['title'] . '%')->get();
        $posts = $this->model->with('post_of_types', 'categories')->where('post_availability_status_id', '=', 1)
            ->where('title', 'like', '%' . $data['title'] . '%')->orderBy('updated_at','desc')->paginate(5);
        $count=count($postsCount);
        $data=[
            'posts'=>$posts,
            'count'=>$count
        ];
        return $data;
    }

//get chi tiết bài đăng chờ duyệt
    public function getPostDetailApproval($id)
    {
        $model = $this->model->with('user', 'categories', 'region', 'seller', 'post_of_types',
            'status_of_posts', 'directions')->where('post_availability_status_id', 2)->find($id);
        return $model;
    }

    public function changeStatusPostAppvoral($data)
    {$id=$data['id'];
        $post = $this->model->find($id);
        $post->post_availability_status_id = 1;
        $post->save();
        return $post;
    }

    public function changeStatusPostAppved($data)
    {
        $id=$data['id'];
        $post = $this->model->find($id);
        $post->post_availability_status_id = 3;
        $post->save();
        return $post;
    }
}
