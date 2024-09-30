@extends('layouts.main')
@section('content')
    @include('shared.hero')
    @include('includes.upcoming-events')
    <section
        class="relative bg-gradient-to-r from-blue-200 to-orange-300 dark:bg-gradient-to-r dark:from-blue-800 dark:to-orange-900"
        style="background-image: url('https://www.hdwallpapers.in/download/good_vibes_only_4k_hd_inspirational-HD.jpg'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-black opacity-30"></div> <!-- Couverture semi-transparente -->
        <div class="relative max-w-screen-xl px-4 py-4 mx-auto lg:py-8 lg:px-6">
            <div class="max-w-screen-sm mx-auto mb-8 text-center lg:mb-4">
                <h2 class="mb-4 font-extrabold tracking-tight text-white text-md lg:text-4xl">
                    Créez votre Pass en moins de 2 minutes. Vérifiez la liste des participants, scannez les billets et
                    laissez la magie opérer.
                </h2>
                <p class="max-w-2xl mx-auto font-light text-white md:mb-6 md:text-lg">
                    C'est parti !
                </p>
                <a href="#"
                    class="inline-block px-6 py-2 mt-4 text-sm font-medium text-white uppercase bg-orange-500 rounded-lg hover:bg-orange-600 focus:ring-4 focus:ring-orange-300">
                    Publier un événement
                </a>
            </div>
        </div>
    </section>
@stop
