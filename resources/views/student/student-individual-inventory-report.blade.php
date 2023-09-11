<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Student | Individual Inventory Form</title>
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
        <div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem; padding-right: 2rem;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="col-sm-12" style="padding-left: 2rem; padding-top: 1rem;">
                        <h1 style="font-weight: bold;">Individual Inventory Report</h1>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <div class="row">
                <div class="col-8">
                    <label style="font-size: 22px; color: #0A0863">Student Information</label>
                </div>
            </div>

            <div class="row" style="margin-bottom: 2rem;">
                <div class="col-3">
                    <label>First Name</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Middle Name</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Last Name</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Suffix Name</label>
                    <input class="form-control" placeholder="(e.g, Jr.)" style="border: 1px solid black" type="text">
                </div>
            </div>

            <div class="row" style="margin-bottom: 2rem;">
                <div class="col-3">
                    <label>LRN</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Gender</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Status</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Citizen Ship</label>
                    <input class="form-control" placeholder="(e.g, Jr.)" style="border: 1px solid black" type="text">
                </div>
            </div>

            <div class="row" style="margin-bottom: 3rem;">
                <div class="col-3">
                    <label>Date of Birth</label>
                    <input class="form-control" style="border: 1px solid black" type="date">
                </div>
                <div class="col-3">
                    <label>Birthplace</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Religion</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
            </div>

            <!---------------------------->
            <div class="row" style="margin-bottom: 3rem;">
                <div class="col-8">
                    <label style="font-size: 22px; color: #0A0863">Address</label>
                </div>
            </div>

            <div class="row" style="margin-bottom: 2rem;">
                <div class="col-3">
                    <label>Street No. / Unit No.</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Street</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Subdivision / Village / Bldg.</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Barangay</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
            </div>

            <div class="row" style="margin-bottom: 3rem;">
                <div class="col-3">
                    <label>City / Municipality</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Province</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Zip Code</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
            </div>

            <!---------------------------->
            <div class="row" style="margin-bottom: 2rem;">
                <div class="col-8">
                    <label style="font-size: 22px; color: #0A0863">Contact Details</label>
                </div>
            </div>

            <div class="row" style="margin-bottom: 2rem;">
                <div class="col-3">
                    <label>Telephone No.</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Mobile No.</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Email Address</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
            </div>

            <!---------------------------->
            <div class="row" style="margin-bottom: 1rem;">
                <div class="col-8">
                    <label style="font-size: 22px; color: #0A0863">Educational History</label>
                </div>
            </div>

            <div class="row" style="margin-bottom: 1rem;">
                <div class="col-8">
                    <label style="font-size: 20px;">Primary School</label>
                </div>
            </div>

            <div class="row" style="margin-bottom: 2rem;">
                <div class="col-8">
                    <label>Name of School</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-2">
                    <label>School Year Start</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-2">
                    <label>School Year Ends</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
            </div>

            <div class="row" style="margin-bottom: 1rem;">
                <div class="col-8">
                    <label style="font-size: 20px;">Junior High School</label>
                </div>
            </div>

            <div class="row" style="margin-bottom: 2rem;">
                <div class="col-8">
                    <label>Name of School</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-2">
                    <label>School Year Start</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-2">
                    <label>School Year Ends</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
            </div>

            <div class="row" style="margin-bottom: 1rem;">
                <div class="col-8">
                    <label style="font-size: 20px;">Senior High School</label>
                </div>
            </div>

            <div class="row" style="margin-bottom: 2rem;">
                <div class="col-8">
                    <label>Name of School</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-2">
                    <label>School Year Start</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-2">
                    <label>School Year Ends</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
            </div>

            <!---------------------------->
            <div class="row" style="margin-bottom: 1rem;">
                <div class="col-8">
                    <label style="font-size: 22px; color: #0A0863">Basic Medical Information</label>
                </div>
            </div>

            <div class="row" style="margin-bottom: 1rem;">
                <div class="col-8">
                    <label style="font-size: 20px;">Medical Conditions</label>
                </div>
            </div>

            <div class="row" style="margin-bottom: 1rem; margin-left: 1rem;">
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

            <div class="row" style="margin-bottom: 1rem; margin-left: 1rem;">
                <textarea class="form-control" style="border: 1px solid black; background-color: rgb(214, 211, 211); height: 100px;"></textarea>
            </div>

            <!---------------------------->
            <div class="row" style="margin-bottom: 1rem;">
                <div class="col-8">
                    <label style="font-size: 20px;">Allergies (Food, medication and/or environmental)</label>
                </div>
            </div>

            <div class="row" style="margin-bottom: 1rem; margin-left: 1rem;">
                <textarea class="form-control" style="border: 1px solid black; background-color: white; height: 100px;"></textarea>
            </div>

            <!---------------------------->
            <div class="row" style="margin-bottom: 1rem;">
                <div class="col-8">
                    <label style="font-size: 20px;">Emergency Contact Details</label>
                </div>
            </div>

            <div class="row" style="margin-bottom: 5rem;">
                <div class="col-3">
                    <label>First Name</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Last Name</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Contact No.</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
                <div class="col-3">
                    <label>Relationship</label>
                    <input class="form-control" style="border: 1px solid black" type="text">
                </div>
            </div>

            <div class="row" style="margin-bottom: 2rem;">
                <div class="col-12">
                    <a class="btn btn-block btn-primary" href="student inventory report form.html" style="font-size: 16px; background-color: #0A0863; border: transparent;" type="button">Submit</a>
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
