<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SellerService;
class SellerController extends Controller
{
    protected $sellerService;
    public function __construct(SellerService $sellerService)
    {
        $this->sellerService = $sellerService;
    }
    public function index()
    {
        $seller = $this->sellerService->getAll();

        return response()->json($seller, 200);
    }
    public function show($id)
    {
        $seller = $this->sellerService->findById($id);

        return response()->json($seller['seller'], $seller['statusCode']);
    }
}
