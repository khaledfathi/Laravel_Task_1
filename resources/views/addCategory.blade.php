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
        @if ($errors->any())
            <h4 class="err_msg">{{$errors->first()}}</h4>
        @elseif (session()->get('err_msg'))
            <h4 class="err_msg">{!! session()->get('err_msg') !!}</h4>
        @elseif (session()->get('success_msg'))
            <h4 class="success_msg">{!! session()->get('success_msg') !!}</h4>
        @endif
        <form action="{{url('addCategory')}}" method="post">
            @csrf
            <div>
                <label for="">Category Name </label>
                <input type="text" name=category_name>
            </div>
            <div>
                <label for="" >Description</label>
                <input type="text" name="category_description">
            </div>
            <input type="submit" value="Save" > 
        </form>
        <a class="homeLink" href="/">Home Page</a>    
    </div>

</body>
</html>