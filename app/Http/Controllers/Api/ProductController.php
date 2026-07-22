<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
    
class ProductController extends Controller
{
    
    //Get product by category
    public function byCategory($categoryId){
        $products = Product::where('category_id', $categoryId)
                 -> with('category')
                 ->get();

        if($products->isEmpty()){
            return response()->json([
                'success' => false,
                'message' => 'There are no Products in this category'
            ],404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Products retrieved successfully',
            'data' => $products
        ]);

    }

    //Search Products
    public function search(Request $request){

        $query = $request->query('q'); 

        if(!$query){
            return response()->json([
                'success'=> false,
                'message'=>'Search query is required'
            ],400);
        }

        $products = Product::where('name','like',"%$query%")
                           ->orWhere('description','like',"%$query%")
                           ->with('category')
                           ->get();

        return response()->json([
            'success'=> true,
            'message'=> 'Search results',
            'data' => $products,
            'count' => $products->count()
        ]);
    }


    
}


