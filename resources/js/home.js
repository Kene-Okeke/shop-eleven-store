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
