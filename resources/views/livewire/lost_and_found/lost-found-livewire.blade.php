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

    <div class="row">
        <div class="col-12">
            <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                <!--SEARCH FEATURE-->
                <div class="input-group input-group-sm" style="max-width: 30%;">
                    <!--SEARCH INPUT-->
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text">
                    <div class="input-group-append">
                        <button class="btn btn-default" data-target="#table-filter" data-toggle="modal" style="height: 35px;" type="submit">
                            <i aria-hidden="true" class="fa fa-filter"></i>
                        </button>
                        <!--TABLE FILTER MODAL-->
                        <div class="modal fade" id="table-filter">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="border: transparent; padding: 10px;">
                                        <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form>
                                        <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                                            <!--MODAL FORM TITLE-->
                                            <p class="card-title" style="color: #252525; font-size: 16px; font-weight: bold;">Item Types</p> <br><br>
                                            <!--ITEM TYPES-->
                                            <div class="row">
                                                @foreach ($item_types as $type)
                                                    <div class="form-group col-sm-6" style="font-size: 10px; color: #252525; font-weight: bold;">
                                                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;">
                                                            {{ $type->item_type }}
                                                        </button>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="row">
                                                <!--RESET-->
                                                <div class="form-group col-sm-6">
                                                    <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #d9d9f3; color: #0A0863;"> Reset</button>
                                                </div>
                                                <!--DONE-->
                                                <div class="form-group col-sm-6">
                                                    <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white;">Done</button>
                                                </div>
                                            </div>
                                        </div> <!-- /.card-body -->
                                    </form>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal end-->

                    <!--UPLOAD BUTTON-->
                    <button class="btn btn-default" data-target="#add-lost-item" data-toggle="modal" style="max-width: 7rem; height: 35px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button"><i class="fa fa-solid fa-plus"></i> Add Lost Item</button>
                    <!-- /.modal end-->
                </div>
            </div>
        </div>
    </div>

    <!--HOME VISITATION TABLE SECTION-->
    <div class="card" style="margin-left: 2rem; margin-right: 2rem;">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
            <table class="table text-nowrap" style="text-align: center;">
                <thead style="background-color: #7684B9; color: white;">
                    <tr>
                        <th style="border-right: 1px solid #252525;">ID</th>
                        <th style="border-right: 1px solid #252525;">Item Type</th>
                        <th style="border-right: 1px solid #252525;">Item Name</th>
                        <th style="border-right: 1px solid #252525;">Date and Time Found</th>
                        <th style="border-right: 1px solid #252525;">Location Found</th>
                        <th style="border-right: 1px solid #252525;">Finder's Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->getType->item_type }}</td>
                            <td>{{ $item->item_name }}</td>
                            <td>{{ date('F d,Y   h:i A', strtotime($item->datetime_found)) }}</td>
                            <td>{{ $item->location_found }}</td>
                            <td>{{ $item->finder_name }}</td>
                            <td>
                                <!--USER INFO VIEW BUTTON-->
                                <p class="btn btn-primary action-btn" data-target="#view-lost-item" data-toggle="modal" style="color: #3C58FF;  text-decoration: underline;" wire:click="get_data({{ $item->id }})">View</p>
                                
                                <!--EDIT LOST ITEM BUTTON-->
                                <button class="btn btn-primary action-btn" data-target="#edit-lost-item" data-toggle="modal" wire:click="get_data({{ $item->id }})">
                                    <i class="fa fa-solid fa-pen"></i>
                                </button>
                                
                                {{-- DELETE USER --}}
                                <button class="btn btn-primary action-btn" wire:click='delete({{ $item->id }})'>
                                    <i aria-hidden="true" class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


        @include('livewire.lost_and_found.add-item')
        @include('livewire.lost_and_found.edit-item')
        @include('livewire.lost_and_found.view-item')
    </div>
</div>
