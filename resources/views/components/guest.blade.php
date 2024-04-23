{{-- <div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div> --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" href={{ Vite::asset('resources/images/logo-green.png') }}>

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Corinthia font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@400;700&display=swap" rel="stylesheet">
        
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <style>
            .corinthia-regular {
                font-family: "Corinthia", cursive;
                font-weight: 400;
                font-style: normal;
            }

            .corinthia-bold {
                font-family: "Corinthia", cursive;
                font-weight: 800;
                font-style: normal;
            }

            li {
                /* border: 2px solid red; */
            }
        </style>
    </head>
    <body>
        {{ $slot }}

        {{-- guest.js script --}}
        <script src={{ Vite::asset('resources/js/guest.js') }}></script>
        {{-- feather icons package script --}}
        <script src={{ Vite::asset('node_modules\feather-icons\dist\feather.js')}}></script>
        <script>
            feather.replace();
        </script>
    </body>
</html>