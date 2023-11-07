@section('head')
    <title>Admin | Offenses</title>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Offenses</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="card card-primary card-tabs " style="background-color:  rgb(253, 253, 253); margin-left: 2rem; margin-right: 2rem;">
        <div class="card-header p-0 pt-1" style="background-color: #7684B9 !important">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item" wire:ignore>
                    <a aria-controls="custom-tabs-one-offenses" aria-selected="true" class="nav-link active" data-toggle="pill" href="#custom-tabs-one-offenses" id="custom-tabs-one-offenses-tab" role="tab">
                        <h5 style="font-weight: bold;">Offenses</h5>
                    </a>
                </li>
                <li class="nav-item" wire:ignore>
                    <a aria-controls="custom-tabs-one-categories" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-categories" id="custom-tabs-one-categories-tab" role="tab">
                        <h5 style="font-weight: bold;">Categories</h5>
                    </a>
                </li>
                <li class="nav-item" wire:ignore>
                    <a aria-controls="custom-tabs-one-offenses_levels" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-offenses_levels" id="custom-tabs-one-offenses_levels-tab" role="tab">
                        <h5 style="font-weight: bold;">Offense Levels</h5>
                    </a>
                </li>
                <li class="nav-item" wire:ignore>
                    <a aria-controls="custom-tabs-one-disciplinary_actions" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-disciplinary_actions" id="custom-tabs-one-disciplinary_actions-tab" role="tab">
                        <h5 style="font-weight: bold;">Disciplinary Actions</h5>
                    </a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent" style="padding-right: 2rem;">
                <div aria-labelledby="custom-tabs-one-offense-tab" class="tab-pane fade active show" id="custom-tabs-one-offenses" role="tabpanel" wire:ignore.self>
                    @include('livewire.file_management.offenses.offenses-table')
                </div>
                <div aria-labelledby="custom-tabs-one-categories-tab" class="tab-pane fade" id="custom-tabs-one-categories" role="tabpanel" wire:ignore.self>
                    @include('livewire.file_management.offenses.offenses-categories')
                </div>
                <div aria-labelledby="custom-tabs-one-offenses_levels-tab" class="tab-pane fade" id="custom-tabs-one-offenses_levels" role="tabpanel" wire:ignore.self>
                    @include('livewire.file_management.offenses.offenses-levels')
                </div>
                <div aria-labelledby="custom-tabs-one-disciplinary_actions-tab" class="tab-pane fade" id="custom-tabs-one-disciplinary_actions" role="tabpanel" wire:ignore.self>
                    @include('livewire.file_management.offenses.disciplinary-actions')
                </div>
            </div>
        </div>
        <!-- /.card -->


        @include('livewire.file_management.offenses.add-offenses')
        @include('livewire.file_management.offenses.add-offenses-category')
        @include('livewire.file_management.offenses.add-disciplinary-actions')
    </div>
</div>