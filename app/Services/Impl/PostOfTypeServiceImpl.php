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

        $postOfType = $this->postOfTypeReponsitory->getAll();
        return $postOfType;
    }

    public function findById($id)
    {

        $postOfType = $this->postOfTypeReponsitory->findById($id);

        $statusCode = 200;
        if (!$postOfType) {
            $statusCode = 404;
        }
        $data = [
            'statusCode' => $statusCode,
            'postOfType' => $postOfType
        ];

        return $data;
    }

    public function getAllPostOfType()
    {
        $postOfTypes = $this->postOfTypeReponsitory->getAllPostOfType();
        return $postOfTypes;
    }

    public function deletePostOfType($id)
    {
        $postOfType = $this->postOfTypeReponsitory->deletePostOfType($id);
        return $postOfType;
    }

    public function editPostOfType($data)
    {
        $postOfType = $this->postOfTypeReponsitory->editPostOfType($data);
        return $postOfType;
    }

    public function createNewPostOfType($data){
        $postOfType = $this->postOfTypeReponsitory->createNewPostOfType($data);
        return $postOfType;
    }
}
