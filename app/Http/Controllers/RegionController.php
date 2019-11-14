<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RegionService;
class RegionController extends Controller
{
    protected $regionService;
    public function __construct(RegionService $regionService)
    {
        $this->regionService = $regionService;
    }
    public function index()
    {
        $region = $this->regionService->getAll();

        return response()->json($region, 200);
    }
}
