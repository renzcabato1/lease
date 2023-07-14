@extends('layouts.header')
@section('css')
    <link href="{{ asset('login_css/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
@endsection
@section('content')
    {{-- //// --}}

    <div class="row m-b-lg m-t-lg">
        <div class="col-md-7">
            <div class="profile-image">
                <img src="http://127.0.0.1:8000/images/no_image.png" class="img-circle circle-border m-b-md" alt="profile">
            </div>
            <div class="profile-info">
                <div class="">
                    <div>
                        {{-- @foreach ($tenants as $tenant)
                    <h2 class="no-margins">
                        {{ $tenant->company}}
                    </h2>
                    <h4>{{ $tenant->trade_name }}</h4>
                    @endforeach --}}
                        @foreach ($tenants as $tenant)
                            <h2 class="no-margins">
                                {{ $tenant->company }}
                            </h2>
                            <h4>{{ $tenant->trade_name }}</h4>
                        @endforeach
                        <small>
                            There are many variations of passages of Lorem Ipsum available, but the majority
                            have suffered alteration in some form Ipsum available.
                        </small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            @foreach ($tenants as $item)
                <div class="ibox">
                    <div class="ibox-content">
                        <h2 class="text-success">
                            <i class="fa fa-play fa-rotate-270"></i> &nbsp;{{ $item->status }}
                        </h2>
                        <small>{{ $item->company_address }}</small>
                    </div>
                </div>
            @endforeach
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
                            @foreach ($tenants as $item)
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4><u><b>Basic Information</b></u></h4>
                                    </div>
                                </div>
                                <div class="row mb-10" style="margin-bottom: 20px;">
                                    <div class="col-md-6">
                                        <label>Trade Name</label>
                                        <input type="text" class="form-control" name="trade_name" disabled
                                            placeholder="{{ $item->trade_name }}" required />
                                    </div>
                                    <div class="col-md-6">
                                        <label>Company</label>
                                        <input type="text" class="form-control" name="company"
                                            placeholder="{{ $item->company }}" disabled required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Category</label>
                                        <select class="form-control m-b" name="category" disabled required>
                                            <option>{{ $item->category }}</option>
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
                                        <select class="form-control m-b" name="status" disabled required>
                                            <option>{{ $item->status }}</option>
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
                                            placeholder="{{ $item->account_id }}" disabled required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Record Type</label>
                                        <input type="text" class="form-control" name="record_type"
                                            placeholder="{{ $item->record_type }}" disabled required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Personal Title</label>
                                        <input type="text" class="form-control" name="personal_title"
                                            placeholder="{{ $item->personal_title }}" disabled required />
                                    </div>
                                </div>
                                <div class="row mb-10" style="margin-bottom: 20px;">
                                    <div class="col-md-4">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" name="first_name"
                                            placeholder="{{ $item->first_name }}" disabled required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Middle Name</label>
                                        <input type="text" class="form-control" name="middle_name"
                                            placeholder="{{ $item->middle_name }}" disabled required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" name="last_name"
                                            placeholder="{{ $item->last_name }}" disabled required />
                                    </div>
                                </div>
                                <div class="row mb-10" style="margin-bottom: 20px;">
                                    <div class="col-md-3">
                                        <label>Personal Suffix</label>
                                        <input type="text" class="form-control" name="personal_suffix"
                                            placeholder="{{ $item->personal_suffix }}" disabled required>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Customer Group</label>
                                        <input type="text" class="form-control" name="customer_group"
                                            placeholder="{{ $item->customer_group }}" disabled required />
                                    </div>
                                    <div class="col-md-3">
                                        <label>Classification Group</label>
                                        <input type="text" class="form-control" name="classification_group"
                                            placeholder="{{ $item->classification_group }}" disabled required />
                                    </div>
                                    <div class="col-md-3">
                                        <label>TIN No.</label>
                                        <input type="text" class="form-control" name="tin_no"
                                            placeholder="{{ $item->tin_no }}" disabled required />
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
                                        <select class="form-control m-b" name="gender" disabled required>
                                            <option>{{ $item->gender }}</option>
                                            <option>Select Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>I prefer not to say</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Marital Status</label>
                                        <select class="form-control m-b" name="marital_status" disabled required>
                                            <option>{{ $item->marital_status }}</option>
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
                                            placeholder="{{ $item->age }}" disabled required />
                                    </div>
                                </div>
                                <div class="row mb-10" style="margin-bottom: 20px;">
                                    <div class="col-md-4">
                                        <label>Citizenship</label>
                                        <input type="text" class="form-control" name="citizenship"
                                            placeholder="{{ $item->citizenship }}" disabled required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Country</label>
                                        <input type="text" class="form-control" name="country"
                                            placeholder="{{ $item->country }}" disabled required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Language</label>
                                        <input type="text" class="form-control" name="language"
                                            placeholder="{{ $item->language }}" disabled required />
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
                                            placeholder="{{ $item->company_name }}" disabled required />
                                    </div>
                                    <div class="col-md-4">
                                        <label>Company Address</label>
                                        <input type="text" class="form-control" name="company_address"
                                            placeholder="{{ $item->company_address }}" disabled required />
                                    </div>
                                </div>
                            @endforeach
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
                            Addresses
                        </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover tables">
                                <thead>
                                    <tr>
                                        <th>Name or Description</th>
                                        <th>Address</th>
                                        <th>Purpose</th>
                                        <th>Primary</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
                    {{-- Contact Information --}}
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Contact Information
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
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
                        <strong>Donec quam felis</strong>

                        <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the
                            stalks, and grow familiar with the countless indescribable forms of the insects
                            and flies, then I feel the presence of the Almighty, who formed us in his own image, and the
                            breath </p>

                        <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of
                            souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                            sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a
                            single stroke at the present moment; and yet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- //// --}}
    <div class="wrapper wrapper-content">
        <div class='row'>
        </div>
    </div>
    {{-- ////// --}}
    {{-- @include('tenants.create') --}}
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
