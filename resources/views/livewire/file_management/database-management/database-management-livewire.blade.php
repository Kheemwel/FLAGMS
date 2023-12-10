@section('head')
    <title>Admin | Database</title>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Database Management</h1>
                    <div wire:loading wire:target='createBackup'>
                        <div class="overlay bg-white">
                            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                            <p>
                                Creating Database Backup...
                            </p>
                        </div>
                    </div>
                    <div wire:loading wire:target='restoreBackup'>
                        <div class="overlay bg-white">
                            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                            <p>
                                Restoring Database...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 3rem;">
        <button wire:loading.attr='disabled' wire:target='createBackup' class="btn btn-default" style="border-radius: 10px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" wire:click="createBackup">Create Backup</button>
    </div>

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
                            <th>File Name</th>
                            <th>Size</th>
                            <th>Last Modified</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($backups as $backup)
                            <tr>
                                <td> </td>
                                <th scope="row">{{ $backup['name'] }}</th>
                                <td>{{ $backup['size'] }}</td>
                                <td>{{ date('F d,Y   h:i A', strtotime($backup['date'])) }}</td>
                                <td>
                                    <button wire:loading.attr='disabled' wire:target='restoreBackup' wire:click="restoreBackup('{{ $backup['name'] }}')">Restore</button>
                                    <button wire:loading.attr='disabled' wire:target='restoreBackup' wire:click="deleteBackup('{{ $backup['name'] }}')">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>
