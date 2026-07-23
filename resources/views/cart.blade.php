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
                <li><a href="#Account">Account</a></li>
                <li><a href="#Cart">Cart</a></li>
            </ul>

            <div class="logo">

                <img src="/images/shopelevenlogo.png" alt="shop-logo" class="shop-logo">
                <h1 class="shop-eleven-text">ShopEleven</h1>

            </div>

            <div class="menu-box">
                <span class="menu-text">Menu</span>
                <img src="/images/menu-bar.png" alt="menu-icon" class="menu-bar">
            </div>


        </nav>

        <div class="divider"></div>

        <h1 style="padding-left:47px; font-weight:300; padding-bottom:13px; padding-top:10px; color:white;">Shopping Cart</h1>

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
                     <div class="Product-details-cont">
                    
                    <div class="prodimagexname">

                        <img class="product-image" src="/images/pink-bag.jpg" alt="product-image">

                        <div class="Nameandcategory">
                            <h1>Bag</h1>
                            <h3>Pink Summer Vibes</h3>
                        </div>

                    </div>
                    <div class="quantitytotalaction">

                        <div class="quantincreasecont">

                          <span>+</span>  
                          <span>4</span>
                          <span>−</span>  
                         
                        </div>

                        <h1 class="totalprice">GH₵100</h1>

                        <img src="/images/delete-icon.png" alt="delete-icon">

                    </div>

                </div>

                 <div class="Product-details-cont">
                    
                    <div class="prodimagexname">

                        <img src="/images/powerbank.jpg" alt="product-image">

                        <div class="Nameandcategory">
                            <h1>Powerbank</h1>
                            <h3>Green Power Bank</h3>
                        </div>

                    </div>
                    <div class="quantitytotalaction">

                        <div class="quantincreasecont">

                          <span>+</span>  
                          <span class="cart-amount">5</span>
                          <span>−</span>  
                         
                        </div>

                        <h1 class="totalprice">GH₵120</h1>

                        <img src="/images/delete-icon.png" alt="delete-icon">

                    </div>

                </div>

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
                        <h2>GH₵2000</h2>
                    </div>

                    <div class ="totalChild">
                        <h1>Total Quantity</h1>
                        <h2>10</h2>
                    </div>
 
                </div>

                <div class="main-total-container">
                    <h1>Total</h1>
                    <h2>GH₵2000</h2>   
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
                <h2 style="font-size:27px; font-weight:lighter; padding-bottom:12px; padding-top:11px;"> Subscribe to our newsletter</h2>

                <form class="subscribe">
                    <input type="email" placeholder="Email">
                    <button type="submit">Subscribe</button>
                </form>

                <p style="padding-top:20px; ">Subscribe to our newsletter to be the first to know <br> about news and offers</p>

            </div>

        </div>
    </section>
 @vite('resources/js/cart.js')
</body>
</html>