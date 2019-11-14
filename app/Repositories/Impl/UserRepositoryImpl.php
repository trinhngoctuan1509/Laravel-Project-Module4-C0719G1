<?php


namespace App\Repositories\Impl;


use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserRepositoryImpl extends EloquentRepository implements UserRepository
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model=User::class;
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
            return Auth::user();
        } else {

            return "Sai tài Khoản hoặc mật khẩu";
        }
    }
}
