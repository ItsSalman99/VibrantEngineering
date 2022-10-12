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
                            <img src="{{ asset($machine->thumbnail) }}" class="box-shadow-4 appear-animation" alt=""
                                data-appear-animation="expandIn" data-appear-animation-duration="600ms" />
                            <div class="position-absolute w-100" style="top: 61%; left: -20%;">
                                <img src="{{ asset($machine->thumbnail) }}" class="box-shadow-4 appear-animation"
                                    width="285" alt="" data-appear-animation="expandIn"
                                    data-appear-animation-delay="300" data-appear-animation-duration="600ms" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 100px;">

            </div>
        </div>

    </div>
@endsection
