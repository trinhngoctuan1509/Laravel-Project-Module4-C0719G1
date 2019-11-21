<?php


namespace App\Services\Impl;


use App\Services\UserService;
use App\Repositories\UserRepository;

class UserServiceImpl implements UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function login($data)
    {
        $dataUser = $this->userRepository->login($data);
        return $dataUser;
    }

    public function register($data)
    {
        $dataUser=$this->userRepository->register($data);
        return $dataUser;
    }

<<<<<<< HEAD
    public function getAllUsers()
    {
        $users =$this->userRepository->getAllUsers();
        return $users;
=======
    public function getUser($data)
    {
        $user=$this->userRepository->getUser($data);
        return $user;
>>>>>>> d217168227af7dc80fc5752e5898532306a74b2f
    }
}
