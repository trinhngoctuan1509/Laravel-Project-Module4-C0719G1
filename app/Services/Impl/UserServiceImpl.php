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

    public function update($request, $id)
    {
        $oldEditUsers = $this->userRepository->findById($id);


        if (!$oldEditUsers) {
            $newEditUsers = null;
            $statusCode = 404;
        } else {
            $newEditUsers = $this->userRepository->update($request,$oldEditUsers);
            $newEditUsers = $this->userRepository->findById($id);
            $statusCode = 200;
        }

        $data = [
            'statusCode' => $statusCode,
            'editUsers' => $newEditUsers
        ];
        return $data;

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

    public function changePassword($data)
    {
     $changepassword=$this->userRepository->changePassword($data);
     return $changepassword;
    }


    public function updateedit($data)
    {
       $updateEdit=$this->userRepository->updateedit($data);
       return $updateEdit;
    }
}
