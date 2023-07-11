<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/icon.png')}}">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <link href="{{ asset('login_css/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('login_css/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('login_css/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('login_css/css/style.css') }}" rel="stylesheet">
    @yield('css')
    <style>
        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url("{{ asset('login_css/img/loader.gif') }}") 50% 50% no-repeat white;
            opacity: .8;
            background-size: 120px 120px;
        }

    </style>
    <!-- Fonts -->
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="loader" style="display:none;" class="loader">
    </div>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation" style="margin-bottom: 0">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <img alt="image" class="img-circle" style='width:50px;' src="{{asset('images/no_image.png')}}" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{auth()->user()->name}}</strong>
                                    </span> <span class="text-muted text-xs block"><b
                                            class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="{{url('profile')}}">Profile</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            <img alt="image" class="img-circle" style='width:50px;' src="{{asset('images/no_image.png')}}" />
                        </div>
                    </li>
                    <!-- //sidebar -->
                    <li>
                    {{-- <li class="active">     --}}
                        <a href="{{url('/home')}}"><i class="fa fa-th-large"></i> <span
                                class="nav-label">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{url('/prospects')}}"><i class="fa fa-users"></i></i> <span
                                class="nav-label">Prospects</span></a>
                    </li>
                    <li>
                        <a href="{{url('/tenants')}}"><i class="fa fa-user-plus"></i> <span
                                class="nav-label">Tenants</span></a>
                    </li>
                    <li>
                        <a href="{{url('/properties')}}"><i class="fa fa-building"></i> <span
                                class="nav-label">Inventory</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gavel"></i> <span class="nav-label">Contracts</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/commercial')}}"><i class="fa fa-building"></i>Commercial</a></li>
                            <li><a href="{{url('/residential')}}"><i class="fa fa-home"></i>Residential</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="utilities.html"><i class="fa fa-wrench"></i> <span
                                class="nav-label">Utilities</span></a>
                    </li>
                    <li>
                        <a href="invoices.html"><i class="fa fa-file-text-o"></i> <span
                                class="nav-label">SOA/Billing</span></a>
                    </li>
                    <li>
                        <a href="payments.html"><i class="fa fa-credit-card"></i> <span
                                class="nav-label">Collection</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-exclamation"></i> <span class="nav-label">Reports</span><span
                                class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#">Report 01</a></li>
                            <li><a href="#">Report 02</a></li>
                            <li><a href="#">Report 03</a></li>
                            <li><a href="#">Report 04</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                class="fa fa-bars"></i> </a>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a href="{{ route('logout') }}" onclick="logout(); show();">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </nav>
            </div>
            @yield('content')
            <div class="footer">
                <div>
                    <strong>@Copyright</strong> NSJBI &copy; {{date('Y')}}
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('login_css/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{ asset('login_css/js/bootstrap.min.js')}}"></script>
    @yield('js')
    <script>
        function show() {
            document.getElementById("loader").style.display = "block";
        }

        function logout() {
            event.preventDefault();
            document.getElementById('logout-form').submit();
        }
    </script>

</body>
</html>
