<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="/css/single-product.css">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<body>
    <!-- this is the nav bar section-->
        <nav>
            <div class="menu-image-single">
                <img src="/images/menu-bar.png" alt="menu-bar" >
            </div>

            <div class="logo">

                <img src="/images/shopelevenlogo.png" alt="shop-logo" class="shop-logo">
                <h1 class="shop-eleven-text">ShopEleven</h1>

            </div>

            <div class="right-nav-section">
                <ul class="right-nav-items">
                    <li><a href="">About</a></li>
                    <li><a href="">FAQ's</a></li>
                    <li class="single-cart-image">
                        <img src="/images/cart-icon.png" alt="cart-icon" class="cart-bar">
                    </li>
                    
                </ul>
                
            </div>
        </nav>

<!--This will be right under the nav bar with the search icons-->
<section class="search-under-nav">

     <div class="container-search">

        <form action="" class="categories-form">

            <input type="Categories" class='categories-search-box' placeholder="Categories">

        <div class="first-arrow-background">
             <h3 class="form-down-arrow">⌄</h3>
        </div>
           

        </form>

        <form action="" class="new-product-form">

            <input type="New Product" placeholder="New Product" class='product-search-box'>
            
            <div class="second-arrow-background">
                <h3 class="form-down-arrow">⌄</h3>
            </div>
            

        </form>

        <form action="" class="search-form">

            <input type="search" placeholder="Search" class='third-search-box'>

            <div class="search-icon-container">
                 <img src="images/search-icon.png" alt="search-icon">
            </div>
           

        </form>

    </div>

    <div class="men-women-children">

        <h3 class="men">Men</h3>
        <h3 class="women">Women</h3>
        <h3 class=" children">Children</h3>
        <h3 class="Brands">Brands</h3>

    </div>


</section>

<section class="back-arrow">
    <span>← Home </span>
</section>

<!-- this categoryAndShopcont is the 2 column structure for where products will be listed !-->
 
<div class="categoryAndShopcont">

    <div class="category-column">

        <h1>Category</h1>

        <label>
            <input type="checkbox" name="all-products">
            All Products
        </label>
        @foreach($categories as $category)
        <label>
            <input type="checkbox" name="product-category">
            {{ $category->name }}
        </label>
        @endforeach
       
         

    </div>
    <div class="shop-list-column">

        <!-- product card--> 
         @foreach($products as $product)
         <a href="/products/{{$product->id}}" class="product-link">
         <div class="product-container">

            <div class="image-container">
                 <img class="product-img" src="{{ $product->image_url }}" alt="product-image">
            </div>
           
            <h1 class="product-text">{{$product->name}}</h1>

            <div class="pricexcart">

                <div class="Pricebutton-container">
                   <h1 style="font-size:15px; padding-top:13px;">GH₵ {{ $product->price }}</h1> 
                </div>

                <div class="cart-cont">
                    <img src="/images/cart-icon.png" alt="cart-icon">
                </div>
               
            </div>
         </div>
        </a>
         @endforeach
        
    </div>
</div>

</body>
</html>