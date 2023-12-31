@section('head')
    <title>FLAGMS | Roles</title>

    <style>
        input[type=checkbox].toggle-checkbox {
            height: 0;
            width: 0;
            visibility: hidden;
        }

        label.toggle-label {
            cursor: pointer;
            text-indent: -9999px;
            width: 45px;
            height: 25px;
            background: #D9D9D9;
            display: block;
            border-radius: 100px;
            position: relative;
        }

        label.toggle-label:after {
            content: '';
            position: absolute;
            top: 5px;
            left: 5px;
            width: 15px;
            height: 15px;
            background: #fff;
            border-radius: 90px;
            transition: 0.1s;
        }

        input.toggle-checkbox:checked+label.toggle-label {
            background: #3C58FF;
        }

        input.toggle-checkbox:checked+label.toggle-label:after {
            left: calc(100% - 5px);
            transform: translateX(-100%);
        }

        label.toggle-label:active:after {
            width: 20px;
        }
    </style>
@endsection

<div class="content-wrapper pl-1 pr-1" style="background-color:  rgb(253, 253, 253);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 pl-4 pt-3">
                    <p class="text-xl font-weight-bold">Roles</p>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="row mt-2">
        <!-- Search Input - Left Corner on Big Screens -->
        <div class="col-12 col-sm-12 col-md-6 mb-2 pr-4 pl-4">
            <div class="input-group">
                <input class="form-control" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live.debounce.500ms='search'>
            </div>
        </div>
    
        <!-- Add Role Button - Right Corner on Big Screens -->
        <div class="col-12 col-sm-12 col-md-6 d-flex justify-content-end pr-4 pl-4 mb-2">
            <button class="btn btn-default" data-target="#addRoleModal" data-toggle="modal" style="border-radius: 10px; font-size: 12px; background-color: #0A0863; color: white;" type="button">
                <i aria-hidden="true" class="fa fa-plus"></i> &nbsp;
                Add Role
            </button>
        </div>
    </div>
    
    
    <div class="row mt-2 mr-1">
        <div class="col-12 col-sm-12 pt-2 pr-4 pl-4 d-flex justify-content-end">
            <label for="per-page" class="font-weight-normal text-sm">Show
                <select class="form-select form-select-sm" id='per-page'
                    wire:model.live.debounce.500ms="per_page">
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                    <option selected>30</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                Entries
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <!--TABLE SECTION-->
            <div class="card ml-4 mr-4" style="border-radius: 10px;">
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
                                            <!-------------------------------------------------------------------------------------------------------------------------->
                                            <!--VIEW PROFILE-->
                                            <button class="btn btn-primary action-btn" data-target="#view-role" data-toggle="modal" wire:click='getData({{ $role->id }})'>
                                                <i aria-hidden="true" class="fa fa-eye"></i>
                                            </button>
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
