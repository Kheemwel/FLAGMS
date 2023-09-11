<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Student | Fill Out Request</title>
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
            max-width: 65%;
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
                            <h1 style="font-weight: bold;">Fill Out Request</h1>
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
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Approved Request</button>
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
                                        <label style="font-size: 24px; margin-top: 1rem; color: red; float: left; ">INCOMPLETE</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 70%;"><label style="font-size: 28px; margin-top: 1rem;">Violation Form</label></td>
                                    <td style="vertical-align: bottom; width: 20%;">
                                        <!--READ BUTTON-->
                                        <button class="btn btn-default" data-target="#read-request-vf" data-toggle="modal" style="color: white; background-color: #080743; font-size: 14px; width: 80px; margin-right: 1rem;">Read</button>
                                        <!--FILL OUT BUTTON-->
                                        <button class="btn btn-default" data-target="#" data-toggle="modal" style="color: white; background-color: gray; font-size: 14px; width: 80px;">Fill Out</button>
                                    </td>
                                </tr>
                            </table>

                            <div class="inner" style="padding-left: 2rem; padding-bottom: 4%">
                                <div style="display: flex; flex-direction: column;">
                                    <!--READ VIOLATION REQUEST MODAL-->
                                    <div class="modal as-modal fade" id="read-request-vf" style="max-width: 100%;">
                                        <div class="modal-dialog as-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="border: transparent; padding: 10px;">
                                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form>
                                                    <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; max-height: 500px; overflow-y: auto; text-align: left;">
                                                        <!--MODAL TITLE-->
                                                        <div class="row">
                                                            <div class="col-1 float-right">
                                                                <img height="50px" src="images/fiat.png" width="50px">
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <p style="font-size: 20px; color: #252525; line-height: 0%;"> Fiat Lux Academe Cavite</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p style="font-size: 18px; color: #252525;">"Let there be light."</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 justify-content-center" style="text-align: center; margin-top: 2rem; margin-bottom: 3rem;">
                                                            <p style="font-size: 22px; color: #252525; line-height: 0%; font-weight: bold;"> GUIDANCE COUNSELING OFFICE</p>
                                                            <p style="font-size: 22px; color: #252525; line-height: 0%; font-weight: bold;"> VIOLATION FORM</p>
                                                        </div>

                                                        <!--IMPORTANT USER DETAILS FORM SECTION-->
                                                        <div class="row">
                                                            <!--Date-->
                                                            <div class="form-group col-sm-1" style="color: #252525;">
                                                                <p style="font-size: 18px;">Date:</p>
                                                            </div>
                                                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                                <p style="font-size: 18px; text-decoration: underline;">09/08/2023</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Time-->
                                                            <div class="form-group col-sm-1" style="color: #252525;">
                                                                <p style="font-size: 18px;">Time:</p>
                                                            </div>
                                                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                                <p style="font-size: 18px; text-decoration: underline;">11:37 AM</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Name of Student-->
                                                            <div class="form-group col-sm-2" style="color: #252525;">
                                                                <p style="font-size: 18px;">Name of Student:</p>
                                                            </div>
                                                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                                <p style="font-size: 18px; text-decoration: underline;">Val Dela Cruz</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--LEVEL & SEC-->
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Level & Section:</p>
                                                            </div>
                                                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                                <p style="font-size: 18px; text-decoration: underline;">Grade 11 Mars</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Age/Gender/Date-->
                                                            <div class="form-group col-sm-1" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Age:</p>
                                                            </div>
                                                            <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                                <p style="font-size: 18px; text-decoration: underline;">22 </p>
                                                            </div>
                                                            <div class="form-group col-sm-1" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Gender:</p>
                                                            </div>
                                                            <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                                <p style="font-size: 18px; text-decoration: underline;">F</p>
                                                            </div>
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Birthdate:</p>
                                                            </div>
                                                            <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                                <p style="font-size: 18px; text-decoration: underline;">12/06/01</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Parent / Guardian-->
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Parent/Guardian:</p>
                                                            </div>
                                                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                                <p style="font-size: 18px; text-decoration: underline;">Amelia Dela Cruz</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Contact/Address-->
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Contact No.:</p>
                                                            </div>
                                                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                                <p style="font-size: 18px; text-decoration: underline;">0975 448 6759 </p>
                                                            </div>
                                                            <div class="form-group col-sm-1" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Address:</p>
                                                            </div>
                                                            <div class="form-group col-sm-6" style="font-size: 16px; color: #252525;">
                                                                <p style="font-size: 18px; text-decoration: underline;">B100 L2 P4 Mabuhat City, Paliparan 3 Dasmarinas, Cavite</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Teacher in charge-->
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Teacher-in-charge:</p>
                                                            </div>
                                                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                                <p style="font-size: 18px; text-decoration: underline;">Liam Anderson</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Offense Desc-->
                                                            <div class="form-group col-sm-3" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Type of Offense:</p>
                                                            </div>
                                                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                                <input class="form-check-input" id="cbPass" type="checkbox"> Physical
                                                            </div>
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <input class="form-check-input" id="cbPass" type="checkbox"> Verbal
                                                            </div>
                                                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                                <input class="form-check-input" id="cbPass" type="checkbox"> Social
                                                            </div>
                                                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                                <input class="form-check-input" id="cbPass" type="checkbox"> Others
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Narrative Report-->
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Narrative Report:</p>
                                                            </div>
                                                            <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify;">
                                                                <p style="font-size: 18px; text-decoration: underline;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae dolor luctus, fringilla sem sed, blandit magna. Donec ac tortor mi. Duis nec purus rhoncus, auctor ligula sed, rutrum ante. Aliquam erat volutpat. Morbi vel nulla viverra, semper ex a, tristique nibh. Suspendisse volutpat luctus tellus eget varius. Suspendisse a eros arcu. Aenean ut eros orci. Etiam enim magna, mollis quis velit a, aliquam interdum enim. Nam laoreet efficitur felis et mattis. Donec consectetur eros sapien. Ut a ipsum dui. Sed sed enim ut felis iaculis aliquam.</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Stud Sign-->
                                                            <div class="form-group col-sm-12" style=" color: #252525; text-align: right; margin-top: 5rem;">
                                                                <p style="font-size: 18px; text-decoration: overline;">Student Signature Over Printed Name</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Action Taken-->
                                                            <div class="form-group col-sm-2" style=" color: #252525">
                                                                <p style="font-size: 18px;">Action Taken:</p>
                                                            </div>
                                                            <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify;">
                                                                <p style="font-size: 18px; text-decoration: underline;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae dolor luctus, fringilla sem sed, blandit magna. Donec ac tortor mi. Duis nec purus rhoncus, auctor ligula sed, rutrum ante. Aliquam erat volutpat. Morbi vel nulla viverra, semper ex a, tristique nibh. Suspendisse volutpat luctus tellus eget varius. Suspendisse a eros arcu. Aenean ut eros orci. Etiam enim magna, mollis quis velit a, aliquam interdum enim. Nam laoreet efficitur felis et mattis. Donec consectetur eros sapien. Ut a ipsum dui. Sed sed enim ut felis iaculis aliquam.</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Case Status-->
                                                            <div class="form-group col-sm-3" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Type of Offense:</p>
                                                            </div>
                                                            <div class="form-group col-sm-3" style=" color: #252525;">
                                                                <input class="form-check-input" name="radio1" type="radio">Resolved
                                                            </div>
                                                            <div class="form-group col-sm-3" style=" color: #252525;">
                                                                <input class="form-check-input" name="radio1" type="radio">Unresolved
                                                            </div>
                                                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                                <input class="form-check-input" name="radio1" type="radio">Pending
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Recommendation-->
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Recommendation:</p>
                                                            </div>
                                                            <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify; margin-bottom: 2rem;">
                                                                <p style="font-size: 18px; text-decoration: underline;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae dolor luctus, fringilla sem sed, blandit magna. Donec ac tortor mi. Duis nec purus rhoncus, auctor ligula sed, rutrum ante. Aliquam erat volutpat. Morbi vel nulla viverra, semper ex a, tristique nibh. Suspendisse volutpat luctus tellus eget varius. Suspendisse a eros arcu. Aenean ut eros orci. Etiam enim magna, mollis quis velit a, aliquam interdum enim. Nam laoreet efficitur felis et mattis. Donec consectetur eros sapien. Ut a ipsum dui. Sed sed enim ut felis iaculis aliquam.</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-sm-12">
                                                                <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white; margin-bottom: 3rem;">Complete</button>
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

                            <div class="inner" style="padding-left: 2rem; padding-bottom: 4%">
                                <div style="display: flex; flex-direction: column;">
                                    <!--FILL VIOLATION REQUEST MODAL-->
                                    <div class="modal as-modal fade" id="fill-request-vf" style="max-width: 100%;">
                                        <div class="modal-dialog as-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="border: transparent; padding: 10px;">
                                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form>
                                                    <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; max-height: 500px; overflow-y: auto; text-align: left;">
                                                        <!--MODAL TITLE-->
                                                        <div class="row">
                                                            <div class="col-1 float-right">
                                                                <img height="50px" src="images/fiat.png" width="50px">
                                                            </div>
                                                            <div class="col-6">
                                                                <div class="row">
                                                                    <p style="font-size: 20px; color: #252525; line-height: 0%;"> Fiat Lux Academe Cavite</p>
                                                                </div>
                                                                <div class="row">
                                                                    <p style="font-size: 18px; color: #252525;">"Let there be light."</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-12 justify-content-center" style="text-align: center; margin-top: 2rem; margin-bottom: 3rem;">
                                                            <p style="font-size: 22px; color: #252525; line-height: 10%; font-weight: bold;"> GUIDANCE COUNSELING OFFICE</p>
                                                            <p style="font-size: 22px; color: #252525; line-height: 10%; font-weight: bold;"> VIOLATION FORM</p>
                                                        </div>

                                                        <!--IMPORTANT USER DETAILS FORM SECTION-->
                                                        <div class="row">
                                                            <!--Date-->
                                                            <div class="form-group col-sm-1" style="color: #252525;">
                                                                <p style="font-size: 18px;">Date:</p>
                                                            </div>
                                                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                                <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="date">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Time-->
                                                            <div class="form-group col-sm-1" style="color: #252525;">
                                                                <p style="font-size: 18px;">Time:</p>
                                                            </div>
                                                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                                <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="time">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Name of Student-->
                                                            <div class="form-group col-sm-2" style="color: #252525;">
                                                                <p style="font-size: 18px;">Name of Student:</p>
                                                            </div>
                                                            <div class="form-group col-sm-9" style="font-size: 16px; color: #252525;">
                                                                <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--LEVEL & SEC-->
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Level & Section:</p>
                                                            </div>
                                                            <div class="form-group col-sm-8" style="font-size: 16px; color: #252525;">
                                                                <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Age/Gender/Date-->
                                                            <div class="form-group col-sm-1" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Age:</p>
                                                            </div>
                                                            <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                                <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                                                            </div>
                                                            <div class="form-group col-sm-1" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Gender:</p>
                                                            </div>
                                                            <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                                <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                            </div>
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Birthdate:</p>
                                                            </div>
                                                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                                <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="date">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Parent / Guardian-->
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Parent/Guardian:</p>
                                                            </div>
                                                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                                <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Contact/Address-->
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Contact No.:</p>
                                                            </div>
                                                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                                <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                                                            </div>
                                                            <div class="form-group col-sm-1" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Address:</p>
                                                            </div>
                                                            <div class="form-group col-sm-6" style="font-size: 16px; color: #252525;">
                                                                <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Teacher in charge-->
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Teacher-in-charge:</p>
                                                            </div>
                                                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                                <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Offense Desc-->
                                                            <div class="form-group col-sm-3" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Type of Offense:</p>
                                                            </div>
                                                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                                <input class="form-check-input" id="cbPass" type="checkbox"> Physical
                                                            </div>
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <input class="form-check-input" id="cbPass" type="checkbox"> Verbal
                                                            </div>
                                                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                                <input class="form-check-input" id="cbPass" type="checkbox"> Social
                                                            </div>
                                                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                                <input class="form-check-input" id="cbPass" type="checkbox"> Others
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Narrative Report-->
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Narrative Report:</p>
                                                            </div>
                                                            <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify;">
                                                                <textarea class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;"> </textarea>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Stud Sign-->
                                                            <div class="form-group col-sm-12" style=" color: #252525; text-align: right; margin-top: 5rem;">
                                                                <a class="btn btn-primary action-btn" data-target="#add-signature" data-toggle="modal" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
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
                                                                                <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto; text-align: center;">

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
                                                                                                        </div>
                                                                                                        <!-- /.tab-pane -->
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
                                                                                                        </div>
                                                                                                        <!-- /.tab-pane -->
                                                                                                    </div>
                                                                                                    <!-- /.tab-content -->
                                                                                                </div><!-- /.card-body -->
                                                                                            </div>
                                                                                            <!-- ./card -->
                                                                                        </div>
                                                                                        <!-- /.col -->
                                                                                    </div>
                                                                                    <!-- /.row -->
                                                                                </div> <!-- /.card-body -->
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.modal-content -->
                                                                </div>

                                                                <p style="font-size: 18px; text-decoration: overline;">Student Signature Over Printed Name</p>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Action Taken-->
                                                            <div class="form-group col-sm-2" style=" color: #252525">
                                                                <p style="font-size: 18px;">Action Taken:</p>
                                                            </div>
                                                            <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify;">
                                                                <textarea class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;"> </textarea>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Case Status-->
                                                            <div class="form-group col-sm-3" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Type of Offense:</p>
                                                            </div>
                                                            <div class="form-group col-sm-3" style=" color: #252525;">
                                                                <input class="form-check-input" name="radio1" type="radio">Resolved
                                                            </div>
                                                            <div class="form-group col-sm-3" style=" color: #252525;">
                                                                <input class="form-check-input" name="radio1" type="radio">Unresolved
                                                            </div>
                                                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                                <input class="form-check-input" name="radio1" type="radio">Pending
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <!--Recommendation-->
                                                            <div class="form-group col-sm-2" style=" color: #252525;">
                                                                <p style="font-size: 18px;">Recommendation:</p>
                                                            </div>
                                                            <div class="form-group col-sm-10" style="font-size: 16px; color: #252525; text-align: justify; margin-bottom: 2rem;">
                                                                <textarea class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;"> </textarea>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-sm-12">
                                                                <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white; margin-bottom: 3rem;">Complete</button>
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
                                    <label style="font-size: 24px; margin-top: 1rem; color: #3C58FF; float: left; ">COMPLETE</label>
                                </td>
                            </tr>
                            <tr>
                                <td style="vertical-align: top; width: 70%;"><label style="font-size: 28px; margin-top: 1rem;">Home Visitation Form</label></td>
                                <td style=" vertical-align: bottom; width: 20%;">
                                    <!--READ BUTTON-->
                                    <button class="btn btn-default" data-target="#read-request-hv" data-toggle="modal" style="color: white; background-color: #080743; font-size: 14px; width: 80px; margin-right: 1rem;">Read</button>
                                    <!--FILL OUT BUTTON-->
                                    <button class="btn btn-default" data-target="#" data-toggle="modal" style="color: white; background-color: gray; font-size: 14px; width: 80px;">Fill Out</button>
                                </td>
                            </tr>
                        </table>

                        <div class="inner" style="padding-left: 2rem; padding-bottom: 4%">
                            <div style="display: flex; flex-direction: column;">
                                <!--READ HOME VISITATION REQUEST MODAL-->
                                <div class="modal as-modal fade" id="read-request-hv" style="max-width: 100%;">
                                    <div class="modal-dialog as-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border: transparent; padding: 10px;">
                                                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form>
                                                <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; max-height: 500px; overflow-y: auto; text-align: left;">
                                                    <!--MODAL TITLE-->
                                                    <div class="row">
                                                        <div class="col-1 float-right">
                                                            <img height="50px" src="images/fiat.png" width="50px">
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <p style="font-size: 20px; color: #252525; line-height: 0%;"> Fiat Lux Academe Cavite</p>
                                                            </div>
                                                            <div class="row">
                                                                <p style="font-size: 18px; color: #252525;">"Let there be light."</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 justify-content-center" style="text-align: center; margin-top: 2rem; margin-bottom: 3rem;">
                                                        <p style="font-size: 22px; color: #252525; line-height: 0%; font-weight: bold;"> HOME VISITATION FORM</p>
                                                    </div>

                                                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                                                    <div class="row">
                                                        <!--Name of Stud-->
                                                        <div class="form-group col-sm-2" style="color: #252525;">
                                                            <p style="font-size: 18px;">Name of Student:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Dela Cruz</p>
                                                            <p style="font-size: 14px;">Surname</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Allysah</p>
                                                            <p style="font-size: 14px;">First Name</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Cruz</p>
                                                            <p style="font-size: 14px;">Middle Name</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-2" style="color: #252525;">
                                                            <p style="font-size: 18px;">Student No.:</p>
                                                        </div>
                                                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">025495211</p>
                                                        </div>
                                                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">LRN:</p>
                                                        </div>
                                                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">021575212852025</p>
                                                        </div>
                                                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Level & Section:</p>
                                                        </div>
                                                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Grade 11 Mars</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-2" style="color: #252525;">
                                                            <p style="font-size: 18px;">Home Address:</p>
                                                        </div>
                                                        <div class="form-group col-sm-6" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">B100 L2 P4 Mabuhat City, Paliparan 3 Dasmarinas, Cavite</p>
                                                        </div>
                                                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Birthdate:</p>
                                                        </div>
                                                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">12/06/23</p>
                                                        </div>
                                                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Age:</p>
                                                        </div>
                                                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">22</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Name of Father:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Benjamin Dela Cruz</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Contact No.:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">09895589869</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Name of Mother:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Amelia Dela Cruz</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Contact No.:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">09895589869</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Name of Guardian:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">N/A</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Contact No.:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">N/A</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Date of Visitation:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">7/04/23 </p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Place:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Summerwind</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Reason for Home Visitation:</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae dolor luctus, fringilla sem sed, blandit magna. Donec ac tortor mi. Duis nec purus rhoncus, auctor ligula sed, rutrum ante. Aliquam erat volutpat. Morbi vel nulla viverra, semper ex a, tristique nibh. Suspendisse volutpat luctus tellus eget varius. Suspendisse a eros arcu. Aenean ut eros orci. Etiam enim magna, mollis quis velit a, aliquam interdum enim. Nam laoreet efficitur felis et mattis. Donec consectetur eros sapien. Ut a ipsum dui. Sed sed enim ut felis iaculis aliquam.</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Remarks / Agreement:</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vitae dolor luctus, fringilla sem sed, blandit magna. Donec ac tortor mi. Duis nec purus rhoncus, auctor ligula sed, rutrum ante. Aliquam erat volutpat. Morbi vel nulla viverra, semper ex a, tristique nibh. Suspendisse volutpat luctus tellus eget varius. Suspendisse a eros arcu. Aenean ut eros orci. Etiam enim magna, mollis quis velit a, aliquam interdum enim. Nam laoreet efficitur felis et mattis. Donec consectetur eros sapien. Ut a ipsum dui. Sed sed enim ut felis iaculis aliquam.</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 5rem;">
                                                            <p style="font-size: 18px; text-decoration: overline;">Parent Signature Over Printed Name</p>
                                                        </div>
                                                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 5rem;">
                                                            <p style="font-size: 18px; text-decoration: overline;">Student Signature Over Printed Name</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-5" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Prepared By:</p>
                                                        </div>
                                                        <div class="form-group col-sm-5" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Approved By:</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-5" style=" color: #252525; text-align: center; margin-top: 3rem;">
                                                            <p style="font-size: 18px; text-decoration: overline;">Adviser</p>
                                                        </div>
                                                        <div class="form-group col-sm-7" style=" color: #252525; text-align: center; margin-top: 3rem;">
                                                            <p style="font-size: 18px; text-decoration: overline;">SHERYL FERRERAS-FAX, MAEd </p>
                                                            <p style="font-size: 16px;">Junior High School Principal</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-5" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Noted By:</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 3rem;">
                                                            <p style="font-size: 18px; text-decoration: overline;">SHERYL FERRERAS-FAX, MAEd</p>
                                                            <p style="font-size: 16px;">Junior High School Principal</p>
                                                        </div>
                                                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 3rem;">
                                                            <p style="font-size: 18px; text-decoration: overline;">ROSAHLE S. PAGADORA, MS
                                                                Senior High School Principal</p>
                                                            <p style="font-size: 16px;">Senior High School Principal</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-12">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white; margin-bottom: 3rem;">Complete</button>
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
                        </div>

                        <div class="inner" style="padding-left: 2rem; padding-bottom: 4%">
                            <div style="display: flex; flex-direction: column;">
                                <!--FILLOUT HOME VISITATION REQUEST MODAL-->
                                <div class="modal as-modal fade" id="fill-request-hv" style="max-width: 100%;">
                                    <div class="modal-dialog as-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header" style="border: transparent; padding: 10px;">
                                                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form>
                                                <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; max-height: 500px; overflow-y: auto; text-align: left;">
                                                    <!--MODAL TITLE-->
                                                    <div class="row">
                                                        <div class="col-1 float-right">
                                                            <img height="50px" src="images/fiat.png" width="50px">
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="row">
                                                                <p style="font-size: 20px; color: #252525; line-height: 0%;"> Fiat Lux Academe Cavite</p>
                                                            </div>
                                                            <div class="row">
                                                                <p style="font-size: 18px; color: #252525;">"Let there be light."</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12 justify-content-center" style="text-align: center; margin-top: 2rem; margin-bottom: 3rem;">
                                                        <p style="font-size: 22px; color: #252525; line-height: 0%; font-weight: bold;"> HOME VISITATION FORM</p>
                                                    </div>

                                                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                                                    <div class="row">
                                                        <!--Name of Stud-->
                                                        <div class="form-group col-sm-2" style="color: #252525;">
                                                            <p style="font-size: 18px;">Name of Student:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                            <p style="font-size: 14px; text-align: center;">Surname</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                            <p style="font-size: 14px; text-align: center;">First Name</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                            <p style="font-size: 14px; text-align: center;">Middle Name</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-2" style="color: #252525;">
                                                            <p style="font-size: 18px;">Student No.:</p>
                                                        </div>
                                                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                                                        </div>
                                                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px;">LRN:</p>
                                                        </div>
                                                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                                                        </div>
                                                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px;">Level & Section:</p>
                                                        </div>
                                                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-2" style="color: #252525;">
                                                            <p style="font-size: 18px;">Home Address:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                        </div>
                                                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px;">Birthdate:</p>
                                                        </div>
                                                        <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="date">
                                                        </div>
                                                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px;">Age:</p>
                                                        </div>
                                                        <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Name of Father:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                        </div>
                                                        <div class="form-group col-sm-2" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Contact No.:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Name of Mother:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                        </div>
                                                        <div class="form-group col-sm-2" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Contact No.:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Name of Guardian:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                        </div>
                                                        <div class="form-group col-sm-2" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Contact No.:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Date of Visitation:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="date">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Place:</p>
                                                        </div>
                                                        <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                                            <input class="form-control" id="input-date" style="border: 1px solid black; border-top: none; border-left: none; border-right: none;" type="text">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Reason for Home Visitation:</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;">
                                                            <textarea class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;"> </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-3" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Remarks / Agreement:</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;">
                                                            <textarea class="form-control" id="input-date" style="border: 1px solid black; width: 100%; height: 150px; resize: none;"> </textarea>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 5rem;">
                                                            <a class="btn btn-primary action-btn" data-target="#add-signature" data-toggle="modal" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
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
                                                                            <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto; text-align: center;">

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
                                                                                                    </div>
                                                                                                    <!-- /.tab-pane -->
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
                                                                                                    </div>
                                                                                                    <!-- /.tab-pane -->
                                                                                                </div>
                                                                                                <!-- /.tab-content -->
                                                                                            </div><!-- /.card-body -->
                                                                                        </div>
                                                                                        <!-- ./card -->
                                                                                    </div>
                                                                                    <!-- /.col -->
                                                                                </div>
                                                                                <!-- /.row -->
                                                                            </div> <!-- /.card-body -->
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>

                                                            <p style="font-size: 18px; text-decoration: overline;">Parent Signature Over Printed Name</p>
                                                        </div>
                                                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 5rem;">
                                                            <a class="btn btn-primary action-btn" data-target="#add-signature" data-toggle="modal" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
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
                                                                            <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto; text-align: center;">

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
                                                                                                    </div>
                                                                                                    <!-- /.tab-pane -->
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
                                                                                                    </div>
                                                                                                    <!-- /.tab-pane -->
                                                                                                </div>
                                                                                                <!-- /.tab-content -->
                                                                                            </div><!-- /.card-body -->
                                                                                        </div>
                                                                                        <!-- ./card -->
                                                                                    </div>
                                                                                    <!-- /.col -->
                                                                                </div>
                                                                                <!-- /.row -->
                                                                            </div> <!-- /.card-body -->
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>

                                                            <p style="font-size: 18px; text-decoration: overline;">Student Signature Over Printed Name</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-5" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Prepared By:</p>
                                                        </div>
                                                        <div class="form-group col-sm-5" style="font-size: 16px; color: #252525;">
                                                            <p style="font-size: 18px; text-decoration: underline;">Approved By:</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-5" style=" color: #252525; text-align: center; margin-top: 3rem;">
                                                            <a class="btn btn-primary action-btn" data-target="#add-signature" data-toggle="modal" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
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
                                                                            <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto; text-align: center;">

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
                                                                                                    </div>
                                                                                                    <!-- /.tab-pane -->
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
                                                                                                    </div>
                                                                                                    <!-- /.tab-pane -->
                                                                                                </div>
                                                                                                <!-- /.tab-content -->
                                                                                            </div><!-- /.card-body -->
                                                                                        </div>
                                                                                        <!-- ./card -->
                                                                                    </div>
                                                                                    <!-- /.col -->
                                                                                </div>
                                                                                <!-- /.row -->
                                                                            </div> <!-- /.card-body -->
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>

                                                            <p style="font-size: 18px; text-decoration: overline;">Adviser</p>
                                                        </div>
                                                        <div class="form-group col-sm-7" style=" color: #252525; text-align: center; margin-top: 3rem;">
                                                            <a class="btn btn-primary action-btn" data-target="#add-signature" data-toggle="modal" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
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
                                                                            <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto; text-align: center;">

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
                                                                                                    </div>
                                                                                                    <!-- /.tab-pane -->
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
                                                                                                    </div>
                                                                                                    <!-- /.tab-pane -->
                                                                                                </div>
                                                                                                <!-- /.tab-content -->
                                                                                            </div><!-- /.card-body -->
                                                                                        </div>
                                                                                        <!-- ./card -->
                                                                                    </div>
                                                                                    <!-- /.col -->
                                                                                </div>
                                                                                <!-- /.row -->
                                                                            </div> <!-- /.card-body -->
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>

                                                            <p style="font-size: 18px; text-decoration: overline;">SHERYL FERRERAS-FAX, MAEd </p>
                                                            <p style="font-size: 16px;">Junior High School Principal</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-5" style=" color: #252525;">
                                                            <p style="font-size: 18px;">Noted By:</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 3rem;">
                                                            <a class="btn btn-primary action-btn" data-target="#add-signature" data-toggle="modal" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
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
                                                                            <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto; text-align: center;">

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
                                                                                                    </div>
                                                                                                    <!-- /.tab-pane -->
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
                                                                                                    </div>
                                                                                                    <!-- /.tab-pane -->
                                                                                                </div>
                                                                                                <!-- /.tab-content -->
                                                                                            </div><!-- /.card-body -->
                                                                                        </div>
                                                                                        <!-- ./card -->
                                                                                    </div>
                                                                                    <!-- /.col -->
                                                                                </div>
                                                                                <!-- /.row -->
                                                                            </div> <!-- /.card-body -->
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>

                                                            <p style="font-size: 18px; text-decoration: overline;">SHERYL FERRERAS-FAX, MAEd</p>
                                                            <p style="font-size: 16px;">Junior High School Principal</p>
                                                        </div>
                                                        <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 3rem; margin-bottom: 2rem;">
                                                            <a class="btn btn-primary action-btn" data-target="#add-signature" data-toggle="modal" href="#" style="color: #0A0863; font-weight: bold; text-align: center;">
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
                                                                            <div class="modal-body" style="margin-left: 2rem; margin-right: 2rem; max-height: 500px; overflow-y: auto; text-align: center;">

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
                                                                                                    </div>
                                                                                                    <!-- /.tab-pane -->
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
                                                                                                    </div>
                                                                                                    <!-- /.tab-pane -->
                                                                                                </div>
                                                                                                <!-- /.tab-content -->
                                                                                            </div><!-- /.card-body -->
                                                                                        </div>
                                                                                        <!-- ./card -->
                                                                                    </div>
                                                                                    <!-- /.col -->
                                                                                </div>
                                                                                <!-- /.row -->
                                                                            </div> <!-- /.card-body -->
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- /.modal-content -->
                                                            </div>

                                                            <p style="font-size: 18px; text-decoration: overline;">ROSAHLE S. PAGADORA, MS
                                                                Senior High School Principal</p>
                                                            <p style="font-size: 16px;">Senior High School Principal</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-12">
                                                            <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white; margin-bottom: 3rem;">Complete</button>
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
                        </div>
                    </div>
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
                                        <label style="font-size: 24px; margin-top: 1rem; color: #252525; float: left; ">PENDING</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 70%;"><label style="font-size: 28px; margin-top: 1rem;">Violation Form</label></td>
                                    <td style="vertical-align: bottom; width: 20%;">
                                        <!--READ BUTTON-->
                                        <button class="btn btn-default" data-target="#read-request-vf" data-toggle="modal" style="color: white; background-color: gray; font-size: 14px; width: 80px; margin-right: 1rem;">Read</button>
                                        <!--FILL OUT BUTTON-->
                                        <button class="btn btn-default" data-target="#fill-request-vf" data-toggle="modal" style="color: white; background-color: #080743; font-size: 14px; width: 80px;">Fill Out</button>
                                    </td>
                                </tr>
                            </table>
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
