<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perpustakaan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">

    <style>
        /* Add your custom styles here */
        body {
            font-family: 'figtree', sans-serif;
        }


        /* Adjust as needed for your layout */
        @media (min-width: 640px) {
            /* Styles for screens wider than 640px */
        }
    </style>
</head>

<body class="antialiased bg-custom text-white">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <!-- Logo -->
                <img src="{{ asset('images/logo.png') }}" class="w-20 h-20 mb-10" alt="Logo">
            </div>

            <!-- Heading and description for your landing page -->
            <h1 class="text-3xl font-medium text-gray-900 dark:text-white mt-10">Selamat Datang di <span class="text-blue-500 font-semibold">Perpustakaan</span></h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 mt-4 text-justify">Perpustakaan merupakan tempat untuk
                mendapat dan
                berbagi informasi maupun pengetahuan</p>

            <!-- Call to action button -->
            @if (Route::has('login'))
                <div class="mt-6">
                    @auth
                    <a href="{{ url('/dashboard') }}"
                            class="inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md shadow-md">Get Started
                        </a>
                    @else
                        <a href="{{ route('login') }}"
                            class="inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md shadow-md">Login
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 ml-2 rounded-md shadow-md">Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</body>

</html>


