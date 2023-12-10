<div class="modal fade" id="summary-btn" style="max-width: 100%;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header border-0 p-1">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body ml-2" style="max-height: 500px; overflow-y: auto;">
                    <!--MODAL TITLE-->
                    <p class="card-title font-weight-bold text-lg" style="color: #0A0863;">SUMMARY</p> <br><br><br>

                    <div class="d-flex flex-column">
                        <div class="input-group-prepend">
                            <p class="card-title text-sm font-weight-bold mb-2" style="color: #0A0863;">Student Information</p>
                        </div>
                    </div>
                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    <div class="row">
                        <!--NAME-->
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title">Name</p>
                        </div>
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold">Kimwel Beller</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--LRN-->
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title">LRN</p>
                        </div>
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title" style="font-weight: bold;">0215752152025</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--School Level-->
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title">School Level</p>
                        </div>
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title" style="font-weight: bold;">Senior High School</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--Grade Level-->
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title">Grade Level</p>
                        </div>
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold">Grade 11</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--NO OF VIOLATIONS-->
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title">No. of Violations</p>
                        </div>
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold">1</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--NO OF HOME VISITATION FORMS-->
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title">No. of Home Visitation <br> Forms</p>
                        </div>
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold">0</p>
                        </div>
                    </div>
                    <div class="row">
                        <!--NO OF VIOLATIONS-->
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title">No. of Violations Forms</p>
                        </div>
                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                            <p class="card-title font-weight-bold">1</p>
                        </div>
                    </div><br><br>
                    <!---------PIE CHART VIOLATIONS----------->
                    <div class="input-group-prepend">
                        <p class="card-title text-sm font-weight-bold mb-2" style="color: #252525;">Total Offenses</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
                                <!--Violation PieChart-->
                                <div class="tab-content p-0">
                                    <canvas class="mt-2" id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.card-body -->
            </form>
        </div>
    </div>
</div><!-- /.modal-end -->