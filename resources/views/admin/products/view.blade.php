<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ShopEleven — Products</title>

    <link rel="stylesheet" href="/css/admin/view-products.css">
</head>

<body>

    <nav class="admin-back-nav">
        <a href="/admin" class="back-dashboard">
            <span>←</span>
            Dashboard
        </a>
    </nav>
    

<div class="products-page">

    <!-- HEADER -->
    <header class="products-header">

        <div>
            <p class="eyebrow">STORE MANAGEMENT</p>
            <h1>Products</h1>
            <p class="header-description">
                View and manage everything in your ShopEleven store.
            </p>
        </div>

        <a href="/admin/products/create" class="create-product-button">
            + Create Product
        </a>

    </header>


    <!-- PRODUCT COUNT -->
    <div class="products-summary">
        <span>{{ $products->count() }}</span>
        <p>Products in your store</p>
    </div>


    <!-- PRODUCTS -->
    <section class="products-container">

        @if($products->count() > 0)

            <div class="products-table-wrapper">

                <table class="products-table">

                    <thead>
                        <tr>
                            <th>PRODUCT</th>
                            <th>CATEGORY</th>
                            <th>PRICE</th>
                            <th>STOCK</th>
                            <th>FEATURED</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($products as $product)

                            <tr>

                                <!-- PRODUCT -->
                                <td class="product-info">

                                    <div class="product-image">

                                        @if($product->image_url)
                                            <img
                                                src="{{ $product->image_url }}"
                                                alt="{{ $product->name }}"
                                            >
                                        @else
                                            <div class="no-image">
                                                No Image
                                            </div>
                                        @endif

                                    </div>

                                    <div class="product-name">
                                        <strong>{{ $product->name }}</strong>

                                        <span>
                                            {{ \Illuminate\Support\Str::limit($product->description, 45) }}
                                        </span>
                                    </div>

                                </td>


                                <!-- CATEGORY -->
                                <td>
                                    <span class="category-badge">
                                        {{ $product->category_id }}
                                    </span>
                                </td>


                                <!-- PRICE -->
                                <td class="product-price">
                                    GH₵{{ number_format($product->price, 2) }}
                                </td>


                                <!-- STOCK -->
                                <td>

                                    @if($product->stock_quantity > 0)

                                        <span class="stock available">
                                            {{ $product->stock_quantity }} in stock
                                        </span>

                                    @else

                                        <span class="stock unavailable">
                                            Out of stock
                                        </span>

                                    @endif

                                </td>


                                <!-- FEATURED -->
                                <td>

                                    @if($product->is_featured)

                                        <span class="featured">
                                            ★ Featured
                                        </span>

                                    @else

                                        <span class="not-featured">
                                            —
                                        </span>

                                    @endif

                                </td>


                                <!-- ACTION -->
                            <td class="product-actions">

                                    <a href="/admin/products/{{ $product->id }}/edit" class="edit-button">
                                        Edit
                                    </a>

                                <form action="/admin/products/{{ $product->id }}"
                                     method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this product?');">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="delete-button">
                                        Delete
                                    </button>

                                </form>

                            </td>

                                

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        @else

            <!-- EMPTY STATE -->

            <div class="empty-products">

                <div class="empty-icon">
                    +
                </div>

                <h2>No products yet</h2>

                <p>
                    Your ShopEleven store doesn't have any products yet.
                </p>

                <a href="/admin/products/create" class="create-product-button">
                    Create Your First Product
                </a>

            </div>

        @endif

    </section>

</div>

</body>
</html>
