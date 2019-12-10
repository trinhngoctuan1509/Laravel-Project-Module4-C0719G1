<?php

namespace App\Http\Controllers;

use App\Services\LevelOfUserService;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    public function getAllabc(){
        $mes=['abc'];
        return $mes;
    }

    protected $levelOfUserService;
    public function __construct(LevelOfUserService $levelOfUserService )
    {
        $this->levelOfUserService=$levelOfUserService;
    }
    function getAllLevelOfUser(){
        $level=$this->levelOfUserService->getAll();
        return response()->json($level, 200);
    }
}
