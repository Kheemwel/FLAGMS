<div class="modal fade" id="add-lost-item">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL FORM TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">ADD LOST ITEM</p> <br><br><br>

                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <!--------------------USER'S INFORMATION------------------------>
                    <!--ROLE-->
                    <div class="row" style="text-align: left;">
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="input-SL" style="font-weight: normal;">Item Type</label>
                            <div class="input-group-prepend">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="input-SL" style="background-color: transparent; color:#252525; font-size: 14px;" type="button">
                                    Item Type
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Wallets and purses</a>
                                    <a class="dropdown-item" href="#">Jewelry and watches</a>
                                    <a class="dropdown-item" href="#">Keys</a>
                                    <a class="dropdown-item" href="#">Books and notebooks</a>
                                    <a class="dropdown-item" href="#">Eyewear</a>
                                    <a class="dropdown-item" href="#">Miscellaneous items</a>
                                    <a class="dropdown-item" href="#">Bags and luggage</a>
                                    <a class="dropdown-item" href="#">Toys and stuffed animals</a>
                                    <a class="dropdown-item" href="#">Clothing and Accessories</a>
                                    <a class="dropdown-item" href="#">Electronic devices</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="text-align: left;">
                        <!--DATE FOUND-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="input-date-found" style="font-weight: normal;">Date</label>
                            <input class="form-control" id="input-date-found" style="border: 1px solid black" type="date">
                        </div>
                        <!--TIME FOUND-->
                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                            <label for="input-time-found" style="font-weight: normal;">Last Name</label>
                            <input class="form-control" id="input-time-found" style="border: 1px solid black" type="time">
                        </div>
                    </div>
                    <!--ITEM NAME-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                        <label for="input-item-name" style="font-weight: normal;">Item Name</label>
                        <input class="form-control" id="input-item-name" style="border: 1px solid #252525" type="text">
                    </div>

                    <!--LOCATION FOUND-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left;">
                        <label for="input-loc-found" style="font-weight: normal;">Location Found</label>
                        <input class="form-control" id="input-loc-found" style="border: 1px solid #252525" type="text">
                    </div>

                    <!--FINDER'S NAME-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                        <label for="input-finder-name" style="font-weight: normal;">Finder's Name</label>
                        <input class="form-control" id="input-finder-name" style="border: 1px solid #252525" type="text">
                    </div>

                    <!--ITEM DESCRIPTION-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                        <label for="input-item-desc" style="font-weight: normal;">Item Description</label>
                        <input class="form-control" id="input-item-desc" style="border: 1px solid #252525; height: 100px;" type="text">
                    </div>

                    <!--IMAGE OF THE LOST ITEM-->
                    <div class="form-group col-sm-13" style="font-size: 14px; color: #252525; text-align: left; padding-left: 0;">
                        <label for="input-item-desc" style="font-weight: normal;">Image of the Lost Item</label>

                        <div class="form-group col-sm-12" style="border: 1px dashed gray; padding-top: 3rem; padding-bottom: 5rem; display: flex; flex-direction: column; align-items: center;">
                            <div>
                                <label style="color: gray; font-size: 14px; font-weight: 300; text-align: center;">Drag an image here <br> or </label>
                            </div>
                            <div>
                                <button class="btn btn-block btn-primary" style=" width: 8rem; font-size: 12px; background-color: #0A0863; border: transparent;" type="button">Upload Image</button>
                            </div>
                        </div>
                    </div>
                    <!------------------------------------------------------------------------------>
                </div> <!-- /.card-body -->
                <div class="card-footer">
                    <button class="btn btn-primary" style="width: 450px; margin-left: 5px; background-color: #0A0863; color: white; font-size: 14px;" type="submit">Save</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
