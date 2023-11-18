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
            

            <div class="card card-primary card-tabs" style="background-color:  rgb(253, 253, 253);margin-left: 2rem; margin-right: 2rem;">
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
        Livewire.on('parentForm', () => {
            setTimeout(function() {
                $('#multiple-select-optgroup-clear-field').select2({
                    theme: "bootstrap4",
                    placeholder: $(this).data('placeholder'),
                    allowClear: true,
                });

                $('#multiple-select-optgroup-clear-field').on('change', function(e) {
                    let data = new Array($(this).val());
                    Livewire.dispatch('setSelectedStudents', data);
                });
            });
        });
    </script>
@endsection
