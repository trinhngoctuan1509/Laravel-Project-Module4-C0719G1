<?php


namespace App\Services;


interface CategoryService
{
    public function getAll();
    public function findById($id);
    public function createNewCategory($data);
    public function deleteCategory($id);
    public function editCategory($data);

}
