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
    <!-- Fonts -->
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
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
                    <li class="active">
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
                                class="nav-label">Properties</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-gavel"></i> <span class="nav-label">Leases</span><span
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
                                class="nav-label">Invoices</span></a>
                    </li>
                    <li>
                        <a href="payments.html"><i class="fa fa-credit-card"></i> <span
                                class="nav-label">Payments</span></a>
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
    {{-- @yield('js') --}}
    
<script src="{{ asset('login_css/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{ asset('login_css/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Flot -->
<script src="{{ asset('login_css/js/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{ asset('login_css/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{ asset('login_css/js/plugins/flot/jquery.flot.spline.js')}}"></script>
<script src="{{ asset('login_css/js/plugins/flot/jquery.flot.resize.js')}}"></script>
<script src="{{ asset('login_css/js/plugins/flot/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('login_css/js/plugins/flot/jquery.flot.symbol.js')}}"></script>
<script src="{{ asset('login_css/js/plugins/flot/jquery.flot.time.js')}}"></script>

<!-- Peity -->
<script src="{{ asset('login_css/js/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{ asset('login_css/js/demo/peity-demo.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('login_css/js/inspinia.js')}}"></script>
<script src="{{ asset('login_css/js/plugins/pace/pace.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{ asset('login_css/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>


<!-- EayPIE -->
<script src="{{ asset('login_css/js/plugins/easypiechart/jquery.easypiechart.js')}}"></script>


<script>
    $(document).ready(function () {
        $('.chart').easyPieChart({
            barColor: '#f8ac59',
            //                scaleColor: false,
            scaleLength: 5,
            lineWidth: 4,
            size: 80
        });

        $('.chart2').easyPieChart({
            barColor: '#1c84c6',
            //                scaleColor: false,
            scaleLength: 5,
            lineWidth: 4,
            size: 80
        });

        var data2 = [
            [gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
            [gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
            [gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
            [gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
            [gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
            [gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
            [gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
            [gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
        ];

        var data3 = [
            [gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
            [gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
            [gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
            [gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
            [gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
            [gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
            [gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
            [gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
        ];


        var dataset = [
            {
                label: "Number of orders",
                data: data3,
                color: "#292766",
                bars: {
                    show: true,
                    align: "center",
                    barWidth: 24 * 60 * 60 * 600,
                    lineWidth: 0
                }

            }, {
                label: "Payments",
                data: data2,
                yaxis: 2,
                color: "#FF0000",
                lines: {
                    lineWidth: 1,
                    show: true,
                    fill: true,
                    fillColor: {
                        colors: [{
                            opacity: 0.2
                        }, {
                            opacity: 0.4
                        }]
                    }
                },
                splines: {
                    show: false,
                    tension: 0.6,
                    lineWidth: 1,
                    fill: 0.1
                },
            }
        ];


        var options = {
            xaxis: {
                mode: "time",
                tickSize: [3, "day"],
                tickLength: 0,
                axisLabel: "Date",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Arial',
                axisLabelPadding: 10,
                color: "#d5d5d5"
            },
            yaxes: [{
                position: "left",
                max: 1070,
                color: "#d5d5d5",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: 'Arial',
                axisLabelPadding: 3
            }, {
                position: "right",
                clolor: "#d5d5d5",
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelFontFamily: ' Arial',
                axisLabelPadding: 67
            }
            ],
            legend: {
                noColumns: 1,
                labelBoxBorderColor: "#000000",
                position: "nw"
            },
            grid: {
                hoverable: false,
                borderWidth: 0
            }
        };

        function gd(year, month, day) {
            return new Date(year, month - 1, day).getTime();
        }

        var previousPoint = null, previousLabel = null;

        $.plot($("#flot-dashboard-chart"), dataset, options);

        var mapData = {
            "US": 298,
            "SA": 200,
            "DE": 220,
            "FR": 540,
            "CN": 120,
            "AU": 760,
            "BR": 550,
            "IN": 200,
            "GB": 120,
        };

        $('#world-map').vectorMap({
            map: 'world_mill_en',
            backgroundColor: "transparent",
            regionStyle: {
                initial: {
                    fill: '#e4e4e4',
                    "fill-opacity": 0.9,
                    stroke: 'none',
                    "stroke-width": 0,
                    "stroke-opacity": 0
                }
            },

            series: {
                regions: [{
                    values: mapData,
                    scale: ["#292766", "#008bfa"],
                    normalizeFunction: 'polynomial'
                }]
            },
        });
    });
</script>
</body>
</html>
