@section('head')
    <title>FLAGMS | Individual Inventory</title>
@endsection

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" x-data="{ content: 'none' }">
    @if (!$inventory)
        <template x-if="content == 'none'">
            <div>
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6 ml-2 mt-2">
                                <h1 class="font-weight-bold">Individual Inventory Report</h1>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group m-5 p-5 d-flex flex-column align-items-center">
                                <label class="text-sm font-weight-normal text-center" style="color: #252525;">You have not yet submitted your <br> individual inventory report </label>
                                <a class="btn btn-block btn-primary text-sm border-0 mt-3" style="background-color: #0A0863; width: 7rem;" type="button" x-on:click="content = 'report'">Create Report</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>
        <template x-if="content == 'report'">
            @include('livewire.student_inventory.report-individual-inventory')
        </template>
    @else
        @include('livewire.student_inventory.read-individual-inventory')
    @endif
</div>
