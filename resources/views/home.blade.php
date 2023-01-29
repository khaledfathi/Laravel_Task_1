<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
</head>
<body>
    <h1>Laravel Task 1 </h1>
    <ul>
        <li><a href="addCategory">Add Category</a></li>
        <li><a href="addProduct">Add Product</a></li>
    </ul>
    <hr>
    <div class="allRecords">
        <h3>Available Product </h3>
        <table>
            <thead>
                <th>Category</th>
                <th>Product Name </th>
                <th>Product Description</th>
            </thead>
    </table>
    <br><hr><br>
    <h3>All Categories</h3>
    <table>
        <thead>
            <th>Category Name </th>
            <th>Category Description</th>
        </thead>
    </table>
    </div>

</body>
</html>