console.log("cartUtils loaded");
// this is the function that calculates the total quantity and renders it on the shop page nav
//the shop page uses this function

export function load_cart_nav(){
    const cart_nav = document.querySelector('.cart-badge-nav');

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
    cart_nav.innerHTML = totalQuantity;

    cart_nav.style.display = 'flex';
}else{
    cart_nav.style.display = 'none';
}
};

//function to render the cart badges on refresh

export function renderCartBadges(){

    let cart = localStorage.getItem('cart');

    if(!cart){
        return;
    }

    cart = JSON.parse(cart);

    const shop_cart_buttons = document.querySelectorAll('.cart-cont');

    shop_cart_buttons.forEach(button=>{

       const badge = button.querySelector('.cart-badge');

        const product_id = button.dataset.id;

        const product = cart.find(item => item.id == product_id);

        if(product){
            badge.innerHTML = product.quantity;
            badge.style.display = 'flex';
        }
    });
}