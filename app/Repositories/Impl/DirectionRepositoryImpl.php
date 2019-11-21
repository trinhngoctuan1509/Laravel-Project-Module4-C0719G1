<?php


namespace App\Repositories\Impl;
use App\Direction;
use App\Repositories\DirectionRepository;
use App\Repositories\Eloquent\EloquentRepository;

class DirectionRepositoryImpl extends  EloquentRepository implements  DirectionRepository
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {

        $model = Direction::class;
        return $model;
    }
}
