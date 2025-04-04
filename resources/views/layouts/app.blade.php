<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Sekai1') }}</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-image">
        <div class="min-h-screen flex flex-col">
            @include('layouts.header') <!-- ヘッダー部分を表示 -->
            <!-- ページのメインコンテンツ -->
            <main class="flex-grow">
                @yield('content')
            </main>

            @include('layouts.footer')
        </div>
        @vite(['resources/js/app.js'])
    </body>
</html>
