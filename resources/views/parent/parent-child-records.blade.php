<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Parent | Child's Records</title>
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
                            <h1 style="font-weight: bold;">My Child's Records</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!--MY CHILD'S RECORDS TABLE SECTION-->
            <div class="card" style="margin-left: 2rem; margin-right: 2rem;"> <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
                    <table class="table text-nowrap" style="text-align: left;">
                        <thead style="background-color: #7684B9; color: white;">
                            <tr>
                                <th style="border-right: 1px solid #252525;">Name of Child</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img alt="user" height="30px" src="images/user.png" width="30px"> Val Dela Cruz</td>
                                <td style="text-align: center; font-size: 22px;">
                                    <button class="btn" data-toggle="dropdown" type="button">
                                        <iconify-icon icon="uim:ellipsis-h" style="font-size: 22px;"></iconify-icon>
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="btn btn-primary action-btn dropdown-item" data-target="#ar-modal" data-toggle="modal">Anecdotal Record</a>
                                        <a class="dropdown-item" href="parent individual inventory report.html">Individual Inventory Report</a>
                                        <a class="btn btn-primary action-btn dropdown-item" data-target="#summary-btn" data-toggle="modal">Summary</a>

                                        <!--ANECDOTAL RECORD MODAL-->
                                        <div class="modal fade as-modal" id="ar-modal" style="max-width: 100%;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <table class="table text-nowrap" style="text-align: center;">
                                                        <thead style="background-color: #7684B9; color: white;">
                                                            <tr>
                                                                <th style="border-right: 1px solid #252525;">Date</th>
                                                                <th style="border-right: 1px solid #252525;">Time</th>
                                                                <th style="border-right: 1px solid #252525;">Offenses</th>
                                                                <th style="border-right: 1px solid #252525;">Disciplinary Action</th>
                                                                <th style="border-right: 1px solid #252525;">Student Signature</th>
                                                                <th style="border-right: 1px solid #252525;">Name of Guardian</th>
                                                                <th>Signature</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Val Dela Cruz</td>
                                                                <td>4:00PM</td>
                                                                <td>Physical</td>
                                                                <td></td>
                                                                <td>
                                                                    <!--ANECDOTAL STUDENT INFO EDIT BUTTON-->
                                                                    <a class="btn action-btn" data-target="#add-signature" data-toggle="modal" href="#" style="color: #0A0863;">
                                                                        <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                                                                    </a>

                                                                    <!--ADD SIGNATURE MODAL-->
                                                                    <div class="modal fade as-modal" id="add-signature" style="max-width: 100%;">
                                                                        <div class="modal-dialog as-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header" style="border: transparent; padding: 10px;">
                                                                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <form>
                                                                                    <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto;">
                                                                                        <div class="row">
                                                                                            <div class="col-12">
                                                                                                <!-- SIGNATURE TABS -->
                                                                                                <div class="card" style="border: none; box-shadow: none; outline: none;">
                                                                                                    <div class="card-header d-flex p-0">
                                                                                                        <ul class="nav nav-pills float-left p-2">
                                                                                                            <li class="nav-item">
                                                                                                                <!--DRAW BTN-->
                                                                                                                <a class="nav-link active" data-toggle="tab" href="#draw-mode-tab">
                                                                                                                    <img alt="draw button" height="40" src="images/draw.png" width="40">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                            <li class="nav-item">
                                                                                                                <!--IMAGE BTN-->
                                                                                                                <a class="nav-link" data-toggle="tab" href="#upload-image-tab">
                                                                                                                    <img alt="image button" height="40" src="images/imagebtn.png" style="text-align: left;" width="40">
                                                                                                                </a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div><!-- /.card-header -->
                                                                                                    <div class="card-body">
                                                                                                        <div class="tab-content">
                                                                                                            <div class="tab-pane active" id="draw-mode-tab">
                                                                                                                <div class="form-group col-sm-12" style="border: 1px solid gray; padding-top: 5rem;
                                                                                                                padding-bottom: 5rem;">
                                                                                                                    <label style="color: gray; font-size: 14px; font-weight: 300;">Draw Here</label>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <!--CLEAR & DRAW/ SUBMIT BUTTONS-->
                                                                                                                    <div class="form-group col-sm-6">
                                                                                                                        <button class="btn btn-block btn-default float-right clear-button" style=" width: 10rem; font-size: 14px;" type="button">Clear and draw again</button>
                                                                                                                    </div>
                                                                                                                    <div class="form-group col-sm-6 button-container" style="font-size: 12px; color: #252525;">
                                                                                                                        <button class="btn btn-block btn-primary" style=" width: 10rem; font-size: 14px; background-color: #0A0863; border: transparent;" type="button">Submit</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div><!-- /.tab-pane -->

                                                                                                            <div class="tab-pane" id="upload-image-tab">
                                                                                                                <!--UPLOAD IMAGE TAB-->
                                                                                                                <div class="form-group col-sm-12" style="border: 1px solid gray; padding-top: 5rem;
                                                                                                                padding-bottom: 5rem; display: flex; flex-direction: column; align-items: center;">
                                                                                                                    <div>
                                                                                                                        <label style="color: gray; font-size: 14px; font-weight: 300;">Drag an image here <br> or </label>
                                                                                                                    </div>
                                                                                                                    <div>
                                                                                                                        <button class="btn btn-block btn-primary" style=" width: 8rem; font-size: 12px; background-color: #0A0863; border: transparent;" type="button">Choose Image</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="row">
                                                                                                                    <!--SUBMIT BUTTON-->
                                                                                                                    <div class="form-group col-sm-12" style="font-size: 12px; color: #252525;">
                                                                                                                        <button class="btn btn-block btn-primary" style=" font-size: 14px; background-color: #0A0863; border: transparent;" type="button">Submit</button>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div><!-- /.tab-pane -->
                                                                                                        </div><!-- /.tab-content -->
                                                                                                    </div><!-- /.card-body -->
                                                                                                </div><!-- ./card -->
                                                                                            </div><!-- /.col -->
                                                                                        </div><!-- /.row -->
                                                                                    </div> <!-- /.card-body -->
                                                                                </form>
                                                                            </div><!-- /.modal-content -->
                                                                        </div><!-- /.modal-dialog -->
                                                                    </div><!-- /.modal end-->
                                                                </td>

                                                                <td style="text-align: center;">Amelia Dela Cruz</td>
                                                                <td style="text-align: center;">
                                                                    <a class="btn action-btn" data-target="#add-signature" data-toggle="modal" href="#" style="color: #0A0863;">
                                                                        <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-end -->
                                        <!------------------------------------------>
                                        <!--VIEW SUMMARY MODAL-->
                                        <div class="modal fade" id="summary-btn" style="max-width: 100%;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="border: transparent; padding: 10px;">
                                                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form>
                                                        <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                                                            <!--MODAL TITLE-->
                                                            <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">SUMMARY</p> <br><br><br>

                                                            <div style="display: flex; flex-direction: column;">
                                                                <div class="input-group-prepend">
                                                                    <p class="card-title" style="font-size: 18px; color: #0A0863; font-weight: bold; margin-bottom: 1rem;">Student Information</p>
                                                                </div>
                                                            </div>
                                                            <!--IMPORTANT USER DETAILS FORM SECTION-->
                                                            <div class="row">
                                                                <!--NAME-->
                                                                <div class="form-group col-sm-6" style="font-size: 12px; color: #252525;">
                                                                    <p class="card-title">Name</p>
                                                                </div>
                                                                <div class="form-group col-sm-6" style="font-size: 12px; color: #252525;">
                                                                    <p class="card-title" style="font-weight: bold;">Kimwel Beller</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <!--LRN-->
                                                                <div class="form-group col-sm-6" style="font-size: 12px; color: #252525;">
                                                                    <p class="card-title">LRN</p>
                                                                </div>
                                                                <div class="form-group col-sm-6" style="font-size: 12px; color: #252525;">
                                                                    <p class="card-title" style="font-weight: bold;">0215752152025</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <!--School Level-->
                                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                                    <p class="card-title">School Level</p>
                                                                </div>
                                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                                    <p class="card-title" style="font-weight: bold;">Senior High School</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <!--Grade Level-->
                                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                                    <p class="card-title">Grade Level</p>
                                                                </div>
                                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                                    <p class="card-title" style="font-weight: bold;">Grade 11</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <!--NO OF VIOLATIONS-->
                                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                                    <p class="card-title">No. of Violations</p>
                                                                </div>
                                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                                    <p class="card-title" style="font-weight: bold;">1</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <!--NO OF HOME VISITATION FORMS-->
                                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                                    <p class="card-title">No. of Home Visitation <br> Forms</p>
                                                                </div>
                                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                                    <p class="card-title" style="font-weight: bold;">0</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <!--NO OF VIOLATIONS-->
                                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                                    <p class="card-title">No. of Violations Forms</p>
                                                                </div>
                                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                                    <p class="card-title" style="font-weight: bold;">1</p>
                                                                </div>
                                                            </div><br><br>
                                                            <!---------PIE CHART VIOLATIONS----------->
                                                            <div class="input-group-prepend">
                                                                <p class="card-title" style="font-size: 18px; color: #252525; font-weight: bold; margin-bottom: 1rem;">Total Offenses</p>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="card" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
                                                                        <!--Violation PieChart-->
                                                                        <div class="tab-content p-0">
                                                                            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;margin-top: 1rem;"></canvas>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- /.card-body -->
                                                    </form>
                                                </div>
                                            </div>
                                        </div><!-- /.modal-end -->
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
            </div><!-- /.card table -->
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
