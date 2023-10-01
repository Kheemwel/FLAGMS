<div class="modal fade" id="add-event" style="max-width: 100%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <!--EVENT INFORMATION-->
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form>
                <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; max-height: 560px; overflow-y: auto;">
                    <!--MODAL TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">ADD EVENT</p> <br><br><br>

                    <!--Date-->
                    <div class="row">
                        <div class="col-12">
                            <label style="text-align: left; color: #252525;">Date</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input class="form-control" name="event_date" style="height: 35px; margin-bottom: 1rem;" type="date">
                        </div>
                    </div>

                    <!--Time-->
                    <div class="row">
                        <div class="col-12">
                            <label style="text-align: left; color: #252525;">Time</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <input class="form-control" name="time_start" placeholder="time start" style="height: 35px; margin-bottom: 1rem;" type="text">
                        </div>
                        <div class="col-6">
                            <input class="form-control" name="time_end" placeholder="time end" style="height: 35px; margin-bottom: 1rem;" type="text">
                        </div>
                    </div>

                    <!--Title-->
                    <div class="row">
                        <div class="col-12">
                            <label style="text-align: left; color: #252525;">Title</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input class="form-control" name="event_title" style="height: 35px; margin-bottom: 1rem;" type="text">
                        </div>
                    </div>

                    <!--Description-->
                    <div class="row">
                        <div class="col-12">
                            <label style="text-align: left; color: #252525;">Description</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <textarea class="form-control" name="event_description" style="height: 100px; margin-bottom: 1rem; resize: none;"></textarea>
                        </div>
                    </div>

                    <!--Select Color-->
                    <div class="row">
                        <div class="col-12">
                            <label style="text-align: left; color: #252525;">Select Color</label>
                        </div>
                    </div>

                    <div class="row" style="margin-bottom: 2rem;">
                        <div class="col-1">
                            <i class="fa fa-solid fa-circle" style="color: #6256AC;"></i>
                        </div>
                        <div class="col-1">
                            <i class="fa fa-solid fa-circle" style="color: #05ADC7;"></i>
                        </div>
                        <div class="col-1">
                            <i class="fa fa-solid fa-circle" style="color: #FA4481;"></i>
                        </div>
                        <div class="col-1">
                            <i class="fa fa-solid fa-circle" style="color: #3C58FF;"></i>
                        </div>
                        <div class="col-1">
                            <i class="fa fa-solid fa-circle" style="color: #FC993E;"></i>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button class="btn btn-default" data-target="#add-event" data-toggle="modal" style="width: 400px; margin-left: 10px; background-color: #0A0863; color: white; font-size: 16px;">
                                Add Event
                            </button>
                        </div>
                    </div>

                </div> <!-- /.card-body -->
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal-end -->
