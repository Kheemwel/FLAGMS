<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Admin | Violation Forms</title>
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
        /* For Eye Icons of Violation and Summary Section inside the table */
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

        /* Widen the Violation modal */
        .Violation-dialog {
            max-width: 90%;
        }

        .Violation-modal {
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
                            <h1 style="font-weight: bold;">Violation</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <div class="row">
                <div class="col-12">
                    <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                        <!--SEARCH FEATURE-->
                        <div class="input-group input-group-sm" style="max-width: 30%;">
                            <!--SEARCH INPUT-->
                            <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text">
                            <div class="input-group-append">
                                <button class="btn btn-default" data-target="#table-filter" data-toggle="modal" style="height: 35px;" type="submit">
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
                                                </div> <!-- /.card-body -->
                                            </form>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal end-->

                            <!--UPLOAD BUTTON-->
                            <button class="btn btn-default" data-target="#upload-violation-form" data-toggle="modal" style="max-width: 5rem; height: 35px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button"><i class="fa fa-solid fa-upload"></i> Upload</button>
                            <!--UPLOAD VIOLATION FORM MODAL-->
                            <div class="modal fade" id="upload-violation-form">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="border: transparent; padding: 10px;">
                                            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                                                <!--MODAL FORM TITLE-->
                                                <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">Upload Violation Form</p> <br><br><br>

                                                <!--IMPORTANT USER DETAILS FORM SECTION-->
                                                <!--------------------USER'S INFORMATION------------------------>
                                                <div class="row" style="text-align: left;">
                                                    <!--DATE-->
                                                    <div class="form-group col-sm-12" style="font-size: 14px; color: #252525;">
                                                        <label for="input-violation-date" style="font-weight: normal;">Date</label>
                                                        <input class="form-control" id="input-violation-date" style="border: 1px solid black" type="date">
                                                    </div>
                                                </div>
                                                <!--TEACHER'S NAME-->
                                                <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                                                    <label for="input-teacher-name" style="font-weight: normal;">Teacher's Name</label>
                                                    <input class="form-control" id="input-teacher-name" style="border: 1px solid #252525" type="text">
                                                </div>
                                                <!--TITLE: STUDENT INFO-->
                                                <div class="form-group col-sm-13" style="font-size: 18px; color: #252525; text-align: left; margin-bottom: 0;">
                                                    <label style="font-weight: normal;">Student Information</label>
                                                </div>
                                                <!--STUDENT NAME-->
                                                <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                                                    <label for="input-std-name" style="font-weight: normal;">Student Name</label>
                                                    <input class="form-control" id="input-std-name" style="border: 1px solid #252525" type="text">
                                                </div>

                                                <!--SCHOOL LEVEL-->
                                                <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; margin-bottom: 0;">
                                                    <label style="font-weight: normal;">School Level</label>
                                                </div>
                                                <div class="row" style="text-align: left;">
                                                    <div class="form-group col-sm-6" style="font-size: 14px; color: #252525; text-align: left;">
                                                        <input checked id="rbJHS" name="r1" type="radio">
                                                        <label style="font-weight: normal;">Junior High School</label>
                                                    </div>
                                                    <div class="form-group col-sm-6" style="font-size: 14px; color: #252525; text-align: left;">
                                                        <input checked id="rbSHS" name="r1" type="radio">
                                                        <label style="font-weight: normal;">Senior High School</label>
                                                    </div>
                                                </div>
                                                <!--GRADE LEVEL-->
                                                <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                                                    <label for="input-std-info" style="font-weight: normal;">Grade Level</label>
                                                    <div class="row" style="text-align: left;">
                                                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                            <!--Grade Level Dropdown Button-->
                                                            <div class="input-group-prepend">
                                                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="input-SL" style="background-color: transparent; color:#252525; font-size: 14px;" type="button">
                                                                    Grade Level
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="#">Grade 7</a>
                                                                    <a class="dropdown-item" href="#">Grade 8</a>
                                                                    <a class="dropdown-item" href="#">Grade 9</a>
                                                                    <a class="dropdown-item" href="#">Grade 10</a>
                                                                    <a class="dropdown-item" href="#">Grade 11</a>
                                                                    <a class="dropdown-item" href="#">Grade 12</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--UPLOAD A FILE-->
                                                <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                                                    <label for="input-item-desc" style="font-weight: normal;">Upload a file</label>

                                                    <div class="form-group col-sm-12" style="border: 1px dashed gray; padding-top: 3rem; padding-bottom: 5rem; display: flex; flex-direction: column; align-items: center;">
                                                        <div>
                                                            <label style="color: gray; font-size: 14px; font-weight: 300; text-align: center;">Drag an image here <br> or </label>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-block btn-primary" style=" width: 8rem; font-size: 12px; background-color: #0A0863; border: transparent;" type="button">Choose File</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!------------------------------------------------------------------------------>

                                            </div> <!-- /.card-body -->
                                            <div class="card-footer">
                                                <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-end -->
                        </div>
                    </div>
                </div>
            </div>

            <!--HOME VISITATION TABLE SECTION-->
            <div class="card" style="margin-left: 2rem; margin-right: 2rem;">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
                    <table class="table text-nowrap" style="text-align: center;">
                        <thead style="background-color: #7684B9; color: white;">
                            <tr>
                                <th style="border-right: 1px solid #252525;">Teacher Name</th>
                                <th style="border-right: 1px solid #252525;">Student Name</th>
                                <th style="border-right: 1px solid #252525;">School Level</th>
                                <th style="border-right: 1px solid #252525;">Grade Level</th>
                                <th style="border-right: 1px solid #252525;">Date Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Anne Lopez</td>
                                <td>Val Dela Cruz</td>
                                <td>Senior High School</td>
                                <td>Grade 11</td>
                                <td>12/08/23</td>
                                <td>
                                    <!--Home Visitation STUDENT INFO EDIT BUTTON-->
                                    <a class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" href="#">
                                        <i class="fa fa-solid fa-pen"></i>
                                    </a>

                                    <!--HOME VISITATION STUDENT INFO VIEW BUTTON-->
                                    <a class="btn btn-primary action-btn" data-target="#Home Visitation-btn" data-toggle="modal" href="#">
                                        <i aria-hidden="true" class="fa fa-eye"></i>
                                    </a>

                                    <!--DELETE BUTTON-->
                                    <a class="btn btn-primary action-btn" href="#">
                                        <i class="fa fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card table -->

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
