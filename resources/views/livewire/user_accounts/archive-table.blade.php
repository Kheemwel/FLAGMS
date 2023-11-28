<div x-data='archiveAccounts'>
    <div style="margin-left: 2rem; margin-right: 2rem;">
        <div class="row" style="margin-top: 1rem;">
            <div class="col-5">
                <div class="input-group input-group-sm" style="width: 70%;">
                    <input class="form-control float-right" id="searchActiveAccounts" name="table_search" placeholder="Search" style="height: 35px;" type="text" x-model='search'>
                    <div class="input-group-append">
                        <button aria-expanded="false" aria-haspopup="true" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" style="height: 35px;" type="button" x-text="filterRole == '' ? 'Role' : filterRole">Role</button>
                        <div class="dropdown-menu">
                            <span class="dropdown-item" x-on:click="filterRole = 'All'">All</span>
                            @foreach ($roles as $roleFilter)
                                <span class="dropdown-item" x-on:click='filterRole = "{{ $roleFilter->role }}"'>{{ $roleFilter->role }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 1rem;">
            <div class="col-3 d-flex justify-content-start">
                <label class="m-0" for="per-page" style="padding-top: 10px; font-weight: normal; margin-top: 1rem; margin-left: 1rem; cursor: pointer;" wire:click='markUnarchive(getSelectedRows())' x-cloak x-show='showAction()'>
                    <span class="archivals btn btn-default" style="transition: color 0.3s; color: white; background-color: #0A0863; border-radius: 10px; font-size: 14px;">Mark
                        as Unarchive</span>
                </label>
                <label class="m-0" for="per-page" style="padding-top: 10px; font-weight: normal; margin-top: 1rem; margin-left: 1rem; cursor: pointer;" wire:click='deleteSelected(getSelectedRows())' x-cloak x-show='showAction'>
                    <span class="archivals btn btn-default" style="transition: color 0.3s; color: white; background-color: #630808; border-radius: 10px; font-size: 14px;">Delete Selected</span>
                </label>
            </div>

            <div class="col-6 d-flex justify-content-end ml-auto">
                <label for="per-page" style="font-weight: normal; margin-top: 1rem;">
                    Show
                    <span>
                        <select class="form-select form-select-sm mb-2" id='per-page' x-model="perPage">
                            <option selected>5</option>
                            <option>10</option>
                            <option>15</option>
                            <option>20</option>
                            <option>25</option>
                            <option>30</option>
                            <option>50</option>
                            <option>100</option>
                        </select>
                    </span>
                    Entries
                </label>
            </div>
        </div>
    </div>
    <div class="card" style="margin-left: 2rem; margin-right: 2rem;border-radius: 10px;">
        <div wire:loading wire:target='store, update, delete, archive, unArchive, markArchive, markUnarchive, deleteSelected'>
            <div class="overlay" style="position: absolute; width: 100%; height: 100%;">
                <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                <h5 class='font-weight-bold mt-3'>Loading... Please Wait.</h5>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
            {{-- <table class="table table-hover" x-ref="table">
                <thead style="color: white; background-color: #7684B9; text-align: center;">
                    <tr>
                        <th x-on:click="checkAll()">
                            <input type="checkbox" x-model="selectAll">
                        </th>

                        <th sortFirst x-bind="sortColumn">ID</th>
                        <th x-bind="sortColumn">Name</th>
                        <th x-bind="sortColumn">Role</th>
                        <th x-bind="sortColumn">Archived At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody style="text-align: center;" x-ref='tbody'>
                    @foreach ($archived_users as $arch_user)
                        <tr x-bind:style="rows[{{ $arch_user->id }}] ? 'background-color: #d9deff' : ''" x-init='rows[{{ $arch_user->id }}] = false'>
                            <th x-on:click='rows[{{ $arch_user->id }}] = !rows[{{ $arch_user->id }}]'>
                                <input type="checkbox" x-model="rows[{{ $arch_user->id }}]">
                            </th>
                            <th scope="row">{{ $arch_user->id }}</th>
                            <td>{{ $arch_user->name }}</td>
                            <td x-ref="role">{{ $arch_user->role }}</td>
                            <td>{{ date('F d,Y   h:i A', strtotime($arch_user->archived_at)) }}</td>
                            <td>
                                <!--VIEW PROFILE-->
                                <button class="btn btn-primary action-btn" data-target="#view-user-btn" data-toggle="modal" title='View Account' tooltip='enable' wire:click="get_data({{ $arch_user->id }})">
                                    <i aria-hidden="true" class="fa fa-eye"></i>
                                </button>

                                <button class="btn btn-primary action-btn" title='Unarchive Account' tooltip='enable' wire:click="unArchive({{ $arch_user->id }})">
                                    <i aria-hidden="true" class="fa fa-undo"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    <tr x-cloak x-refer="result" x-show="noFilterResult">
                        <td class="text-center font-weight-bold" colspan="6">No Result Found</td>
                    </tr>
                </tbody>
            </table>

            <div class="row">
                <div class="col-6 font-weight-bold">
                    <p x-text="showedEntries"></p>
                </div>
                <div class="col-6 d-flex justify-content-end text-center">
                    <button class="col-1" x-on:click="showPage(1)">
                        << </button>
                            <button class="col-1" x-on:click="showPage(Math.max(1, currentPage - 1))">
                                < </button>
                                    <template x-for="item in pages">
                                        <button class="col-1 button button-defalut" x-bind:class="currentPage == item ? 'bg-blue' : ''" x-on:click="showPage(item)" x-text="item"></button>
                                    </template>
                                    <button class="col-1 paginate_button page-item" x-on:click="showPage(Math.min(pageNumber, currentPage + 1))"> > </button>
                                    <button class="col-1" x-on:click.prevent="showPage(pageNumber)"> >> </button>
                </div>
            </div> --}}
            <table class="table table-hover">
                <!-- Table Header -->
                <thead style="color: white; background-color: #7684B9; text-align: center;">
                    <tr>
                        <th x-on:click="checkAll()">
                            <input type="checkbox" x-model="selectAll">
                        </th>
                        <th sortFirst x-bind="sortColumn">ID</th>
                        <th x-bind="sortColumn">Name</th>
                        <th x-bind="sortColumn">Role</th>
                        <th x-bind="sortColumn">Archived At</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <!-- Table Body -->
                <tbody style="text-align: center;">
                    <template x-for="user in filteredData">
                        <tr>
                            <td x-on:click='rows[user.id] = !rows[user.id]'>
                                <input type="checkbox" x-model="rows[user.id]">
                            </td>
                            <td x-text="user.id"></td>
                            <td><span x-text="user.first_name"></span> <span x-text="user.last_name"></span></td>
                            <td x-text="user.role"></td>
                            <td x-text="formatDate(user.archived_at)"></td>
                            <td>
                                <!--VIEW PROFILE-->
                                <button class="btn btn-primary action-btn" data-target="#view-user-btn" data-toggle="modal" title='View Account' tooltip='enable' wire:click="get_data(user.id)">
                                    <i aria-hidden="true" class="fa fa-eye"></i>
                                </button>
                                <button class="btn btn-primary action-btn" title='Unarchive Account' tooltip='enable' wire:click="unArchive(user.id)">
                                    <i aria-hidden="true" class="fa fa-undo"></i>
                                </button>
                            </td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <div class="row">
        <div class="col-6 font-weight-bold">
            <p x-text="showedEntries"></p>
        </div>
        <div class="col-6 d-flex justify-content-end text-center">
            <button class="col-1" x-bind:disabled="currentPage == 1" x-on:click="currentPage = 1">
                << </button>
                    <button class="col-1" x-bind:disabled="currentPage == 1" x-on:click="prevPage()">
                        < </button>
                            <template x-for="item in pages">
                                <button class="col-1 button button-defalut" x-bind:class="currentPage == item ? 'bg-blue' : ''" x-on:click="currentPage = item" x-text="item"></button>
                            </template>
                            <button class="col-1 paginate_button page-item" x-bind:disabled="currentPage >= totalPages" x-on:click="nextPage()"> > </button>
                            <button class="col-1" x-bind:disabled="currentPage >= totalPages" x-on:click.prevent="currentPage = totalPages"> >> </button>
        </div>
    </div>

</div>
