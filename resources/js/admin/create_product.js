console.log("category js loaded");

const openCategoryModal = document.getElementById('openCategoryModal');

const categoryModal = document.getElementById('categoryModal');

console.log(openCategoryModal);
console.log(categoryModal);

openCategoryModal.addEventListener('click',()=>{
    categoryModal.style.display = "block";
});