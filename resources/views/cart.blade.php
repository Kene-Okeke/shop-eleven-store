<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="/css/cart.css">
</head>
<body>
    <section class="background">

 
        <nav>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="#Cart">Popular</a></li>
            </ul>

            <div class="logo">

                <img src="/images/shopelevenlogo.png" alt="shop-logo" class="shop-logo">
                <h1 class="shop-eleven-text">ShopEleven</h1>

            </div>
          
                <div class="menu-box">
                      <a href="/">
                        <img src="/images/buy.png" alt="menu-icon" class="menu-bar">
                      </a> 
                </div>
            


        </nav>

    <!--mobile nav bar put the mobile nav bar here -->

        <nav class="mobile-nav">

            <div class="mobile-menu-bar">
                <img src="/images/white-menu.png" alt="menu-icon" class="menu-bar" >
            </div>
             
            <div class="logo">

                <img src="/images/shopelevenlogo.png" alt="shop-logo" class="shop-logo">
                <h1 class="shop-eleven-text">ShopEleven</h1>
 
            </div>

            
                <div class="mobile-shop-icon">
                    <a href="/shop">
                        <img src="/images/new-cart.png" alt="shop icon" class="mobile-shop-img">
                     </a>
                </div>
           

        </nav>

    <!-- dropdown--> 
    
     <div class="mobile-dropdown">

            <a href="/"
            class="{{ request()->is('/') ? 'active' : ''}}">
            Home</a>
            <hr>
            <a href="/shop"
            class="{{ request()->is('shop') ? 'active' : ''}}">
                Shop</a>
            <hr>
            <a href="{{ url('/') }}#popular"
              class="{{ request()->is('') ? 'active' : ''}}">
            Popular</a>
            <hr>
            <a href="/cart"
              class="{{ request()->is('cart') ? 'active' : ''}}">
            Cart</a>

    </div>


        <div class="divider"></div>

        <h1 class="shop-text-mobile"style="padding-left:47px; font-weight:300; padding-bottom:13px; padding-top:10px; color:white;">Shopping Cart</h1>

    <section class="twocolumnscartandorder">
            
    <!--This is the whole product container containing all the rows -->
            <div class="Product-card-cont">

                 <!--This is the  product code row container containing Quantity Total and Action -->
                <div class="product-code">
                    
                    <div class="text-productcode">
                        <h1>Product Code</h1>
                    </div>
                    
                    
                    <div class="quantity-left">
                        <h1>Quantity</h1>
                        <h1>Total</h1>
                        <h1>Action</h1>
                    </div>
                    
                </div>
                <div id="cart-products">
                     
                     
                </div>
               
                
            </div>

            <div class="Order-summary-cont">

                <h1 
                     style="font-size: 25px; font-weight:400;  padding-bottom:8px; border-bottom-width: 1.5px ; border-bottom-style: solid;
                     border-bottom-color: rgb(221, 221, 221);" class="order-title">
                     Order Summary
                </h1>

                <div class="SummaryContainer">

                    <div class ="totalChild">
                        <h1>Total</h1>
                        <h2>GH₵0</h2>
                    </div>

                    <div class ="totalChild">
                        <h1>Total Quantity</h1>
                        <h2>0</h2>
                    </div>
 
                </div>

                <div class="main-total-container">
                    <h1>Total</h1>
                    <h2>GH₵0</h2>   
                </div>

                <button class="checkout">
                    Checkout on Whatsapp
                </button>


            </div>

        </section>

        <!-- this is the footer section -->
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

                <h2 style="font-size:27px; padding-bottom:12px;">
                     <a href="/shop">Shop with us</a>
                 </h2>

                <p style="padding-top:10px; padding-bottom:15px;">
                    Find something you love?
                    <br>
                    Place your order with us on WhatsApp.
                </p>

                <a href="https://wa.me/233592128637" class="footer-whatsapp" style="color:purple">
                    Order on WhatsApp
                </a>

            </div>

        </div>
    </section>

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
                <a href="#account">Account</a>
                <a href="/cart">Cart</a>
             </div>

                <!-- Contact Info -->
            <div class="footer-contact-mobile">
                <h3>Contact Us</h3>
                <p>📞 &nbsp;+(233) 592-128-637</p>
                <p>📧 &nbsp;shopeleven@gmail.com</p>
              
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
 @vite('resources/js/cart.js')
</body>
</html>