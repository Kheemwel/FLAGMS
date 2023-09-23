<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    @yield('title')
    @yield('icon')

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
        @import url('https://fonts.googleapis.com/css2?family=Inria+Serif:wght@400;700&display=swap');
        /* Inria Font*/
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap');
        /* Lato Font*/
        @import url('https://fonts.googleapis.com/css2?family=Karla:wght@400&display=swap');
        /* Karla Font*/

        /*login modal resizing*/
        .login-modal .modal-dialog {
            max-width: 25%;
        }

        /* Center the modal vertically and horizontally */
        .modal-center {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>


    @livewireStyles()

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
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    {{ $slot }}
    
    <!--LOGIN FORM MODAL-->
    @livewire('login-livewire')

    @yield('footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar">
        <!-- Control sidebar content goes here -->
    </aside>
    @livewireScripts()
</body>

</html>
