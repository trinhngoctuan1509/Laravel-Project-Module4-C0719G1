<?php


namespace App\Repositories\Impl;


use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\LoginAdminReponsitory;
use App\User;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class loginAdminReponsitoryImpl extends EloquentRepository implements LoginAdminReponsitory
{

    /**
     * get Model
     * @return string
     */
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
        $jwt_token = null;

        if ($jwt_token = JWTAuth::attempt($login)) {
            $user = Auth::user();
            if (!$user['statusOfUserId']==1){
                return response()->json([
                    'success' => false,
                    'message' => 'Tài khoản của bạn đã bị khóa bởi admin',
                ]);
            }elseif ($user['VerifymailId']==1){
                return response()->json([
                    'success' => false,
                    'message' => 'vui lòng check email để hoàn tất đăng ký',
                ]);
            }
            return response()->json([
                'success' => true,
                'token' => $jwt_token,
            ]);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Tài khoản hoặc mật khẩu không đúng',
            ]);
        }
    }
}
