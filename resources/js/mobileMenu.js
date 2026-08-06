export function attachMenuListener() {
    console.trace("MENU INITIALIZED");

    const menuButton = document.querySelector(".mobile-menu-bar");
    const dropDown = document.querySelector(".mobile-dropdown");

    if (!menuButton || !dropDown) return;

    menuButton.addEventListener("click", () => {
        dropDown.classList.toggle("active");
    });
}
