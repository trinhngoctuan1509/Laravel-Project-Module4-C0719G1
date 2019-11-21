<?php

namespace App\Http\Controllers;

use App\Services\LoginService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $loginService;
    public function __construct(LoginService $loginService)
    {
        $this->loginService=$loginService;
    }

    public function login(Request $request)
    {
        $data = $this->loginService->login($request);
        return $data;

    }
}
