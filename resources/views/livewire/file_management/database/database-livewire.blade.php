@section('head')
    <title>Admin | Database</title>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Database</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <button wire:click="createBackup">Create Backup</button>

    <div wire:loading wire:target='createBackup'>
        <div class="overlay bg-white">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
        </div>
    </div>

    <div wire:loading wire:target='restoreBackup'>
        <div class="overlay bg-white">
            <i class="fas fa-3x fa-sync-alt fa-spin"></i>
        </div>
    </div>

    <div class="card" style="margin-left: 2rem; margin-right: 2rem;">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
            <table class="table text-nowrap" style="text-align: center;">
                <thead style="background-color: #7684B9; color: white;">
                    <tr>
                        <th style="border-right: 1px solid #252525;">File Name</th>
                        <th style="border-right: 1px solid #252525;">Size</th>
                        <th style="border-right: 1px solid #252525;">Last Modified</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($backups as $backup)
                        <tr>
                            <th scope="row">{{ $backup['name'] }}</th>
                            <td>{{ $backup['size'] }}</td>
                            <td>{{ date('F d,Y   h:i A', strtotime($backup['date'])) }}</td>
                            <td>
                                <button wire:click="restoreBackup('{{ $backup['name'] }}')">Restore</button>
                                <button wire:click="deleteBackup('{{ $backup['name'] }}')">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
