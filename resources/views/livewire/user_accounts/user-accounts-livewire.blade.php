@section('head')
    <title>Admin|User Accounts</title>

    <!-- Select2 CSS -->
    <link href="adminLTE-3.2/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="adminLTE-3.2/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet">

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

        .archivals:hover {
            color: #3C58FF;
            /* Replace with your desired hover color */
        }

        #delete:hover {
            color: #FF0000;
            /* Replace with your desired hover color */
        }

        /********************************/
    </style>
@endsection

@section('head-scripts')
    {{-- Select2 JS --}}
    <script src="adminLTE-3.2/plugins/select2/js/select2.full.min.js"></script>

    <!--Sorting Table-->
    <script src="adminLTE-3.2/plugins/datatables/jquery.dataTables.min.js"></script>
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

    <div class="row">
        <div class="col-12">
            <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                {{-- <!--SEARCH FEATURE-->
                <div class="input-group input-group-sm" style="max-width: 20%;">
                    <!--SEARCH INPUT-->
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live.debounce.500ms='search'>
                </div>
                <!--ROLE FILTER-->
                <div class="input-group-prepend" style="margin-left: 1rem;">
                    <select class="form-select form-select-sm mb-2" id="roles" selected wire:model.live.debounce.500ms="filterRole">
                        <option selected value='All'>{{ $filterRole ? 'All' : 'Role' }}</option>
                        @foreach ($roles as $roleFilter)
                            <option value="{{ $roleFilter->role }}">{{ $roleFilter->role }}</option>
                        @endforeach
                    </select>
                </div> --}}


                <div class="input-group input-group-sm" style="max-width: 20%;">
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live.debounce.500ms.debounce.500ms='search'>
                    <div class="input-group-append">
                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" type="button">Role</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" wire:click="$set('filterRole', 'All')">All</a>
                            @foreach ($roles as $roleFilter)
                                <a class="dropdown-item" href="#" wire:click="$set('filterRole', '{{ $roleFilter->role }}')">{{ $roleFilter->role }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--ADD USER BUTTON-->
                @if (wordsExistInArray(['Add', 'Account'], $privileges))
                    <button class="btn btn-default" data-target="#addUserModal" data-toggle="modal" style="max-width: 7%; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button">
                        <i aria-hidden="true" class="fa fa-plus"></i>
                        Add User
                    </button>
                    <!--BATCH ADD USER BUTTON-->
                    <button class="btn btn-default" data-target="#batchAddUserModal" data-toggle="modal" style="font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button">
                        <i class="fa fa-solid fa-file-import" style="color: white;"></i>
                        Import User Accounts
                    </button>
                @endif
                <!--DOWNLOAD TABLE BUTTON-->
                @if (wordsExistInArray(['Export', 'Account'], $privileges))
                    <button class="btn btn-default" style="font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button" wire:click='export()'>
                        <i class="fa fa-solid fa-file-export" style="color: white;"></i>
                        Export User Accounts
                    </button>
                @endif
            </div>

            <div class="card card-primary card-tabs" style="background-color:  rgb(253, 253, 253);margin-left: 2rem; margin-right: 2rem;">
                <div class="card-header p-0 pt-1" style="background-color: #7684B9 !important">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item" wire:ignore>
                            <a aria-controls="custom-tabs-one-active-accounts" aria-selected="true" class="nav-link active" data-toggle="pill" href="#custom-tabs-one-active-accounts" id="custom-tabs-one-active-accounts-tab" role="tab">
                                <h5 style="font-weight: bold;">Active Accounts</h5>
                            </a>
                        </li>
                        @if (wordsExistInArray(['Archive', 'Account'], $privileges))
                            <li class="nav-item" wire:ignore>
                                <a aria-controls="custom-tabs-one-archived-accounts" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-archived-accounts" id="custom-tabs-one-archived-accounts-tab" role="tab">
                                    <h5 style="font-weight: bold;">Archived Accounts</h5>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent" style="padding-right: 2rem;">
                        <div aria-labelledby="custom-tabs-one-active-accounts-tab" class="tab-pane fade active show" id="custom-tabs-one-active-accounts" role="tabpanel" wire:ignore.self>
                            @include('livewire.user_accounts.accounts-table')
                        </div>
                        <div aria-labelledby="custom-tabs-one-archived-accounts-tab" class="tab-pane fade" id="custom-tabs-one-archived-accounts" role="tabpanel" wire:ignore.self>
                            @include('livewire.user_accounts.archive-table')
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>

            @include('livewire.user_accounts.add-user')
            @include('livewire.user_accounts.edit-user')
            @include('livewire.user_accounts.view-user')
            @include('livewire.user_accounts.batch-add-user')
            @include('livewire.user_accounts.confirm-delete')
            @include('livewire.user_accounts.confirm-save')
            <!-- /.card -->
        </div>
    </div>
</div>

@section('scripts')
    <script>
        function initMultiSelect() {
            $('#multiple-select-optgroup-clear-field').select2({
                theme: "bootstrap4",
                placeholder: $(this).data('placeholder'),
                allowClear: true,
            });

            $('#multiple-select-optgroup-clear-field').on('change', function(e) {
                let data = new Array($(this).val());
                Livewire.dispatch('setSelectedStudents', data);
            });
        }
    </script>

    <script>
        function getRndInteger(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }

        const passwordInput = {
            password: '',
            show: false,
            generatePassword() {
                const letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                const numbers = '0123456789';

                let result = '';

                for (let i = 0; i < 4; i++) {
                    result += letters[getRndInteger(0, letters.length - 1)];
                }

                for (let i = 0; i < 4; i++) {
                    result += numbers[getRndInteger(0, numbers.length - 1)];
                }

                this.password = result;
            }
        }
    </script>
@endsection
