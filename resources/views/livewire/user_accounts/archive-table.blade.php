<div x-data='archiveAccounts'>
    <div class="ml-2 mr-2">
        <div class="row mt-1">
            <div class="col-md-5 d-flex align-items-center">
                <div class="input-group input-group-sm" style="width: 100%;">
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

        <div class="row mt-4 mb-2">
            <div class="col-md-5 col-sm-6">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                        <label class="m-0 mt-1 ml-1 font-weight-normal" for="per-page" style="cursor: pointer;" wire:click='markUnarchive(getSelectedRows())' x-cloak x-show='showAction()'>
                            <span class="archivals btn btn-default text-xs" style="width:100%; max-width: 200px; transition: color 0.3s; color: white; background-color: #0A0863; border-radius: 10px;">Mark as Unarchive</span>
                        </label>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start">
                        <label class="m-0 pt-1 font-weight-normal ml-1" for="per-page" style="cursor: pointer;" wire:click='deleteSelected(getSelectedRows())' x-cloak x-show='showAction'>
                            <span class="archivals btn btn-default text-xs px-3" style="width:100%; max-width: 200px; transition: color 0.3s; color: white; background-color: #630808; border-radius: 10px;">Delete Selected</span>
                        </label>
                    </div>
                </div>    
            </div>
            

            <div class="col-lg-5 col-md-4 col-sm-6 d-flex justify-content-end align-items-center mt-2 ml-auto">
                <label class="font-weight-normal mt-1" for="per-page">
                    Show
                    <span>
                        <select class="form-select form-select-sm mb-2 text-center" id='per-page' x-model="perPage">
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
    <div class="card ml-2 mr-2" style="border-radius: 10px;">
        <div wire:loading wire:target='markArchive, resetInputFields'>
            <div class="overlay" style="position: absolute; width: 100%; height: 100%;">
                <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                <h5 class='font-weight-bold mt-3'>Loading... Please Wait.</h5>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
            <!-- DataTable -->
            <table class="table table-hover">
                <!-- Table Header -->
                <thead class="text-center" style="color: white; background-color: #7684B9;">
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
                            </td>
                        </tr>
                    </template>
                    <tr x-show="noResult" x-cloak class="font-weight-bold">
                        <td colspan="6">No results found</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- Pagination Controls -->
    <div class="row mt-2">
        <div class="col-12 font-weight-bold text-center text-md-left">
            <p x-text="showedEntries"></p>
        </div>
        
        <div class="col-12 d-md-flex justify-content-md-end justify-content-center text-center">
            <button class="btn btn-sm btn-light text-dark mx-1 font-weight-bold" x-bind:disabled="currentPage == 1" x-on:click="currentPage = 1">
                &lt;&lt;
            </button>
            <button class="btn btn-sm btn-light text-dark mx-1 font-weight-bold" x-bind:disabled="currentPage == 1" x-on:click="prevPage()">
                &lt;
            </button>
            <template x-for="item in pages">
                <button class="btn btn-sm mx-1" style="border-radius: 50%;" x-bind:class="{'bg-blue': currentPage == item, 'btn-primary text-white': currentPage == item, 'btn-light text-dark': currentPage != item}" x-on:click="currentPage = item" x-text="item"></button>
            </template>
            <button class="btn btn-sm btn-light text-dark mx-1 font-weight-bold" x-bind:disabled="currentPage >= totalPages" x-on:click="nextPage()">
                &gt;
            </button>
            <button class="btn btn-sm btn-light text-dark mx-1 font-weight-bold" x-bind:disabled="currentPage >= totalPages" x-on:click.prevent="currentPage = totalPages">
                &gt;&gt;
            </button>
        </div>
    </div>

</div>
