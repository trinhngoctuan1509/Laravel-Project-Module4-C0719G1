<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostAuthUserService;
class PostAuthUserController extends Controller
{
    protected $postAuthUserService;

    public function __construct(PostAuthUserService $postAuthUserService)
    {
        $this->postAuthUserService = $postAuthUserService;
    }

    public function getPostByUser(){
        $result = $this->postAuthUserService->getPostByUser();
        return response()->json($result, 200);
    }

    public function show($id){
        $result = $this->postAuthUserService->findPostById($id);
        return response()->json($result['data'], $result['statusCode']);
    }

    public function store(Request $request)
    {
        $dataPost = $this->postAuthUserService->create($request->all());

        return response()->json($dataPost['post'], $dataPost['statusCode']);
    }

    public function update(Request $request, $id)
    {
        $post = $this->postAuthUserService->update($request->all(), $id);

        return response()->json($post['post'], $post['statusCode']);
    }

    public function destroy($id)
    {
        $post = $this->postAuthUserService->destroy($id);

        return response()->json($post['message'], $post['statusCode']);
    }

    public function searchTitlePostAuth(Request $request){
        $data = $request->all();
        $post = $this->postAuthUserService->searchTitlePostAuth($data);
        return response()->json($post);
    }
}
