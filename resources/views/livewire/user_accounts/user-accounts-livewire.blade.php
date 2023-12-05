@section('head')
    <title>Admin|User Accounts</title>

    <!-- Select2 CSS -->
    <link href="adminLTE-3.2/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="adminLTE-3.2/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet">

    <style>
        /* For Eye Icons of Anecdotal and Summary Section inside the table */
        .btn-primary.action-btn {
            background-color: transparent;
            border-color: transparent;
        }

        .btn-primary.action-btn i {
            color: #252525;
        }

        /* Hover styles */
        .btn-primary.action-btn:hover {
            background-color: transparent;
        }

        .btn-primary.action-btn:hover i {
            color: #0A0863;
        }

        .archivals:hover {
            color: #3C58FF;
            /* Replace with your desired hover color */
        }

        #delete:hover {
            color: #FF0000;
            /* Replace with your desired hover color */
        }

        /********************************/
    </style>
    <!--DataTables Sorting-->
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('head-scripts')
    {{-- Select2 JS --}}
    <script src="adminLTE-3.2/plugins/select2/js/select2.full.min.js"></script>

    <!--Sorting Table-->
    <script src="adminLTE-3.2/plugins/datatables/jquery.dataTables.min.js"></script>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">User Accounts</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-12">


            <div class="card card-primary card-tabs" style="background-color:  rgb(253, 253, 253);margin-left: 2rem; margin-right: 3rem;">
                <div class="card-header p-0 pt-1" style="background-color: #7684B9 !important">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item" wire:ignore>
                            <a aria-controls="custom-tabs-one-active-accounts" aria-selected="true" class="nav-link active" data-toggle="pill" href="#custom-tabs-one-active-accounts" id="custom-tabs-one-active-accounts-tab" role="tab">
                                <h5 style="font-weight: bold;">Active Accounts</h5>
                            </a>
                        </li>
                        @if (wordsExistInArray(['Archive', 'Account'], $privileges))
                            <li class="nav-item" wire:ignore>
                                <a aria-controls="custom-tabs-one-archived-accounts" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-archived-accounts" id="custom-tabs-one-archived-accounts-tab" role="tab">
                                    <h5 style="font-weight: bold;">Archived Accounts</h5>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent" style="padding-right: 2rem;">
                        <div aria-labelledby="custom-tabs-one-active-accounts-tab" class="tab-pane fade active show" id="custom-tabs-one-active-accounts" role="tabpanel" wire:ignore.self>
                            @include('livewire.user_accounts.accounts-table')
                        </div>
                        <div aria-labelledby="custom-tabs-one-archived-accounts-tab" class="tab-pane fade" id="custom-tabs-one-archived-accounts" role="tabpanel" wire:ignore.self>
                            @include('livewire.user_accounts.archive-table')
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>

            @include('livewire.user_accounts.add-user')
            @include('livewire.user_accounts.edit-user')
            @include('livewire.user_accounts.view-user')
            @include('livewire.user_accounts.batch-add-user')
            @include('livewire.user_accounts.confirm-delete')
            @include('livewire.user_accounts.confirm-save')
            <!-- /.card -->
        </div>
    </div>
</div>

