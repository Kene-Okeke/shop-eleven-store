import { load_cart_nav } from "./cartUtils.js";
import { renderCart } from "./cartRenderer.js";

//this is the funciton to attach listeners to cart image on the shop page to automatically add items to cart
export function attachCartListeners() {
    const shop_cart_buttons = document.querySelectorAll(".cart-cont"); //all cart buttons in our shop

    console.log("cart buttons found:", shop_cart_buttons.length);

    shop_cart_buttons.forEach((button) => {
        //add a click event listener for all cart buttons in the shop page ,multiplebuttons
        // with the same class name .cart-cont so we use document.querySelectorAll -key word all

        button.addEventListener("click", function () {
            const cart_badge = this.querySelector(".cart-badge");

            //next on click , pull all the data from the product clicked
            const product_id = this.dataset.id;
            const product_name = this.dataset.name;
            const product_price = this.dataset.price;
            const product_image = this.dataset.image;
            const product_category = this.dataset.category;

            const product = {
                id: product_id,
                name: product_name,
                price: product_price,
                image: product_image,
                quantity: 1,
                category: product_category,
            };

            let cart = localStorage.getItem("cart");

            if (cart) {
                cart = JSON.parse(cart);

                //we'll check is it the item that was clicked that is in the cart ,if yes +
                // quantity only in the cart page as well as the shop page icon
                const existingProduct = cart.find(
                    (item) => item.id == product_id,
                );

                if (existingProduct) {
                    existingProduct.quantity++;

                    cart_badge.innerHTML = existingProduct.quantity;

                    cart_badge.style.display = "flex";

                    // so you see this cart_badge i want the number that shows to persist on refresh ,only should not show anymore and be reset after checkout - how do i do that?
                } else {
                    cart.push(product);

                    cart_badge.innerHTML = product.quantity;

                    cart_badge.style.display = "flex";
                }

                localStorage.setItem("cart", JSON.stringify(cart));

                renderCart();
            } else {
                cart = [];
                cart.push(product);

                localStorage.setItem("cart", JSON.stringify(cart));

                cart_badge.innerHTML = product.quantity;

                cart_badge.style.display = "flex";

                renderCart();
            }

            load_cart_nav();
        });
    });
}
