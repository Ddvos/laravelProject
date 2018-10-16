<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <title>Fox Flight</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')

        @yield('content')
    </div>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>