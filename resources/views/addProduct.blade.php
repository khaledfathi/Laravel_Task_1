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
        @if ($errors->any())
            <h4 class="err_msg">{{$errors->first()}}</h4>
        @elseif (session()->get('err_msg'))
            <h4 class="err_msg">{!! session()->get('err_msg') !!}</h4>
        @elseif (session()->get('success_msg'))
            <h4 class="success_msg">{!! session()->get('success_msg') !!}</h4>
        @endif
        <form action="{{url('addProduct')}}" method="post">
            @csrf
            <div>
                <label for="">Product Name</label>
                <input type="text" name="product_name">
            </div>
            <label for="">Category : </label><br>
            <select name="categories[]"  multiple="multiple">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
            </select><br>
            <input type="submit" value="Save">
        </form>
        <a class="homeLink" href="/">Home Page</a>    
    </div>
</body>
</html>