<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=@@, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ ('https://range100.herokuapp.com/css/app.css') }}">
    <link rel="stylesheet" href="{{ ('https://range100.herokuapp.com/css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">

</head>
<nav class="navbar navbar-fixed-top navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="nav-link" href="/pages/blog" >Home</a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">Contact</a>
        <a class="nav-link" href="/pages/blog/create">Create Post</a>
    </div>
    

</nav>


<body>
    <div class="container">
    @include('inc.messages')
    @yield('content')
    </div>
 
</body>
</html>

