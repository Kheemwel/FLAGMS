@section('head')
    <title>Admin | Roles</title>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 2rem;">
                    <h1 style="font-weight: bold;">Roles</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>


    <div class="row">
        <div class="col-12">
            <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 3rem;">
                <!--SEARCH FEATURE-->
                <div class="input-group input-group-sm" style="max-width: 20%;">
                    <!--SEARCH INPUT-->
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live.debounce.500ms='search'>
                </div>
                <!--ADD ROLE BUTTON-->
                <button class="btn btn-default" data-target="#addRoleModal" data-toggle="modal" style="border-radius: 10px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button">
                    <i aria-hidden="true" class="fa fa-plus"></i>
                    Add Role
                </button>
            </div>
            <!--PROFILE PICTURES TABLE SECTION-->
            <div class="card" style="margin-left: 2rem; margin-right: 3rem; border-radius: 10px;">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0"style="border: 1px solid #252525; border-radius: 10px;">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover" style="text-align: center;">
                            <thead style="background-color: #7684B9; color: white;">
                                <tr>
                                    <th>
                                        <input type="checkbox">
                                    </th>
                                    <th>ID</th>
                                    <th>Role Name</th>
                                    <th>Number of Users</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td> </td>
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

@section('scripts')
    <script>
        function wordExistInArray(word, array) {
            return array.some(element => element.includes(word));
        }

        function findWordExistInArray(word, array) {
            const foundElement = array.find(element => element.includes(word));
            return foundElement !== undefined ? foundElement : null;
        }

        document.addEventListener('alpine:init', () => {
            Alpine.data('privileges', () => ({
                categories: ['Add', 'Edit', 'View', 'Delete', 'Archive', 'Export', 'Manage'],
                privileges: {},
                addPrivileges: [],
                editPrivileges: [],
                viewPrivileges: [],
                deletePrivileges: [],
                archivePrivileges: [],
                exportPrivileges: [],
                managePrivileges: [],
                otherPrivileges: [],
                selectAlls: {
                    'Add': false,
                    'Edit': false,
                    'View': false,
                    'Delete': false,
                    'Archive': false,
                    'Export': false,
                    'Manage': false
                },
                initPrivileges(category, privilege) {
                    if (findWordExistInArray(category, this.categories) == 'Add') {
                        this.addPrivileges.push(privilege);
                    } else if (findWordExistInArray(category, this.categories) == 'Edit') {
                        this.editPrivileges.push(privilege);
                    } else if (findWordExistInArray(category, this.categories) == 'View') {
                        this.viewPrivileges.push(privilege);
                    } else if (findWordExistInArray(category, this.categories) == 'Delete') {
                        this.deletePrivileges.push(privilege);
                    } else if (findWordExistInArray(category, this.categories) == 'Archive') {
                        this.archivePrivileges.push(privilege);
                    } else if (findWordExistInArray(category, this.categories) == 'Export') {
                        this.exportPrivileges.push(privilege);
                    } else if (findWordExistInArray(category, this.categories) == 'Manage') {
                        this.managePrivileges.push(privilege);
                    } else if (findWordExistInArray(category, this.categories) == null) {
                        this.otherPrivileges.push(privilege);
                    }
                    this.privileges[privilege] = false;
                },
                checkPrivileges(category, val) {
                    let arr = null;
                    if (category == 'Add') {
                        arr = this.addPrivileges;
                    } else if (category == 'Edit') {
                        arr = this.editPrivileges;
                    } else if (category == 'View') {
                        arr = this.viewPrivileges;
                    } else if (category == 'Delete') {
                        arr = this.deletePrivileges;
                    } else if (category == 'Archive') {
                        arr = this.archivePrivileges;
                    } else if (category == 'Export') {
                        arr = this.exportPrivileges;
                    } else if (category == 'Manage') {
                        arr = this.managePrivileges;
                    } else if (!wordExistInArray(category, this.categories)) {
                        arr = this.otherPrivileges;
                    }
                    arr.forEach(element => {
                        this.privileges[element] = val;
                    });
                },
                setPrivileges(arr) {
                    arr.forEach(element => {
                        this.privileges[element] = true;
                    });
                },
                getSelectedPrivileges() {
                    return Object.keys(this.privileges).filter(key => this.privileges[key] === true);
                },
                resetFields() {
                    this.privileges = {};
                    Object.keys(this.selectAlls).filter(key => this.selectAlls[key] = false);
                }
            }))
        });
    </script>
@endsection
