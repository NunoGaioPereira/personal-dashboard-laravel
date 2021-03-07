<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    
    <style>
    /* html, body {
        background-color: #fff;
        color: #1a1a1a;
        font-family: 'Montserrat', sans-serif;
        font-weight: 200;
        height: 100vh;
        margin: 0;
    }
    .full-height {
        height: 100vh;
    }
    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }
    .position-ref {
        position: relative;
    }
    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }
    .content {
        text-align: center;
    }
    .title {
        font-size: 84px;
    }
    .links > a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 13px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
    .m-b-md {
        margin-bottom: 30px;
    } */
    .d-link {
        /* background-color: #212121; */
        color: #4d4d4d;
    }
    .d-link:hover {
        background-color: #292929;
    }
    .d-link.active {
        background-color: #292929;
        color: #ccc;
    }
    .dsec-link {
        background-color: #212121;
        color: #fff;
        font-size: 14px;
    }
    .dsec-link:hover {
        background-color: #292929;
    }
</style>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @yield('headers')
    @livewireStyles
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        @include('partials.dashboard_sidenav')

        <div class="bg-main-bg-gray min-h-screen p-6" style="margin-left: 50px;">
            @yield('content')
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('scripts')
    @livewireScripts
</body>
</html>
