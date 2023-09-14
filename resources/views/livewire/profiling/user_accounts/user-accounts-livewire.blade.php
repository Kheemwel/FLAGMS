@section('head')
    <title>Admin | Profiling</title>

    <!-- Select2 CSS -->
    <link href="adminLTE-3.2/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="adminLTE-3.2/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet">

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
    <!-- jQuery -->
    <script src="adminLTE-3.2/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 JS -->
    <script src="adminLTE-3.2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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

    {{-- Select2 JS --}}
    <script src="adminLTE-3.2/plugins/select2/js/select2.full.min.js"></script>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">User Accounts</h1>
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

    <div class="row">
        <div class="col-12">
            <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                <!--SEARCH FEATURE-->
                <div class="input-group input-group-sm" style="max-width: 20%;">
                    <!--SEARCH INPUT-->
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live='search'>
                </div>
                <!--ROLE FILTER-->
                <div class="input-group-prepend" style="margin-left: 1rem;">
                    <select class="form-select form-select-sm mb-2" id="roles" selected wire:model.live="filterRole">
                        <option selected value='All'>{{ $filterRole ? 'All' : 'Role' }}</option>
                        @foreach ($roles as $roleFilter)
                            <option value="{{ $roleFilter->role }}">{{ $roleFilter->role }}</option>
                        @endforeach
                    </select>
                </div>
                <!--ADD USER BUTTON-->
                <button class="btn btn-default" data-target="#addUserModal" data-toggle="modal" style="max-width: 7%; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button">
                    <i aria-hidden="true" class="fa fa-plus"></i>
                    Add User
                </button>
                <!--BATCH ADD USER BUTTON-->
                <button class="btn btn-default" data-target="#batchAddUserModal" data-toggle="modal" style="font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button">
                    <iconify-icon height="14" icon="mdi:file-multiple" style="color: white;" width="14"></iconify-icon>
                    Batch Add Users
                </button>
                <!--DOWNLOAD TABLE BUTTON-->
                <button wire:click='export()' class="btn btn-default" style="font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button">
                    <iconify-icon height="14" icon="mdi:file-export" style="color: white;" width="14"></iconify-icon>
                    Export User Acounts Table
                </button>
            </div>
            <div>
                <input type="checkbox" wire:model.live="showArchivedAccounts">View Archived Accounts
            </div>
            <!--PROFILING TABLE SECTION-->
            @if ($showArchivedAccounts)
                @include('livewire.profiling.user_accounts.archive-table')
            @else
                <div class="card" style="margin-left: 2rem; margin-right: 2rem;">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
                        <table class="table text-nowrap" style="text-align: center;">
                            <thead style="background-color: #7684B9; color: white;">
                                <tr>
                                    <th style="border-right: 1px solid #252525;">ID</th>
                                    <th style="border-right: 1px solid #252525;">Name</th>
                                    <th style="border-right: 1px solid #252525;">Username</th>
                                    <th style="border-right: 1px solid #252525;">Role</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            <!--USER INFO EDIT BUTTON-->
                                            <button class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" wire:click="get_data({{ $user->id }})">
                                                <i class="fa fa-solid fa-pen"></i>
                                            </button>
                                            <!-------------------------------------------------------------------------------------------------------------------------->
                                            <!--USER INFO VIEW BUTTON-->
                                            <button class="btn btn-primary action-btn" data-target="#view-user-btn" data-toggle="modal" wire:click="get_data({{ $user->id }})">
                                                <i aria-hidden="true" class="fa fa-eye"></i>
                                            </button>

                                            {{-- ARCHIVE USER --}}
                                            <button class="btn btn-primary action-btn" wire:click="archive({{ $user->id }})">
                                                <i aria-hidden="true" class="fa fa-archive"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                {{ $users->links('components.pagination') }}
            @endif

            @include('livewire.profiling.user_accounts.add-user')
            @include('livewire.profiling.user_accounts.edit-user')
            @include('livewire.profiling.user_accounts.view-user')
            @include('livewire.profiling.user_accounts.batch-add-user')
            <!-- /.card -->
        </div>
    </div>
</div>

@section('scripts')
    <script>
        Livewire.on('showToast', () => {
            setTimeout(function() {
                $('.toast').toast('show');
            });
        });
        Livewire.on('parentForm', () => {
            setTimeout(function() {
                $('#multiple-select-optgroup-clear-field').select2({
                    theme: "bootstrap4",
                    placeholder: $(this).data('placeholder'),
                    allowClear: true,
                });

                $('#multiple-select-optgroup-clear-field').on('change', function(e) {
                    let data = new Array($(this).val());
                    Livewire.dispatch('setSelectedStudents', data);
                });
            });
        });
    </script>
@endsection
