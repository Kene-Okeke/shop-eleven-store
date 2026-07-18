<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Services\CloudinaryService;

class ProductController extends Controller
{
    protected $cloudinaryService;

    public function __construct(CloudinaryService $cloudinaryService){

            $this->cloudinaryService = $cloudinaryService;
        }


    //This is the function to return blade data for all products(in simple terms get all products)
    public function index(){

        //Get all products with their categories
        $products = Product::with('category')->get();
        return view('shop', compact('products'));
    }

    //Get single product by ID
    public function show($id){
        $product = Product::with('category')->findOrFail($id);

        return view('single-product', compact('product'));
    }

    //return the view to create a new product
    public function create(){

        $categories = Category::all();
        
        return view('admin.products.create',compact('categories'));
    }

    //here is the function that stores our product data to the database on create
    public function store(Request $request){
       
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'image'=> 'required|image',
        ]);

        $imageUrl = $this->cloudinaryService->upload($request->image);

        Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'stock_quantity' => $validated['stock_quantity'],
            'image_url' => $imageUrl,
        ]);

        return redirect()->back()->with('success', 'Product created successfully');

    }
    
}
