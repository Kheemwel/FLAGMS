@section('head')
    <title>Admin | Guidance</title>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Guidance Users</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>


    <div class="row">
        <div class="col-12">
            <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                <!--SEARCH FEATURE-->
                <div class="input-group input-group-sm" style="max-width: 20%;">
                    <!--SEARCH INPUT-->
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live='search'>
                </div>
            </div>
            <div class="card" style="margin-left: 2rem; margin-right: 2rem;">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
                    <table class="table text-nowrap" style="text-align: center;">
                        <thead style="background-color: #7684B9; color: white;">
                            <tr>
                                <th style="border-right: 1px solid #252525;">ID</th>
                                <th style="border-right: 1px solid #252525;">Name</th>
                                <th style="border-right: 1px solid #252525;">Registered At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guidances as $guidance)
                                <tr>
                                    <th scope="row">{{ $guidance->id }}</th>
                                    <td>{{ $guidance->getUserAccount->name }}</td>
                                    <td>{{ $guidance->created_at->format('F d,Y   h:i A') }}</td>
                                    <td>
                                        <button class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal">
                                            <i class="fa fa-solid fa-pen"></i>
                                        </button>
                                        <button class="btn btn-primary action-btn" data-target="#view-user-btn" data-toggle="modal">
                                            <i aria-hidden="true" class="fa fa-eye"></i>
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
