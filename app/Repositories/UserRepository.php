<?php


namespace App\Repositories;


interface UserRepository extends Repository
{
// function đăng ký
public function register($data);


public function getAllUsers();

public function getUserById($id);

//function get user đăng nhập
public function getUser($data);


public function EditUser($dataEditUser);

public function lockUserAccount($dataLockUserAccount);

public function  unlockUserAccount($userId);

//function logout
public function logout($data);


}


