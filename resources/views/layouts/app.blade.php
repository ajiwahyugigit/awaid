<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>
        
        @include('includes.style')
        @stack('addon-style')   

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

       
        @livewireStyles

        <!-- Scripts -->
        
    </head>

        @include('includes.navbar')
        @yield('content')
        @include('includes.footer')
        @include('includes.script')
        @stack('addon-script')
    </body>
</html>
