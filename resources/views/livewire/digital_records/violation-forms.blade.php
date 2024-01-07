<div class="row" style="align-content: center; margin-left: 1rem; margin-right: 1rem;">
    @foreach ($violation_forms as $form)
        @if ($form->violationForm)
            @php
                $violationForms = $form->violationForm->violationFormStudents;
            @endphp
            @foreach ($violationForms as $violationFormStudent)
                <div class="col-12">
                    <!--REQUEST LIST-->
                    <div class="col-lg-12">
                        <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; display: flex; flex-direction: row;">
                            <table cellpadding="20px" cellspacing="10px" style="width: 100%;">
                                <tr>
                                    <td rowspan="2" style="width: 10%;">
                                        <img alt="user profile" src="images/user-req.png" style="align-self: center;">
                                    </td>
                                    <td style="vertical-align: top;" style="width: 70%;">
                                        <label style="font-size: 18px; line-height: 5%;">{{ $form->teacher_name }}</label> <br>
                                        <label style="font-size: 14px;">{{ $form->created_at->format('F d,Y   h:i A') }}</label>
                                    </td>
                                    <td style="vertical-align: top;" style="width: 20%;">
                                        <label style="font-size: 24px; margin-top: 1rem; color: #006400; float: left; ">{{ $form->status }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 70%;">
                                        <label style="font-size: 28px; margin-top: 1rem;">{{ $form->form_type }}</label>
                                        <p>ID: VF#{{ $form->violationForm->id }}-{{ $violationFormStudent->id }}</p>
                                    </td>
                                    <td style="vertical-align: bottom; width: 20%;">
                                        <!--READ BUTTON-->
                                        <button class="btn btn-default" data-target="#read-violation-form" data-toggle="modal" style="color: white; background-color: #080743; font-size: 14px; width: 80px;" wire:click="getViolationForm({{ $form->violationForm->id }}, {{ $violationFormStudent->id }})">Read</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    @endforeach
</div>