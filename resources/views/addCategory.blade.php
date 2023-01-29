<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
    <link rel="stylesheet" href="{{asset('assets/css/addCategory.css')}}">
</head>
<body>
    <h1>Laravel Task 1 </h1>
    <div class="content">
        <h3>Add Category</h3>
        <form action="">
            @csrf
            <div>
                <label for="">Category Name </label>
                <input type="text">
            </div>
            <div>
                <label for="">Description</label>
                <input type="text">
            </div>
            <input type="submit" value="Save" > 
        </form>
        <a class="homeLink" href="/">Home Page</a>    
    </div>

</body>
</html>