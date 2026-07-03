<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Eleven - Your Online Store</title>
    <link rel="stylesheet" href="/css/app.css">
  <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<body>

<section class="background">
    <!-- This is the navigation bar section -->
        <nav>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="#about">Shop</a></li>
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

    <!-- This is the hero section with bag background -->
    <section class = "hero">

         <div class="tagline-section">
            <div class="tagline">
                 <h1>Shop beautifully curated <br>everyday essentials.</h1>
            </div>

            <div class="description-section">

                <div class="description-text">
                    <h1>Discover beautifully curated everyday essentials that blend style,<br> comfort,
                        and practicality.<br>From aesthetic accessories  to home and lifestyle must-haves, <br> 
                        Shop Eleven brings you pieces designed to elevate your daily life.
                    </h1>
                </div>

                <div class="Shop-Now-Button">
                    <h1> Shop Now </h1>

                </div>

            </div>
           
        </div>

        <div class="bag-widget">
            <img src="/images/pink-bag.jpg" alt="bag-image" class="black-bag">

            <div class="knitted-bag-container">

                <div class="play-bag-stack">
                    <h1 class="play-bag">Play bag</h1>
                    <h3 class= "price">100GH</h3>
                </div>

                <div class="arrow-icon">
                    <img src="/images/white circle.png" alt="" class="circle-arrow">
                </div>
            </div>
        </div>
    </section>


    <!-- This is the popular collection section + the footer -->

    <section class = "Popular-collection-section">

        <div class="Home-mini-shop-page">

            <div class = "Popular-Collection-row">

                <div class="Popular-Box">

                    <h1 class = "Popular-text">
                        <span>Our</span> Popular Collection
                    </h1>

                    <h3 class= "Popular-tagline">
                        Explore our most-loved collection of stylish home <br> essentials and everyday must-haves.
                    </h3>

                </div>

                <div class="open-store-button">

                    <h1>Open Store </h1>

                </div>

            </div>

            <div class="Popular-categories">

                <div class= "fifty-off-column" style="background-image: url('{{ asset('images/girl-wbag.jpeg') }}');">
                     
                    <div class="discover-button">
                        <h3>Discover More </h3>
                    </div>
                </div>

                <div class="categories-section-box">

                    <div class="four-categories">
                        <span class="Tote-Bags">Tote bags</span>
                        <span class="Study Tables">Study Tables</span>
                        <span class="Hot Plates">Hot Plates</span>
                        <span class="Hand Creams">Hand Creams</span>
                    </div>

                    <div class = "selected-items">
                        <div class = "cat-column-1" style="background-image: url('{{ asset('images/summer-vibes.JPG') }}');">
                            <div class = "product-details-cont">
                                <div class = "details">
                                    <h1>Tote-Bags</h1>
                                    <h3>100gh</h3>
                                </div>

                                <div>
                                    <img src="/images/cart-icon.png" alt="cart-icon" class = "cart-icon">
                                </div>

                            </div>

                        </div>

                        <div class = "cat-column-2" style="background-image: url('{{ asset('images/black-bag.JPG') }}');">
                            <div class = "product-details-cont">
                                <div class = "details">
                                    <h1>Tote-Bags</h1>
                                    <h3>100gh</h3>
                                </div>

                                <div>
                                    <img src="/images/cart-icon.png" alt="cart-icon" class = "cart-icon">
                                </div>

                            </div>

                        </div>

                        <div class = "cat-column-3 " style="background-image: url('{{ asset('images/striped-bag.png') }}');">
                            <div class = "product-details-cont">
                                <div class = "details">
                                    <h1>Tote-Bags</h1>
                                    <h3>100gh</h3>
                                </div>

                                <div>
                                    <img src="/images/cart-icon.png" alt="cart-icon" class = "cart-icon">
                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>

<!-- this is the footer section -->
        </div>

        <div class="footer-section">

            <div class="footer-column-a">
                <div class="logo-footer" style="margin-top:13px;">
                    <img src="images/shopelevenlogo.png" alt="shop-logo" >
                    <h1 class="shop-text">ShopEleven</h1>

                </div>

                <h1 class="footer-tagline" style="font-size:12px;">Explore our most-loved <br>collection of stylish home </h1>

                <div class="social-icons">
                    <img src="images/instagram-icon.png" alt="instagram-icon">
                    <img src="images/snapchat-icon.png" alt="snapchat-icon">
                    <img src="images/whatsapp-icon.png" alt="whatsapp-icon">
                    <img src="images/tiktok-icon.png" alt="tiktok-icon">
                
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

        </section>
        
    </section>



</section>
    
</body>
</html>

 