<?php

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/28/2018
 * Time: 1:46 PM
 */

namespace App\Repositories\Impl;

use App\Helps;
use App\Repositories\HelpsRepository;
use App\Repositories\Eloquent\EloquentRepository;

class HelpsRepositoryImpl extends EloquentRepository  implements HelpsRepository
{
    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = Helps::class;
        return $model;
    }
}
