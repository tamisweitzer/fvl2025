<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

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
        .hero_home {
            height: 800px;
            /* background-image: url('./public/images/lita.jpg'); */
            background-image: url('../images/lita.jpg');
            background-position: center;
            background-size: cover;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: black;
            opacity: 0.3;
        }

        .text-stroke {
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: rgb(249 115 22);
            /* -orange-500 */
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body class=" h-full">

    <main id="main" class="min-h-[calc(100vh-200px)]">
        <div class="max-w-2xl mx-auto p-4 mt-8 mb-8">
            <h1 class="text-2xl sm:text-3xl md:text-4xl mb-4 text-center">Fox Valley Live</h1>
            <h2 class="mb-8 text-center">All music. All live. All local.</h2>

            <div
                class="js-confirmation-msg px-8 py-12 text-center bg-orange-50 border border-orange-200 text-orange-600 rounded">
                <p class="text-xl mb-8">Thanks for signing up! You'll be hearing from me soon!</p>
                <p>You will now be redirected to the home page.</p>
            </div>

        </div>
    </main>

    <footer id="footer" class="bg-slate-700 text-slate-400 py-16 text-center text-sm dark:text-white/70"></footer>
    <script>
        const div = document.getElementById('js-confirmation-msg');

        setTimeout(function() {
            window.location.replace('/');
        }, 5000)
    </script>
</body>

</html>
