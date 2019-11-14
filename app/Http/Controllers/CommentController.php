<?php
namespace App\Http\Controllers;

use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function index()
    {
        $comments = $this->commentService->getAll();

        return response()->json($comments, 200);
    }

    public function show($id)
    {
        $dataComment = $this->commentService->findById($id);

        return response()->json($dataComment['customers'], $dataComment['statusCode']);
    }

    public function store(Request $request)
    {
        $dataComment = $this->commentService->create($request->all());

        return response()->json($dataComment['customers'], $dataComment['statusCode']);
    }

    public function update(Request $request, $id)
    {
        $dataComment = $this->commentService->update($request->all(), $id);

        return response()->json($dataComment['comments'], $dataComment['statusCode']);
    }

    public function destroy($id)
    {
        $dataComment = $this->commentService->destroy($id);

        return response()->json($dataComment['message'], $dataComment['statusCode']);
    }
}
