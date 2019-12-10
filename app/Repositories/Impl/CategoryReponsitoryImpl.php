<?php


namespace App\Repositories\Impl;

use App\Category;
use App\Repositories\CategoryReponsitory;
use App\Repositories\Eloquent\EloquentRepository;

class CategoryReponsitoryImpl extends EloquentRepository implements CategoryReponsitory
{

    /**
     * get Model
     * @return string
     */
    public function getModel()
    {
        $model = Category::class;
        return $model;
    }

    public function createNewCategory($data)
    {
        $categoryCode = $data['categoryCode'];
        $categoryName = $data['categoryName'];

        $category = new Category();
        $category->categoryCode = $categoryCode;
        $category->categoryName = $categoryName;
        $category->save();
        return $category;
    }

    public function deleteCategory($id){
        $category = $this->model->where('id','=',$id)->delete();
        return $category;
    }

    public function editCategory($data){
        $categoryId = $data['categoryId'];
        $categoryCode = $data['categoryCode'];
        $categoryName =$data['categoryName'];

        $category = Category::find($categoryId);
        $category->categoryCode = $categoryCode;
        $category->categoryName = $categoryName;
        $category->save();

        return $category;

    }
}
