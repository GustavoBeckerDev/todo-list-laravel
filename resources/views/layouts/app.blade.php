<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TODO-LIST-LARAVEL</title>

        <!-- LINK CSS -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- LINK FONT AWESOME -->
        <script src="https://kit.fontawesome.com/46500971bd.js" crossorigin="anonymous"></script>

    <body>
        @include('components.header')

        @yield('content', 'Conteúdo do content não renderizado.')
    </body>
    
</html>
