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
        // TODO: Implement getAll() method.
        $region = $this->regionRepository->getAll();
        return $region;
    }
}
