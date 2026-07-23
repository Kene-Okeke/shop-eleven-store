// this is where our cart logic lives
document.addEventListener('DOMContentLoaded',function(){

    const shop_cart_buttons = document.querySelectorAll('.cart-cont'); //all cart buttons in our shop
    
    const blade_cart_amount = document.querySelector('.cart-amount');

    const product_details = document.querySelector('#cart-products');


    let cart = localStorage.getItem('cart')

    if(cart){
        cart = JSON.parse(cart);

        cart.forEach(product=>{
            product_details.innerHTML += `

                 <div class="Product-details-cont">

                    <div class="prodimagexname">

                        <img class="product-image" src="${product.image}">

                        <div class="Nameandcategory">
                            <h1>${product.category}</h1>
                            <h3>${product.name}</h3>
                         </div>

                    </div>

                    <div class="quantitytotalaction">

                        <div class="quantincreasecont">

                            <span>+</span>
                            <span>${product.quantity}</span>
                            <span>-</span>

                        </div>

                        <h1 class="totalprice">
                             GH₵${product.price}
                        </h1>

                     </div>

                 </div>
            ` 
        });


    }else{
         product_details.innerHTML = `
        <h2>Your cart is empty</h2>
        <p>Add products to see them here.</p>
    `;
    }
    

    //listen for clicks on all buttons - and perform the function below

    shop_cart_buttons.forEach(button => {

        //add a click event listener for all cart buttons in the shop page ,multiplebuttons 
        // with the same class name .cart-cont so we use document.querySelectorAll -key word all

        button.addEventListener('click',function(){

        const cart_badge = this.querySelector('.cart-badge');
        
        //next on click , pull all the data from the product clicked 
        const product_id = this.dataset.id;
        const product_name = this.dataset.name;
        const product_price = this.dataset.price;
        const product_image = this.dataset.image;
        const product_category = this.dataset.category;

        const product = {
            id:product_id,
            name:product_name,
            price:product_price,
            image:product_image,
            quantity:1,
            category:product_category,
        }

        let cart = localStorage.getItem('cart')

        if(cart){
            cart = JSON.parse(cart);
            //we'll check is it the item that was clicked that is in the cart ,if yes + 
            // quantity only in the cart page as well as the shop page icon
            const existingProduct = cart.find(item => item.id == product_id);

            if(existingProduct){
                existingProduct.quantity++;

                cart_badge.innerHTML = existingProduct.quantity;

                cart_badge.style.display = "flex";
                
                blade_cart_amount.innerHTML = existingProduct.quantity;

            }else{
                cart.push(product);

                cart_badge.innerHTML = product.quantity;

                cart_badge.style.display = "flex";
                
            }

          localStorage.setItem('cart', JSON.stringify(cart))

        }else{
            cart = []
            cart.push(product);
            localStorage.setItem('cart',JSON.stringify(cart))
            
        }


            
        })
    })
});   
    

    
