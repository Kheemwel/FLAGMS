@section('head')
    <title>Admin | Content Management</title>
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

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Content Management</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

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

    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><strong>Website Logo</strong></h1>
            <br>
            <br>
            <img src="{{ $logo }}" alt="" width='100px' height="100px">
            <br>
            <br>
            <button class="btn btn-primary" data-target='#updateLogoModal' data-toggle='modal'>Update</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><strong>Website Title</strong></h1>
            <br>
            <br>
            <p>{{ $title }}</p>
            <button class="btn btn-primary" data-target='#updateTitleModal' data-toggle='modal'>Update</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><strong>Website Subtitle</strong></h1>
            <br>
            <br>
            <p>{{ $subtitle }}</p>
            <button class="btn btn-primary" data-target='#updateSubtitleModal' data-toggle='modal'>Update</button>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><strong>Website School Name</strong></h1>
            <br>
            <br>
            <p>{{ $school_name }}</p>
            <button class="btn btn-primary" data-target='#updateSchoolNameModal' data-toggle='modal'>Update</button>
        </div>
    </div>

    @include('livewire.content_management.update-logo')
    @include('livewire.content_management.update-title')
    @include('livewire.content_management.update-subtitle')
    @include('livewire.content_management.update-school-name')
</div>

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

    <script>
        Livewire.on('showToast', () => {
            setTimeout(function() {
                $('.toast').toast('show');
            });
        });
    </script>
@endsection
