<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        {{-- <link rel="stylesheet" href={{ asset('css/input.css') }}> --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        @foreach ($collection = App\Enums\Contract::getValues() as $item)
            <div>{{$item}}</div>
        @endforeach
        <div class=" bg-amber-400">{{App\Enums\Contract::Internship()}}</div>
        <form action={{ route('logout') }} method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </body>
</html>