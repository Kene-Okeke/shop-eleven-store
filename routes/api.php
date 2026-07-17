<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::get('/user',function(Request $request){
    return $request->user();
})->middleware('auth:sanctum');



//Get products by category
Route::get('/categories/{categoryId}/products',[ProductController::class,'byCategory']);

//Search Products
Route::get('/products/search',[ProductController::class, 'search']);