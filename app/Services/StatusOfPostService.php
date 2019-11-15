<?php


namespace App\Services;


interface StatusOfPostService
{
    public function getAll();
    public function findById($id);
}
