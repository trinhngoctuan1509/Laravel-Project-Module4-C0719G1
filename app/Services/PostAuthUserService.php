<?php


namespace App\Services;


interface PostAuthUserService
{
    public function getPostByUser();
    public function findPostById($id);
    public function create($data);
    public function update($request, $id);
    public function destroy($id);
    public function searchTitlePostAuth($data);
}
