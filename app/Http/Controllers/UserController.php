<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Register;

class UserController extends Controller

{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;

    }

    // function đăng ký
    public function register(Register $request)
    {
        $data = $this->userService->register($request);
        return $data;
    }

    public function getAllUsers()
    {
        $users = $this->userService->getAllUsers();
        return $users;
    }

    public function getUserById($id)
    {
        $user = $this->userService->getUserById($id);
        return $user;
    }

//function get user đăng nhập
    public function getUser(Request $request)
    {
        $user = $this->userService->getUser($request);
        return $user;
    }

    public function lockUserAccount(Request $request)
    {
        $messageLockUserAccountSuccess = $this->userService->lockUserAccount($request);
        return $messageLockUserAccountSuccess;
    }

    public function unlockUserAccount(Request $request)
    {
        $userId = $request[0];
        $messageUnlockUserAccountSuccess = $this->userService->unlockUserAccount($userId);
        return $messageUnlockUserAccountSuccess;
    }

//    public function update(Request $request, $id)
//    {
//        $dataEditUsers = $this->userService->update($request->all(), $id);
//
//        return response()->json( $dataEditUsers['editUsers'],  $dataEditUsers['statusCode']);
//    }


    public function EditUser(Request $request)
    {
        $dataEditUser = $request;
        $messageEditUserSuccess = $this->userService->EditUser($dataEditUser);
        return $messageEditUserSuccess;
    }

//function logout
    public function logout(Request $request)
    {
        $loguot = $this->userService->logout($request);
        return $loguot;
    }

//funcition check đăng ký mail
    function verifyUser($token)
    {
        $data = User::where('tokenVerifymail', $token)->first();
        $data->VerifymailId = 2;
        $data->save();
        $mes = "verify User thành công";
        return $mes;

    }
}
