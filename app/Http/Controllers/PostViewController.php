<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostViewService;
class PostViewController extends Controller
{
    protected $postViewService;
    public function __construct(PostViewService $PostViewService)
    {
        $this->postViewService = $PostViewService;
    }

    public function upView(Request $request){
      $view=  $this->postViewService->upViewPost($request->all());
      return response()->json($view);
    }
    public function getTopView(){
        $result=  $this->postViewService->getTopView();
        return response()->json($result);
    }
}
