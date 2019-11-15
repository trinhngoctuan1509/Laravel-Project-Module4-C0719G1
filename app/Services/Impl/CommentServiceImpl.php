<?php

namespace App\Services\Impl;

use App\Repositories\CommentRepository;
use App\Services\CommentService;

/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/28/2018
 * Time: 2:25 PM
 */

class CommentServiceImpl implements CommentService
{
    protected $commentRepository;


    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }

    public function getAll()
    {
        $comments= $this->commentRepository->getAll();

        return $comments;
    }

    public function findById($id)
    {
        $comment = $this->commentRepository->findById($id);

        $statusCode = 200;
        if (!$comment) {
            $statusCode = 404;
        }
            $data = [
                'statusCode' => $statusCode,
                'customers' => $comment
            ];

        return $data;
    }

    public function create($request)
    {
        $comment = $this->commentRepository->create($request);

        $statusCode = 201;
        if (!$comment) {
            $statusCode = 500;
        }
        $data = [
            'statusCode' => $statusCode,
            'customers' => $comment
        ];

        return $data;
    }

    public function update($request, $id)
    {
        $oldComment = $this->commentRepository->findById($id);

        if (!$oldComment) {
            $newComment = null;
            $statusCode = 404;
        } else {
            $newComment = $this->commentRepository->update($request, $oldComment);
            $statusCode = 200;
        }

        $data = [
            'statusCode' => $statusCode,
            'comments' => $newComment
        ];
        return $data;
    }

    public function destroy($id)
    {
        $comment = $this->commentRepository->findById($id);

        $statusCode = 404;
        $message = "User not found";
        if ($comment) {
            $this->commentRepository->destroy($comment);
            $statusCode = 200;
            $message = "Delete success!";
        }

        $data = [
            'statusCode' => $statusCode,
            'message' => $message
        ];
        return $data;
    }

}
