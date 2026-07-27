document.addEventListener('DOMContentLoaded', function(){
    load_cart_single_nav();

    const singleCartButton = document.querySelector('.addtocart-button')

    let cart = localStorage.getItem('cart')

   if(cart){
       cart = JSON.parse(cart);
    }else{
        cart = [];
    }

    const product_id = singleCartButton.dataset.id;

    const existingProduct = cart.find(item => item.id == product_id);

    if(existingProduct){
          singleCartButton.innerHTML = `Added to Cart ✓`;
          singleCartButton.disabled = true;
    }

})


const singleCartButton = document.querySelector('.addtocart-button')

singleCartButton.addEventListener('click',function(){

    let cart = localStorage.getItem('cart');

    if(cart){
       cart = JSON.parse(cart);
    }else{
        cart = [];
    }

    

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


    const existingProduct = cart.find(item => item.id == product_id);

    if(existingProduct){
        existingProduct.quantity++;
        
    }else{
        cart.push(product);
        
    }
    localStorage.setItem('cart',JSON.stringify(cart))
    singleCartButton.innerHTML = `Added to Cart ✓`;
    singleCartButton.disabled = true;
    load_cart_single_nav()

})
  


function load_cart_single_nav(){
    const single_cart_nav = document.querySelector('.single-badge-nav');

    console.log("badge:", single_cart_nav);

    let cart = localStorage.getItem('cart');

    cart = JSON.parse(cart);

    if (!cart){
         return;
    }

let totalQuantity = 0 ;

cart.forEach(product =>{
    totalQuantity += product.quantity;
});

if(totalQuantity > 0){
    single_cart_nav.innerHTML = totalQuantity;

    single_cart_nav.style.display = 'flex';
}else{
    single_cart_nav.style.display = 'none';
}
};

   // 