<x-layout>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <section class="bg-very-light-gray md-pb-40px xs-pb-25px">
        <div class="container"
            data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="row align-items-center mb-3">
                <div class="col-md-8 text-center text-md-start">
                    <!-- filter navigation -->
                    <ul class="portfolio-filter nav nav-tabs border-0">
                        <li class="nav active"><a data-filter="*" href="#">All</a></li>
                        <li class="nav">
                            <a data-filter=".selected" href="#">2024</a>
                        </li>
                        <li class="nav">
                            <a data-filter=".digital" href="#">2023</a>
                        </li>
                        <li class="nav">
                            <a data-filter=".branding" href="#">2022</a>
                        </li>
                    </ul>
                    <!-- end filter navigation -->
                </div>
            </div>
            <div class="row">
                <div class="col-12 filter-content p-md-0">
                    <ul
                        class="portfolio-simple portfolio-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-4col lg-grid-4col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large text-center">
                        <li class="grid-sizer"></li>
                        <!-- start portfolio item -->
                        <li class="grid-item selected branding transition-inner-all">
                            <div
                                class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                                <div class="position-relative">
                                    <a href="demo-it-business-services-details.html"><img
                                            src="{{ URL::asset('assets') }}/image/sampul-annual-report-2018.jpg"
                                            alt="" /></a>
                                </div>
                                <div class="bg-white">
                                    <div
                                        class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                        <a href="demo-it-business-services-details.html"
                                            class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                            <span>
                                                <span class="btn-text">Download </span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item selected branding transition-inner-all">
                            <div
                                class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                                <div class="position-relative">
                                    <a href="demo-it-business-services-details.html"><img
                                            src="{{ URL::asset('assets') }}/image/2024.jpg" alt="" /></a>
                                </div>
                                <div class="bg-white">
                                    <div
                                        class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                        <a href="demo-it-business-services-details.html"
                                            class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                            <span>
                                                <span class="btn-text">Download </span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item selected branding transition-inner-all">
                            <div
                                class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                                <div class="position-relative">
                                    <a href="demo-it-business-services-details.html"><img
                                            src="{{ URL::asset('assets') }}/image/2023.jpg" alt="" /></a>
                                </div>
                                <div class="bg-white">
                                    <div
                                        class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                        <a href="demo-it-business-services-details.html"
                                            class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                            <span>
                                                <span class="btn-text">Download </span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid-item selected branding transition-inner-all">
                            <div
                                class="services-box-style-03 last-paragraph-no-margin border-radius-6px overflow-hidden">
                                <div class="position-relative">
                                    <a href="demo-it-business-services-details.html"><img
                                            src="{{ URL::asset('assets') }}/image/2021.jpg" alt="" /></a>
                                </div>
                                <div class="bg-white">
                                    <div
                                        class="d-flex justify-content-center border-top border-color-extra-medium-gray pt-20px pb-20px ps-50px pe-50px position-relative text-center">
                                        <a href="demo-it-business-services-details.html"
                                            class="btn btn-link btn-hover-animation-switch btn-medium fw-700 text-dark-gray text-uppercase">
                                            <span>
                                                <span class="btn-text">Download </span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- end portfolio item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>
</x-layout>
