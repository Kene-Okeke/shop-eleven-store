<!-- this is the front end for the create category modal-->



<div class="category-modal" id="categoryModal">

    <h2>Create Category</h2>

    <form action="/admin/categories" method="POST" id="categoryForm" >

        @csrf

        <label for="category-name">Category Name</label>

        <input type="text" id="category-name" name="name" placeholder="Enter category name">

        @error('name')
            <p>{{ $message }}</p>
        @enderror



        <label for="category-description">Category Description</label>

        <textarea type="text" id="category-description" name="description" placeholder="Enter category description"></textarea>

        @error('description')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">
            Create Category
        </button>



    </form>

</div>