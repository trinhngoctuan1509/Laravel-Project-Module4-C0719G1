<?php


namespace App\Services;


interface PostOfTypeService
{
    public function getAll();
    public function findById($id);
    public function getAllPostOfType();
    public function deletePostOfType($id);
    public function editPostOfType($data);
    public function createNewPostOfType($data);
}
