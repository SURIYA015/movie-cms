<!DOCTYPE html>
<html lang="en">
<title>
    @yield('title')
</title>

<head>
    @include('cms.layouts.header')
</head>

<body class="skin-blue fixed-layout">
    @include('cms.layouts.nav')
    @yield('content')
    @include('cms.layouts.footer')
    @include('cms.layouts.script')
    @yield('js')
</body>

</html>