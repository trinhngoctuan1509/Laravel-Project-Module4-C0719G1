<?php


namespace App\Services;


interface UserService
{
    public function login($data);
    public function register($data);
}
