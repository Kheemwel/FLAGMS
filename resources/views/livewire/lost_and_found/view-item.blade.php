<div class="modal fade" id="view-lost-item" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div wire:loading wire:target='get_data'>
                <div class="overlay bg-white">
                    <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <!--EDIT USER INFORMATION-->
                <button data-dismiss='modal' data-target="#edit-lost-item" data-toggle="modal" style="background-color: transparent; border-color: transparent;" type="button">
                    <i class="fa fa-solid fa-pen"></i>
                </button>

                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click='resetInputs()'>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto; text-align: left;">
                    <!--MODAL TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">LOST ITEM</p> <br><br><br>

                    <!--IMPORTANT USER DETAILS FORM SECTION-->

                    <div class="row">
                        <!--ITEM TYPE-->
                        <div class="form-group col-sm-5" style="color: #252525;">
                            <p style="font-size: 14px;">Item Type</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">{{ $selected_item_type }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--DATE AND TIME FOUND-->
                        <div class="form-group col-sm-5" style="color: #252525;">
                            <p style="font-size: 14px;">Date and Time Found</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">{{ date('F d,Y   h:i A', strtotime($datetime_found)) }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--ITEM NAME-->
                        <div class="form-group col-sm-5" style="color: #252525;">
                            <p style="font-size: 14px;">Item Name</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">{{ $item_name }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--LOCATION FOUND-->
                        <div class="form-group col-sm-5" style="color: #252525;">
                            <p style="font-size: 14px;">Location Found</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">{{ $location_found }}</p>
                        </div>
                    </div>

                    @if ($authorized)
                        <div class="row">
                            <!--FINDER'S NAME-->
                            <div class="form-group col-sm-5" style="color: #252525;">
                                <p style="font-size: 14px;">Finder's Name</p>
                            </div>
                            <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                                <p style="font-weight: bold;">{{ $finder_name }}</p>
                            </div>
                        </div>
                    @endif

                    <!--ITEM DESCRIPTION-->
                    @if ($authorized)
                        <div class="row">
                            <div class="form-group col-sm-5" style="color: #252525;">
                                <p style="font-size: 14px;">Item Description</p>
                            </div>
                            <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                                <p style="font-weight: bold;">
                                    {{ $description ? $description : 'There is no written description for this item.' }}
                                </p>
                            </div>
                        </div>
                    @endif
                    <!-------------------------------------------------------->

                    <!--IMAGE OF THE LOST ITEM-->
                    @if ($authorized)
                        <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                            <label for="input-item-desc" style="font-weight: normal;">Image of the Lost Item</label>
                        </div>
                        <div class="form-group col-sm-12" style="margin-bottom: 3rem; text-align: center;">
                            <img alt="lost item" class="img-responsive" src="{{ $this->viewImage() }}" style="height: 150px; width: 150px;">
                        </div>
                    @endif

                    @if ($is_claimed)
                        <!--CLAIMED DETAILS-->
                        <div class="row">
                            <div class="form-group col-sm-6" style="text-align: left; margin-top: 2rem;">
                                <p style="color: #0A0863; font-size: 22px;">Claimed Details</p>
                            </div>
                        </div>

                        <div class="row">
                            <!--DATE AND TIME CLAIMED-->
                            <div class="form-group col-sm-5" style="color: #252525;">
                                <p style="font-size: 14px;">Date and Time Claimed</p>
                            </div>
                            <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                                <p style="font-weight: bold;">{{ date('F d,Y   h:i A', strtotime($claimed_datetime)) }}</p>
                            </div>
                        </div>

                        @if ($authorized)
                            <div class="row">
                                <!--Claimer'S NAME-->
                                <div class="form-group col-sm-5" style="color: #252525;">
                                    <p style="font-size: 14px;">Claimer's Name</p>
                                </div>
                                <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                                    <p style="font-weight: bold;">{{ $claimer_name }}</p>
                                </div>
                            </div>
                        @endif
                    @endif

                </div> <!-- /.card-body -->
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
