<?php


namespace App\Repositories;


interface PostOfTypeReponsitory extends Repository
{
    public function getAllPostOfType();
    public function deletePostOfType($id);
    public function editPostOfType($data);
    public function createNewPostOfType($data);

}
