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

        .border-right {
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .border-left {
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        .list-style-04 {
            font-size: 16px;
            padding-left: 22px;
        }

        .divcontent {
            padding: 34px;
        }

        .bottomtext {
            background-color: #63a5bf;
            color: #fff;
            width: 100%;
        }

        .bottomtext:hover {
            background-color: #63a5bf;
            color: #fff !important;
        }

        .tandaplus {
            display: none !important;
        }

        .border-top {
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }

        .background-right {
            background-image: url("{{ URL::asset('assets') }}/image/bgservice/bgservicesenakotakkanan.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            border-radius: 25px !important;
        }

        .background-left {
            background-image: url("{{ URL::asset('assets') }}/image/bgservice/bgservicesenakotakkiri.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            border-radius: 25px !important;
        }

        .background-discipline {
            background-image: url("{{ URL::asset('assets') }}/image/background-discipline.jpg");
            background-position: center;
            background-repeat: no-repeat;
            /* height: 1000px; */
            /* Add height to the background image */
        }

        .btnselengkapnya {
            border-top-right-radius: 25px;
            border-bottom-left-radius: 25px;
        }

        .mainimage {
            width: 350px;
            border-radius: 25px;
        }
    </style>


    <section class="background-repeat position-relative overlap-height z-index-0"
        style="background-image:url('images/demo-spa-salon-home-bg-01.jpg');">

        <div class="container overlap-gap-section">

            <div class="row g-0 justify-content-center border-radius-6px overflow-hidden mb-8 background-right"
                data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-lg-6 md-h-400px sm-h-300px text-center">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <img src="{{ URL::asset('assets') }}/image/layanan/pagelayananengineering.jpg" alt=""
                            class="mainimage">
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="pt-5 pb-5 ps-15 pe-15 lg-ps-9 lg-pe-9 lg-pt-12 last-paragraph-no-margin">

                        <a href="">
                            <h4 class="alt-font fw-400 text-dark-gray mb-20px ls-minus-1px d-inline-block text-white">
                                ENGINEERING
                            </h4>
                        </a>
                        <p class="text-white">SENA memiliki keahlian menyusun dokumen engineering design untuk semua
                            tahapan engineering
                            yang
                            dibutuhkan. Layanan yang dapat SENA lakukan di bidang engineering meliputi</p>
                    </div>
                    <div
                        class="ps-15 pe-15 pt-5 pb-5 lg-ps-9 lg-pe-9 lg-pt-4 lg-pb-4  border-color-light-gray align-items-center d-flex justify-content-between text-center text-sm-start">

                        <a href=""
                            class="btn btn-medium btn-base-color btn-box-shadow box-shadow-extra-large btnselengkapnya"
                            data-toggle="modal" data-target=".bd-example-modal-lg">
                            <span>
                                <span class="btn-double-text text-black" data-text="Selengkapnya">Selengkapnya</span>
                            </span>
                        </a>
                        {{--  <a href="index.html" target="_blank"
                            class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0 appear"
                            style="">Our
                            Bussiness<span class="bg-white text-base-color"><i
                                    class="fa-solid fa-arrow-right"></i></span></a> --}}
                    </div>
                </div>
            </div>





            <div class="row g-0 justify-content-center border-radius-6px overflow-hidden mb-8 flex-row-reverse background-left"
                data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                {{-- <div class="col-lg-6 md-h-400px sm-h-300px text-center">
                    <img src="{{ URL::asset('assets') }}/image/layanan/pagelayananinspeksi.jpg" alt=""
                        class="border-right w-100">
                </div> --}}
                <div class="col-lg-6 md-h-400px sm-h-300px text-center">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <img src="{{ URL::asset('assets') }}/image/layanan/pagelayananinspeksi.jpg" alt=""
                            class="mainimage">
                    </div>
                </div>

                <div class="col-lg-6 ">
                    <div class="pt-5 pb-5 ps-15 pe-15 lg-ps-9 lg-pe-9 lg-pt-12 last-paragraph-no-margin">
                        <a href="">
                            <h4 class="alt-font fw-400 text-dark-gray mb-20px ls-minus-1px d-inline-block text-white">
                                INSPEKSI</h4>
                        </a>
                        <p class="text-white">
                            SENA memiliki keahlian dalam inspeksi dan pengujian teknis, integrity serta pekerjaan pasca
                            operasi. Layanan yang dapat SENA lakukan di bidang inspeksi meliputi
                        </p>
                    </div>
                    <div
                        class="ps-15 pe-15 pt-5 pb-5 lg-ps-9 lg-pe-9 lg-pt-4 lg-pb-4  border-color-light-gray align-items-center d-flex justify-content-between text-center text-sm-start">
                        <a href=""
                            class="btn btn-medium btn-base-color btn-box-shadow box-shadow-extra-large btnselengkapnya"
                            data-toggle="modal" data-target=".inspeksi">
                            <span>
                                <span class="btn-double-text text-black" data-text="Selengkapnya">Selengkapnya</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row g-0 justify-content-center border-radius-6px overflow-hidden mb-8 background-right"
                data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                {{-- <div class="col-lg-6 md-h-400px sm-h-300px text-center">
                    <img src="{{ URL::asset('assets') }}/image/layanan/pagelayanansurvey.jpg" alt=""
                        class="border-left w-100">
                </div> --}}
                <div class="col-lg-6 md-h-400px sm-h-300px text-center">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <img src="{{ URL::asset('assets') }}/image/layanan/pagelayanansurvey.jpg" alt=""
                            class="mainimage">
                    </div>
                </div>
                <div class="col-lg-6    border-right">
                    <div class="pt-5 pb-5 ps-15 pe-15 lg-ps-9 lg-pe-9 lg-pt-12 last-paragraph-no-margin">

                        <a href="">
                            <h4 class="alt-font fw-400 text-dark-gray mb-20px ls-minus-1px d-inline-block text-white">
                                SURVEY
                            </h4>
                        </a>
                        <p class="text-white">SENA memiliki keahlian dalam kegiatan survei dan penelitian teknis baik
                            Onshore dan Offshore.
                            Layanan yang dapat SENA lakukan di bidang survei dan penelitian teknis meliputi</p>
                    </div>
                    <div
                        class="ps-15 pe-15 pt-5 pb-5 lg-ps-9 lg-pe-9 lg-pt-4 lg-pb-4  border-color-light-gray align-items-center d-flex justify-content-between text-center text-sm-start">

                        {{-- <a href="" class="btn btn-very-small btn-double-border btn-border-base-color"
                            data-toggle="modal" data-target=".survey">
                            <span>
                                <span class="btn-double-text" data-text="Selengkapnya">Selengkapnya</span>
                            </span>
                        </a> --}}
                        <a href=""
                            class="btn btn-medium btn-base-color btn-box-shadow box-shadow-extra-large btnselengkapnya"
                            data-toggle="modal" data-target=".survey">
                            <span>
                                <span class="btn-double-text text-black" data-text="Selengkapnya">Selengkapnya</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-0 justify-content-center border-radius-6px overflow-hidden mb-8 flex-row-reverse background-left"
                data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                {{-- <div class="col-lg-6 md-h-400px sm-h-300px text-center">
                    <img src="{{ URL::asset('assets') }}/image/layanan/pagelayanankonsultasi.jpg" alt=""
                        class="border-right w-100">
                </div> --}}
                <div class="col-lg-6 md-h-400px sm-h-300px text-center">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <img src="{{ URL::asset('assets') }}/image/layanan/pagelayanankonsultasi.jpg" alt=""
                            class="mainimage">
                    </div>
                </div>
                <div class="col-lg-6  border-left">
                    <div class="pt-5 pb-5 ps-15 pe-15 lg-ps-9 lg-pe-9 lg-pt-12 last-paragraph-no-margin">
                        <a href="">
                            <h4 class="alt-font fw-400 text-dark-gray mb-20px ls-minus-1px d-inline-block text-white">
                                KONSULTAN
                            </h4>
                        </a>
                        <p class="text-white">
                            Project Management Consultancy (PMC)
                            Technical Assistance Services (TAS)
                            Studi/Kajian Teknis
                            Perhitungan Harga Satuan / Market Survey
                            Due Diligence
                        </p>
                    </div>
                    <div
                        class="ps-15 pe-15 pt-5 pb-5 lg-ps-9 lg-pe-9 lg-pt-4 lg-pb-4  border-color-light-gray align-items-center d-flex justify-content-between text-center text-sm-start">
                        {{-- <a href="" class="btn btn-very-small btn-double-border btn-border-base-color"
                            data-toggle="modal" data-target=".konsultan">
                            <span>
                                <span class="btn-double-text" data-text="Selengkapnya">Selengkapnya</span>
                            </span>
                        </a> --}}
                        <a href=""
                            class="btn btn-medium btn-base-color btn-box-shadow box-shadow-extra-large btnselengkapnya"
                            data-toggle="modal" data-target=".konsultan">
                            <span>
                                <span class="btn-double-text text-black" data-text="Selengkapnya">Selengkapnya</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img src="{{ URL::asset('assets') }}/image/layanan/pagelayananengineering.jpg"
                    class="mb-30px md-mt-15px" alt="">
                <div style="padding:20px;">
                    <h4 class="alt-font fw-400 text-dark-gray mb-20px ls-minus-1px d-inline-block">ENGINEERING
                    </h4>
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
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade inspeksi" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img src="{{ URL::asset('assets') }}/image/layanan/pagelayananinspeksi.jpg" class="mb-30px "
                    alt="">
                <div class="divcontent">
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
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade survey" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img src="{{ URL::asset('assets') }}/image/layanan/pagelayanansurvey.jpg" class="mb-30px"
                    alt="">
                <div class="divcontent">
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
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade konsultan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <img src="{{ URL::asset('assets') }}/image/layanan/pagelayanankonsultasi.jpg" class="mb-30px "
                    alt="">
                <div class="divcontent">
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
    </div>






    <section class="background-discipline ">
        <div class="container">
            <div class="row mb-6 align-items-center">

                <div class="col-lg-4 offset-xl-1 position-relative md-mb-50px">

                </div>
                <div class="col-xl-7 col-lg-8 md-mb-50px sm-mb-30px"
                    style="background-color: rgba(97, 159, 184, 0.9); padding:30px 60px 30px 60px;">
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
                        {{-- <div class="col">
                            <ul class="p-0 m-0 list-style-02">
                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Marine</li>
                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>Structure</li>
                                <li class="pb-5px"><i class="fa-solid fa-plus fs-12 me-10px"></i>3D Modeling</li>
                            </ul>
                        </div> --}}
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
                                    <div class="icon-box position-relative ">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/software/software-olga.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Olga</a>
                                </div>
                            </div>



                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/software/software aveva e-3d modelling.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">E-3D Modelling</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/software/software pipesim.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Pipesim</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/software/software caesar 2.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Caesar II</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/software/software pipe data pro.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Pipe Data Pro</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/software/software compress.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Compress</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/software/software ETAP.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">ETAP</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/software/software instrucalc 9.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Instrucalc</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/software/software pv-elite.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">PV Elite</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/software/software sacs.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">SACS</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/software/software staad pro.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Staad Pro</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/software/software autocad.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">AutoCAD </a>
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
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Phased Array UT (PAUT)</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/UTThickness.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">UT Thickness Gauge</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/HighVoltage.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">High Voltage Holiday Detector</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/LowVoltage.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Low Voltage Holiday Detector</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/ThermalImaging.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Thermal Imaging Cameras</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/BenchTest.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Bench Test Set</a>
                                </div>
                            </div>


                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/CIPSDCVG.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">CIPS DCVG</a>
                                </div>
                            </div>


                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/PipeCurrent.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Pipe Current Meter (PCM)</a>
                                </div>
                            </div>


                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/ReferenceElectrode.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Reference Electrode Cu/CuSO₄</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/SoilResistivity.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Soil Resistivity + pH Meter</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/HighVoltageInsulation.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">High Voltage Insulation Tester</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/VibrationMeter.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Vibration Meter</a>
                                </div>
                            </div>


                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/Tachometer.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Tachometer</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/HammerTest.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Hammer Test</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/CoatingPullOff.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
                                        style="text-transform: capitalize">Coating Pull-Off Adhesion Tester</a>
                                </div>
                            </div>

                            <div class="col categories-style-01 text-center mb-50px xs-mb-35px">
                                <div class="categories-box">
                                    <div class="icon-box position-relative mb-10px">
                                        <a href=""><img
                                                src="{{ URL::asset('assets') }}/image/hardware/CoatingThicknessGaugeDFT.jpg"
                                                class="border-top" /></a>
                                        <div
                                            class="count-circle d-flex align-items-center justify-content-center w-35px h-35px bg-base-color text-white rounded-circle alt-font fw-600 fs-12 tandaplus">

                                        </div>
                                    </div>
                                    <a href=""
                                        class="alt-font fw-600 fs-17 text-dark-gray text-dark-gray-hover bottomtext"
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



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</x-layout>
