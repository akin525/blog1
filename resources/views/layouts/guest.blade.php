<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animate/animate.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('login/vendor/select2/select2.min.css')}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
    </head>
    <body>
            {{ $slot }}

        @livewireScripts

            <!--===============================================================================================-->
            <script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
            <!--===============================================================================================-->
            <script src="{{asset('login/vendor/bootstrap/js/popper.js')}}"></script>
            <script src="{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
            <!--===============================================================================================-->
            <script src="{{asset('login/vendor/select2/select2.min.js')}}"></script>
            <!--===============================================================================================-->
            <script src="{{asset('login/vendor/tilt/tilt.jquery.min.js')}}"></script>
            <script >
                $('.js-tilt').tilt({
                    scale: 1.1
                })
            </script>
            <!--===============================================================================================-->
            <script src="{{asset('login/js/main.js')}}"></script>

    </body>
</html>
