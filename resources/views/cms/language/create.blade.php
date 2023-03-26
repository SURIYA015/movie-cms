@extends('cms.layouts.app')
@section('title', 'Admin - '.env('APP_NAME'))
@section('content')
<div class="page-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Create Movie Language</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Movie Language</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="card card-body col-lg-6">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form id="form" action="{{route('cms.movieslanguages.store')}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Language</label>
                                    <input required type="text" class="form-control" id="movie_genre" value="{{old('movie_language')}}"
                                        name="movie_language">
                                </div>
                                @if ($errors->has('movie_language'))
                                <div class="alert alert-danger">
                                    <li> {{ $errors->first('movie_language') }} </li>
                                </div>
                                @endif
                                <br>
                                <button type="submit" id="check" class="btn btn-success waves-effect waves-light m-r-12">Submit</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Content -->
    </div>
    <!-- End Container fluid  -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
