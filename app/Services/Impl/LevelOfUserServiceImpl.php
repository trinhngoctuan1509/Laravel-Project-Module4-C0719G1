<?php


namespace App\Services\Impl;


use App\Repositories\LevelOfUserReponsitory;
use App\Services\LevelOfUserService;

class LevelOfUserServiceImpl implements LevelOfUserService
{
protected $levelOfUserReponsitory;
public function __construct(LevelOfUserReponsitory $levelOfUserReponsitory)
{
    $this->levelOfUserReponsitory=$levelOfUserReponsitory;
}

    public function getAll()
    {
        $levelUser=$this->levelOfUserReponsitory->getLevelUser();
        return $levelUser;
    }
}
