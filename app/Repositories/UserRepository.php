<?php


namespace App\Repositories;


interface UserRepository extends Repository
{

public function register($data);


public function getAllUsers();

public function getUserById($id);


public function getUser($data);

public function EditUser($dataEditUser);

}
