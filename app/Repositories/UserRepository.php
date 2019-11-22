<?php


namespace App\Repositories;


interface UserRepository
{

public function register($data);


public function getAllUsers();

public function getUserById($id);


public function getUser($data);
}
