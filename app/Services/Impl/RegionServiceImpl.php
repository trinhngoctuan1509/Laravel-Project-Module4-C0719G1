<?php


namespace App\Services\Impl;
use App\Repositories\RegionRepository;
use App\Services\RegionService;

class RegionServiceImpl implements RegionService
{
    protected $regionRepository;

    public function __construct(RegionRepository $regionRepository)
    {
        $this->regionRepository = $regionRepository;
    }


    public function getAll()
    {

        $region = $this->regionRepository->getAll();
        return $region;
    }

    public function findById($id)
    {

        $region = $this->regionRepository->findById($id);

        $statusCode = 200;
        if (!$region) {
            $statusCode = 404;
        }
        $data = [
            'statusCode' => $statusCode,
            'region' => $region
        ];

        return $data;
    }

    public function getAllRegions(){
        $regions = $this->regionRepository->getAllRegions();
        return $regions;
    }

    public function createNewRegion($data){
        $region = $this->regionRepository->createNewRegion($data);
        return $region;
    }

    public function deleteRegion($id){
        $region = $this->regionRepository->deleteRegion($id);
        return $region;
    }

    public function editRegion($data){
        $region = $this->regionRepository->editRegion($data);
        return $region;
    }
}
