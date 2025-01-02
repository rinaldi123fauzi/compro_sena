<x-layout>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <section class="bg-white">
        <div class="container">
            <div class="row justify-content-center mb-2">
                <div class="col-lg-6 col-md-8 text-center">
                    <span
                        class="fs-15 mb-5px text-gradient-fast-pink-light-yellow fw-700 d-inline-block text-uppercase ls-1px">Contact
                        Us</span>
                    <h2 class="ls-minus-1px text-dark-gray fw-600">Get In Touch</h2>
                </div>
            </div>
            <div class="row">
                <div class="col tab-style-03">
                    <ul
                        class="nav nav-tabs justify-content-center text-center fw-500 border-color-light-medium-gray mb-7">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_third1">Pertanyaan Bisnis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab_third2">Pertanyaan Umum</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- start tab content -->
                        <div class="tab-pane fade in active show" id="tab_third1">
                            <div class="row align-items-center justify-content-center g-0">
                                <div class="col-xl-10 col-lg-12">
                                    <!-- start contact form -->
                                    <form action="email-templates/contact-form.php" method="post"
                                        class="row contact-form-style-02">
                                        <div class="col-md-6 mb-30px">
                                            <input
                                                class="input-name border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="text" name="name" placeholder="Your Name*" />
                                        </div>
                                        <div class="col-md-6 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="email" name="email" placeholder="email*" />
                                        </div>
                                        <div class="col-md-12 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="email" name="email" placeholder="Company" />
                                        </div>
                                        <div class="col-md-12 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="email" name="email" placeholder="Telephone" />
                                        </div>
                                        <div class="col-md-12 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="email" name="email" placeholder="Your Subject" />
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <textarea class="border-radius-4px border-color-white box-shadow-double-large form-control" cols="40"
                                                rows="4" name="comment" placeholder="Your message"></textarea>
                                        </div>
                                        <div class="col-xl-6 col-md-7">
                                            <p class="mb-0 fs-14 lh-26 text-center text-md-start w-90 md-w-100">
                                                We are committed to protecting your privacy. We will
                                                never collect information about you without your
                                                explicit consent.
                                            </p>
                                        </div>
                                        <div class="col-xl-6 col-md-5 text-center text-md-end sm-mt-20px">
                                            <input type="hidden" name="redirect" value="" />
                                            <button
                                                class="btn btn-extra-large btn-base-color left-icon btn-box-shadow btn-rounded d-inline-block align-middle xs-m-10px"
                                                type="submit">
                                                <span>
                                                    <span class="btn-double-text" data-text="Book appointment">Send
                                                        Message</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-results mt-20px d-none"></div>
                                        </div>
                                    </form>
                                    <!-- end contact form -->
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_third2">
                            <div class="row align-items-center justify-content-center g-0">
                                <div class="col-xl-10 col-lg-12">
                                    <!-- start contact form -->
                                    <form action="email-templates/contact-form.php" method="post"
                                        class="row contact-form-style-02">
                                        <div class="col-md-6 mb-30px">
                                            <input
                                                class="input-name border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="text" name="name" placeholder="Your Name*" />
                                        </div>
                                        <div class="col-md-6 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="email" name="email" placeholder="email*" />
                                        </div>
                                        <div class="col-md-12 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="email" name="email" placeholder="Company" />
                                        </div>
                                        <div class="col-md-12 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="email" name="email" placeholder="Telephone" />
                                        </div>
                                        <div class="col-md-12 mb-30px">
                                            <input
                                                class="border-radius-4px border-color-white box-shadow-double-large form-control required"
                                                type="email" name="email" placeholder="Your Subject" />
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <textarea class="border-radius-4px border-color-white box-shadow-double-large form-control" cols="40"
                                                rows="4" name="comment" placeholder="Your message"></textarea>
                                        </div>
                                        <div class="col-xl-6 col-md-7">
                                            <p class="mb-0 fs-14 lh-26 text-center text-md-start w-90 md-w-100">
                                                We are committed to protecting your privacy. We will
                                                never collect information about you without your
                                                explicit consent.
                                            </p>
                                        </div>
                                        <div class="col-xl-6 col-md-5 text-center text-md-end sm-mt-20px">
                                            <input type="hidden" name="redirect" value="" />
                                            <button
                                                class="btn btn-extra-large btn-base-color left-icon btn-box-shadow btn-rounded d-inline-block align-middle xs-m-10px"
                                                type="submit">
                                                <span>
                                                    <span class="btn-double-text" data-text="Book appointment">Send
                                                        Message</span>
                                                </span>
                                            </button>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-results mt-20px d-none"></div>
                                        </div>
                                    </form>
                                    <!-- end contact form -->
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_third3">
                            <div class="row align-items-center justify-content-center g-0">
                                <div class="col-lg-6 col-md-11 position-relative md-mb-30px">
                                    <figure class="mb-0">
                                        <img src="https://via.placeholder.com/580x475" alt=""
                                            class="w-95 border-radius-6px" />
                                        <figcaption
                                            class="position-absolute bottom-90px right-minus-50px xs-bottom-10px xs-right-minus-15px xs-w-140px">
                                            <img src="images/demo-spa-salon-facility-bg.png" class="animation-float"
                                                alt="" />
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-lg-5 col-md-11 offset-lg-1">
                                    <span
                                        class="fs-15 mb-15px text-gradient-fast-pink-light-yellow fw-700 d-inline-block text-uppercase ls-1px">Private
                                        beach</span>
                                    <h3 class="ls-minus-1px text-dark-gray w-100 fw-600">
                                        The best luxury beach for spa massage.
                                    </h3>
                                    <p class="mb-35px w-95 sm-w-100">
                                        A design-led approach guides the team, implementing
                                        practices, products and services that are thoughtful and
                                        environmentally sound. family of professionals that
                                        creates intelligent designs that help the face of
                                        hospitality.
                                    </p>
                                    <a href="#"
                                        class="btn btn-medium btn-switch-text btn-round-edge btn-transparent-light-gray">
                                        <span>
                                            <span class="btn-double-text" data-text="Explore more">Explore more</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_third4">
                            <div class="row align-items-center justify-content-center g-0">
                                <div class="col-lg-6 col-md-11 position-relative md-mb-30px">
                                    <figure class="mb-0">
                                        <img src="https://via.placeholder.com/580x475" alt=""
                                            class="w-95 border-radius-6px" />
                                        <figcaption
                                            class="position-absolute bottom-90px right-minus-50px xs-bottom-10px sm-right-minus-20px xs-right-minus-10px xs-w-140px">
                                            <img src="images/demo-spa-salon-facility-bg.png" class="animation-float"
                                                alt="" />
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="col-lg-5 col-md-11 offset-lg-1">
                                    <span
                                        class="fs-15 mb-15px text-gradient-fast-pink-light-yellow fw-700 d-inline-block text-uppercase ls-1px">Sauna
                                        bath</span>
                                    <h3 class="ls-minus-1px text-dark-gray w-100 fw-600">
                                        Saunas improve your health and wellness.
                                    </h3>
                                    <p class="mb-35px w-95 sm-w-100">
                                        A design-led approach guides the team, implementing
                                        practices, products and services that are thoughtful and
                                        environmentally sound. family of professionals that
                                        creates intelligent designs that help the face of
                                        hospitality.
                                    </p>
                                    <a href="#"
                                        class="btn btn-medium btn-switch-text btn-round-edge btn-transparent-light-gray">
                                        <span>
                                            <span class="btn-double-text" data-text="Explore more">Explore more</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-0 mb-35px">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-6 col-lg-7 cover-background md-h-500px sm-h-400px md-mb-50px"
                    style="background-image:url('{{ URL::asset('assets') }}/image/contact/contactus2.jpg')">
                    <div
                        class="position-absolute text-center blur-box right-30px bottom-30px sm-right-15px sm-bottom-15px pt-35px pb-35px ps-45px pe-45px sm-p-20px bg-white-transparent counter-style-04 d-flex align-items-center border-radius-6px">
                        <h2 class="vertical-counter d-inline-flex alt-font text-dark-gray fw-700 mb-0 ls-minus-2px"
                            data-text="+" data-to="100"></h2>
                        <span class="w-180px text-dark-gray text-start fw-500 lh-24 ms-15px sm-ms-10px">Very satisfied
                            clients .</span>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-5 col-lg-5 position-relative">
                    <div class="contact-form-style-03 position-relative ps-15 pe-15 xxl-ps-10 xxl-pe-10 lg-ps-5 lg-pe-5 overflow-hidden last-paragraph-no-margin"
                        data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="mb-10px">
                            <span class="w-25px h-1px d-inline-block bg-base-color me-5px align-middle"></span>
                            <span
                                class="text-gradient-base-color fs-15 alt-font fw-700 ls-05px text-uppercase d-inline-block align-middle">Get
                                in touch with us</span>
                        </div>
                        <h2 class="text-dark-gray alt-font fw-600 w-90 xxl-w-100 ls-minus-2px">Jakarta</h2>
                        <p class="mb-10px lg-w-90">
                            Komplek Perusahaan Gas Negara (PGN), Daan Mogot gang Macan Rt.3
                            Rw.5, Duri Kepa Kebon Jeruk. Kota Jakarta Barat 11510
                        </p>
                        <div class="separator-line-1px bg-extra-medium-gray w-70 mt-20px mb-20px md-w-100"></div>
                        <div class="d-block">
                            <span class="text-dark-gray fw-600">E:</span>
                            <a href="mailto:info@yourdomain.com">info@pt-sena.co.id </a>
                        </div>
                        <div class="d-block mb-5px">
                            <span class="text-dark-gray fw-600">T:</span>
                            <a href="tel:12345678910">021-2119 1988 </a>
                        </div>
                        <a href="https://maps.google.com/maps?ll=-37.805688,144.962312&amp;z=17&amp;t=m&amp;hl=en-US&amp;gl=IN&amp;mapclient=embed&amp;cid=13153204942596594449"
                            target="_blank" class="fs-14 text-dark-gray text-uppercase fw-600">
                            <span class=""><i class="feather icon-feather-map-pin fs-14 me-5px"></i>View
                                on google map</span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end section -->
    <!-- start section -->

    <!-- end section -->
    <!-- start section -->
    {{-- <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center elements-social social-icon-style-06">
                    <div class="fs-22 mb-30px text-dark-gray">
                        Connect with <span class="fw-600">social media</span>
                    </div>
                    <ul class="extra-large-icon fw-600"
                        data-anime='{ "el": "childs", "translateX": [10, 0], "opacity": [0,1], "duration": 300, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li>
                            <a class="facebook" href="https://www.facebook.com" target="_blank"><span
                                    class="brand-label text-dark-gray">Fb</span><span
                                    class="brand-icon fa-brands fa-facebook-f"></span></a>
                        </li>

                        <li>
                            <a class="twitter" href="http://www.twitter.com" target="_blank"><span
                                    class="brand-label text-dark-gray">Tw</span><span
                                    class="brand-icon fa-brands fa-twitter"></span></a>
                        </li>
                        <li>
                            <a class="behance" href="http://www.Youtube.com" target="_blank"><span
                                    class="brand-label text-dark-gray">Yt</span><span
                                    class="brand-icon fa-brands fa-youtube"></span></a>
                        </li>
                        <li>
                            <a class="pinterest" href="https://in.pinterest.com" target="_blank"><span
                                    class="brand-label text-dark-gray">Ig</span><span
                                    class="brand-icon fa-brands fa-instagram"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="p-0">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-md-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7497166452226!2d106.77041197573077!3d-6.1642635604138505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6744ba1de41%3A0x9654c5a1a1758dd0!2sPT.%20Solusi%20Energy%20Nusantara!5e0!3m2!1sen!2sid!4v1719882347249!5m2!1sen!2sid"
                        width="100%" height="500" style="border: 0" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
</x-layout>
