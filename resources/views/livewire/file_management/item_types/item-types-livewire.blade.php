@section('head')
    <title>FLAGMS | Item Types</title>
@endsection

<div class="content-wrapper pl-1 pr-1" style="background-color:  rgb(253, 253, 253);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 pl-4 pt-3">
                    <p class="text-xl font-weight-bold">Item Types</p>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="row mt-2">
        <!-- Search Input - Left Corner on Big Screens -->
        <div class="col-12 col-sm-12 col-md-6 mb-2 pr-4 pl-4">
            <div class="input-group">
                <input class="form-control" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live.debounce.500ms='search'>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 d-flex justify-content-end pr-4 pl-4 mb-2">
            <!--ADD ROLE BUTTON-->
            <button class="btn btn-default" data-target="#addTypeModal" data-toggle="modal" style="border-radius: 10px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button">
                <i aria-hidden="true" class="fa fa-plus"></i> &nbsp;
                Add New Item Type
            </button>
        </div>
    </div>

    <div class="row mt-2 mr-1">
        <div class="col-12 col-sm-12 pt-2 pr-4 pl-4 d-flex justify-content-end">
            <label for="per-page" class="font-weight-normal text-sm">Show
                <select class="form-select form-select-sm" id='per-page'
                    wire:model.live.debounce.500ms="per_page">
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                    <option selected>30</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                Entries
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <!--PROFILE PICTURES TABLE SECTION-->
            <div class="card ml-4 mr-4" style="border-radius: 10px;">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0 m-0">
                        <table class="table table-hover text-center">
                            <thead style="background-color: #7684B9; color: white;">
                                <tr>
                                    <th>
                                        <input type="checkbox">
                                    </th>
                                    <th>ID</th>
                                    <th>Item Type Name</th>
                                    {{-- <th style="border-right: 1px solid #252525;">Number of Items</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($item_types as $type)
                                    <tr>
                                        <td> </td>
                                        <th scope="row">{{ $type->id }}</th>
                                        <td>{{ $type->item_type }}</td>
                                        {{-- <td>{{ '' }}</td> --}}
                                        <td>
                                            <!--EDIT PROFILE-->
                                            <button class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal">
                                                <i class="fa fa-solid fa-pen"></i>
                                            </button>
                                            <!-------------------------------------------------------------------------------------------------------------------------->

                                            {{-- DELETE PROFILE --}}
                                            <button class="btn btn-primary action-btn" wire:click="delete({{ $type->id }})">
                                                <i aria-hidden="true" class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    @include('livewire.file_management.item_types.add-type')
</div>
