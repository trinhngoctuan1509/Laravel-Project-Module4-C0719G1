<?php


namespace App\Repositories;


interface UserRepository
{

public function register($data);
public function getUser($data);
}
