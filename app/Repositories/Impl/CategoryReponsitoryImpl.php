<?php


namespace App\Repositories\Impl;

use App\Category;
use App\Repositories\CategoryReponsitory;
use App\Repositories\Eloquent\EloquentRepository;

class CategoryReponsitoryImpl extends EloquentRepository implements CategoryReponsitory
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        // TODO: Implement getModel() method.
        $model = Category::class;
        return $model;
    }
}