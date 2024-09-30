<section class="relative w-full bg-blue-500 bg-center bg-cover"
    style="background-image: url('{{ asset('images/african_two.jpg') }}');">
    <div class="absolute inset-0 bg-black opacity-50"></div> <!-- Couverture semi-transparente -->
    <div class="relative flex flex-col px-10 py-8 mx-auto max-w-7xl lg:flex-row lg:py-24"> <!-- Hauteur réduite -->
        <div
            class="relative flex flex-col items-center justify-center w-full max-w-2xl mx-auto text-center lg:w-1/2 lg:max-w-none">
            <div class="relative mb-6">
                <div class="relative flex -rotate-2 text-black px-3 mb-4 py-1.5 uppercase font-bold text-xs">
                    <span class="absolute inset-0 z-20 bg-gray-300 rounded"></span>
                    <span class="w-full h-full absolute rounded right-0 -mr-0.5 top-0 mt-0.5 bg-gray-400"></span>
                    <span class="relative z-20">{{ __('Les meilleurs événements du moment') }}</span>
                </div>
            </div>
            <h1 class="relative mb-6 text-5xl font-extrabold text-white md:text-3xl lg:text-5xl">
                Découvrez, partagez
                <span class="relative inline-block">
                    <span class="relative z-10 p-6">et</span>
                    <svg class="absolute top-0 right-0 w-full -mt-4 text-yellow-300 fill-current rotate-12"
                        viewBox="0 0 386 189" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M91.315 32.349c-43.9 18.5-66.3 38.1-72.8 63.8-1.3 5.3-2.9 8.5-6.1 12.5-19.2 24.1-15.9 50.4 8.3 66.5 25.5 16.9 97.2 17.9 174 2.4 11-2.2 28.8-5.4 39.5-7 133.3-20.1 177.8-79 137.4-119.6-24.6-24.8-60.9-35.4-121.4-35.8-57.6-.3-134.1 23.6-189.2 56.5-14.4 8.6-16.1 5.2-11.9.8 14.8-15.6 54.7-35.9 96.4-48.2 37.2-11 54.4-15.5 82.3-15.7 10.9-.1 17.2-7.6.4-8.5-17.8-.8-89.2 12.2-136.9 32.3Zm268.1 74.9c-17.7 22.2-58.5 38.7-124.6 50.2-220.9 38.4-203.5-44.7-203.5-44.7.2-.1 69.7-68.8 206.5-85.5 67.3-8.3 174.6 13.5 121.6 80Zm-263.8 67.4c22.8 3.1-4 3.7-37.8.9-63-5.2-44.8-41.5-39-47.5 18.8 27.1 44.9 42.3 76.8 46.6Z" />
                    </svg>
                </span>
                vivez des expériences uniques près de chez vous.
            </h1>
            <div class="relative mb-6">

            </div>
            <div class="flex flex-col w-full space-y-5 md:flex-row mt-7 md:w-auto md:space-y-0 md:space-x-2">
                <a href="#events"
                    class="w-full px-6 py-3 font-bold text-center text-white uppercase bg-blue-600 rounded text-md md:w-auto">Découvrir
                    maintenant</a>
                <a href="#_"
                    class="px-6 py-3 font-bold text-center text-gray-700 uppercase bg-gray-200 rounded text-md">Publier
                    un événement</a>
            </div>
        </div>
    </div>
</section>
