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
        <nav class="desktop-nav">
            <a href="/shop"> 
                <div class="menu-image-single">
                    <img src="/images/buy.png" alt="menu-bar" >
                </div>
            </a>
                <div class="logo">

                   <img src="/images/shopelevenlogo.png" alt="shop-logo" class="shop-logo">
                    <h1 class="shop-eleven-text">ShopEleven</h1>

                </div>
            
            <div class="right-nav-section">
                <ul class="right-nav-items">
                    <li><a href="/shop">Shop</a></li>
                      <li><a href="https://wa.me/233592128637">Help</a></li>
                    <li class="single-cart-image">
                        <span class="single-badge-nav">0</span>
                        <a href="/cart"><img src="/images/cart-icon.png" alt="cart-icon" class="cart-bar"></a>
                    </li>
                    
                </ul>
                
            </div>
        </nav>

        <nav class="mobile-nav">

            <div class="mobile-menu-bar">
                <img src="/images/white-menu.png" alt="menu-icon" class="menu-bar">
            </div>

            <div class="logo">
                <img src="/images/shopelevenlogo.png" alt="shop-logo" class="shop-logo">
                 <h1 class="shop-eleven-text">ShopEleven</h1>
            </div>

            <ul>
                <li class="single-cart-image">

                    <span class="single-badge-nav">0</span>

                        <div class="mobile-cart-cont">

                            <a href="/cart">
                                <img src="/images/cart-icon.png" alt="cart-icon" class="cart-bar">
                            </a>

                        </div>
                    
                </li>
            </ul>

        </nav>

         <!-- Dropdown -->

        <div class="mobile-dropdown">

            <a href="/"
            class="{{ request()->is('/') ? 'active' : ''}}">
            Home</a>
            <hr>
            <a href="/shop"
            class="{{ request()->is('/shop') ? 'active' : ''}}">
                Shop</a>
            <hr>
            <a href="#popular"
              class="{{ request()->is('') ? 'active' : ''}}">
            Popular</a>
            <hr>
            <a href="/cart"
              class="{{ request()->is('/cart') ? 'active' : ''}}">
            Cart</a>

        </div>

<!--This will be right under the nav bar with the search icons-->
<a href="/">
    <section class="back-arrow">
        <span>← Home . Product details</span>
    </section>
</a>
<!--This is the product section with the picture on one side and details on the other -->
<!-- This is the two-column section-->

<div class="product-two-column-section">

    <!-- This is the image on the left -->

    <div class="product-two-column-wrapper" data-category-id="{{$product->category->id}}"   data-product-id="{{ $product->id }}">

         <div class="image-left" >
            <img src="{{$product->image_url}}" alt="tote-bag">
        </div>

        <div class="single-product-details">

            <div class="men-delivery-block">

                <div class="single-category-button">
                <h3 style="color:black; background-color:white; border-color:#F7A8B8  ; border-width: 0.1px;";>{{ $product->category->name }}</h3>
            </div>

            <h1 style="color:black;">{{$product->name}}</h1>

            <span class="product-price" style="color:black;">GH₵{{$product->price}}</span>

            <div class="caution" >
                <img src="/images/caution-icon.png" alt="caution-sign">
                <span> Free delivery at the University of Ghana </span>
            </div>

        </div>

        <div class="select-color-section">

           
            
            <div class="Addtocart" >

                <button class="addtocart-button"
                data-id="{{$product->id}}"
                data-name="{{$product->name}}"
                data-price="{{$product->price}}"
                data-image="{{$product->image_url}}"
                data-category="{{$product->category->name}}"
                > 
                    <h3> Add to Cart</h3>
                </button>
                
                 <span class="heart-emoji">♡</span>
                
            </div>

        </div>

        <div class="description-section" style=" color:white; background-color: #6B4636">

            <div class="Description-and-Fit">

                <h1 class="title">Description & Fit</h1>
                <img src="/images/slide-up-arrow.png" alt="slide-up-arrow" style=" display: none;">

            </div>

           

            <p class="des-tab" style=" color:white;">{{$product->description}}<br>
            </p>

        </div>

        <div class="shipping-and-delivery-details" >

            <div class="Shipping-and-arrow">

                <h1 class="shipping-text">Shipping</h1>
                <img src="/images/slide-up-arrow.png"alt="slide-up-arrow" style=" display: none;">

            </div>

            <div class="discount-and-package-flexbox">

                <div class="discount-block">

                    <div class="discount-image">
                        <img src="/images/discount-icon.png" alt="discount-icon">
                    </div>

                    <div class="discount-text">
                        <h3>Discount</h3>
                        <h4>50% Off</h4>
                        
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
                        <h3>Estimated Delivery</h3>
                        <h4>1 - 3 business days</h4>   
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
                    <h4 style="color:black">/5</h4>
                </div>

                <h3 style="padding-top:20px">(50 New Reviews)</h3>

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
                     <div class="fill" style="width:5%; color:#65483C;"></div>

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
            <span>Jabachi Blossom</span>

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
                <img src="/images/review.png" alt="reviewer-image">

            </div>

            <div class="swipe-progress-bar" style="width:5%;"></div>

        </div>

    </div>

