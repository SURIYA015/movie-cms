@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-3 align-self-center pl-0">
                    <h4 class="text-themecolor ml-0">Statistics</h4>
                </div>
                <div class="col-md-9 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Statistics</li>
                            {{-- <a href="{{ route('admin.create') }}">
                        <button type="button" class="btn btn-info  d-lg-block m-l-15">
                            <i class="fa fa-plus-circle"></i> Create New
                        </button>
                        </a> --}}

                        </ol>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Column -->
                {{-- <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ml-0">Sales</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash">
                                    <img src="{{ asset('/assets/images/dash01.png') }}" alt="">
                                </div>
                                <div class="ml-auto">
                                    <h2 class="text-purple"> <span class="counter">11</span></h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div> --}}

                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ml-0">Users</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash3">
                                    <img src="{{ asset('/assets/images/dash03.png') }}" alt="">

                                </div>
                                <div class="ml-auto">
                                    <h2 class=" text-danger"> <span class="counter">45</span></h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div>

                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ml-0">Total Appointments</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash2">
                                    <img src="{{ asset('/assets/images/dash02.png') }}" alt="">
                                </div>
                                <div class="ml-auto">
                                    <h2 class=" text-success"> <span class="counter">42</span></h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div>

                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ml-0">Appointments Remaining</h5>
                            <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                <div id="sparklinedash4">
                                    <img src="{{ asset('/assets/images/dash04.png') }}" alt="">

                                </div>
                                <div class="ml-auto">
                                    <h2 class="text-info "><span class="counter">15</span></h2>
                                </div>
                            </div>
                        </div>
                        <div id="sparkline8" class="sparkchart"></div>
                    </div>
                </div>

                <!-- Column -->
            </div>

        </div>
        <!-- End Container fluid  -->
    </div>
    <style>
        .bg-color-blue {
            background-color: #03a9f3;
        }

        .bg-color-yellow {
            background-color: #fdb72c;
        }

        .bg-color-green {
            background-color: #17ba89;
        }

        .bg-color-green {
            background-color: #17ba89;
        }

    </style>

@endsection

@section('js')
    <!--Sky Icons JavaScript -->
    <script src="{{ asset('assets/node_modules/skycons/skycons.js') }}"></script>
    <!--morris JavaScript -->
    <script src="{{ asset('assets/node_modules/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('dist/js/dashboard4.js') }}"></script>
@endsection
