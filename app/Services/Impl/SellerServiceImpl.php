<?php


namespace App\Services\Impl;

use App\Repositories\SellerReponsitory;
use App\Services\SellerService;

class SellerServiceImpl implements SellerService
{
    protected $sellerRepository;

    public function __construct(SellerReponsitory $sellerRepository)
    {
        $this->sellerRepository = $sellerRepository;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
       $seller = $this->sellerRepository->getAll();
       return $seller;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        $seller = $this->sellerRepository->findById($id);

        $statusCode = 200;
        if (!$seller)
            $statusCode = 404;

        $data = [
            'statusCode' => $statusCode,
            'seller' => $seller
        ];

        return $data;
    }
}
