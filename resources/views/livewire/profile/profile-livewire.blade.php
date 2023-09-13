@section('head')
    <title>Profile</title>

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
    <div class="row" style="align-content: center; margin-left: 1rem; margin-right: 1rem; margin-top: 2rem;">
        <div class="col-12">
            <div class="col-lg-12">
                <div class="small-box bg-info" style="background-color: #7684B9 !important; color: #252525 !important; border-radius: 10px; display: flex; flex-direction: row; height: 200px; margin-bottom: 0;">
                </div>
            </div>
            <!------------------------------------------------------------------------------------------------------>


            <div class="position-fixed p-3" style="z-index: 1100; right: 0; top: 0;">
                <div aria-atomic="true" aria-live="assertive" class="toast hide" data-delay="3000" id="liveToast" role="alert">
                    <div class="toast-header">
                        <img class="rounded mr-2" src="favicon.ico" width="24">
                        <strong class="mr-auto">FLAGMS</strong>
                        <small>{{ now()->format('h:i A') }}</small>
                        <button aria-label="Close" class="ml-2 mb-1 close" data-dismiss="toast" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body bg-success">
                        @if (session()->has('message'))
                            {{ session('message') }}
                        @endif
                    </div>
                </div>
            </div>

            <!--User Important Details-->
            <div class="col-lg-12" style="margin-bottom: 3rem;">
                <img alt="user profile" src="{{ $this->viewProfile() }}" style=" height: 150px; width: 150px;">
                <label style="font-size: 26px; color: #252525ce; line-height: 5%; margin-left: 1rem; margin-top: 23px;">{{ $name }}</label>
                <button class="btn btn-default" data-target="#edit-profile" data-toggle="modal" style="color: white; background-color: #080743; font-size: 12px; width: 100px; margin-left: 69rem;"><i class="fa fa-solid fa-pen"></i> Edit Profile</button>
                <!--EDIT PROFILE MODAL-->
                @include('livewire.profile.edit-profile')
            </div>
            <!----------------------------------------------------------------------------------------->
            <!--User Personal Details-->
            <div class="col-lg-13">
                <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; margin-left: 1rem; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; display: flex; flex-direction: row;">
                    <div class="inner" style="padding-left: 3rem; padding-top: 3%; padding-bottom: 1%">
                        <div style="display: flex; flex-direction: column;">
                            <label style="font-size: 18px; color: #060554;">Personal Information</label>
                            <div class="row">
                                <!--NAME-->
                                <div class="form-group col-sm-4">
                                    <label style="font-size: 18px; font-weight: bold;">Name</label>
                                </div>
                                <div class="form-group col-sm-8">
                                    <label style="font-size: 18px; font-weight: normal; margin-left: 2rem;">{{ $name }}</label>
                                </div>
                            </div>
                            <div class="row" style="line-height: 5%;">
                                <!--ROLE-->
                                <div class="form-group col-sm-4">
                                    <label style="font-size: 18px; font-weight: bold;">Role</label>
                                </div>
                                <div class="form-group col-sm-8">
                                    <label style="font-size: 18px; font-weight: normal; margin-left: 2rem;">{{ $role }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <!--USERNAME-->
                                <div class="form-group col-sm-4">
                                    <label style="font-size: 18px; font-weight: bold; margin-right: 2;">Username</label>
                                </div>
                                <div class="form-group col-sm-8">
                                    <label style="font-size: 18px; font-weight: normal; margin-left: 2rem;">{{ $username }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('scripts')
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
    <script>
        Livewire.on('showToast', () => {
            setTimeout(function() {
                $('.toast').toast('show');
            });
        });
    </script>
@endsection
