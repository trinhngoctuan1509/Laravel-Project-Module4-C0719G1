<?php


namespace App\Repositories\Impl;

use App\StatusOfPost;
use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\StatusOfPostRepository;
class StatusOfPostRepositoryImpl extends  EloquentRepository implements  StatusOfPostRepository
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        // TODO: Implement getModel() method.
        $model = StatusOfPost::class;
        return $model;
    }
}
