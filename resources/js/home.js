const menuButton = document.querySelector('.mobile-menu-bar')

const dropDown = document.querySelector('.mobile-dropdown')

menuButton.addEventListener('click',function(){
    dropDown.classList.toggle('active')
})