<div class="card" style="margin-left: 2rem; margin-right: 2rem;">
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
        <table class="table text-nowrap" style="text-align: center;">
            <thead style="background-color: #7684B9; color: white;">
                <tr>
                    <th style="border-right: 1px solid #252525;">ID</th>
                    <th style="border-right: 1px solid #252525;">Item Type</th>
                    <th style="border-right: 1px solid #252525;">Item Name</th>
                    <th style="border-right: 1px solid #252525;">Claimer's Name</th>
                    <th style="border-right: 1px solid #252525;">Claimed At</th>
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
                            <p class="btn btn-primary action-btn" style="color: #3C58FF;  text-decoration: underline;" wire:click="unclaim({{ $claimedItem->id }})">Unclaim</p>
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
