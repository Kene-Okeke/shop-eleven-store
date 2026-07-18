
const categoryModal = document.querySelector('#categoryModal');

const categoryForm = document.querySelector('#categoryForm');

const result = document.querySelector('.create-result');

categoryForm.addEventListener('submit', async function(event){

    event.preventDefault();

    const formData = new FormData(categoryForm);

    const response = await fetch("/admin/categories",{

        method:'POST',
        body: formData
    })

    const data = await response.json();

    console.log(data);

    if(response.ok){

        result.innerHTML = "Successfully Created Category";
    }else{
        result.innerHTML = data.errors.name[0];
    }

    

});