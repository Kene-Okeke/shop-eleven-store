document.addEventListener('DOMContentLoaded', ()=>{
    const categoryFilters = document.querySelectorAll('.category-filter');
    const productList = document.getElementById('product-list');
    console.log("product list:", productList);

categoryFilters.forEach(filter =>{

    filter.addEventListener('click', async function () {
        
        const response = await fetch(`/api/categories/${this.value}/products`); // for us to pass a variable 
        // inside the fetch we use a back tick instead of normal tick

        const products = await response.json();

        productList.innerHTML = "";

        products.data.forEach(product => {
            productList.innerHTML += `
            <a href="/products/${product.id}" class="product-link">
         <div class="product-container">

            <div class="image-container">
                 <img class="product-img" src="${product.image_url}" alt="product-image">
            </div>
           
            <h1 class="product-text">${product.name}</h1>

            <div class="pricexcart">

                <div class="Pricebutton-container">
                   <h1 style="font-size:15px; padding-top:13px;">GH₵ ${product.price}</h1> 
                </div>

                <div class="cart-cont">
                    <img src="/images/cart-icon.png" alt="cart-icon">
                </div>
               
            </div>
         </div>
        </a>
            `;
        })
        

    });
});

const searchInput = document.getElementById('search-input');

console.log("search input:", searchInput);

if(searchInput){
    searchInput.addEventListener('input',async function(){
    const query = this.value;

    const response = await fetch(`/api/products/search?q=${query}`);

    const products = await response.json();
    
     productList.innerHTML = "";

      products.data.forEach(product => {
            productList.innerHTML += `
            <a href="/products/${product.id}" class="product-link">
         <div class="product-container">

            <div class="image-container">
                 <img class="product-img" src="${product.image_url}" alt="product-image">
            </div>
           
            <h1 class="product-text">${product.name}</h1>

            <div class="pricexcart">

                <div class="Pricebutton-container">
                   <h1 style="font-size:15px; padding-top:13px;">GH₵ ${product.price}</h1> 
                </div>

                <div class="cart-cont">
                    <img src="/images/cart-icon.png" alt="cart-icon">
                </div>
               
            </div>
         </div>
        </a>
            `;
        })



})
}



})

