
console.log('Category script loaded!');  

const categoryModal = document.querySelector('#categoryModal');

const categoryForm = document.querySelector('#categoryForm');

console.log('Form:', categoryForm);  // ← Add just THIS line to debug

const result = document.querySelector('.create-result');

categoryForm.addEventListener('submit', async function(event){

    event.preventDefault();

    const formData = new FormData(categoryForm);

    try {
        const response = await fetch("/admin/categories",{

        method:'POST',
        body: formData


    });

    const data = await response.json();

    console.log(data);

    if(response.ok){
        result.innerHTML = "Successfully Created Category";
        categoryForm.reset();

    }else{
        // Better error handling
        //const errorMsg =  data?.errors?.name?[0] || data?.message || 'Error creating category';
        //result.innerHTML = "❌" + errorMsg;

        let errorMsg = 'Error creating category';

        //Check for validation errors
        if(data?.errors){
            const errors = [];

            //loop through all validation errors
            Object.keys(data.errors).forEach(field => {
                errors.push(data.errors[field][0]); // Get first error for each field
            });

            errorMsg = errors.join(' | '); // Join all errors with the seperator
        }else if (data?.message){
            errorMsg = data.message;
        }

        result.innerHTML = "❌" + errorMsg;
    }

    } catch (error){
        result.innerHTML = "❌" + (error?.message || 'A network error occured');
        
    }

});

const closeButton = document.getElementById('closeCategoryModal');

const categorymodal = document.getElementById('categoryModal');

closeButton.addEventListener('click', ()=>{
    categorymodal.style.display = "none";
});