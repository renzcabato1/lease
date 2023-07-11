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
                        <h5>Properties</h5>
                        <div class="ibox-tools">
                            <a data-toggle="modal" class="btn btn-info" href="#modal-form"><i class="fa fa-building"></i>
                                Add
                                Properties</a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example">
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
                                    <tr>
                                        <td>0001</td>
                                        <td>Victoria Sports 2</td>
                                        <td>Quezon City</td>
                                        <td class="center">120</td>
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
