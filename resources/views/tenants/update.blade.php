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
                    @foreach ($tenants as $tenant)
                        <h2 class="no-margins">
                            {{ $tenant->company }}
                        </h2>
                        <h4>{{ $tenant->trade_name }}</h4>
                    @endforeach
                        {{-- <small>7th Floor, Victoria Sports Tower EDSA, Kamuning Brgy, South Triangle, Quezon City</small> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<form method='post' action='{{url('/tenants')}}' onsubmit='show();'  enctype="multipart/form-data">
    {{ csrf_field() }}
    @foreach ($tenants as $item)
        <div class="row">
            <div class="col-md-12">
                <h4><u><b>Basic Information</b></u><small>
                </small></h4>
            </div>
        </div>
        <div class="row mb-10" style="margin-bottom: 20px;">
            <div class="col-md-6">
                <label>Trade Name</label>
                <input type="text" class="form-control" name="trade_name" readonly
                    placeholder="{{ $item->trade_name }}" />
            </div>
            <div class="col-md-6">
                <label>Company</label>
                <input type="text" class="form-control" name="company"
                    placeholder="{{ $item->company }}" readonly />
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Category</label>
                <select class="form-control m-b" name="category" readonly>
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
                <select class="form-control m-b" name="status" readonly>
                    <option>{{ $item->status }}</option>
                    <option>Select Status</option>
                    <option>Active</option>
                    <option>Inactive</option>
                </select>
            </div>
        </div>
        <button class="btn btn-success " type="button" type="button" id="enableFields"><i class="fa fa-pencil"></i>&nbsp;Edit Tenant</button>
        <button type='submit'  class="btn btn-primary" >Submit</button>
</form>
@endforeach

    <script>
        document.getElementById('enableFields').addEventListener('click', function() {
            const inputs = document.querySelectorAll('input[readonly]');
            const selects = document.querySelectorAll('select[readonly]');
            inputs.forEach(input => input.removeAttribute('readonly'));
            selects.forEach(select => select.removeAttribute('readonly'));
        });
    </script>
@endsection
