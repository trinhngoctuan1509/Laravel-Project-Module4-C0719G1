<?php


namespace App\Services;


interface UserService
{

    public function register($data);

    public function getAllUsers();

    public function getUserById($id);

    public function getUser($data);

}
