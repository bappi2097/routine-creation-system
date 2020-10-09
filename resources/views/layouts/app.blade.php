<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('asset/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200">
    <div id="app">
        @auth
        <x-sidebar></x-sidebar>
        @endauth
        <main class="mx-auto page-content">
            <x-flash></x-flash>
            <div>
                @yield('content')
            </div>
        </main>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="http://unpkg.com/turbolinks"></script>
</body>

</html>