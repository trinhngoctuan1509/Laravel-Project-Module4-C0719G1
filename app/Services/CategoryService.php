<?php


namespace App\Services;


interface CategoryService
{
    public function getAll();
    public function findById($id);

}
