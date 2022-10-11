@extends('frontend.layouts.main')


@section('extra-css')
@endsection

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
                                        data-appear-animation="maskUp" data-appear-animation-delay="1200">
                                        Filling Machines
                                    </h1>
                                </div>
                            </div>
                            <div class="col-md-12 align-self-center">
                                <div class="overflow-hidden">
                                    <ul class="custom-breadcrumb-style-1 breadcrumb breadcrumb-light custom-font-secondary d-block text-center custom-ls-1 text-5 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1450">
                                        <li class="text-transform-none"><a href="demo-architecture-2.html"
                                                class="text-decoration-none">Home</a></li>
                                        <li class="text-transform-none active">Filling Machines</li>
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

                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="1500">FILLING MACHINES</h2>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="1700">FILLING MACHINES</h3>
                        </div>
                        <img src="img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 appear-animation"
                            data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1900" alt="" />
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="2300">
                            <div class="row row-gutter-sm px-0 image-gallery sort-destination" data-sort-id="portfolio"
                                data-total-pages="3">
                                @forelse ($machines as $machine)
                                    <div class="col-sm-6 col-md-4 isotope-item design-planning">
                                        <div class="portfolio-item mb-3 pb-1">
                                            <a href="{{ route('machines.detail', ['id' => $machine->id]) }}">
                                                <div
                                                    class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons border-radius-0">
                                                    <div class="thumb-info-wrapper border-radius-0">
                                                        <img src="{{ asset($machine->thumbnail) }}"
                                                            class="img-fluid border-radius-0" alt="">
                                                        <div class="thumb-info-action flex-column align-items-center">
                                                            <h4
                                                                class="text-color-light font-weight-bold line-height-2 text-6 ls-0 mb-0">
                                                                {{ $machine->name }}
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @empty
                                    <div
                                        style="margin-top: 100px; border: 2px solid #eee; border-radius: 10px; padding: 20px">
                                        <h1 style="font-weight: bold;">
                                            No Machines Here!!
                                        </h1>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin-bottom: 70px;">
                    {{ $machines->links() }}
                </div>
            </div>
        </div>

    </div>
@endsection
