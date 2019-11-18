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

    public function getUser()
    {
        $user = $this->userRepository->getUser();
        return $user;
    }
}
