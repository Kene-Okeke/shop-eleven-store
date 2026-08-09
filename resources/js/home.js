import { attachMenuListener } from "./mobileMenu.js";

document.addEventListener("DOMContentLoaded", () => {
    attachMenuListener();
});

const categoryButton = document.querySelectorAll(".Category");

categoryButton.forEach((category) => {
    category.addEventListener("click", () => {
        console.log("you-win-kene");

        window.location.href = `/shop?category=${category.dataset.id}`;
    });
});

//bag slide show- function

let currentBag = 0;

const bagImage = document.querySelector(".black-bag");
const bagName = document.querySelector(".play-bag");
const bagPrice = document.querySelector(".price");

function showNextBag() {
    const bagWidget = document.querySelector(".bag-widget");

    bagWidget.classList.add("sliding");

    setTimeout(() => {
        currentBag++;

        if (currentBag >= bagProducts.length) {
            currentBag = 0;
        }

        bagImage.src = bagProducts[currentBag].image_url;
        bagName.textContent = bagProducts[currentBag].name;
        bagPrice.textContent = `GH₵${bagProducts[currentBag].price}`;

        bagWidget.classList.remove("sliding");
    }, 500);
}
setInterval(showNextBag, 3000);
