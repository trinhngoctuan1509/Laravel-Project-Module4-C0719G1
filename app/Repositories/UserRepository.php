<?php


namespace App\Repositories;


interface UserRepository
{
public function login($data);
public function register($data);
public function getAllUsers();
}
