<div style="margin-left: 2rem; margin-right: 2rem;">
    <div class="row" style="margin-bottom: 2rem; margin-top: 1rem;">
        <!--SEARCH FEATURE-->
        <div class="col-6" style="max-width: 20%;">
            <!--SEARCH INPUT-->
            <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live.debounce.500ms='disciplinary_actions_search'>
        </div>
        <div class="col-6 d-flex justify-content-end ml-auto">
            <!--ADD ROLE BUTTON-->
            <button class="btn btn-default" data-target="#addDisciplinaryActionModal" data-toggle="modal" style="border-radius: 10px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button">
                <i aria-hidden="true" class="fa fa-plus"></i> 
                Add New Disciplinary Action
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-6 d-flex justify-content-end ml-auto">
            <label for="per-page" style="font-weight: normal; margin-top: 1rem;">
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
</div>

<div class="card" style="margin-left: 2rem; margin-right: 2rem; border-radius: 10px;">
    <div class="card-body table-responsive p-0"style="border: 1px solid #252525; border-radius: 10px;">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover" style="text-align: center;">
                <thead style="background-color: #7684B9; color: white;">
                    <tr>
                        <th
                            x-on:click="selectAll = !selectAll; Object.keys(rows).forEach(function(key) {rows[key] = selectAll;})">
                            <input type="checkbox" x-model="selectAll">
                        </th>
                        <th>ID</th>
                        <th>Disciplinary Actions</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($queried_disciplinary_actions as $disciplinary_action)
                        <tr>
                            <td></td>
                            <th scope="row">{{ $disciplinary_action->id }}</th>
                            <td>{{ $disciplinary_action->action }}</td>
                            <td>
                                <!--EDIT PROFILE-->
                                <button class="btn btn-primary action-btn" data-target="#editDisciplinaryActionModal" data-toggle="modal" wire:click='getDisciplinaryAction({{ $disciplinary_action->id }})'>
                                    <i class="fa fa-solid fa-pen"></i>
                                </button>
                                <!-------------------------------------------------------------------------------------------------------------------------->
                                <button class="btn btn-primary action-btn" wire:click="deleteDisciplinaryAction({{ $disciplinary_action->id }})">
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

