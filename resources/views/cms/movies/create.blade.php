@extends('cms.layouts.app')
@section('title', 'Admin - '.env('APP_NAME'))
@section('content')
<div class="page-wrapper">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Create Movies</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
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
                            <form id="form" action="{{ route('cms.movies.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Movie Name</label>
                                    <input required type="text" class="form-control" id="movie_name" value="{{old('movie_name')}}"
                                        name="movie_name">
                                </div>
                                @if ($errors->has('movie_name'))
                                <div class="alert alert-danger">
                                    <li> {{ $errors->first('movie_name') }} </li>
                                </div>
                                @endif

                                <div class="form-group">
                                    <label>Movie Image</label>

                                    <input type="file" class="form-control" id="movie_image" name="movie_image"
                                        value="{{old('movie_image')}}" required>
                                </div>
                                @if ($errors->has('movie_image'))
                                <div class="alert alert-danger">
                                    <li> {{ $errors->first('movie_image') }} </li>
                                </div>
                                @endif

                                <div class="form-group">
                                    <label>Movie Category</label>
                                    <select name="movie_category" class="form-control" id="" required>
                                        <option value="">Select</option>
                                        @forelse ($movie_categories as $movie_categorie)
                                            <option value="{{ $movie_categorie->id }}">{{ $movie_categorie->categories }}</option>
                                        @empty
                                            <option value="" selected>No categories to select.</option>
                                        @endforelse
                                    </select>
                                </div>
                                @if ($errors->has('movie_category'))
                                <div class="alert alert-danger">
                                    <li> {{ $errors->first('movie_category') }} </li>
                                </div>
                                @endif

                                <div class="form-group">
                                    <label>Movie Language</label>
                                    <select name="movie_language" class="form-control" id="" required>
                                        <option value="">Select</option>
                                        @forelse ($movie_languages as $movie_languages)
                                            <option value="{{ $movie_languages->id }}">{{ $movie_languages->language }}</option>
                                        @empty
                                            <option value="" selected>No categories to select.</option>
                                        @endforelse
                                    </select>
                                </div>
                                @if ($errors->has('movie_language'))
                                <div class="alert alert-danger">
                                    <li> {{ $errors->first('movie_language') }} </li>
                                </div>
                                @endif

                                <div class="form-group">
                                    <label>Movie Description</label>
                                    <textarea class="form-control" rows="3" id="movie_description" name="movie_description" minlength="3" maxlength="500">{{ old('others') }}</textarea>
                                </div>
                                @if ($errors->has('movie_description'))
                                <div class="alert alert-danger">
                                    <li> {{ $errors->first('movie_description') }} </li>
                                </div>
                                @endif
                                <br>
                                <button type="submit" id="check" class="btn btn-success waves-effect waves-light m-r-12"
                                    onsubmit="checkbox()">Submit</button>
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
<script>
    function getValues()
        {
            $('#sub').html('')

            $.ajax({
                url: '/getvalues/' + $('#sel1').val(),
                method: "GET",
                success:  function(data){
                    if(data.sub_categories == ''){
                        $('#sub').append(`
                            <option value='null'>No data</option>
                        `)
                    }else{
                    $.each(data.sub_categories, function(id,value){
                        $('#sub').append(`
                            <option value="${value.id}">${value.name}</option>
                        `)
                    })
                    }
                },
                error: function(){
                    alert('Internal Error')
                }

            })
        }

    $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
           }

        })


</script>
@endsection
