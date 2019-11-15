<?php


namespace App\Services\Impl;
use App\Repositories\CategoryReponsitory;
use App\Services\CategoryService;

class CategoryServiceImpl implements CategoryService
{
    protected $categoryReponsitory;

    public function __construct(CategoryReponsitory $categoryReponsitory)
    {
        $this->categoryReponsitory = $categoryReponsitory;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        $categories = $this->categoryReponsitory->getAll();
        return $categories;
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        $categories = $this->categoryReponsitory->findById($id);

        $statusCode = 200;
        if (!$categories)
            $statusCode = 404;

        $data = [
            'statusCode' => $statusCode,
            'categories' => $categories
        ];

        return $data;
    }
}
