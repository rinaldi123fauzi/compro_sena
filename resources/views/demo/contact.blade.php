<x-layout>

    <x-slot:title>
        {{ $title }}
    </x-slot:title>

    <section class="bg-very-light-gray">
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
</x-layout>
