<x-layoutsatu>

    <style>
        .layanandesc {
            font-size: 16px;
            line-height: 20px;
            color: #fff !important;
        }
    </style>

    <section class="section-dark p-0 bg-dark-gray">
        <div class="swiper lg-no-parallax full-screen md-h-600px sm-h-500px ipad-top-space-margin swiper-light-pagination"
            data-slider-options='{ "slidesPerView": 1, "loop": true, "parallax": true, "speed": 1000, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide overflow-hidden">
                    <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500"
                        style="background-image: url('{{ URL::asset('assets') }}/image/slider/slider-survey.jpg')">
                        <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                        <div class="container h-100" data-swiper-parallax="-500">
                            <div class="row align-items-center h-100">
                                <div class="col-xl-7 col-lg-8 col-md-10 position-relative text-white text-center text-md-start"
                                    data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <div>
                                        <span class="fs-20 opacity-6 mb-25px sm-mb-15px d-inline-block fw-300">Best
                                            Solutions for Your Business
                                        </span>
                                    </div>
                                    <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px">
                                        From
                                        Strategy To Implement
                                    </h1>
                                    <a href="index.html" target="_blank"
                                        class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Our
                                        Bussiness<span class="bg-white text-base-color"><i
                                                class="fas fa-arrow-right"></i></span></a>
                                </div>
                            </div>
                            {{--  <div class="position-absolute bottom-minus-45px"
                                data-anime='{ "translateY": [150, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <span
                                    class="alt-font number text-base-color opacity-3 fs-190 fw-600 ls-minus-5px">01</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide overflow-hidden">
                    <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500"
                        style="background-image: url('{{ URL::asset('assets') }}/image/slider/slider-engineering.jpg')">
                        <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                        <div class="container h-100" data-swiper-parallax="-500">
                            <div class="row align-items-center h-100">
                                <div class="col-xl-7 col-lg-8 col-md-10 position-relative text-white text-center text-md-start"
                                    data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <div>
                                        <span class="fs-20 opacity-6 mb-25px sm-mb-15px d-inline-block fw-300">Best
                                            Solutions for Your Business
                                        </span>
                                    </div>
                                    <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px">
                                        From
                                        Strategy To Implement
                                    </h1>
                                    <a href="index.html" target="_blank"
                                        class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Our
                                        Bussiness<span class="bg-white text-base-color"><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                                {{-- <div class="position-absolute bottom-minus-45px"
                                    data-anime='{ "translateY": [150, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <span
                                        class="alt-font number text-base-color opacity-3 fs-190 fw-600 ls-minus-5px">02</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide overflow-hidden">
                    <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500"
                        style="background-image: url('{{ URL::asset('assets') }}/image/slider/slider-konsultan.jpg')">
                        <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                        <div class="container h-100" data-swiper-parallax="-500">
                            <div class="row align-items-center h-100">
                                <div class="col-xl-7 col-lg-8 col-md-10 position-relative text-white text-center text-md-start"
                                    data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <div>
                                        <span class="fs-20 opacity-6 mb-25px sm-mb-15px d-inline-block fw-300">
                                            Best Solutions for Your Business
                                        </span>
                                    </div>
                                    <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px">
                                        {{-- From Strategy
                                        <span class="fw-600">to Implementation.</span> --}}
                                        From Strategy to Implementation.
                                        Our Business
                                    </h1>
                                    <a href="index.html" target="_blank"
                                        class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Our
                                        Bussiness<span class="bg-white text-base-color"><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                                {{-- <div class="position-absolute bottom-minus-45px"
                                    data-anime='{ "translateY": [150, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <span
                                        class="alt-font number text-base-color opacity-3 fs-190 fw-600 ls-minus-5px">03</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>


                <div class="swiper-slide overflow-hidden">
                    <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500"
                        style="background-image: url('{{ URL::asset('assets') }}/image/slider/slider-inspeksi.jpg')">
                        <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                        <div class="container h-100" data-swiper-parallax="-500">
                            <div class="row align-items-center h-100">
                                <div class="col-xl-7 col-lg-8 col-md-10 position-relative text-white text-center text-md-start"
                                    data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <div>
                                        <span class="fs-20 opacity-6 mb-25px sm-mb-15px d-inline-block fw-300">Best
                                            Solutions for Your Business
                                        </span>
                                    </div>
                                    <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px">
                                        {{-- From Strategy
                                        <span class="fw-600">to Implementation.</span> --}}
                                        From Strategy to Implementation.
                                        Our Business
                                    </h1>
                                    <a href="index.html" target="_blank"
                                        class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Our
                                        Bussiness<span class="bg-white text-base-color"><i
                                                class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                                {{-- <div class="position-absolute bottom-minus-45px"
                                    data-anime='{ "translateY": [150, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    <span
                                        class="alt-font number text-base-color opacity-3 fs-190 fw-600 ls-minus-5px">03</span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            </div>
            <!-- start slider pagination -->
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
            <!-- end slider pagination -->
            <!-- start slider navigation -->
            <!--<div class="slider-one-slide-prev-1 icon-extra-large text-white swiper-button-prev slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutLeft"></i></div>
                    <div class="slider-one-slide-next-1 icon-extra-large text-white swiper-button-next slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutRight"></i></div>-->
            <!-- end slider navigation -->
        </div>
    </section>

    {{-- Section 2 --}}
    {{-- <section class="border-bottom border-color-extra-medium-gray pt-40px pb-40px overflow-hidden">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center align-items-center"
                data-anime='{ "el": "childs", "translateX": [-15, 0], "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-08 md-mb-30px text-center text-sm-start">
                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                        <div class="feature-box-icon me-10px">
                            <i class="bi bi-shield-check icon-very-medium text-base-color"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="alt-font fw-500 text-dark-gray d-block lh-26">World-class services</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-08 md-mb-30px text-center text-sm-start">
                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                        <div class="feature-box-icon me-10px">
                            <i class="bi bi-hourglass icon-very-medium text-base-color"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="alt-font fw-500 text-dark-gray d-block lh-26">Experienced</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-08 xs-mb-30px text-center text-sm-start">
                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                        <div class="feature-box-icon me-10px">
                            <i class="bi bi-award icon-very-medium text-base-color"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="alt-font fw-500 text-dark-gray d-block lh-26">Certified</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-08 text-center text-sm-start">
                    <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                        <div class="feature-box-icon me-10px">
                            <i class="bi bi-briefcase icon-very-medium text-base-color"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="alt-font fw-500 text-dark-gray d-block lh-26">Grow your business</span>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section> --}}


    <section class="pb-8 md-pb-17 xs-pb-28">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-xl-5 col-lg-6 col-md-9 text-center text-lg-start">
                    <div
                        class="col-12 position-relative overflow-hidden border-radius-6px h-500px lg-h-550px md-h-400px d-flex align-items-center justify-content-center">
                        <video class="video-bg html-video border-radius-6px video-play-icon"
                            poster="{{ URL::asset('assets') }}/image/slider/slider-konsultan.jpg">
                            <source type="video/mp4" src="{{ URL::asset('assets') }}/image/cpsena.mp4" />
                            <source type="video/webm" src="{{ URL::asset('assets') }}/image/cpsena.mp4" />
                        </video>
                        <a href="javascript:void(0);"
                            class="html-video-play video-icon-box video-icon-extra-large position-relative">
                            <span>
                                <span class="video-icon bg-white">
                                    <i class="play-icon feather icon-feather-play text-dark-gray ms-0"
                                        aria-hidden="true"></i>
                                    <i class="pause-icon feather icon-feather-pause text-dark-gray ms-0"
                                        aria-hidden="true"></i>
                                    <span class="video-icon-sonar">
                                        <span class="video-icon-sonar-bfr bg-white opacity-7"></span>
                                    </span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>


                <div class="col-xl-6 col-lg-6 offset-xl-1 position-relative"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">About
                        business</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-20px sm-w-85 xs-w-100 mx-auto">
                        PT Solusi Energy Nusantara (SENA)
                    </h3>
                    <p>
                        Penyedia layanan engineering end to end
                        mulai dari conceptual study hingga
                        commissioning di sektor Oil & Gas
                        mulai dari upstream, downstream, Refinery & Petrochemical
                        serta telah berpengalaman menyelesaikan 400+ proyek
                        dalam berbagai skala sejak tahun 2015
                    </p>

                    {{-- <a href="{{ route('demo.aboutus') }}" target="_blank"
                        class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Selengkapnya<span
                            class="bg-white text-base-color"><i class="fa-solid fa-arrow-right"></i></span></a> --}}
                </div>

            </div>

            <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 justify-content-center text-center"
                data-anime='{"el": "childs", "opacity": [0,1], "translateX": [50, 0], "duration": 800, "delay":300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col last-paragraph-no-margin sm-mb-40px">
                    <h2 class="alt-font fw-900 text-dark-gray m-0 counter-number counter" data-speed="2000"
                        data-to="2015" data-text="+"></h2>

                    <p>Establishment</p>
                </div>
                <div class="col last-paragraph-no-margin sm-mb-40px">
                    {{-- <h2 class="alt-font fw-900 text-dark-gray m-0">800+</h2> --}}
                    <h2 class="alt-font fw-900 text-dark-gray m-0 counter-number counter" data-speed="2000"
                        data-to="800"></h2>
                    <p>Employees</p>
                </div>
                <div class="col last-paragraph-no-margin xs-mb-40px">
                    <h2 class="alt-font fw-900 text-dark-gray m-0 counter-number counter" data-speed="2000"
                        data-to="400" data-text="+">+</h2>
                    <p>Project</p>
                </div>
                <div class="col last-paragraph-no-margin">
                    {{-- <h2 class="alt-font fw-900 text-dark-gray m-0">6 Mio+</h2> --}}
                    <h2 class="alt-font fw-900 text-dark-gray m-0 counter-number counter" data-speed="2000"
                        data-to="6" data-text="Mio">Mio</h2>
                    <p>Safe Man Hours</p>
                </div>
            </div>
        </div>
    </section>


    <section
        class="bg-gradient-very-light-gray ps-7 pe-7 xxl-ps-3 xxl-pe-3 xs-px-0 cover-background background-position-center-top"
        style="background-color:#f0f4fd;">
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-lg-7 col-md-8 text-center"
                    data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    {{-- <span
                        class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Innovative
                        solutions</span> --}}
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">Our Capabilities</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 position-relative"
                    data-anime='{ "translateX": [150, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class=" sm-outside-box-right-0">
                        <div class="swiper"
                            data-slider-options='{ "spaceBetween": 35, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 3 }, "320": { "slidesPerView": 1 } }}'>
                            <div class="swiper-wrapper">
                                <!-- start content carousal item -->
                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-06">
                                        <div class="interactive-banners-image">
                                            <img src="{{ URL::asset('assets') }}/image/layanan/layanan-home-survey.jpg"
                                                alt="" />
                                            <div class="overlay-bg bg-gradient-black-bottom-transparent opacity-light">
                                            </div>

                                        </div>
                                        <div class="interactive-banners-content p-60px lg-p-30px">
                                            <div class="h-100 w-100 last-paragraph-no-margin">
                                                <a href="#"
                                                    class="fs-22 d-block text-white mb-10px fw-500">Survey</a>
                                                <p class="layanandesc interactive-banners-content-text w-95 lg-w-100">
                                                    Perseroan
                                                    memiliki keahlian dalam bidang survei.</p>
                                            </div>
                                        </div>
                                        <div class="box-overlay bg-gradient-dark-transparent"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-06">
                                        <div class="interactive-banners-image">
                                            <img src="{{ URL::asset('assets') }}/image/layanan/layanan-home-engineering.jpg"
                                                alt="" />
                                            <div class="overlay-bg bg-gradient-black-bottom-transparent opacity-light">
                                            </div>

                                        </div>
                                        <div class="interactive-banners-content p-60px lg-p-30px">
                                            <div class="h-100 w-100 last-paragraph-no-margin">
                                                <a href="#"
                                                    class="fs-22 d-block text-white mb-10px fw-500">Engineering</a>
                                                <p class="layanandesc interactive-banners-content-text w-95 lg-w-100">
                                                    Perseroan
                                                    memiliki keahlian menyusun dokumen engineering design</p>
                                            </div>
                                        </div>
                                        <div class="box-overlay bg-gradient-dark-transparent"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-06">
                                        <div class="interactive-banners-image">
                                            <img src="{{ URL::asset('assets') }}/image/layanan/layanan-home-consultasi.jpg"
                                                alt="" />
                                            <div class="overlay-bg bg-gradient-black-bottom-transparent opacity-light">
                                            </div>

                                        </div>
                                        <div class="interactive-banners-content p-60px lg-p-30px">
                                            <div class="h-100 w-100 last-paragraph-no-margin">
                                                <a href="#"
                                                    class="fs-22 d-block text-white mb-10px fw-500">Consultant</a>
                                                <p class="layanandesc interactive-banners-content-text w-95 lg-w-100">
                                                    Dalam
                                                    pengelolaan proyek, Perseroan mampu memprediksi kontrak</p>
                                            </div>
                                        </div>
                                        <div class="box-overlay bg-gradient-dark-transparent"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-06">
                                        <div class="interactive-banners-image">
                                            <img src="{{ URL::asset('assets') }}/image/layanan/layanan-home-inspeksi.jpg"
                                                alt="" />
                                            <div class="overlay-bg bg-gradient-black-bottom-transparent opacity-light">
                                            </div>

                                        </div>
                                        <div class="interactive-banners-content p-60px lg-p-30px">
                                            <div class="h-100 w-100 last-paragraph-no-margin">
                                                <a href="#"
                                                    class="fs-22 d-block text-white mb-10px fw-500">Inspection</a>
                                                <p class="layanandesc interactive-banners-content-text w-95 lg-w-100">
                                                    Perseroan
                                                    memiliki keahlian dalam inspeksi dan pengujian teknis</p>
                                            </div>
                                        </div>
                                        <div class="box-overlay bg-gradient-dark-transparent"></div>
                                    </div>
                                </div>




                                <!-- end content carousal item -->

                            </div>
                        </div>
                    </div>
                    <!-- start slider pagination -->
                    <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                    <!-- end slider pagination -->
                </div>
            </div>
        </div>
    </section>








    {{-- <section class="bg-very-light-gray">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-xl-7 col-lg-9 col-md-10 text-center">
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px"
                        data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        Mengapa Kami
                    </h3>
                    <p>
                        Tim engineering kami akan memandu klien kami dalam setiap tahap
                        proyek sehingga menghasilkan produk yang berkualitas
                    </p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-07 transition-inner-all sm-mb-30px">
                    <div
                        class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                    src="{{ URL::asset('assets') }}/image/deal.png" class="h-95px"
                                    alt="" /></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Aliansi
                                Internasional
                            </a>
                            <p class="mb-30px">
                                Kemitraan yang baik menunjukkan hasil karya kami. Aliansi yang
                                kuat dengan sebagian besar perusahaan engineering ternama di
                                dunia.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->

                <!-- start features box item -->
                <div class="col icon-with-text-style-07 transition-inner-all sm-mb-30px">
                    <div
                        class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                    src="{{ URL::asset('assets') }}/image/worker.png" class="h-95px"
                                    alt="" /></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Engineer
                                Berpengalaman</a>
                            <p class="mb-30px">
                                Tim Engineer kami telah melalui pelatihan berkelanjutan dan
                                sertifikasi yang komprehensif untuk menjaga standar kualitas
                                tertinggi.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->

                <!-- start features box item -->
                <div class="col icon-with-text-style-07 transition-inner-all md-mb-30px">
                    <div
                        class="bg-white h-100 justify-content-end box-shadow-quadruple-large-hover feature-box flex-column-reverse p-15 md-p-13 border-radius-8px">
                        <div class="feature-box-icon">
                            <a href="demo-accounting-services-details.html"><img
                                    src="{{ URL::asset('assets') }}/image/portfolio.png" class="h-95px"
                                    alt="" /></a>
                        </div>
                        <div class="feature-box-content">
                            <a href="demo-accounting-services-details.html"
                                class="d-inline-block fw-600 text-dark-gray mb-5px fs-20 ls-minus-05px">Portofolio
                                Nasional</a>
                            <p class="mb-30px">
                                Kami membangun reputasi yang baik dengan menyediakan layanan
                                engineering dan bantuan teknis untuk klien kami di seluruh
                                dunia.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
        </div>
    </section> --}}




    {{-- <section class="overflow-hidden big-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 lg-mb-45px xs-mb-30px text-sm-start text-center">
                    <span class="fs-70 xs-fs-50 fw-700 text-dark-gray mb-0 ls-minus-2px">Hear from clients.</span>
                </div>
                <div class="col-xl-8">
                    <div class="outside-box-right-45 sm-outside-box-right-0">
                        <div class="swiper magic-cursor"
                            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 60, "loop": true, "parallax": true, "speed": 1200, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true, "dynamicBullets": false }, "navigation": { "nextEl": ".slider-one-slide-next-2", "prevEl": ".slider-one-slide-prev-2" }, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper testimonials-style-13">
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Herman miller</span>
                                    <p class="fs-22 lh-36 text-dark-gray">From the day one, Themezaa has delivered all
                                        possible outcomes as demanded. I must say that all the developers are dedicated.
                                    </p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Shoko mugikura</span>
                                    <p class="fs-22 lh-36 text-dark-gray">Theme is beautiful, although it takes some
                                        time to figure out where to edit what. But support is very quick and helpful
                                        theme.</p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Matthew taylor</span>
                                    <p class="fs-22 lh-36 text-dark-gray">They are very good with communication,
                                        addressing the need and attentively making sure the customer is fully supported.
                                    </p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Leonel mooney</span>
                                    <p class="fs-22 lh-36 text-dark-gray">What an awesome theme and support team is
                                        very kind. Every element is designed pixel perfect, so it is really a modern
                                        theme.</p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Herman miller</span>
                                    <p class="fs-22 lh-36 text-dark-gray">From the day one, Themezaa has delivered all
                                        possible outcomes as demanded. I must say that all the developers are dedicated.
                                    </p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Shoko mugikura</span>
                                    <p class="fs-22 lh-36 text-dark-gray">Theme is beautiful, although it takes some
                                        time to figure out where to edit what. But support is very quick and helpful
                                        theme.</p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Matthew taylor</span>
                                    <p class="fs-22 lh-36 text-dark-gray">They are very good with communication,
                                        addressing the need and attentively making sure the customer is fully supported.
                                    </p>
                                </div>
                                <!-- end review item -->
                                <!-- start review item -->
                                <div class="swiper-slide text-sm-start text-center last-paragraph-no-margin"
                                    data-swiper-parallax="700">
                                    <span class="fs-15 fw-800 text-dark-gray text-uppercase mb-10px d-block ls-1px">@
                                        Leonel mooney</span>
                                    <p class="fs-22 lh-36 text-dark-gray">What an awesome theme and support team is
                                        very kind. Every element is designed pixel perfect, so it is really a modern
                                        theme.</p>
                                </div>
                                <!-- end review item -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div
                                class="separator-line-5px w-100 bg-extra-medium-gray mt-45px mb-45px xs-mt-30px xs-mb-30px">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-4 xs-mb-30px">
                            <div class="d-flex justify-content-center justify-content-sm-start">
                                <!-- start slider navigation -->
                                <div class="slider-one-slide-prev-2 text-black swiper-button-prev slider-navigation-style-04 bg-yellow h-65px w-65px"
                                    tabindex="0" role="button" aria-label="Previous slide"><i
                                        class="fa-solid fa-arrow-left"></i></div>
                                <div class="slider-one-slide-next-2 text-black swiper-button-next slider-navigation-style-04 bg-yellow h-65px w-65px"
                                    tabindex="0" role="button" aria-label="Next slide"><i
                                        class="fa-solid fa-arrow-right"></i></div>
                                <!-- end slider navigation -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row position-relative clients-style-08"
                data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col swiper text-center feather-shadow"
                    data-slider-options='{ "slidesPerView": 2, "spaceBetween":100, "speed": 6000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 6 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">

                        <div class="swiper-slide">
                            <a href="#"><img
                                    src="https://pt-sena.co.id/images/client/16_logo_logo_client-07.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="https://pt-sena.co.id/images/client/6_logo_logo_client-03.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="https://pt-sena.co.id/images/client/7_logo_Picture2.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img src="https://pt-sena.co.id/images/client/5_logo_logo_client-04.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img
                                    src="https://pt-sena.co.id/images/client/18_logo_logo_client-05.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img
                                    src="https://pt-sena.co.id/images/client/17_logo_logo_client-06.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#"><img
                                    src="https://pt-sena.co.id/images/client/16_logo_logo_client-07.png"
                                    class="h-150px xs-h-30px" alt="" /></a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section> --}}




    <section class="overflow-hidden bg-very-light-gray position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-10 text-center">
                    <span
                        class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px"
                        data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Latest
                        news</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px"
                        data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        Tetap Update dangan Berita Terbaru Kami
                    </h3>
                </div>
            </div>
            <div class="row justify-content-center mb-2">
                <div class="col-xl-2 col-lg-3 d-flex justify-content-center">
                    <!-- start slider navigation -->
                    <div
                        class="slider-one-slide-prev-1 icon-small text-dark-gray swiper-button-prev slider-navigation-style-04 bg-white box-shadow-large">
                        <i class="fa-solid fa-arrow-left"></i>
                    </div>
                    <div
                        class="slider-one-slide-next-1 icon-small text-dark-gray swiper-button-next slider-navigation-style-04 bg-white box-shadow-large">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <!-- end slider navigation -->
                </div>
            </div>
            <div class="row align-items-center"
                data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-12">
                    <div class="">
                        <div class="swiper"
                            data-slider-options='{ "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" },   "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start slider item -->
                                <div class="swiper-slide">
                                    <!-- start services box style -->
                                    <div
                                        class="services-box-style-03 last-paragraph-no-margin border-radius-15px overflow-hidden">
                                        <div class="position-relative">
                                            <a href="#"><img
                                                    src="{{ URL::asset('assets') }}/image/news/BuildingSynergy.jpg"
                                                    alt="" /></a>

                                        </div>
                                        <div class="bg-white">
                                            <div class="ps-20px pe-20px pt-30px pb-30px text-center">
                                                <a href="#"
                                                    class="d-inline-block fs-18 fw-600 text-dark-gray mb-5px">KEGIATAN
                                                    BUILDING SYNERGY IN PERTAMINA</a>
                                                <p>
                                                    Pada 24 Januari 2023, PT. Solusi Energy Nusantara
                                                    mengadakan kegiatan Building Synergy in Pertamina &
                                                    Strategic Workshop Alignment ...
                                                </p>
                                            </div>
                                            <div
                                                class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                                <a href="#"
                                                    class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                                    <span>
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end services box style -->
                                </div>
                                <!-- end slider item -->
                                <div class="swiper-slide">
                                    <!-- start services box style -->
                                    <div
                                        class="services-box-style-03 last-paragraph-no-margin border-radius-15px overflow-hidden">
                                        <div class="position-relative">
                                            <a href="#"><img
                                                    src="{{ URL::asset('assets') }}/image/news/K3Nasional.jpg"
                                                    alt="" /></a>

                                        </div>
                                        <div class="bg-white">
                                            <div class="ps-20px pe-20px pt-30px pb-30px text-center">
                                                <a href="#"
                                                    class="d-inline-block fs-18 fw-600 text-dark-gray mb-5px">RANGKAIAN
                                                    KEGIATAN BULAN K3 NASIONAL</a>
                                                <p>
                                                    Pada Februari 2023, PT. Solusi Energy Nusantara
                                                    melaksanakan rangkaian kegiatan Bulan K3 Nasional dan
                                                    dihadiri oleh pekerja ...
                                                </p>
                                            </div>
                                            <div
                                                class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                                <a href="#"
                                                    class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                                    <span>
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end services box style -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- start services box style -->
                                    <div
                                        class="services-box-style-03 last-paragraph-no-margin border-radius-15px overflow-hidden">
                                        <div class="position-relative">
                                            <a href="#"><img
                                                    src="{{ URL::asset('assets') }}/image/news/RapatUmum.jpg"
                                                    alt="" /></a>

                                        </div>
                                        <div class="bg-white">
                                            <div class="ps-20px pe-20px pt-30px pb-30px text-center">
                                                <a href="#"
                                                    class="d-inline-block fs-18 fw-600 text-dark-gray mb-5px">KEGIATAN
                                                    RAPAT UMUM PEMEGANG SAHAM TAHUNAN</a>
                                                <p>
                                                    Pada tanggal 24 Mei 2023, PT. Solusi Energy Nusantara
                                                    melaksanakan kegiatan Rapat Umum Pemegang Saham Tahunan
                                                    (RUPS) ...
                                                </p>
                                            </div>
                                            <div
                                                class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                                <a href="#"
                                                    class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                                    <span>
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end services box style -->
                                </div>

                                <div class="swiper-slide">
                                    <!-- start services box style -->
                                    <div
                                        class="services-box-style-03 last-paragraph-no-margin border-radius-15px overflow-hidden">
                                        <div class="position-relative">
                                            <a href="#"><img
                                                    src="{{ URL::asset('assets') }}/image/news/Hadiri.jpg"
                                                    alt="" /></a>

                                        </div>
                                        <div class="bg-white">
                                            <div class="ps-20px pe-20px pt-30px pb-30px text-center"
                                                style="height: 256px;">
                                                <a href="#"
                                                    class="d-inline-block fs-18 fw-600 text-dark-gray mb-5px">EVENT
                                                    HADIRI SYNERGY SUMMIT 2023</a>
                                                <p>
                                                    Pada 7-13 September 2023, PT. Solusi Energy Nusantara
                                                    hadir dalam Synergy Summit 2023 dalam rangka
                                                    optimalisasi sinergi ...
                                                </p>
                                            </div>
                                            <div
                                                class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                                <a href="#"
                                                    class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                                    <span>
                                                        <span class="btn-text">Read More</span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                        <span class="btn-icon"><i
                                                                class="fa-solid fa-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end services box style -->
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>






    <section class="ps-13 pe-13 lg-ps-2 lg-pe-2 background-no-repeat background-position-center-top"
        style="background-image: url('https://craftohtml.themezaa.com/images/demo-it-business-testimonial-bg.png')">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center mb-3">
                <div class="col-md-12 text-center">
                    {{-- <h3 class="text-dark-gray fw-500 mb-0 ls-minus-2px shadow-none" data-shadow-animation="true"
                        data-animation-delay="700">Valuable <span
                            class="fw-700 text-highlight d-inline-block">customers<span
                                class="bg-red h-10px bottom-5px opacity-9 separator-animation"></span></span></h3> --}}
                </div>
            </div>



            <div class="row position-relative clients-style-08 mt-5"
                data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col swiper text-center feather-shadow"
                    data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed":3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "reverseDirection":true, "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 6 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/pertaminahulurokan.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img
                                    src="{{ URL::asset('assets') }}/images/kilangpertaminainternational.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/nusantararegas.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/tps.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/medco.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/pertaminahulurokan.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img
                                    src="{{ URL::asset('assets') }}/images/kilangpertaminainternational.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/nusantararegas.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row position-relative clients-style-08 mt-5"
                data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col swiper text-center feather-shadow"
                    data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": {  "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 6 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/sinarglobal.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/surveyor.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/rusindo.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/emrc.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/rohm.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/mandarin.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/sinarglobal.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/surveyor.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="{{ URL::asset('assets') }}/images/rusindo.png"
                                    class="h-70px xs-h-60px" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>



</x-layoutsatu>
