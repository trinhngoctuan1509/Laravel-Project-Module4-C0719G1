<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HelpsService;
class HelpsController extends Controller
{
    protected $helpsService;

    public function __construct(HelpsService $helpsService)
    {
        $this->helpsService = $helpsService;
    }

    public function index()
    {
        $helps = $this->helpsService->getAll();

        return response()->json($helps, 200);
    }



    public function store(Request $request)
    {
        $dataHelp = $this->helpsService->create($request->all());

        return response()->json($dataHelp['helps'], $dataHelp['statusCode']);
    }


}
