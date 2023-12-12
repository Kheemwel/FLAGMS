<div class="modal fade" id="summary-btn" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div wire:loading wire:target='viewSummary'>
                <div class="overlay bg-white" style="border-radius: 20px;">
                    <div>
                        <i class="fas fa-3x fa-sync-alt fa-spin"></i>
                    </div>
                </div>
            </div>
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body" style="margin-left: 1rem; max-height: 500px; overflow-y: auto;">
                    <!--MODAL TITLE-->
                    <p class="card-title" style="color: #0A0863; font-weight: bold; font-size: 22px;">SUMMARY</p> <br><br><br>

                    <div style="display: flex; flex-direction: column;">
                        <div class="input-group-prepend">
                            <p class="card-title" style="font-size: 18px; color: #0A0863; font-weight: bold; margin-bottom: 1rem;">Student Information</p>
                        </div>
                    </div>
                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                    @if ($summary)
                        <div class="row">
                            <!--NAME-->
                            <div class="form-group col-sm-6" style="font-size: 12px; color: #252525;">
                                <p class="card-title">Name</p>
                            </div>
                            <div class="form-group col-sm-6" style="font-size: 12px; color: #252525;">
                                <p class="card-title" style="font-weight: bold;">{{ $summary['name'] }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <!--LRN-->
                            <div class="form-group col-sm-6" style="font-size: 12px; color: #252525;">
                                <p class="card-title">LRN</p>
                            </div>
                            <div class="form-group col-sm-6" style="font-size: 12px; color: #252525;">
                                <p class="card-title" style="font-weight: bold;">{{ $summary['lrn'] }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <!--School Level-->
                            <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                <p class="card-title">School Level</p>
                            </div>
                            <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                <p class="card-title" style="font-weight: bold;">{{ $summary['school_level'] }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <!--Grade Level-->
                            <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                <p class="card-title">Grade Level</p>
                            </div>
                            <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                <p class="card-title" style="font-weight: bold;">{{ $summary['grade_level'] }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <!--NO OF VIOLATIONS-->
                            <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                <p class="card-title">No. of Violations</p>
                            </div>
                            <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                <p class="card-title" style="font-weight: bold;">1</p>
                            </div>
                        </div>
                        <div class="row">
                            <!--NO OF HOME VISITATION FORMS-->
                            <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                <p class="card-title">No. of Home Visitation <br> Forms</p>
                            </div>
                            <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                <p class="card-title" style="font-weight: bold;">0</p>
                            </div>
                        </div>
                        <div class="row">
                            <!--NO OF VIOLATIONS-->
                            <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                <p class="card-title">No. of Violations Forms</p>
                            </div>
                            <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                <p class="card-title" style="font-weight: bold;">1</p>
                            </div>
                        </div><br><br>
                        <!---------PIE CHART VIOLATIONS----------->
                        <div class="input-group-prepend">
                            <p class="card-title" style="font-size: 18px; color: #252525; font-weight: bold; margin-bottom: 1rem;">Total Offenses</p>
                        </div>
                        <div class="row" x-init="initChart()">
                            <div class="col-sm-12">
                                <div class="card" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); margin-right: 1rem;">
                                    <!--Violation PieChart-->
                                    <div class="tab-content p-0">
                                        <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;margin-top: 1rem;"></canvas>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div> <!-- /.card-body -->
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
