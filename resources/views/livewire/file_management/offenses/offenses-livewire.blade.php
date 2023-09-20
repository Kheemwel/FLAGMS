@section('head')
    <title>Admin | Offenses</title>
@endsection

{{-- <div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;"> --}}
<!-- Content Header (Page header) -->
{{-- <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Offenses</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section> --}}

<div class="card card-primary card-tabs content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <div class="card-header p-0 pt-1" style="background-color: #7684B9 !important">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a aria-controls="custom-tabs-one-offenses" aria-selected="true" class="nav-link active" data-toggle="pill" href="#custom-tabs-one-offenses" id="custom-tabs-one-offenses-tab" role="tab">
                    <h3 style="font-weight: bold;">Offenses</h3>
                </a>
            </li>
            <li class="nav-item">
                <a aria-controls="custom-tabs-one-categories" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-categories" id="custom-tabs-one-categories-tab" role="tab">
                    <h3 style="font-weight: bold;">Categories</h3>
                </a>
            </li>
            <li class="nav-item">
                <a aria-controls="custom-tabs-one-sanctions" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-sanctions" id="custom-tabs-one-sanctions-tab" role="tab">
                    <h3 style="font-weight: bold;">Sanctions</h3>
                </a>
            </li>
        </ul>
    </div>
    <div class="card-body" wire:ignore.self>
        <div class="tab-content" id="custom-tabs-one-tabContent" style="padding-right: 2rem;">
            <div aria-labelledby="custom-tabs-one-offense-tab" class="tab-pane fade active show" id="custom-tabs-one-offenses" role="tabpanel">
                @include('livewire.file_management.offenses.offenses-table')
            </div>
            <div aria-labelledby="custom-tabs-one-categories-tab" class="tab-pane fade" id="custom-tabs-one-categories" role="tabpanel">
                @include('livewire.file_management.offenses.offenses-categories')
            </div>
            <div aria-labelledby="custom-tabs-one-sanctions-tab" class="tab-pane fade" id="custom-tabs-one-sanctions" role="tabpanel">
                @include('livewire.file_management.offenses.offenses-sanctions')
            </div>
        </div>
    </div>
    <!-- /.card -->

    
@include('livewire.file_management.offenses.add-offenses')
@include('livewire.file_management.offenses.add-offenses-category')
@include('livewire.file_management.offenses.add-sanctions')
</div>
