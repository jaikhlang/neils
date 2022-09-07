<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('metatags')
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Custom Styles -->
    @yield('stylesheets')
</head>
<body>
    <div id="app" class="relative">
        @if(!Request::is('/'))
          @include('layouts.widgets.intro')
        @endif
        @include('layouts.partials.header')

        <main class="">
            @yield('content')
        </main>
    </div>

    <!-- Custom Scripts -->
    @yield('scripts')
</body>
</html>
