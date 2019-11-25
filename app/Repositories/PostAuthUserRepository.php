<?php


namespace App\Repositories;


interface PostAuthUserRepository
{
    public function getPostByUser();
    public function findPostById($id);
    public function create($data);
    public function update($data, $object);
    public function destroy($object);
    public function searchTitlePostAuth($data);

}
