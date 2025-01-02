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

        .image-container {
            position: relative;
            margin-bottom: 30px;
        }

        .image-container img {
            display: block;
            width: 100%;
        }

        .image-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 1;
            /*  background: rgba(109, 183, 210, 0.4); */
            background: rgba(109, 183, 210, 1);
            border-radius: 17px;
        }

        .clicked-background::before {
            /* background: rgba(109, 183, 210, 1); */
            background: rgba(109, 183, 210, 0.4);
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 1;
            border-radius: 17px;
            /* Change background color on click */
        }

        .image-container .after {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            z-index: 999999;
        }

        .image-container:hover .after {
            /* display: block;
            background: rgba(109, 183, 210, 1); */
        }


        .groupdeskripsi {
            padding-left: 50px !important;
        }

        .deskripsi {
            margin-bottom: 0px
        }

        .tanggal {
            margin-bottom: 20px;
        }

        .list {
            margin-bottom: 20px;
        }

        .sectrefinery {
            display: none;
        }

        .hidden {
            display: none;
        }

        .show {
            display: block;
            /* Show the element when the 'show' class is added */
        }

        .sectdownstream {
            display: none;
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



    <section class="ps-13 pe-13 lg-ps-2 lg-pe-2  bg-gradient-very-light-gray">
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-4 col-lg-4 col-md-5">
                    <div class="image-container clicked-background" data-value="1"
                        onclick="changeBackground(this, '1')">
                        <img src="{{ URL::asset('assets') }}/image/experience/upstream.png" style="width:100%;">
                        <div class="after">UPSTREAM</div>
                    </div>

                    <div class="image-container" data-value="2" onclick="changeBackground(this, '2')">
                        <img src="{{ URL::asset('assets') }}/image/experience/refinery.png" style="width:100%;">
                        <div class="after">REFINERY</div>
                    </div>

                    <div class="image-container" data-value="3" onclick="changeBackground(this, '3')">
                        <img src="{{ URL::asset('assets') }}/image/experience/downstream.png" style="width:100%;">
                        <div class="after">DOWNSTREAM</div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-5 groupdeskripsi">
                    <div class="sectupstream" data-value="1">
                        <div class="row list">
                            <div class="col2sectext">
                                <span class="fw-700 text-dark-gray">PT Pertamina Hulu Rokan</span><br>
                                <p class="deskripsi">Jasa Pendukung Manajemen Proyek & Jasa Pendukung
                                    Manajemen
                                    Proyek
                                    Lapangan</p>
                                <span class="fw-500 text-dark-gray tanggal">2023 - 2026</span>
                            </div>
                        </div>

                        <div
                            class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mb-20px mt-20px">
                        </div>

                        <div class="row list">
                            <div class="col2sectext">
                                <span class="fw-700 text-dark-gray">PT Pertamina Hulu Rokan</span><br>
                                <p class="deskripsi">Jasa Pendukung Manajemen Proyek & Jasa Pendukung
                                    Manajemen
                                    Proyek
                                    Lapangan</p>
                                <span class="fw-500 text-dark-gray tanggal">2023 - 2026</span>
                            </div>
                        </div>
                        <div
                            class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mb-20px mt-20px">
                        </div>
                        <div class="row list">
                            <div class="col2sectext">
                                <span class="fw-700 text-dark-gray">PT Pertamina Hulu Rokan</span><br>
                                <p class="deskripsi">Jasa Pendukung Manajemen Proyek & Jasa Pendukung
                                    Manajemen
                                    Proyek
                                    Lapangan</p>
                                <span class="fw-500 text-dark-gray tanggal">2023 - 2026</span>
                            </div>
                        </div>
                    </div>

                    <div class="sectrefinery" data-value="2">
                        <div class="row list">
                            <div class="col2sectext">
                                <span class="fw-700 text-dark-gray">PT Pertamina Hulu Rokan</span><br>
                                <p class="deskripsi">Jasa Pendukung Manajemen Proyek & Jasa Pendukung
                                    Manajemen
                                    Proyek
                                    Lapangan</p>
                                <span class="fw-500 text-dark-gray tanggal">2023 - 2026</span>
                            </div>
                        </div>

                        <div
                            class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mb-20px mt-20px">
                        </div>

                        <div class="row list">
                            <div class="col2sectext">
                                <span class="fw-700 text-dark-gray">PT Pertamina Hulu Rokan</span><br>
                                <p class="deskripsi">Jasa Pendukung Manajemen Proyek & Jasa Pendukung
                                    Manajemen
                                    Proyek
                                    Lapangan</p>
                                <span class="fw-500 text-dark-gray tanggal">2023 - 2026</span>
                            </div>
                        </div>
                        <div
                            class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mb-20px mt-20px">
                        </div>
                    </div>

                    <div class="sectdownstream" data-value="3">

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



    <script>
        function changeBackground(element, value) {
            console.log(value);
            if (value == 1) {
                element.classList.toggle('clicked-background');

                document.querySelector('.sectupstream').classList.add('show');
                document.querySelector('.sectrefinery').classList.add('hidden');
                document.querySelector('.sectdownstream').classList.add('hidden');

                document.querySelectorAll('.sectdownstream, .sectrefinery').forEach(
                    el => {
                        el.classList.remove('show');
                    });

                document.querySelectorAll('.image-container[data-value="2"], .image-container[data-value="3"]').forEach(
                    el => {
                        el.classList.remove('clicked-background');
                    });
            } else if (value == 2) {
                element.classList.toggle('clicked-background');

                document.querySelector('.sectupstream').classList.add('hidden');
                document.querySelector('.sectrefinery').classList.add('show');
                document.querySelector('.sectdownstream').classList.add('hidden');


                document.querySelectorAll('.sectupstream, .sectdownstream').forEach(
                    el => {
                        el.classList.remove('show');
                    });
                document.querySelectorAll('.image-container[data-value="1"], .image-container[data-value="3"]').forEach(
                    el => {
                        el.classList.remove('clicked-background');
                    });
            } else if (value == 3) {
                element.classList.toggle('clicked-background');

                document.querySelector('.sectupstream').classList.add('hidden');
                document.querySelector('.sectrefinery').classList.add('hidden');
                document.querySelector('.sectdownstream').classList.add('show');


                document.querySelectorAll('.sectupstream, .sectrefinery').forEach(
                    el => {
                        el.classList.remove('show');
                    });

                document.querySelectorAll('.image-container[data-value="1"], .image-container[data-value="2"]').forEach(
                    el => {
                        el.classList.remove('clicked-background');
                    });
            }


            /* if (value === 1 || value === 2 || value === 3) {
                element.classList.remove('clicked-background');
            } else {
                element.classList.toggle('clicked-background');
            } */
        }
    </script>

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
