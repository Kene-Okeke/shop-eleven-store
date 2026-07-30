import { attachCartListeners } from "./cartActions.js";
import { renderCartBadges, load_cart_nav } from "./cartUtils.js";

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
    const categoryFilters = document.querySelectorAll(".category-filter");
    const productList = document.getElementById("product-list");
    console.log("product list:", productList);
    attachCartListeners();
    renderCartBadges();
    load_cart_nav();

    categoryFilters.forEach((filter) => {
        filter.addEventListener("click", async function () {
            console.log("filter clicked", this.value);

            const response = await fetch(
                `/api/categories/${this.value}/products`,
            ); // for us to pass a variable
            // inside the fetch we use a back tick instead of normal tick

            const products = await response.json();

            renderProducts(products.data, productList);
        });
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

    //dropdown menu js for the shop page
    const menuButton = document.querySelector(".mobile-menu-bar");

    const dropDown = document.querySelector(".mobile-dropdown");

    menuButton.addEventListener("click", function () {
        dropDown.classList.toggle("active");
    });
});
