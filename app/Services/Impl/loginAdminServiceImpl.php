<?php


namespace App\Services\Impl;


use App\Repositories\LoginAdminReponsitory;
use App\Services\LoginAdminService;

class loginAdminServiceImpl implements LoginAdminService
{
    public $loginAdminReponsitory ;


    public function __construct(loginAdminReponsitory $loginAdminReponsitory)
    {
        $this->loginAdminReponsitory = $loginAdminReponsitory;
    }
    public function login($data)
    {
        $dataUser = $this->loginAdminReponsitory->login($data);
        return $dataUser;
    }


}
