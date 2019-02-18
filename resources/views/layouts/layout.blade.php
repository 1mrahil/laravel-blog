<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=@@, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
   
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">

</head>



<body>
    @include('inc.navbar')
    <div class="container"><br>
    @include('inc.messages')
    @yield('content')
    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"> </script>
    <script>
        CKEDITOR.replace('article-ckeditor');
    </script>
 
</body>
</html>

