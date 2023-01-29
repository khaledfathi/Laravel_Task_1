<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <link rel="stylesheet" href="{{asset('assets/css/addProduct.css')}}">
</head>
<body>
    <h1>Laravel Task 1 </h1>
    <div class="content">
        <h3>Add Product</h3>
        <form action="">
            @csrf
            <div>
                <label for="">Product Name</label>
                <input type="text">
            </div>
            <div>
                <label for="">Product Description</label>
                <input type="text">
            </div>
            <label for="">Category : </label><br>
            <select name="" id="" multiple>
                <option value="">Cat 1 </option>
                <option value="">Cat 2 </option>
                <option value="">Cat 3 </option>
                <option value="">Cat 4 </option>
            </select><br>
            <input type="submit" value="Save">
        </form>
        <a class="homeLink" href="/">Home Page</a>    
    </div>
</body>
</html>