<?php


namespace App\Services\Impl;

use App\Repositories\StatusOfPostRepository;
use App\Services\StatusOfPostService;
class StatusOfPostServiceImpl implements StatusOfPostService
{
    protected $statusOfPostRepository;

    public function __construct(StatusOfPostRepository $statusOfPostRepository)
    {
        $this->statusOfPostRepository = $statusOfPostRepository;
    }
    public function getAll()
    {
        // TODO: Implement getAll() method.
        $statusOfPost = $this->statusOfPostRepository->getAll();
        return $statusOfPost;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        $statusOfPost = $this->statusOfPostRepository->findById($id);

        $statusCode = 200;
        if (!$statusOfPost)
            $statusCode = 404;

        $data = [
            'statusCode' => $statusCode,
            'statusOfPost' => $statusOfPost
        ];

        return $data;
    }
}
