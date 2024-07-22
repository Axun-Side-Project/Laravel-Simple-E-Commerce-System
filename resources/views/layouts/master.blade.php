<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | {{ config("app.name") }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        @yield('head')
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="flex w-screen h-screen overflow-hidden">

        @include('includes.sidebar')

        <div class="p-12">
            @yield('content')
        </div>

        @livewireScripts
        @stack('scripts')
    </body>
</html>
