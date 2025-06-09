<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fox Valley Live - The best live music in the Fox Valley and beyond.</title>

    <link rel="icon" href="{{ asset('/images/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans antialiased bg-slate-100">
    <header class="bg-slate-700 text-slate-400">
        @auth
            <nav class=" bg-slate-900 p-0 text-sm">
                <div class="secondary-nav-menu max-w-3xl mx-auto flex justify-end gap-2 p-0">
                    <x-nav-link href="/bands/create" :active="request()->is('events')">Add Band</x-nav-link>
                    <x-nav-link href="/venues" :active="request()->is('events')">Add Venue</x-nav-link>
                    <x-nav-link href="/events" :active="request()->is('events')">Add Event</x-nav-link>
                </div>
            </nav>
        @endauth
        <nav class="max-w-3xl mx-auto pr-4 flex justify-end gap-2 p-0">
            <a href="/"
                class="site-branding inline-block  px-4 pt-2 pb-2 mr-auto text-orange-500 hover:text-slate-400 hover:underline text-xl font-bold small-caps">
                Fox Valley Live
            </a>
            <div class="nav-menu mt-3">
                <x-nav-link href="/events" :active="request()->is('events')">events</x-nav-link>
                <x-nav-link href="/bands" :active="request()->is('bands')">bands</x-nav-link>
                <x-nav-link href="/cities" :active="request()->is('cities')">cities</x-nav-link>
                <x-nav-link href="/venues" :active="request()->is('venues')">venues</x-nav-link>

                <span class="inline-block mt-8 sm:mt-0 sm:ml-8">
                    @guest
                        {{-- <x-nav-link href="/login" :active="request()->is('login')">Log in</x-nav-link>
                        <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link> --}}
                    @endguest
                    @auth
                        <form action="/logout" method="POST" class="inline">
                            @csrf
                            <input type="submit" value="Log out"
                                class="btn inline text-inherit  hover:text-orange-600 active:text-orange-700 rounded px-4"></input>
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

        <div class="hero p-8">
            <div class="flex flex-col justify-center items-center align-middle max-w-6xl mx-auto h-full">
                <div class="content bg-white opacity-85 max-w-fit px-4 sm:px-10 pt-4 pb-6 font-extrabold text-center">
                    <p class="text-slate-500 font-semibold text-3xl ">The best live music in the Fox Valley <span
                            class="text-orange-600 italic font-bold text-stroke"><br>...and beyond!</span></p>
                </div>
            </div>
        </div>
        <div class="px-4 py-1 text-right text-sm">Lita Ford, The Watering Hole, Green Bay</div>
    </header>

    <main class="min-h-[calc(100vh-200px)]">
        {{ $slot }}
    </main>

    <footer class="bg-slate-700 text-slate-400 py-16 text-center text-sm dark:text-white/70">
        {{-- <div class="wrapper max-w-3xl mx-auto ">
            <div class="flex flex-col sm:flex-row gap-4">
                <div class="col flex-1">
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                </div>

                <div class="mt-4 border-b border-b-slate-600 sm:hidden"></div>

                <div class="col flex-1">
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                </div>

                <div class="mt-4 border-b border-b-slate-600 sm:hidden"></div>

                <div class="col flex-1">
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                    <a href="#" class="block p-4">link</a>
                </div>
            </div>
        </div> --}}
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
