<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Teacher | Students</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="adminLTE-3.2/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!--iconify icons-->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <!-- Theme style -->
    <link href="adminLTE-3.2/dist/css/adminlte.min.css" rel="stylesheet">

    <style>
        /* For Eye Icons of Anecdotal and Summary Section inside the table */
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

        /* Widen the anecdotal modal */
        .anecdotal-dialog {
            max-width: 90%;
        }

        .anecdotal-modal {
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
                            <h1 style="font-weight: bold;">Students</h1>
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
                                <button class="btn btn-default" data-target="#table-filter" data-toggle="modal" type="submit">
                                    <i aria-hidden="true" class="fa fa-filter"></i>
                                </button>
                                <!--TABLE FILTER MODAL-->
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
                                                    <p class="card-title" style="color: #252525; font-size: 16px;">School Level</p> <br><br>

                                                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                                                    <div class="row">
                                                        <!--Junior High-->
                                                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Junior High School</button>
                                                        </div>
                                                        <!--Senior High-->
                                                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Senior High School</button>
                                                        </div>
                                                    </div>

                                                    <div class="dropdown-divider"></div>

                                                    <div class="row">
                                                        <p style="margin-left: 5px;">Grade Level</p>
                                                    </div>

                                                    <div class="row">
                                                        <!--Grade 7-->
                                                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 7</button>
                                                        </div>
                                                        <!--Grade 8-->
                                                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 8</button>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <!--Grade 9-->
                                                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 9</button>
                                                        </div>
                                                        <!--Grade 10-->
                                                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 10</button>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <!--Grade 11-->
                                                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 11</button>
                                                        </div>
                                                        <!--Grade 12-->
                                                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 12</button>
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
                                                </div> <!-- /.modal-body -->
                                            </form>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal-end -->
                            </div><!-- /.input-group-append-->
                        </div><!-- /.input-group -->
                    </div><!-- /.card-tools-->
                </div><!-- /.col -->
            </div><!-- /.row -->

            <!--PROFILING TABLE SECTION-->
            <div class="card" style="margin-left: 2rem; margin-right: 2rem;"> <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
                    <table class="table text-nowrap" style="text-align: center;">
                        <thead style="background-color: #7684B9; color: white;">
                            <tr>
                                <th style="border-right: 1px solid #252525;">ID</th>
                                <th style="border-right: 1px solid #252525;">Name</th>
                                <th style="border-right: 1px solid #252525;">School Level</th>
                                <th style="border-right: 1px solid #252525;">Grade Level</th>
                                <th style="border-right: 1px solid #252525;">Anecdotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Kim Beller</td>
                                <td>Junior High School</td>
                                <td>Grade 7</td>
                                <td>
                                    <a class="btn btn-primary action-btn" data-target="#anecdotal-btn" data-toggle="modal" href="#">
                                        <i aria-hidden="true" class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
            </div> <!-- /.card -->

            <!--------------------------------------------MODALS--------------------------------------------------->
            <!--ANECDOTAL FORM MODAL-->
            <div class="modal fade anecdotal-modal" id="anecdotal-btn">
                <div class="modal-dialog anecdotal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="border: transparent; padding: 10px;">
                            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto; max-width: 100%;">
                                <!--MODAL TITLE-->
                                <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Anecdotal Records of Val Dela Cruz</p> <br><br><br>

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
                                                    <iconify-icon icon="fluent:signature-16-filled" style="color: #0A0863;"></iconify-icon> Add Signature
                                                </a>
                                            </td>
                                            <td style="text-align: center;">Amelia Dela Cruz</td>
                                            <td style="text-align: center;">
                                                <a class="btn action-btn" data-target="#add-signature" data-toggle="modal" href="#" style="color: #0A0863;">
                                                    <iconify-icon icon="fluent:signature-16-filled" style="color: #0A0863;"></iconify-icon> Add Signature
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> <!-- /.modal-body -->
                        </form>
                    </div><!-- /.modal-content -->
                </div> <!-- /.modal-dialog -->
            </div><!-- /.modal end-->

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
            <!----------------------------------------------------------------------------------------------------------------->

            <!--PAGINATION-->
            <div style="margin-top: 10rem;">
                <ul class="pagination justify-content-center">
                    <li class="paginate_button page-item previous" id="example1_previous">
                        <a aria-controls="example1" class="page-link" data-dt-idx="0" href="#" tabindex="0">Previous</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a aria-controls="example1" class="page-link" data-dt-idx="1" href="#" tabindex="0">1</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a aria-controls="example1" class="page-link" data-dt-idx="2" href="#" tabindex="0">2</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a aria-controls="example1" class="page-link" data-dt-idx="3" href="#" tabindex="0">3</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a aria-controls="example1" class="page-link" data-dt-idx="4" href="#" tabindex="0">4</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a aria-controls="example1" class="page-link" data-dt-idx="5" href="#" tabindex="0">5</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a aria-controls="example1" class="page-link" data-dt-idx="6" href="#" tabindex="0">6</a>
                    </li>
                    <li class="paginate_button page-item next" id="example1_next">
                        <a aria-controls="example1" class="page-link" data-dt-idx="7" href="#" tabindex="0">Next</a>
                    </li>
                </ul>
            </div><!-- /pagination -->
        </div><!-- /.content-wrapper -->
    </div><!-- /.wrapper -->

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
    <!-- AdminLTE App -->
    <script src="adminLTE-3.2/dist/js/adminlte.min.js"></script>
</body>

</html>
