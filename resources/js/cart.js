// this is where our cart logic lives

import { renderCart } from "./cartRenderer.js";
import { handleCheckout } from "./checkout.js";
import { attachMenuListener } from "./mobileMenu.js";

console.log("NEW CART JS LOADED");
document.addEventListener("DOMContentLoaded", function () {
    const cartTotals = renderCart();

    attachDeleteListeners();

    attachQuantityListeners();

    renderOrderSummary(cartTotals.totalPrice, cartTotals.totalQuantity);

    attachCheckoutListener();
});

function attachDeleteListeners() {
    const cartContainer = document.querySelector("#cart-products");

    if (!cartContainer) {
        return;
    }

    cartContainer.addEventListener("click", function (event) {
        const deleteButton = event.target.closest(".deleteIcon");

        if (!deleteButton) {
            return;
        }

        const product_id = deleteButton.dataset.id;

        let cart = JSON.parse(localStorage.getItem("cart"));

        cart = cart.filter((product) => product.id != product_id);

        localStorage.setItem("cart", JSON.stringify(cart));

        const cartTotals = renderCart();

        renderOrderSummary(cartTotals.totalPrice, cartTotals.totalQuantity);
    });
}
function attachQuantityListeners() {
    const cartContainer = document.querySelector("#cart-products");

    if (!cartContainer) {
        return;
    }

    cartContainer.addEventListener("click", function (event) {
        const clickedElement = event.target;

        const quantityContainer = clickedElement.closest(".quantincreasecont");

        if (!quantityContainer) {
            return;
        }

        const product_id = quantityContainer.dataset.id;

        let cart = JSON.parse(localStorage.getItem("cart"));

        const product = cart.find((item) => item.id == product_id);

        if (!product) {
            return;
        }

        if (clickedElement.classList.contains("add")) {
            product.quantity++;
        }

        if (clickedElement.classList.contains("subtract")) {
            if (product.quantity > 1) {
                product.quantity--;
            }
        }

        localStorage.setItem("cart", JSON.stringify(cart));

        const cartTotals = renderCart();

        renderOrderSummary(cartTotals.totalPrice, cartTotals.totalQuantity);
    });
}
function renderOrderSummary(totalPrice, totalQuantity) {
    const order_summary = document.querySelector(".Order-summary-cont");

    if (!order_summary) {
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
`;
}

function attachCheckoutListener() {
    const checkoutButtons = document.querySelectorAll(".checkout");

    if (!checkoutButtons.length) {
        return;
    }

    checkoutButtons.forEach((button) => {
        button.addEventListener(
            "click",
            function () {
                handleCheckout();
            },
            { once: true },
        );
    });
}

document.addEventListener("DOMContentLoaded", () => {
    attachMenuListener();
});
