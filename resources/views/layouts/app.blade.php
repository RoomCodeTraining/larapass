<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])




    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">

    <section class="w-full px-8 text-gray-700 bg-white body-font" {!! $attributes ?? '' !!}>
        <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">

            <a href="#_"
                class="flex items-center order-first mb-4 font-medium text-gray-900 lg:order-none lg:w-auto title-font lg:items-center lg:justify-center md:mb-0">
                <span
                    class="text-xl font-black leading-none text-gray-900 select-none logo">{{ config('app.name') }}<span
                        class="text-indigo-600" data-primary="indigo-600">.</span></span>
            </a>

            <div class="relative flex flex-col md:flex-row">
                <nav
                    class="flex flex-wrap items-center pt-3 pb-5 mb-4 text-base border-b border-gray-200 md:pt-0 md:mb-0 md:border-b-0 md:pr-3 md:mr-3 md:border-r md:pb-0">
                    <a href="#_" class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900">Accueil</a>
                    <a href="#_"
                        class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900">Categories</a>
                    <a href="#_"
                        class="mr-6 font-medium leading-6 text-gray-600 hover:text-gray-900">Evenements</a>
                    <a href="#_" class="font-medium leading-6 text-gray-600 md:mr-6 hover:text-gray-900">Nos
                        partenaires</a>
                </nav>
                <div class="inline-flex items-center justify-center ml-5 space-x-4 md:space-x-10 md:justify-end">
                    <a href="#_"
                        class="text-base font-medium leading-6 text-gray-600 whitespace-no-wrap transition duration-150 ease-in-out hover:text-gray-900">
                        Se connecter
                    </a>
                    <a href="#_"
                        class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600"
                        data-rounded="rounded-md" data-primary="indigo-600">
                        Créer un compte
                    </a>
                </div>
            </div>
        </div>
    </section>





    @yield('content')


    <section class="py-10 bg-gray-100">
        <div class="px-10 mx-auto max-w-7xl">
            <div class="flex flex-col items-center sm:flex-row sm:justify-between">
                <a href="#_" class="flex items-center text-lg font-bold">
                    <span class="ml-1">{{ config('app.name') }}</span>
                </a>
            </div>
            <div class="flex flex-col justify-between mt-5 mb-5 text-center sm:mb-0 sm:mt-12 sm:flex-row">
                <ul class="flex flex-row justify-center pb-3 -ml-4 -mr-4 text-sm font-bold">
                    <li> <a href="#_" class="px-2 text-gray-500 hover:text-gray-600">Categories</a> </li>
                    <li> <a href="#_" class="px-2 text-gray-500 hover:text-gray-600">Evenements</a> </li>
                    <li> <a href="#_" class="px-2 text-gray-500 hover:text-gray-600">FAQ's</a> </li>
                    <li> <a href="#_" class="px-2 text-gray-500 hover:text-gray-600">Terms</a></li>
                </ul>
                <p class="mt-3 text-xs leading-tight text-gray-500 sm:mt-0"> &copy; Copyright 2024</p>

            </div>
        </div>
    </section>
</body>

</html>
