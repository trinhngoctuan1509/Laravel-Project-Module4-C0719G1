<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getAll();

        return response()->json($posts, 200);
    }

    public function show($id)
    {
        $post = $this->postService->findById($id);

        return response()->json($post['post'], $post['statusCode']);
    }

    public function store(Request $request)
    {
        $post = $this->postService->create($request->all());

        return response()->json($post['post'], $post['statusCode']);
    }

    public function update(Request $request, $id)
    {
        $post = $this->postService->update($request->all(), $id);

        return response()->json($post['post'], $post['statusCode']);
    }

    public function destroy($id)
    {
        $post = $this->postService->destroy($id);

        return response()->json($post['message'], $post['statusCode']);
    }

    public function searchPostAdvanced(Request $request){
        $post = $this->postService->searchPostAdvanced($request->all());
        return $post;
    }
}
