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
        <nav class="desktop-nav">

            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
              
                <li><a href="/cart">Cart</a></li>
            </ul>

            <div class="logo">

                <img src="/images/shopelevenlogo.png" alt="shop-logo" class="shop-logo">
                <h1 class="shop-eleven-text">ShopEleven</h1>

            </div>
            
        <a href="#girl-image">
            <div class="menu-box">
                <span class="menu-text">Popular</span>
                <img src="/images/celebrate.png" alt="menu-icon" class="menu-bar"> 
            </div>
        </a>

        </nav>

        <nav class="mobile-nav">

            <div class="mobile-menu-bar">
                <img src="/images/white-menu.png" alt="menu-icon" class="menu-bar">
            </div>
             
            <div class="logo">

                <img src="/images/shopelevenlogo.png" alt="shop-logo" class="shop-logo">
                <h1 class="shop-eleven-text">ShopEleven</h1>
 
            </div>


            <a href="/shop">
                <div class="mobile-shop-icon">
                    <img src="/images/new-cart.png" alt="shop icon" class="mobile-shop-img">
                 </div>
            </a>

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

    <!-- This is the hero section with bag background -->
     <section class="mobile-hero">
         <section class = "hero">

         <div class="tagline-section">
            <div class="tagline">
                 <h1>Shop beautifully curated <br>everyday essentials.</h1>
            </div>

            <div class="mobile-tagline">
                <h1>
                     Shop beautifully <br>
                     curated everyday <br>
                     essentials.
                 </h1>
            </div>
            
            <div class="description-section">

                <div class="description-text">
                    <h1>Discover beautifully curated everyday essentials that blend style,<br> comfort,
                        and practicality.<br>From aesthetic accessories  to home and lifestyle must-haves, <br> 
                        Shop Eleven brings you pieces designed to elevate your daily life.
                    </h1>
                </div>
                <a href="/shop">
                    <div class="Shop-Now-Button">

                        <h1> Shop Now </h1>

                    </div>
                </a>
                
            </div>
           
        </div>

       <script>
            const bagProducts = @json($bagProducts);
       </script>

        <div class="bag-widget">
            <img src="{{ $bagProducts[0]->image_url }}" alt="bag-image" class="black-bag">

            <div class="knitted-bag-container">

                <div class="play-bag-stack">
                    <h1 class="play-bag" style="padding-bottom:2px;">{{ $bagProducts[0]->name }}</h1>
                    <h3 class= "price"> GH₵{{ $bagProducts[0]->price }}</h3>
                </div>

                <div class="arrow-icon">
                    <img src="/images/white circle.png" alt="" class="circle-arrow">
                </div>
            </div>
        </div>
        
    </section>
     </section>
   


    <!-- This is the popular collection section + the footer -->

    <section class = "Popular-collection-section" id="popular">

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
            <a href="/shop">
                <div class="open-store-button">

                    <h1>Open Store </h1>

                </div>
            </a>
            </div>

            <div class="Popular-categories">
                <a href="/shop">
                <div id = "girl-image"class= "fifty-off-column" style="background-image: url('{{ asset('images/girl-wbag.jpeg') }}');">
                    
                  
                        <div class="discover-button">
                            <h3>Discover More </h3>
                        </div>
                     
    
                </div>
                </a>
                <div class="categories-section-box">

                
                    <div class="four-categories">
                        @foreach($categories as $category)
                            <span data-id="{{$category->id}}" class="Category">
                                {{$category->name}}
                            </span>
                            
                        @endforeach 
                    </div>
                <a href="/shop">
                    <section class="mobile-open-store">
                        <div class="mobile-open-store-button">

                            <h1>Open Store </h1>

                        </div>
                    </section>
                </a>  


                    <div class = "selected-items">
                        @foreach($popularProducts as $product)
                        <a href="/products/{{ $product->id }}"> 
                            <div class = "cat-column-1" style="background-image: url('{{ $product->image_url }}');">

                                <div class = "product-details-cont">

                                    <div class = "details">
                                        <h1>{{$product->category->name}}</h1>
                                        <h3>GH₵{{$product->price}}</h3>
                                    </div>

                                     <div class="cart-cont-mobile">
                                        <img src="/images/cart-icon.png" alt="cart-icon" class = "cart-icon">
                                    </div>

                                </div>

                            </div>
                        </a>
                        @endforeach
                        

                       <!-- <div class = "cat-column-2" style="background-image: url('{{ asset('images/black-bag.JPG') }}');">
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

                        </div> !-->

                    </div>

                    


                </div>

            </div>

<!-- this is the footer section -->
        </div>

        <div class="footer-section">

            <div class="footer-column-a">
                <div class="logo-footer" style="margin-top:4px;">
                    <img src="images/shopelevenlogo.png" alt="shop-logo" >
                    <h1 class="shop-text" style="margin-top:10px;">ShopEleven</h1>

                </div>

                <h1 class="footer-tagline" style="font-size:12px;">Explore our most-loved <br>collection of stylish home </h1>

                <div class="social-icons">
                    <a href="https://www.instagram.com/shop__eleven__">
                        <img src="images/instagram-icon.png" alt="instagram-icon">
                    </a>
                    <a href="https://snapchat.com/t/GpcPf6pJ" target="_blank" rel="noopener noreferrer">
                        <img src="/images/snapchat-icon.png" alt="Snapchat">
                    </a>

                    <a href="https://wa.me/233592128637" target="_blank" rel="noopener noreferrer">
                            <img src="images/whatsapp-icon.png" alt="whatsapp-icon">
                    </a>

                    <a href="https://www.tiktok.com/@shop__eleven">
                        <img src="images/tiktok-icon.png" alt="tiktok-icon">
                    </a>
                </div>

                <div class="mail">
                     <h1>shopeleven@gmail.com</h1>

                </div>

               
                

            </div>

            <div class="footer-column-b">

<!----><span class = "Menu-footer" style=" font-weight:bold; padding-bottom:8px; padding-top:2px; margin-top:14px;"><a href="/">Menu</a></span>
               <a href="/"> <span>Home</span> </a>
                <a href="/shop"><span style="color:grey;">Shop</span></a>
               <a href="#popular"><span style="color:grey;">Popular</span></a>
               <a href="/cart"> <span style="color:grey;">Cart</span></a>
                

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
                <a href="#popular">Popular</a>
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
                         <a href="https://www.instagram.com/shop__eleven__"><img src="/images/instagram-icon.png" alt="instagram"></a>
                        <a href="https://snapchat.com/t/GpcPf6pJ"><img src="/images/snapchat-icon.png" alt="snapchat"></a>
                        <a href="https://wa.me/233592128637" target="_blank" rel="noopener noreferrer">
                            <img src="images/whatsapp-icon.png" alt="whatsapp-icon">
                        </a>
                        <a href="https://www.tiktok.com/@shop__eleven"><img src="/images/tiktok-icon.png" alt="tiktok"></a>
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

        

        </section>
        
    </section>



</section>
     @vite('resources/js/home.js')
</body>
</html>

 