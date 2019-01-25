<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <!-- meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @stack('meta')

        <!-- Styles -->
        @stack('css_cdn')
        @yield('css')
        @stack('css')

        <!-- Title -->
        <title>@section('title'){{ config('app.name', 'Laravel') }}@show</title>
    </head>

    <body>
        <!-- Content -->
        @yield('content')

        <!-- Scripts -->
        @stack('js_cdn')
        @yield('js')
        @stack('js')
    </body>
</html>
