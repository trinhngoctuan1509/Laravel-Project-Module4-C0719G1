<?php


namespace App\Repositories\Impl;

use App\post_view;
use App\Repositories\PostViewRepository;
use App\Repositories\Eloquent\EloquentRepository;
class PostViewRepositoryImpl extends EloquentRepository implements PostViewRepository
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = post_view::class;
        return $model;
    }

    public function getTopView()
    {
      $result = $this->model->with('post')
          ->selectRaw('*, count(posts_id) as total_view')
          ->groupBy('posts_id')
          ->orderBy('total_view','desc')
          ->limit(10)
          ->get();
      return $result;
    }
}
