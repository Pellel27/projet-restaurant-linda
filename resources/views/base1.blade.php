<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} @yield('page_title')</title>
@section('vite')
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    @show

</head>
<body>
    <header>
        @section('banner')
            <img src="{{ asset('img/banner.jpg') }}" alt="Description de la bannière par défaut">
        @show
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        @section('footer')
            Copyright 2022
        @show
    </footer>
</body>
</html>