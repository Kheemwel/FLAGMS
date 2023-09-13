@section('head')
    <title>Admin | Students</title>

    <!--Dropdown Button Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="adminLTE-3.2/plugins/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- overlayScrollbars -->
    <link href="adminLTE-3.2/plugins/overlayScrollbars/css/OverlayScrollbars.min.css" rel="stylesheet">
    <!-- Toastr -->
    <link href="adminLTE-3.2/plugins/toastr/toastr.min.css" rel="stylesheet">
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
@endsection

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
                </div>
            </div>

            <!--PROFILING TABLE SECTION-->
            <div class="card" style="margin-left: 2rem; margin-right: 2rem;">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
                    <table class="table text-nowrap" style="text-align: center;">
                        <thead style="background-color: #7684B9; color: white;">
                            <tr>
                                <th style="border-right: 1px solid #252525;">ID</th>
                                <th style="border-right: 1px solid #252525;">Name</th>
                                <th style="border-right: 1px solid #252525;">School Level</th>
                                <th style="border-right: 1px solid #252525;">Grade Level</th>
                                <th style="border-right: 1px solid #252525;">Anecdotal</th>
                                <th>Summary</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <th scope="row">{{ $student->id }}</th>
                                    <td>{{ $student->getUserAccount->first_name . ' ' . $student->getUserAccount->last_name }}</td>
                                    <td>{{ $student->schoolLevel->school_level }}</td>
                                    <td>Grade {{ $student->gradeLevel->grade_level }}</td>
                                    <td>
                                        <a class="btn btn-primary action-btn" data-target="#anecdotal-btn" data-toggle="modal" href="#">
                                            <i aria-hidden="true" class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary action-btn" data-target="#summary-btn" data-toggle="modal" href="#">
                                            <i aria-hidden="true" class="fa fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <button wire:click='counter()'>Click</button>{{ $count }}

            @include('livewire.profiling.students.anecdotal-window')
            @include('livewire.profiling.students.summary-window')
            @include('livewire.profiling.students.edit-student')
        </div>
    </div>
</div> <!-- /.card-body -->

@section('scripts')
    <!-- jQuery -->
    <script src="adminLTE-3.2/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="adminLTE-3.2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="adminLTE-3.2/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="adminLTE-3.2/dist/js/adminlte.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="adminLTE-3.2/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- Toastr -->
    <script src="adminLTE-3.2/plugins/toastr/toastr.min.js"></script>
    <!-- ChartJS -->
    <script src="adminLTE-3.2/plugins/chart.js/Chart.min.js"></script>
@endsection
