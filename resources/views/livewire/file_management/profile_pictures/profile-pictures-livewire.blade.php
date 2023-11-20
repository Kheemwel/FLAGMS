@section('head')
    <title>Admin | Profile Pictures</title>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Profile Pictures</h1>
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
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="per-page" style="font-weight: normal; margin-top: 1rem; margin-left: 2rem;">
                        Show
                        <span>
                            <select class="form-select form-select-sm mb-2" id='per-page' selected
                                wire:model.live.debounce.500ms="per_page">
                                <option>10</option>
                                <option>15</option>
                                <option>20</option>
                                <option>25</option>
                                <option selected>30</option>
                                <option>50</option>
                                <option>100</option>
                            </select>
                        </span>
                        Entries
                    </label>
                </div>
            </div>
            
            <!--PROFILE PICTURES TABLE SECTION-->
            <div class="card" style="margin-left: 2rem; margin-right: 3rem; border-radius: 10px;">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover" style="text-align: center;">
                            <thead style="background-color: #7684B9; color: white;">
                                <tr>
                                    <th>
                                        <input type="checkbox">
                                    </th>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Claimer</th>
                                    <th>Last Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($profiles as $profile)
                                <tr>
                                    <td> </td>
                                    <th scope="row">{{ $profile->id }}</th>
                                    <td>
                                        <img src="{{ imageBinaryToSRC($profile->profile_picture) }}" width="50">
                                    </td>
                                    <td>{{ $profile->hasUserAccount->name }}</td>
                                    <td>{{ $profile->updated_at->format('F d,Y   h:i A') }}</td>
                                    <td>
                                        <!--EDIT PROFILE-->
                                        <button class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal">
                                            <i class="fa fa-solid fa-pen"></i>
                                        </button>
                                        <!-------------------------------------------------------------------------------------------------------------------------->
                                        
                                        <!--VIEW PROFILE-->
                                        <button class="btn btn-primary action-btn" data-target="#view-user-btn" data-toggle="modal">
                                            <i aria-hidden="true" class="fa fa-eye"></i>
                                        </button>

                                        {{-- DELETE PROFILE --}}
                                        <button class="btn btn-primary action-btn">
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
</div>

@section('scripts')
    <script>
        Livewire.on('showToast', () => {
            setTimeout(function() {
                $('.toast').toast('show');
            });
        });
    </script>
@endsection
