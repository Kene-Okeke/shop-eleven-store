<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit {{ $product->name }} — ShopEleven</title>

    <link rel="stylesheet" href="/css/admin/edit-product.css">
</head>

<body>

      <nav class="admin-back-nav">
        <a href="/admin" class="back-dashboard">
            <span>←</span>
            Dashboard
        </a>
     </nav>
    

<div class="edit-product-container">

    <h1>Edit Product</h1>

    <form
        action="/admin/products/{{ $product->id }}"
        method="POST"
        enctype="multipart/form-data"
    >

        @csrf
        @method('PUT')


        <!-- PRODUCT NAME -->

        <div class="form-group">

            <label for="name">Product Name</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ $product->name }}"
            >

        </div>


        <!-- DESCRIPTION -->

        <div class="form-group">

            <label for="description">Description</label>

            <textarea
                id="description"
                name="description"
            >{{ $product->description }}</textarea>

        </div>


        <!-- CATEGORY -->

        <div class="form-group">

            <label for="category">Category</label>

            <select name="category_id" id="category">

                <option value="">Select Category</option>

                @foreach($categories as $category)

                    <option
                        value="{{ $category->id }}"
                        {{ $product->category_id == $category->id ? 'selected' : '' }}
                    >
                        {{ $category->name }}
                    </option>

                @endforeach

            </select>

        </div>


        <!-- PRICE -->

        <div class="form-group">

            <label for="price">Price</label>

            <input
                type="number"
                id="price"
                name="price"
                value="{{ $product->price }}"
            >

        </div>


        <!-- IMAGE -->

        <div class="form-group">

            <label>Current Image</label>

            @if($product->image_url)

                <img
                    src="{{ $product->image_url }}"
                    alt="{{ $product->name }}"
                    class="current-product-image"
                >

            @endif

        </div>


        <div class="form-group">

            <label for="image">Replace Image</label>

            <input
                type="file"
                id="image"
                name="image"
            >

        </div>


        <!-- FEATURED -->

        <div class="form-group">

            <label>

                <input
                    type="checkbox"
                    name="is_featured"
                    value="1"
                    {{ $product->is_featured ? 'checked' : '' }}
                >

                Add to Popular Collection

            </label>

        </div>


        <button type="submit">
            Update Product
        </button>

    </form>

</div>

</body>
</html>