<?php


namespace App\Services;


interface PostOfTypeService
{
    public function getAll();
    public function findById($id);
}
