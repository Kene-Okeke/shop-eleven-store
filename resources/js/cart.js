// this is where our cart logic lives
console.log("NEW CART JS LOADED");
document.addEventListener('DOMContentLoaded',function(){

    renderCart();
    
    attachCartListeners();
  
});   

function renderOrderSummary(totalPrice,totalQuantity){

    const order_summary = document.querySelector('.Order-summary-cont');


    if(!order_summary){
        return;
    }


    order_summary.innerHTML = ` <h1 
                     style="font-size: 25px; font-weight:400;  padding-bottom:8px; border-bottom-width: 1.5px ; border-bottom-style: solid;
                     border-bottom-color: rgb(221, 221, 221);" class="order-title">
                     Order Summary
                </h1>

                <div class="SummaryContainer">

                    <div class ="totalChild">
                        <h1>Total Price</h1>
                        <h2>GH₵${totalPrice}</h2>
                    </div>

                    <div class ="totalChild">
                        <h1>Total Quantity</h1>
                        <h2>${totalQuantity}</h2>
                    </div>
 
                </div>

                <div class="main-total-container">
                    <h1>Total</h1>
                    <h2>GH₵${totalPrice}</h2>   
                </div>

                <button class="checkout">
                    Checkout on Whatsapp
                </button>
`

}
    

    
function renderCart(){

   console.log("renderCart started");

   const product_details = document.querySelector('#cart-products');

   console.log("cart container:", product_details);


   if(!product_details){
        console.log("cart container missing");
        return;
   }

    console.log(product_details);

   product_details.innerHTML = "";

   let cart = localStorage.getItem('cart');

   console.log("stored cart:", cart);

   if(!cart){
         product_details.innerHTML = 
         `<h2>Your cart is empty</h2>
         <p>Add products to see them here.</p>`;

         return;
   }

   cart = JSON.parse(cart);

   console.log("parsed cart:", cart);

   let totalQuantity = 0;
   let totalPrice = 0;

   cart.forEach(product=>{

            totalQuantity += product.quantity;

            totalPrice += product.quantity * Number(product.price);
            console.log(product);

            console.log("rendering product:", product);

            product_details.innerHTML += `

                 <div class="Product-details-cont" data-id="${product.id}">

                    <div class="prodimagexname">

                        <img class="product-image" src="${product.image}">

                        <div class="Nameandcategory">
                            <h1>${product.category}</h1>
                            <h3>${product.name}</h3>
                         </div>

                    </div>

                    <div class="quantitytotalaction">

                        <div class="quantincreasecont"  data-id="${product.id}">

                            <span class="add">+</span>
                            <span>${product.quantity}</span>
                            <span class="subtract">-</span>

                        </div>

                        <h1 class="totalprice">
                             GH₵${product.price}
                        </h1>

                        <div class="deleteIcon" data-id="${product.id}">

                              <img src="/images/delete-icon.png" alt="Delete product">

                        </div>

                     </div>

                 </div>
            ` ;

            
        });
         attachDeleteListeners();
         attachQuantityListeners();

         console.log("final HTML:", product_details.innerHTML);

         renderOrderSummary(totalPrice, totalQuantity);
}

export function attachCartListeners(){

      const shop_cart_buttons = document.querySelectorAll('.cart-cont'); //all cart buttons in our shop
    

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
                
               

            }else{
                cart.push(product);

                cart_badge.innerHTML = product.quantity;

                cart_badge.style.display = "flex";
                
            }

          localStorage.setItem('cart', JSON.stringify(cart))

          renderCart();

        }else{
            cart = []
            cart.push(product);

            localStorage.setItem('cart',JSON.stringify(cart));

            cart_badge.innerHTML = product.quantity;

            cart_badge.style.display = "flex";
            
            renderCart();
        }


            
        })
    })
}

function attachDeleteListeners(){
    const deleteIcons = document.querySelectorAll('.deleteIcon');

if (deleteIcons.length == 0){
    return;
}

deleteIcons.forEach(button=>{

    button.addEventListener('click', function(){
        
        const product_id = this.dataset.id;

        let cart = localStorage.getItem('cart');

        cart = JSON.parse(cart);

        cart = cart.filter(product=>product.id != product_id)

        localStorage.setItem('cart',JSON.stringify(cart));
        renderCart();

    })
})
}


function attachQuantityListeners(){

    const quantityContainers = document.querySelectorAll('.quantincreasecont');

    quantityContainers.forEach(container=>{

        const product_id = container.dataset.id;

        const addButton = container.querySelector('.add');

        const subtractButton = container.querySelector('.subtract');


        addButton.addEventListener('click',function(){

            let cart = JSON.parse(localStorage.getItem('cart'))

            const product = cart.find(item => item.id == product_id);

            product.quantity++;

            localStorage.setItem('cart',JSON.stringify(cart));

            renderCart();
        });

        subtractButton.addEventListener('click', function(){

            let cart = JSON.parse(localStorage.getItem('cart'))

            const product = cart.find(item => item.id == product_id);

            if (product.quantity > 1){
                product.quantity--;
            }

            localStorage.setItem('cart', JSON.stringify(cart));

            renderCart();

        })
    })
}