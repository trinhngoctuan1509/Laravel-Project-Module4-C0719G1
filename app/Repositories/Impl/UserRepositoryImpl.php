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
    protected $user;



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
        $users = $this->model->with('status_of_users', 'level_of_users')->where('levelOfUserId','=',3)->paginate(3);
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
        $user = JWTAuth::parseToken()->authenticate();
//        $user = JWTAuth::authenticate($data->token);
        return response()->json($user);

    }
    public function  changePassword($data){


        $user = JWTAuth::parseToken()->authenticate();
        $login=[
            "email"=>$user['email'],
            "password"=>$data['current_password']
        ];
        if (Auth::attempt($login)){
            $updatUser=User::find($user['id']);
            $updatUser->password=bcrypt($data['passwordnew']);
            $updatUser->save();
            return response()->json([
                'success' => true,
                'message' => 'doi mat khau thanh cong',
            ]);


        }else{
            return response()->json([
                'success' => false,
                'message' => 'mat khau cu khong dung',
            ]);
//            return $passwordold;
        }
    }
    public function  updateedit($data){
        $user = JWTAuth::parseToken()->authenticate();
        $updatedit=User::find($user['id']);
        $updatedit->fullName=$data['fullName'];
        $updatedit->address=$data['address'];
        $updatedit->phoneNumber=$data['phoneNumber'];
        $updatedit->save();
        return response()->json([
            'success' => true,
            'message' => 'update editusers thanh cong',
        ]);

    }



    public function lockUserAccount($dataLockUserAccount){
        $userId = $dataLockUserAccount->userId;
        $reasonLockUserAccount = $dataLockUserAccount->reasonLockUserAccount;

        $user = $this->model->find($userId);
        $user->statusOfUserId = 2;
        $user->reasonLocked = $reasonLockUserAccount;
        $user->save();
        return $user;
    }

    public function  unlockUserAccount($userId){
        $user = $this->model->find($userId);
        $user->statusOfUserId = 1;
        $user->reasonLocked = null;

        $user->save();
        return $user;
    }





//function logout
    public function logout($data)
    {
       JWTAuth::parseToken()->authenticate();
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


    public function getNumberOfUsers(){
        $users = $this->model->where('levelOfUserId','=',3)->get();
        $numberOfUser = count($users);
        return $numberOfUser;
    }

    public function findUser($keyWordForFindUser){
        $allUsers = $this->model->where('fullName','like','%'.$keyWordForFindUser.'%')->orwhere('email','like','%'.$keyWordForFindUser.'%')->get();
        $NumberOfResultFindUser = count($allUsers);
        $users = $this->model->where('fullName','like','%'.$keyWordForFindUser.'%')->orwhere('email','like','%'.$keyWordForFindUser.'%')->paginate(3);
        return [$NumberOfResultFindUser,$users] ;
    }

    public function getEmployees()
    {
        $allEmployees = $this->model->with('level_of_users')->where('levelOfUserId','=',4)->orwhere('levelOfUserId','=',2)->get();
        return $allEmployees;
    }

    public function getEmployeeFindId($id)
    {
        $employee=$this->model->whereNotIn('levelOfUserId',[1,3])->find($id);
        return $employee;
    }

    public function lockAccountEmployee($id)
    {
        $employee=$this->model->find($id);
        $employee->statusOfUserId=2;
        $employee->save();
        return $employee;
    }

    public function unLockAccountEmployee($id)
    {
        $employee=$this->model->find($id);
        $employee->statusOfUserId=1;
        $employee->save();
        return $employee;
    }

    public function deleteEmployee($id)
    {
        $this->model->destroy($id);
        $mes=['Đã xoá thành công'];
        return $mes;
    }

    public function updateEmployee($data)
    {
        $user = JWTAuth::parseToken()->authenticate();
        $user->fullName = $data['fullName'];
        $user->address=$data['address'];
        $user->phoneNumber=$data['phoneNumber'];
        $user->save();
        $mes=['Chỉnh sửa thông tin thành công'];
        return $mes;
    }

    public function changePasswordEmployee($data)
    {
        $user= JWTAuth::parseToken()->authenticate();
        $check=[
            'email'=>$user->email,
            'password'=>$data['passwordOld']
        ];
        if (Auth::attempt($check)){
            $user->password=bcrypt($data['passwordNew']);
            $user->save();
            return response()->json([
                'success'=>true,
                'message'=>'Đổi mật khẩu thành công'
            ]);
        }else{
            return response()->json([
                'success'=>false,
                'message'=>'Mật khẩu cũ không đúng'
            ]);
        }

    }

    public function addEmployee($data)
    {
        try {
            $fullName = $data['fullName'];
            $email = $data['email'];
            $address = $data['address'];
            $phoneNumber = "Chưa cập nhật";
            $tokenVerifymail=Str::random();
            $statusOfUserId = 2;
            $levelOfUserId = $data['level'];
            $password = bcrypt('123456');
            $add = [
                "fullName" => $fullName,
                "email" => $email,
                "address" => $address,
                "phoneNumber" => $phoneNumber,
                'tokenVerifymail'=>$tokenVerifymail,
                "statusOfUserId" => $statusOfUserId,
                "levelOfUserId" => $levelOfUserId,
                "password" => $password
            ];
            $object = $this->model->create($add);
        } catch (\Exception $e) {
            return "Đăng ký thât bại";
    }
        return $object;
    }
}
