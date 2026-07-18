
<!-- category modal component -->

<div class="category-modal" id="categoryModal">

    <div class="category-modal-content">

        <div class="close_and_title_container">

            <button type="button" id="closeCategoryModal">
                ×
            </button>

            <h2>Create Category</h2>

        </div>


        <form action="/admin/categories" method="POST" id="categoryForm">

            <div class="create-result"></div>

            @csrf

            <div class="category-label-container">

                <label for="category-name">
                    Category Name
                </label>

                <input 
                    type="text" 
                    id="category-name" 
                    name="name" 
                    placeholder="Enter category name"
                >

            </div>


            @error('name')
                <p>{{ $message }}</p>
            @enderror


            <div class="description-label-container">

                <label for="category-description">
                    Category Description
                </label>

                <textarea 
                    id="category-description" 
                    name="description" 
                    placeholder="Enter category description">
                </textarea>

            </div>


            @error('description')
                <p>{{ $message }}</p>
            @enderror


            <button class="submit_category" type="submit">
                Create Category
            </button>


        </form>
    @vite('resources/js/category.js')
    </div>

</div>