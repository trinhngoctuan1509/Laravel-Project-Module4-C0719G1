<?php


namespace App\Repositories\Impl;


use App\LevelOfUser;
use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\LevelOfUserReponsitory;

class LevelOfUserReponsitoryImpl extends EloquentRepository implements LevelOfUserReponsitory
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
       $model=LevelOfUser::class;
       return $model;
    }

    public function getLevelUser()
    {
        $levelUser=$this->model->whereNotIn('userLevelOfName',['Admin','Người Dùng'])->get();
        return $levelUser;
    }
}
