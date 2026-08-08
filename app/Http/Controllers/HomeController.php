<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $popularProducts = Product::where('is_featured', true)
            ->take(3)
            ->get();

        //talk to the category model to pull all categories
        $categories = Category::take(4)->get();

        $bagProducts = Product::where('category_Id', 1)->get(); //cotinue
       

        return view('home',compact('popularProducts', 'categories', 'bagProducts'));
    }
}
