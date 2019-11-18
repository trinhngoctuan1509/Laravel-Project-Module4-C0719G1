<?php

namespace App\Services\Impl;

use App\Repositories\PostRepository;
use App\Services\PostService;

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/28/2018
 * Time: 2:25 PM
 */

class PostServiceImpl implements PostService
{
    protected $postRepository;


    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAll()
    {
        $posts = $this->postRepository->getAll();

        return $posts;
    }

    public function findById($id)
    {
        $post = $this->postRepository->findById($id);

        $statusCode = 200;
        if (!$post)
            $statusCode = 404;

        $data = [
            'statusCode' => $statusCode,
            'post' => $post
        ];

        return $data;
    }

    public function create($request)
    {
        $post = $this->postRepository->create($request);

        $statusCode = 201;
        if (!$post)
            $statusCode = 500;

        $data = [
            'statusCode' => $statusCode,
            'post' => $post
        ];

        return $data;
    }

    public function update($request, $id)
    {
        $oldPost = $this->postRepository->findById($id);

        if (!$oldPost) {
            $newPost = null;
            $statusCode = 404;
        } else {
            $newPost = $this->postRepository->update($request, $oldPost);
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
        $post = $this->postRepository->findById($id);

        $statusCode = 404;
        $message = "Post not found";
        if ($post) {
            $this->postRepository->destroy($post);
            $statusCode = 200;
            $message = "Delete success!";
        }

        $data = [
            'statusCode' => $statusCode,
            'message' => $message
        ];
        return $data;
    }

    public  function  searchPostGeneral($conditionsOfSearchPostGeneral){
        $posts = $this->postRepository->searchPostGeneral($conditionsOfSearchPostGeneral);
        return $posts;
    }

    public function getAllPosts()
    {

        $posts = $this->postRepository->getAllPost();
        return $posts;
    }
    public function findByIdAllpost($id)
    {
        $postAll = $this->postRepository->findByIdAllpost($id);

        $statusCode = 200;
        if (!$postAll)
            $statusCode = 404;

        $data = [
            'statusCode' => $statusCode,
            'postAll' => $postAll
        ];

        return $data;
    }

    public function searchPostBasic($data)
    {

        $result = $this->postRepository->searchPostBasic($data);
        return $result;
    }
}
