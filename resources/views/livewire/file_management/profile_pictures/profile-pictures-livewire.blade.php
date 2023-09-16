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

    <div class="position-fixed p-3" style="z-index: 1100; right: 0; top: 0;">
        <div aria-atomic="true" aria-live="assertive" class="toast hide" data-delay="3000" id="liveToast" role="alert">
            <div class="toast-header">
                <img class="rounded mr-2" src="favicon.ico" width="24">
                <strong class="mr-auto">FLAGMS</strong>
                <small>{{ now()->format('h:i A') }}</small>
                <button aria-label="Close" class="ml-2 mb-1 close" data-dismiss="toast" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body bg-success">
                @if (session()->has('message'))
                    {{ session('message') }}
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                <!--SEARCH FEATURE-->
                <div class="input-group input-group-sm" style="max-width: 20%;">
                    <!--SEARCH INPUT-->
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live='search'>
                </div>
            </div>
            <!--PROFILE PICTURES TABLE SECTION-->
            <div class="card" style="margin-left: 2rem; margin-right: 2rem;">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
                    <table class="table text-nowrap" style="text-align: center;">
                        <thead style="background-color: #7684B9; color: white;">
                            <tr>
                                <th style="border-right: 1px solid #252525;">ID</th>
                                <th style="border-right: 1px solid #252525;">Image</th>
                                <th style="border-right: 1px solid #252525;">Owner</th>
                                <th style="border-right: 1px solid #252525;">Last Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profiles as $profile)
                            <tr>
                                <th scope="row">{{ $profile->id }}</th>
                                <td>
                                    <img src="{{ imageBinaryToSRC($profile->profile_picture) }}" width="50">
                                </td>
                                <td>{{ $profile->hasUserAccount->first_name . ' ' . $profile->hasUserAccount->last_name }}</td>
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
