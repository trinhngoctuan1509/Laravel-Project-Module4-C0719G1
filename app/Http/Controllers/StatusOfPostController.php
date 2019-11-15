<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StatusOfPostService;
class StatusOfPostController extends Controller
{
    protected $statusOfPostService;
    public function __construct(StatusOfPostService $statusOfPostService)
    {
        $this->statusOfPostService = $statusOfPostService;
    }
    public function index()
    {
        $statusOfPost = $this->statusOfPostService->getAll();

        return response()->json($statusOfPost, 200);
    }
    public function show($id)
    {
        $statusOfPost = $this->statusOfPostService->findById($id);

        return response()->json($statusOfPost['statusOfPost'], $statusOfPost['statusCode']);
    }
}
