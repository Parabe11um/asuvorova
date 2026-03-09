<section class="relative py-24 overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0">
        <div id="parallax-price"
             class="absolute -top-[20%] left-0 w-full h-[140%] bg-cover bg-center"
             style="background-image:url('{{ asset('images/bg_price.jpg') }}')">
        </div>
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 max-w-6xl mx-auto px-6">

        <h2 class="text-2xl md:text-3xl lg:text-4xl !text-white text-center my-16 font-semibold">
            Наши цены — НЕ кусаются!
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-2 gap-6 md:gap-12 max-w-3xl mx-auto">

            <!-- CARD -->
            <div class="bg-white/95 backdrop-blur-sm p-8 text-center shadow-2xl transition duration-300 hover:scale-105">

                <h3 class="text-lg md:text-xl font-semibold text-gray-700 mb-6">
                    Стрижка<br>короткие волосы
                </h3>

                <div class="space-y-3">

                    <div>
                        <p class="text-gray-500 text-sm">Стилист</p>
                        <p class="text-red-600 text-2xl md:text-3xl font-bold">
                            2900 ₽
                        </p>
                    </div>

                    <div class="pt-3 border-t border-gray-200">
                        <p class="text-gray-500 text-sm">Топ-стилист</p>
                        <p class="text-red-600 text-2xl md:text-3xl font-bold">
                            5500 ₽
                        </p>
                    </div>

                </div>

            </div>


            <!-- CARD -->
            <div class="bg-white/95 backdrop-blur-sm p-8 text-center shadow-2xl transition duration-300 hover:scale-105">

                <h3 class="text-lg md:text-xl font-semibold text-gray-700 mb-6">
                    Сложное окрашивание<br>средние волосы
                </h3>

                <div class="space-y-3">

                    <div>
                        <p class="text-gray-500 text-sm">Стилист</p>
                        <p class="text-red-600 text-2xl md:text-3xl font-bold">
                            6000 ₽
                        </p>
                    </div>

                    <div class="pt-3 border-t border-gray-200">
                        <p class="text-gray-500 text-sm">Топ-стилист</p>
                        <p class="text-red-600 text-2xl md:text-3xl font-bold">
                            10000 ₽
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
