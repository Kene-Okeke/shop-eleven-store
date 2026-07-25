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

            <input type="search" placeholder="Search" class='third-search-box' id ="search-input">

            <div class="search-icon-container">
                 <img src="images/search-icon.png" alt="search-icon">
            </div>
           

        </form>

    </div>

    <div class="men-women-children">

        <a href="/cart"><h3 class="men">Cart</h3></a>
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
         <a href="/shop">All Products</a>
        </label>
        @foreach($categories as $category)
        <label>
            <input type="radio" name="product-category" class="category-filter" value="{{$category->id}}">
            {{ $category->name }}
        </label>
        @endforeach
       
         

    </div>
    <div class="shop-list-column" id="product-list">

        <!-- product card--> 
         @foreach($products as $product)
       
         <div class="product-container">
          <a href="/products/{{$product->id}}" class="product-link">
            <div class="image-container">
                 <img class="product-img" src="{{ $product->image_url }}" alt="product-image">
            </div>
        
            <h1 class="product-text">{{$product->name}}</h1>
        </a>
            <div class="pricexcart">

                <div class="Pricebutton-container">
                   <h1 style="font-size:15px; padding-top:13px;">GH₵ {{ $product->price }}</h1> 
                </div>

                <div class="cart-cont"
                    data-id="{{ $product->id }}"
                    data-name="{{ $product->name }}"
                    data-price="{{ $product->price }}"
                    data-image="{{ $product->image_url }}"
                    data-category="{{ $product->category->name }}"
                >

                    <span class="cart-badge">0</span>

                    <img src="/images/cart-icon.png" alt="cart-icon">

                </div>
                  
                
               
            </div>
         </div>
       
         @endforeach
        
    </div>
</div>

<div class="footer-section">

            <div class="footer-column-a">
                <div class="logo-footer" style="margin-top:13px;">
                    <img src="/images/shopelevenlogo.png" alt="shop-logo" >
                    <h1 class="shop-text">ShopEleven</h1>

                </div>

                <h1 class="footer-tagline" style="font-size:12px;">Explore our most-loved <br>collection of stylish home </h1>

                <div class="social-icons">
                    <img src="/images/instagram-icon.png" alt="instagram-icon">
                    <img src="/images/snapchat-icon.png" alt="snapchat-icon">
                    <img src="/images/whatsapp-icon.png" alt="whatsapp-icon">
                    <img src="/images/tiktok-icon.png" alt="tiktok-icon">
                
                </div>

                <div class="mail">
                     <h1>shopeleven@gmail.com</h1>

                </div>

               
                

            </div>

            <div class="footer-column-b">

                <span class = "Menu-footer" style=" font-weight:bold; padding-bottom:10px; padding-top:2px; margin-top:13px;">Menu</span>
                <span>Home</span>
                <span style="color:grey;">Shop</span>
                <span style="color:grey;">Account</span>
                <span style="color:grey;">Cart</span>
                

            </div>

            <div class="footer-column-c">
                <span class="Operational"  style=" font-weight:bold; padding-bottom:10px; margin-top:13px;">Operational</span>
                <span style="color:grey;">Everyday: 9:00 - 22:00</span>
                <span style="color:grey;">Sat-Sun: 8:00 - 21:00</span>
                <span class="Reach" style=" font-weight:bold; padding-bottom:10px; padding-top:15px;">Reach out to us ? </span>
                <span class="phone-number" style=" font-weight:bold; padding-bottom:10px; line-height:10px;">+(233) 592-128-637</span>

            </div>

            <div class="footer-column-d">
                <h2 style="font-size:27px; padding-bottom:12px; "> Subscribe to our newsletter</h2>

                <form class="subscribe">
                    <input type="email" placeholder="Email">
                    <button type="submit">Subscribe</button>
                </form>

                <p style="padding-top:10px;">Subscribe to our newsletter to be the first to know <br> about news and offers</p>

            </div>

        </div>
    
 @vite('resources/js/app.js')
</body>
</html>