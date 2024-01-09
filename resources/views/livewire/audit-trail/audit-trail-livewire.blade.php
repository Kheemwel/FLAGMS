@section('head')
    <title>FLAGMS | Transaction History</title>
@endsection

<div class="content-wrapper pl-1 pr-1" style="background-color:  rgb(253, 253, 253);"  x-data='auditTrail'>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 pl-4 pt-3">
                    <p class="font-weight-bold text-xl">Transaction History</p>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="row mt-1 ml-2 mr-4">
        <div class="col-11 mb-2 pl-4">
            <div class="input-group">
                <input class="form-control"  x-model='search' name="table_search" placeholder="Search" style="height: 35px; max-width: 600px" type="text">
            </div>
        </div>
    
        
        <div class="col-1 mb-2">
            <button wire:loading.attr='disabled' wire:target='export' class="btn btn-default text-xs" style="width: 100%; border-radius: 10px; background-color: #0A0863; color: white;" type="button" wire:click='export()'>
                <i wire:loading.remove wire:target='export' class="fa fa-solid fa-file-export" style="color: white;"></i>
                <i wire:loading wire:target='export' class="fas fa-3x fa-sync-alt fa-spin text-sm"></i>
                Export
            </button>
        </div>
    </div>
    
    <div class="row mt-2 mr-1">
        <div class="col-md-3 col-sm-12 d-flex justify-content-start mb-2">
            <label class="m-0 pt-1 font-weight-normal ml-4" for="per-page" style="cursor: pointer;" wire:click='deleteSelected(getSelectedRows())' x-cloak x-show='showAction'>
                <span class="archivals btn btn-default text-xs px-3" style="width:100%; max-width: 200px; transition: color 0.3s; color: white; background-color: #630808; border-radius: 10px;">Delete Selected</span>
            </label>
        </div>

        <div class="col-md-6 col-sm-12 d-flex justify-content-end align-items-center ml-auto">
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

    <div class="row">
        <div class="col-12">
            <!--PROFILE PICTURES TABLE SECTION-->
            <div class="card ml-4 mr-4" style="border-radius: 10px;">
                <div wire:loading wire:target='deleteSelected'>
                    <div class="overlay" style="position: absolute; width: 100%; height: 100%;">
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                        <h5 class='font-weight-bold mt-3'>Loading... Please Wait.</h5>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0 m-0">
                        <table class="table table-hover">
                            <!-- Table Header -->
                            <thead class="text-center" style="color: white; background-color: #7684B9;">
                                <tr>
                                    <th sortFirst x-bind="sortColumn">ID</th>
                                    <th x-bind="sortColumn">User Name</th>
                                    <th x-bind="sortColumn">Action</th>
                                    <th x-bind="sortColumn">Description</th>
                                    <th x-bind="sortColumn">Date and Time</th>
                                </tr>
                            </thead>
            
                            <!-- Table Body -->
                            <tbody class="text-center">
                                <template x-for="audit in filteredData">
                                    <tr>
                                        <td x-text="audit.id"></td>
                                        <td><span x-text="audit.user_name">
                                        <td x-text="audit.action"></td>
                                        <td x-text="audit.description"></td>
                                        <td x-text="formatDate(audit.created_at)"></td>
                                    </tr>
                                </template>
                                <tr class="font-weight-bold" x-cloak x-show="noResult">
                                    <td colspan="6">No results found</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- Pagination Controls -->
    <div class="row mt-2 ml-4 mr-4">
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

