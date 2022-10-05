@extends('frontend.layouts.main')


@section('extra-css')
@endsection

@section('content')
    <div role="main" class="main">

        <section
            class="custom-page-header-1 page-header page-header-modern page-header-lg border-0 z-index-1 my-0" style="background-color: #107bc1;">
            <div class="custom-page-header-1-wrapper overflow-hidden">
                <div class="custom-bg-grey-1 py-5 appear-animation" data-appear-animation="maskUp"
                    data-appear-animation-delay="800">
                    <div class="container py-3 my-3">
                        <div class="row">
                            <div class="col-md-12 align-self-center p-static text-center">
                                <div class="overflow-hidden mb-2">
                                    <h1 class="font-weight-black text-12 mb-0 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1200">Machines</h1>
                                </div>
                            </div>
                            <div class="col-md-12 align-self-center">
                                <div class="overflow-hidden">
                                    <ul class="custom-breadcrumb-style-1 breadcrumb breadcrumb-light custom-font-secondary d-block text-center custom-ls-1 text-5 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1450">
                                        <li class="text-transform-none"><a href="demo-architecture-2.html"
                                                class="text-decoration-none">Home</a></li>
                                        <li class="text-transform-none active">Machines</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="custom-page-wrapper pt-5 pb-1">
            <div class="container container-xl-custom pt-5 mt-5">
                <div class="row py-5 mb-4">
                    <div class="col text-center position-relative">
                        <div class="position-absolute transform3dx-n50 left-50pct z-index-0 appear-animation"
                            data-appear-animation="fadeIn" data-appear-animation-delay="2000" style="top: 100px;">
                            <h2
                                class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-1 font-weight-black opacity-1 mb-0">
                                MACHINES
                            </h2>
                        </div>
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="1500">ALL MACHINES</h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="1700">MACHINES</h3>
                        </div>
                        <img src="img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 appear-animation"
                            data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1900" alt="" />
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2300">
                            <div class="row row-gutter-sm px-0 image-gallery sort-destination"
                                data-sort-id="portfolio" data-total-pages="3">
                                <div class="col-sm-6 col-md-4 isotope-item design-planning">
                                    <div class="portfolio-item mb-3 pb-1">
                                        <a href="demo-architecture-2-projects-detail.html">
                                            <div
                                                class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons border-radius-0">
                                                <div class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/frontend/img/machines/1.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <div class="thumb-info-action flex-column align-items-center">
                                                        <h4
                                                            class="text-color-light font-weight-bold line-height-2 text-6 ls-0 mb-0">
                                                            Project Name</h4>
                                                        <p class="font-weight-semibold text-color-grey text-2 mb-0">DESIGN
                                                            AND PLANNING</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 isotope-item interior-design">
                                    <div class="portfolio-item mb-3 pb-1">
                                        <a href="demo-architecture-2-projects-detail.html">
                                            <div
                                                class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons border-radius-0">
                                                <div class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/frontend/img/machines/2.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <div class="thumb-info-action flex-column align-items-center">
                                                        <h4
                                                            class="text-color-light font-weight-bold line-height-2 text-6 ls-0 mb-0">
                                                            Project Name</h4>
                                                        <p class="font-weight-semibold text-color-grey text-2 mb-0">DESIGN
                                                            AND PLANNING</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 isotope-item exterior-design">
                                    <div class="portfolio-item mb-3 pb-1">
                                        <a href="demo-architecture-2-projects-detail.html">
                                            <div
                                                class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons border-radius-0">
                                                <div class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/frontend/img/machines/3.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <div class="thumb-info-action flex-column align-items-center">
                                                        <h4
                                                            class="text-color-light font-weight-bold line-height-2 text-6 ls-0 mb-0">
                                                            Project Name</h4>
                                                        <p class="font-weight-semibold text-color-grey text-2 mb-0">DESIGN
                                                            AND PLANNING</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 isotope-item construction-drawings">
                                    <div class="portfolio-item mb-3 pb-1">
                                        <a href="demo-architecture-2-projects-detail.html">
                                            <div
                                                class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons border-radius-0">
                                                <div class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/frontend/img/machines/4.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <div class="thumb-info-action flex-column align-items-center">
                                                        <h4
                                                            class="text-color-light font-weight-bold line-height-2 text-6 ls-0 mb-0">
                                                            Project Name</h4>
                                                        <p class="font-weight-semibold text-color-grey text-2 mb-0">DESIGN
                                                            AND PLANNING</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 isotope-item construction-drawings">
                                    <div class="portfolio-item mb-3 pb-1">
                                        <a href="demo-architecture-2-projects-detail.html">
                                            <div
                                                class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons border-radius-0">
                                                <div class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/frontend/img/machines/5.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <div class="thumb-info-action flex-column align-items-center">
                                                        <h4
                                                            class="text-color-light font-weight-bold line-height-2 text-6 ls-0 mb-0">
                                                            Project Name</h4>
                                                        <p class="font-weight-semibold text-color-grey text-2 mb-0">DESIGN
                                                            AND PLANNING</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 isotope-item design-planning">
                                    <div class="portfolio-item mb-3 pb-1">
                                        <a href="demo-architecture-2-projects-detail.html">
                                            <div
                                                class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons border-radius-0">
                                                <div class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/frontend/img/machines/6.png') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <div class="thumb-info-action flex-column align-items-center">
                                                        <h4
                                                            class="text-color-light font-weight-bold line-height-2 text-6 ls-0 mb-0">
                                                            Project Name</h4>
                                                        <p class="font-weight-semibold text-color-grey text-2 mb-0">DESIGN
                                                            AND PLANNING</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center appear-animation" data-appear-animation="fadeInUpShorter">
                    <div id="loadMoreBtnWrapper" class="row text-center mt-3">
                        <div class="col">
                            <div id="loadMoreLoader" class="load-more-loader">
                                <div class="bounce-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                            <button id="loadMore"
                                class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3 mb-5">LOAD
                                MORE+
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
