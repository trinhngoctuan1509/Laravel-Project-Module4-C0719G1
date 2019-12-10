<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TrafficService;
class TrafficController extends Controller
{
    protected $trafficService;
    public function __construct(TrafficService $TrafficService)
    {
        $this->trafficService= $TrafficService;
    }
    public function addView(Request $request){
        $view = $this->trafficService->addView($request->all());
        return response()->json($view);
    }
    public function totalView(){
        $view = $this->trafficService->totalView();
        return response()->json($view);
    }
    public function countViewDate(Request $request){
        $result = $this->trafficService->countViewDate($request->all());
        return response()->json($result);
    }
}
