<?php


namespace App\Repositories;


interface UserRepository
{
// function đăng ký
public function register($data);


public function getAllUsers();

public function getUserById($id);

//function get user đăng nhập
public function getUser($data);

public function lockUserAccount($dataLockUserAccount);

public function  unlockUserAccount($userId);

public function getNumberOfUsers();

public function findUser($keyWordForFindUser);

//function logout
public function logout($data);

}


