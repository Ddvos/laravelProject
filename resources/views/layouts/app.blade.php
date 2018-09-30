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
        <div class="row">
            <div class="col-md-8 col-lg-8">
                @yield('content')
            </div>
            <div class="col-md-8 col-lg-4">
                @include('inc.sidebar')

            </div>
        </div>
    </div>
</body>
</html>