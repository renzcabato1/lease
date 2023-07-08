@extends('layouts.header')
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
                    <h5>Properties <a href='{{url('properties/create')}}'><button class="btn btn-success " type="button"><i class="fa fa-plus"></i>&nbsp;Add Property</button></a></h5>
                  
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                <tr>
                    <th>Property Code</th>
                    <th>Property Name</th>
                    <th>Location</th>
                    <th>Units</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr class="gradeX">
                    <td>0001</td>
                    <td>Victoria Sports 2</td>
                    <td>Quezon City</td>
                    <td class="center">60</td>
                    <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                </tr>
                <tr class="gradeC">
                    <td>0002</td>
                    <td>Victoria Sports Monumento</td>
                    <td>Caloocan City</td>
                    <td class="center">80</td>
                    <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                </tr>
                <tr class="gradeA">
                    <td>0023</td>
                    <td>Victoria de Morato</td>
                    <td>Quezon City</td>
                    <td class="center">80</td>
                    <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                </tr>
                <tr class="gradeA">
                    <td>0343</td>
                    <td>Victoria de Malate</td>
                    <td>Manila City</td>
                    <td class="center">80</td>
                    <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                </tr>
                <tr class="gradeA">
                    <td>0001</td>
                    <td>Victoria de Valenzuela</td>
                    <td>Valenzuela City</td>
                    <td class="center">120</td>
                    <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                </tr>
                <tr class="gradeA">
                    <td>0001</td>
                    <td>Victoria de Makati</td>
                    <td>Makati City</td>
                    <td class="center">100</td>
                    <td><a href="#"><i class="fa fa-check text-navy"></i></a></td>
                </tr>
                </tbody>
                </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('js')
<script src="{{ asset('login_css/js/plugins/dataTables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
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
