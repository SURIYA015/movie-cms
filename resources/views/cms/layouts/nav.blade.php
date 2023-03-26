<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" style="line-height: 0px;">
            <a class="navbar-brand" href="#">
                <b>
                    {{-- <img src="{{asset('../admin/logo/logo.png')}}" alt="homepage" class="dark-logo" /> --}}
                    {{-- <img src="{{asset('../assets/images/icon.png')}}" alt="homepage" class="light-logo" /> --}}
                </b>
                <span style="display: block;">
                    <img src="{{ asset('image/logo.png') }}" style="" width="200px" height="auto" alt="homepage" />
                    {{-- <img src="{{asset('img/riskwala-logo.png')}}" width="160" height="50" class="light-logo"
                    alt="homepage" /> --}}
                </span>
            </a>
        </div>

        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link nav-toggler d-block d-sm-none waves-effect waves-dark" href="javascript:void(0)">
                        <i class="ti-menu"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                        href="javascript:void(0)">
                        <i class="icon-menu"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown u-pro">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="hidden-md-down">Admin &nbsp;
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right animated flipInY">
                        {{-- <a href="{{route('changepassword')}}" class="dropdown-item">
                        <i class="fa fa-unlock-alt"></i>
                        Change Password --}}
                        <a href="{{route('changePassword')}}" class="dropdown-item">
                            <i class="fa fa-sign-out"></i> Change Password
                        </a>
                        <a href="{{ url('logout') }}" class="dropdown-item">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                        {{-- <a href="{{route('changePassword')}}" class="dropdown-item">
                        <i class="fa fa-sign-out"></i> Change Password --}}
                        </a>
                        {{-- </a> --}}
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a href="#" aria-expanded="true">
                        <span><i class="fa fa-bar-chart"></i> Statistics</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cms.movies.index') }}" aria-expanded="true">
                        <span><i class="fa fa-bar-chart"></i>Movies</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cms.moviescategories.index') }}" aria-expanded="true">
                        <span><i class="fa fa-bar-chart"></i>Genres</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cms.movieslanguages.index') }}" aria-expanded="true">
                        <span><i class="fa fa-bar-chart"></i>Language</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
