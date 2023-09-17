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
                    <th style="border-right: 1px solid #252525;">Archived At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($archived_users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ date('F d,Y   h:i A', strtotime($user->archived_at)) }}</td>
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

                            {{-- UNARCHIVE USER --}}
                            <button class="btn btn-primary action-btn" wire:click="unArchive({{ $user->id }})">
                                <i class="fa fa-undo" aria-hidden="true"></i>
                            </button>

                            {{-- DELETE USER --}}
                            <button class="btn btn-primary action-btn" data-target="#deleteModal" data-toggle="modal" wire:click.prevent="get_data({{ $user->id }})">
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
