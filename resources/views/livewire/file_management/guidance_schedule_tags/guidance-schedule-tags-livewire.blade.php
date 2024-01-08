@section('head')
    <title>FLAGMS | Calendar Colors</title>

    <!-- Bootstrap Color Picker -->
    <link href="adminLTE-3.2/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
@endsection

@section('head-scripts')
    <!-- bootstrap color picker -->
    <script src="adminLTE-3.2/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
@endsection

<div class="content-wrapper pl-1 pr-1" style="background-color:  rgb(253, 253, 253);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 pl-4 pt-3">
                    <p class="text-xl font-weight-bold">Guidance Schedule Tags</p>
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
            <button class="btn btn-default" data-target="#addScheduleTagModal" data-toggle="modal" style="border-radius: 10px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button">
                <i aria-hidden="true" class="fa fa-plus"></i> &nbsp;
                Add New Schedule Tag
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
            <!--TABLE SECTION-->
            <div class="card ml-4 mr-4" style="border-radius: 10px;">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0"style="border: 1px solid #252525; border-radius: 10px;">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover" style="text-align: center;">
                            <thead style="background-color: #7684B9; color: white;">
                                <tr>
                                    <th>
                                        <input type="checkbox">
                                    </th>
                                    <th>ID</th>
                                    <th>Tag Name</th>
                                    <th>Color</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedule_tags as $tag)
                                    <tr>
                                        <td> </td>
                                        <th scope="row">{{ $tag->id }}</th>
                                        <td>{{ $tag->tag_name }}</td>
                                        <td style="background-color: {{ $tag->color }}">{{ $tag->color }}</td>
                                        <td>
                                            <!-------------------------------------------------------------------------------------------------------------------------->
                                            <!--VIEW PROFILE-->
                                            <button class="btn btn-primary action-btn" data-target="#editScheduleTagModal" data-toggle="modal" wire:click='getScheduleTag({{ $tag->id }})'>
                                                <i aria-hidden="true" class="fa fa-pen"></i>
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

    @include('livewire.file_management.guidance_schedule_tags.add-schedule-tag')
    @include('livewire.file_management.guidance_schedule_tags.edit-schedule-tag')
</div>

@section('scripts')
    <script>
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        $('.my-colorpicker2').on('colorpickerChange', function(event) {
            $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            @this.set('color_code', event.color.toString());
        })
    </script>
@endsection
