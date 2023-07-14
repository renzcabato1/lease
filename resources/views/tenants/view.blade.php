@extends('layouts.header')
@section('css')
    <link href="{{ asset('login_css/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
@endsection
@section('content')

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
                        {{ $tenant->company}}
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
                    <i class="fa fa-play fa-rotate-270"></i> &nbsp;{{ $item->status}}
                </h2>
                <small>{{ $item->company_address}}</small>
            </div>
        </div>
         @endforeach
    </div>

</div>

            {{-- //////// --}}
            <div class="wrapper wrapper-content">
                <div class='row'>
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h3 style="color: #FFF">Tenant Details</h3>
                            </div>
                            <div class="ibox-content">
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
                                                placeholder="{{ $item->trade_name}}" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label>Company</label>
                                            <input type="text" class="form-control" name="company" placeholder="{{ $item->company}}" disabled
                                                required />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Category</label>
                                            <select class="form-control m-b" name="category" disabled required>
                                                <option>{{ $item->category}}</option>
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
                                                <option>{{ $item->status}}</option>
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
                                        <div class="col-md-6">
                                            <label>Account ID</label>
                                            <input type="text" class="form-control" name="account_id"
                                                placeholder="{{ $item->account_id}}" disabled required />
                                        </div>
                                        <div class="col-md-6">
                                            <label>Record Type</label>
                                            <input type="text" class="form-control" name="record_type" placeholder="{{ $item->record_type}}"
                                                disabled required />
                                        </div>
                                    </div>
                                    <div class="row mb-10" style="margin-bottom: 20px;">
                                        <div class="col-md-6">
                                            <label>Personal Title</label>
                                            <input type="text" class="form-control" name="personal_title"
                                                placeholder="{{ $item->personal_title}}" disabled required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="first_name" placeholder="{{ $item->first_name}}" disabled required/>
                                        </div>
                                    </div>
                                    <div class="row mb-10" style="margin-bottom: 20px;">
                                        <div class="col-md-6">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" name="middle_name"
                                                placeholder="{{ $item->middle_name}}" disabled required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="last_name" placeholder="{{ $item->last_name}}" disabled required/>
                                        </div>
                                    </div>
                                    <div class="row mb-10" style="margin-bottom: 20px;">
                                        <div class="col-md-6">
                                            <label>Personal Suffix</label>
                                            <input type="text" class="form-control" name="personal_suffix"
                                                placeholder="{{ $item->personal_suffix}}" disabled required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Customer Group</label>
                                            <input type="text" class="form-control" name="customer_group" placeholder="{{ $item->customer_group}}" disabled required/>
                                        </div>
                                    </div>
                                    <div class="row mb-10" style="margin-bottom: 20px;">
                                        <div class="col-md-6">
                                            <label>Classification Group</label>
                                            <input type="text" class="form-control" name="classification_group"
                                                placeholder="{{ $item->classification_group}}"  disabled required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label>TIN No.</label>
                                            <input type="text" class="form-control" name="tin_no" placeholder="{{ $item->tin_no}}" disabled required/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4><u><b>Personal Information</b></u></h4>
                                        </div>
                                    </div>
                                    <div class="row mb-10" style="margin-bottom: 20px;">
                                        <div class="col-md-6">
                                            <label>Gender</label>
                                            <select class="form-control m-b" name="gender" disabled required>
                                                <option>{{ $item->gender}}</option>
                                                <option>Select Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                                <option>I prefer not to say</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Marital Status</label>
                                            <select class="form-control m-b" name="marital_status" disabled required>
                                                <option>{{ $item->marital_status}}</option>
                                                <option>Select Marital Status</option>
                                                <option>Single</option>
                                                <option>Married</option>
                                                <option>Widowed</option>
                                                <option>Seperated</option>
                                                <option>Divorsed</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-10" style="margin-bottom: 20px;">
                                        <div class="col-md-6">
                                            <label>Age</label>
                                            <input type="date" class="form-control" name="age" placeholder="{{ $item->age}}" disabled required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Citizenship</label>
                                            <input type="text" class="form-control" name="citizenship"
                                                placeholder="{{ $item->citizenship}}" disabled required/>
                                        </div>
                                    </div>
                                    <div class="row mb-10" style="margin-bottom: 20px;">
                                        <div class="col-md-6">
                                            <label>Country</label>
                                            <input type="text" class="form-control" name="country" placeholder="{{ $item->country}}" disabled required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Language</label>
                                            <input type="text" class="form-control" name="language" placeholder="{{ $item->language}}" disabled required/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4><u><b>Misc. Information</b></u></h4>
                                        </div>
                                    </div>
                                    <div class="row mb-10" style="margin-bottom: 20px;">
                                        <div class="col-md-6">
                                            <label>Company Name</label>
                                            <input type="text" class="form-control" name="company_name"
                                                placeholder="{{ $item->company_name}}" disabled required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Company Address</label>
                                            <input type="text" class="form-control" name="company_address"
                                                placeholder="{{ $item->company_address}}" disabled required/>
                                        </div>
                                    </div>
                                    @endforeach
                                </form>
                            </div>
                        </div>
                    </div>

        {{-- //// --}}
        <div class="wrapper wrapper-content">
        <div class='row'>
            <div class="col-lg-12">
                <div class="ibox2 float-e-margins">
                    <div class="ibox-title" id="addresses-details">
                        <h3 style="color: #FFF">Addresses &nbsp;</h3>
                        {{-- <button class="btn btn-success " data-target="#addAddress" data-toggle="modal"
                            type="button"><i class="fa fa-plus"></i>&nbsp;Add</button> --}}
                    </div>

                    <div class="ibox-content">
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
                                        <td>User</td>
                                        <td>1201 St.</td>
                                        <td>Business</td>
                                        <td>Yes</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        {{-- ////// --}}
        <div class='row'>
            <div class="col-lg-12">
                <div class="ibox3 float-e-margins">
                    <div class="ibox-title" id="contact-details">
                        <h3 style="color: #FFF">Contact Information &nbsp;</h3>
                        {{-- <button class="btn btn-success " data-target="#addContact" data-toggle="modal"
                            type="button"><i class="fa fa-plus"></i>&nbsp;Add</button> --}}
                    </div>

                    <div class="ibox-content">
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
                                        <td>User</td>
                                        <td>Phone</td>
                                        <td>90390232</td>
                                        <td></td>
                                        <td>Primary</td>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- ////// --}}
    {{-- @include('tenants.create') --}}
@endsection
