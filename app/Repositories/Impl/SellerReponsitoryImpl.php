<?php


namespace App\Repositories\Impl;

use App\Seller;
use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\SellerReponsitory;

class SellerReponsitoryImpl extends EloquentRepository implements SellerReponsitory
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {

        $model = Seller::class;
        return $model;
    }
}
