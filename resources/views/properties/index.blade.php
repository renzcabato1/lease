@extends('layouts.header')
@section('css')
<link href="{{ asset('login_css/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Properties</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{count($properties)}}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Total / Available Units</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{count($units)}}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Residential</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{count($units->where('type','Residential'))}}</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Commercial</h5>
                </div>
                <div class="ibox-content">
                    <h1 class="no-margins">{{count($units->where('type','Commercial'))}}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class='row'>
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Properties <button class="btn btn-success "  data-target="#addProperty" data-toggle="modal" type="button"><i class="fa fa-plus"></i>&nbsp;Add Property</button></h5>

                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover tables" >
                <thead>
                <tr>
                    <th>Property Code</th>
                    <th>Property Name</th>
                    <th>Property Type</th>
                    <th>Location</th>
                    <th>Units</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($properties as $property)
                        <tr >
                            <td>{{$property->code}}</td>
                            <td>{{$property->name}}</td>
                            <td>{{$property->type}}</td>
                            <td>{{$property->location}}</td>
                            <td>{{count($property->units)}}</td>
                            <td>
                                <a href="{{url('/properties/'.'view/'.$property->id)}}" data-toggle="tooltip" data-placement="top" title="View Property Details"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;
                                {{-- <a href="{{url('/properties/'.'delete/'.$property->id)}}" data-toggle="tooltip" data-placement="top" title="Delete Property"><i class="fa fa-trash" style="color: #FF0000"></i></a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@include('properties.create')
@endsection
@section('js')
<script src="{{ asset('login_css/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{ asset('login_css/js/plugins/chosen/chosen.jquery.js') }}"></script>
<script>
    $(document).ready(function(){


        $('.locations').chosen({width: "100%"});
        $('.tables').DataTable({
            pageLength: 25,
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
