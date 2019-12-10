<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostOfTypeService;
class PostOfTypeController extends Controller
{
    protected $postOfTypeService;
    public function __construct(PostOfTypeService $postOfTypeService)
    {
        $this->postOfTypeService = $postOfTypeService;
    }
    public function index()
    {
        $postOfType = $this->postOfTypeService->getAll();

        return response()->json($postOfType, 200);
    }
    public function show($id)
    {
        $postOfType = $this->postOfTypeService->findById($id);
        return response()->json($postOfType['postOfType'], $postOfType['statusCode']);
    }

    public function getAllPostOfType(){
        $postOfTypes = $this->postOfTypeService->getAllPostOfType();
        return $postOfTypes;
    }

    public function deletePostOfType(Request $request){
        $id = $request[0];
        $postOfType = $this->postOfTypeService->deletePostOfType($id);
        return $postOfType;
    }

    public function editPostOfType(Request $request){
        $data = $request->all();
        $postOfType = $this->postOfTypeService->editPostOfType($data);
        return $postOfType;
    }

    public function createNewPostOfType(Request $request){
        $data = $request->all();
        $postOfType = $this->postOfTypeService->createNewPostOfType($data);
        return $postOfType;
    }
}
