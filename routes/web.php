<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/product', function () {
    return view('single-product');
});

Route::get('/admin/products/create',[ProductController::class, 'create']);

Route::get('/admin/categories',[CategoryController::class,'store']);

Route::post('/admin/products/',[ProductController::class, 'store']);