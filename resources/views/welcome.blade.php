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

<body class="bg-slate-100 h-full">

    <header class="bg-slate-700 text-slate-400">
        <nav class="max-w-2xl mx-auto pr-4 flex justify-end gap-2 p-0">
            <a href=""
                class="site-branding inline-block  px-4 pt-2 pb-2 mr-auto text-orange-500 hover:text-slate-400 hover:underline text-xl font-bold small-caps">
                Fox Valley Live
            </a>
        </nav>
        <div class="hero_home p-8">
            <div class="flex flex-col justify-center items-center align-middle max-w-6xl mx-auto h-full">
                <div class="content bg-white opacity-85 max-w-fit px-4 sm:px-10 pt-4 pb-6 font-extrabold text-center">
                    <p class="text-slate-500 font-semibold text-3xl ">The best live music in the Fox Valley <span
                            class="text-orange-600 italic font-bold text-stroke"><br>...and beyond!</span></p>
                </div>
            </div>
        </div>
        <div class="px-4 py-1 text-right text-sm">Lita Ford, The Watering Hole, Green Bay</div>
    </header>

    <main id="main" class="min-h-[calc(100vh-200px)]">
        <div class="max-w-2xl mx-auto p-4 mt-8 mb-8">
            <h1 class="text-2xl sm:text-3xl md:text-4xl mb-8">All music. All live. All local.</h1>
            <form id="emailform" action="/email-signup" method="post"
                class="bg-slate-50 px-8 py-12 text-gray-600 shadow-inner border border-slate-300">
                @csrf
                <h2 class="text-3xl mb-8">Email Sign Up</h2>
                <p class="mb-6 text-sm">Submit your email below if you'd like to be informed when Fox Valley Live
                    launches.
                </p>
                <x-form-group>
                    <x-label-default for="name">Your name</x-label-default>
                    <x-input-text id="name" name="name"></x-input-text>
                </x-form-group>

                <x-form-group>
                    <x-label-default for="email">Your email</x-label-default>
                    <x-input-text id="email" name="email"></x-input-text>
                </x-form-group>

                <x-form-button-submit id="submit">Submit</x-form-button-submit>
            </form>
        </div>
    </main>

    <footer id="footer" class="bg-slate-700 text-slate-400 py-16 text-center text-sm dark:text-white/70"></footer>
    <script>
        const sent = document.getElementById('emailform');
        sent.addEventListener('click', function(e) {
            const toast = document.createElement('div'),
                msg = document.createTextNode("Thanks for signing up! You'll be hearing from me soon!"),
                main = document.getElementById('main');

            toast.appendChild(msg);
            main.insertBefore(toast, document.getElementById('footer'))

        })
    </script>
</body>

</html>
