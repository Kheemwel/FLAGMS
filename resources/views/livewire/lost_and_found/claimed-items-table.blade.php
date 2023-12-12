<div class="col-12 col-sm-4 mb-2 d-flex justify-content-end text-right">
    <div class="input-group">
        <input class="form-control" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live.debounce.500ms='search'>
        <div class="input-group-append">
            <button class="btn btn-default" data-target="#table-filter" data-toggle="modal" style="height: 35px;" type="submit">
                <i aria-hidden="true" class="fa fa-filter"></i> Filter
            </button>
        </div>
    </div>
</div>
<div class="col-12 col-sm-8 text-right pr-0 pl-0">
    <div class="modal fade" id="table-filter" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 p-1">
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title text-md font-weight-bold" style="color: #252525;">Item Types</p> <br><br>
                    <!--ITEM TYPES-->
                    <div class="row">
                        @foreach ($item_types as $type)
                            <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                                {{-- <x-checkbox-button label="{{ $type->item_type }}" value='{{ $type->id }}' model='filterItemTypes'/> --}}
                                <label class="btn btn-block btn-default border-0" style="background-color:  {{ in_array($type->id, $filterItemTypes) ? 'lightblue' : 'rgb(184, 184, 184)' }} ; color: #252525;">
                                    <input style="display: none;" type="checkbox" value="{{ $type->id }}" wire:model.live.debounce.500ms='filterItemTypes'> <!-- Hidden checkbox input -->
                                    {{ $type->item_type }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <!--RESET-->
                        <div class="form-group col-sm-6">
                            <button class="btn btn-block btn-default border-0" style="background-color: #d9d9f3; color: #0A0863;" wire:click='resetFilter()'> Reset</button>
                        </div>
                        <!--DONE-->
                        <div class="form-group col-sm-6">
                            <button class="btn btn-block btn-default border-0" style="background-color: #0A0863; color: #252525; color:white;" wire:click='applyFilter()'>Done</button>
                        </div>
                    </div>
                </div> <!-- /.card-body -->
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="row mt-2 mr-1">
    <div class="col-12 col-sm-12 pt-2 pr-1 d-flex justify-content-end">
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



<div class="card ml-2 mr-2"><!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-center">
                <thead class="pr-0 text-center" style="color: white; background-color: #7684B9;">
                    <tr>
                        <th>ID</th>
                        <th>Item Type</th>
                        <th>Item Name</th>
                        <th>Claimer's Name</th>
                        <th>Claimed At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($claimed_items as $claimedItem)
                        <tr>
                            <td>{{ $claimedItem->id }}</td>
                            <td>{{ $claimedItem->getType->item_type }}</td>
                            <td>{{ $claimedItem->item_name }}</td>
                            <td>{{ $claimedItem->claimer_name }}</td>
                            <td>{{ date('F d,Y   h:i A', strtotime($claimedItem->claimed_datetime)) }}</td>
                            <td>
                                <p class="btn btn-primary action-btn text-decoration-underline" style="color: #3C58FF;" wire:click="unclaim({{ $claimedItem->id }})">Unclaim</p>
                                <!--VIEW PROFILE-->
                                <button class="btn btn-primary action-btn" data-target="#view-lost-item" data-toggle="modal" title='View' tooltip='enable' wire:click="get_data({{ $claimedItem->id }})">
                                    <i aria-hidden="true" class="fa fa-eye"></i>
                                </button>

                                @if (in_array('EditLostAndFound', $privileges))
                                    <!--EDIT LOST ITEM BUTTON-->
                                    <button class="btn btn-primary action-btn" data-target="#edit-lost-item" data-toggle="modal" wire:click="get_data({{ $claimedItem->id }})">
                                        <i class="fa fa-solid fa-pen"></i>
                                    </button>
                                @endif
                                @if (in_array('DeleteLostAndFound', $privileges))
                                    {{-- DELETE USER --}}
                                    <button class="btn btn-primary action-btn" wire:click='delete({{ $claimedItem->id }})'>
                                        <i aria-hidden="true" class="fa fa-trash"></i>
                                    </button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