@section('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('auditTrail', () => ({
                audits: @json($audits), // Initialize with your Livewire data
                search: '',
                sortColumn: '',
                sortDirection: 'asc',
                rows: {},
                selectAll: false,
                currentPage: 1,
                perPage: 5,
                pages: [],
                showedEntries: '',
                noResult: false,
                init() {
                    this.setPages();

                    this.filterResult.forEach(element => {
                        this.rows[element.id] = false;
                    });

                    this.$watch('perPage', value => {
                        this.perPage = parseInt(value);
                        this.currentPage = 1;
                    });

                    this.$watch('currentPage', value => {
                        this.setPages();
                    });

                    this.$watch('totalPages', value => {
                        this.setPages();
                    });

                    this.$watch('search', value => {
                        this.currentPage = 1;
                        this.noResult = this.filterResult.length == 0;
                    });

                    Livewire.on('refreshSelectedRows', (data) => {
                        this.selectAll = false;
                        Object.keys(this.rows).filter(key => this.rows[key] = false);
                        this.audits = data[0];
                        this.currentPage = 1;
                    });
                },
                showAction() {
                    return Object.values(this.rows).includes(true);
                },
                get filterResult() {
                    // Define an array of keys that should be filterable
                    const filterableKeys = ['id', 'user_name', 'action', 'description', 'created_at'];

                    // Use the filter function with a more dynamic approach
                    let filtered = this.audits.filter(audit => {
                        let textMatch = filterableKeys.some(key =>
                            String(audit[key]).toLowerCase().includes(this.search.toLowerCase())
                        );
                        return textMatch;
                    });

                    if (this.sortColumn) {
                        filtered = this.sortData(filtered, this.sortColumn.toLowerCase(), this.sortDirection);
                    }

                    return filtered;
                },
                get filteredData() {
                    const start = (this.currentPage - 1) * this.perPage;
                    const end = start + this.perPage;
                    let result = this.filterResult.slice(start, end);

                    const first = this.filterResult.length > 0 ? start + 1 : 0;
                    const last = Math.min(end, this.filterResult.length);
                    this.showedEntries = `Showing ${first} to ${last} of ${this.filterResult.length}`;

                    return result;
                },
                setPages() {
                    // Calculate the range of pages to be printed
                    const startPage = Math.max(1, this.currentPage - 1);
                    const endPage = Math.min(this.totalPages, this.currentPage + 1);

                    // Adjust the range if it's less than 3 pages
                    const adjustedStart = Math.max(1, endPage - 2);
                    const adjustedEnd = Math.min(this.totalPages, startPage + 2);

                    let pages = [];
                    // Print the pages within the adjusted range
                    for (let i = adjustedStart; i <= adjustedEnd; i++) {
                        pages.push(i);
                    }
                    this.pages = pages.length > 0 ? pages : 1;
                },

                checkAll() {
                    this.selectAll = !this.selectAll;
                    Object.keys(this.rows).filter(key => {
                        this.rows[key] = this.selectAll
                    });
                },
                getSelectedRows() {
                    return Object.keys(this.rows).filter(key => this.rows[key] === true);
                },

                sortData(data, column, direction) {
                    return data.slice().sort((a, b) => {
                        const modifier = direction === 'asc' ? 1 : -1;
                        return modifier * (a[column] > b[column] ? 1 : -1);
                    });
                },
                sort(column) {
                    if (this.sortColumn === column) {
                        this.sortDirection = this.sortDirection === 'asc' ? 'desc' : 'asc';
                    } else {
                        this.sortColumn = column;
                        this.sortDirection = 'asc';
                    }
                },
                prevPage() {
                    if (this.currentPage > 1) {
                        this.currentPage--;
                    }
                },
                nextPage() {
                    if (this.currentPage < this.totalPages) {
                        this.currentPage++;
                    }
                },

                get totalPages() {
                    return Math.ceil(this.filterResult.length / this.perPage);
                },
            }));

            Alpine.bind("sortColumn", () => ({
                "x-init"() {
                    $(this.$el).attr('wire:ignore', '');

                    const sortIcon = $(`<i aria-hidden="true" class="fa fa-sort ml-3" style="color : white;"></i>`);
                    const sortAsc = $(`<i aria-hidden="true" class="fa fa-sort-up ml-3" style="color : white;"></i>`);
                    const sortDesc = $(`<i aria-hidden="true" class="fa fa-sort-down ml-3" style="color : white;"></i>`);
                    const text = $(this.$el).text();
                    if (this.$el.hasAttribute('sortFirst')) {
                        $(this.$el).append(sortAsc);
                    } else {
                        $(this.$el).append(sortIcon);
                    }

                    this.$watch('sortColumn', value => {
                        $(this.$el).empty;
                        $(this.$el).text(text);
                        if ((value == text) && this.sortDirection == 'asc') {
                            $(this.$el).append(sortAsc);
                        } else if ((value == text) && !this.sortDirection == 'desc') {
                            $(this.$el).append(sortDesc);
                        } else {
                            $(this.$el).append(sortIcon);
                        }
                    });

                    this.$watch('sortDirection', value => {
                        $(this.$el).empty;
                        $(this.$el).text(text);
                        if ((this.sortColumn == text) && value == 'asc') {
                            $(this.$el).append(sortAsc);
                        } else if ((this.sortColumn == text) && value == 'desc') {
                            $(this.$el).append(sortDesc);
                        } else {
                            $(this.$el).append(sortIcon);
                        }
                    });
                },
                "@click"() {
                    this.sort($(this.$el).text());
                },
            }));
        });
        
    </script>
@endsection