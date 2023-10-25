<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    @yield('head')

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
    <!-- Toastr -->
    <script src="adminLTE-3.2/plugins/toastr/toastr.min.js"></script>
    {{-- For Tooltip --}}
    <script src="adminLTE-3.2/plugins/popper/popper.min.js"></script>

    @yield('head-scripts')
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
    <script>
        $(function() {
            $("[tooltip='enable']").tooltip();
        });
        Livewire.hook('morph.updated', ({
            el,
            component
        }) => {
            $("[tooltip='enable']").tooltip('dispose').tooltip();
        })
        
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "0",
            "hideDuration": "0",
            "timeOut": "3000",
            "extendedTimeOut": "0",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        Livewire.on('showToast', (data) => {
            const type = data[0];
            const message = data[1];

            if (type == 'success') {
                toastr.success(message)
            } else if (type == 'error') {
                toastr.error(message)
            } else if (type == 'info') {
                toastr.info(message)
            } else if (type == 'warning') {
                toastr.warning(message)
            }
        });

        Livewire.on('loginModal', () => {
            $('#login-modal').modal('show');
        })
        Livewire.on('showModal', (data) => {
            const id = data[0];
            $(id).modal('show');
        })
        Livewire.on('closeModal', (data) => {
            const id = data[0];
            $(id).modal('hide');
        })

        Livewire.on('cooldown', () => {
            setTimeout(() => {
                var button = $("#btn-send-code");
                button.prop("disabled", true); // Disable the button

                var timer = 30;
                var countdownInterval = setInterval(function() {
                    button.text(timer + 's'); // Update the button text
                    timer--;

                    if (timer < 0) {
                        clearInterval(countdownInterval);
                        button.text("Send Code"); // Reset the button text
                        button.prop("disabled", false); // Enable the button
                    }
                }, 1000);
            });
        })
    </script>
    @yield('scripts')
</body>

</html>
