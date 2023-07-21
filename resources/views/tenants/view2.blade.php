@extends('layouts.header')
@section('css')
    <link href="{{ asset('login_css/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
@endsection
@section('content')

    <div class="col-lg-6" style="padding-top: 20px;">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Unit Information</h5>
            </div>
            <div>
                <div class="ibox-content no-padding border-left-right">
                    <img alt="image" class="img-responsive" src="http://127.0.0.1:8000/images/UNITPHO1.png">
                </div>
                <div class="ibox-content profile-content">
                    <h4><strong>Monica Smith</strong></h4>
                    <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                    <h5>
                        About me
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                    </p>

                    <div class="user-button">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
        </div>

        <div class="col-lg-6" style="padding-top: 20px;">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"><i
                                class="fa fa-info-circle"></i>Unit Owner</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false"><i
                                class="fa fa-building"></i>History</a></li>
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            {{-- PUT INFO HERE --}}
                            <form>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="#"><button class="btn btn-success " type="button"><i class="fa fa-exchange"></i>&nbsp;Transfer Unit</button></a>
                                            <h4 style="padding-top: 10px;"><u><b>Basic Information</b></u><small>
                                            </small></h4>
                                        </div>
                                    </div>
                                    <div class="row mb-10" style="margin-bottom: 10px;">
                                        <div class="col-md-6">
                                            <label>Trade Name</label>
                                            <input type="text" class="form-control" name="trade_name" readonly
                                                placeholder=""/>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Company</label>
                                            <input type="text" class="form-control" name="company"
                                                placeholder="" readonly/>
                                        </div>
                                    </div>
                                    <div class="row mb-10" style="margin-bottom: 10px;">
                                        <div class="col-md-6">
                                            <label>Category</label>
                                            <input type="text" class="form-control" name="company"
                                                placeholder="" readonly/>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Status</label>
                                            <input type="text" class="form-control" name="company"
                                            placeholder="" readonly/>
                                        </div>
                                    </div>
                                    <div class="row mb-10" style="margin-bottom: 10px;">
                                        <div class="col-md-6">
                                            <label>Category</label>
                                            <input type="text" class="form-control" name="company"
                                                placeholder="" readonly/>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Status</label>
                                            <input type="text" class="form-control" name="company"
                                            placeholder="" readonly/>
                                        </div>
                                    </div>
                            </form>
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
@endsection
