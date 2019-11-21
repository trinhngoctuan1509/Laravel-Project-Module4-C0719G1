<?php


namespace App\Repositories\Impl;
use App\PostOfType;
use App\Repositories\PostOfTypeReponsitory;
use App\Repositories\Eloquent\EloquentRepository;

class PostOfTypeReponsitoryImpl extends EloquentRepository implements PostOfTypeReponsitory
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {

        $model = PostOfType::class;
        return $model;
    }
}
