@extends('frontend.layouts.main')

@section('content')
    <div role="main" class="main">

        <section
            class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 lazyload"
            data-bg-src="img/demos/business-consulting-3/backgrounds/background-5.jpg"
            style="background-size: cover; background-position: center;">
            <div class="container pb-5 my-3">
                <div class="row mb-4">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-color-dark text-10">{{ $machine->name }}</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="demo-business-consulting-3.html">Home</a></li>
                            <li class="active">
                                {{ $machine->name }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                    <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
                    <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
                </svg>
            </div>
        </section>

        <div class="container pt-3 mt-4">
            <div class="row mb-5">
                <div class="col-lg-7">
                    <div class="">
                        {!! $machine->description !!}
                    </div>
                </div>
                <div class="col-10 col-lg-4 ms-auto pt-4 pt-5 pt-lg-4 pb-5">
                    <div class="cascading-images-wrapper p-0 mt-5 mb-5">
                        <div class="cascading-images position-relative">
                            <img src="{{ asset($machine->thumbnail) }}"
                                class="box-shadow-4 appear-animation" alt="" data-appear-animation="expandIn"
                                data-appear-animation-duration="600ms" />
                            <div class="position-absolute w-100" style="top: 61%; left: -20%;">
                                <img src="{{ asset($machine->thumbnail) }}"
                                    class="box-shadow-4 appear-animation" width="285" alt=""
                                    data-appear-animation="expandIn" data-appear-animation-delay="300"
                                    data-appear-animation-duration="600ms" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-gutter-sm pt-4 pt-sm-0">
                <div class="col-md-8 col-lg-9 mb-5 mb-md-0">
                    <div class="accordion custom-accordion-style-1 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="250" id="accordion1">
                        <div class="card card-default">
                            <div class="card-header" id="collapse1HeadingOne">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse1One" aria-expanded="false"
                                        aria-controls="collapse1One">
                                        1 - Why Choose Porto?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1One" class="collapse" aria-labelledby="collapse1HeadingOne"
                                data-bs-parent="#accordion1">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis
                                        sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus
                                        massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit
                                        amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet
                                        condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse1HeadingTwo">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse1Two" aria-expanded="false"
                                        aria-controls="collapse1Two">
                                        2 - Cras a elit sit amet leo accumsan?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1Two" class="collapse" aria-labelledby="collapse1HeadingTwo"
                                data-bs-parent="#accordion1">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis
                                        sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus
                                        massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit
                                        amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet
                                        condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse1HeadingThree">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse1Three" aria-expanded="false"
                                        aria-controls="collapse1Three">
                                        3 - Hel officitur felis ultricis nan?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1Three" class="collapse" aria-labelledby="collapse1HeadingThree"
                                data-bs-parent="#accordion1">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis
                                        sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus
                                        massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit
                                        amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet
                                        condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse1HeadingFour">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse1Four" aria-expanded="false"
                                        aria-controls="collapse1Four">
                                        4 - Wuspaisse hendreirit vehicula leo?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1Four" class="collapse" aria-labelledby="collapse1HeadingFour"
                                data-bs-parent="#accordion1">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis
                                        sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus
                                        massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit
                                        amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet
                                        condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse1HeadingFive">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse1Five" aria-expanded="false"
                                        aria-controls="collapse1Five">
                                        5 - Lintegers aliquet ullamcorper dollor, quis sollic tudin?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1Five" class="collapse" aria-labelledby="collapse1HeadingFive"
                                data-bs-parent="#accordion1">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis
                                        sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus
                                        massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit
                                        amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet
                                        condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse1HeadingSix">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse1Six" aria-expanded="false"
                                        aria-controls="collapse1Six">
                                        6 - Lintegers aliquet ullamcorper dollor, quis sollic tudin?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1Six" class="collapse" aria-labelledby="collapse1HeadingSix"
                                data-bs-parent="#accordion1">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis
                                        sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus
                                        massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit
                                        amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet
                                        condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header" id="collapse1HeadingSeven">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse1Seven" aria-expanded="false"
                                        aria-controls="collapse1Seven">
                                        5 - Lintegers aliquet ullamcorper dollor, quis sollic tudin?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1Seven" class="collapse" aria-labelledby="collapse1HeadingSeven"
                                data-bs-parent="#accordion1">
                                <div class="card-body">
                                    <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis
                                        sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus
                                        massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit
                                        amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet
                                        condim vel, facilisis quis sapien.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 text-center text-md-start">
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="500">
                        <h3 class="font-weight-semibold text-color-dark text-transform-none text-5-5 mb-3">More About Us
                        </h3>
                        <p class="pb-1 mb-2">Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium
                            blandit. Vestibulum luctus laoreet lacinia. </p>
                        <span class="d-flex align-items-center justify-content-center justify-content-md-start pb-2 mb-3">
                            <span>
                                <img width="25" height="25" src="img/demos/business-consulting-3/icons/phone.svg"
                                    alt="Phone Icon" data-icon
                                    data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-dark'}" />
                            </span>
                            <a class="text-color-dark text-color-hover-primary text-decoration-none font-weight-semibold text-3-5 ms-2"
                                href="tel:1234567890">(800) 123-4567</a>
                        </span>
                        <a href="demo-business-consulting-3-contact.html"
                            class="btn btn-dark custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5 mb-3"
                            data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Contact
                                Us</span></a>

                        <hr class="my-4">
                    </div>
                    <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="750">
                        <h3 class="font-weight-semibold text-color-dark text-transform-none text-5-5 pt-2 mb-3">Ready to
                            Start?</h3>
                        <p class="pb-1 mb-3">Curabitur vulputate posuere tortor luctus vulputate laoreet pretium blandit.
                        </p>
                        <a href="demo-business-consulting-3-contact.html"
                            class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                            data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Get a
                                Quote</span></a>
                    </div>
                </div>
            </div>
            <div style="margin-top: 100px;">

            </div>
        </div>

    </div>
@endsection
