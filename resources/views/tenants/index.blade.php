@extends('layouts.header')
@section('css')
    <link href="{{ asset('login_css/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="wrapper wrapper-content">
        <div class='row'>
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h3 style="color: #fff">Tenants &nbsp;
                            {{-- <button class="btn btn-success " data-target="#addProperty" data-toggle="modal"
                            type="button"><i class="fa fa-plus"></i>&nbsp;Add Tenants</button> --}}
                            <a href="{{url('/tenants/add')}}"><button class="btn btn-success " type="button"><i class="fa fa-plus"></i>&nbsp;Add Tenant</button></a>
                        </h3>
                    </div>


                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover tables">
                                <thead>
                                    <tr>
                                        <th>Trade Name</th>
                                        <th>Company</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tenants as $tenant)
                                        <tr>
                                            <td>{{ $tenant->trade_name }}</td>
                                            <td>{{ $tenant->company }}</td>
                                            <td>{{ $tenant->category }}</td>
                                            <td><span class="label label-primary">{{ $tenant->status }}</span></td>
                                            <div class="row">
                                            <td>
                                                {{-- <a href="{{route('view')}}"><i class="fa fa-arrow-down"></i></a> --}}
                                                {{-- <a data-toggle="modal" data-target="#modal-edit-tenants"><i class="fa fa-pencil"></i></a> --}}
                                                <a href="{{url('/tenants/'.$tenant->id)}}" data-toggle="view" data-target="#custumer-info"><i class="fa fa-user"></i></a>
                                                <a data-toggle="modal" data-target="#modal-edit-tenants"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </div>
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
    {{-- @include('tenants.create') --}}

@endsection
@section('js')
    <script src="{{ asset('login_css/js/plugins/dataTables/datatables.min.js') }}"></script>
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
