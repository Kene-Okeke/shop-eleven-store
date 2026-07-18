<!-- this is the front end for the create category modal-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <script src="resources/js/category.js"></script>
</head>
<body>
    <div class="category-modal" id="categoryModal">

    <h2>Create Category</h2>

    <form action="/admin/categories" method="POST" id="categoryForm" >

        <div class = "create-result"></div>

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
</body>
</html>


