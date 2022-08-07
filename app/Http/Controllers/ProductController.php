<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProducts() {
        $products = Product::orderBy('id', 'DESC')->paginate(20);

        if($products) {
            return response()->json([
                'products' => $products,
                'status' => 200,
            ]);
        } else {
            return response()->json([
                'message' => 'data not found',
                'status' => 404,
            ]);
        }
    }

    public function searchProducts($key) {
        $products = Product::where('name', 'LIKE', "%{$key}%")->orderBy('id', 'DESC')->paginate(16);
        
        return response()->json([
            'products' => $products,
            'status' => 200,
        ]);
    }
}
