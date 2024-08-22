<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZaFilm | {{ $title }}</title>
    <link rel="stylesheet" href="/css/style.css">
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    @include('layouts.navbar')
    <div class="container-fluid">
        @yield('content')
    </div>
</body>
</html>