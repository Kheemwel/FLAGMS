@section('head')
    <title>FLAGMS | User Accounts</title>

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

<div class="content-wrapper pl-1 pr-1" style="background-color: rgb(253, 253, 253);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 pl-5 pt-3">
                    <p class="font-weight-bold text-xl">User Accounts</p>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-tabs  ml-4 mr-4" style="background-color: rgb(253, 253, 253);">
                <div class="card-header p-0 pt-1" style="background-color: #7684B9 !important">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item" wire:ignore>
                            <a aria-controls="custom-tabs-one-active-accounts" aria-selected="true" class="nav-link active" data-toggle="pill" href="#custom-tabs-one-active-accounts" id="custom-tabs-one-active-accounts-tab" role="tab">
                                <p class="font-weight-bold text-lg">Active Accounts</p>
                            </a>
                        </li>
                        @if (wordsExistInArray(['Archive', 'Account'], $privileges))
                            <li class="nav-item" wire:ignore>
                                <a aria-controls="custom-tabs-one-archived-accounts" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-archived-accounts" id="custom-tabs-one-archived-accounts-tab" role="tab">
                                    <p class="font-weight-bold text-lg">Archived Accounts</p>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
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
            @include('livewire.user_accounts.import-users')
            @include('livewire.user_accounts.confirm-delete')
            @include('livewire.user_accounts.confirm-save')
            @include('livewire.user_accounts.confirm-archive')
            @include('livewire.user_accounts.confirm-unarchive')
            <!-- /.card -->
        </div>
    </div>
</div>

@section('scripts')
    <script>
        $(function() {
            $(".validate-name").on('keypress', function() {
                let text = this.value;

                // Capitalize first letter of each word
                text = text.replace(/\w\S*/g, function(txt) {
                    return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
                });

                this.value = text;

                const regex = /[^a-zA-Z]/; // Matches non-word characters and spaces
                if (regex.test(event.key)) {
                    event.preventDefault();
                }
            });
        })


        function getRndInteger(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }

        const passwordInput = {
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
            Alpine.data('addStudentParent', () => ({
                students: @json($students),
                selectedStudents: [],
                schoolLevels: @json($school_levels),
                gradeLevels: @json($grade_levels),
                selectedSchoolLevel: '',
                selectedGradeLevel: '',
                lastName: '',
                init() {
                    Livewire.on('loadStudents', (data) => {
                        this.students = data[0];
                    });

                    const grade_levels = @json($grade_levels);

                    this.$watch('selectedSchoolLevel', value => {
                        this.gradeLevels = grade_levels.filter(level => level['school_level'] == value);
                    });

                    this.$watch('selectedGradeLevel', value => {
                        if (!this.selectedSchoolLevel) {
                            this.selectedSchoolLevel = grade_levels.find(level => level['grade_level'] == value).school_level;
                        }
                    });

                    this.$watch('lastName', value => {
                        let children = this.students.filter(
                            student => student["last_name"].trim().toLowerCase() == value.trim().toLowerCase()
                        ).map(student => student['id']);
                        $('#multiple-select-optgroup-clear-field').val(children).trigger('change');
                    })
                },
                initMultiSelect() {
                    $('#multiple-select-optgroup-clear-field').select2({
                        placeholder: $(this).data('placeholder'),
                        allowClear: true,
                    });
                    $('#multiple-select-optgroup-clear-field').change((e) => {
                        let data = $(e.target).select2('val');
                        this.selectedStudents = data;
                    });
                }
            }))

            Alpine.bind("addUser", () => ({
                "x-init"() {
                    this.$watch('role', value => {
                        if (value == 'Student') {
                            $(this.$el).attr('wire:submit.prevent', 'addStudent(selectedSchoolLevel, selectedGradeLevel)');
                        } else if (value == 'Parent') {
                            $(this.$el).attr('wire:submit.prevent', 'addParent(selectedStudents)');
                        } else if (value == 'Teacher') {
                            $(this.$el).attr('wire:submit.prevent', 'addTeacher()');
                        } else if (value == 'Principal') {
                            $(this.$el).attr('wire:submit.prevent', 'addPrincipal()');
                        } else if (value == 'Guidance') {
                            $(this.$el).attr('wire:submit.prevent', 'addGuidance()');
                        } else {
                            $(this.$el).attr('wire:submit.prevent', 'addUser()');
                        }
                    })
                }
            }));

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

                    this.$watch('filterRole', value => {
                        this.filterRole = value == 'All' ? '' : value;
                        this.currentPage = 1;
                        this.noResult = this.filterResult.length == 0;
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

                    this.$watch('filterRole', value => {
                        this.filterRole = value == 'All' ? '' : value;
                        this.currentPage = 1;
                        this.noResult = this.filterResult.length == 0;
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
    </script>
@endsection
