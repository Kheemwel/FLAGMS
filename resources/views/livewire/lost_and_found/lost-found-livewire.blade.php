<div>
    <div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                        <h1 style="font-weight: bold;">Lost and Found</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="row">
            <div class="col-12">
                <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                    <!--SEARCH FEATURE-->
                    <div class="input-group input-group-sm" style="max-width: 30%;">
                        <!--SEARCH INPUT-->
                        <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text">
                        <div class="input-group-append">
                            <button class="btn btn-default" data-target="#table-filter" data-toggle="modal" style="height: 35px;" type="submit">
                                <i aria-hidden="true" class="fa fa-filter"></i>
                            </button>
                            <!--TABLE FILTER MODAL-->
                            <div class="modal fade" id="table-filter">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="border: transparent; padding: 10px;">
                                            <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                                                <!--MODAL FORM TITLE-->
                                                <p class="card-title" style="color: #252525; font-size: 16px; font-weight: bold;">Item Type</p> <br><br>
                                                <!--ITEM TYPES-->
                                                <div class="row">
                                                    <div class="form-group col-sm-6" style="font-size: 10px; color: #252525; font-weight: bold;">
                                                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;">Wallets and purses</button>
                                                    </div>
                                                    <div class="form-group col-sm-6" style="font-size: 10px; color: #252525; font-weight: bold;">
                                                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Jewelry and watches</button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6" style="font-size: 10px; color: #252525;">
                                                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Keys</button>
                                                    </div>
                                                    <div class="form-group col-sm-6" style="font-size: 10px; color: #252525;">
                                                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Books and notebooks</button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6" style="font-size: 10px; color: #252525;">
                                                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Eyewear</button>
                                                    </div>
                                                    <div class="form-group col-sm-6" style="font-size: 10px; color: #252525;">
                                                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Miscellaneous items</button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6" style="font-size: 10px; color: #252525;">
                                                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Bags and luggage</button>
                                                    </div>
                                                    <div class="form-group col-sm-6" style="font-size: 10px; color: #252525;">
                                                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Toys and stuffed animals</button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6" style="font-size: 10px; color: #252525;">
                                                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Clothing and Accessories</button>
                                                    </div>
                                                    <div class="form-group col-sm-6" style="font-size: 10px; color: #252525;">
                                                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Electronic devices</button>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <!--RESET-->
                                                    <div class="form-group col-sm-6">
                                                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #d9d9f3; color: #0A0863;"> Reset</button>
                                                    </div>
                                                    <!--DONE-->
                                                    <div class="form-group col-sm-6">
                                                        <button class="btn btn-block btn-default" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white;">Done</button>
                                                    </div>
                                                </div>
                                            </div> <!-- /.card-body -->
                                        </form>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal end-->

                        <!--UPLOAD BUTTON-->
                        <button class="btn btn-default" data-target="#add-lost-item" data-toggle="modal" style="max-width: 7rem; height: 35px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;" type="button"><i class="fa fa-solid fa-plus"></i> Add Lost Item</button>
                        <!-- /.modal end-->
                    </div>
                </div>
            </div>
        </div>

        <!--HOME VISITATION TABLE SECTION-->
        <div class="card" style="margin-left: 2rem; margin-right: 2rem;">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
                <table class="table text-nowrap" style="text-align: center;">
                    <thead style="background-color: #7684B9; color: white;">
                        <tr>
                            <th style="border-right: 1px solid #252525;">ID</th>
                            <th style="border-right: 1px solid #252525;">Item Type</th>
                            <th style="border-right: 1px solid #252525;">Item Name</th>
                            <th style="border-right: 1px solid #252525;">Time Found</th>
                            <th style="border-right: 1px solid #252525;">Date Found</th>
                            <th style="border-right: 1px solid #252525;">Location Found</th>
                            <th style="border-right: 1px solid #252525;">Finder's Name</th>
                            <th style="border-right: 1px solid #252525;">Owner's Name</th>
                            <th style="border-right: 1px solid #252525;">Claimed Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Electronic Devices</td>
                            <td>Airpods</td>
                            <td>4:00 PM</td>
                            <td>6/10/23</td>
                            <td>Canteen</td>
                            <td>Del Medina</td>
                            <td>Cris Santos</td>
                            <td>6/15/23</td>
                            <td>
                                <!--EDIT LOST ITEM BUTTON-->
                                <a class="btn btn-primary action-btn" data-target="#edit-lost-item" data-toggle="modal" href="#">
                                    <i class="fa fa-solid fa-pen"></i>
                                </a>
                                <!--VIEW LOST ITEM DETAILS BUTTON-->
                                <a class="btn btn-primary action-btn" data-target="#view-lost-item" data-toggle="modal" href="#">
                                    <i aria-hidden="true" class="fa fa-eye"></i>
                                </a>
                            </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    @include('livewire.lost_and_found.add-item')
    @include('livewire.lost_and_found.edit-item')
    @include('livewire.lost_and_found.view-item')
</div>
