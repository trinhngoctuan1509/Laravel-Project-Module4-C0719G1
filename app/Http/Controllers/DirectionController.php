<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DirectionService;
class DirectionController extends Controller
{
    protected $directionService;
    public function __construct(DirectionService $directionService)
    {
        $this->directionService = $directionService;
    }
    public function index()
    {
        $direction = $this->directionService->getAll();

        return response()->json($direction, 200);
    }
    public function show($id)
    {
        $direction = $this->directionService->findById($id);

        return response()->json($direction['direction'], $direction['statusCode']);
    }
}
