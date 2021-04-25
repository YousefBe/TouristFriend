<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('page-title')
    </title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.64.0/maps/maps.css" />
    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.64.0/maps/maps-web.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/shared.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @livewireStyles
    <!-- Scripts -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>

<body class=" bg-gray-100">
    @include('layouts.navigation')
    <main class="font-sans text-gray-900 antialiased ">
        {{-- Home Page Content --}}
        @if (request()->routeIs('home'))
            @isset($headerSectionn)
                {{ $headerSectionn }}
            @endisset
            @isset($plansSection)
                {{ $plansSection }}
            @endisset
            @isset($Navigate)
                {{ $Navigate }}
            @endisset
            @isset($blog)
                {{ $blog }}
            @endisset
            @isset($countriesSection)
                {{ $countriesSection }}
            @endisset
            @isset($citiesSection)
                {{ $citiesSection }}
            @endisset
            @isset($conatctUsSection)
                {{ $conatctUsSection }}
            @endisset
        @endif
        {{ $slot }}
    </main>
    @include('layouts.footer')
    @livewireScripts
    @stack('swiper-scipts')
</body>

</html>
