<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans antialiased bg-slate-50">
    <header class="bg-slate-700 text-slate-400">
        <nav class="max-w-2xl mx-auto pr-4 flex justify-end gap-2 p-0">
            <a href="./index.php"
                class="site-branding inline-block  px-4 pt-2 pb-2 mr-auto text-orange-500 hover:text-slate-400 hover:underline text-xl font-bold small-caps">
                Fox Valley Live
            </a>
            <div class="nav-menu mt-3">
                <a href="./events.php" class="hover:text-orange-500 p-4 pb-2">events</a>
                <a href="./bands.php" class="hover:text-orange-500 p-4 pb-2">bands</a>
                <a href="./cities.php" class="hover:text-orange-500 p-4 pb-2">cities</a>
                <a href="./venues.php" class="hover:text-orange-500 p-4 pb-2">venues</a>
                <!-- <a href="./gallery.php" class="hover:text-orange-500 p-4 pb-2">gallery</a> -->
                <!-- <a href="#" class="hover:text-orange-500 p-4 pb-2">members</a> -->
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
        <div class="max-w-2xl mx-auto p-4 mt-8 mb-8">
            <h1 class="text-2xl sm:text-3xl md:text-4xl text-center mb-8">Where to See Live Music This Week</h1>

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

            <a href="./events.php"
                class="btn mt-4 inline-block bg-orange-500 hover:bg-orange-600 active:bg-orange-700 rounded px-4 py-2 text-white">See
                all upcoming shows.</a>
        </div>
    </main>

    <footer class="bg-slate-700 text-slate-400 py-16 text-center text-sm dark:text-white/70">
        <div class="wrapper max-w-2xl mx-auto ">
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
