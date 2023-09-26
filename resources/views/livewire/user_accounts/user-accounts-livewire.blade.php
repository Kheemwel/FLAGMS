@section('head')
    <title>Admin | Profiling</title>

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
                    Import User Accounts
                </button>
                <!--DOWNLOAD TABLE BUTTON-->
                <button class="btn btn-default" style="font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button" wire:click='export()'>
                    <iconify-icon height="14" icon="mdi:file-export" style="color: white;" width="14"></iconify-icon>
                    Export User Accounts
                </button>
            </div>
            <div>
                <div class="row">
                    <input type="checkbox" wire:model.live="showArchivedAccounts">View Archived Accounts
                </div>

                <div class="row">
                    <label for="per-page" style="font-weight: normal; margin-top: 1rem;">Per Page:</label>
                    <select class="form-select form-select-sm mb-2" id='per-page' selected wire:model.live="per_page">
                        <option>10</option>
                        <option>15</option>
                        <option>20</option>
                        <option>25</option>
                        <option selected>30</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                </div>
            </div>
            <!--PROFILING TABLE SECTION-->
            @if ($showArchivedAccounts)
                @include('livewire.user_accounts.archive-table')
            @else
                <div class="card" style="margin-left: 2rem; margin-right: 2rem;border-radius: 10px;">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
                        <table class="table table-hover">
                            <thead style="color: #252525; text-align: center;">
                                <tr>
                                    <x-table-column-header :direction="$sortField === 'id' ? $sortDirection : null" click="sortBy('id')" label='ID' sortable />
                                    <x-table-column-header :direction="$sortField === 'name' ? $sortDirection : null" click="sortBy('name')" label='Name' sortable />
                                    <x-table-column-header :direction="$sortField === 'username' ? $sortDirection : null" click="sortBy('username')" label='Username' sortable />
                                    <x-table-column-header :direction="$sortField === 'role' ? $sortDirection : null" click="sortBy('role')" label='Role' sortable />
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody style="text-align: center;">
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->role }}</td>
                                        <td>
                                            <!--VIEW PROFILE-->
                                            <button class="btn btn-primary action-btn" data-target="#view-user-btn" data-toggle="modal" wire:click="get_data({{ $user->id }})" tooltip='enable' title='View Account'>
                                                <i aria-hidden="true" class="fa fa-eye"></i>
                                            </button>

                                            <!--USER INFO EDIT BUTTON-->
                                            <button class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" wire:click="get_data({{ $user->id }})" tooltip='enable' title='Edit Account'>
                                                <i class="fa fa-solid fa-pen"></i>
                                            </button>

                                            {{-- ARCHIVE USER --}}
                                            <button class="btn btn-primary action-btn" wire:click="archive({{ $user->id }})" tooltip='enable' title='Archive Account'>
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
