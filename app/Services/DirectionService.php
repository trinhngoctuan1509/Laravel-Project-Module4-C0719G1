<?php


namespace App\Services;


interface DirectionService
{
    public function getAll();
    public function findById($id);
}
