<div class="card" style="margin-left: 2rem; margin-right: 2rem;">
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
        <table class="table text-nowrap" style="text-align: center;">
            <thead style="background-color: #7684B9; color: white;">
                <tr>
                    <th style="border-right: 1px solid #252525;">ID</th>
                    <th style="border-right: 1px solid #252525;">Item Type</th>
                    <th style="border-right: 1px solid #252525;">Item Name</th>
                    <th style="border-right: 1px solid #252525;">Priority</th>
                    <th style="border-right: 1px solid #252525;">Expiration Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($expired_items as $expiredItem)
                    <tr>
                        <td>{{ $expiredItem->id }}</td>
                        <td>{{ $expiredItem->getType->item_type }}</td>
                        <td>{{ $expiredItem->item_name }}</td>
                        <td>{{ $expiredItem->getPriority->priority_tag }}</td>
                        <td>{{ date('F d,Y   h:i A', strtotime($expiredItem->expiration_date)) }}</td>
                        <td>
                            <!--VIEW PROFILE-->
                            <button class="btn btn-primary action-btn" data-target="#view-lost-item" data-toggle="modal" title='View' tooltip='enable' wire:click="get_data({{ $expiredItem->id }})">
                                <i aria-hidden="true" class="fa fa-eye"></i>
                            </button>

                            @if ($authorized)
                                <!--EDIT LOST ITEM BUTTON-->
                                <button class="btn btn-primary action-btn" data-target="#edit-lost-item" data-toggle="modal" wire:click="get_data({{ $expiredItem->id }})">
                                    <i class="fa fa-solid fa-pen"></i>
                                </button>

                                {{-- DELETE USER --}}
                                <button class="btn btn-primary action-btn" wire:click='delete({{ $expiredItem->id }})'>
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
