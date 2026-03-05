<section class="wrapper bg-white py-20 relative z-10">
    <div class="container">

        <!-- mobile: column, desktop: row -->
        <div class="flex flex-col md:!flex-row gap-12">

            <!-- LEFT COLUMN -->
            <div class="w-full md:w-1/4 flex-shrink-0">
                <ul class="nav flex flex-row md:!flex-col gap-3 md:gap-4">

                    <li class="nav-item">
                        <a class="nav-link
          block text-base font-medium
          !px-5 py-3
          bg-white
          border border-gray-200
          shadow-sm
          hover:shadow-md hover:-translate-y-0.5
          transition-all duration-300"
                           data-bs-toggle="tab"
                           href="#tab3-1">
                            Парикмахерский зал
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link
          block text-base font-medium
          !px-5 py-3
          bg-white
          border border-gray-200
          shadow-sm
          hover:shadow-md hover:-translate-y-0.5
          transition-all duration-300"
                           data-bs-toggle="tab"
                           href="#tab3-2">
                            Косметология
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link
          block text-base font-medium
          !px-5 py-3
          bg-white
          border border-gray-200
          shadow-sm
          hover:shadow-md hover:-translate-y-0.5
          transition-all duration-300"
                           data-bs-toggle="tab"
                           href="#tab3-3">
                            Солярий
                        </a>
                    </li>

                </ul>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="w-full md:w-3/4 min-w-0">
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="tab3-1">
                        <div class="space-y-6">
                            <h3 class="text-3xl font-serif">Парикмахерский зал</h3>

                            <p class="text-gray-600 leading-relaxed text-lg">
                                Красивые стрижки, современные техники окрашивания и уход нового поколения.
                                Мы создаём образ, который подчёркивает индивидуальность.
                            </p>

                            <img class="w-full shadow-xl object-cover max-h-[520px]"
                                 src="{{ asset('images/Hair_Room.jpg') }}"
                                 alt="">
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab3-2">
                        <div class="space-y-6">
                            <h3 class="text-3xl font-serif">Косметология</h3>

                            <p class="text-gray-600 leading-relaxed text-lg">
                                Современные процедуры и профессиональная косметика нового поколения.
                            </p>

                            <img class="w-full shadow-xl object-cover max-h-[520px]"
                                 src="{{ asset('images/Cosmetology.jpg') }}"
                                 alt="">
                        </div>
                    </div>

                    <div class="tab-pane fade" id="tab3-3">
                        <div class="space-y-6">
                            <h3 class="text-3xl font-serif">Солярий</h3>

                            <p class="text-gray-600 leading-relaxed text-lg">
                                Ровный и безопасный загар с использованием современных технологий.
                            </p>

                            <img class="w-full shadow-xl object-cover max-h-[520px]"
                                 src="{{ asset('images/Solarium.jpg') }}"
                                 alt="">
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
