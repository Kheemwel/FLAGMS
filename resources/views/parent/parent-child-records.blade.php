<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>FLAGMS | Child's Records</title>
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
        <div class="content-wrapper pl-1 pr-1" style="background-color:  rgb(253, 253, 253);">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6 pl-5 pt-3">
                            <h1 style="font-weight: bold;">My Child's Records</h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <div class="col-12 col-sm-4 mb-2 pl-5 pr-5">
                <div class="input-group">
                    <input class="form-control" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live.debounce.500ms='search'>
                </div>
            </div>
            
            <div class="row mt-2 mr-1">
                <div class="col-12 col-sm-12 pt-2 pr-5 d-flex justify-content-end">
                    <label for="per-page" class="font-weight-normal text-sm">Show
                        <select class="form-select form-select-sm" id='per-page'
                            wire:model.live.debounce.500ms="per_page">
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                            <option>25</option>
                            <option selected>30</option>
                            <option>50</option>
                            <option>100</option>
                        </select>
                        Entries
                    </label>
                </div>
            </div>

            <!--MY CHILD'S RECORDS TABLE SECTION-->
            <div class="card ml-5 mr-5" style="border-radius: 10px;">
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-center">
                            <thead class="pr-0 text-center" style="color: white; background-color: #7684B9;">
                                <tr>
                                    <th>ID</th>
                                    <th>Name of Child</th>
                                    <th>Anecdotal Record</th>
                                    <th>Individual Inventory Report</th>
                                    <th>Summary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img alt="user" height="30px" src="images/user.png" width="30px"> Val Dela Cruz</td>
                                    <td class="text-lg text-center">
                                        <button class="btn btn-primary action-btn" data-target="#anecdotal-btn" data-toggle="modal">
                                            <i aria-hidden="true" class="fa fa-eye"></i>
                                        </button>
                                    </td>
                                    <td class="text-lg text-center">
                                        <button class="btn btn-primary action-btn" data-target="#student-inventory" data-toggle="modal">
                                            <i aria-hidden="true" class="fa fa-eye"></i>
                                        </button>
                                    </td>
                                    <td class="text-lg text-center">
                                        <button class="btn btn-primary action-btn" data-target="#summary-btn" data-toggle="modal">
                                            <i aria-hidden="true" class="fa fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!-- /.card-body -->
            </div><!-- /.card table -->
        </div>
        @include('parent.parent-child-summary')
        @include('parent.parent-child-inventory')
        @include('parent.parent-child-anecdotal')
    </div> <!-- /.wrapper -->

    {{-- MODALS --}}

    <!--VIEW SUMMARY MODAL-->


    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2023.</strong> All rights reserved.
    </footer>

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
