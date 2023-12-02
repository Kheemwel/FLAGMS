@section('head')
    <title>Admin | Calendar Colors</title>

    <!-- Bootstrap Color Picker -->
    <link href="adminLTE-3.2/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
@endsection

@section('head-scripts')
    <!-- bootstrap color picker -->
    <script src="adminLTE-3.2/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 2rem;">
                    <h1 style="font-weight: bold;">Guidance Schedule Tags</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 3rem;">
                <!--SEARCH FEATURE-->
                <div class="input-group input-group-sm" style="max-width: 20%;">
                    <!--SEARCH INPUT-->
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live.debounce.500ms='search'>
                </div>
                <!--ADD ROLE BUTTON-->
                <button class="btn btn-default" data-target="#addScheduleTagModal" data-toggle="modal" style="border-radius: 10px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button">
                    <i aria-hidden="true" class="fa fa-plus"></i>
                    Add New Schedule Tag
                </button>
            </div>
            <!--PROFILE PICTURES TABLE SECTION-->
            <div class="card" style="margin-left: 2rem; margin-right: 3rem; border-radius: 10px;">
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
