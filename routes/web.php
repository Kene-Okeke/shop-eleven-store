<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/shop', [ProductController::class, 'index']);

//Route::get('/product', function () {
   // return view('single-product');
//});

Route::get('/admin/products/create',[ProductController::class, 'create']);

Route::post('/admin/categories',[CategoryController::class,'store']);

Route::post('/admin/products/',[ProductController::class, 'store']);

Route::get('/admin/categories/create-modal', function(){
    return view('admin.categories.create-modal');
});

Route::get('/cart', function(){
    return view('cart');
});


