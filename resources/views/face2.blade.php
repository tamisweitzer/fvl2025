<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fox Valley Live</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <style>
        .concert-image {
            background-image: url('./images/concert.jpg');
            background-repeat: no-repeat;
            background-position: middle;
            background-size: cover;
        }
    </style>
</head>

<body class="bg-violet-50">
    <header class="bg-slate-900">
        <nav class="w-full md:max-w-3xl mx-auto pr-4 flex justify-end gap-2 p-0">
            <a href="#"
                class="site-branding inline-block  px-4 pt-2 pb-2 mr-auto text-slate-300 hover:text-slate-400 hover:underline text-xl font-bold small-caps">
                Fox Valley Live
            </a>
            <div class="nav-menu mt-3 text-slate-400">
                <x-nav-link href="/events" :active="request()->is('events')">events</x-nav-link>
                <x-nav-link href="/bands" :active="request()->is('bands')">bands</x-nav-link>
                <x-nav-link href="/cities" :active="request()->is('cities')">cities</x-nav-link>
                <x-nav-link href="/venues" :active="request()->is('venues')">venues</x-nav-link>
            </div>
            <div class="hamburger mt-3">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
        <section class="hero mb-12 px-8 py-12 min-h-2xl text-center text-white relative concert-image">
            <div data-hero-overlay
                class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-tr from-fuchsia-800 via-indigo-800  to-amber-500 opacity-85 flex flex-col justify-center align-middle">
                <section class="px-8 py-4 mx-auto w-full md:max-w-3xl">
                    <h1
                        class="text-3xl sm:text-4xl md:text-5xl mb-16 text-center font-semibold [text-shadow:_1px_1px_3px_rgb(0_0_0_/_40%)]  tracking-wide">
                        The hottest live music in the Fox Valley
                        <div
                            class="-m-7 text-xl sm:text-2xl italic text-amber-500 [text-shadow:_1px_1px_3px_rgb(0_0_0_/_40%)] ">
                            <br>...and beyond
                        </div>
                    </h1>

                    <p class="text-base md:text-3xl [text-shadow:_1px_1px_3px_rgb(0_0_0_/_40%)]  tracking-widest">All
                        music. All live. All local.</p>
                </section>
            </div>
        </section>
    </header>
    <main class="min-h-[calc(100vh-400px)] bg-violet-50">
        <section class="main-content p-4 mx-auto w-full md:max-w-3xl">
            <div class=" p-4 max-w-4xl mx-auto">
                <h2 class="text-4xl text-center mb-12">Where to see live music this week</h2>


                <section class="mb-8">
                    <?php foreach ($events as $event) : ?>
                    <div class=" px-1 py-4 border-b  border-b-slate-200">
                        <span class="text-lg font-semibold text-gray-700">
                            <?php echo $event['bandName']; ?>
                        </span>
                        <br>
                        {{-- <span class="mx-2 font-semibold text-gray-700"> - </span> --}}

                        <span class="text-gray-700">
                            <?php echo $event['venueName']; ?>,
                        </span>

                        <span class="text-gray-700">
                            <?php echo $event['city']; ?>
                        </span>

                        <br>
                        <span class="text-gray-500 text-sm">
                            <?php echo $event['date']; ?>,
                            <?php echo $event['time']; ?>,
                        </span>
                    </div>
                    <?php endforeach; ?>
                </section>
                <a href="#"
                    class="mt-8 px-5 py-3 rounded inline-block bg-gradient-to-b  from-indigo-700  to-fuchsia-800 hover:bg-indigo-900 active:bg-indigo-900  text-white">See
                    all upcoming events</a>
            </div>
        </section>

    </main>
    <footer class="p-4 min-h-64 bg-slate-900"> </footer>
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
