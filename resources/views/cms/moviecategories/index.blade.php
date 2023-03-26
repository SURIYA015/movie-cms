@extends('cms.layouts.app')
@section('title', 'Admin - ' . env('APP_NAME'))
@section('content')
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles ">
                <div class="col-md-2 align-self-center pl-0">
                    <h4 class="text-themecolor ml-0">Movies Genres</h4>
                </div>
                <div class="">
                    <a href="{{route('cms.moviescategories.create')}}" class="btn btn-info">
                        <i class="fa fa-plus-circle"></i>
                        Add Movie Genres
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
                            <th>Genres Name</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($moviecategories as $key=>$moviecategorie)
                            <tr>
                                <td>
                                    <span>{{$moviecategorie->categories}}</span>
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
