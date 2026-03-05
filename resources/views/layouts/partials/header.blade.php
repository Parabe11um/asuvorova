<header class="relative wrapper !bg-[#edf2fc]">
    <nav class="navbar navbar-expand-lg center-nav transparent position-absolute navbar-dark caret-none">
        <div class="container flex items-center justify-between">
            <div class="navbar-brand"><a href="/"> <img class="logo-dark" src="{{ asset('images/logo.png') }}"
                                                        srcset="{{ asset('images/logo.png') }}" alt="image"> <img
                        class="logo-light" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo.png') }}"
                        alt="image"> </a></div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header xl:!hidden lg:!hidden flex items-center justify-between flex-row p-6"><h3
                        class="!text-white xl:!text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !mb-0">Sandbox</h3>
                    <button type="button"
                            class="btn-close btn-close-white !mr-[-0.75rem] m-0 p-0 leading-none !text-[#343f52] transition-all duration-[0.2s] ease-in-out border-0 motion-reduce:transition-none before:text-[1.05rem] before:text-white before:content-['\ed3b'] before:w-[1.8rem] before:h-[1.8rem] before:leading-[1.8rem] before:shadow-none before:transition-[background] before:duration-[0.2s] before:ease-in-out before:!flex before:justify-center before:items-center before:m-0 before:p-0 before:rounded-[100%] hover:no-underline bg-inherit before:bg-[rgba(255,255,255,.08)] before:font-Unicons hover:before:bg-[rgba(0,0,0,.11)] "
                            data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body flex flex-col lg:flex-row lg:items-center lg:justify-center !h-full">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown dropdown-mega"><a class="nav-link font-bold !tracking-[-0.01rem]"
                                                                       href="#">О салоне</a></li>
                        <li class="nav-item dropdown"><a class="nav-link font-bold !tracking-[-0.01rem]"
                                                         href="#">Акции</a></li>
                        <li class="nav-item dropdown"><a class="nav-link font-bold !tracking-[-0.01rem]"
                                                         href="#">Прайс</a></li>
                        <li class="nav-item dropdown"><a class="nav-link font-bold !tracking-[-0.01rem]" href="#">Галерея</a>
                        </li>
                        <li class="nav-item dropdown dropdown-mega"><a class="nav-link font-bold !tracking-[-0.01rem]"
                                                                       href="#">Статьи</a></li>
                        <li class="nav-item dropdown dropdown-mega"><a class="nav-link font-bold !tracking-[-0.01rem]"
                                                                       href="#">Контакты</a></li>
                    </ul> <!-- /.navbar-nav -->
                    <div class="offcanvas-footer xl:!hidden lg:!hidden">
                        <div><a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a> <br> 00 (123)
                            456 78 90 <br>
                            <nav class="nav social social-white !mt-4"><a
                                    class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                    href="#"><i
                                        class="uil uil-twitter before:content-['\ed59'] !text-white text-[1rem]"></i></a>
                                <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                   href="#"><i
                                        class="uil uil-facebook-f before:content-['\eae2'] !text-white text-[1rem]"></i></a>
                                <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                   href="#"><i
                                        class="uil uil-dribbble before:content-['\eaa2'] !text-white text-[1rem]"></i></a>
                                <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                   href="#"><i
                                        class="uil uil-instagram before:content-['\eb9c'] !text-white text-[1rem]"></i></a>
                                <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                                   href="#"><i
                                        class="uil uil-youtube before:content-['\edb5'] !text-white text-[1rem]"></i></a>
                            </nav> <!-- /.social --> </div>
                    </div> <!-- /.offcanvas-footer --> </div> <!-- /.offcanvas-body --> </div><!-- /.navbar-collapse -->
            <div class="navbar-other !flex !ml-auto items-center">
                <ul class="navbar-nav !flex-row !items-center"> <!-- Контакты -->
                    <li class="nav-item hidden xl:block text-right">
                        <div class="text-sm leading-tight flex flex-row">
                            <div class="!flex-column content-end">
                                <a href="tel:+74997496507"
                                   class="flex font-semibold text-[15px] md:text-[13px] lg:text-[14px] xl:text-[15px] !text-[#cacaca] hover:!text-[#3f78e0]">
                                    +7 (499) 749-65-07
                                </a>

                                <a href="tel:+79652118800"
                                   class="font-semibold text-[15px] md:text-[13px] lg:text-[14px] xl:text-[15px] !text-[#cacaca] hover:!text-[#3f78e0]">
                                    +7 (965) 211-88-00
                                </a>
                            </div>
                            <a href="#"
                               class="ml-2 px-4 py-2 bg-[#fff] border-1 !text-black text-[0.85rem] font-semibold hover:bg-[#000] hover:!text-[#fff] transition whitespace-nowrap">
                                Записаться
                            </a>
                        </div>
                    </li>
                    <li class="nav-item ml-4"><a class="nav-link" data-bs-toggle="offcanvas"
                                                 data-bs-target="#offcanvas-info"> <i
                                class="uil uil-info-circle !text-[1.1rem]"></i> </a></li> <!-- burger -->
                    <li class="nav-item xl:!hidden lg:!hidden">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
            </div> <!-- /.navbar-other --> </div> <!-- /.container --> </nav> <!-- /.navbar --> <!--/.modal -->
    <div class="offcanvas offcanvas-end text-inverse !text-[#cacaca] opacity-100" id="offcanvas-info"
         data-bs-scroll="true">
        <div class="offcanvas-header flex flex-row items-center justify-between p-[1.5rem]"><h3
                class="!text-white xl:!text-[1.5rem] !text-[calc(1.275rem_+_0.3vw)] !leading-[1.4] !mb-0">Sandbox</h3>
            <button type="button" class="btn-close btn-close-white !mr-[-0.5rem] m-0 p-0" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
        </div>
        <div class="offcanvas-body !pb-[1.5rem]">
            <div class="widget !mb-8"><p>Sandbox is a multipurpose HTML5 template with various layouts which will be a
                    great solution for your business.</p></div> <!-- /.widget -->
            <div class="widget !mb-8"><h4 class="widget-title !text-white !mb-[0.75rem] !text-[.95rem] !leading-[1.45]">
                    Contact Info</h4>
                <address class=" not-italic !leading-[inherit] !mb-[1rem]"> Moonshine St. 14/05 <br> Light City, London
                </address>
                <a class="!text-[#cacaca] hover:!text-[#3f78e0]"
                   href="mailto:first.last@email.com">info@email.com</a><br> 00 (123) 456 78 90
            </div> <!-- /.widget -->
            <div class="widget !mb-8"><h4 class="widget-title !text-white !mb-[0.75rem] !text-[.95rem] !leading-[1.45]">
                    Learn More</h4>
                <ul class="list-unstyled !pl-0">
                    <li><a class="!text-[#cacaca] hover:!text-[#3f78e0]" href="#">Our Story</a></li>
                    <li class="!mt-[.35rem]"><a class="!text-[#cacaca] hover:!text-[#3f78e0]" href="#">Terms of Use</a>
                    </li>
                    <li class="!mt-[.35rem]"><a class="!text-[#cacaca] hover:!text-[#3f78e0]" href="#">Privacy
                            Policy</a></li>
                    <li class="!mt-[.35rem]"><a class="!text-[#cacaca] hover:!text-[#3f78e0]" href="#">Contact Us</a>
                    </li>
                </ul>
            </div> <!-- /.widget -->
            <div class="widget"><h4 class="widget-title !text-white !mb-[0.75rem] !text-[.95rem] !leading-[1.45]">Follow
                    Us</h4>
                <nav class="nav social social-white"><a
                        class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                        href="#"><i class="uil uil-twitter before:content-['\ed59'] !text-white text-[1rem]"></i></a> <a
                        class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                        href="#"><i class="uil uil-facebook-f before:content-['\eae2'] !text-white text-[1rem]"></i></a>
                    <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                       href="#"><i class="uil uil-dribbble before:content-['\eaa2'] !text-white text-[1rem]"></i></a> <a
                        class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                        href="#"><i class="uil uil-instagram before:content-['\eb9c'] !text-white text-[1rem]"></i></a>
                    <a class="!text-[#cacaca] text-[1rem] transition-all duration-[0.2s] ease-in-out translate-y-0 motion-reduce:transition-none hover:translate-y-[-0.15rem] m-[0_.7rem_0_0]"
                       href="#"><i class="uil uil-youtube before:content-['\edb5'] !text-white text-[1rem]"></i></a>
                </nav> <!-- /.social --> </div> <!-- /.widget --> </div> <!-- /.offcanvas-body --> </div>
</header>
