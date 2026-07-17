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
    <h1>Create New Product</h1>

    <form action='/admin/products/' method="POST" enctype="multipart/form-data">

        @csrf

        <label for="Product-Name">Product name</label>
        <input type="text" id="Product-Name" name="name"> <br> 

        <label for="Description">Description</label>
        <input type="text" id="Description" name="description"> <br>

        <label for="Category">Category</label>

        <select name="category_id">

            <option value="">Select Category</option>

            @foreach($categories as category)

                <option value="{{$category->id}}">
                    {{ $category->name}}
            </option>

        </select>

        <button type="button" data-bs-toggle="modal" data-bs-target="#categoryModal">
            + Add Category
        </button>

        <label for="Price">Price</label>
        <input type="number" id="Price" name="price"> <br>

        <label for="Stock-Quantity">Stock Quantity</label>
        <input type="number" id="Stock-Quantity" name="stock_quantity"> <br>

        <label for="Image">Image</label>
        <input type="file" id="Image" name="image"> <br>

        <button type="submit">
            Create Product
        </button>
    </form>

    @include('admin.categories.create-modal')
</body>
</html>