<?php


namespace App\Repositories\Impl;

use App\Region;
use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\RegionRepository;

class RegionRepositoryImpl extends EloquentRepository implements RegionRepository
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        // TODO: Implement getModel() method.
        $model = Region::class;
        return $model;
    }
}
