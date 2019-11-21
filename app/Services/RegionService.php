<?php


namespace App\Services;


interface RegionService
{
    public function getAll();
    public function findById($id);
}
