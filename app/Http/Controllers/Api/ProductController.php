<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Exception;
class ProductController extends Controller
{
    public function index(Request $request)
    {
        try {
            $products=Product::where('category_id', $request->category_id)->cursorPaginate(10, ['id', 'name', 'base_image']);
            return  response()->json([
                'status' => 'success',
                'message' => 'products list',
                'products' => $products
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'something went wrong',
            ], 500);
        }
    }

    public function show(Request $request)
    {
        try {
            $product=Product::select('id','name','base_image')->with('rentTenures:id,product_id,label,tenure_in_hours')
            ->with('sizes:id,product_id,label')->with('prices:id,product_id,price,discount')->first();

            return  response()->json([
                'status' => 'success',
                'message' => 'products list',
                'products' => $product
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'something went wrong',
            ], 500);
        }
    }

    public function search(Request $request)
    {
        try {
            $products=Product::where('name', 'like', '%'.$request->product.'%')->cursorPaginate(10, ['id', 'name', 'base_image']);
            return  response()->json([
                'status' => 'success',
                'message' => 'products list',
                'products' => $products
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'something went wrong',
            ], 500);
        }
    }
}
