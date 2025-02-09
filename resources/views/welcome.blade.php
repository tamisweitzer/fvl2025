<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">

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

<body class="bg-violet-50 h-full">

    <main class="flex flex-col justify-center items-center place-items-center h-full text-center concert-imag e">

        <div>
            <h1 class="mb-8 tracking-wider">
                <span class="text-3xl inline-block mb-3 font-light">The return of</span>
                <br>
                <span class="text-5xl font-extrabold">Fox Valley Live</span>
            </h1>

            <p class="text-lg">Follow us on <a href="https://www.facebook.com/foxvalleylive"
                    class="border-b border-b-violet-400 hover:text-violet-600">Facebook</a> for the new launch
                date!</p>
        </div>
    </main>

</body>

</html>
