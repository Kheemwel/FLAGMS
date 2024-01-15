@section('head')
    <title>FLAGMS | Item tags</title>
@endsection

<div class="content-wrapper pl-1 pr-1" style="background-color:  rgb(253, 253, 253);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 pl-4 pt-3">
                    <p class="text-xl font-weight-bold">Item Tags</p>
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
            <!--BUTTON-->
            <button class="btn btn-default" data-target="#addTagModal" data-toggle="modal" style="border-radius: 10px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button">
                <i aria-hidden="true" class="fa fa-plus"></i> &nbsp;
                Add New Item Tag
            </button>
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
                                    <th>ID</th>
                                    <th>Priority Tag</th>
                                    <th>Number of Days Will Expired</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($item_tags as $tag)
                                    <tr>
                                        <th scope="row">{{ $tag->id }}</th>
                                        <td>{{ $tag->priority_tag }}</td>
                                        <td>{{ $tag->days_expired }}</td>
                                        <td>
                                            <!--EDIT-->
                                            <button class="btn btn-primary action-btn" data-target="#editTagModal" data-toggle="modal" wire:click="edit({{ $tag->id }})">
                                                <i class="fa fa-solid fa-pen"></i>
                                            </button>
                                            <!-------------------------------------------------------------------------->

                                            {{-- DELETE --}}
                                            <button class="btn btn-primary action-btn" wire:click="delete({{ $tag->id }})">
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
    @include('livewire.file_management.item_tags.add-tag')
    @include('livewire.file_management.item_tags.edit-tag')
</div>
