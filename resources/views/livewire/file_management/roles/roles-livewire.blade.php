@section('head')
    <title>Admin | Roles</title>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Roles</h1>
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
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live.debounce.500ms='search'>
                </div>
                <!--ADD ROLE BUTTON-->
                <button class="btn btn-default" data-target="#addRoleModal" data-toggle="modal" style="font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button">
                    <i aria-hidden="true" class="fa fa-plus"></i>
                    Add Role
                </button>
            </div>
            <!--PROFILE PICTURES TABLE SECTION-->
            <div class="card" style="margin-left: 2rem; margin-right: 2rem;">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
                    <table class="table text-nowrap" style="text-align: center;">
                        <thead style="background-color: #7684B9; color: white;">
                            <tr>
                                <th style="border-right: 1px solid #252525;">ID</th>
                                <th style="border-right: 1px solid #252525;">Role Name</th>
                                <th style="border-right: 1px solid #252525;">Number of Users</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <th scope="row">{{ $role->id }}</th>
                                    <td>{{ $role->role }}</td>
                                    <td>{{ $role->getUserAccounts()->count() }}</td>
                                    <td>
                                        <!--EDIT PROFILE-->
                                        <button class="btn btn-primary action-btn" data-target="#editRoleModal" data-toggle="modal" wire:click='getData({{ $role->id }})'>
                                            <i class="fa fa-solid fa-pen"></i>
                                        </button>
                                        <!-------------------------------------------------------------------------------------------------------------------------->

                                        <!--VIEW PROFILE-->
                                        <button class="btn btn-primary action-btn" data-target="#view-role" data-toggle="modal" wire:click='getData({{ $role->id }})'>
                                            <i aria-hidden="true" class="fa fa-eye"></i>
                                        </button>

                                        {{-- DELETE PROFILE --}}
                                        @if (!$role->is_default)
                                            <button class="btn btn-primary action-btn" wire:click="delete({{ $role->id }})">
                                                <i aria-hidden="true" class="fa fa-trash"></i>
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    @include('livewire.file_management.roles.add-role')
    @include('livewire.file_management.roles.view-role')
    @include('livewire.file_management.roles.edit-role')
</div>
