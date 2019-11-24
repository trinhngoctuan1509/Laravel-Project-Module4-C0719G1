<?php


namespace App\Repositories\Impl;


use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\UserRepository;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;
use Tymon\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Mail;

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



// function đăng ký
    public function register($data)
    {
        try {
            $fullName = $data['fullName'];
            $email = $data['email'];
            $address = $data['address'];
            $phoneNumber = $data['phoneNumber'];
            $tokenVerifymail=Str::random();
            $statusOfUserId = 1;
            $levelOfUserId = 3;
            $password = bcrypt($data['password']);
            $passwordConfirm = $data['passwordConfirm'];
            $signin = [
                "fullName" => $fullName,
                "email" => $email,
                "address" => $address,
                "phoneNumber" => $phoneNumber,
                'tokenVerifymail'=>$tokenVerifymail,
                "statusOfUserId" => $statusOfUserId,
                "levelOfUserId" => $levelOfUserId,
                "password" => $password
            ];
            $data=array("name"=>$fullName,
                "body"=>"Tài khoản của bạn đã được đăng ký vui vòng nhấn vào link bên dưới để hoàn tất đăng ký",
                "token"=>$tokenVerifymail);
            Mail::send('email', $data, function ($message) use ($fullName, $email) {
                $message->to($email)->subject('Codegym comfirm email');
            });


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

//function get user đăng nhập
    public function getUser($data)
    {
        $this->user1 = JWTAuth::parseToken()->authenticate();
        $user = JWTAuth::authenticate($data->token);
        return response()->json($user);

    }


//function logout
    public function logout($data)
    {
        $this->user1 = JWTAuth::parseToken()->authenticate();
        try {
            JWTAuth::invalidate($data->token);

            return response()->json([
                'success' => true,
                'message' => 'Bạn đã đăng xuất thành công'
            ]);
        } catch (JWTException $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Xin lỗi! đăng xuất thất bại!'
            ], 500);
        }
    }
}
