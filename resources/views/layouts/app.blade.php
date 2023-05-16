<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    @vite('resources/js/app.js')
    <style>
        .ms_img {height: 50px;}
        .ms_overflow {height: 400px; overflow: auto}
    </style>
</head>
<body>

    @include('partials.header')

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('partials.footer')
    
</body>
</html>