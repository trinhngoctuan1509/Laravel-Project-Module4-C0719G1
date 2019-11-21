<?php


namespace App\Services\Impl;
use App\Repositories\DirectionRepository;
use App\Services\DirectionService;

class DirectionServiceImpl implements DirectionService
{
    protected $directionRepository;

    public function __construct(DirectionRepository $directionRepository)
    {
        $this->directionRepository = $directionRepository;
    }
    public function getAll()
    {

        $direction = $this->directionRepository->getAll();
        return $direction;
    }

    public function findById($id)
    {

        $direction = $this->directionRepository->findById($id);

        $statusCode = 200;
        if (!$direction) {
            $statusCode = 404;
        }
        $data = [
            'statusCode' => $statusCode,
            'direction' => $direction
        ];

        return $data;
    }
}
