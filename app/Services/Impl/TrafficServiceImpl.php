<?php


namespace App\Services\Impl;

use App\Repositories\TrafficRepository;
use App\Services\TrafficService;
class TrafficServiceImpl implements TrafficService
{
    protected $trafficRepository;
    public function __construct(TrafficRepository $TrafficRepository)
    {
        $this->trafficRepository = $TrafficRepository;
    }

    public function addView($data)
    {
        $view = $this->trafficRepository->create($data);
        $statusCode = 201;
        if (!$view)
            $statusCode = 500;
        $data = [
            'statusCode' => $statusCode,
            'view' => $view
        ];
        return $data;
    }

    public function totalView()
    {
        $totalView = $this->trafficRepository->totalView();
        return $totalView;
    }

    public function countViewDate($data)
    {
        $result = $this->trafficRepository->countViewDate($data);
        return $result;
    }
}
