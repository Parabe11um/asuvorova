<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords" content="Tailwind CSS, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>Салон Анжелики Суворовой</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="grow shrink-0">
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
</div>


<!-- progress wrapper -->
<div class="progress-wrap fixed w-[2.3rem] h-[2.3rem] cursor-pointer block shadow-[inset_0_0_0_0.1rem_rgba(128,130,134,0.25)] z-[1010] opacity-0 invisible translate-y-3 transition-all duration-[0.2s] ease-[linear,margin-right] delay-[0s] rounded-[100%] right-6 bottom-6 motion-reduce:transition-none after:absolute after:content-['\e951'] after:text-center after:leading-[2.3rem] after:text-[1.2rem] after:!text-[#3f78e0] after:h-[2.3rem] after:w-[2.3rem] after:cursor-pointer after:block after:z-[1] after:transition-all after:duration-[0.2s] after:ease-linear after:left-0 after:top-0 motion-reduce:after:transition-none after:font-Unicons">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path class="fill-none stroke-[#3f78e0] stroke-[4] box-border transition-all duration-[0.2s] ease-linear motion-reduce:transition-none" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
    </svg>
</div>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {

        const bgbanner = document.getElementById("parallax-bg");

        window.addEventListener("scroll", () => {
            const rect = bgbanner.parentElement.parentElement.getBoundingClientRect();
            const offset = rect.top * 0.18;
            bgbanner.style.transform = `translateY(${offset}px)`;
        });


        const bgPrice = document.getElementById("parallax-price");

        window.addEventListener("scroll", () => {
            const rect = bgPrice.parentElement.parentElement.getBoundingClientRect();
            const offset = rect.top * 0.18;
            bgPrice.style.transform = `translateY(${offset}px)`;
        });

    });
</script>

</body></html>
