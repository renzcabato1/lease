@extends('layouts.header')
@section('css')
    <link href="{{ asset('login_css/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
@endsection
@section('content')
    {{-- //// --}}
    @foreach ($tenants as $tenant)
    <div class="row m-b-lg m-t-lg">
        <div class="col-md-7">
            <div class="profile-image">
                <img src="http://127.0.0.1:8000/images/no_image.png" class="img-circle circle-border m-b-md" alt="profile">
            </div>
            <div class="profile-info">
                <div class="">
                    <div>

                            <h2 class="no-margins">
                                {{ $tenant->company }}
                            </h2>
                            <h4>{{ $tenant->trade_name }}</h4>

                            {{-- <small>7th Floor, Victoria Sports Tower EDSA, Kamuning Brgy, South Triangle, Quezon City</small> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
        <div class="tabs-container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"><i
                            class="fa fa-info-circle"></i>Information</a></li>
                <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false"><i
                            class="fa fa-building"></i>Unit(s)</a></li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    {{-- <div class="panel panel-success">
                        <div class="panel-heading">
                            Contact Information
                        </div> --}}
                    <div class="panel-body">
                        {{-- PUT INFO HERE --}}
                        <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><u><b>Basic Information</b></u><small>
                                            {{-- <button class="btn btn-success " type="button" type="button" id="enableFields"><i class="fa fa-pencil"></i>&nbsp;Edit Tenant</button> --}}
                                        </small></h4>
                                    </div>
                                </div>
                                <div class="row mb-10" style="margin-bottom: 20px;">
                                    <div class="col-md-6">
                                        <label>Trade Name</label>
                                        <input type="text" class="form-control" name="trade_name" readonly
                                            placeholder="{{ $tenant->trade_name }}" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label>Company</label>
                                        <input type="text" class="form-control" name="company"
                                            placeholder="{{ $tenant->company }}" readonly required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Category</label>
                                        <select class="form-control m-b" name="category" readonly required>
                                            <option>{{ $tenant->category }}</option>
                                            <option>Select Category</option>
                                            <option>Food</option>
                                            <option>Wellness</option>
                                            <option>Storage</option>
                                            <option>Office</option>
                                            <option>Hardware</option>
                                            <option>Specialty</option>
                                            <option>Service</option>
                                            <option>Passion</option>
                                            <option>Amusement</option>
                                            <option>Furniture</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Status</label>
                                        <select class="form-control m-b" name="status" readonly required>
                                            <option>{{ $tenant->status }}</option>
                                            <option>Select Status</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><u><b>Customer Information</b></u></h4>
                                    </div>
                                </div>
                                <div class="row mb-10" style="margin-bottom: 20px;">
                                    <div class="col-md-4">
                                        <label>Account ID</label>
                                        <input type="text" class="form-control" name="account_id"
                                            placeholder="{{ $tenant->account_id }}" readonly required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Record Type</label>
                                        <input type="text" class="form-control" name="record_type"
                                            placeholder="{{ $tenant->record_type }}" readonly required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Personal Title</label>
                                        <input type="text" class="form-control" name="personal_title"
                                            placeholder="{{ $tenant->personal_title }}" readonly required />
                                    </div>
                                </div>
                                <div class="row mb-10" style="margin-bottom: 20px;">
                                    <div class="col-md-4">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="first_name"
                                            placeholder="{{ $tenant->first_name }}" readonly required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Middle Name</label>
                                        <input type="text" class="form-control" name="middle_name"
                                            placeholder="{{ $tenant->middle_name }}" readonly required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="last_name"
                                            placeholder="{{ $tenant->last_name }}" readonly required />
                                    </div>
                                </div>
                                <div class="row mb-10" style="margin-bottom: 20px;">
                                    <div class="col-md-3">
                                        <label>Personal Suffix</label>
                                        <input type="text" class="form-control" name="personal_suffix"
                                            placeholder="{{ $tenant->personal_suffix }}" readonly required>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Customer Group</label>
                                        <input type="text" class="form-control" name="customer_group"
                                            placeholder="{{ $tenant->customer_group }}" readonly required />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Classification Group</label>
                                        <input type="text" class="form-control" name="classification_group"
                                            placeholder="{{ $tenant->classification_group }}" readonly required />
                                    </div>
                                    <div class="col-md-3">
                                        <label>TIN No.</label>
                                        <input type="text" class="form-control" name="tin_no"
                                            placeholder="{{ $tenant->tin_no }}" readonly required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><u><b>Personal Information</b></u></h4>
                                    </div>
                                </div>
                                <div class="row mb-10" style="margin-bottom: 20px;">
                                    <div class="col-md-4">
                                        <label>Gender</label>
                                        <select class="form-control m-b" name="gender" readonly required>
                                            <option>{{ $tenant->gender }}</option>
                                            <option>Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>I prefer not to say</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Marital Status</label>
                                        <select class="form-control m-b" name="marital_status" readonly required>
                                            <option>{{ $tenant->marital_status }}</option>
                                            <option>Select Marital Status</option>
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Widowed</option>
                                            <option>Seperated</option>
                                            <option>Divorsed</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Age</label>
                                        <input type="date" class="form-control" name="age"
                                            placeholder="{{ $tenant->age }}" readonly required />
                                    </div>
                                </div>
                                <div class="row mb-10" style="margin-bottom: 20px;">
                                    <div class="col-md-4">
                                        <label>Citizenship</label>
                                        <input type="text" class="form-control" name="citizenship"
                                            placeholder="{{ $tenant->citizenship }}" readonly required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Country</label>
                                        <input type="text" class="form-control" name="country"
                                            placeholder="{{ $tenant->country }}" readonly required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Language</label>
                                        <input type="text" class="form-control" name="language"
                                            placeholder="{{ $tenant->language }}" readonly required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><u><b>Misc. Information</b></u></h4>
                                    </div>
                                </div>
                                <div class="row mb-10" style="margin-bottom: 20px;">
                                    <div class="col-md-4">
                                        <label>Company Name</label>
                                        <input type="text" class="form-control" name="company_name"
                                            placeholder="{{ $tenant->company_name }}" readonly required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Company Address</label>
                                        <input type="text" class="form-control" name="company_address"
                                            placeholder="{{ $tenant->company_address }}" readonly required />
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
                    {{-- Addresses --}}
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Addresses &nbsp;
                            {{-- <a href="{{url('/tenants/add')}}"><button class="btn btn-success " type="button"><i class="fa fa-pencil"></i>&nbsp;Edit/Add Address</button></a> --}}
                        </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover tables">
                                @foreach ($tenants as $tenant)
                                <thead>
                                    <tr>
                                        <th>Name or Description</th>
                                        <th>Address</th>
                                        <th>Purpose</th>
                                        <th>Primary</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $tenant->address_desc}}</td>
                                        <td>{{ $tenant->address}}</td>
                                        <td>{{ $tenant->address_purpose}}</td>
                                        <td>{{ $tenant->address_primary}}</td>
                                    </tr>
                                </thead>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h4><u><b></b></u></h4>
                        </div>
                    </div>
                    {{-- Contact Information --}}
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Contact Information &nbsp;
                                {{-- <a href="{{url('/tenants/add')}}"><button class="btn btn-success " type="button"><i class="fa fa-pencil"></i>&nbsp;Edit/Add Contact</button></a> --}}
                        </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover tables">
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Type</th>
                                        <th>Contact No.</th>
                                        <th>Address</th>
                                        <th>Extension</th>
                                        <th>Primary</th>
                                    </tr>
                                    <tr>
                                        <td>{{ $tenant->contact_desc}}</td>
                                        <td>{{ $tenant->contact_type}}</td>
                                        <td>{{ $tenant->contact_no}}</td>
                                        <td>{{ $tenant->contact_address}}</td>
                                        <td>{{ $tenant->contact_ext}}</td>
                                        <td>{{ $tenant->contact_primary}}</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><u><b></b></u></h4>
                        </div>
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
                                            <td><a href="{{url('/tenants/'.'view/'.'units/'.$tenant->tenant_id)}}" data-toggle="tooltip" data-placement="top" title=" Tenant Unit Details"><i class="fa fa-eye"></i>&nbsp;VIEW</a></td>
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

    {{-- //////////////////////////////////////////////////////////////// --}}
    {{-- <script>
        document.getElementById('enableFields').addEventListener('click', function() {
            const inputs = document.querySelectorAll('input[readonly]');
            const selects = document.querySelectorAll('select[readonly]');
            inputs.forEach(input => input.removeAttribute('readonly'));
            selects.forEach(select => select.removeAttribute('readonly'));
        });
    </script> --}}
    {{-- //////////////////////////////////////////////////////////////// --}}

    @endforeach
@endsection
@section('js')
    <script src="{{ asset('login_css/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('login_css/js/plugins/chosen/chosen.jquery.js') }}"></script>

    <script>
        $(document).ready(function(){


            $('.locations').chosen({width: "100%"});
            $('.tables').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]
            });
        });
    </script>
@endsection