@section('scripts')
    <script>
        function initMultiSelect() {
            $('#multiple-select-optgroup-clear-field').select2({
                theme: "bootstrap4",
                placeholder: $(this).data('placeholder'),
                allowClear: true,
            });

            $('#multiple-select-optgroup-clear-field').on('change', function(e) {
                let data = new Array($(this).val());
                @this.set('selectedStudents', data);
            });
        }
    </script>

    <script>
        function getRndInteger(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }

        const passwordInput = {
            password: '',
            show: false,
            generatePassword() {
                const letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                const numbers = '0123456789';

                let result = '';

                for (let i = 0; i < 4; i++) {
                    result += letters[getRndInteger(0, letters.length - 1)];
                }

                for (let i = 0; i < 4; i++) {
                    result += numbers[getRndInteger(0, numbers.length - 1)];
                }

                this.password = result;
            }
        }
    </script>
    <script>
        document.addEventListener('alpine:init', () => {
            // Alpine.data('dataTable', () => ({
            //     rows: {},
            //     selectAll: false,
            //     sortBy: '',
            //     sortAsc: true,
            //     search: '',
            //     filterRole: '',
            //     noFilterResult: false,
            //     perPage: 5,
            //     entries: 0,
            //     pageNumber: 0,
            //     pages: [],
            //     currentPage: 1,
            //     showedEntries: '',
            //     init() {
            //         this.entries = this.$refs.tbody.querySelectorAll("tr").length;
            //         this.pageNumber = Math.ceil(this.entries / this.perPage);

            //         this.showPage(1);
            //         this.setPages();

            //         this.$watch('search', value => {
            //             this.showPage(1);
            //         });

            //         this.$watch('filterRole', value => {
            //             this.filterRole = value == 'All' ? '' : value;
            //             this.showPage(1);
            //         });

            //         this.$watch('perPage', value => {
            //             this.perPage = parseInt(value);
            //             this.pageNumber = Math.ceil(this.entries / value);
            //             this.showPage(1);
            //         });

            //         this.$watch('currentPage', value => {
            //             this.setPages();
            //         });

            //         this.$watch('pageNumber', value => {
            //             this.setPages();
            //         });

            //         this.$watch('sortAsc', value => {
            //             page = value ? 1 : this.pageNumber;
            //             this.setPages();
            //             this.showPage(page);
            //         });

            //         Livewire.on('refreshSelectedRows', () => {
            //             this.selectAll = false;
            //             Object.keys(this.rows).filter(key => this.rows[key] = false);
            //             this.entries = this.$refs.tbody.querySelectorAll("tr").length;
            //             this.pageNumber = Math.ceil(this.entries / this.perPage);
            //             this.setPages();
            //             this.showPage(1);
            //         });
            //     },
            //     showPage(pageNumber) {
            //         this.currentPage = pageNumber;
            //         const startIndex = (pageNumber - 1) * this.perPage;
            //         const endIndex = Math.min((startIndex + this.perPage), this.entries);

            //         const filteredRows = $(this.$refs.tbody).find("tr:not([x-refer='result'])").filter((index, element) => {
            //             const text = $(element).text().trim().toLowerCase();
            //             const role = $(element).find("[x-ref='role']").text().trim();
            //             const roleMatches = this.filterRole === '' || role === this.filterRole;
            //             const textMatches = text.includes(this.search);
            //             $(element).toggleClass('d-none', !(roleMatches && textMatches));
            //             if (roleMatches && textMatches) {
            //                 return element;
            //             }
            //         });
            //         const totalEntries = filteredRows.length;
            //         const startDisplayIndex = filteredRows.length > 0 ? startIndex + 1 : 0;
            //         const endDisplayIndex = Math.min(endIndex, totalEntries);
            //         filteredRows.each((index, element) => {
            //             const visible = (index >= startIndex) && (index < endIndex);
            //             $(element).toggleClass('d-none', !visible);
            //         });
            //         this.pageNumber = Math.ceil(filteredRows.length == 0 ? 1 : (filteredRows.length / this.perPage));
            //         this.noFilterResult = filteredRows.length == 0;
            //         this.showedEntries = `${startDisplayIndex}-${endDisplayIndex} of ${totalEntries}`;
            //     },
            //     setPages() {
            //         // Calculate the range of pages to be printed
            //         const startPage = Math.max(1, this.currentPage - 1);
            //         const endPage = Math.min(this.pageNumber, this.currentPage + 1);

            //         // Adjust the range if it's less than 3 pages
            //         const adjustedStart = Math.max(1, endPage - 2);
            //         const adjustedEnd = Math.min(this.pageNumber, startPage + 2);

            //         let pages = [];
            //         // Print the pages within the adjusted range
            //         for (let i = adjustedStart; i <= adjustedEnd; i++) {
            //             pages.push(i);
            //         }
            //         this.pages = pages;
            //     },
            //     getSelectedRows() {
            //         return Object.keys(this.rows).filter(key => this.rows[key] === true);
            //     },
            //     checkAll() {
            //         this.selectAll = !this.selectAll;
            //         Object.keys(this.rows).filter(key => {
            //             this.rows[key] = this.selectAll
            //         });
            //     },
            //     showAction() {
            //         return Object.values(this.rows).includes(true);
            //     },
            //     sortByColumn($event) {
            //         if (this.sortBy === $event.target.innerText) {
            //             if (this.sortAsc) {
            //                 // this.sortBy = "";
            //                 this.sortAsc = false;
            //             } else {
            //                 this.sortAsc = !this.sortAsc;
            //             }
            //         } else {
            //             this.sortBy = $event.target.innerText;
            //             this.sortAsc = true;
            //         }

            //         this.getTableRows()
            //             .sort(
            //                 this.sortCallback(
            //                     Array.from($event.target.parentNode.children).indexOf(
            //                         $event.target
            //                     )
            //                 )
            //             )
            //             .forEach((tr) => {
            //                 this.$refs.tbody.appendChild(tr);
            //             });
            //     },
            //     getTableRows() {
            //         return Array.from($(this.$refs.tbody).find("tr"));
            //     },
            //     getCellValue(row, index) {
            //         return $(row).children('').eq(index).text();
            //     },
            //     sortCallback(index) {
            //         return (a, b) =>
            //             ((row1, row2) => {
            //                 return row1 !== "" &&
            //                     row2 !== "" &&
            //                     !isNaN(row1) &&
            //                     !isNaN(row2) ?
            //                     row1 - row2 :
            //                     row1.toString().localeCompare(row2);
            //             })(
            //                 this.getCellValue(this.sortAsc ? a : b, index),
            //                 this.getCellValue(this.sortAsc ? b : a, index)
            //             );
            //     },
            // }));


            // Alpine.bind("sortColumn", () => ({
            //     "x-init"() {
            //         const sortIcon = $(`<i aria-hidden="true" class="fa fa-sort ml-3" style="color : white;"></i>`);
            //         const sortAsc = $(`<i aria-hidden="true" class="fa fa-sort-up ml-3" style="color : white;"></i>`);
            //         const sortDesc = $(`<i aria-hidden="true" class="fa fa-sort-down ml-3" style="color : white;"></i>`);
            //         const text = $(this.$el).text();
            //         if (this.$el.hasAttribute('sortFirst')) {
            //             $(this.$el).append(sortAsc);
            //         } else {
            //             $(this.$el).append(sortIcon);
            //         }

            //         this.$watch('sortBy', value => {
            //             $(this.$el).empty;
            //             $(this.$el).text(text);
            //             if ((value == text) && this.sortAsc) {
            //                 $(this.$el).append(sortAsc);
            //             } else if ((value == text) && !this.sortAsc) {
            //                 $(this.$el).append(sortDesc);
            //             } else {
            //                 $(this.$el).append(sortIcon);
            //             }
            //         });

            //         this.$watch('sortAsc', value => {
            //             $(this.$el).empty;
            //             $(this.$el).text(text);
            //             if ((this.sortBy == text) && value) {
            //                 $(this.$el).append(sortAsc);
            //             } else if ((this.sortBy == text) && !value) {
            //                 $(this.$el).append(sortDesc);
            //             } else {
            //                 $(this.$el).append(sortIcon);
            //             }
            //         });
            //     },
            //     "@click"($event) {
            //         this.sortByColumn($event);
            //     },
            // }));

            Alpine.data('activeAccounts', () => ({
                users: @json($users), // Initialize with your Livewire data
                search: '',
                sortColumn: '',
                sortDirection: 'asc',
                filterRole: '',
                rows: {},
                selectAll: false,
                currentPage: 1,
                perPage: 5,
                pages: [],
                showedEntries: '',
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
                    });

                    this.$watch('filterRole', value => {
                        this.filterRole = value == 'All' ? '' : value;
                        this.currentPage = 1;
                        console.log(value);
                    });

                    this.$watch('filterRole', value => {
                        this.currentPage = 1;
                    });

                    Livewire.on('refreshSelectedRows', (data) => {
                        this.selectAll = false;
                        Object.keys(this.rows).filter(key => this.rows[key] = false);
                        this.users = data[0];
                        this.currentPage = 1;
                    });
                },
                showAction() {
                    return Object.values(this.rows).includes(true);
                },
                get filterResult() {
                    // Define an array of keys that should be filterable
                    const filterableKeys = ['id', 'first_name', 'last_name', 'email', 'role'];

                    // Use the filter function with a more dynamic approach
                    let filtered = this.users.filter(user => {
                        let textMatch = filterableKeys.some(key =>
                            String(user[key]).toLowerCase().includes(this.search.toLowerCase())
                        );
                        let filterRoleMatch = this.filterRole === '' || user.role === this.filterRole;
                        return textMatch && filterRoleMatch;
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
            }))

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
            }))

            Alpine.data('archiveAccounts', () => ({
                users: @json($archived_users), // Initialize with your Livewire data
                search: '',
                sortColumn: '',
                sortDirection: 'asc',
                filterRole: '',
                rows: {},
                selectAll: false,
                currentPage: 1,
                perPage: 5,
                pages: [],
                showedEntries: '',
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
                    });

                    this.$watch('filterRole', value => {
                        this.filterRole = value == 'All' ? '' : value;
                        this.currentPage = 1;
                        console.log(value);
                    });

                    this.$watch('filterRole', value => {
                        this.currentPage = 1;
                    });

                    Livewire.on('refreshSelectedRows', (data) => {
                        this.selectAll = false;
                        Object.keys(this.rows).filter(key => this.rows[key] = false);
                        this.users = data[1];
                        this.currentPage = 1;
                    });
                },
                showAction() {
                    return Object.values(this.rows).includes(true);
                },
                get filterResult() {
                    // Define an array of keys that should be filterable
                    const filterableKeys = ['id', 'first_name', 'last_name', 'archived_at', 'role'];

                    // Use the filter function with a more dynamic approach
                    let filtered = this.users.filter(user => {
                        let textMatch = filterableKeys.some(key =>
                            String(user[key]).toLowerCase().includes(this.search.toLowerCase())
                        );
                        let filterRoleMatch = this.filterRole === '' || user.role === this.filterRole;
                        return textMatch && filterRoleMatch;
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


        });

        function formatDate(dateTimeString) {
            const originalDate = new Date(dateTimeString);

            // Format the date using toLocaleString
            const formattedDatetimeString = originalDate.toLocaleString('en-US', {
                month: 'long',
                day: 'numeric',
                year: 'numeric',
                hour: 'numeric',
                minute: 'numeric',
                hour12: true,
            });

            return formattedDatetimeString;
        }
    </script>
@endsection
