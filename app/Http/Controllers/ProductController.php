<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //This is the function to return JSON data for all products(in simple terms get all products)
    public function index(){

        //Get all products with their categories
        $products = Product::with('category')->get();

        return response() ->json([
            'success' => true,
            'message' => 'Products retrieved successfully',
            'data' => $products
        ]);
    }

    //Get single product by ID
    public function show($id){
        $product = Product::with('category') ->find($id);

        //if products don't exist
        if(!$product){
            return response()->json([
                'success' => false,
                'message' => 'Product not found'
            ],404); //404 is the https code for not found - if this is not added the browser thinks the response is always successful since data is received 
        }

        return response()->json([
            'success' => true,
            'message'=> 'Product retrieved successfully',
            'data' => $product
        ]);
    }

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

        if(!query){
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
