<?php


namespace App\Services\Impl;


use App\Repositories\LoginReponsitory;
use App\Services\LoginService;

class LoginServiceImpl implements LoginService
{
public $loginReponsitory ;


    public function __construct(LoginReponsitory $loginReponsitory)
    {
        $this->loginReponsitory = $loginReponsitory;
    }
    public function login($data)
    {
        $dataUser = $this->loginReponsitory->login($data);
        return $dataUser;
    }


}
