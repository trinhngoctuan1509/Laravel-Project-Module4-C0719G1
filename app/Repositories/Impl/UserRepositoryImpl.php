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
    protected $user1;



    public function getModel()
    {
        $model = User::class;
        return $model;
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


    public function getAllUsers()
    {
        $users = $this->model->with('status_of_users', 'level_of_users')->get();
        return $users;
    }

    public function getUserById($id){
        $users = $this->model->with('status_of_users', 'level_of_users');
        $users = $users->where('id','=',$id)->get();
        return $users;
    }

    public function getUser($data)
    {
        $this->user1 = JWTAuth::parseToken()->authenticate();
        $user = JWTAuth::authenticate($data->token);

        return response()->json($user);

    }
}
