<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single-Product-Page</title>
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
                 <img src="/images/search-icon.png" alt="search-icon">
            </div>
           

        </form>

    </div>

    <div class="men-women-children">

       <a href="/cart"><h3 class="men">Cart</h3> </a> 
        <h3 class="women">Women</h3>
        <h3 class=" children">Children</h3>
        <h3 class="Brands">Brands</h3>

    </div>


</section>

<section class="back-arrow">
    <span>← Home . Product details</span>
</section>

<!--This is the product section with the picture on one side and details on the other -->
<!-- This is the two-column section-->

<div class="product-two-column-section">

    <!-- This is the image on the left -->

    <div class="product-two-column-wrapper">

         <div class="image-left">
            <img src="{{$product->image_url}}" alt="tote-bag">
        </div>

        <div class="single-product-details">

            <div class="men-delivery-block">

                <div class="single-category-button">
                <h3>{{ $product->category->name }}</h3>
            </div>

            <h1>{{$product->name}}</h1>

            <span class="product-price">GH₵{{$product->price}}</span>

            <div class="caution">
                <img src="/images/caution-icon.png" alt="caution-sign">
                <span> Free delivery at the University of Ghana </span>
            </div>

        </div>

        <div class="select-color-section">

            <h3 class="color-text">Select Color</h3>

            <div class="color-options">
                <span>green</span>
                <span>blue</span>
                <span>pink</span>
                <span>black</span>
                <span>brown</span>
                
            </div>
            
            <div class="Addtocart">

                <div class="addtocart-button"> 
                    <h3> Add to Cart</h3>
                 </div>
                
                 <span class="heart-emoji">♡</span>
                
            </div>

        </div>

        <div class="description-section">

            <div class="Description-and-Fit">

                <h1 class="title">Description & Fit</h1>
                <img src="/images/slide-up-arrow.png" alt="slide-up-arrow">

            </div>

           

            <p>{{$product->description}}<br>
            </p>

        </div>

        <div class="shipping-and-delivery-details">

            <div class="Shipping-and-arrow">

                <h1 class="shipping-text">Shipping</h1>
                <img src="/images/slide-up-arrow.png"alt="slide-up-arrow">

            </div>

            <div class="discount-and-package-flexbox">

                <div class="discount-block">

                    <div class="discount-image">
                        <img src="/images/discount-icon.png" alt="discount-icon">
                    </div>

                    <div class="discount-text">
                        <h3>Discount</h3>
                        <h4>Disc 50%</h4>
                        
                    </div>

                </div>

                <div class="package-block">

                    <div class="package-image">
                        <img src="/images/package-icon.png" alt="package-icon">
                    </div>

                    <div class="package-text">
                        <h3>Package</h3>
                        <h4>Regular Package</h4>   
                    </div>


                </div>

             </div>

            <div class="delivery-and-estimation-flexbox">

                <div class="delivery-time-block">

                    <div class="delivery-image">
                        <img src="/images/delivery-icon.png" alt="delivery-icon">
                    </div>

                    <div class="delivery-text">
                        <h3>Delivery Time</h3>
                        <h4>3-4 Working Days</h4>
                        
                    </div>

                </div>

                <div class="Estimation-block">

                    <div class="estimation-image">
                        <img src="/images/arrival-icon.png" alt="arrival-icon">
                    </div>

                    <div class="estimation-text">
                        <h3>Estimation Arrive</h3>
                        <h4>10 -12 October 2024</h4>   
                    </div>


                </div>
                
            </div>
        </div>



    </div>


    
    </div>

   

</div>

<!--THIS IS THE RATINGS AND REVIEWS SECTION-->

<section class="section-rating">

    <div class="rating-reviews-text">
        <h2>Rating & Reviews</h2>
    </div>

    <div class="Rating-comment-two-columns">

        <div class="rating-number-block">

            <div class="number-block">

                <div class="rating-flex">
                    <h1>4.5</h1>
                    <h4>/5</h4>
                </div>

                <h3>(50 New Reviews)</h3>

            </div>

            <div class="rating-widgets">

                <div class="ratings-bar">
                    <div class="star-conatiner">
                        <span>⭐️ 5</span>
                    </div>
                    
                    <div class="fill-container">

                         <div class="fill" style="width:80%;"></div>

                    </div>
                   
                </div>

                <div class="ratings-bar">
                    <div class="star-conatiner">
                        <span>⭐️ 4</span>
                    </div>
                
                <div class="fill-container">
                     <div class="fill" style="width:20%;"></div>

                </div>
                   
                </div>

                <div class="ratings-bar">

                    <div class="star-conatiner">
                        <span>⭐️ 3</span>
                    </div>
                
                   <div class="fill-container">
                     <div class="fill" style="width:10%;"></div>

                    </div>
                </div>

                <div class="ratings-bar">

                     <div class="star-conatiner">
                        <span>⭐️ 2</span>
                    </div>

                    <div class="fill-container">
                     <div class="fill" style="width:5%;"></div>

                    </div>
                </div>

                <div class="ratings-bar">
                    <div class="star-conatiner">
                        <span>⭐️ 1</span>
                    </div>

                    <div class="fill-container">
                     <div class="fill" style="width:3%;"></div>

                    </div>
                </div>

            </div>

        </div>

        <div class="review-block">
            <span>Okeke Kene</span>

            <div class="date-flex">
                <span>⭐️    ⭐️    ⭐️    ⭐️    ⭐️</span>
                <h3>2 July 2026</h3>
            </div>

            <div class="review">
                <h3>
                    "I love how easy it is to find stylish and practical items on Shop Eleven. <br> 
                    The customer service was excellent, and the products exceeded my expectations."
                </h3>

                <div class="right-arrow">
                    <img src="/images/right-arrow.png" alt="right-arrow">
                </div>

            </div>

            <div class="image-of-reviewer">
                <img src="/images/review-picture.png" alt="reviewer-image">

            </div>

            <div class="swipe-progress-bar" style="width:5%;"></div>

        </div>

    </div>

</section>

<!--YOU MIGHT ALSO LIKE SECTION-->

<div class="You-might-also-like">
    <h1>You might also like</h1>

    <div class="might-like-images">
        <div class="image">
            <img src="/images/powerbank.jpg" alt="powerbank">

            <span style="font-weight:900; font-size:17px; padding-top:13px">Green 100Hz Powerbank</span>
            <span style="font-weight:light; font-size:14px; padding-top:3px; color:#939393">100gh</span>
        </div>
        <div class="image">
            <img src="/images/pink-summer-vibes.jpg" alt="pink-bag">

            <span style="font-weight:900; font-size:17px; padding-top:13px">Pink Summer Vibes Tote bag</span>
            <span style="font-weight:light; font-size:14px; padding-top:3px; color:#939393">100gh</span>
        </div>
        <div class="image">
            <img src="/images/hotplate.jpg" alt="hot-plate">

            <span style="font-weight:900; font-size:17px; padding-top:13px">Hot-plate Cooker</span>
            <span style="font-weight:light; font-size:14px; padding-top:3px; color:#939393">350gh</span>
        </div>
        <div class="image">
            <img src="/images/bedtables.jpg" alt="bedtables">

            <span style="font-weight:900; font-size:17px; padding-top:13px">Bed Study Table</span>
            <span style="font-weight:light; font-size:14px; padding-top:3px; color:#939393">100gh</span>
        </div>
    </div>
</div>

<!--footer section-->

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
    
</body>
</html>