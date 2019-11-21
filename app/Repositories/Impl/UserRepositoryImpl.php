<?php


namespace App\Repositories\Impl;


use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserRepositoryImpl extends EloquentRepository implements UserRepository
{

    /**
     * get Model
     * @return string
     */
    protected $user;

    public function __construct()
    {
        $this->user = JWTAuth::parseToken()->authenticate();
    }

    public function getModel()
    {
        $model = User::class;
        return $model;
    }

    public function login($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        $login = [
            'email' => $email,
            'password' => $password
        ];
        if (Auth::attempt($login)) {
            if (Auth::user()->statusOfUserId==2){
                Auth::logout();
                $mes=['Tài khoản này hiện đang bị khóa'];
                return $mes;
            }
        } else {
            $mes = ["Sai tài khoản hoặc mật khẩu"];
            return $mes;
        }
    }

    public function register($data)
    {
        try {
            $fullName = $data['fullName'];
            $email = $data['email'];
            $address = $data['address'];
            $phoneNumber = $data['phoneNumber'];
            $statusOfUserId = 1;
            $levelOfUserId = 3;
            $password = bcrypt($data['password']);
            $passwordConfirm = $data['passwordConfirm'];
            $signin = [
                "fullName" => $fullName,
                "email" => $email,
                "address" => $address,
                "phoneNumber" => $phoneNumber,
                "statusOfUserId" => $statusOfUserId,
                "levelOfUserId" => $levelOfUserId,
                "password" => $password
            ];
            $object = $this->model->create($signin);
        } catch (\Exception $e) {
            return null;
        }
        return $object;
    }

<<<<<<< HEAD
    public function getAllUsers()
    {
        $users = $this->model->with('status_of_users','level_of_users')->get();
        return $users;
=======
    public function getUser($data)
    {
        $user = JWTAuth::authenticate($data->token);

        return response()->json($user);
>>>>>>> d217168227af7dc80fc5752e5898532306a74b2f
    }
}
