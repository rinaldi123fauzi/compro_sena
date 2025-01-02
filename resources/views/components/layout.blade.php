<x-header>
    <x-slot:logo>
        {{ $logo }}
    </x-slot:logo>
</x-header>
{{-- <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
    style="background-image: url({{ URL::asset('assets') }}/image/pabrik.jpeg)">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px"
                    data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    {{ $title }}
                </h1>
            </div>
            <div class="down-section text-center"
                data-anime='{ "translateY": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <a href="#down-section" aria-label="scroll down" class="section-link">
                    <div
                        class="d-flex justify-content-center align-items-center mx-auto rounded-circle fs-30 text-white">
                        <i class="feather icon-feather-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
 
</section> --}}







@if (isset($is_single) && $is_single == 'iya')
    <style>
        @media (max-width: 2500px) {
            section {
                padding-top: 50px;
                padding-bottom: 50px;
            }
        }
    </style>
    <section
        class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0 cover-background background-position-center">
    </section>
@else
    <section
        class="page-title-big-typography bg-dark-gray ipad-top-space-margin xs-py-0 cover-background background-position-center"
        style="background-image: url({{ $header_image }})">
        <div class="opacity-extra-medium bg-gradient-black-green"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center small-screen">
                <div class="col-xl-6 col-lg-7 col-sm-8 position-relative text-center page-title-extra-small"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 400, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <div>
                        <h1 class="text-uppercase mb-15px alt-font text-white opacity-6 fw-500 ls-2px"
                            data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["{{ $title }}"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
                        </h1>
                    </div>
                    <h2 class="m-auto text-white alt-font text-shadow-double-large fw-700 w-90 xl-w-100"
                        data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["{{ $header_text }}"], "duration": 400, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'>
                    </h2>
                </div>
                <div class="down-section text-center"
                    data-anime='{ "translateY": [-50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <a href="#down-section" class="section-link">
                        <div class="text-white">
                            <i class="line-icon-Down icon-medium"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endif

{{ $slot }}



<x-footer></x-footer>
