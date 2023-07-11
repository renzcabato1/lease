@extends('layouts.header')

@section('content')

    <head>
        <link href="login_css\css/bootstrap.min.css" rel="stylesheet">
        <link href="login_css\font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="login_css\css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="login_css\css\plugins\steps\jquery.steps.css" rel="stylesheet">
        <link href="login_css\css/animate.css" rel="stylesheet">
        <link href="login_css\css/style.css" rel="stylesheet">
    </head>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Tenants</h5>
                        <div class="ibox-tools">
                            <a data-toggle="modal" class="btn btn-info" href="#modal-form"><i class="fa fa-plus"></i>
                                Add
                                Tenants</a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
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
                                    <tr>
                                        <td>Mang Inasal</td>
                                        <td>Mang Inasal Philippines Inc.</td>
                                        <td>Food</td>
                                        <td class="center">Occupied</td>
                                        <div class="row">
                                            <td>
                                                <a data-toggle="modal" data-target="#modal-view-tenants"><i class="fa fa-arrow-down"></i></a>
                                                <a data-toggle="modal" data-target="#modal-edit-tenants"><i class="fa fa-pencil"></i></a>
                                            </td>
                                        </div>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal-form" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div>
                                <h3 style="background-color: #008bfa;
                                    color: #fff;
                                    padding: 15px;">
                                    New Property
                                </h3>
                            </div>
                            <div class="ibox-content">
                                <div id="wizard">
                                    <h1>Property Details</h1>
                                    <div class="step-content">
                                        <form role="form">
                                            <div class="form-group"><label>Property Name</label> <input type="text"
                                                    placeholder="Enter Property Name" class="form-control"></div>
                                            <div class="form-group"><label>Property Code</label> <input type="text"
                                                    placeholder="Enter Property Code" class="form-control"></div>
                                            <div class="form-group"><label>Location</label> <input type="text"
                                                    placeholder="Enter Location" class="form-control"></div>
                                            <div class="form-group"><label>Owner</label> <input type="text"
                                                    placeholder="Enter Owner" class="form-control"></div>
                                            <div class="form-group"><label>Property Type</label><select
                                                        class="form-control m-b" name="property-type">
                                                        <option>Others</option>
                                                        <option>Apartment</option>
                                                        <option>Residential</option>
                                                        <option>Commercial</option>
                                                        <option>House</option>
                                                        <option>Condominium</option>
                                                    </select>
                                            </div>

                                        </form>
                                    </div>

                                    <h1>Payment Settings</h1>
                                    <div class="step-content">
                                        <form role="form">
                                            <div class="form-group"><label>Property Code</label> <input type="text"
                                                    placeholder="Enter First Name" class="form-control"></div>
                                            <div class="form-group"><label>Property Name</label> <input type="text"
                                                    placeholder="Enter Middle Name (Optional)" class="form-control"></div>
                                            <div class="form-group"><label>Location</label> <input type="text"
                                                    placeholder="Enter Last Name" class="form-control"></div>
                                            <div class="form-group"><label>Units</label> <input type="text"
                                                    placeholder="Enter Phone No." class="form-control"></div>
                                            <div class="form-group"><label>Action</label> <input type="text"
                                                    placeholder="Enter Email" class="form-control"></div>
                                            <div class="form-group"><label>Registration Date</label> <input type="date"
                                                    placeholder="Enter Registration Date" class="form-control"></div>
                                        </form>
                                    </div>

                                    <h1>Third Step</h1>
                                    <div class="step-content">
                                        <form role="form">
                                            <div class="form-group"><label>Property Code</label> <input type="text"
                                                    placeholder="Enter First Name" class="form-control"></div>
                                            <div class="form-group"><label>Property Name</label> <input type="text"
                                                    placeholder="Enter Middle Name (Optional)" class="form-control"></div>
                                            <div class="form-group"><label>Location</label> <input type="text"
                                                    placeholder="Enter Last Name" class="form-control"></div>
                                            <div class="form-group"><label>Units</label> <input type="text"
                                                    placeholder="Enter Phone No." class="form-control"></div>
                                            <div class="form-group"><label>Action</label> <input type="text"
                                                    placeholder="Enter Email" class="form-control"></div>
                                            <div class="form-group"><label>Registration Date</label> <input type="date"
                                                    placeholder="Enter Registration Date" class="form-control"></div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- //View Tenant --}}
    <div class="modal inmodal" id="modal-view-tenants" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true" style="color: #fff">×</span><span class="sr-only">Close</span></button>
                    <h5 class="modal-title">Tenant Details</h5>
                </div>
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form role="form">
                                    <div class="form-group"><label>Trade Name</label><input type="text" disabled="" placeholder="Mang Inasal" class="form-control"></div>
                                    <div class="form-group"><label>Company</label><input type="text" disabled="" placeholder="Mang Inasal Philippines Inc." class="form-control"></div>
                                    <div class="form-group"><label>Category</label><input type="text" disabled="" placeholder="Food" class="form-control"></div>
                                    <div class="form-group"><label>Status</label><input type="text" disabled="" placeholder="Occupied" class="form-control"></div>
                                    <div class="form-group"><label>Prev. Unit No.</label><input type="text" disabled="" placeholder="F01A" class="form-control"></div>
                                    <div class="form-group"><label>New Unit No.</label><input type="text" disabled="" placeholder="101A" class="form-control"></div>
                                    <div class="form-group"><label>Space Type</label><input type="text" disabled="" placeholder="Inline" class="form-control"></div>
                                    <div class="form-group"><label>Area Size</label><input type="text" disabled="" placeholder="137.00" class="form-control"></div>
                                    <div class="form-group"><label>Prev. Unit No.</label><input type="text" disabled="" placeholder="F01A" class="form-control"></div>
                                    <div class="form-group"><label>New Unit No.</label><input type="text" disabled="" placeholder="101A" class="form-control"></div>
                                    <div class="form-group"><label>Space Type</label><input type="text" disabled="" placeholder="Inline" class="form-control"></div>
                                    <div class="form-group"><label>Area Size</label><input type="text" disabled="" placeholder="137.00" class="form-control"></div>
                                    <div class="form-group"><label>Current Start</label><input type="text" disabled="" placeholder="09/01/2023" class="form-control"></div>
                                    <div class="form-group"><label>Current End</label><input type="text" disabled="" placeholder="08/31/2023" class="form-control"></div>
                                    <div class="form-group"><label>Rent</label><input type="text" disabled="" placeholder="945.92" class="form-control"></div>
                                    <div class="form-group"><label>CUSA</label><input type="text" disabled="" placeholder="100.00" class="form-control"></div>
                                    <div class="form-group"><label>Monthly Card</label><input type="text" disabled="" placeholder="109,727.00" class="form-control"></div>
                                    <div class="form-group"><label>Monthly CUSA</label><input type="text" disabled="" placeholder="11,600.00" class="form-control"></div>
                                </form>
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    {{-- //Edit Tenant --}}
    <div class="modal inmodal" id="modal-edit-tenants" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    <i class="fa fa-laptop modal-icon"></i>
                    <h4 class="modal-title">Modal sdsdsdstitle</h4>
                    <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
                </div>
                <div class="modal-body">
                    <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.</p>
                            <div class="form-group"><label>Sample Input</label> <input type="email" placeholder="Enter your email" class="form-control"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="login_css/js/inspinia.js"></script>
    <script src="login_css/js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
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

    <!-- Steps -->
    <script src="login_css/js/plugins/steps/jquery.steps.min.js"></script>

    <!-- Jquery Validate -->
    <script src="login_css/js/plugins/validate/jquery.validate.min.js"></script>


    <script>
        $(document).ready(function() {
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function(event, currentIndex, newIndex) {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex) {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18) {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex) {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function(event, currentIndex, priorIndex) {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18) {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3) {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function(event, currentIndex) {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function(event, currentIndex) {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                errorPlacement: function(error, element) {
                    element.before(error);
                },
                rules: {
                    confirm: {
                        equalTo: "#password"
                    }
                }
            });
        });
    </script>
@endsection
