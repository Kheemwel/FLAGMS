<div style="margin-left: 2rem; margin-right: 2rem;">
    <div class="row">
        <label for="per-page" style="font-weight: normal; margin-top: 1rem;">
            Show
            <span>
                <select class="form-select form-select-sm mb-2" id='per-page' selected wire:model.live="per_page">
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                    <option selected>30</option>
                    <option>50</option>
                    <option>100</option>
                </select>
            </span>
            Entries
        </label>

        {{-- MARK AS UNARCHIVE --}}
        <label for="per-page" style="font-weight: normal; margin-top: 1rem; margin-left: 1rem; cursor: pointer;">
            <span class="archivals" style="transition: color 0.3s;">Mark as Unarchive</span>
        </label>

        {{-- DELETE --}}
        <label for="per-page" style="font-weight: normal; margin-top: 1rem; margin-left: 1rem; cursor: pointer;">
            <span id="delete" style="transition: color 0.3s;">Delete</span>
        </label>
    </div>
</div>
<div class="card" style="margin-left: 2rem; margin-right: 2rem;border-radius: 10px;">
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
        <table class="table table-hover">
            <thead style="color: white; background-color: #7684B9; text-align: center;">
                <tr>
                    <th><input type="checkbox"></th>
                    <x-table-column-header :direction="$sortField === 'id' ? $sortDirection : null" click="sortBy('id')" label='ID' sortable />
                    <x-table-column-header :direction="$sortField === 'name' ? $sortDirection : null" click="sortBy('name')" label='Name' sortable />
                    <x-table-column-header :direction="$sortField === 'role' ? $sortDirection : null" click="sortBy('role')" label='Role' sortable />
                    <x-table-column-header :direction="$sortField === 'archived_at' ? $sortDirection : null" click="sortBy('archived_at')" label='Archived At' sortable />
                    <th>Action</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
                @foreach ($archived_users as $arch_user)
                    <tr>
                        <th></th>
                        <th scope="row">{{ $arch_user->id }}</th>
                        <td>{{ $arch_user->name }}</td>
                        <td>{{ $arch_user->role }}</td>
                        <td>{{ date('F d,Y   h:i A', strtotime($arch_user->archived_at)) }}</td>
                        <td>
                            <!--VIEW PROFILE-->
                            <button class="btn btn-primary action-btn" data-target="#view-user-btn" data-toggle="modal" title='View Account' tooltip='enable' wire:click="get_data({{ $arch_user->id }})">
                                <i aria-hidden="true" class="fa fa-eye"></i>
                            </button>

                            <!--USER INFO EDIT BUTTON-->
                            @if (in_array("Edit{$arch_user->role}Accounts", $privileges) || in_array("EditAccounts", $privileges))
                                <button class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" title='Edit Account' tooltip='enable' wire:click="get_data({{ $arch_user->id }})">
                                    <i class="fa fa-solid fa-pen"></i>
                                </button>
                            @endif

                            {{-- UNARCHIVE USER --}}
                            <button class="btn btn-primary action-btn" title='Unarchive Account' tooltip='enable' wire:click="unArchive({{ $arch_user->id }})">
                                <i aria-hidden="true" class="fa fa-undo"></i>
                            </button>

                            {{-- DELETE USER --}}
                            @if ($my_id !== $arch_user->id && in_array("Delete{$arch_user->role}Accounts", $privileges) || in_array("DeleteAccounts", $privileges))
                                <button class="btn btn-primary action-btn" data-target="#deleteModal" data-toggle="modal" title='Delete Account' tooltip='enable' wire:click.prevent="get_data({{ $arch_user->id }})">
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
{{ $archived_users->links('components.pagination') }}
