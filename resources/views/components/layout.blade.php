{{-- <div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
</div> --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" href={{ Vite::asset('resources/image/logo-green.png') }}>

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            li {
                /* border: 2px solid red; */
            }
        </style>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>