</section>

<!--YOU MIGHT ALSO LIKE SECTION-->

<div class="You-might-also-like" id="like">
    <h1 style="color:#6B4636;">You might also like</h1>

    <div class="might-like-images">
        
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
                    <a href="https://www.instagram.com/shop__eleven__">
                        <img src="/images/instagram-icon.png" alt="instagram-icon">
                    </a>
                    <a href="https://snapchat.com/t/GpcPf6pJ" target="_blank" rel="noopener noreferrer">
                        <img src="/images/snapchat-icon.png" alt="snapchat-icon">
                    </a>
                    <a href="https://wa.me/233592128637" target="_blank" rel="noopener noreferrer">
                        <img src="/images/whatsapp-icon.png" alt="whatsapp-icon">
                    </a>
                    <a href="https://www.tiktok.com/@shop__eleven">
                        <img src="/images/tiktok-icon.png" alt="tiktok-icon">
                    </a>
                </div>

                <div class="mail">
                     <h1>shopeleven@gmail.com</h1>

                </div>

               
                

            </div>

            <div class="footer-column-b">

                <span class = "Menu-footer" style=" font-weight:bold; padding-bottom:10px; padding-top:2px; margin-top:13px;">Menu</span>
               <a href="/"> <span>Home</span></a>
               <a href="/shop"><span style="color:grey;">Shop</span></a>
                <a href="/shop"><span style="color:grey;">popular</span></a>
                <a href="/cart" style="color:grey;"><span>Cart</span></a>
                

            </div>

            <div class="footer-column-c">
                <span class="Operational"  style=" font-weight:bold; padding-bottom:10px; margin-top:13px;">Operational</span>
                <span style="color:grey;">Everyday: 9:00 - 22:00</span>
                <span style="color:grey;">Sat-Sun: 8:00 - 21:00</span>
                <span class="Reach" style=" font-weight:bold; padding-bottom:10px; padding-top:15px;">Reach out to us ? </span>
                <span class="phone-number" style=" font-weight:bold; padding-bottom:10px; line-height:10px;">+(233) 592-128-637</span>

            </div>
            <div class="footer-column-d">

                <h2 style="font-size:27px; padding-bottom:12px;">
                     <a href="/shop" >Shop with us</a>
                 </h2>

                <p style="padding-top:10px; padding-bottom:15px;">
                    Find something you love?
                    <br>
                    Place your order with us on WhatsApp.
                </p>

                <a href="https://wa.me/233592128637" class="footer-whatsapp" style="color:#b10443;">
                    Order on WhatsApp
                </a>

            </div>
        </div>

        <div class="footer-section-mobile">
    
            <!-- Logo Section -->
                 <div class="footer-logo-mobile">
                    <img src="/images/shopelevenlogo.png" alt="shop-logo" class="footer-logo-img">
                    <h1 class="footer-shop-name">ShopEleven</h1>
                </div>

             <!-- Quick Links -->
            <div class="footer-links-mobile">
                <a href="/">Home</a>
                <a href="/shop">Shop</a>
                <a href="#account">Popular</a>
                <a href="/cart">Cart</a>
             </div>

                <!-- Contact Info -->
            <div class="footer-contact-mobile">
                <h3>Contact Us</h3>
                <p>📞 &nbsp;+(233) 592-128-637</p>
              
            </div>

                 <!-- Social Icons -->
                <div class="footer-socials-mobile">
                    <h3>Follow Us</h3>
                    <div class="social-links">
                         <a href="https://www.instagram.com/shop__eleven__">
                        <img src="/images/instagram-icon.png" alt="instagram-icon">
                    </a>
                    <a href="https://snapchat.com/t/GpcPf6pJ" target="_blank" rel="noopener noreferrer">
                        <img src="/images/snapchat-icon.png" alt="snapchat-icon">
                    </a>
                    <a href="https://wa.me/233592128637" target="_blank" rel="noopener noreferrer">
                        <img src="/images/whatsapp-icon.png" alt="whatsapp-icon">
                    </a>
                    <a href="https://www.tiktok.com/@shop__eleven">
                        <img src="/images/tiktok-icon.png" alt="tiktok-icon">
                    </a>
                    </div>
                </div>

            <!-- Newsletter -->
                <div class="footer-newsletter-mobile">
                    <h3>Shop with us</h3>

                    <p>
                        Find something you love?
                    <br>
                         Place your order with us on WhatsApp.
                    </p>

                     <a href="https://wa.me/233592128637"
                      target="_blank"
                        rel="noopener noreferrer"
                    class="footer-whatsapp">
                    Order on WhatsApp
                     </a>
                </div>

            <!-- Copyright -->
              <div class="footer-copyright-mobile">
                 <p>&copy; 2026 ShopEleven. All rights reserved.</p>
              </div>

        </div>

    @vite('resources/js/singleProduct.js')
</body>
</html>