<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PostOfTypeService;
class PostOfTypeController extends Controller
{
    protected $postOfTypeService;
    public function __construct(PostOfTypeService $postOfTypeService)
    {
        $this->postOfTypeService = $postOfTypeService;
    }
    public function index()
    {
        $postOfType = $this->postOfTypeService->getAll();

        return response()->json($postOfType, 200);
    }
    public function show($id)
    {
        $postOfType = $this->postOfTypeService->findById($id);

        return response()->json($postOfType['postOfType'], $postOfType['statusCode']);
    }
}
