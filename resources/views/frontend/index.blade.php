@extends('frontend.layouts.main')


@section('content')
    <div role="main" class="main">

        <section class="section section-height-3 section-with-shape-divider position-relative border-0 m-0"
            data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '120%'}"
            data-image-src="{{ asset('assets/frontend/img/demos/business-consulting-3/backgrounds/background-1.jpg') }}">
            {{-- <img src="{{ asset('assets/frontend/img/demos/business-consulting-3/backgrounds/background-woman.png') }}"
                class="img-fluid position-absolute top-0 right-0 d-none d-md-block appear-animation"
                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100" alt="" /> --}}
            <div class="container pb-5 pb-xl-0 mt-md-3 mb-5">
                <div class="row">
                    <div class="col-md-7 col-lg-12">
                        <h1 class="text-14 font-weight-bold clearfix line-height-1 custom-ws-mobile-wrap ws-nowrap pb-2 mb-3 mb-xl-5 lazyload appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
                            Pakistan's Leading Manufacturers
                        </h1>
                        <h1 class="word-rotator font-weight-semi-bold clip is-full-width mb-2">
                            <span>Vibrant Engineering Provides All Kinds Of</span>
                            <br>
                            <span class="word-rotator-words bg-primary" style="width: 60.686px; overflow: hidden;">
                                <b class="is-hidden">SEALING MACHINES</b>
                                <b class="is-hidden">PACKAGING MACHINES</b>
                                <b class="is-visible">FILLING MACHINES</b>
                                <b class="is-visible">BADGE PRINTERS</b>
                            </span>
                        </h1>
                    </div>
                </div>
                <div class="row pb-5 mb-5">
                    <div class="col-md-7 col-xl-5 pb-5 pb-xl-0 mb-5">
                        {{-- <strong
                            class="d-block font-weight-semibold text-color-dark text-5-5 line-height-4 mb-3 pb-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                            Vibrant Engineering - All Kinds Of
                            <span class="custom-highlight-text-1 font-weight-bold">
                                Packaging Machines & Processing
                                Systems
                            </span></strong> --}}
                        <p class="text-3-5 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="750">
                            Manufacturers of high-end machines with a solid reputation include Vibrant Engineering. It
                            offers services for packaging various products using top-of-the-line, specially created
                            equipment and for selling packaging machines, food processing systems using highly developed and
                            effective equipment, and pharmaceutical line solutions using exceptional built-in features.
                        </p>
                        <a href="#aboutus" data-hash data-hash-offset="0" data-hash-offset-lg="100"
                            class="d-inline-flex align-items-center text-decoration-none appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                            <img width="30" height="30"
                                src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/mouse.svg') }}"
                                alt="" data-icon
                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary me-2'}" />
                            Scroll Down
                        </a>
                    </div>
                </div>
            </div>
            <div class="shape-divider shape-divider-bottom" style="height: 212px;">
                <div class="shape-divider-horizontal-animation shape-divider-horizontal-animation-to-left">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        x="0px" y="0px" viewBox="0 0 1920 212" preserveAspectRatio="xMinYMin">
                        <polygon fill="#F3F3F3" points="0,75 479,161 1357,28 1701,56 1920,26 1920,213 0,212 " />
                        <polygon fill="#FFFFFF" points="0,91 481,177 1358,44 1702,72 1920,42 1920,212 0,212 " />
                    </svg>
                </div>
            </div>
        </section>

        <div class="container" style="margin-top: -310px;">
            <div class="row">
                <div class="col-xl-7 ms-xl-auto">
                    <div class="owl-carousel owl-theme custom-carousel-box-shadow-1 custom-dots-style-1 mb-0"
                        data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 20, 'loop': false, 'nav': false, 'autoplay': true, 'autoplayTimeout': 5000, 'dots': true}"
                        style="height: 398px;">
                        <div>
                            <a class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                <div class="card border-0">
                                    <div class="card-body text-center py-5">
                                        <img width="75" height="75"
                                            src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/blackboard.svg') }}"
                                            alt="" data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                            style="width: 75px; height: 75px;" />
                                        <div class="custom-crooked-line">
                                            <img width="154" height="26"
                                                src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                                alt="" data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                style="width: 154px; height: 26px;" />
                                        </div>
                                        <h2 class="text-5 font-weight-semibold mb-1">Sealing <br> Machines</h2>
                                        <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                                            View
                                            <img width="27" height="27"
                                                src="img/demos/business-consulting-3/icons/arrow-right.svg" alt=""
                                                data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}"
                                                style="width: 27px;" />
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                <div class="card border-0">
                                    <div class="card-body text-center py-5">
                                        <img width="75" height="75"
                                            src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/weight-balance.svg') }}"
                                            alt="" data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                            style="width: 75px; height: 75px;" />
                                        <div class="custom-crooked-line">
                                            <img width="154" height="26"
                                                src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                                alt="" data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                style="width: 154px; height: 26px;" />
                                        </div>
                                        <h2 class="text-5 font-weight-semibold mb-1">Packaging <br> Machines</h2>
                                        <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                                            View
                                            <img width="27" height="27"
                                                src="img/demos/business-consulting-3/icons/arrow-right.svg" alt=""
                                                data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}"
                                                style="width: 27px;" />
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                <div class="card border-0">
                                    <div class="card-body text-center py-5">
                                        <img width="75" height="75"
                                            src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/blackboard.svg') }}"
                                            alt="" data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                            style="width: 75px; height: 75px;" />
                                        <div class="custom-crooked-line">
                                            <img width="154" height="26"
                                                src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                                alt="" data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                style="width: 154px; height: 26px;" />
                                        </div>
                                        <h2 class="text-5 font-weight-semibold mb-1">Filling <br> Machine</h2>
                                        <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                                            View
                                            <img width="27" height="27"
                                                src="img/demos/business-consulting-3/icons/arrow-right.svg" alt=""
                                                data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}"
                                                style="width: 27px;" />
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                <div class="card border-0">
                                    <div class="card-body text-center py-5">
                                        <img width="75" height="75"
                                            src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/weight-balance.svg') }}"
                                            alt="" data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                            style="width: 75px; height: 75px;" />
                                        <div class="custom-crooked-line">
                                            <img width="154" height="26"
                                                src="img/demos/business-consulting-3/icons/infinite-crooked-line.svg"
                                                alt="" data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                style="width: 154px; height: 26px;" />
                                        </div>
                                        <h2 class="text-5 font-weight-semibold mb-1">Badge <br> Printers</h2>
                                        <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                                            View
                                            <img width="27" height="27"
                                                src="img/demos/business-consulting-3/icons/arrow-right.svg" alt=""
                                                data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}"
                                                style="width: 27px;" />
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="aboutus" class="row align-items-xl-center pt-4 mt-5">
                <div class="col-md-10 col-lg-6 mb-5 mb-lg-0">
                    <div class="row row-gutter-sm">
                        <div class="col-6">
                            <img src="{{ asset('assets/frontend/img/demos/business-consulting-3/generic/generic-1.jpg') }}"
                                class="img-fluid box-shadow-5" alt="" />
                        </div>
                        <div class="col-6">
                            <img src="{{ asset('assets/frontend/img/demos/business-consulting-3/generic/generic-2.jpg') }}"
                                class="img-fluid box-shadow-5 mb-4" alt="" />
                            <img src="{{ asset('assets/frontend/img/demos/business-consulting-3/generic/generic-3.jpg') }}"
                                class="img-fluid box-shadow-5" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-4 ps-xl-5">
                    <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                        data-appear-animation="fadeInUpShorter">ABOUT US</h2>
                    <h3 class="text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
                        Processing And Packaging Solutions
                    </h3>
                    <p class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="500">
                        Greetings from Vibrant Engineering. We are your dependable partner for processing and packaging
                        technology in the pharmaceutical and food industries. As a manufacturer of processing and packaging
                        equipment with more than 30 facilities all over Pakistan, we can draw on years of knowledge.
                    </p>
                    <div class="row align-items-center pb-2 mb-4 mb-lg-1 mb-xl-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750">
                        <div class="col-5">
                            <div class="d-flex">
                                <img width="63" height="63" src="img/demos/business-consulting-3/icons/label.svg"
                                    alt="" data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'd-lg-none d-xl-block'}" />
                                <span class="text-3 font-weight-bold text-color-dark pt-2 ms-2">
                                    <strong class="d-block font-weight-bold text-9 mb-2">240+</strong>
                                    Satisfied Clients
                                </span>
                            </div>
                        </div>
                        <div class="col-7">
                            <blockquote class="custom-blockquote-style-1 m-0 pt-1 pb-2">
                                <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse. </p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1000">
                        <a href="{{ route('contact') }}"
                            class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                            data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>
                                Get a Quote
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.partials.brands')

        <section class="section section-height-4 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-5 m-0">
            <div class="shape-divider" style="height: 123px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                    <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
                    <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
                </svg>
            </div>
            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-11 col-xl-10 text-center">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">WHAT WE DO
                        </h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-3 pb-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                            Our Services
                        </h3>
                        <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="750">
                            For both food and non-food applications, our machines—the best in the business—offer efficiency
                            and simplicity. Please have a look at our superb catalogs.
                        </p>
                    </div>
                </div>
                <div class="row row-gutter-sm justify-content-center mb-5 appear-animation"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                    <div class="col-sm-9 col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('services.sealing') }}" class="custom-link-hover-effects text-decoration-none"
                            data-cursor-effect-hover="plus">
                            <div class="card box-shadow-4">
                                <div class="card-img-top position-relative overlay overlay-show">
                                    <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                        <h4 class="font-weight-semibold text-color-light text-6 mb-1">
                                            SEALING MACHINES
                                        </h4>
                                        <div class="custom-crooked-line">
                                            <img width="154" height="26"
                                                src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/infinite-crooked-line.svg') }}"
                                                alt="" data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                style="width: 154px;" />
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/frontend/img/demos/business-consulting-3/services/services-1.jpg') }}"
                                        class="img-fluid" alt="Card Image" />
                                </div>
                                <div class="card-body d-flex align-items-center custom-view-more px-4">
                                    <p class="card-text w-100 mb-0">
                                        View Our Sealing Machines
                                    </p>
                                    <img width="50" height="50" class="w-auto"
                                        src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/arrow-right.svg') }}"
                                        alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                        style="width: 50px;" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-9 col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('services.packaging') }}"
                            class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                            <div class="card box-shadow-4">
                                <div class="card-img-top position-relative overlay overlay-show">
                                    <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                        <h4 class="font-weight-semibold text-color-light text-6 mb-1">
                                            PACKAGING MACHINES
                                        </h4>
                                        <div class="custom-crooked-line">
                                            <img width="154" height="26"
                                                src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/infinite-crooked-line') }}.svg"
                                                alt="" data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                style="width: 154px;" />
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/frontend/img/demos/business-consulting-3/services/services-2.jpg') }}"
                                        class="img-fluid" alt="Card Image" />
                                </div>
                                <div class="card-body d-flex align-items-center custom-view-more px-4">
                                    <p class="card-text w-100 mb-0">
                                        View Our Packaging Machines
                                    </p>
                                    <img width="50" height="50" class="w-auto"
                                        src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/arrow-right.svg') }}"
                                        alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                        style="width: 50px;" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-9 col-md-6 col-lg-4 mb-4">
                        <a href="{{ route('services.filling') }}" class="custom-link-hover-effects text-decoration-none"
                            data-cursor-effect-hover="plus">
                            <div class="card box-shadow-4">
                                <div class="card-img-top position-relative overlay overlay-show">
                                    <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                        <h4 class="font-weight-semibold text-color-light text-6 mb-1">
                                            FILLING MACHINES
                                        </h4>
                                        <div class="custom-crooked-line">
                                            <img width="154" height="26"
                                                src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/infinite-crooked-line') }}.svg"
                                                alt="" data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                style="width: 154px;" />
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/frontend/img/demos/business-consulting-3/services/services-3.jpg') }}"
                                        class="img-fluid" alt="Card Image" />
                                </div>
                                <div class="card-body d-flex align-items-center custom-view-more px-4">
                                    <p class="card-text w-100 mb-0">
                                        View Our Filling Machines
                                    </p>
                                    <img width="50" height="50" class="w-auto"
                                        src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/arrow-right.svg') }}"
                                        alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                        style="width: 50px;" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <a href="{{ route('services.badge') }}" class="custom-link-hover-effects text-decoration-none"
                            data-cursor-effect-hover="plus">
                            <div class="card box-shadow-4">
                                <div class="card-img-top position-relative overlay overlay-show">
                                    <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                        <h4 class="font-weight-semibold text-color-light text-6 mb-1">
                                            BADGE PRINTERS
                                        </h4>
                                        <div class="custom-crooked-line">
                                            <img width="154" height="26"
                                                src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/infinite-crooked-line') }}.svg"
                                                alt="" data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                style="width: 154px;" />
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/frontend/img/demos/business-consulting-3/services/services-4.jpg') }}"
                                        class="img-fluid" alt="Card Image" />
                                </div>
                                <div class="card-body d-flex align-items-center custom-view-more px-4">
                                    <p class="card-text w-100 mb-0">
                                        View Our Badge Printers
                                    </p>
                                    <img width="50" height="50" class="w-auto"
                                        src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/arrow-right.svg') }}"
                                        alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                        style="width: 50px;" />
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <a href="{{ route('sparepart.index') }}" class="custom-link-hover-effects text-decoration-none"
                            data-cursor-effect-hover="plus">
                            <div class="card box-shadow-4">
                                <div class="card-img-top position-relative overlay overlay-show">
                                    <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                        <h4 class="font-weight-semibold text-color-light text-6 mb-1">
                                            SPARE PARTS
                                        </h4>
                                        <div class="custom-crooked-line">
                                            <img width="154" height="26"
                                                src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/infinite-crooked-line') }}.svg"
                                                alt="" data-icon
                                                data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                                style="width: 154px;" />
                                        </div>
                                    </div>
                                    <img src="{{ asset('assets/frontend/img/demos/business-consulting-3/services/services-5.jpg') }}"
                                        class="img-fluid" alt="Card Image" />
                                </div>
                                <div class="card-body d-flex align-items-center custom-view-more px-4">
                                    <p class="card-text w-100 mb-0">
                                        View Our Spare Parts
                                    </p>
                                    <img width="50" height="50" class="w-auto"
                                        src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/arrow-right.svg') }}"
                                        alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                        style="width: 50px;" />
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <a href="{{ route('machines') }}"
                            class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                            data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                            <span>All Machines</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-height-4 section-with-shape-divider position-relative bg-dark border-0 m-0">
            <div class="shape-divider shape-divider-reverse-x z-index-3" style="height: 102px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
                    <polygon fill="#F3F3F3" points="0,65 220,35 562,63 931,10 1410,68 1920,16 1920,103 0,103 " />
                    <polygon fill="#EDEDED" points="0,82 219,51 562,78 931,26 1409,83 1920,32 1920,103 0,103 " />
                </svg>
            </div>
            <div class="position-absolute top-0 left-0 h-100 d-none d-lg-block overlay overlay-show overlay-color-primary"
                data-plugin-parallax data-plugin-options="{'speed': 1.5}"
                data-image-src="{{ asset('assets/frontend/img/demos/business-consulting-3/parallax/parallax-1.jpg') }}"
                style="width: 40%;">
            </div>
            <div class="container position-relative z-index-3 pt-5 mt-5">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="custom-text-background custom-big-font-size-1 text-15 font-weight-bold float-end clearfix line-height-1 lazyload pe-xl-5 me-3 mb-0 d-none d-lg-block"
                            data-bg-src="{{ asset('assets/frontend/img/demos/business-consulting-3/backgrounds/text-background-2.jpg') }}"
                            data-plugin-float-element
                            data-plugin-options="{'startPos': 'top', 'speed': 0.6, 'transition': true, 'horizontal': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            BENEFITS
                        </h2>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">WHY US</h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-medium text-color-light ls-0 mb-3 pb-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                            We Have All The Perfect Reasons To Choose Us
                        </h3>
                        <p class="text-3-5 pb-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="750">
                        </p>
                        <ul class="list ps-0 pe-lg-5 mb-0">
                            <li class="d-flex align-items-start pb-1 mb-3 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                <i
                                    class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                <span class="text-3-5 ps-3">
                                    Our very pleased clients come from well-known businesses using Vibrant Engineering's
                                    extensive equipment for a long time with excellent reviews.
                                </span>
                            </li>
                            <li class="d-flex align-items-start pb-1 mb-3 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1250">
                                <i
                                    class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                <span class="text-3-5 ps-3">
                                    With the help of our digital solutions, you can take back control of your
                                    manufacturing procedures and create transparency for machine and product data wherever
                                    you are.
                                </span>
                            </li>
                            <li class="d-flex align-items-start appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="1500">
                                <i
                                    class="fas fa-check text-color-light text-4 custom-bg-color-grey-1 rounded-circle p-3"></i>
                                <span class="text-3-5 ps-3">
                                    We assist you through the machine's life cycle, from managing
                                    spare parts to digital line
                                    optimization.
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row align-items-center py-4 my-5 mb-lg-0 my-xl-5">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <h2 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4">
                        We Got The Skills That Make Us Unique From our Competitors
                    </h2>
                    <p class="text-3-5 pb-3 mb-4">
                        We provide adaptable equipment to handle a variety of pack styles while pursuing environmentally
                        friendly packaging options.
                    </p>
                    <div class="progress-bars pb-4">
                        <div class="progress-label d-flex justify-content-between">
                            <span class="text-color-dark font-weight-semibold text-2">24/7 Support</span>
                            <span class="text-color-dark font-weight-semibold text-2">90%</span>
                        </div>
                        <div class="progress progress-xs progress-no-border-radius bg-color-light-scale-1 mb-4">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="90%">
                            </div>
                        </div>

                        <hr class="my-0">

                        <div class="progress-label d-flex justify-content-between pt-2">
                            <span class="text-color-dark font-weight-semibold text-2">Proof Checking</span>
                            <span class="text-color-dark font-weight-semibold text-2">80%</span>
                        </div>
                        <div class="progress progress-xs progress-no-border-radius bg-color-light-scale-1 mb-4">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="80%">
                            </div>
                        </div>

                        <hr class="my-0">

                        <div class="progress-label d-flex justify-content-between pt-2">
                            <span class="text-color-dark font-weight-semibold text-2">Guaranteed Work</span>
                            <span class="text-color-dark font-weight-semibold text-2">90%</span>
                        </div>
                        <div class="progress progress-xs progress-no-border-radius bg-color-light-scale-1 mb-4">
                            <div class="progress-bar progress-bar-primary" data-appear-progress-animation="90%">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('assets/frontend/img/demos/business-consulting-3/generic/generic-4.jpg') }}"
                        class="img-fluid" alt="" />
                </div>
            </div>
        </div>

        <section class="section section-height-3 border-0 m-0 lazyload"
            data-bg-src="img/demos/business-consulting-3/backgrounds/background-3.jpg">
            <div class="container py-4">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
                            Our Satisfied Clients
                        </h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold text-color-dark pb-3 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">What People
                            Say</h3>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-11 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="750">
                        <div class="owl-carousel owl-theme custom-nav-style-1 nav-style-1 nav-svg-arrows-1 nav-outside custom-dots-style-2 bg-light box-shadow-4 mb-0"
                            data-plugin-options="{'responsive': {'0': {'items': 1, 'dots': true}, '768': {'items': 1}, '992': {'items': 1, 'nav': true, 'dots': false}, '1200': {'items': 1, 'nav': true, 'dots': false}}, 'loop': false, 'autoHeight': true}">
                            <div class="py-5 px-lg-5">
                                <div class="testimonial testimonial-style-2 px-4 mx-xl-5 my-3">
                                    <img width="40" height="40"
                                        src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/left-quote.svg') }}"
                                        alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                        style="width: 40px;" />
                                    <blockquote>
                                        <p class="text-color-dark text-4 line-height-8 alternative-font-4 mb-0">
                                            We are truly blessed to work with Vibrant Engineering, and their modern
                                            technology makes our work easy. Thank you so much, guys!
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p>
                                            <strong class="font-weight-bold text-5-5 negative-ls-1">

                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="py-5 px-lg-5">
                                <div class="testimonial testimonial-style-2 px-4 mx-xl-5 my-3">
                                    <img width="40" height="40"
                                        src="{{ asset('assets/frontend/img/demos/business-consulting-3/icons/left-quote.svg') }}"
                                        alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary'}"
                                        style="width: 40px;" />
                                    <blockquote>
                                        <p class="text-color-dark text-4 line-height-8 alternative-font-4 mb-0">
                                            Kudos to the team of Vibrant Engineering for providing us with perfect packaging
                                            machines and processing systems. We can be happier, and we will tell everyone
                                            about you guys.
                                        </p>
                                    </blockquote>
                                    <div class="testimonial-author">
                                        <p>
                                            <strong class="font-weight-bold text-5-5 negative-ls-1">

                                            </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-with-shape-divider position-relative bg-dark border-0 m-0">
            <div class="shape-divider shape-divider-reverse-x z-index-3" style="height: 102px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
                    <polygon fill="#F3F3F3" points="0,65 220,35 562,63 931,10 1410,68 1920,16 1920,103 0,103 " />
                    <polygon fill="#EDEDED" points="0,82 219,51 562,78 931,26 1409,83 1920,32 1920,103 0,103 " />
                </svg>
            </div>
            <div class="position-absolute top-0 right-0 overlay overlay-show overlay-color-primary overlay-op-9 h-100 lazyload d-none d-md-block"
                data-bg-src="{{ asset('assets/frontend/img/demos/business-consulting-3/backgrounds/background-2.jpg') }}"
                style="width: 32%; background-size: cover; background-position: center;"></div>
            <div class="container">
                <div class="row align-items-center pt-5 pb-xl-5 mt-5">
                    <div class="col-md-7 col-lg-8 py-4 my-2 ms-md-3 ms-lg-0">
                        <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">GET IN TOUCH
                        </h2>
                        <h3 class="text-9 line-height-3 text-transform-none font-weight-medium text-color-light ls-0 mb-3 pb-1 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                            We Are Waiting for You!
                        </h3>
                        <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="750">
                            Our manufacturers are waiting for you, so all you have to do is fill out the form, and we will
                            join you shortly.
                        </p>
                        <form class="contact-form form-style-4 form-placeholders-light form-errors-light appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                            action="https://www.okler.net/previews/porto/9.8.0/php/contact-form.php" method="POST">
                            <div class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>

                            <div class="row">
                                <div class="form-group col">
                                    <input type="text" value="" data-msg-required="Please enter your name."
                                        maxlength="100" class="form-control text-3 custom-border-color-grey-1 h-auto py-2"
                                        name="name" placeholder="* Full Name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <input type="email" value=""
                                        data-msg-required="Please enter your email address."
                                        data-msg-email="Please enter a valid email address." maxlength="100"
                                        class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="email"
                                        placeholder="* Email Address" required>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col">
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8"
                                        class="form-control text-3 custom-border-color-grey-1 h-auto py-2" name="message" placeholder="* Message"
                                        required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="1250">
                                    <button type="submit"
                                        class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                                        data-loading-text="Loading..." data-cursor-effect-hover="plus"
                                        data-cursor-effect-hover-color="light">
                                        <span>Send Message</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
