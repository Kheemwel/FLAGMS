<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>Home</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">

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
    @livewireStyles()
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('common.home-navigation-bar')
        <!--------------- /.navbar ----------------------->

        <!--------------------------------------START OF PAGE CONTENT-------------------------->

        <!-- Content Wrapper. Contains page content -->
        <div class="" style="background-color: white; padding: 4rem;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2" style="text-align: left;">
                        <div class="col-6 d-flex flex-column justify-content-center">
                            <row>
                                <p style="font-weight: bold; font-size: 50px; color: #0A0863;">FLAGMS</p>
                            </row>
                            <row>
                                <p style="font-size: 35px; font-weight: 800px;">(Fiat Lux Academe Guidance
                                    Management System)</p>
                            </row>
                            <row>
                                <p style="font-size: 24px; line-height: 30px;">A web-based hybrid guidance
                                    management system for Fiat Lux Academe Dasmariñas.</p>
                            </row>
                        </div>
                        <div class="col-6" style="padding-top: 1rem;">
                            <img alt="Hiraya Building" src="images/Home and About/hiraya.png" width="100%">
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>

        <!--INTRO TO GUIDANCE ASSOCIATE-->
        <div class="" style="background-color:  #7684B9;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid" style="padding: 5rem;">
                    <div class="row mb-2" style="text-align: center; padding-top: 5rem; padding-bottom: 5rem;">
                        <div class="col-12">
                            <row>
                                <p style="font-size: 40px; color: white;">Mrs. Josephine “Ma’am Josie” Amador</p>
                            </row>
                            <row>
                                <p style="font-size: 24px; font-weight: 800px; color: white;">THE GUIDANCE ASSOCIATE
                                </p>
                                <p style="font-size: 24px; font-weight: 800px; color: white; line-height: 2px;"> OF
                                    FIAT LUX ACADEME DASMARIÑAS</p>
                            </row>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>

        <!--GUIDANCE ASSOCIATE QUOTE-->
        <div class="" style="background-color: white; padding: 5rem; padding-bottom: 5rem;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid" style="padding: 5rem;">
                    <div class="row mb-2" style="text-align: left;">
                        <div class="col-6 d-flex flex-column justify-content-center">
                            <row>
                                <p style="font-size: 40px; color: #252525; font-weight: bold;">“Every Luxian should
                                    be reminded that no matter who they are, they are accepted.” </p>
                            </row>
                            <row>
                                <p style="font-size: 24px; line-height: 30px; color: #252525;">- Ma’am Josie</p>
                            </row>
                        </div>
                        <div class="col-6" style="padding-top: 1rem;">
                            <img alt="FLA Kid" src="images/Home and About/fla kid.png" width="100%">
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>

        <!--ROLE DESCRIPTION OF GUIDANCE ASSOCIATE-->
        <div class="" style="background-color:  #7684B9;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid" style="padding: 5rem;">
                    <div class="row mb-2" style="text-align: center; padding-top: 5rem; padding-bottom: 5rem;">
                        <div class="col-12">
                            <row>
                                <p style="font-size: 40px; color: white;">“The role and responsibility of the
                                    guidance associate of Fiat Lux Academe Dasmariñas is to assure the Luxians’
                                    mental health. For them to be free of stress and to have the sense of
                                    belongingness to the community of Fiat Lux Academe, for them to feel accepted.”
                                </p>
                            </row>
                            <row>
                                <p style="font-size: 24px; color: white;">- Ma’am Josie</p>
                            </row>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>

        <!--USE OF FLAGMS-->
        <div class="" style="background-color: white; padding: 5rem; padding-bottom: 5rem;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid" style="padding: 5rem;">
                    <div class="row mb-2" style="text-align: left;">
                        <div class="col-6 d-flex flex-column justify-content-center">
                            <row>
                                <p style="font-size: 40px; color: #252525; font-weight: bold;">With the use of
                                    FLAGMS, the guidance office can provide a better and more efficient service to
                                    all Luxians.</p>
                            </row>
                        </div>
                        <div class="col-6" style="padding-top: 1rem;">
                            <img alt="shape design" src="images/Home and About/shapes.png" width="100%">
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>

    </div>

    <footer class="footer layout-*-footer-fixed">
        <table class="table table-sm" style="text-align: center; background: linear-gradient(180deg, #000000 -129.53%, #0A0863 100%);">
            <tbody>
                <tr>
                    <td style="padding-top: 2rem; text-align: center;">
                        <a class="brand-link" href="#" style="border: transparent;">
                            <img alt="AdminLTE Logo" class="brand-image img-circle" src="images/fiat.png" style="width: auto; height: auto;">
                            <p style="font-size: 20px; color: white; font-weight: bold;">Fiat Lux Academe</p>
                        </a>
                    </td>
                    <td style="padding-top: 2rem;">
                        <p style="font-size: 16px; color: white; font-weight: bold;"><iconify-icon icon="ph:map-pin-fill"></iconify-icon> Don Placido Campos Ave., Barangay San</p>
                        <p style="font-size: 16px; color: white; font-weight: bold;">Jose, Dasmarinas City, Cavite
                        </p>
                    </td>
                    <td style="padding-top: 2rem;">
                        <a class="brand-link" href="#" style="border: transparent;">
                            <p style="font-size: 16px; color: white; font-weight: bold;"><iconify-icon icon="teenyicons:phone-solid"></iconify-icon> 4166905</p>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
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
    <script src="adminLTE-3.2/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    @livewireScripts()
</body>

</html>
