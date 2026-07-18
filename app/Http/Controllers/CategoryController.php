<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        try{
             $validated = $request->validate([
            'name'=> 'required|string|max:255|unique:categories,name',
            'description'=> 'nullable|string'
        ]);

        $category =  Category::create($validated);
       
        return response()->json([
            'success' => true,
            'message' => 'Category created successfully',
            'category' => [
                'id' => $category->id,
                'name'=> $category->name,
            ]
            
        ]);
        } catch(\Exception $e){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 400);
        }
       

    }
}
