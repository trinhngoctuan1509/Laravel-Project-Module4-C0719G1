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


// function đăng ký
    public function register($data)
    {
        $dataUser=$this->userRepository->register($data);
        return $dataUser;
    }


    public function getAllUsers()
    {
        $users = $this->userRepository->getAllUsers();
        return $users;
    }



    public function getUserById($id){
        $user = $this->userRepository->getUserById($id);
        return $user;
    }

//function get user đăng nhập
    public function getUser($data)
    {
        $user=$this->userRepository->getUser($data);
        return $user;

    }

    public function lockUserAccount($dataLockUserAccount){
        $messageLockUserAccountSuccess = $this->userRepository->lockUserAccount($dataLockUserAccount);
        return $messageLockUserAccountSuccess;
    }

    public function  unlockUserAccount($userId){
        $messageUnlockUserAccountSuccess = $this->userRepository->unlockUserAccount($userId);
        return $messageUnlockUserAccountSuccess;
    }

//function logout
    public function logout($data)
    {
        $loguot=$this->userRepository->logout($data);
        return $loguot;
    }
}
