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

        $model = Region::class;
        return $model;
    }

    public function getAllRegions()
    {
        $regions = $this->model->all();
        return $regions;
    }

    public function createNewRegion($data){
        $regionCode = $data['regionCode'];
        $regionName =$data['regionName'];

        $region = new Region();
        $region->regionCode = $regionCode;
        $region->regionName = $regionName;
        $region->save();
        return $region;
    }

    public function deleteRegion($id){
        $region = $this->model->where('id','=',$id)->delete();
        return $region;
    }

    public function editRegion($data){
        $regionId = $data['regionId'];
        $regionName = $data['regionName'];
        $regionCode = $data['regionCode'];

        $region = Region::find($regionId);
        $region->regionName = $regionName;
        $region->regionCode = $regionCode;
        $region->save();
        return $region;
    }
}
