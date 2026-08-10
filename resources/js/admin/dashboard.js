const mobileMenuButton = document.getElementById("mobileMenuButton");
const mobileDropdown = document.getElementById("mobileDropdown");

mobileMenuButton.addEventListener("click", function () {
    mobileDropdown.classList.toggle("show");
});
