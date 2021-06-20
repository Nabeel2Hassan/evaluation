<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Exception;

class CategoryController extends Controller
{
    public function index()
    {
        try {
            $categories=Category::cursorPaginate(10, ['id', 'name', 'icon']);
            return  response()->json([
                'status' => 'success',
                'message' => 'categories list',
                'categories' => $categories
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'something went wrong',
            ], 500);
        }
    }
}
