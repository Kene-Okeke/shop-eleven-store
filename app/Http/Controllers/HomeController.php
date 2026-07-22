<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $popularProducts = Product::where('is_featured', true)
            ->take(3)
            ->get();

        return view('home',compact('popularProducts'));
    }
}
