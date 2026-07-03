<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user',function(Request $request){
    return $request->user();
})->middleware('auth:sanctum');

//-- PRODUCT ROUTES--//

// Get all products
Route::get('/products', [ProductController::class,'index']);

//Get single products
Route::get('/products/{id}',[ProductController::class,'show']);

//Get products by category
Route::get('/categories/{categoryId}/products',[ProductController::class,'byCategory']);

//Search Products
Route::get('/products/search',[ProductController::class, 'search']);