<section class="wrapper">
    <div class="overflow-hidden">
        <div class="container py-[4.5rem] xl:!py-24 lg:!py-24 md:!py-24">

            <div class="flex flex-wrap mx-[-15px]">
                <div class="xl:w-7/12 xxl:w-6/12 w-full flex-[0_0_auto] !px-[15px] max-w-full !mx-auto !text-center">
                    <i class="icn-flower !text-[#7cb798] xl:!text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)]"></i>
                    <h2 class="xl:!text-[1.7rem] !text-[calc(1.295rem_+_0.54vw)] !leading-[1.25] font-semibold !tracking-[normal] !text-center !mt-2 !mb-10">
                        Наши акции и новинки
                    </h2>
                </div>
            </div>

            <div
                class="swiper-container nav-bottom nav-color !mb-[4.5rem] relative z-10 swiper-container-4"
                data-margin="30"
                data-dots="true"
                data-nav="false"
                data-items-lg="3"
                data-items-md="2"
                data-items-xs="1"
            >
                <!-- ВАЖНО: обёртка .swiper обязательна -->
                <div class="swiper overflow-visible pb-2">
                    <div class="swiper-wrapper">

                        <!-- SLIDE 1 -->
                        <div class="swiper-slide">
                            <article>
                                <div class="card !rounded-none flex flex-col h-full min-h-[480px] !shadow-[0_0.25rem_1.75rem_rgba(30,34,40,0.07)]">
                                    <figure class="card-img-top !rounded-none overlay overlay-1 group h-[260px] overflow-hidden">
                                        <a href="#" class="block h-full w-full">
                                            <img
                                                src="{{ asset('images/promo-item-1.jpg') }}"
                                                class="w-full !rounded-none h-full object-cover"
                                                alt="image"
                                            >
                                            <span class="bg"></span>
                                        </a>
                                        <figcaption class="group-hover:opacity-100 absolute w-full h-full opacity-0 text-center px-4 py-3 inset-0 z-[5] pointer-events-none p-2">
                                            <h5 class="from-top !mb-0 absolute w-full translate-y-[-80%] px-4 py-3 left-0 top-2/4 group-hover:-translate-y-2/4">
                                                Подробнее
                                            </h5>
                                        </figcaption>
                                    </figure>

                                    <div class="card-body p-6 flex flex-col flex-1">
                                        <div class="post-header">
                                            <h2 class="post-title h3 !mt-1 !mb-3 !text-[1.15rem] !font-semibold !tracking-[normal]">
                                                <a class="!text-[#343f52] hover:!text-[#7cb798]" href="/blog-post">
                                                    Новые услуги по скидкам
                                                </a>
                                            </h2>
                                        </div>

                                        <div class="post-footer mt-auto">
                                            <ul class="!text-[0.75rem] !text-[#aab0bc] m-0 p-0 list-none flex !mb-0">
                                                <li class="post-date inline-block">
                                                    <i class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i>
                                                    <span>14 Apr 2022</span>
                                                </li>
                                                <li class="post-comments inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]">
                                                    <a class="!text-[#aab0bc] hover:!text-[#7cb798] hover:!border-[#7cb798]" href="#">
                                                        <i class="uil uil-comment pr-[0.2rem] align-[-.05rem] before:content-['\ea54']"></i>4
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- SLIDE 2 -->
                        <div class="swiper-slide">
                            <article>
                                <div class="card !rounded-none flex flex-col h-full min-h-[480px]">
                                    <figure class="card-img-top !rounded-none overlay overlay-1 group h-[260px] overflow-hidden">
                                        <a href="#" class="block h-full w-full">
                                            <img
                                                src="{{ asset('images/promo-item-2.jpg') }}"
                                                class="w-full !rounded-none h-full object-cover"
                                                alt="image"
                                            >
                                            <span class="bg"></span>
                                        </a>
                                        <figcaption class="group-hover:opacity-100 absolute w-full h-full opacity-0 text-center px-4 py-3 inset-0 z-[5] pointer-events-none p-2">
                                            <h5 class="from-top !mb-0 absolute w-full translate-y-[-80%] px-4 py-3 left-0 top-2/4 group-hover:-translate-y-2/4">
                                                Подробнее
                                            </h5>
                                        </figcaption>
                                    </figure>

                                    <div class="card-body p-6 flex flex-col flex-1">
                                        <div class="post-header">
                                            <h2 class="post-title h3 !mt-1 !mb-3 !text-[1.15rem] !font-semibold !tracking-[normal]">
                                                <a class="!text-[#343f52] hover:!text-[#7cb798]" href="/blog-post">
                                                    Скидка в день рождения
                                                </a>
                                            </h2>
                                        </div>

                                        <div class="post-footer mt-auto">
                                            <ul class="!text-[0.75rem] !text-[#aab0bc] m-0 p-0 list-none flex !mb-0">
                                                <li class="post-date inline-block">
                                                    <i class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i>
                                                    <span>29 Mar 2022</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- SLIDE 3 -->
                        <div class="swiper-slide">
                            <article>
                                <div class="card !rounded-none flex flex-col h-full min-h-[480px]">
                                    <figure class="card-img-top !rounded-none overlay overlay-1 group h-[260px] overflow-hidden">
                                        <a href="#" class="block h-full w-full">
                                            <img
                                                src="{{ asset('images/promo-item-1.jpg') }}"
                                                class="w-full !rounded-none h-full object-cover"
                                                alt="image"
                                            >
                                            <span class="bg"></span>
                                        </a>
                                        <figcaption class="group-hover:opacity-100 absolute w-full h-full opacity-0 text-center px-4 py-3 inset-0 z-[5] pointer-events-none p-2">
                                            <h5 class="from-top !mb-0 absolute w-full translate-y-[-80%] px-4 py-3 left-0 top-2/4 group-hover:-translate-y-2/4">
                                                Подробнее
                                            </h5>
                                        </figcaption>
                                    </figure>

                                    <div class="card-body p-6 flex flex-col flex-1">
                                        <div class="post-header">
                                            <h2 class="post-title h3 !mt-1 !mb-3 !text-[1.15rem] !font-semibold !tracking-[normal]">
                                                <a class="!text-[#343f52] hover:!text-[#7cb798]" href="/blog-post">
                                                    Новые услуги по скидкам
                                                </a>
                                            </h2>
                                        </div>

                                        <div class="post-footer mt-auto">
                                            <ul class="!text-[0.75rem] !text-[#aab0bc] m-0 p-0 list-none flex !mb-0">
                                                <li class="post-date inline-block">
                                                    <i class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i>
                                                    <span>14 Apr 2022</span>
                                                </li>
                                                <li class="post-comments inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]">
                                                    <a class="!text-[#aab0bc] hover:!text-[#7cb798] hover:!border-[#7cb798]" href="#">
                                                        <i class="uil uil-comment pr-[0.2rem] align-[-.05rem] before:content-['\ea54']"></i>4
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- SLIDE 4 -->
                        <div class="swiper-slide">
                            <article>
                                <div class="card !rounded-none flex flex-col h-full min-h-[480px] ">
                                    <figure class="card-img-top !rounded-none overlay overlay-1 group h-[260px] overflow-hidden">
                                        <a href="#" class="block h-full w-full">
                                            <img
                                                src="{{ asset('images/promo-item-2.jpg') }}"
                                                class="w-full !rounded-none h-full object-cover"
                                                alt="image"
                                            >
                                            <span class="bg"></span>
                                        </a>
                                        <figcaption class="group-hover:opacity-100 absolute w-full h-full opacity-0 text-center px-4 py-3 inset-0 z-[5] pointer-events-none p-2">
                                            <h5 class="from-top !mb-0 absolute w-full translate-y-[-80%] px-4 py-3 left-0 top-2/4 group-hover:-translate-y-2/4">
                                                Подробнее
                                            </h5>
                                        </figcaption>
                                    </figure>

                                    <div class="card-body p-6 flex flex-col flex-1">
                                        <div class="post-header">
                                            <h2 class="post-title h3 !mt-1 !mb-3 !text-[1.15rem] !font-semibold !tracking-[normal]">
                                                <a class="!text-[#343f52] hover:!text-[#7cb798]" href="/blog-post">
                                                    Скидка в день рождения
                                                </a>
                                            </h2>
                                        </div>

                                        <div class="post-footer mt-auto">
                                            <ul class="!text-[0.75rem] !text-[#aab0bc] m-0 p-0 list-none flex !mb-0">
                                                <li class="post-date inline-block">
                                                    <i class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i>
                                                    <span>29 Mar 2022</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>
</section>
