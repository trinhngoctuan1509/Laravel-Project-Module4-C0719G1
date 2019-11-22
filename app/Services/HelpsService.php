<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/28/2018
 * Time: 2:24 PM
 */

namespace App\Services;

interface HelpsService
{
    public function getAll();
    public function create($request);

}
