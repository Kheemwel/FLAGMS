<div class="card" style="margin-left: 2rem; margin-right: 2rem;border-radius: 10px;">
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
        <table class="table table-hover">
            <thead style="color: #252525; text-align: center;">
                <tr>
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
                        <th scope="row">{{ $arch_user->id }}</th>
                        <td>{{ $arch_user->name }}</td>
                        <td>{{ $arch_user->role }}</td>
                        <td>{{ date('F d,Y   h:i A', strtotime($arch_user->archived_at)) }}</td>
                        <td>
                            <!--VIEW PROFILE-->
                            <button class="btn btn-primary action-btn" data-target="#view-user-btn" data-toggle="modal" wire:click="get_data({{ $arch_user->id }})" tooltip='enable' title='View Account'>
                                <i aria-hidden="true" class="fa fa-eye"></i>
                            </button>

                            <!--USER INFO EDIT BUTTON-->
                            <button class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" wire:click="get_data({{ $arch_user->id }})" tooltip='enable' title='Edit Account'>
                                <i class="fa fa-solid fa-pen"></i>
                            </button>

                            {{-- UNARCHIVE USER --}}
                            <button class="btn btn-primary action-btn" wire:click="unArchive({{ $arch_user->id }})" tooltip='enable' title='Unarchive Account'>
                                <i aria-hidden="true" class="fa fa-undo"></i>
                            </button>

                            {{-- DELETE USER --}}
                            <button class="btn btn-primary action-btn" data-target="#deleteModal" data-toggle="modal" wire:click.prevent="get_data({{ $arch_user->id }})" tooltip='enable' title='Delete Account'>
                                <i aria-hidden="true" class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
{{ $archived_users->links('components.pagination') }}
