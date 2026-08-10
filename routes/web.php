<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/shop', [ProductController::class, 'index']);

Route::get('/cart', function(){
    return view('cart');
});

//admin protected routes 

Route::middleware('auth')->group(function (){
    Route::get('/admin/products/create',[ProductController::class, 'create']);

    Route::post('/admin/categories',[CategoryController::class,'store']);

    Route::post('/admin/products',[ProductController::class, 'store']);

    Route::get('/admin/categories/create-modal', function(){
        return view('admin.categories.create-modal');
    });

    Route::get('/admin' ,[ProductController::class, 'admin']);
    
    
    Route::get('/admin/products',[ProductController::class, 'adminIndex']); //this is the route to view products in the admin page

    Route::get('/admin/products/{id}/edit',[ProductController::class, 'edit']);

    Route::put('/admin/products/{id}',[ProductController::class, 'update']);

    Route::delete('/admin/products/{id}', [ProductController::class, 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});


//login routes 
Route::get('/admin/login',function(){
    return view('admin.login');
})->name('login');

Route::post('/login', [AuthController::class,'login']);
