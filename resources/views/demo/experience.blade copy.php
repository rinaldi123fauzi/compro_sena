<x-layout>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <style>
        .map {
            padding-left: 50px;
            padding-right: 50px;
        }

        .icon1 {
            /* padding-top: 10px; */
        }

        .icon-double-large {
            width: 40px !important;
        }
    </style>
    <section class="map bg-white">
        <div>
            <div class="row justify-content-center mb-4">
                <div class="col-xl-8 col-lg-10 text-center">
                    <h3 class="text-dark-gray fw-600 ls-minus-1px"
                        data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        Current Projects
                    </h3>
                    <p>
                        All of our accomplishments throughout SENA’s journey are a tangible manifestation of our various
                        innovations to continuously improve and grow sustainably

                    </p>
                </div>
            </div>
            <div id="map" style="width: 100%; height: 650px"></div>
        </div>
        <div class="icon1">
            <div class="row">
                <div class="col-12 col-lg-4 md-mb-15px">
                    <div
                        class="feature-box feature-box-left-icon-middle text-start  border-radius-8px p-9 overflow-hidden last-paragraph-no-margin">
                        <div class="feature-box-icon">
                            <img class="icon-double-large" src="{{ URL::asset('assets') }}/image/iconmap/loc1.png">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fs-15 text-black fw-500 mb-5px">UPSTREAM</span>

                        </div>
                        {{-- <div class="feature-box-overlay bg-cornflower-blue"></div> --}}
                    </div>
                </div>
                <div class="col-12 col-lg-4 md-mb-15px">
                    <div
                        class="feature-box feature-box-left-icon-middle text-start  border-radius-8px p-9 overflow-hidden last-paragraph-no-margin">
                        <div class="feature-box-icon">
                            <img class="icon-double-large" src="{{ URL::asset('assets') }}/image/iconmap/loc2.png">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fs-15 text-black fw-500 mb-5px">REFINERY/ PETROCHEMICAL</span>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 md-mb-15px">
                    <div
                        class="feature-box feature-box-left-icon-middle text-start  border-radius-8px p-9 overflow-hidden last-paragraph-no-margin">
                        <div class="feature-box-icon">
                            <img class="icon-double-large" src="{{ URL::asset('assets') }}/image/iconmap/loc3.png">
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block fs-15 text-black fw-500 mb-5px">DOWNSTREAM
                                Experience</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="overflow-hidden pt-0">
        <div class="container-fluid p-0">
            <div class="row g-0 bg-very-light-gray">
                <div class="col-xl-3 col-lg-4 col-md-5 tab-style-07 d-flex align-items-start align-items-xl-center">
                    <ul class="nav nav-tabs justify-content-center border-0 text-left fs-22 md-fs-19 fw-500">
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#tab_seven1" class="nav-link active">
                                <span><span class="me-10px fs-18 fw-500">01</span>UPSTREAM</span>
                                <span
                                    class="number-box d-flex justify-content-center align-items-center rounded-circle h-70px w-70px bg-tussock-yellow text-white"><i
                                        class="bi bi-arrow-right icon-extra-medium"></i></span>
                                <span class="bg-hover bg-tussock-yellow"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab_seven2">
                                <span><span class="me-10px fs-18 fw-500">02</span>REFINERY/ PETROCHEMICAL</span>
                                <span
                                    class="number-box d-flex justify-content-center align-items-center rounded-circle h-70px w-70px bg-tussock-yellow text-white"><i
                                        class="bi bi-arrow-right icon-extra-medium"></i></span>
                                <span class="bg-hover bg-tussock-yellow"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab_seven3">
                                <span><span class="me-10px fs-18 fw-500">03</span>DOWNSTREAM
                                    Experience</span>
                                <span
                                    class="number-box d-flex justify-content-center align-items-center rounded-circle h-70px w-70px bg-tussock-yellow text-white"><i
                                        class="bi bi-arrow-right icon-extra-medium"></i></span>
                                <span class="bg-hover bg-tussock-yellow"></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <style>
                    .list {
                        padding-left: 60px;
                        padding-top: 15px;
                        padding-bottom: 15px;
                    }

                    .col2 {
                        padding-top: 60px;
                    }

                    .scroll {
                        height: 700px;
                        overflow: auto;
                        overflow-x: hidden;
                    }

                    .col2sectext {
                        padding-bottom: 30px;
                    }
                </style>

                <div class="col-xl-9 col-lg-8 col-md-7">
                    <div class="tab-content h-100">
                        <!-- start tab content -->
                        <div class="tab-pane fade in active show h-100" id="tab_seven1">
                            <div class="row g-0 h-100 lg-h-auto">
                                <div class="col-xl-4 col2 scroll">

                                    <div class="row list">
                                        <div class="border-bottom border-color-extra-medium-gray g-0 col2sectext">
                                            <span class="fw-700 text-dark-gray">PT Pertamina Hulu Rokan</span><br>
                                            <span class="fw-500 text-dark-gray">2023 - 2026</span>
                                        </div>
                                    </div>
                                    <div class="row list">
                                        <div
                                            class="col-12 border-bottom border-color-extra-medium-gray g-0 col2sectext">
                                            <span class="fw-700 text-dark-gray">PT Pertamina Hulu Rokan</span><br>
                                            <span class="fw-500 text-dark-gray">2022 - 2024</span>
                                        </div>
                                    </div>
                                    <div class="row list">
                                        <div
                                            class="col-12 border-bottom border-color-extra-medium-gray g-0 col2sectext">
                                            <span class="fw-700 text-dark-gray">PT PHE ONWJ</span><br>
                                            <span class="fw-500 text-dark-gray">2023- 2025</span>
                                        </div>
                                    </div>
                                    <div class="row list">
                                        <div
                                            class="col-12 border-bottom border-color-extra-medium-gray g-0 col2sectext">
                                            <span class="fw-700 text-dark-gray">PT SAIPEM INDONESIA</span><br>
                                            <span class="fw-500 text-dark-gray">2024 - 2026</span>
                                        </div>
                                    </div>
                                    <div class="row list">
                                        <div
                                            class="col-12 border-bottom border-color-extra-medium-gray g-0 col2sectext">
                                            <span class="fw-700 text-dark-gray">Repsol Sakakemang B.V</span><br>
                                            <span class="fw-500 text-dark-gray">2022 - 2023</span>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-xl-8 bg-very-light-gray pt-6 pb-6 ps-8 pe-8">
                                    <div
                                        class="d-flex align-items-xl-start align-items-center text-center text-xl-start flex-column justify-content-center h-100">
                                        <img src="{{ URL::asset('assets') }}/image/downstream/downstream.jpg"
                                            style="width:100%;">
                                        <span class="text-tussock-yellow fw-500 text-uppercase">Upstream</span>
                                        <h4 class="text-dark-gray mb-15px fw-700">Jasa Pendukung Manajemen Proyek & Jasa
                                            Pendukung Manajemen Proyek Lapangan</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae
                                            quos sint iure. Dolore voluptatibus neque laudantium hic, commodi recusandae
                                            harum porro maiores voluptate, facilis modi laboriosam unde, ullam esse.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in h-100" id="tab_seven2">
                            <div class="row g-0 h-100 lg-h-auto">
                                <div class="col-xl-4 col2 scroll">

                                    <div class="row list">
                                        <div class="border-bottom border-color-extra-medium-gray g-0 col2sectext">
                                            <span class="fw-700 text-dark-gray">PT Kilang Pertamina
                                                International.</span><br>
                                            <span class="fw-500 text-dark-gray">2023 - 2025</span>
                                        </div>
                                    </div>
                                    <div class="row list">
                                        <div
                                            class="col-12 border-bottom border-color-extra-medium-gray g-0 col2sectext">
                                            <span class="fw-700 text-dark-gray">PT Kilang Pertamina
                                                Balikpapan</span><br>
                                            <span class="fw-500 text-dark-gray">2023</span>
                                        </div>
                                    </div>
                                    <div class="row list">
                                        <div
                                            class="col-12 border-bottom border-color-extra-medium-gray g-0 col2sectext">
                                            <span class="fw-700 text-dark-gray">PT Kilang Pertamina
                                                International</span><br>
                                            <span class="fw-500 text-dark-gray">2024</span>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-xl-8 bg-very-light-gray pt-6 pb-6 ps-8 pe-8">
                                    <div
                                        class="d-flex align-items-xl-start align-items-center text-center text-xl-start flex-column justify-content-center h-100">
                                        <img src="{{ URL::asset('assets') }}/image/downstream/refinery.jpg"
                                            style="width:100%;">
                                        <span class="text-tussock-yellow fw-500 text-uppercase">Upstream</span>
                                        <h4 class="text-dark-gray mb-15px fw-700">Jasa Quality Assurance dan Quality
                                            Control Proyek RDMP RU V Balikpapan & Lawe-Lawe.</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae
                                            quos sint iure. Dolore voluptatibus neque laudantium hic, commodi recusandae
                                            harum porro maiores voluptate, facilis modi laboriosam unde, ullam esse.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in h-100" id="tab_seven3">
                            <div class="row g-0 h-100 lg-h-auto">
                                <div class="col-xl-4 col2 scroll">

                                    <div class="row list">
                                        <div class="border-bottom border-color-extra-medium-gray g-0 col2sectext">
                                            <span class="fw-700 text-dark-gray">PT. Pertamina Patra Niaga</span><br>
                                            <span class="fw-500 text-dark-gray">2024</span>
                                        </div>
                                    </div>
                                    <div class="row list">
                                        <div
                                            class="col-12 border-bottom border-color-extra-medium-gray g-0 col2sectext">
                                            <span class="fw-700 text-dark-gray">PT. Pertamina Patra Niaga </span><br>
                                            <span class="fw-500 text-dark-gray">2024</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 bg-very-light-gray pt-6 pb-6 ps-8 pe-8">
                                    <div
                                        class="d-flex align-items-xl-start align-items-center text-center text-xl-start flex-column justify-content-center h-100">
                                        <img src="{{ URL::asset('assets') }}/image/downstream/upstream.jpg"
                                            style="width:100%;">
                                        <span class="text-tussock-yellow fw-500 text-uppercase">Upstream</span>
                                        <h4 class="text-dark-gray mb-15px fw-700">ITTJ Jakarta</h4>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur beatae
                                            quos sint iure. Dolore voluptatibus neque laudantium hic, commodi recusandae
                                            harum porro maiores voluptate, facilis modi laboriosam unde, ullam esse.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
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
                    data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 6000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "reverseDirection":true, "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 6 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
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
                    data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 6000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": {  "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 6 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 } }, "effect": "slide" }'>
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



    {{-- <section class="big-section bg-solitude-blue">
        <div class="container">
            <div class="row mb-10 align-items-center">
                <div class="col-lg-5 position-relative md-mb-20">
                    <div class="w-70 xs-w-80" data-animation-delay="50" data-shadow-animation="true">
                        <img src="{{ URL::asset('assets') }}/images/tentangsenahome2.jpg" alt=""
                            class="border-radius-8px w-100">
                    </div>
                    <div class="w-60 overflow-hidden position-absolute right-minus-15px xs-right-15px xs-w-60 bottom-minus-50px"
                        data-shadow-animation="true" data-animation-delay="250"
                        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src="{{ URL::asset('assets') }}/images/tentangsenahome.jpg" alt=""
                            class="border-radius-8px w-100 box-shadow-quadruple-large" />
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-lg-1"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>

                    <h3 class="text-dark-gray fs-50 fw-700 ls-minus-2px">Reliable Equipment and Software</h3>

                    <div class="accordion accordion-style-02" id="accordion-style-02"
                        data-active-icon="icon-feather-chevron-up" data-inactive-icon="icon-feather-chevron-down"
                        data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <!-- start accordion item -->
                        <div class="accordion-item active-accordion">
                            <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-01"
                                    aria-expanded="true" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                        <i class="feather icon-feather-chevron-up icon-extra-medium"></i><span
                                            class="fw-600 fs-18">Equipment</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-01" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion-style-02">
                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                    <p>Holiday Detector | Permanen Magnet Yoke | Gauge Wet & Dry Film Thickness |
                                        Infrared Thermography Flir T860 | Test Bench 4500 Psig
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="accordion-item">
                            <div class="accordion-header border-bottom border-color-extra-medium-gray">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-02-02"
                                    aria-expanded="false" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                        <i class="feather icon-feather-chevron-down icon-extra-medium"></i><span
                                            class="fw-600 fs-18">Software</span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-02-02" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-style-02">
                                <div
                                    class="accordion-body last-paragraph-no-margin border-bottom border-color-light-medium-gray">
                                    <p>HYSYS | PV Elite | STAAD Pro | Unisim | PHAST | Instrucalc | AutoCAD | CAESAR II
                                        | ETAP | Arc Gis</p>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->

                        <!-- end accordion item -->
                        <!-- start accordion item -->

                        <!-- end accordion item -->
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</x-layout>
