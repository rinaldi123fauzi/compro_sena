<x-layout>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <style>
        .layanandesc {
            font-size: 16px;
            line-height: 20px;
        }

        .backdark {
            background-color: #63A5BF;
        }
    </style>

    {{--  <section class="bg-gradient-very-light-gray ps-7 pe-7 xxl-ps-3 xxl-pe-3 xs-px-0">
        <div class="container-fluid">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-lg-7 col-md-8 text-center"
                    data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span
                        class="fw-600 ls-1px fs-16 alt-font d-inline-block text-uppercase mb-5px text-base-color">Innovative
                        solutions</span>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">Our Services</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 position-relative"
                    data-anime='{ "translateX": [150, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class=" sm-outside-box-right-0">
                        <div class="swiper"
                            data-slider-options='{ "spaceBetween": 35, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 3 }, "320": { "slidesPerView": 1 } }}'>
                            <div class="swiper-wrapper">
                                 
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
                                                <a href="#survey" onclick="scrollToInspeksi(event, 'engineering')"
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
                                                <a href="#" onclick="scrollToInspeksi(event, 'engineering')"
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
                                                <a href="#" onclick="scrollToInspeksi(event, 'konsultan')"
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
                                                <a href="#" onclick="scrollToInspeksi(event, 'inspeksi')"
                                                    class="fs-22 d-block text-white mb-10px fw-500">Inspection</a>
                                                <p class="layanandesc interactive-banners-content-text w-95 lg-w-100">
                                                    Perseroan
                                                    memiliki keahlian dalam inspeksi dan pengujian teknis</p>
                                            </div>
                                        </div>
                                        <div class="box-overlay bg-gradient-dark-transparent"></div>
                                    </div>
                                </div>




                                

                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section> --}}





    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pe-5 order-2 order-lg-1 lg-pe-3 md-pe-15px"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <div class="position-sticky top-130px">
                        <div class="mb-30px">
                            <ul class="p-0 m-0 list-style-02">
                                <li
                                    class="pb-15px mb-15px border-bottom border-color-extra-medium-gray align-items-center">
                                    <a href="#engineering"
                                        onclick="scrollToInspeksi(event, 'engineering')">Engineering</a><i
                                        class="feather icon-feather-arrow-right ms-auto"></i>
                                </li>
                                <li
                                    class="pb-15px mb-15px border-bottom border-color-extra-medium-gray align-items-center text-dark-gray">
                                    <a href="#inspeksi" onclick="scrollToInspeksi(event, 'inspeksi')"
                                        class="text-dark-gray text-dark-gray-hover">Inspeksi</a><i
                                        class="feather icon-feather-arrow-right ms-auto"></i>
                                </li>
                                <li
                                    class="pb-15px mb-15px border-bottom border-color-extra-medium-gray align-items-center">
                                    <a href="#survey" onclick="scrollToInspeksi(event, 'survey')">Survey</a><i
                                        class="feather icon-feather-arrow-right ms-auto"></i>
                                </li>
                                <li class="pb-15px align-items-center"><a href="#konsultan"
                                        onclick="scrollToInspeksi(event, 'konsultan')">Konsultan</a><i
                                        class="feather icon-feather-arrow-right ms-auto"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>



                <div class="col-lg-8 order-1 order-lg-2 md-mb-50px"
                    data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

                    {{-- Sect Enginering --}}
                    <div id="engineering"></div>
                    <img src="{{ URL::asset('assets') }}/image/layanan/pagelayananengineering.jpg"
                        class="mb-30px md-mt-15px border-radius-6px" alt="">
                    <h4 class="text-dark-gray fw-600 ls-minus-1px alt-font mb-20px d-block">ENGINEERING</h4>
                    <p>
                        SENA memiliki keahlian menyusun dokumen engineering design untuk semua tahapan engineering yang
                        dibutuhkan. Layanan yang dapat SENA lakukan di bidang engineering meliputi
                    </p>
                    <ul class="list-style-04 text-dark-gray fw-500">
                        <li>Conceptual - Feasibility Study </li>
                        <li>Pre Front End Engineering Design (Pre Feed)</li>
                        <li>Front End Engineering Design (FEED)</li>
                        <li>Detail Engineering Design (DED)</li>
                        <li>Hazard and Operability (HAZOP) Study</li>
                        <li>Hazard Identification (HAZID) Study</li>
                        <li>Penelaahan Design / Review Design</li>
                        <li>Flow Assurance Study</li>
                    </ul>


                    <div class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mb-35px mt-35px">
                    </div>

                    {{-- Sect Inspeksi --}}
                    <div id="inspeksi"></div>
                    <img src="{{ URL::asset('assets') }}/image/layanan/pagelayananinspeksi.jpg"
                        class="mb-30px md-mt-15px border-radius-6px" alt="">
                    <h4 class="text-dark-gray fw-600 ls-minus-1px alt-font mb-20px d-block">INSPEKSI</h4>
                    <p>
                        SENA memiliki keahlian dalam inspeksi dan pengujian teknis, integrity serta pekerjaan pasca
                        operasi. Layanan yang dapat SENA lakukan di bidang inspeksi meliputi
                    </p>

                    <h6>Sebelum Pembangunan</h6>
                    <ul class="list-style-04 text-dark-gray fw-500">
                        <li>Welding and Coating Inspection</li>
                        <li>Material Testing & Inspection</li>
                        <li>Non-Destructive Testing (Conventional & Advance)</li>
                        <li>Destructive Testing</li>
                    </ul>

                    <h6 class="mt-45px">Setelah Pembangunan</h6>
                    <ul class="list-style-04 text-dark-gray fw-500">
                        <li>Pipeline and Facility Inspection & Assessment</li>
                        <li>Intelligent Pigging</li>
                        <li>Reliability Study</li>
                        <li>Risk Assessment and Mitigation</li>
                        <li>Risk Based Inspection</li>
                        <li>Fitness For Services</li>
                        <li>Remaining Life Assessment</li>
                        <li>Failure Analysis</li>
                        <li>External Corrosion Direct Assessment (CIPS, DCVG, PCM)</li>
                        <li>Geohazard Assessment</li>
                        <li>Jetty Assessment (Non Destructive & Destructive Test)</li>
                    </ul>

                    <div class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mb-35px mt-35px">
                    </div>

                    {{-- Sect Survey --}}
                    <div id="survey"></div>
                    <img src="{{ URL::asset('assets') }}/image/layanan/pagelayanansurvey.jpg"
                        class="mb-30px md-mt-15px border-radius-6px" alt="">
                    <h4 class="text-dark-gray fw-600 ls-minus-1px alt-font mb-20px d-block">SURVEY</h4>
                    <p>
                        SENA memiliki keahlian dalam kegiatan survei dan penelitian teknis baik Onshore dan Offshore.
                        Layanan yang dapat SENA lakukan di bidang survei dan penelitian teknis meliputi
                    </p>

                    <ul class="list-style-04 text-dark-gray fw-500">
                        <li>GIS Mapping and Databases</li>
                        <li>Topographic Survey</li>
                        <li>ROV Survey</li>
                        <li>Bathymetry Survey </li>
                        <li>Soil Investigation</li>
                        <li>Pemetaan Udara (Fotogrametri Udara)</li>
                        <li>3D Mapping Laser Scanner</li>
                        <li>MetOcean</li>
                    </ul>

                    <div class="divider-style-03 divider-style-03-01 border-color-extra-medium-gray mb-35px mt-35px">
                    </div>

                    {{-- Sect Konsultan --}}
                    <div id="konsultan"></div>
                    <img src="{{ URL::asset('assets') }}/image/layanan/pagelayanankonsultasi.jpg"
                        class="mb-30px md-mt-15px border-radius-6px" alt="">
                    <h4 class="text-dark-gray fw-600 ls-minus-1px alt-font mb-20px d-block">KONSULTAN</h4>
                    <p>
                        Project Management Consultancy (PMC)
                        Technical Assistance Services (TAS)
                        Studi/Kajian Teknis
                        Perhitungan Harga Satuan / Market Survey
                        Due Diligence
                    </p>

                    <ul class="list-style-04 text-dark-gray fw-500">
                        <li>Project Management Consultancy (PMC)</li>
                        <li>Technical Assistance Services (TAS)</li>
                        <li>Studi/Kajian Teknis</li>
                        <li>Perhitungan Harga Satuan / Market Survey</li>
                        <li>Due Diligence</li>
                    </ul>


                </div>


            </div>
        </div>
    </section>

    <script>
        function scrollToInspeksi(event, value) {
            console.log(event);
            event.preventDefault();
            const element = document.getElementById(value);
            const offset = 150; // Adjust this value as needed
            const elementPosition = element.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    </script>

    <section class="backdark background-position-center-top position-relative overflow-hidden">
        <div class="container">
            <div class="row mb-6 align-items-center">
                <div class="col-xl-7 col-lg-8 md-mb-50px sm-mb-30px">
                    <h1 class="text-white lh-36 mb-40px xs-mb-25px fw-bold">
                        DISCIPLINE
                    </h1>
                    <div class="row row-cols-1 row-cols-sm-3" style="color:#fff !important;">
                        <div class="col">
                            <ul class="p-0 m-0 list-style-02">

                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Process</li>
                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Process Safety</li>
                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Mechanical</li>
                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Piping</li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="p-0 m-0 list-style-02">
                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Pipeline</li>
                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Electrical</li>
                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Instrument</li>
                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Civil</li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="p-0 m-0 list-style-02">
                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Marine</li>
                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Structure</li>
                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>3D Modeling</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-xl-1 position-relative md-mb-50px">
                    <div class="w-80 lg-w-85 mt-minus-20px float-end">
                        <img class="md-w-100" src="{{ URL::asset('assets') }}/image/layanan/disiplin1.jpg"
                            alt="" />
                    </div>
                    <div class="w-50 position-absolute left-15px bottom-20px lg-bottom-minus-50px">
                        <img src="{{ URL::asset('assets') }}/image/layanan/disiplin2.jpg" alt=""
                            class="box-shadow-quadruple-large" />
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="position-relative">
        <div class="container">
            {{-- <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-lg-7 col-md-8 text-center"
                    data-anime='{ "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h2 class="alt-font text-dark-gray fw-600 ls-minus-2px">Software</h2>
                </div>
            </div> --}}
            <div class="col tab-style-06">
                <ul
                    class="nav nav-tabs alt-font justify-content-center border-0 text-center text-uppercase alt-font fw-500 mb-5">
                    <li class="nav-item bg-white border-color-extra-medium-gray">
                        <a class="nav-link active fw-500" data-bs-toggle="tab" href="#tab_six1">Software</a>
                        <span class="tab-bg-active bg-dark-gray"></span>
                    </li>
                    <li class="nav-item bg-white border-color-extra-medium-gray">
                        <a class="nav-link fw-500" data-bs-toggle="tab" href="#tab_six2">Hardware</a>
                        <span class="tab-bg-active bg-dark-gray"></span>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- start tab content -->
                    <div class="tab-pane fade in active show" id="tab_six1">
                        <div class="row row-cols-1 row-cols-lg-6 row-cols-md-3 row-cols-sm-2 justify-content-center align-items-center"
                            data-anime='{ "el": "childs", "translateY": [50, 0], "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href="demo-decor-store-shop.html"><img
                                                src="{{ URL::asset('assets') }}/image/software/software-olga.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href="demo-decor-store-shop.html"
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Olga</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href="demo-decor-store-shop.html"><img
                                                src="{{ URL::asset('assets') }}/image/software/software-hysys.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href="demo-decor-store-shop.html"
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Hysys</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href="demo-decor-store-shop.html"><img
                                                src="{{ URL::asset('assets') }}/image/software/software aveva e-3d modelling.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href="demo-decor-store-shop.html"
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">E-3D Modelling</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href="demo-decor-store-shop.html"><img
                                                src="{{ URL::asset('assets') }}/image/software/software pipesim.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href="demo-decor-store-shop.html"
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Pipesim</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href="demo-decor-store-shop.html"><img
                                                src="{{ URL::asset('assets') }}/image/software/software caesar 2.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href="demo-decor-store-shop.html"
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Caesar II</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href="demo-decor-store-shop.html"><img
                                                src="{{ URL::asset('assets') }}/image/software/software pipe data pro.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href="demo-decor-store-shop.html"
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Pipe Data Pro</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href="demo-decor-store-shop.html"><img
                                                src="{{ URL::asset('assets') }}/image/software/software compress.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href="demo-decor-store-shop.html"
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Compress</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href="demo-decor-store-shop.html"><img
                                                src="{{ URL::asset('assets') }}/image/software/software ETAP.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href="demo-decor-store-shop.html"
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">ETAP</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href="demo-decor-store-shop.html"><img
                                                src="{{ URL::asset('assets') }}/image/software/software instrucalc 9.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href="demo-decor-store-shop.html"
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Instrucalc</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href="demo-decor-store-shop.html"><img
                                                src="{{ URL::asset('assets') }}/image/software/software pv-elite.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href="demo-decor-store-shop.html"
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">PV Elite</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href="demo-decor-store-shop.html"><img
                                                src="{{ URL::asset('assets') }}/image/software/software sacs.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href="demo-decor-store-shop.html"
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">SACS</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href="demo-decor-store-shop.html"><img
                                                src="{{ URL::asset('assets') }}/image/software/software staad pro.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href="demo-decor-store-shop.html"
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Staad Pro</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href="demo-decor-store-shop.html"><img
                                                src="{{ URL::asset('assets') }}/image/software/software autocad.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href="demo-decor-store-shop.html"
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">AutoCAD (2D & 3D)</a>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_six2">
                        <div class="row row-cols-1 row-cols-lg-6 row-cols-md-3 row-cols-sm-2 justify-content-center align-items-center"
                            data-anime='{ "el": "childs", "translateY": [50, 0], "translateX": [-50, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/PhasedArray.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Phased Array UT (PAUT)</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/UTThickness.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">UT Thickness Gauge</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/HighVoltage.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">High Voltage Holiday Detector</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/LowVoltage.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Low Voltage Holiday Detector</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/ThermalImaging.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Thermal Imaging Cameras</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/BenchTest.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Bench Test Set</a>
                                </div>
                            </div>


                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/CIPSDCVG.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">CIPS DCVG</a>
                                </div>
                            </div>


                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/PipeCurrent.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Pipe Current Meter (PCM)</a>
                                </div>
                            </div>


                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/ReferenceElectrode.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Reference Electrode Cu/CuSO₄</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/SoilResistivity.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Soil Resistivity + pH Meter</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/HighVoltageInsulation.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">High Voltage Insulation Tester</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/VibrationMeter.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Vibration Meter</a>
                                </div>
                            </div>


                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/Tachometer.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Tachometer</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/HammerTest.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Hammer Test</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/CoatingPullOff.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Coating Pull-Off Adhesion Tester</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/CoatingThicknessGaugeDFT.jpg"
                                                alt="" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12">
                                            +
                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover"
                                        style="text-transform: capitalize">Coating Thickness Gauge DFT</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
            </div>

        </div>
    </section>


</x-layout>
