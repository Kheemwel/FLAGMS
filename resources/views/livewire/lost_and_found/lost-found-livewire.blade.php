@section('head')
    <title>Lost and Found</title>
@endsection

<div class="content-wrapper pl-3 pr-3" style="background-color: rgb(253, 253, 253);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12 col-sm-6 mt-2">
                    <h1 style="font-weight: bold;">Lost and Found</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="card card-primary card-tabs ml-3 mr-3" style="background-color: rgb(253, 253, 253);">
        <div class="card-header p-0 pt-1" style="background-color: #7684B9 !important">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#custom-tabs-one-found-items" role="tab">
                        <h5 style="font-weight: bold;">Found Items</h5>
                    </a>
                </li>
                @if (in_array('ManageClaimedItems', $privileges))
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#custom-tabs-one-claimed-items" role="tab">
                            <h5 style="font-weight: bold;">Claimed Items</h5>
                        </a>
                    </li>
                @endif
                @if (in_array('ManageExpiredItems', $privileges))
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#custom-tabs-one-expired-items" role="tab">
                            <h5 style="font-weight: bold;">Expired Items</h5>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-one-found-items" role="tabpanel">
                    @include('livewire.lost_and_found.found-items-table')
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-claimed-items" role="tabpanel">
                    @include('livewire.lost_and_found.claimed-items-table')
                </div>
                <div class="tab-pane fade" id="custom-tabs-one-expired-items" role="tabpanel">
                    @include('livewire.lost_and_found.expired-items-table')
                </div>
            </div>
        </div>
    </div>

    @include('livewire.lost_and_found.add-item')
    @include('livewire.lost_and_found.edit-item')
    @include('livewire.lost_and_found.view-item')
    @include('livewire.lost_and_found.claim-item')
</div>
