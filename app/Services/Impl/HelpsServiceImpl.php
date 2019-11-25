<?php

namespace App\Services\Impl;

use App\Repositories\HelpsRepository;
use App\Services\HelpsService;

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/28/2018
 * Time: 2:25 PM
 */

class HelpsServiceImpl implements HelpsService
{
    protected $helpsRepository;


    public function __construct(HelpsRepository $helpsRepository)
    {
        $this->helpsRepository = $helpsRepository;
    }

    public function getAll()
    {
        $helps= $this->helpsRepository->getAll();

        return $helps;
    }

    public function create($request)
    {
        $helps = $this->helpsRepository->create($request);

        $statusCode = 201;
        if (!$helps) {
            $statusCode = 500;
        }
        $data = [
            'statusCode' => $statusCode,
            'helps' => $helps
        ];

        return $data;
    }

}
