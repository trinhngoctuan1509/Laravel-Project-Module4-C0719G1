<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostService;
use App\Http\Requests\PostAddRequest;
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

    public function store(PostAddRequest $request)
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

    public function searchPostGeneral(Request $request){
        $post = $this->postService->searchPostGeneral($request->all());
        return $post;
    }

    public function searchPostByTitle(Request $request){
        $post = $this->postService->searchPostByTitle($request->all());
        return $post;
    }

    public function  searchPostByFengshui(Request $request){
        $post = $this->postService->searchPostByFengshui($request->all());
        return $post;
    }

    public function getAllPost()
    {
        $posts = $this->postService->getAllPosts();

        return response()->json($posts, 200);
    }

    public function searchPostBasic(Request $request){
        $data = $request->json()->all();
        $result = $this->postService->searchPostBasic($data);
        return response()->json($result, 200);
    }

    public function showAllpost($id)
    {
        $postAll = $this->postService->findByIdAllpost($id);

        return response()->json($postAll['postAll'], $postAll['statusCode']);
    }
}
