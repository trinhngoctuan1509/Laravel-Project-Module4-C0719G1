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

    public function show($id)
    {
        $region = $this->regionService->findById($id);

        return response()->json($region['region'], $region['statusCode']);
    }

    public function getAllRegions(){
        $regions = $this->regionService->getAllRegions();
        return $regions;
    }

    public function createNewRegion(Request $request){
        $data = $request->all();
        $region =$this->regionService->createNewRegion($data);
        return $region;
    }

    public function deleteRegion(Request $request){
        $id = $request[0];
        $region =$this->regionService->deleteRegion($id);
        return $region;
    }

    public function editRegion(Request $request){
        $data = $request->all();
        $region =$this->regionService->editRegion($data);
        return $region;
    }
}
