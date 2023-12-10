<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>FLAGMS | Anecdotal Records</title>
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
    <div class="wrapper">
        @livewire('left-navigation-livewire')
        @livewire('top-navigation-livewire')

        <div class="content-wrapper pl-2 pr-2" style="background-color: rgb(253, 253, 253);">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12 pl-5 pr-5">
                            <p class="text-lg text-xl font-weight-bold">Anecdotal Records</p>
                        </div>
                    </div>
                </div>
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

            <div class="card ml-2 mr-5 ml-5" style="border-radius: 10px;">
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-center">
                            <thead class="text-center" style="color: white; background-color: #7684B9;">
                                <tr>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Offenses</th>
                                    <th>Disciplinary Action</th>
                                    <th>Student Signature</th>
                                    <th>Name of Guardian</th>
                                    <th>Signature</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Val Dela Cruz</td>
                                    <td>Senior High School</td>
                                    <td>Grade 11</td>
                                    <td>Anne Lopez</td>
                                    <td>
                                        <!--ANECDOTAL STUDENT INFO EDIT BUTTON-->
                                        <a class="btn btn-primary action-btn" data-target="#add-signature" data-toggle="modal" href="#">
                                            <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i>
                                        </a>

                                        <!--ADD SIGNATURE MODAL-->
                                        <div class="modal fade as-modal" id="add-signature" style="max-width: 100%;">
                                            <div class="modal-dialog as-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header p-2 border-0">
                                                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form>
                                                        <div class="modal-body ml-2 mr-2" style="max-height: 500px;">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <!-- SIGNATURE TABS -->
                                                                    <div class="card border-0" style="box-shadow: none; outline: none;">
                                                                        <div class="card-header d-flex p-0">
                                                                            <ul class="nav nav-pills flex-wrap p-2">
                                                                                <li class="nav-item">
                                                                                    <!--DRAW BTN-->
                                                                                    <a class="nav-link active" data-toggle="tab" href="#draw-mode-tab">
                                                                                        <img alt="draw button" height="40" src="images/draw.png" width="40">
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <!--IMAGE BTN-->
                                                                                    <a class="nav-link" data-toggle="tab" href="#upload-image-tab">
                                                                                        <img class="text-left" alt="image button" height="40" src="images/imagebtn.png" width="40">
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div><!-- /.card-header -->
                                                                        <div class="card-body">
                                                                            <div class="tab-content">
                                                                                <div class="tab-pane active" id="draw-mode-tab">
                                                                                    <div class="form-group col-sm-12 pt-5 pb-5" style="border: 1px solid gray;">
                                                                                        <label class="text-sm font-weight-light" style="color: gray;">Draw Here</label>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <!--CLEAR & DRAW/ SUBMIT BUTTONS-->
                                                                                        <div class="form-group col-12 col-sm-6">
                                                                                            <button class="btn btn-block btn-default float-right clear-button text-sm" style="width: 100%;" type="button">Clear and draw again</button>
                                                                                        </div>
                                                                                        <div class="form-group col-12 col-sm-6 button-container text-sm" style="color: #252525;">
                                                                                            <button class="btn btn-block btn-primary text-sm border-0" style="width: 100%; background-color: #0A0863;" type="button">Submit</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div><!-- /.tab-pane -->
                                        
                                                                                <div class="tab-pane" id="upload-image-tab">
                                                                                    <!--UPLOAD IMAGE TAB-->
                                                                                    <div class="form-group col-sm-12 p-5 d-flex flex-column justify-content-center align-items-center text-center" style="border: 1px solid gray;">
                                                                                        <div>
                                                                                            <label class="text-sm font-weight-light" style="color: gray;">Drag an image here <br> or </label>
                                                                                        </div>
                                                                                        <div>
                                                                                            <button class="btn btn-block btn-primary text-sm border-0" style="width: 100%; background-color: #0A0863;" type="button">Choose Image</button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <!--SUBMIT BUTTON-->
                                                                                        <div class="form-group col-12 text-sm" style="color: #252525;">
                                                                                            <button class="btn btn-block btn-primary" style="font-size: 14px; background-color: #0A0863; border: transparent;" type="button">Submit</button>
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

                                    <td class="text-center">Name of Guardian</td>
                                    <td class="text-center">
                                        <a class="btn btn-primary action-btn" data-target="#add-signature" data-toggle="modal" href="#">
                                            <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2023. All rights reserved.</strong>
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
