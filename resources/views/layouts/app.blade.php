<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="./favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Achez vos plats sur Mobilefood" />
    <meta name="keywords" content="Restaurant, FastFood, Lubumbashi">
    <meta name="author" content="Judel Fintch, Jonnhy Kat">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/index.css')}}">
</head>

<body class="overflow-x-hidden">
    @include('partials.nav')
        @yield('content')
    @include('partials.footer')
    <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>
