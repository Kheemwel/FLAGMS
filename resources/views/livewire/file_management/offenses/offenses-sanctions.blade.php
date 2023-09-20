<div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
    <!--SEARCH FEATURE-->
    <div class="input-group input-group-sm" style="max-width: 20%;">
        <!--SEARCH INPUT-->
        <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live='search'>
    </div>
    <!--ADD ROLE BUTTON-->
    <button class="btn btn-default" data-target="#addSanctionModal" data-toggle="modal" style="font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button">
        <i aria-hidden="true" class="fa fa-plus"></i> 
        Add New Sanction
    </button>
</div>

<div class="card" style="margin-left: 2rem; margin-right: 2rem;">
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
        <table class="table text-nowrap" style="text-align: center;">
            <thead style="background-color: #7684B9; color: white;">
                <tr>
                    <th style="border-right: 1px solid #252525;">ID</th>
                    <th style="border-right: 1px solid #252525;">Sanctions</th>
                    <th style="border-right: 1px solid #252525;">Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sanctions as $sanction)
                    <tr>
                        <th scope="row">{{ $sanction->id }}</th>
                        <td>{{ $sanction->offenses_sanction }}</td>
                        <td>{{ $sanction->description }}</td>
                        <td>
                            <!--EDIT PROFILE-->
                            <button class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal">
                                <i class="fa fa-solid fa-pen"></i>
                            </button>
                            <!-------------------------------------------------------------------------------------------------------------------------->

                            <!--VIEW PROFILE-->
                            <button class="btn btn-primary action-btn" data-target="#view-user-btn">
                                <i aria-hidden="true" class="fa fa-eye"></i>
                            </button>

                            {{-- DELETE PROFILE --}}
                            <button class="btn btn-primary action-btn" wire:click="deleteSanction({{ $sanction->id }})">
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

