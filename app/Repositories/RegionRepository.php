<?php


namespace App\Repositories;


interface RegionRepository extends Repository
{
    public function getAllRegions();
    public function createNewRegion($data);
    public function deleteRegion($id);
    public function editRegion($data);

}
