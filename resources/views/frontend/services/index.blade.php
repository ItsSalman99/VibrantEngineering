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
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500">
                            Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est
                            consectetur. Lorem ipsum dolor sit amet consectetur, adipisicing elit. A quos provident quas
                            corporis, ab ea aliquid illum et totam eum doloremque cum ullam at non obcaecati neque incidunt
                            nesciunt facere?
                            <br><br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, nihil impedit quo minus
                            repellat expedita! Maxime odit cum magnam distinctio facere ut fugit amet quae numquam natus
                            sapiente, consequuntur cupiditate!
                            <br><br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis veniam nihil quia quas
                            obcaecati architecto assumenda similique temporibus, eum quis delectus magnam nesciunt a
                            recusandae debitis dignissimos provident ad omnis.
                        </p>
                        <hr>
                        <p class="text-3-5 mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="1700">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
                <div class="row row-gutter-sm justify-content-center">
                    @foreach ($categories as $category)
                        <div class="col-md-6 col-lg-6 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="1900">
                            <a href="#" class="text-decoration-none">
                                <div class="card custom-card-style-1 border-radius-0">
                                    <div class="card-body text-center p-5 mb-4">
                                        <img width="75" height="75"
                                            src="{{ asset('assets/frontend/img/demos/architecture-2/icons/house-plant.svg') }}"
                                            alt="" data-icon
                                            data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-3 mb-4 pb-3'}" />
                                        <h2 class="text-color-dark font-weight-bold line-height-1 text-6-5 mb-3">
                                            {{ $category->name }}
                                        </h2>
                                        <br><br>
                                        <a href="{{ route('services.'.strtolower(strtok($category->name, " "))) }}" style="color: #fff!important;"
                                            class="btn btn-primary  font-weight-semibold text-3-5 btn-px-3 py-2 ws-nowrap ms-4 d-none d-lg-block">
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
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
