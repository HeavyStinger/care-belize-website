<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Care Belize')</title>

        <!-- Bootstrap Icons -->
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <!-- Page-specific styles -->
        @stack('styles')
    </head>
    <body>

        @yield('content')

        <!-- Scripts -->
        <script src="{{ asset('js/main.js') }}"></script>

        <!-- Page-specific scripts -->
        @stack('scripts')

    </body>
</html>