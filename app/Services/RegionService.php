<?php


namespace App\Services;


interface RegionService
{
    public function getAll();
    public function findById($id);
    public function getAllRegions();
    public function createNewRegion($data);
    public function deleteRegion($id);
    public function editRegion($data);
}
