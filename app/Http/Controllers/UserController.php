<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Register;
use App\Http\Requests\RequestPassword;

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


    public function findUser(Request $request){
        $keyWordForFindUser = $request->keyWordForFindUser;
        $users = $this->userService->findUser($keyWordForFindUser);
        return $users;
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

    public function update(Request $request, $id)
    {
        $dataEditUsers = $this->userService->update($request->all(), $id);

        return response()->json( $dataEditUsers['editUsers'],  $dataEditUsers['statusCode']);
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

        $mes= "verify User thành công";
        return redirect('http://localhost:4200/successConfirmMail');
    }


    public function getNumberOfUsers(){
        $numberOfUsers = $this->userService->getNumberOfUsers();
        return $numberOfUsers;
    }
    public function postChangePassword( RequestPassword $requestPassword)
    {
        $changepassword=$this->userService->changePassword($requestPassword);
        return $changepassword;
    }
    public function putupdateeditusers( Request $request)
    {
        $changepassword=$this->userService-> updateedit($request);
        return $changepassword;
    }
    function getEmployees(){
        $allEmployees= $this->userService->getEmployees();
        return $allEmployees;
    }

    function getEmployeeById($id){
        $employee=$this->userService->getEmployeeFindId($id);
        return $employee;
    }

    public function lockAccountEmployee($id){
        $employee=$this->userService->lockAccountEmployee($id);
        return $employee;
    }
    public function unLockAccountEmployee($id){
        $employee=$this->userService->unLockAccountEmployee($id);
        return $employee;
    }
    public function deleteEmployee($id){
        $mes=$this->userService->deleteEmployee($id);
        return $mes;
    }
    public function updateEmployee(Request $request){
        $update=$this->userService->updateEmployee($request);
        return $update;
    }

    public function changePasswordEmployee(Request $request){
        $changePassword=$this->userService->changePasswordEmployee($request);
        return $changePassword;
    }

    public function addEmployee(Request $request){
        $addEmployee=$this->userService->addEmployee($request);
        return $addEmployee;
    }
}
