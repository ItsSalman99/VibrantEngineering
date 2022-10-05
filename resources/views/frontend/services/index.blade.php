@extends('frontend.layouts.main')


@section('content')
    <div role="main" class="main">

        <section class="custom-page-header-1 page-header page-header-modern page-header-lg border-0 z-index-1 my-0"
            style="background-color: #107bc1;">
            <div class="custom-page-header-1-wrapper overflow-hidden">
                <div class="custom-bg-grey-1 py-5 appear-animation" data-appear-animation="maskUp"
                    data-appear-animation-delay="800">
                    <div class="container py-3 my-3">
                        <div class="row">
                            <div class="col-md-12 align-self-center p-static text-center">
                                <div class="overflow-hidden mb-2">
                                    <h1 class="font-weight-black text-12 mb-0 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1200">Services</h1>
                                </div>
                            </div>
                            <div class="col-md-12 align-self-center">
                                <div class="overflow-hidden">
                                    <ul class="custom-breadcrumb-style-1 breadcrumb breadcrumb-light custom-font-secondary d-block text-center custom-ls-1 text-5 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1450">
                                        <li class="text-transform-none"><a href="demo-architecture-2.html"
                                                class="text-decoration-none">Home</a></li>
                                        <li class="text-transform-none active">Services</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="custom-page-wrapper pt-5 pb-1">
            <div class="spacer py-4 my-5"></div>
            <div class="container container-xl-custom">
                <div class="row">
                    <div class="col">
                        <p class="custom-font-tertiary text-5 line-height-4 mb-4 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est
                            consectetur.</p>
                        <p class="text-3-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="1700">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="row row-gutter-sm justify-content-center">
                    <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1900">
                        <a href="demo-architecture-2-services-detail.html" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-radius-0">
                                <div class="card-body text-center p-5 mb-4">
                                    <img width="75" height="75"
                                        src="{{ asset('assets/frontend/img/demos/architecture-2/icons/house-plant.svg') }}"
                                        alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-3 mb-4 pb-3'}" />
                                    <h2 class="text-color-dark font-weight-bold line-height-1 text-6-5 mb-3">
                                        Ceiling Machines
                                    </h2>
                                    <p class="mb-0">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra
                                        erat orci.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="2100">
                        <a href="demo-architecture-2-services-detail.html" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-radius-0">
                                <div class="card-body text-center p-5 mb-4">
                                    <img width="75" height="75"
                                        src="{{ asset('assets/frontend/img/demos/architecture-2/icons/sofa.svg') }}"
                                        alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-3 mb-4 pb-3'}" />
                                    <h2 class="text-color-dark font-weight-bold line-height-1 text-6-5 mb-3">
                                        Packaging Machines
                                    </h2>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra
                                        erat orci.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="2300">
                        <a href="demo-architecture-2-services-detail.html" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-radius-0">
                                <div class="card-body text-center p-5 mb-4">
                                    <img width="75" height="75"
                                        src="{{ asset('assets/frontend/img/demos/architecture-2/icons/wallpaper.svg') }}"
                                        alt="" data-icon
                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-3 mb-4 pb-3'}" />
                                    <h2 class="text-color-dark font-weight-bold line-height-1 text-6-5 mb-3">
                                        Filling Machines
                                    </h2>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra
                                        erat orci.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="200">
                        <a href="demo-architecture-2-services-detail.html" class="text-decoration-none">
                            <div class="card custom-card-style-1 border-radius-0">
                                <div class="card-body text-center p-5 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                        fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z" />
                                        <path
                                            d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z" />
                                    </svg>
                                    <h2 class="text-color-dark font-weight-bold line-height-1 text-6-5 mb-3">
                                        Badge Printers
                                    </h2>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra
                                        erat orci.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <section class="section section-height-3 bg-primary border-0 m-0">
                <div class="container container-xl-custom">
                    <div class="row align-items-center justify-content-center text-center text-xl-start">
                        <div class="col-md-8 col-xl-9 mb-4 mb-xl-0 appear-animation"
                            data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250">
                            <h2 class="text-color-default font-weight-semibold positive-ls-3 text-4 mb-0">WE'RE HERE TO
                                HELP</h2>
                            <h3 class="text-transform-none text-color-light font-weight-black line-height-2 text-9 mb-0">
                                Let's Talk About Your New Project, We Can Do It!</h3>
                        </div>
                        <div class="col-xl-3 text-xl-end appear-animation" data-appear-animation="fadeInRightShorterPlus"
                            data-appear-animation-delay="500">
                            <a href="#"
                                class="btn btn-light custom-btn-style-1 font-weight-bold text-color-dark text-3 px-5 py-3">CONTACT
                                US</a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
@endsection
