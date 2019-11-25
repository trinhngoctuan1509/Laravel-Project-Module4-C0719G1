<?php


namespace App\Services\Impl;
use App\Repositories\PostAuthUserRepository;
use App\Services\PostAuthUserService;

class PostAuthUserServiceImpl implements PostAuthUserService
{
    protected $postAuthUserRepository;


    public function __construct(PostAuthUserRepository $postAuthUserRepository)
    {
        $this->postAuthUserRepository = $postAuthUserRepository;
    }

    public function getPostByUser()
    {
       $result = $this->postAuthUserRepository->getPostByUser();
       return $result;
    }

    public function findPostById($id)
    {
        $data = $this->postAuthUserRepository->findPostById($id);
        $statusCode = 200;
        $result = [
            'statusCode' => $statusCode,
            'data' => $data
        ];
        if (!$data){
            $result = [
                'statusCode' => 400,
                'data' => 'Unable to access other people posts'
            ];
        }
        return $result;

    }

    public function create($data)
    {
        $post = $this->postAuthUserRepository->create($data);
        $statusCode = 201;
        if (!$post)
            $statusCode = 500;
        $result = [
            'statusCode' => $statusCode,
            'post' => $post
        ];
        return $result;
    }

    public function update($request, $id)
    {
        $oldPost = $this->postAuthUserRepository->findPostById($id);

        if (!$oldPost) {
            $newPost = null;
            $statusCode = 404;
        } else {
            $newPost = $this->postAuthUserRepository->update($request, $oldPost);
            $statusCode = 200;
        }

        $data = [
            'statusCode' => $statusCode,
            'post' => $newPost
        ];
        return $data;
    }

    public function destroy($id)
    {
        $post = $this->postAuthUserRepository->findPostById($id);
        $statusCode = 404;
        $message = "Bài viết không tồn tại hoặc Bạn không có quyền xóa bài viết này";
        if ($post) {
            $this->postAuthUserRepository->destroy($post);
            $statusCode = 200;
            $message = "Delete success!";
        }
        $data = [
            'statusCode' => $statusCode,
            'message' => $message
        ];
        return $data;
    }

    public function searchTitlePostAuth($data)
    {
        $post = $this->postAuthUserRepository->searchTitlePostAuth($data);
        return $post;
    }
}
