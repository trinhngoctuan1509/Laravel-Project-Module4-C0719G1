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

        $categories = $this->categoryReponsitory->getAll();
        return $categories;
    }

    public function findById($id)
    {

        $categories = $this->categoryReponsitory->findById($id);

        $statusCode = 200;
        if (!$categories) {
            $statusCode = 404;
        }


        $data = [
            'statusCode' => $statusCode,
            'categories' => $categories
        ];

        return $data;
    }

    public function createNewCategory($data)
    {
        $category = $this->categoryReponsitory->createNewCategory($data);
        return $category;
    }

    public function deleteCategory($id){
        $category = $this->categoryReponsitory->deleteCategory($id);
        return $category;
    }

    public function editCategory($data){
        $category = $this->categoryReponsitory->editCategory($data);
        return $category;
    }
}
