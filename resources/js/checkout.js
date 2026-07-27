export function handleCheckout(){

    let cart = localStorage.getItem('cart');

    if(!cart){
        return;
    }

    cart = JSON.parse(cart);

    let message = "Hello ShopEleven \u{1F44B}\n\nI would like to place an order:\n\n";

    let total = 0;

    cart.forEach(product =>{

         message += 
                      `${"\u{1F6CD}"} ${product.name}
                        Quantity: ${product.quantity}
                        Price: GH₵${product.price}

                    `;
        total += product.quantity * Number(product.price);
    });

    message += `\nTotal: GH₵${total}`;


    const whatsappNumber = "233592128637";

    const url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;


    window.open(url, "_blank");

    localStorage.removeItem('cart');

    window.location.reload();


}