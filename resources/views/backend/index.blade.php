@extends('backend.layouts.main')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">Default </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row second-chart-list third-news-update">
                <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
                    <div>
                        <hr>
                        <h2>Welcome to your dashboard, {{ Auth::user()->name }}</h2>
                        <p>Hope you are doing well!</p>
                        <div class="card o-hidden">
                            <div class="bg-primary b-r-4 card-body">
                                <div class="media static-top-widget">
                                    <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                                    <div class="media-body"><span class="m-0">Total Machines Uploaded</span>
                                        <h4 class="mb-0 counter"></h4><i class="icon-bg"
                                            data-feather="user-plus"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
                    <div class="card gradient-primary o-hidden">
                        <div class="card-body">
                            <div class="setting-dot">
                                <div class="setting-bg-primary date-picker-setting position-set pull-right"><i
                                        class="fa fa-spin fa-cog"></i></div>
                            </div>
                            <div class="default-datepicker">
                                <div class="datepicker-here" data-language="en"></div>
                            </div><span class="default-dots-stay overview-dots full-width-dots"><span
                                    class="dots-group"><span class="dots dots1"></span><span
                                        class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span
                                        class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span
                                        class="dots dots6 dot-small"></span><span
                                        class="dots dots7 dot-small-semi"></span><span
                                        class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">
                                    </span></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
