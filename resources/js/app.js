import { attachCartListeners } from "./cartActions.js";
import { renderCartBadges, load_cart_nav } from "./cartUtils.js";
import { attachMenuListener } from "./mobileMenu.js";

console.log("APP.JS EXECUTED", performance.now());

function renderProducts(products, productList) {
    productList.innerHTML = "";

    products.forEach((product) => {
        productList.innerHTML += `
            
         <div class="product-container">
            <a href="/products/${product.id}" class="product-link">
                <div class="image-container">
                    <img class="product-img" src="${product.image_url}" alt="product-image">
                </div>
           </a>
            <h1 class="product-text">${product.name}</h1>
            
            <div class="pricexcart">

                <div class="Pricebutton-container">
                   <h1 style="font-size:15px; padding-top:13px;">GH₵ ${product.price}</h1> 
                </div>

                <div class="cart-cont"
                    data-id="${product.id}"
                    data-name="${product.name}"
                    data-price="${product.price}"
                    data-image="${product.image_url}"
                    data-category="${product.category.name}">

                     <span class="cart-badge">0</span>

                    <img src="/images/cart-icon.png" alt="cart-icon">
                </div>
               
            </div>
         </div>
        
            `;
    });

    renderCartBadges();
    attachCartListeners();
}

document.addEventListener("DOMContentLoaded", () => {
    attachMenuListener();
});

document.addEventListener("DOMContentLoaded", () => {
    const categoryFilters = document.querySelectorAll(".category-filter");
    const productList = document.getElementById("product-list");
    console.log("product list:", productList);
    attachCartListeners();
    renderCartBadges();
    load_cart_nav();

    async function loadProducts(value) {
        const response = await fetch(`/api/categories/${value}/products`);

        const products = await response.json();

        renderProducts(products.data, productList);
    }

    const params = new URLSearchParams(window.location.search);

    const categoryid = params.get("category");

    console.log("category_id :", categoryid);

    if (categoryid) {
        productList.innerHTML = `
        <div class="product-loading">
            <img src="/images/shopelevenlogo.png" alt="Loading...">
        </div>
    `;
        loadProducts(categoryid);
    }

    categoryFilters.forEach((filter) => {
        filter.addEventListener("click", () => loadProducts(filter.value));
    });

    const searchInputs = document.querySelectorAll(
        "#mobile-search-input,#search-input",
    );

    console.log("search input:", searchInputs);

    searchInputs.forEach((searchInput) => {
        searchInput.addEventListener("input", async function () {
            const query = this.value;

            const response = await fetch(`/api/products/search?q=${query}`);

            const products = await response.json();

            renderProducts(products.data, productList);
        });
    });
});
