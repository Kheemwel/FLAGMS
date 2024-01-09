@section('head')
    <title>FLAGMS | Digital Records</title>
@endsection

@section('head-scripts')
    <script src="js/jQuery.print.min.js"></script>
@endsection

<div class="content-wrapper pl-1 pr-1" style="background-color: rgb(253, 253, 253);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 pl-5 pt-3">
                    <p class="font-weight-bold text-xl">Digital Records</p>
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
                            <a aria-controls="custom-tabs-one-home" aria-selected="true" class="nav-link active" data-toggle="pill" href="#custom-tabs-one-home" id="custom-tabs-one-home-tab" role="tab">
                                <p class="font-weight-bold text-lg">Home Visitation Forms</p>
                            </a>
                        </li>
                        <li class="nav-item" wire:ignore>
                            <a aria-controls="custom-tabs-one-violation" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-violation" id="custom-tabs-one-violation-tab" role="tab">
                                <p class="font-weight-bold text-lg">Violation Forms</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div aria-labelledby="custom-tabs-one-home-tab" class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" wire:ignore.self>
                            @include('livewire.digital_records.home-visitation-forms')
                            @include('livewire.digital_records.view-home-visitation-form')
                        </div>
                        <div aria-labelledby="custom-tabs-one-violation-tab" class="tab-pane fade" id="custom-tabs-one-violation" role="tabpanel" wire:ignore.self>
                            @include('livewire.digital_records.violation-forms')
                            @include('livewire.digital_records.view-violation-form')
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        function printHomeVisitationForm() {
            $('#home-visitation-form-content').print();
        }

        function printViolationForm() {
            $('#violation-form-content').print();
        }
    </script>
@endsection
