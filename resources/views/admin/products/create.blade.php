<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link rel="stylesheet" href="/css/admin/create-product.css">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="create-form-container">

        <h1 class="create_text">Create New Product</h1>

        @if(session('success'))

            <div class="success-message">
                {{session('success')}}
            </div>
        @endif

        @if($errors->any())
            <div class="error-message">
                @foreach($errors->all() as $error)
                    <p>{{error}}</p>
                @endforeach
            </div>
        @endif

        <form action='/admin/products/' method="POST" enctype="multipart/form-data" class="create-product-form">

        @csrf
        <div class="Productlabel_Input">

            <label for="Product-Name">Product name</label>
            <input type="text" id="Product-Name" name="name"> <br> 

        </div>
        
        <div class="descriptionlabelandInput">

            <label for="Description">Description</label>
            <textarea type="text" id="Description" name="description" > </textarea> <br>
        </div>
        
        <div class="category_dropdown">
            <label for="Category">Category</label>

     
            <select name="category_id">

                <option value="">Select Category</option>

                @foreach($categories as $category)

                    <option value="{{$category->id}}">
                    {{ $category->name }}
                    </option>
                @endforeach
            </select>

        </div>
        

        <button type="button" id ="openCategoryModal">
            + Add Category
        </button><br>

        <div class="price-container">
            <label for="Price">Price</label>
            <input type="number" id="Price" name="price"> <br>
        </div>
        

        <label for="Stock-Quantity">Stock Quantity</label>
        <input type="number" id="Stock-Quantity" name="stock_quantity"> <br>
        
        <div class="upload-image-container">
            <label for="Image">Image</label>
            <input type="file" id="Image" name="image"> <br>
        </div>

        <div class="featured-product">
            <label>
                <input type ="checkbox" name="is_featured" value="1">
                Add to Popular Collection
            </label>
        </div>
        
        

        <button type="submit" class="product_submit">
            Create Product
        </button>
        </form>


    </div>

    

    @include('admin.categories.create-modal') 
    @vite('resources/js/admin/create_product.js')
</body>
</html>