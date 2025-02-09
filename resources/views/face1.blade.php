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

<body class="font-sans antialiased" style="background-color: #e8eaf6;">
    <header class="bg-slate-700 text-slate-400">
        <nav class="max-w-6xl mx-auto pr-4 flex justify-end gap-2 p-0">
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

    <main class="py-16 text-center text-black dark:text-white/70"">main</main>

    <footer class="bg-slate-700 text-slate-400 py-16 text-center text-sm dark:text-white/70">
        footer
    </footer>
</body>

</html>
