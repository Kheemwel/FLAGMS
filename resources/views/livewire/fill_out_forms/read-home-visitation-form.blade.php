<!--READ HOME VISITATION REQUEST MODAL-->
<div class="modal as-modal fade" id="read-home-visitation-form" style="max-width: 100%;" wire:ignore.self>
    <div class="modal-dialog as-dialog modal-xl">
        <div class="modal-content" x-on:click.outside="$wire.resetFields()">
            <div class="modal-header" style="border: transparent; padding: 10px;">
                <button aria-label="Close" class="close" data-dismiss="modal" type="button" wire:click="resetFields()">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                @if ($homeVisitationForm)
                    <div class="modal-body" style="margin-left: 1rem; margin-right: 1rem; max-height: 500px; overflow-y: auto; text-align: left;">
                        <!--MODAL TITLE-->
                        <div class="row">
                            <div class="col-1 float-right">
                                <img height="50px" src="images/fiat.png" width="50px">
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <p style="font-size: 20px; color: #252525; line-height: 0%;"> Fiat Lux Academe Cavite</p>
                                </div>
                                <div class="row">
                                    <p style="font-size: 18px; color: #252525;">"Let there be light."</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 justify-content-center" style="text-align: center; margin-top: 2rem; margin-bottom: 3rem;">
                            <p style="font-size: 22px; color: #252525; line-height: 0%; font-weight: bold;"> HOME VISITATION FORM</p>
                        </div>

                        <!--IMPORTANT USER DETAILS FORM SECTION-->
                        <div class="row">
                            <!--Name of Stud-->
                            <div class="form-group col-sm-2" style="color: #252525;">
                                <p style="font-size: 18px;">Name of Student:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['student_last_name'] }}</p>
                                <p style="font-size: 14px;">Surname</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['student_first_name'] }}</p>
                                <p style="font-size: 14px;">First Name</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">Cruz</p>
                                <p style="font-size: 14px;">Middle Name</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-2" style="color: #252525;">
                                <p style="font-size: 18px;">Student No.:</p>
                            </div>
                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">025495211</p>
                            </div>
                            <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">LRN:</p>
                            </div>
                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['lrn'] }}</p>
                            </div>
                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">Level & Section:</p>
                            </div>
                            <div class="form-group col-sm-2" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">Grade 11 Mars</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-2" style="color: #252525;">
                                <p style="font-size: 18px;">Home Address:</p>
                            </div>
                            <div class="form-group col-sm-6" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">B100 L2 P4 Mabuhat City, Paliparan 3 Dasmarinas, Cavite</p>
                            </div>
                            <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">Birthdate:</p>
                            </div>
                            <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">12/06/23</p>
                            </div>
                            <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">Age:</p>
                            </div>
                            <div class="form-group col-sm-1" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">22</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-3" style=" color: #252525;">
                                <p style="font-size: 18px;">Name of Father:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">Benjamin Dela Cruz</p>
                            </div>
                            <div class="form-group col-sm-3" style=" color: #252525;">
                                <p style="font-size: 18px;">Contact No.:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">09895589869</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-3" style=" color: #252525;">
                                <p style="font-size: 18px;">Name of Mother:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">Amelia Dela Cruz</p>
                            </div>
                            <div class="form-group col-sm-3" style=" color: #252525;">
                                <p style="font-size: 18px;">Contact No.:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">09895589869</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-3" style=" color: #252525;">
                                <p style="font-size: 18px;">Name of Guardian:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;"></p>
                            </div>
                            <div class="form-group col-sm-3" style=" color: #252525;">
                                <p style="font-size: 18px;">Contact No.:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">N/A</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-3" style=" color: #252525;">
                                <p style="font-size: 18px;">Date of Visitation:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">7/04/23</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-3" style=" color: #252525;">
                                <p style="font-size: 18px;">Place:</p>
                            </div>
                            <div class="form-group col-sm-3" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['place'] }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-3" style=" color: #252525;">
                                <p style="font-size: 18px;">Reason for Home Visitation:</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;  border: 1px solid black; width: 100%; height: 150px;">
                                <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['reason'] }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-3" style=" color: #252525;">
                                <p style="font-size: 18px;">Remarks / Agreement:</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-12" style="font-size: 16px; color: #252525; text-align: justify;  border: 1px solid black; width: 100%; height: 150px;">
                                <p style="font-size: 18px; text-decoration: underline;">{{ $homeVisitationFormFields['remark'] }}</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 5rem;">
                                <p style="font-size: 18px; text-decoration: overline;">Parent Signature Over Printed Name</p>
                            </div>
                            <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 5rem;">
                                <p style="font-size: 18px; text-decoration: overline;">Student Signature Over Printed Name</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-5" style=" color: #252525;">
                                <p style="font-size: 18px;">Prepared By:</p>
                            </div>
                            <div class="form-group col-sm-5" style="font-size: 16px; color: #252525;">
                                <p style="font-size: 18px; text-decoration: underline;">Approved By:</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-5" style=" color: #252525; text-align: center; margin-top: 3rem;">
                                <p style="font-size: 18px; text-decoration: overline;">{{ $homeVisitationFormFields['adviser'] }}</p>
                                <p style="font-size: 16px;">Adviser</p>
                            </div>
                            <div class="form-group col-sm-7" style=" color: #252525; text-align: center; margin-top: 3rem;">
                                <p style="font-size: 18px; text-decoration: overline;">SHERYL FERRERAS-FAX, MAEd </p>
                                <p style="font-size: 16px;">Junior High School Principal</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-5" style=" color: #252525;">
                                <p style="font-size: 18px;">Noted By:</p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 3rem;">
                                <p style="font-size: 18px; text-decoration: overline;">SHERYL FERRERAS-FAX, MAEd</p>
                                <p style="font-size: 16px;">Junior High School Principal</p>
                            </div>
                            <div class="form-group col-sm-6" style=" color: #252525; text-align: center; margin-top: 3rem;">
                                <p style="font-size: 18px; text-decoration: overline;">ROSAHLE S. PAGADORA, MS
                                    Senior High School Principal</p>
                                <p style="font-size: 16px;">Senior High School Principal</p>
                            </div>
                        </div>
                    </div> <!-- /.card-body -->
                @endif
            </form>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
