<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
class CategoryController extends Controller
{
    protected $category;
    public function __construct(CategoryService $categoryService)
    {
        $this->category = $categoryService;
    }
    public function index()
    {
        $categories = $this->category->getAll();

        return response()->json($categories, 200);
    }
    public function show($id)
    {
        $categories = $this->category->findById($id);

        return response()->json($categories['categories'], $categories['statusCode']);
    }

    public function createNewCategory(Request $request){
        $data = $request->all();
        $category = $this->category->createNewCategory($data);
        return $category;
    }

    public function deleteCategory(Request $request){
        $id = $request[0];
        $category = $this->category->deleteCategory($id);
        return $category;
    }

    public function editCategory(Request $request){
        $data = $request->all();
        $category = $this->category->editCategory($data);
        return $category;
    }
}
