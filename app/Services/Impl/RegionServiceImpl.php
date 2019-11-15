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
}
