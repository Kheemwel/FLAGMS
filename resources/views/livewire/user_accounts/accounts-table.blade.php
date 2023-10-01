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
    </div>
</div>
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
                            <button class="btn btn-primary action-btn" data-target="#view-user-btn" data-toggle="modal" title='View Account' tooltip='enable' wire:click="get_data({{ $user->id }})">
                                <i aria-hidden="true" class="fa fa-eye"></i>
                            </button>

                            <!--USER INFO EDIT BUTTON-->
                            <button class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" title='Edit Account' tooltip='enable' wire:click="get_data({{ $user->id }})">
                                <i class="fa fa-solid fa-pen"></i>
                            </button>

                            {{-- ARCHIVE USER --}}
                            <button class="btn btn-primary action-btn" title='Archive Account' tooltip='enable' wire:click="archive({{ $user->id }})">
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