@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles ">
                <div class="col-md-1 align-self-center pl-0">
                    <h4 class="text-themecolor ml-0">Movies</h4>
                </div>
                <div class="">
                    <a href="{{route('cms.movies.create')}}" class="btn btn-info">
                        <i class="fa fa-plus-circle"></i>
                        Add Movies
                    </a>
                </div>
                <div class="col align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active">Movies</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="table-responsive card orders-table">

                <table class="table table-striped footable" style="text-align:center;">
                    <thead>
                        <tr>
                            <th>Movie Name</th>
                            <th>Movie Image</th>
                            <th>Movie language</th>
                            <th>Movie Categories</th>
                            <th>Movie Rating</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($moviedetails as $key=>$moviedetail)
                            <tr>
                                <td>
                                    <span>{{$moviedetail->movie_name}}</span>
                                </td>
                                <td>
                                    <span>
                                        <img src="{{ $moviedetail->movie_image }}" width='80'
                                        height='80' />
                                    </span>
                                </td>
                                <td>
                                    <span>{{$moviedetail->languages()->first()->language}}</span>
                                </td>
                                <td>
                                    <span>{{$moviedetail->categories()->first()->categories}}</span>
                                </td>
                                <td>
                                    <span>{{$moviedetail->movie_rating}}</span>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger">Delete
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No Data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
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
