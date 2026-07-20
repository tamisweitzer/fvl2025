<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DHTQ5JK96Y"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-DHTQ5JK96Y');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Your home for local, live music in Wisconsin's Fox Valley. Browse our extensive list of summer concerts, lunchtime shows, bar gigs, bands, and venues in the area covering the Fox Cities from Appleton to Green Bay, and beyond.">
    <meta name="keywords"
        content="band, bands, music, live music, live band, live bands, concert, concerts, fox valley, fox cities, appleton, green bay, northeast wisconson, gigs">
    <meta name="author" content="Tami Sweitzer tamisweitzer.com">
    <title>Fox Valley Live - Wisconsin's home for the best live music in the Fox Valley and beyond!
    </title>

    @if (Str::startsWith($current = url()->current(), 'https://www'))
        <link rel="canonical" href="{{ str_replace('https://www.', 'https://', $current) }}">
    @else
        <link rel="canonical" href="{{ $current }}">
    @endif
    <link rel="icon" href="{{ asset('/images/favicon.ico') }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans antialiased bg-gray-900 ">
    @include('components.partials.header')

    @include('components.partials.hero')

    @include('components.partials.main')

    @include('components.partials.footer')

    <script>
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");

        hamburger.addEventListener("click", mobileMenu);

        function mobileMenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
        }
    </script>
</body>

</html>
