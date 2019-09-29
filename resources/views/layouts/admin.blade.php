<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'innoPizza') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    
</head>
<body>

<div id="app">
    <main class="">
        @yield('content')
    </main>
</div>

<!-- JS SCRIPTS FOR ADMIN DASHBOARD. -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/admin.js') }}" ></script>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
</body>
</html>