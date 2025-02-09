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
    <header class="p-4 bg-slate-900"></header>
    <main class="min-h-[calc(100vh-200px)] bg-slate-50">
        <section class="hero mb-12 px-8 py-12 min-h-2xl text-center text-white relative concert-image">
            <div data-hero-overlay
                class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-tr from-fuchsia-950 via-indigo-800  to-amber-500 opacity-85 flex flex-col justify-center align-middle">

                <section class="px-8 py-4 mx-auto w-full md:max-w-4xl">
                    <h1
                        class="text-4xl sm:text-5xl md:text-7xl mb-16 text-center font-semibold [text-shadow:_1px_1px_1px_rgb(0_0_0_/_40%)]  tracking-wide">
                        The hottest live music in the Fox Valley
                        <div class="-m-7 text-xl sm:text-2xl italic text-amber-500"><br>...and beyond</div>
                    </h1>

                    <p class="text-base md:text-3xl [text-shadow:_1px_1px_1px_rgb(0_0_0_/_40%)]  tracking-widest">All
                        music. All live. All local.</p>
                </section>
            </div>
        </section>
        <section class="main-content p-4 mx-auto max-w-2xl">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, porro iusto perspiciatis recusandae
                earum debitis ducimus voluptatem dolorum harum consequatur quam officia cum labore magni dolorem ad ex
                at
                exercitationem.</p>
        </section>

    </main>
    <footer class="p-4 min-h-64 bg-slate-900"> </footer>
</body>

</html>
