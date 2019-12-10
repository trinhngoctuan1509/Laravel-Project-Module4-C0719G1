<?php


namespace App\Repositories;


interface CategoryReponsitory extends Repository
{
    public function createNewCategory($data);
    public function deleteCategory($id);
    public function editCategory($data);

}
