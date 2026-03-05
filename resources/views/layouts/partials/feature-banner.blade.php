<section class="relative -mt-[4px] h-[600px] md:h-[700px] overflow-hidden z-20">

    <!-- Background -->
    <div class="absolute inset-0 overflow-hidden">
        <div id="parallax-bg"
             class="absolute -top-[20%] left-0 w-full h-[140%] bg-cover bg-center will-change-transform"
             style="background-image: url('{{ asset('images/parallax-look.jpg') }}');">
        </div>
    </div>

    <!-- Overlay -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- Content -->
    <div class="relative z-30 flex items-center justify-center h-full text-center text-white px-6">
        <div class="max-w-3xl">
            <h2 class="text-3xl md:text-5xl font-serif leading-tight mb-8">
                Ваш модный LOOK —<br>
                вместе с нами!
            </h2>

            <a target="_blank"
               href="https://www.youtube.com/watch?v=iKrjW79hT4o"
               class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-white/20 backdrop-blur-md hover:bg-white/30 transition">
                <svg class="w-8 h-8 text-white ml-1"
                     fill="currentColor"
                     viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z"/>
                </svg>
            </a>
        </div>
    </div>

</section>

