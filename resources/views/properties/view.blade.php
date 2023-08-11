@extends('layouts.header')
@section('css')
    <link href="{{ asset('login_css/css/plugins/chosen/bootstrap-chosen.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="wrapper wrapper-content">
        <div class='row'>

            <div class="col-lg-3">
                <div class="">
                    <div class="">
                        <div>
                            <h2 class="no-margins">
                                {{ $properties->name }}
                            </h2>
                            <h5 class="no-margins">
                                {{ $properties->type }}
                            </h5>
                            <h5 class="no-margins">
                                {{ $properties->location }}
                            </h5>
                        </div>
                    </div>
                </div>

                <div style="padding-top: 25px;">
                    <div class="carousel slide" id="carousel2">
                        <ol class="carousel-indicators">
                            <li data-slide-to="0" data-target="#carousel2" class=""></li>
                            <li data-slide-to="1" data-target="#carousel2" class=""></li>
                            <li data-slide-to="2" data-target="#carousel2" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <img alt="image" class="img-responsive" src="http://127.0.0.1:8000/images/bldg1.jpg">
                            </div>
                            <div class="item">
                                <img alt="image" class="img-responsive" src="http://127.0.0.1:8000/images/bldg2.jpg">
                            </div>
                            <div class="item active">
                                <img alt="image" class="img-responsive" src="http://127.0.0.1:8000/images/bldg3.jpg">
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
            <div class="col-lg-9">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <button class="btn btn-success " id="addUnitButton" type="button"><i
                                class="fa fa-plus"></i>&nbsp;Add Unit(s)</button>
                        <button class="btn btn-success " id="toggleButton" type="button"><i
                                class="fa fa-building"></i>&nbsp;Show All Units</button>
                    </div>

                        <!-- Modal for Adding Unit -->
    <div class="modal fade" id="addUnitModal" tabindex="-1" role="dialog" aria-labelledby="addUnitModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="addUnitModalLabel">Add New Unit</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('units.store') }}" method="post">
                        @csrf

                        <div class="row mb-10" style="margin-bottom: 20px;">
                            <div class="col-md-6">
                                <label>Property ID:</label>
                                <input type="text" class="form-control" name="property_id" id="property_id"
                                    placeholder="Enter Property ID"  />
                            </div>
                            <div class="col-md-6">
                                <label>Prev Unit</label>
                                <input type="text" class="form-control" name="prev_unit" id="prev_unit" placeholder="Enter Prev Unit"/>
                            </div>
                        </div>

                        <div class="row mb-10" style="margin-bottom: 20px;">
                            <div class="col-md-6">
                                <label>New Unit</label>
                                <input type="text" class="form-control" name="new_unit" id="new_unit"
                                    placeholder="Enter Unit Name"  />
                            </div>
                            <div class="col-md-6">
                                <label>Space Type</label>
                                <input type="text" class="form-control" name="space_type" id="space_type" placeholder="Enter Space Type"/>
                            </div>
                        </div>

                        <div class="row mb-10" style="margin-bottom: 20px;">
                            <div class="col-md-6">
                                <label>Area Size</label>
                                <input type="text" class="form-control" name="area_size" id="area_size"
                                    placeholder="Enter Area Size"  />
                            </div>
                            <div class="col-md-6">
                                <label>Status</label>
                                <input type="text" class="form-control" name="status" id="status" placeholder="Enter Status"/>
                            </div>
                        </div>

                        <div class="row mb-10" style="margin-bottom: 20px;">
                            <div class="col-md-6">
                                <label>Unit Tagging</label>
                                <input type="text" class="form-control" name="unit_tag" id="unit_tag"
                                    placeholder="Enter Unit Tagging"  />
                            </div>
                        </div>

                        <div class="modal-footer">
                            <div class="col-md-12">
                                <button type='submit' class="btn btn-success" >Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

                    <div class="panel-body">
                        <div class="table-responsive">

                            <style>
                                .inactive-cell {
                                    background-color: #ffcccb;
                                }
                            </style>

                            <table class="table table-striped table-bordered table-hover tables">
                                <thead>
                                    <tr>
                                        <!-- <th>Prev Unit No.</th> -->
                                        <th>Unit No.</th>
                                        <th>Space Type</th>
                                        <th>Area Size</th>
                                        <th>Status</th>
                                        <th>Unit Tagging</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($properties->units as $unit)
                                        <tr class="unitRow {{ strtolower($unit->unit_tag) }}">
                                            <td>{{ $unit->new_unit }}</td>
                                            <td>{{ $unit->space_type }}</td>
                                            <td>{{ $unit->area_size }}</td>
                                            <td>{{ $unit->status }}</td>
                                            <td class="{{ strtolower($unit->unit_tag) . '-cell' }}">
                                                {{ ucfirst(strtolower($unit->unit_tag)) }}</td>
                                            {{-- <td>{{ ucfirst(strtolower($unit->unit_tag)) }}</td> --}}
                                            <td>
                                                @if ($unit->tenant_id)
                                                    <a href="{{ route('tenants.view2', ['tenant_id' => $unit->tenant_id]) }}"
                                                        data-toggle="tooltip" data-placement="top"
                                                        title="View Tenant Details">
                                                        <i class="fa fa-eye"></i>
                                                    </a>&nbsp;&nbsp;
                                                @endif
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
@endsection
@section('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleButton = document.getElementById("toggleButton");
            const unitRows = document.querySelectorAll(".unitRow");

            toggleButton.addEventListener("click", function() {
                unitRows.forEach(row => {
                    if (row.classList.contains("inactive")) {
                        row.style.display = row.style.display === "none" ? "" : "none";
                    }
                });
            });
        });
    </script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Show the modal when the button is clicked
    document.getElementById('addUnitButton').addEventListener('click', function () {
        $('#addUnitModal').modal('show');
    });

    // Display a success message using SweetAlert
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
        });
    @endif
</script>


    <script src="{{ asset('login_css/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('login_css/js/plugins/chosen/chosen.jquery.js') }}"></script>
    <script>
        $(document).ready(function() {


            $('.locations').chosen({
                width: "100%"
            });
            $('.tables').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'ExampleFile'
                    },
                    {
                        extend: 'pdf',
                        title: 'ExampleFile'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
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
