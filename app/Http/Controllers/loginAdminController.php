<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Services\LoginAdminService;

class loginAdminController extends Controller
{
    protected $loginAdminService;
    public function __construct(loginAdminService $loginAdminService)
    {
        $this->loginAdminService=$loginAdminService;
    }

    public function login(Request $request)
    {
        $data = $this->loginAdminService->login($request);
        return $data;

    }
}
