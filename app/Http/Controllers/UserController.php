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
<<<<<<< HEAD
    public function getAllUsers(){
        $users = $this->userService->getAllUsers();
        return $users;
=======
    public function getUser(Request $request){
        $user = $this->userService->getUser($request);
        return $user;
>>>>>>> d217168227af7dc80fc5752e5898532306a74b2f
    }
}
