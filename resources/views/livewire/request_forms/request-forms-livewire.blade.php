@section('head')
    <title>FLAGMS | Request Forms</title>

    <!-- Select2 CSS -->
    <link href="adminLTE-3.2/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="adminLTE-3.2/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet">
@endsection

@section('head-scripts')
    {{-- Select2 JS --}}
    <script src="adminLTE-3.2/plugins/select2/js/select2.full.min.js"></script>
@endsection


<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Request Forms</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                <!--SEARCH FEATURE-->
                <div class="input-group input-group-sm" style="max-width: 30%;">
                    <!--SEARCH INPUT-->
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text">
                    <div class="input-group-append">
                        <button class="btn btn-default" data-target="#filter" data-toggle="modal" style="height: 35px;" type="submit">
                            <i aria-hidden="true" class="fa fa-filter"></i>
                        </button>
                        <button class="btn btn-block btn-default" data-target="#request-form" data-toggle="modal" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white; margin-left: 2rem;">Request Form</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="card card-primary card-tabs" style="background-color:  rgb(253, 253, 253);margin-left: 2rem; margin-right: 2rem;">
        <div class="card-header p-0 pt-1" style="background-color: #7684B9 !important">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item" wire:ignore>
                    <a aria-controls="custom-tabs-one-pending-requests" aria-selected="true" class="nav-link active" data-toggle="pill" href="#custom-tabs-one-pending-requests" id="custom-tabs-one-pending-requests-tab" role="tab">
                        <h5 style="font-weight: bold;">Pending Requests</h5>
                    </a>
                </li>
                <li class="nav-item" wire:ignore>
                    <a aria-controls="custom-tabs-one-approved-requests" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-approved-requests" id="custom-tabs-one-approved-requests-tab" role="tab">
                        <h5 style="font-weight: bold;">Approved Requests</h5>
                    </a>
                </li>
                <li class="nav-item" wire:ignore>
                    <a aria-controls="custom-tabs-one-disapproved-requests" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-disapproved-requests" id="custom-tabs-one-disapproved-requests-tab" role="tab">
                        <h5 style="font-weight: bold;">Disapproved Requests</h5>
                    </a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent" style="padding-right: 2rem;">
                <div aria-labelledby="custom-tabs-one-pending-requests-tab" class="tab-pane fade active show" id="custom-tabs-one-pending-requests" role="tabpanel" wire:ignore.self>
                    @include('livewire.request_forms.pending-request-forms')
                </div>
                <div aria-labelledby="custom-tabs-one-approved-requests-tab" class="tab-pane fade" id="custom-tabs-one-approved-requests" role="tabpanel" wire:ignore.self>
                    @include('livewire.request_forms.approved-request-forms')
                </div>
                <div aria-labelledby="custom-tabs-one-disapproved-requests-tab" class="tab-pane fade" id="custom-tabs-one-disapproved-requests" role="tabpanel" wire:ignore.self>
                    @include('livewire.request_forms.disapproved-request-forms')
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

    @include('livewire.request_forms.request-form')
    @include('livewire.request_forms.read-form')
    @include('livewire.request_forms.filter')
</div>

@section('scripts')
    <script>
        let studentsInvolve = [];
        let selectedStudent = null;

        function initMultiSelect() {
            $('#multiple-select-optgroup-clear-field').select2({
                theme: "bootstrap4",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: true,
            });

            $('#single-select-optgroup-clear-field').select2({
                theme: "bootstrap4",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: true,
            });

            $('#multiple-select-optgroup-clear-field').on('change', function(e) {
                studentsInvolve = $(this).val();
            });

            $('#single-select-optgroup-clear-field').on('change', function(e) {
                selectedStudent = $(this).val();
            });
        }

        Livewire.on('clearSelections', () => {
            $('#multiple-select-optgroup-clear-field').val(null).trigger('change');
            $('#single-select-optgroup-clear-field').val(null).trigger('change');
        })
    </script>
@endsection
