<?php


namespace App\Services\Impl;
use App\Repositories\PostOfTypeReponsitory;
use App\Services\PostOfTypeService;

class PostOfTypeServiceImpl implements PostOfTypeService
{
    protected $postOfTypeReponsitory;

    public function __construct(PostOfTypeReponsitory $postOfTypeReponsitory)
    {
        $this->postOfTypeReponsitory = $postOfTypeReponsitory;
    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
        $postOfType = $this->postOfTypeReponsitory->getAll();
        return $postOfType;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        $postOfType = $this->postOfTypeReponsitory->findById($id);

        $statusCode = 200;
        if (!$postOfType)
            $statusCode = 404;

        $data = [
            'statusCode' => $statusCode,
            'postOfType' => $postOfType
        ];

        return $data;
    }
}
