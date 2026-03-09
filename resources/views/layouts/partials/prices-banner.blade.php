<section class="relative py-20 md:py-24 overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0">
        <div id="parallax-price"
             class="absolute -top-[20%] left-0 w-full h-[140%] bg-cover bg-center"
             style="background-image:url('{{ asset('images/bg_price.jpg') }}')">
        </div>
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 max-w-6xl mx-auto px-4 sm:px-6">

        <!-- Title -->
        <h2 class="!text-xl sm:!text-2xl md:!text-3xl !text-white text-center font-semibold !mb-10 md:!mb-16">
            Наши цены — НЕ кусаются!
        </h2>

        <!-- Cards -->
        <div class="grid grid-rows-1 sm:grid-cols-2 gap-6 md:gap-12 max-w-3xl mx-auto">

            <!-- CARD 1 -->
            <div class="bg-white/95 backdrop-blur-sm p-5 sm:p-6 md:p-8 text-center shadow-xl rounded-md transition duration-300 hover:scale-105">

                <h3 class="!text-sm sm:!text-base md:!text-lg font-semibold text-gray-700 !mb-4 md:!mb-6">
                    Стрижка<br>короткие волосы
                </h3>

                <div class="space-y-3">

                    <div>
                        <p class="!text-xs sm:!text-sm text-gray-500">Стилист</p>
                        <p class="text-red-600 !text-lg sm:!text-xl md:!text-2xl font-bold whitespace-nowrap">
                            2900 ₽
                        </p>
                    </div>

                    <div class="pt-3 border-t border-gray-200">
                        <p class="!text-xs sm:!text-sm text-gray-500">Топ-стилист</p>
                        <p class="text-red-600 !text-lg sm:!text-xl md:!text-2xl font-bold whitespace-nowrap">
                            5500 ₽
                        </p>
                    </div>

                </div>

            </div>


            <!-- CARD 2 -->
            <div class="bg-white/95 backdrop-blur-sm p-5 sm:p-6 md:p-8 text-center shadow-xl rounded-md transition duration-300 hover:scale-105">

                <h3 class="!text-sm sm:!text-base md:!text-lg font-semibold text-gray-700 !mb-4 md:!mb-6">
                    Сложное окрашивание<br>средние волосы
                </h3>

                <div class="space-y-3">

                    <div>
                        <p class="!text-xs sm:!text-sm text-gray-500">Стилист</p>
                        <p class="text-red-600 !text-lg sm:!text-xl md:!text-2xl font-bold whitespace-nowrap">
                            6000 ₽
                        </p>
                    </div>

                    <div class="pt-3 border-t border-gray-200">
                        <p class="!text-xs sm:!text-sm text-gray-500">Топ-стилист</p>
                        <p class="text-red-600 !text-lg sm:!text-xl md:!text-2xl font-bold whitespace-nowrap">
                            10000 ₽
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
