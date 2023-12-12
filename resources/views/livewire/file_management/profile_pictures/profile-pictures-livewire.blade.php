@section('head')
    <title>FLAGMS | Profile Pictures</title>
@endsection

<div class="content-wrapper pl-1 pr-1" style="background-color:  rgb(253, 253, 253);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 pl-5 pt-3">
                    <p class="font-weight-bold text-xl">Profile Pictures</p>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="col-12 col-sm-4 mb-2 pl-5 pr-5">
        <div class="input-group">
            <input class="form-control" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live.debounce.500ms='search'>
        </div>
    </div>
    
    <div class="row mt-2 mr-1">
        <div class="col-12 col-sm-12 pt-2 pr-5 d-flex justify-content-end">
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
            <div class="card ml-5 mr-5" style="border-radius: 10px;">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0 m-0">
                        <table class="table table-hover text-center">
                            <thead style="background-color: #7684B9; color: white;">
                                <tr class="text-sm">
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
                                <tr class="text-sm">
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
