@extends('cms.layouts.app')
@section('title', 'Change Password - ' . env('APP_NAME'))
@section('content')
    <div class="page-wrapper">
        <!-- Container fluid  -->
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Change Password</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>

                            <li class="breadcrumb-item active">Change Password</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- Start Page Content -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-sm-12 col-xs-12">
                                <form id="form" action="{{ route('cms.password.change', $user->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <input required type="email" class="form-control" id="email"
                                            placeholder="Enter Email" name="email"
                                            value="{{ old('email', $user->email) }}" maxlength="40" minlength="6">
                                    </div>
                                    @if ($errors->has('email'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('email') }} </li>
                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Enter Password" name="password" value="{{ old('password') }}"
                                            maxlength="16" minlength="8" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Re-Enter Password" name="password_confirmation"
                                            value="{{ old('password') }}" maxlength="16" minlength="8" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <div class="alert alert-danger">
                                            <li> {{ $errors->first('password') }} </li>
                                        </div>
                                    @endif


                                    <button type="submit" id="check" class="btn btn-success waves-effect waves-light m-r-12"
                                        style="width:100%;" onsubmit="checkbox()">Submit</button>
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
@endsection
