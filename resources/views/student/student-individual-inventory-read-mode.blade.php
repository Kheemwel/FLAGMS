<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Student | IIF Read Mode</title>
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
    <!-- Site wrapper -->
    <div class="wrapper">
        @livewire('left-navigation-livewire')
        @livewire('top-navigation-livewire')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper pl-5 pr-5" style="background-color:  rgb(253, 253, 253);">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="col-sm-12 pl-3 pt-2">
                        <h1 class="font-weight-bold">Individual Inventory Report</h1>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            

            <!-- Main content -->
            <div class="row">
                <div class="col-8">
                    <label class="text-lg" style="color: #0A0863">Student Information</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label class="text-sm">Name</label>
                    <label class="text-sm">Gender</label>
                </div>
                <div class="col-3">
                    <label class="text-sm">Allysah Valerie Dela Cruz</label>
                    <label class="text-sm">Female</label>
                </div>
                <div class="col-3">
                    <label class="text-sm"> LRN</label>
                    <label class="text-sm">Status</label>
                </div>
                <div class="col-3">
                    <label class="text-sm">021575212852025</label>
                    <label class="text-sm">Single</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label class="text-sm">Date of Birth</label>
                    <label class="text-sm">Citizenship</label>
                </div>
                <div class="col-3">
                    <label class="text-sm">1/1/99</label>
                    <label class="text-sm">Filipino</label>
                </div>
                <div class="col-3">
                    <label class="text-sm">Birthplace</label>
                    <label class="text-sm">Religion</label>
                </div>
                <div class="col-3">
                    <label class="text-sm">Dasmarinas, Cavite</label>
                    <label class="text-sm">Catholic</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-3">
                    <label class="text-sm">Date of Birth</label>
                    <label class="text-sm">Single</label>
                </div>
                <div class="col-3">
                    <label class="text-sm">Birthplace</label>
                    <label class="text-sm">Single</label>
                </div>
                <div class="col-3">
                    <label class="text-sm">Religion</label>
                    <label class="text-sm">Single</label>
                </div>
            </div>

            <!---------------------------->
            <div class="row mb-2 mt-4">
                <div class="col-8">
                    <label class="text-lg" style="font-size: 22px; color: #0A0863">Address</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-3">
                    <label class="text-sm">Street No. / Unit No.</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label class="text-sm">Street</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label class="text-sm">Subdivision / Village / Bldg.</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label class="text-sm">Barangay</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-3">
                    <label class="text-sm">City / Municipality</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label class="text-sm">Province</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label class="text-sm">Zip Code</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
            </div>

            <!---------------------------->
            <div class="row mb-2 mt-4">
                <div class="col-8">
                    <label class="text-lg" style="color: #0A0863">Contact Details</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-3">
                    <label class="text-sm">Telephone No.</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Mobile No.</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label class="text-sm">Email Address</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
            </div>

            <!---------------------------->
            <div class="row mb-2 mt-4">
                <div class="col-8">
                    <label class="text-lg" style="color: #0A0863">Educational History</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-8">
                    <label class="text-lg" class="text-lg">Primary School</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-8">
                    <label class="text-sm">Name of School</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-2">
                    <label class="text-sm">School Year Start</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-2">
                    <label class="text-sm">School Year Ends</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
            </div>

            <div class="row mb-2 mt-4">
                <div class="col-8">
                    <label class="text-lg">Junior High School</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-8">
                    <label class="text-sm">Name of School</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-2">
                    <label class="text-sm">School Year Start</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-2">
                    <label class="text-sm">School Year Ends</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
            </div>

            <div class="row mb-2 mt-4">
                <div class="col-8">
                    <label class="text-lg">Senior High School</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-8">
                    <label class="text-sm">Name of School</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-2">
                    <label class="text-sm">School Year Start</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-2">
                    <label class="text-sm">School Year Ends</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
            </div>

            <!---------------------------->
            <div class="row mb-2 mt-4">
                <div class="col-8">
                    <label class="text-lg" style="color: #0A0863">Basic Medical Information</label>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-8">
                    <label class="text-md">Medical Conditions</label>
                </div>
            </div>

            <div class="row mb-2 ml-3">
                <div class="col-8">
                    <input class="form-check-input" id="cbPass" type="checkbox"> Diabetes
                </div>
                <div class="col-8">
                    <input class="form-check-input" id="cbPass" type="checkbox"> Heart Problems
                </div>
                <div class="col-8">
                    <input class="form-check-input" id="cbPass" type="checkbox"> Asthma
                </div>
                <div class="col-8">
                    <input class="form-check-input" id="cbPass" type="checkbox"> Others (please specify)
                </div>
            </div>

            <div class="row mb-2 ml-3">
                <textarea class="form-control text-sm" style="border: 1px solid black; background-color: rgb(214, 211, 211); height: 100px;"></textarea>
            </div>

            <!---------------------------->
            <div class="row mb-2 mt-4">
                <div class="col-8">
                    <label class="text-md">Allergies (Food, medication and/or environmental)</label>
                </div>
            </div>

            <div class="row mb-2 ml-3">
                <textarea class="form-control text-sm" style="border: 1px solid black; background-color: white; height: 100px;"></textarea>
            </div>

            <!---------------------------->
            <div class="row mb-2 mt-4">
                <div class="col-8">
                    <label class="text-lg">Emergency Contact Details</label>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-3">
                    <label class="text-sm">First Name</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label class="text-sm">Last Name</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label class="text-sm">Contact No.</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label class="text-sm">Relationship</label>
                    <input class="form-control text-sm" style="border: 1px solid black" type="text">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-12">
                    <a class="btn btn-block btn-primary text-sm border-0" href="student inventory report form.html" style="background-color: #0A0863;" type="button">Submit</a>
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
