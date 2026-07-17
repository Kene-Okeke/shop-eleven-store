<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required|string|max:255|unique:categories,name',
            'description'=> 'nullable|string'
        ]);

        $category =  Category::create($validated);
       
        return response()->json([
            'id' => $category->id,
            'name'=> $category->name,
        ]);

    }
}
