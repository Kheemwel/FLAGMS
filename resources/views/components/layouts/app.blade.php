<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link href="favicon.ico" rel="icon" type="image/x-icon">
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
    <link href="css/app.css" rel="stylesheet">


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
    </style>
    <style>
        /*Push button bars icon*/
        .pushmenubtn {
            display: inline-block;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #0A0863;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /*Side nav*/
        .nav-link-button {
            border-radius: 50%;
            background-color: transparent;
        }

        .nav-link-button p,
        .icon {
            color: #252525;
        }

        .nav-link-button.active {
            background-color: #0A0863 !important;
        }

        .nav-link-button.active p,
        .nav-link-button.active i,
        .nav-link-button.active iconify-icon {
            color: white !important;
        }

        /* .nav-link-button.active,
        .nav-link-button:focus {
            background-color: white;
        } */

        .nav-link-button:hover,
        .nav-link-button:focus {
            background-color: rgb(217, 217, 217) !important;
            /* Change color on hover or click */
        }

        .nav-link-button:hover p,
        .nav-link-button:hover i,
        .nav-link-button:hover iconify-icon {
            color: #252525 !important;
            /* Change color on hover or click */
        }
    </style>
    @livewireStyles()


    <!-- jQuery -->
    <script src="adminLTE-3.2/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 JS -->
    <script src="adminLTE-3.2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery UI -->
    {{-- <script src="adminLTE-3.2/plugins/jquery-ui/jquery-ui.min.js"></script> --}}
    <!-- overlayScrollbars -->
    <script src="adminLTE-3.2/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="adminLTE-3.2/dist/js/adminlte.min.js"></script>
    <!-- ChartJS -->
    <script src="adminLTE-3.2/plugins/chart.js/Chart.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="adminLTE-3.2/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- Toastr -->
    <script src="adminLTE-3.2/plugins/toastr/toastr.min.js"></script>
    {{-- For Tooltip --}}
    <script src="adminLTE-3.2/plugins/popper/popper.min.js"></script>
    <script src="js/app.js"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

    @yield('head-scripts')
</head>

<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">
    <!-- Site wrapper -->
    <div class="wrapper">
        @livewire('left-navigation-livewire')
        @livewire('top-navigation-livewire')
        {{ $slot }}
        @include('components.layouts.user-guide')
    </div>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b>
            1.0
        </div>
        <strong>Copyright
            &copy;
            2023.</strong>
        All
        rights
        reserved.
    </footer>

    @livewireScripts()
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data('userGuide', () => ({
                content: 'start',
                view(content, ref) {
                    this.content = content;
                    this.$nextTick(() => {
                        this.$refs[ref].scrollIntoView({
                            behavior: 'smooth'
                        });
                    })
                },
            }));
        });
    </script>
    <script>
        Livewire.on('closeModals', () => {
            $('.modal').modal('hide');
        });

        $(function() {
            $("[tooltip='enable']").tooltip();
            $("[tooltip='enable']").attr('wire:ignore.self', '');
        });
        Livewire.hook('morph.updated', ({
            el,
            component
        }) => {
            $("[tooltip='enable']").tooltip('dispose').tooltip();
        })

        Livewire.hook('morph.updated', ({
            el,
            component,
            toEl,
            skip,
            childrenOnly
        }) => {
            $("[tooltip='enable']").tooltip('hide');
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
    </script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('1037cae8457eabcc7602', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('new-notification');
        channel.bind('NewNotification', function(data) {
            Livewire.dispatch('newNotification');
            console.log(data);
        });
    </script>
    @yield('scripts')
</body>
<!-- ./wrapper -->

</html>
