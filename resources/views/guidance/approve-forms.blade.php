<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Admin | Request Forms</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">

    <!--Dropdown Button Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="adminLTE-3.2/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- overlayScrollbars -->
    <link href="adminLTE-3.2/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" rel="stylesheet">
    <!--iconify icons-->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <!-- Theme style -->
    <link href="adminLTE-3.2/dist/css/adminlte.min.css" rel="stylesheet">

    <style>
        /* For Eye Icons of Home Visitation and Summary Section inside the table */
        .btn-primary.action-btn {
            background-color: transparent;
            border-color: transparent;
        }

        .btn-primary.action-btn i {
            color: #252525;
        }

        /* Hover styles */
        .btn-primary.action-btn:hover {
            background-color: transparent;
        }

        .btn-primary.action-btn:hover i {
            color: #0A0863;
        }

        /********************************/

        /* Widen the Home Visitation modal */
        .Home Visitation-dialog {
            max-width: 90%;
        }

        .Home Visitation-modal {
            margin-left: auto;
            margin-right: auto;
        }

        /* Widens the add signature modal */
        .as-dialog {
            max-width: 50%;
        }

        .as-modal {
            margin-left: auto;
            margin-right: auto;
        }

        /* CLEAR BUTTON */
        .clear-button {
            background-color: #ffffff;
            border-color: #080743;
            color: #080743;
        }

        /* Hover effect */
        .clear-button:hover {
            background-color: #1f1b8e;
            border-color: #1f1b8e;
            color: #ffffff;
        }

        /* Clicked effect */
        .clear-button:active {
            background-color: #060554;
            border-color: #060554;
            color: #ffffff;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        @livewire('left-navigation-livewire')
        @livewire('top-navigation-livewire')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                            <h1 style="font-weight: bold;">Request Forms</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <div class="row">
                <div class="col-12">
                    <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                        <!--SEARCH FEATURE-->
                        <div class="input-group input-group-sm" style="max-width: 20%;">
                            <!--SEARCH INPUT-->
                            <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text">
                            <div class="input-group-append">
                                <button class="btn btn-default" data-target="#table-filter" data-toggle="modal" style="height: 35px;" type="submit">
                                    <i aria-hidden="true" class="fa fa-filter"></i>
                                </button>
                                <!--FILTER MODAL-->
                                <div class="modal fade" id="table-filter">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border: transparent; padding: 10px;">
                                                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form>
                                                <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                                                    <!--MODAL FORM TITLE-->
                                                    <p class="card-title" style="color: #252525; font-size: 16px;">Type of Form</p> <br><br>
                                                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                                                    <div class="row">
                                                        <div class="form-group col-sm-12" style="font-size: 14px; color: #252525;">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Violation Form</button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12" style="font-size: 14px; color: #252525;">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Home Visitation Form</button>
                                                        </div>
                                                    </div>

                                                    <!--STATUS-->
                                                    <div class="row">
                                                        <p style="margin-left: 5px;">Status</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12" style="font-size: 14px; color: #252525;">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Incomplete Request</button>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-bottom: 2rem;">
                                                        <div class="form-group col-sm-12" style="font-size: 14px; color: #252525;">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Pending Request</button>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <!--RESET-->
                                                        <div class="form-group col-sm-6">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #d9d9f3; color: #0A0863;"> Reset</button>
                                                        </div>
                                                        <!--DONE-->
                                                        <div class="form-group col-sm-6">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white;">Done</button>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.card-body -->
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal end-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="align-content: center; margin-left: 1rem; margin-right: 1rem;">





                <div class="col-12">

                    <!--REQUEST LIST-->
                    <div class="col-lg-12">
                        <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; display: flex; flex-direction: row;">
                            <table cellpadding="20px" cellspacing="10px" style="width: 100%;">
                                <tr>
                                    <td rowspan="2" style="width: 10%;">
                                        <img alt="user profile" src="images/user-req.png" style="align-self: center;">
                                    </td>
                                    <td style="vertical-align: top;" style="width: 70%;">
                                        <label style="font-size: 18px; line-height: 5%;">Liam Anderson</label> <br>
                                        <label style="font-size: 14px;">Tuesday, June 20 at 9:00AM</label>
                                    </td>
                                    <td style="vertical-align: top;" style="width: 20%;">
                                        <label style="font-size: 24px; margin-top: 1rem; color: #3C58FF; float: right; ">APPROVED</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 70%;"><label style="font-size: 28px; margin-top: 1rem;">Violation Form</label></td>
                                    <td style="float: ; vertical-align: bottom; width: 20%;">
                                        <button class="btn btn-default" data-target="#read-request-vf" data-toggle="modal" style="float: right;color: white; background-color: #080743; font-size: 14px; width: 80px;">Read</button>
                                    </td>
                                </tr>
                            </table>

                            <div class="inner" style="padding-left: 2rem; padding-bottom: 4%">
                                <div style="display: flex; flex-direction: column;">
                                    <!--READ VIOLATION REQUEST MODAL-->
                                    <div class="modal fade" id="read-request-vf" style="max-width: 100%;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="border: transparent; padding: 10px;">
                                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form>
                                                    <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; max-height: 500px; overflow-y: auto; text-align: left;">
                                                        <!--MODAL TITLE-->
                                                        <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">REQUEST FOR VIOLATION FORM</p> <br><br><br>

                                                        <!--IMPORTANT USER DETAILS FORM SECTION-->
                                                        <!--TYPE OF FORM DROPDOWN BUTTON-->
                                                        <div class="row" style="text-align: left; margin-bottom: 2rem;">
                                                            <div class="form-group col-sm-5" style="font-size: 14px; color: #252525;">
                                                                <label for="input-SL" style="font-weight: normal;">Type of Form</label>
                                                                <div class="input-group-prepend">
                                                                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="input-SL" style="background-color: transparent; color:#252525; font-size: 14px;" type="button">
                                                                        Type of Form
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Violation Form</a>
                                                                        <a class="dropdown-item" href="#">Home Visitation Form</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--NAME OF STUDENT-->
                                                            <div class="form-group col-sm-5" style="color: #252525;">
                                                                <p style="font-size: 14px;">Name of Student</p>
                                                            </div>
                                                            <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                                                                <p style="font-weight: bold;">Val Dela Cruz</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--SCHOOL LEVEL-->
                                                            <div class="form-group col-sm-5" style="color: #252525;">
                                                                <p style="font-size: 14px;">School Level</p>
                                                            </div>
                                                            <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                                                                <p style="font-weight: bold;">Senior High School</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--GRADE LEVEL-->
                                                            <div class="form-group col-sm-5" style=" color: #252525;">
                                                                <p style="font-size: 14px;">Grade Level</p>
                                                            </div>
                                                            <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                                                                <p style="font-weight: bold;">Grade 11</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--TYPE OF DEFENSE-->
                                                            <div class="form-group col-sm-5" style="color: #252525;">
                                                                <p style="font-size: 14px;">Type of Defense</p>
                                                            </div>
                                                            <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                                                                <p style="font-weight: bold;">Physical</p>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="form-group col-sm-12">
                                                                <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white;">Approve</button>
                                                            </div>
                                                        </div>
                                                    </div> <!-- /.card-body -->
                                                </form>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal end-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; display: flex; flex-direction: row; margin-left: 5px; margin-right: 5px;">
                        <table cellpadding="20px" cellspacing="10px" style="width: 100%; ">
                            <tr>
                                <td rowspan="2" style="width: 10%;">
                                    <img alt="user profile" src="images/user-req.png" style="align-self: center;">
                                </td>
                                <td style="vertical-align: top;" style="width: 70%;">
                                    <label style="font-size: 18px; line-height: 5%;">Liam Anderson</label> <br>
                                    <label style="font-size: 14px;">Tuesday, June 20 at 9:00AM</label>
                                </td>
                                <td style="vertical-align: top;" style="width: 20%;">
                                    <label style="font-size: 24px; margin-top: 1rem; color: red; float: right; ">PENDING</label>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 70%;"><label style="font-size: 28px; margin-top: 1rem;">Home Visitation Form</label></td>
                                <td style="float: ; vertical-align: bottom; width: 20%;">
                                    <button class="btn btn-default" data-target="#read-request-hv" data-toggle="modal" style="float: right;color: white; background-color: #080743; font-size: 14px; width: 80px;">Read</button>
                                </td>
                            </tr>
                        </table>

                        <div class="inner" style="padding-left: 2rem; padding-bottom: 4%">
                            <div style="display: flex; flex-direction: column;">
                                <!--READ HOME VISITATION REQUEST MODAL-->
                                <div class="modal fade" id="read-request-hv" style="max-width: 100%;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border: transparent; padding: 10px;">
                                                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form>
                                                <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; max-height: 500px; overflow-y: auto; text-align: left;">
                                                    <!--MODAL TITLE-->
                                                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">REQUEST FOR HOME VISITATION FORM</p> <br><br><br>

                                                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                                                    <!--TYPE OF FORM DROPDOWN BUTTON-->
                                                    <div class="row" style="text-align: left; margin-bottom: 2rem;">
                                                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                            <label for="input-SL" style="font-weight: normal;">Type of Form</label>
                                                            <div class="input-group-prepend">
                                                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="input-SL" style="background-color: transparent; color:#252525; font-size: 14px;" type="button">
                                                                    Type of Form
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Violation Form</a>
                                                                    <a class="dropdown-item" href="#">Home Visitation Form</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <!--NAME OF STUDENT-->
                                                        <div class="form-group col-sm-6" style="color: #252525;">
                                                            <p style="font-size: 14px;">Name of Student</p>
                                                        </div>
                                                        <div class="form-group col-sm-5" style="font-size: 16px; color: #252525;">
                                                            <p style="font-weight: bold;">Val Dela Cruz</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <!--SCHOOL LEVEL-->
                                                        <div class="form-group col-sm-6" style="color: #252525;">
                                                            <p style="font-size: 14px;">School Level</p>
                                                        </div>
                                                        <div class="form-group col-sm-5" style="font-size: 16px; color: #252525;">
                                                            <p style="font-weight: bold;">Senior High School</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <!--GRADE LEVEL-->
                                                        <div class="form-group col-sm-6" style=" color: #252525;">
                                                            <p style="font-size: 14px;">Grade Level</p>
                                                        </div>
                                                        <div class="form-group col-sm-5" style="font-size: 16px; color: #252525;">
                                                            <p style="font-weight: bold;">Grade 11</p>
                                                        </div>
                                                    </div>

                                                    <!--TYPE OF DEFENSE-->
                                                    <div class="row">
                                                        <div class="form-group col-sm-6" style="color: #252525;">
                                                            <p style="font-size: 14px; ">Reason for Home Visitation</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;">
                                                            <p style="font-weight: bold;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-12">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white;">Approve</button>
                                                        </div>
                                                    </div>
                                                </div> <!-- /.card-body -->
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>
    </div>


    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2023.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar">
        <!-- Control sidebar content goes here -->
    </aside>

    <!-- jQuery -->
    <script src="adminLTE-3.2/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="adminLTE-3.2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="adminLTE-3.2/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="adminLTE-3.2/dist/js/adminlte.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
</body>

</html>
