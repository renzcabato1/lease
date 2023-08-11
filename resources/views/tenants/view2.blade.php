@extends('layouts.header')
@section('css')
    <link href="{{ asset('login_css/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
@endsection
@section('content')
@foreach ($tenants as $tenant)

<div class="col-lg-6" style="padding-top: 20px;">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Unit Photos</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content ">
                            <div class="carousel slide" id="carousel2">
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" data-target="#carousel2" class=""></li>
                                    <li data-slide-to="1" data-target="#carousel2" class=""></li>
                                    <li data-slide-to="2" data-target="#carousel2" class="active"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item">
                                        <img alt="image" class="img-responsive" src="http://127.0.0.1:8000/images/no_image1.png">
                                        <div class="carousel-caption">
                                            <p>Victoria Tower View-01</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img alt="image" class="img-responsive" src="http://127.0.0.1:8000/images/no_image1.png">
                                        <div class="carousel-caption">
                                            <p>Victoria Tower View-02</p>
                                        </div>
                                    </div>
                                    <div class="item active">
                                        <img alt="image" class="img-responsive" src="http://127.0.0.1:8000/images/no_image1.png">
                                        <div class="carousel-caption">
                                            <p>Victoria Tower View-03</p>
                                        </div>
                                    </div>
                                </div>
                                <a data-slide="prev" href="#carousel2" class="left carousel-control">
                                    <span class="icon-prev"></span>
                                </a>
                                <a data-slide="next" href="#carousel2" class="right carousel-control">
                                    <span class="icon-next"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


    <div class="col-lg-6" style="padding-top: 50px;">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Unit Details</h5>
            </div>
            <div>
                <div class="ibox-content profile-content">
                    <h4><strong>{{ $tenant->trade_name }}</strong></h4>
                    {{-- <p><i class="fa fa-map-marker"></i> {{ $tenant->address }}</p> --}}

                    <table class="table medium m-b-xs">
                        <tbody>
                        <tr>
                            <td>
                                <strong>Prev. Unit:</strong>{{ $tenant->prev_unit }}
                            </td>
                            <td>
                                <strong>New Unit No.:</strong>{{ $tenant->unit_no }}
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <strong>Space Type:</strong>{{ $tenant->space_type }}
                            </td>
                            <td>
                                <strong>Area Size:</strong>{{ $tenant->area_size }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <strong>Property:</strong>
                            </td>
                            <td>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
        </div>

        <div class="col-lg-12" style="padding-top: 20px;">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"><i
                                class="fa fa-info-circle"></i>Lesee</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false"><i
                                class="fa fa-building"></i>History</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            {{-- PUT INFO HERE --}}
                        <h3>Basic Information</h3>
                        <table class="table midium m-b-xs">
                        <tbody>
                        <tr>
                            <td>
                                <strong>Property:</strong>
                            </td>
                            <td>
                                <strong>Trade Name:</strong> {{ $tenant->trade_name }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Company:</strong> {{ $tenant->company }}
                            </td>
                            <td>
                                <strong>Category:</strong> {{ $tenant->category }}
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>Status:</strong> {{ $tenant->status }}
                            </td>
                            <td>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                        </div>
                        {{-- </div> --}}

                        <div class="row">
                            <div class="col-md-12">
                                <h4><u><b></b></u></h4>
                            </div>
                        </div>


                </div>
                    {{-- //TAB 2 --}}
                    <div id="tab-2" class="tab-pane">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4><u><b></b></u></h4>
                                </div>
                            </div>
                            {{-- Addresses --}}
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover tables">
                                        <thead>
                                            <tr>
                                                {{-- <th>Prev Unit No.</th>
                                                <th>New Unit No.</th>
                                                <th>Space Type</th>
                                                <th>Area Size</th>
                                                <th>Current Start</th>
                                                <th>Current End</th>
                                                <th>Rent</th>
                                                <th>CUSA</th>
                                                <th>Monthly Rent</th>
                                                <th>Monthly CUSA</th> --}}
                                                <th>Unit No.</th>
                                                <th>Property</th>
                                                <th>Space Type</th>
                                                <th>Area Size</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><a href="#" data-toggle="tooltip" data-placement="top" title=" Tenant Unit Details"><i class="fa fa-eye"></i>&nbsp;VIEW</a></td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <h4><u><b></b></u></h4>
                                </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><u><b></b></u></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class='row'>
            </div>
        </div>
@endforeach
@endsection
