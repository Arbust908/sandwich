<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <meta http-equiv="cleartype"  content="on">
    <meta name="MobileOptimized"  content="320">
    <!-- <meta name="theme-color"      content="#D0103A"> -->
    <meta name="HandheldFriendly" content="True">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="description" content=""/>
    <link rel="icon" href="{{ asset('img/favicon.png')}}">

     <!-- Twitter Card -->
    <meta name="twitter:title"       content="" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:image"       content="" />
    <meta name="twitter:card"        content="summary_large_image" />
    <meta name="twitter:creator"     content="" />
    <meta name="twitter:site"        content="" />
    <!-- Facebook Card -->
    <meta property="og:title"       content="" />
    <meta property="og:description" content="" />
    <meta property="og:image"       content="" />
    <meta property="og:url"         content="" />
    <meta property="og:type"        content="website" />


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav-bar></nav-bar>
        <main class="py-4">
            @yield('content')
        </main>
        <example-component></example-component>
    </div>
</body>
</html>
