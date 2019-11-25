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
//function get user đăng nhập
    public function getUser(Request $request){
        $user = $this->userService->getUser($request);
        return $user;
    }
//function logout
    public function logout(Request $request){
        $loguot=$this->userService->logout($request);
        return $loguot;
    }
//funcition check đăng ký mail
    function verifyUser($token){
        $data=User::where('tokenVerifymail',$token)->first();
        $data->VerifymailId=2;
        $data->save();
        $mes= "verify User thành công";
        return $mes;
    }
}
