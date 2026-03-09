<section class="relative min-h-[520px] md:min-h-[650px] lg:min-h-[750px] overflow-hidden z-20">

    <!-- Background -->
    <div class="absolute inset-0 overflow-hidden">
        <div id="parallax-price"
             class="absolute -top-[20%] left-0 w-full h-[140%] bg-cover bg-center will-change-transform"
             style="background-image: url('{{ asset('images/bg_price.jpg') }}');">
        </div>
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/30"></div>

    <!-- Content -->
    <div class="relative z-30 flex flex-col items-center justify-center h-full px-6 py-6">

        <h2 class="text-lg sm:text-xl md:text-2xl lg:text-3xl text-white my-6 md:my-10 text-center">
            Наши цены — НЕ кусаются!
        </h2>

        <div class="flex flex-row lg:!flex-row !gap-6 md:!gap-10">

            <!-- Card 1 -->
            <div class="card !shadow-[0_20px_40px_rgba(0,0,0,0.25)] rounded-none">
                <div class="card-body bg-white text-[#111] p-3 sm:p-4 md:p-8 rounded-none">
                    <div class="border border-gray-300 p-5 md:p-8 text-center rounded-none">

                        <p class="text-sm sm:text-base md:text-lg font-semibold mb-6 leading-snug">
                            Стрижка<br>короткие волосы
                        </p>

                        <p class="text-gray-600 text-xs sm:text-sm mb-1">Стилист</p>
                        <p class="text-red-600 text-lg sm:text-xl md:text-2xl font-semibold mb-6">2900 ₽</p>

                        <p class="text-gray-600 text-xs sm:text-sm mb-1">Топ-стилист</p>
                        <p class="text-red-600 text-lg sm:text-xl md:text-2xl font-semibold mb-6">5500 ₽</p>

                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card !shadow-[0_20px_40px_rgba(0,0,0,0.25)] rounded-none">
                <div class="card-body bg-white text-[#111] p-3 sm:p-4 md:p-8 rounded-none">
                    <div class="border border-gray-300 p-5 md:p-8 text-center rounded-none">

                        <p class="text-sm sm:text-base md:text-lg font-semibold mb-6 leading-snug">
                            Сложное окрашивание<br>средние волосы
                        </p>

                        <p class="text-gray-600 text-xs sm:text-sm mb-1">Стилист</p>
                        <p class="text-red-600 text-lg sm:text-xl md:text-2xl font-semibold mb-6">6000 ₽</p>

                        <p class="text-gray-600 text-xs sm:text-sm mb-1">Топ-стилист</p>
                        <p class="text-red-600 text-lg sm:text-xl md:text-2xl font-semibold mb-6">10000 ₽</p>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
