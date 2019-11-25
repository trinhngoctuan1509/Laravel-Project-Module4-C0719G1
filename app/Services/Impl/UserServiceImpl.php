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

//        $oldPost = $this->userRepository->findById($id);
//
//        if (!$oldPost) {
//            $newPost = null;
//            $statusCode = 404;
//        } else {
//            $newPost = $this->userRepository->update($request, $oldPost);
//            $statusCode = 200;
//        }
//
//        $data = [
//            'statusCode' => $statusCode,
//            'post' => $newPost
//        ];
//        return $data;
    }


    public function EditUser($dataEditUser){
        $messageEditUserSuccess = $this->userRepository->EditUser($dataEditUser);
        return $messageEditUserSuccess;
    }


    public function lockUserAccount($dataLockUserAccount){
        $messageLockUserAccountSuccess = $this->userRepository->lockUserAccount($dataLockUserAccount);
        return $messageLockUserAccountSuccess;
    }

    public function  unlockUserAccount($userId){
        $messageUnlockUserAccountSuccess = $this->userRepository->unlockUserAccount($userId);
        return $messageUnlockUserAccountSuccess;
    }

    public function getNumberOfUsers(){
        $numberOfUsers = $this->userRepository->getNumberOfUsers();
        return $numberOfUsers;
    }

    public function findUser($keyWordForFindUser){
        $users = $this->userRepository->findUser($keyWordForFindUser);
        return $users;
    }

//function logout
    public function logout($data)
    {
        $loguot=$this->userRepository->logout($data);
        return $loguot;

    }
}
