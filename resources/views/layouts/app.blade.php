<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'SELAMAT JALAN')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet" >
</head>
<body>
    @include('inc.navbar')
    
    <main style="margin-top: 10%;">
            @include('inc.messages')
            @yield('content')
    </main>
</body>
<script>

  $('#delete-modal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget)

    var post_id = button.data('catid')
    var modal = $(this)

    modal.find('.modal-body #post_id').val(post_id);
  })

</script>
<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</html>
