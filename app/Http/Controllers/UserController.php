<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use App\Http\Requests\Register;

class UserController extends Controller

{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function login(Request $request)
    {
        $data = $this->userService->login($request);
        return $data;
    }
    public  function register(Register $request){
        $data = $this->userService->register($request);
        return $data;
    }

    public function getAllUsers()
    {
        $users = $this->userService->getAllUsers();
        return $users;
    }

    public function getUserById($id){
        $user = $this->userService->getUserById($id);
        return $user;
    }

    public function getUser(Request $request){
        $user = $this->userService->getUser($request);
        return $user;


    }


    public function lockUserAccount(Request $request){
        $messageLockUserAccountSuccess = $this->userService->lockUserAccount($request);
        return $messageLockUserAccountSuccess;
    }

    public function unlockUserAccount(Request $request){
        $userId = $request[0];
        $messageUnlockUserAccountSuccess = $this->userService->unlockUserAccount($userId);
        return $messageUnlockUserAccountSuccess;
    }

}
