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

        //Get all categories
        $categories = Category::all();
        return view('shop', compact('products','categories'));
    }


    //Get single product by ID
    public function show($id){
        $product = Product::with('category')->findOrFail($id);

         $categories = Category::all();

        return view('single-product', compact('product','categories'));
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
            'category_id' => 'required|exists:categories,id',
            'price' => 'required|numeric',
            'stock_quantity' => 'nullable|integer',
            'image'=> 'required|image',
            'is_featured'=> 'nullable|boolean',

        ]);

        $imageUrl = $this->cloudinaryService->upload($request->image);

        Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'category_id' => $validated['category_id'],
            'price' => $validated['price'],
            'stock_quantity' => $validated['stock_quantity'] ?? null,
            'image_url' => $imageUrl,
            'is_featured'=> $request->boolean('is_featured'),
        ]);

        return redirect()->back()->with('success', 'Product created successfully');

    }

    public function adminIndex(){

        $products = Product::all();

        return view('admin.products.view', compact('products'));
    }

    public function edit($id){

        $product = Product::findOrFail($id);

        $categories = Category::all();

        return view('admin.products.edit',compact('product','categories'));
    }

    public function update(Request $request, $id)
    {
    $product = Product::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'category_id' => 'required|exists:categories,id',
        'price' => 'required|numeric',
        'stock_quantity' => 'nullable|integer',
        'image' => 'nullable|image',
        'is_featured' => 'nullable|boolean',
    ]);

    $imageUrl = $product->image_url;

    if ($request->hasFile('image')) {
        $imageUrl = $this->cloudinaryService->upload($request->image);
    }

    $product->update([
        'name' => $validated['name'],
        'description' => $validated['description'],
        'category_id' => $validated['category_id'],
        'price' => $validated['price'],
        'stock_quantity' => $validated['stock_quantity'] ?? null,
        'image_url' => $imageUrl,
        'is_featured' => $request->boolean('is_featured'),
    ]);

    return redirect('/admin/products')->with('success', 'Product updated successfully');
    }

    public function destroy($id)    
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect('/admin/products')
         ->with('success', 'Product deleted successfully');
    }

    public function admin(){

        $products = Product::all();

        $categories = Category::all();

        return view('admin.dashboard',compact('products','categories'));


    }
    
}
