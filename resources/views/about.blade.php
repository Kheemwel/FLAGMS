<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <title>About</title>
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
        <div class="" style="background-color:  white padding: 4rem;">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2" style="text-align: center; margin-top: 5rem;">
                        <div class="col-12 d-flex flex-column justify-content-center">
                            <p style="font-weight: bold; font-size: 50px; color: #252525;">About</p>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>

        <!-- VISION -->
        <div class="" style="background-color:  white; padding: 5rem; padding-bottom: 5rem;">
            <section class="content-header">
                <div class="container-fluid" style="padding: 5rem;">
                    <div class="row mb-2" style="text-align: left;">
                        <div class="col-6 d-flex flex-column justify-content-center">
                            <row>
                                <p style="font-size: 40px; color: #252525; font-weight: bold;">Our Vision</p>
                            </row>
                            <row>
                                <p style="font-size: 28px; color: #252525;">To create a future where guidance is readily available and that can help and empower the individuals who use it.</p>
                            </row>
                        </div>
                        <div class="col-6" style="padding-top: 1rem;">
                            <img alt="Vision" src="images/Home and About/vision.png" width="100%">
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>

        <!-- MISSION -->
        <div class="" style="background-color:  white; padding: 5rem; margin-bottom: 8rem;">
            <section class="content-header">
                <div class="container-fluid" style="padding: 5rem;">
                    <div class="row mb-2" style="text-align: left;">
                        <div class="col-6" style="padding-top: 1rem;">
                            <img alt="Mission" src="images/Home and About/mission.png" width="100%">
                        </div>
                        <div class="col-6 d-flex flex-column justify-content-center">
                            <row>
                                <p style="font-size: 40px; color: #252525; font-weight: bold;">Our Mission</p>
                            </row>
                            <row>
                                <p style="font-size: 28px; color: #252525;">To provide a robust, fully functioning, and user-friendly hybrid guidance management system that empowers Fiat Lux Academe’s guidance office to achieve their goals efficiently and effectively.</p>
                            </row>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>

        <!-- THE TEAM -->
        <div class="" style="background-color:  white; padding: 4rem;">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2" style="text-align: center;">
                        <div class="col-12 d-flex flex-column justify-content-center">
                            <p style=" font-size: 45px; color: #252525;">The Team</p>
                            <p style=" font-size: 28px; color: #252525;">Meet the developers behind FLAGMS.</p>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>

        <!-- THE TEAM LIST-->
        <div class="" style="background-color:  white; padding: 5rem;">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2" style="text-align: center;">
                        <div class="col-3 d-flex flex-column justify-content-center" style="padding: 2rem;">
                            <img alt="Vision" src="images/Home and About/beller.png" width="100%">
                        </div>
                        <div class="col-3 d-flex flex-column justify-content-center" style="padding: 2rem;">
                            <img alt="Vision" src="images/Home and About/delacruz.png" width="100%">
                        </div>
                        <div class="col-3 d-flex flex-column justify-content-center" style="padding: 2rem;">
                            <img alt="Vision" src="images/Home and About/juanima.png" width="100%">
                        </div>
                        <div class="col-3 d-flex flex-column justify-content-center" style="padding: 2rem;">
                            <img alt="Vision" src="images/Home and About/lopez.png" width="100%">
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
                            <p style="font-size: 20px; color: white;; font-weight: bold;">Fiat Lux Academe</p>
                        </a>
                    </td>
                    <td style="padding-top: 2rem;">
                        <p style="font-size: 16px; color: white; font-weight: bold;"><iconify-icon icon="ph:map-pin-fill"></iconify-icon> Don Placido Campos Ave., Barangay San</p>
                        <p style="font-size: 16px; color: white; font-weight: bold;">Jose, Dasmarinas City, Cavite</p>
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
    <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    @livewireScripts()
</body>

</html>
