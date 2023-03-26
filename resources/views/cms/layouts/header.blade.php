<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="{{ config('app.name') }}">
<meta name="author" content="{{ config('app.name') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- <!-- Favicon icon --> --}}
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/fv.ico')}}">
<!--icon-->
{{-- <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/icon/favicon/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/icon/favicon/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/icon/favicon/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('assets/images/icon/favicon/site.webmanifest')}}"> --}}
<title></title>
<!-- page css -->
<link href="{{ asset('dist/css/pages/login-register-lock.css') }}" rel="stylesheet">
<link href="{{ asset('../assets/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
<!-- style CSS -->

<link href="{{ asset('/dist/css/custom.css') }}" rel="stylesheet">
<link href="{{ asset('/dist/css/style.min.css') }}" rel="stylesheet">
<!-- Dashboard 1 Page CSS -->
<!-- <link href="{{ asset('/dist/css/pages/dashboard1.css') }}" rel="stylesheet"> -->
<link href="{{ asset('/dist/css/pages/dashboard4.css') }}" rel="stylesheet">

{{-- axios --}}
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.16/css/bootstrap-multiselect.css"
    integrity="sha512-DJ1SGx61zfspL2OycyUiXuLtxNqA3GxsXNinUX3AnvnwxbZ+YQxBARtX8G/zHvWRG9aFZz+C7HxcWMB0+heo3w=="
    crossorigin="anonymous" />
{{-- <script src="https://unpkg.com/axios/dist/axios.min.js"></script> --}}
{{-- Taginput --}}
<link href="{{ asset('/assets/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}" rel="stylesheet" />
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

<link href="{{ asset('../assets/node_modules/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"
    integrity="sha256-ENFZrbVzylNbgnXx0n3I1g//2WeO47XxoPe0vkp3NC8=" crossorigin="anonymous" />
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>
<script src="{{ asset('assets/node_modules/bootstrap-select/bootstrap-select.min.js') }}" type="text/javascript">
</script>
{{-- <script type="text/javascript" src="/assets/node_modules/multiselect/js/jquery.multi-select.js" defer></script> --}}
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.16/css/bootstrap-multiselect.css" integrity="sha512-DJ1SGx61zfspL2OycyUiXuLtxNqA3GxsXNinUX3AnvnwxbZ+YQxBARtX8G/zHvWRG9aFZz+C7HxcWMB0+heo3w==" crossorigin="anonymous" /> --}}
{{-- <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet"> --}}
<link href="{{ asset('assets/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('dist/css/style.min.css') }}" rel="stylesheet">
<!-- Dashboard 1 Page CSS -->
<link href="{{ asset('dist/css/pages/dashboard4.css') }}" rel="stylesheet">

<!-- <link rel="stylesheet" href=""> -->
<link href="{{ asset('dist/css/cms.css') }}" rel="stylesheet">
