<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Admin | Notifications</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">

    <!--Dropdown Button Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
        rel="stylesheet">
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
                            <h1 style="font-weight: bold;">Notifications</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <div class="row">
                <div class="col-12">
                    <div class="card-tools"
                        style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                        <!--MARKED AS READ BUTTON-->
                        <button class="btn btn-default" data-target="#" data-toggle="modal"
                            style="max-width: 7rem; height: 35px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;"
                            type="button"><i class="fa fa-solid fa-check"></i> Mark as read</button>

                        <!--DELETE BUTTON-->
                        <button class="btn btn-default" data-target="#" data-toggle="modal"
                            style="max-width: 5rem; height: 35px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;"
                            type="button"><i class="fa fa-solid fa-trash"></i> Delete</button>

                        <!--CLEAR BUTTON-->
                        <button class="btn btn-default" data-target="#" data-toggle="modal"
                            style="max-width: 5rem; height: 35px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;"
                            type="button"><i class="fa fa-solid fa-xmark"></i>Clear</button>
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
                                <th style="border-right: 1px solid #252525;">*checkbox*</th>
                                <th style="border-right: 1px solid #252525;">From</th>
                                <th style="border-right: 1px solid #252525;">Message</th>
                                <th style="border-right: 1px solid #252525;">Sent</th>
                                <th style="border-right: 1px solid #252525;">isRead</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="text-align: center;">
                                <td> <input class="form-check-input" id="cbPass" type="checkbox"> </td>
                                <td><img alt="profile" src="images/notif-profile.png"
                                        style="width: 50px; height: 50px;"> &nbsp; Val Dela Cruz</td>
                                <td></td>
                                <td>June 14, 2023 at 10:00AM</td>
                                <td><i class="fa fa-solid fa-check" style="color: #3C58FF; font-size: 18px;"></i></td>
                            </tr>
                            <tr style="text-align: center;">
                                <td> <input class="form-check-input" id="cbPass" type="checkbox"> </td>
                                <td><img alt="profile" src="images/notif-profile2.png"
                                        style="width: 50px; height: 50px;"> &nbsp; Anne Lopez</td>
                                <td></td>
                                <td>June 14, 2023 at 10:00AM</td>
                                <td><i class="fa fa-solid fa-circle" style="color: #3C58FF; font-size: 12px;"></i></td>
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
                        <a aria-controls="example1" class="page-link" data-dt-idx="0" href="#"
                            tabindex="0">Previous</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a aria-controls="example1" class="page-link" data-dt-idx="1" href="#"
                            tabindex="0">1</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a aria-controls="example1" class="page-link" data-dt-idx="2" href="#"
                            tabindex="0">2</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a aria-controls="example1" class="page-link" data-dt-idx="3" href="#"
                            tabindex="0">3</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a aria-controls="example1" class="page-link" data-dt-idx="4" href="#"
                            tabindex="0">4</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a aria-controls="example1" class="page-link" data-dt-idx="5" href="#"
                            tabindex="0">5</a>
                    </li>
                    <li class="paginate_button page-item ">
                        <a aria-controls="example1" class="page-link" data-dt-idx="6" href="#"
                            tabindex="0">6</a>
                    </li>
                    <li class="paginate_button page-item next" id="example1_next">
                        <a aria-controls="example1" class="page-link" data-dt-idx="7" href="#"
                            tabindex="0">Next</a>
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
