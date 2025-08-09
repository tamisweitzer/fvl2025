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
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1530233761670435"
        crossorigin="anonymous"></script>
</head>

<body class="font-sans antialiased bg-slate-100">
    <header class="bg-slate-700 text-slate-300">
        @auth
            <nav class=" bg-slate-900 p-0 text-sm">
                <div class="secondary-nav-menu max-w-5xl mx-auto flex justify-end gap-2 p-0">
                    <x-nav-link href="/summer/events/create" :active="request()->is('/summer/events/create/')">Add Summer Event</x-nav-link>
                    <x-nav-link href="/bands/create" :active="request()->is('/bands/create/')">Add Band</x-nav-link>
                    <x-nav-link href="/venues" :active="request()->is('/venues')">Add Venue</x-nav-link>
                    <x-nav-link href="/events" :active="request()->is('events')">Add Event</x-nav-link>
                </div>
            </nav>
        @endauth
        <nav class="max-w-5xl mx-auto pr-4 flex justify-end gap-2 p-0 text-slate-200">
            <a href="/"
                class="site-branding inline-block  px-4 pt-2 pb-2 mr-auto text-orange-500 hover:text-slate-400 hover:underline text-xl font-bold small-caps">
                Fox Valley Live
            </a>

            <div class="nav-menu mt-3">
                <x-nav-link href="/summer/events" :active="request()->is('summer/events')">summer events</x-nav-link>
                @auth
                    {{-- <x-nav-link href="/events" :active="request()->is('events')">events</x-nav-link>
                    <x-nav-link href="/bands" :active="request()->is('bands')">bands</x-nav-link>
                    <x-nav-link href="/cities" :active="request()->is('cities')">cities</x-nav-link>
                    <x-nav-link href="/venues" :active="request()->is('venues')">venues</x-nav-link> --}}
                @endauth
                <x-nav-link href="/summer/events/bands" :active="request()->is('bands')">bands</x-nav-link>
                <x-nav-link href="/summer/events/cities" :active="request()->is('cities')">cities</x-nav-link>
                <x-nav-link href="/summer/events/venues" :active="request()->is('venues')">venues</x-nav-link>

                <span class="inline-block mt-8 md:mt-0 md:ml-8">
                    @guest
                        {{-- <x-nav-link href="/login" :active="request()->is('login')">Log in</x-nav-link>
                        <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link> --}}
                    @endguest
                    @auth
                        <form action="/logout" method="POST" class="inline">
                            @csrf
                            <input type="submit" value="Log out"
                                class="btn inline text-inherit  hover:text-orange-600 active:text-orange-800 rounded px-4"></input>
                        </form>
                    @endauth
                </span>
            </div>
            <div class="hamburger mt-3">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>

        <!-- Hero image and welcome text.  -->
        <div
            class="hero_ p-8 bg-[url('../images/lita.jpg')] bg-cover bg-middle h-[300px] sm:h-[400px] md:h-[500px] lg:h-[700px]">
            <div class="flex flex-col justify-center items-center align-middle max-w-6xl mx-auto mt-4  h-full">
                <div class="content bg-white opacity-95 max-w-fit px-4 sm:px-10 pt-4 pb-6 font-extrabold text-center">
                    <p class="text-gray-800 font-semibold text-xl sm:text-3xl">The best live music in the Fox Valley
                        <span class="text-orange-700 italic font-bold text-stroke"><br>...and beyond!</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="px-4 py-1 text-right text-sm">Lita Ford, The Watering Hole, Green Bay</div>
    </header>

    <main class="min-h-[calc(100vh-200px)]">
        {{ $slot }}
    </main>

    <footer class="bg-slate-700 text-slate-400 py-16 text-center text-sm dark:text-white/70">
        <div class="wrapper max-w-5xl mx-auto ">
            <div class="flex flex-col sm:flex-row gap-4">
                {{-- <div class="col flex-1">
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                </div> --}}

                {{-- <div class="mt-4 border-b border-b-slate-600 sm:hidden"></div> --}}

                {{-- <div class="col flex-1">
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                </div> --}}

                {{-- <div class="mt-4 border-b border-b-slate-600 sm:hidden"></div> --}}

                <div class="col flex-1">
                    <a href="/about" class="block p-4">about</a>
                    {{-- <a href="/contact" class="block p-4">contact</a> --}}
                    {{-- <a href="#" class="block p-4">link</a> --}}
                    {{-- <a href="#" class="block p-4">link</a> --}}
                </div>
            </div>
        </div>
    </footer>
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
