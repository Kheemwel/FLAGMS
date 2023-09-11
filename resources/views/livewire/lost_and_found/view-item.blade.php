<div class="modal fade" id="view-lost-item" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <!--EDIT USER INFORMATION-->
                <button data-target="#edit-lost-item" data-toggle="modal" style="background-color: transparent; border-color: transparent;" type="button">
                    <i class="fa fa-solid fa-pen"></i>
                </button>

                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
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
                            <p style="font-weight: bold;">Electronic Devices</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--DATE-->
                        <div class="form-group col-sm-5" style="color: #252525;">
                            <p style="font-size: 14px;">Date</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">6/10/23</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--TIME-->
                        <div class="form-group col-sm-5" style=" color: #252525;">
                            <p style="font-size: 14px;">Time</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">4:00 PM</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--ITEM NAME-->
                        <div class="form-group col-sm-5" style="color: #252525;">
                            <p style="font-size: 14px;">Item Name</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">Airpods</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--LOCATION FOUND-->
                        <div class="form-group col-sm-5" style="color: #252525;">
                            <p style="font-size: 14px;">Location Found</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">Canteen</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--FINDER'S NAME-->
                        <div class="form-group col-sm-5" style="color: #252525;">
                            <p style="font-size: 14px;">Finder's Name</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">Del Medina</p>
                        </div>
                    </div>

                    <!--ITEM DESCRIPTION-->
                    <div class="row">
                        <div class="form-group col-sm-5" style="color: #252525;">
                            <p style="font-size: 14px;">Item Description</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-12" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>
                    <!-------------------------------------------------------->

                    <!--IMAGE OF THE LOST ITEM-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                        <label for="input-item-desc" style="font-weight: normal;">Image of the Lost Item</label>
                    </div>
                    <div class="form-group col-sm-13 col-md-6" style="padding-left: 0;">
                        <div class="input-group">
                            <img alt="lost item" class="img-responsive" src="images/sample item.png" style="max-height: 215px; width: auto;">
                        </div>
                    </div>

                    <!--CLAIMED DETAILS-->
                    <div class="row">
                        <div class="form-group col-sm-6" style="text-align: left; margin-top: 2rem;">
                            <p style="color: #0A0863; font-size: 22px;">Claimed Details</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--DATE CLAIMED-->
                        <div class="form-group col-sm-5" style="color: #252525;">
                            <p style="font-size: 14px;">Date</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">6/15/23</p>
                        </div>
                    </div>

                    <div class="row">
                        <!--OWNER'S NAME-->
                        <div class="form-group col-sm-5" style="color: #252525;">
                            <p style="font-size: 14px;">Owner's Name</p>
                        </div>
                        <div class="form-group col-sm-4" style="font-size: 16px; color: #252525;">
                            <p style="font-weight: bold;">Del Medina</p>
                        </div>
                    </div>

                </div> <!-- /.card-body -->
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
