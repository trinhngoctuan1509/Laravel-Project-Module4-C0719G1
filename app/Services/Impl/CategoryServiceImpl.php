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
}
