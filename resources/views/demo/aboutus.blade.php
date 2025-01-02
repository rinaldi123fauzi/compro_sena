<x-layout>
    <style>
        .fs-15 {
            font-size: 13px;
        }

        .bg-base-color {
            background-color: #63A5BF;
        }

        .list-style-04 li {
            margin: 0px 0 0px !important;
        }
    </style>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>


    <section id="down-section">
        <div class="container">
            <div class="row align-items-center"
                data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-lg-6 position-relative md-mb-14 sm-mb-17 xs-mb-23">
                    <div class="w-70 md-w-75 xs-w-90" data-animation-delay="50" data-shadow-animation="true">
                        <img src="{{ URL::asset('assets') }}/image/about/sena1.jpg" alt=""
                            class="border-radius-8px w-100">
                    </div>
                    <div class="w-55 overflow-hidden position-absolute right-15px xs-w-60 bottom-minus-20px"
                        data-shadow-animation="true" data-animation-delay="250"
                        data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src="{{ URL::asset('assets') }}/image/about/sena2.jpg" alt=""
                            class="border-radius-8px w-100 box-shadow-quadruple-large" />
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start">
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
                </div>
            </div>
            <div class="mt-70px row row-cols-1 row-cols-md-4 row-cols-sm-2 justify-content-center text-center"
                data-anime='{"el": "childs", "opacity": [0,1], "translateX": [50, 0], "duration": 800, "delay":300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col last-paragraph-no-margin sm-mb-40px">
                    <h2 class="alt-font fw-900 text-dark-gray m-0">2015</h2>
                    <p>Establishment</p>
                </div>
                <div class="col last-paragraph-no-margin sm-mb-40px">
                    <h2 class="alt-font fw-900 text-dark-gray m-0">800+</h2>
                    <p>Employees</p>
                </div>
                <div class="col last-paragraph-no-margin xs-mb-40px">
                    <h2 class="alt-font fw-900 text-dark-gray m-0">400+</h2>
                    <p>Project</p>
                </div>
                <div class="col last-paragraph-no-margin">
                    <h2 class="alt-font fw-900 text-dark-gray m-0">6 Mio+</h2>
                    <p>Safe Man Hours</p>
                </div>
            </div>
        </div>
    </section>



    <section class="bg-solitude-blue">
        <div style="margin-left:30px; margin-right:30px">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-lg-6 col-sm-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-2px">
                        Building a Brighter Future
                    </h3>
                </div>
            </div>
            <div class="row justify-content-center"
                data-anime='{ "el": "childs", "perspective": [1200,1200], "translateY": [30, 0], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start fancy text box item -->
                <div class="col-lg-6 col-md-8 fancy-text-box-style-02 mb-30px">
                    <div class="feature-box feature-box-left-icon-middle h-100 bg-white hover-box dark-hover border-radius-6px ps-4 pe-4 pt-9 pb-9 box-shadow-extra-large box-shadow-extra-large-hover overflow-hidden"
                        style="padding-top: 30px !important;padding-bottom: 30px !important;">
                        <div class="feature-box-icon ms-40px me-40px lg-ms-15px lg-me-15px">
                            <h2 class="alt-font text-dark-gray fw-700 ls-minus-1px mb-0"
                                style="text-transform:uppercase;">
                                Visi
                            </h2>
                        </div>
                        <div
                            class="feature-box-content border-start border-color-extra-medium-gray ps-40px pe-40px lg-ps-15px lg-pe-15px last-paragraph-no-margin">
                            <p class="text-dark-gray">
                                To become a reliable provider of engineering, project, and operational solutions based
                                on innovation and technology with international standards.
                            </p>

                        </div>
                        <div class="feature-box-overlay bg-base-color"></div>
                    </div>
                </div>
                <!-- end fancy text box item -->
                <!-- start fancy text box item -->
                <style>
                    .feature-box:hover .feature-box-content .list-style-04 {
                        color: #ffffff;
                        /* Change color to white */
                    }

                    .list-style-04:hover {
                        color: #ffffff;
                        /* Change color to white */
                    }
                </style>
                <div class="col-lg-6 col-md-8 fancy-text-box-style-02 mb-30px">
                    <div class="feature-box feature-box-left-icon-middle h-100 bg-white hover-box dark-hover border-radius-6px ps-4 pe-4 pt-9 pb-9 box-shadow-extra-large box-shadow-extra-large-hover overflow-hidden"
                        style="padding-top: 30px !important;padding-bottom: 30px !important;">
                        <div class="feature-box-icon ms-40px me-40px lg-ms-15px lg-me-15px">
                            <h2 class="alt-font text-dark-gray fw-700 ls-minus-1px mb-0"
                                style="text-transform:uppercase;">
                                Misi
                            </h2>
                        </div>
                        <div
                            class="feature-box-content border-start border-color-extra-medium-gray ps-40px pe-40px lg-ps-15px lg-pe-15px last-paragraph-no-margin">

                            <ul class="list-style-04 text-dark-gray fw-500 hovv">
                                <li>Providing relieable,
                                    accurate and trustworthy engineering,
                                    project and operational solutions.</li>
                                <li>Creating stable and profitable growth for stakeholders.</li>
                                <li>Increase contribution for the implementation of environmentally friendly and
                                    sustainable solutions.</li>
                            </ul>
                        </div>
                        <div class="feature-box-overlay bg-base-color"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="cover-background background-position-center-top"
        style="background-image: url('{{ URL::asset('assets') }}/image/akhlak/sectionakhlak.png')">
        <div class="container">
            <div class="row justify-content-center mb-3"></div>
            <style>
                .hurufawal {
                    transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
                }

                .fade-in {
                    transform: scale(0.8);
                    opacity: 0;
                }

                .huruff {
                    /* Default styles for huruff */
                }

                @media (max-width: 767px) {
                    .huruff {
                        width: 100px !important;
                    }
                }
            </style>
            <div class="row">
                <div class="col-lg-2 col-6 md-mb-15px" style="text-align: center">
                    <img id="hurufa" class="hurufawal huruff"
                        src="{{ URL::asset('assets') }}/image/akhlak/akhlak A.png" onmouseover="hoverImage('a')"
                        onmouseout="unhoverImage('a')">
                </div>
                <div class="col-lg-2 col-6 md-mb-15px" style="text-align: center">
                    <img id="hurufk" class="hurufawal huruff"
                        src="{{ URL::asset('assets') }}/image/akhlak/akhlak K.png" onmouseover="hoverImage('k')"
                        onmouseout="unhoverImage('k')">
                </div>
                <div class="col-lg-2 col-6 md-mb-15px" style="text-align: center">
                    <img id="hurufh" class="hurufawal huruff"
                        src="{{ URL::asset('assets') }}/image/akhlak/akhlak H.png" onmouseover="hoverImage('h')"
                        onmouseout="unhoverImage('h')">
                </div>
                <div class="col-lg-2 col-6 md-mb-15px" style="text-align: center">
                    <img id="hurufl" class="hurufawal huruff"
                        src="{{ URL::asset('assets') }}/image/akhlak/akhlak L.png" onmouseover="hoverImage('l')"
                        onmouseout="unhoverImage('l')">
                </div>
                <div class="col-lg-2 col-6 md-mb-15px" style="text-align: center">
                    <img id="hurufa2" class="hurufawal huruff"
                        src="{{ URL::asset('assets') }}/image/akhlak/akhlak AA.png" onmouseover="hoverImage('a2')"
                        onmouseout="unhoverImage('a2')">
                </div>
                <div class="col-lg-2 col-6 md-mb-15px" style="text-align: center">
                    <img id="hurufk2" class="hurufawal huruff"
                        src="{{ URL::asset('assets') }}/image/akhlak/akhlak KK.png" onmouseover="hoverImage('k2')"
                        onmouseout="unhoverImage('k2')">
                </div>

            </div>
        </div>
    </section>



    <section class="big-section position-relative">
        <div id="particles-style-01" class="position-absolute h-100 top-0 left-0 w-100">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center mb-6 text-center text-lg-start">
                <div class="row justify-content-center mb-3">
                    <div class="col-xl-5 col-lg-6 col-sm-8 text-center"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font text-dark-gray fw-600 ls-minus-2px">
                            DEWAN KOMISARIS DAN DIREKSI
                        </h3>
                    </div>
                </div>
                <div class="col tab-style-06">
                    <ul
                        class="nav nav-tabs alt-font justify-content-center border-0 text-center text-uppercase alt-font fw-500 mb-5">
                        <li class="nav-item bg-white border-color-extra-medium-gray" style="margin-right:20px; ">
                            <a class="nav-link active fw-500" data-bs-toggle="tab" href="#tab_six1">Komisaris</a>
                            <span class="tab-bg-active bg-dark-gray"></span>
                        </li>
                        <li class="nav-item bg-white border-color-extra-medium-gray">
                            <a class="nav-link fw-500" data-bs-toggle="tab" href="#tab_six2">Direksi</a>
                            <span class="tab-bg-active bg-dark-gray"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <style>
                .card {
                    /* border: 1px solid #ccc; */
                    border-radius: 25px;
                    /*  border-top-left-radius: 25px;
                    border-top-right-radius: 25px; */
                    overflow: hidden;
                    /* width: 300px; */
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    transition: transform 0.3s ease-in-out;
                }

                .card:hover {
                    transform: scale(1.05);
                }

                .card:hover .card-content {
                    background-color: #63a5bf;
                    color: #ffffff !important;

                }

                .card:hover .nama,
                .card:hover .jabatan {
                    color: #ffffff !important;
                }

                .card-img {
                    width: 100%;
                    height: auto;
                }

                .card-content {
                    padding: 16px;
                }

                .colcard {
                    /* Adjust the value as needed */
                    /* Adjust the value as needed */

                }
            </style>


            <div class="row justify-content-center">
                <div class="col-lg-3 md-mb-15px align-items-center justify-content-center">
                    <a href="#modal-popup" class="modal-popup">
                        <div class="card">
                            <img src="{{ URL::asset('assets') }}/image/dewan/direksi1.jpg" alt="Card Image"
                                class="card-img">
                            <div class="card-content">
                                <div class="fs-19 fw-500 text-black lh-20 text-center nama">Fuad Hasyim</div>
                                <div class="text-black opacity-7  fs-15 text-center jabatan">President Director</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 md-mb-15px colcard">
                    <div class="card">
                        <img src="{{ URL::asset('assets') }}/image/dewan/direksi2.jpg" alt="Card Image"
                            class="card-img">
                        <div class="card-content">
                            <div class="fs-19 fw-500 text-black lh-20 text-center nama">Suhartawan Bambang Katri</div>
                            <div class="text-black opacity-7  fs-15 text-center jabatan">Commercial and Engineering
                                Director</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 md-mb-15px colcard">
                    <div class="card">
                        <img src="{{ URL::asset('assets') }}/image/dewan/direksi3.jpg" alt="Card Image"
                            class="card-img">
                        <div class="card-content">
                            <div class="fs-19 fw-500 text-black lh-20 text-center nama">Sudjono Suhardjo</div>
                            <div class="text-black opacity-7  fs-15 text-center jabatan">President Commissioner</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section style="background-color:#f7f7f7 !important;">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-lg-6 col-sm-8 text-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-2px">
                        SERTIFIKASI & PENGHARGAAN
                    </h3>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4 mb-15px">
                    <img src="{{ URL::asset('assets') }}/image/sertifikat/sertif1.jpg">
                </div>
                <div class="col-4 mb-15px">
                    <img src="{{ URL::asset('assets') }}/image/sertifikat/sertif2.jpg">
                </div>
                {{--  <div class="col-4 mb-15px">
                    <img src="{{ URL::asset('assets') }}/image/sertifikat/sertif3.jpg">
                </div> --}}

            </div>
        </div>
    </section>

    <div id="modal-popup" class="mfp-hide subscribe-popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-md-10 bg-white">
                    <div class="row position-relative box-shadow-quadruple-large">
                        <div class="col-lg-4 cover-background md-h-400px xs-h-300px"
                            style="background-image: url('{{ URL::asset('assets') }}/image/dewan/p1.jpg');">
                        </div>
                        <div class="col-lg-8 newsletter-popup p-8 pt-10 pb-10 lg-p-5 md-p-6 xs-p-8 position-relative">
                            <span class="d-block fs-24 fw-600 alt-font text-dark-gray mb-15px">SUHARTAWAN
                                BAMBANG</span>
                            <p style="font-size:15px;">
                                Fuad has more than 27 years Experiences in project/ engineering management. He is expert
                                in managing multi billion project for various industry such as oil and gas,
                                petrochemical, refinery and power generation. The last project he has involved is with
                                KBR on Gorgon LNG project for Chevron in Western of Australia where he was spent 3.5
                                years services as Deputy Engineering Manager/ Senior Project Engineer.

                            </p>

                            <div class="col-12">
                                <span class="d-block fs-24 fw-600 alt-font text-dark-gray mb-15px">Experience</span>

                                <ul class="p-0 m-0 list-style-02" style="font-size:15px;">
                                    <li>
                                        2021 - Direktur Utama - PT Solusi Energy Nusantara
                                    </li>
                                    <li>
                                        2021 - President Director - PT Harmoni Energi Persada
                                    </li>
                                    <li>
                                        2020 - Executive Vice President - TRIPATRA
                                    </li>
                                    <li>
                                        2018 - CEO & President Director - PT Harmoni Energi Persada
                                    </li>
                                    <li>
                                        2016 - President Director - PT KBR Indonesia
                                    </li>
                                    <li>
                                        2013 - Head of Structural and Marine Department - KBR, Inc.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function hoverImage(value) {

            let img;
            let image;

            if (value == 'a') {
                console.log('Ini adalah ', value);
                img = document.getElementById('hurufa');
                image = "{{ URL::asset('assets') }}/image/akhlak/amanah.png";
            } else if (value == 'k') {
                img = document.getElementById('hurufk');
                image = "{{ URL::asset('assets') }}/image/akhlak/kolaboratif.png";
            } else if (value == 'h') {
                img = document.getElementById('hurufh');
                image = "{{ URL::asset('assets') }}/image/akhlak/harmonis.png";
            } else if (value == 'l') {
                img = document.getElementById('hurufl');
                image = "{{ URL::asset('assets') }}/image/akhlak/loyal.png";
            } else if (value == 'a2') {
                img = document.getElementById('hurufa2');
                image = "{{ URL::asset('assets') }}/image/akhlak/adaptif.png";
            } else if (value == 'k2') {
                img = document.getElementById('hurufk2');
                image = "{{ URL::asset('assets') }}/image/akhlak/kompeten.png";
            }


            if (img) {
                img.classList.add('fade-in');
                setTimeout(() => {
                    img.src = image;
                    img.classList.remove('fade-in');
                }, 300); // Match the duration of the CSS transition
            }
        }

        function unhoverImage(value) {

            let img;
            let image;

            if (value == 'a') {
                console.log('Ini adalah ', value);
                img = document.getElementById('hurufa');
                image = "{{ URL::asset('assets') }}/image/akhlak/akhlak A.png";
            } else if (value == 'k') {
                img = document.getElementById('hurufk');
                image = "{{ URL::asset('assets') }}/image/akhlak/akhlak K.png";
            } else if (value == 'h') {
                img = document.getElementById('hurufh');
                image = "{{ URL::asset('assets') }}/image/akhlak/akhlak H.png";
            } else if (value == 'l') {
                img = document.getElementById('hurufl');
                image = "{{ URL::asset('assets') }}/image/akhlak/akhlak L.png";
            } else if (value == 'a2') {
                img = document.getElementById('hurufa2');
                image = "{{ URL::asset('assets') }}/image/akhlak/akhlak AA.png";
            } else if (value == 'k2') {
                img = document.getElementById('hurufk2');
                image = "{{ URL::asset('assets') }}/image/akhlak/akhlak KK.png";
            }



            if (img) {
                img.classList.add('fade-in');
                setTimeout(() => {
                    img.src = image;
                    img.classList.remove('fade-in');
                }, 300); // Match the duration of the CSS transition
            }
        }
    </script>
</x-layout>
