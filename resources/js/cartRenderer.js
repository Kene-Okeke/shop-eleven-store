export function renderCart() {
    console.log("renderCart started");

    const product_details = document.querySelector("#cart-products");

    console.log("cart container:", product_details);

    if (!product_details) {
        console.log("cart container missing");
        return;
    }

    console.log(product_details);

    product_details.innerHTML = "";

    let cart = localStorage.getItem("cart");

    console.log("stored cart:", cart);

    if (!cart) {
        product_details.innerHTML = `<h2>Your cart is empty</h2>
         <p>Add products to see them here.</p>`;

        return {
            totalPrice: 0,
            totalQuantity: 0,
        };
    }

    cart = JSON.parse(cart);

    console.log("parsed cart:", cart);

    let totalQuantity = 0;
    let totalPrice = 0;

    cart.forEach((product) => {
        totalQuantity += product.quantity;

        totalPrice += product.quantity * Number(product.price);
        console.log(product);

        console.log("rendering product:", product);

        product_details.innerHTML += `

                 <div class="Product-details-cont" data-id="${product.id}">

                    <div class="prodimagexname">

                        <img class="product-image" src="${product.image}">

                        <div class="Nameandcategory">
                            <h3>${product.name}</h3>
                            <h1>${product.category}</h1>
                            
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
            `;
    });

    return { totalPrice, totalQuantity };
    //attachDeleteListeners();
    // attachQuantityListeners();

    // console.log("final HTML:", product_details.innerHTML);

    //renderOrderSummary(totalPrice, totalQuantity);

    //attachCheckoutListener();
}
