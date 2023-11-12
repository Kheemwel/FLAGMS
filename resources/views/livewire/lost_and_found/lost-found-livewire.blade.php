@section('head')
    <title>Admin | Roles</title>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Lost and Found</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="card card-primary card-tabs" style="background-color:  rgb(253, 253, 253);margin-left: 2rem; margin-right: 2rem;">
        <div class="card-header p-0 pt-1" style="background-color: #7684B9 !important">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item" wire:ignore>
                    <a aria-controls="custom-tabs-one-found-items" aria-selected="true" class="nav-link active" data-toggle="pill" href="#custom-tabs-one-found-items" id="custom-tabs-one-found-items-tab" role="tab">
                        <h5 style="font-weight: bold;">Found Items</h5>
                    </a>
                </li>
                @if (in_array('ManageClaimedItems', $privileges))
                    <li class="nav-item" wire:ignore>
                        <a aria-controls="custom-tabs-one-claimed-items" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-claimed-items" id="custom-tabs-one-claimed-items-tab" role="tab">
                            <h5 style="font-weight: bold;">Claimed Items</h5>
                        </a>
                    </li>
                @endif
                @if (in_array('ManageExpiredItems', $privileges))
                    <li class="nav-item" wire:ignore>
                        <a aria-controls="custom-tabs-one-expired-items" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-expired-items" id="custom-tabs-one-expired-items-tab" role="tab">
                            <h5 style="font-weight: bold;">Expired Items</h5>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent" style="padding-right: 2rem;">
                <div aria-labelledby="custom-tabs-one-offense-tab" class="tab-pane fade active show" id="custom-tabs-one-found-items" role="tabpanel" wire:ignore.self>
                    @include('livewire.lost_and_found.found-items-table')
                </div>
                <div aria-labelledby="custom-tabs-one-claimed-items-tab" class="tab-pane fade" id="custom-tabs-one-claimed-items" role="tabpanel" wire:ignore.self>
                    @include('livewire.lost_and_found.claimed-items-table')
                </div>
                <div aria-labelledby="custom-tabs-one-expired-items-tab" class="tab-pane fade" id="custom-tabs-one-expired-items" role="tabpanel" wire:ignore.self>
                    @include('livewire.lost_and_found.expired-items-table')
                </div>
            </div>
        </div>
        <!-- /.card -->
    </div>

    @include('livewire.lost_and_found.add-item')
    @include('livewire.lost_and_found.edit-item')
    @include('livewire.lost_and_found.view-item')
    @include('livewire.lost_and_found.claim-item')
</div>
