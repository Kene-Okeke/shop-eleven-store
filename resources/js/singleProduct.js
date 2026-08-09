import { attachMenuListener } from "./mobileMenu.js";

document.addEventListener("DOMContentLoaded", function () {
    load_cart_single_nav();

    const singleCartButton = document.querySelector(".addtocart-button");

    let cart = localStorage.getItem("cart");

    if (cart) {
        cart = JSON.parse(cart);
    } else {
        cart = [];
    }

    const product_id = singleCartButton.dataset.id;

    const existingProduct = cart.find((item) => item.id == product_id);

    if (existingProduct) {
        singleCartButton.innerHTML = `Added to Cart ✓`;
        singleCartButton.disabled = true;
    }

    attachMenuListener();

    const heart = document.querySelector(".heart-emoji");

    heart.addEventListener("click", () => {
        heart.innerHTML = `❤️`;
    });
});

const singleCartButton = document.querySelector(".addtocart-button");

singleCartButton.addEventListener("click", function () {
    let cart = localStorage.getItem("cart");

    if (cart) {
        cart = JSON.parse(cart);
    } else {
        cart = [];
    }

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

    const existingProduct = cart.find((item) => item.id == product_id);

    if (existingProduct) {
        existingProduct.quantity++;
    } else {
        cart.push(product);
    }
    localStorage.setItem("cart", JSON.stringify(cart));
    singleCartButton.innerHTML = `Added to Cart ✓`;
    singleCartButton.disabled = true;
    load_cart_single_nav();
});

function load_cart_single_nav() {
    const badges = document.querySelectorAll(".single-badge-nav");

    console.log("badge:", badges);

    let cart = localStorage.getItem("cart");

    cart = JSON.parse(cart);

    if (!cart) {
        return;
    }

    let totalQuantity = 0;

    cart.forEach((product) => {
        totalQuantity += product.quantity;
    });

    badges.forEach((badge) => {
        if (totalQuantity > 0) {
            badge.innerHTML = totalQuantity;
            badge.style.display = "flex";
        } else {
            badge.style.display = "none";
        }
    });
}

const categoryId = document.querySelector(".product-two-column-wrapper").dataset
    .categoryId;

const productId = document.querySelector(".product-two-column-wrapper").dataset
    .productId;

console.log(categoryId);

mightlike(categoryId, productId);

async function mightlike(category_id, currentProductId) {
    const response = await fetch(`/api/categories/${category_id}/products`);

    const products = await response.json();

    const threeProducts = products.data
        .filter((product) => product.id != currentProductId)
        .slice(0, 4);

    const mightLike = document.querySelector(".might-like-images");

    threeProducts.forEach((product) => {
        mightLike.innerHTML += `
           
                <div class="image" data-product-id = "${product.id}" id="mightLike">
                 <a href="/products/${product.id}"> 
                    <img src=${product.image_url} alt="powerbank">
                </a>
                    <span style="font-weight:900; font-size:17px; padding-top:13px">${product.name}</span>
                    <span style="font-weight:light; font-size:14px; padding-top:3px; color:#939393">GH₵${product.price}</span>
                </div>
           
        `;
    });
}
