<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
            /*search box css start here*/
        .search-sec{
            padding: 2rem;
        }
        .search-slt{
            display: block;
            width: 100%;
            font-size: 0.875rem;
            line-height: 1.5;
            color: #55595c;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            height: calc(3rem + 2px) !important;
            border-radius:0;
        }
        .wrn-btn{
            width: 100%;
            font-size: 16px;
            font-weight: 400;
            text-transform: capitalize;
            height: calc(3rem + 2px) !important;
            border-radius:0;
        }
        @media (min-width: 992px){
            .search-sec{
                position: relative;
                top: -114px;
                background: rgba(26, 70, 104, 0.51);
            }
        }
        
        @media (max-width: 992px){
            .search-sec{
                background: #1A4668;
            }
        }
        </style>
</head>
<body>
    <div id="app">
        @include('_components._nav')
        @include('_components._search')

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
