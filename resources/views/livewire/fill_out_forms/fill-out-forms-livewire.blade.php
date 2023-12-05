@section('head')
    <title>FLAGMS | Forms</title>

    <style>
        /* For Eye Icons of Home Visitation and Summary Section inside the table */
        .btn-primary.action-btn {
            background-color: transparent;
            border-color: transparent;
        }

        .btn-primary.action-btn i {
            color: #252525;
        }

        /* Hover styles */
        .btn-primary.action-btn:hover {
            background-color: transparent;
        }

        .btn-primary.action-btn:hover i {
            color: #0A0863;
        }

        /********************************/

        /* Widen the Home Visitation modal */
        .Home Visitation-dialog {
            max-width: 90%;
        }

        .Home Visitation-modal {
            margin-left: auto;
            margin-right: auto;
        }

        /* Widens the add signature modal */
        .as-dialog {
            max-width: 65%;
        }

        .as-modal {
            margin-left: auto;
            margin-right: auto;
        }

        /* CLEAR BUTTON */
        .clear-button {
            background-color: #ffffff;
            border-color: #080743;
            color: #080743;
        }

        /* Hover effect */
        .clear-button:hover {
            background-color: #1f1b8e;
            border-color: #1f1b8e;
            color: #ffffff;
        }

        /* Clicked effect */
        .clear-button:active {
            background-color: #060554;
            border-color: #060554;
            color: #ffffff;
        }
    </style>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Fill Out Forms</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                <!--SEARCH FEATURE-->
                <div class="input-group input-group-sm" style="max-width: 20%;">
                    <!--SEARCH INPUT-->
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text">
                    <div class="input-group-append">
                        <button class="btn btn-default" data-target="#table-filter" data-toggle="modal" style="height: 35px;" type="submit">
                            <i aria-hidden="true" class="fa fa-filter"></i>
                        </button>
                    </div>
                    <!-- /.modal end-->
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="align-content: center; margin-left: 1rem; margin-right: 1rem;">
        @foreach ($forms as $form)
            @if ($form->violationForm)
                @php
                    if ($role == 'Student') {
                        $violationForms = $form->violationForm
                            ->violationFormStudents()
                            ->where('student_id', $studentID)
                            ->get();
                    } elseif ($role == 'Parent') {
                        $violationForms = $form->violationForm
                            ->violationFormStudents()
                            ->whereIn('student_id', $myChildIDs)
                            ->get();
                    } else {
                        $violationForms = $form->violationForm->violationFormStudents;
                    }
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
                                            <label style="font-size: 18px; line-height: 5%;">{{ $form->teacherName() }}</label> <br>
                                            <label style="font-size: 14px;">{{ $form->created_at->format('F d,Y   h:i A') }}</label>
                                        </td>
                                        <td style="vertical-align: top;" style="width: 20%;">
                                            <label style="font-size: 24px; margin-top: 1rem; color: red; float: left; ">{{ $form->status }}</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: top; width: 70%;">
                                            <label style="font-size: 28px; margin-top: 1rem;">{{ $form->formType() }}</label>
                                            <p>ID: VF#{{ $form->violationForm->id }}-{{ $violationFormStudent->id }}</p>
                                        </td>
                                        <td style="vertical-align: bottom; width: 20%;">
                                            <!--READ BUTTON-->
                                            <button class="btn btn-default" data-target="#read-violation-form" data-toggle="modal" style="color: white; background-color: #080743; font-size: 14px; width: 80px; margin-right: 1rem;" wire:click="getViolationForm({{ $form->violationForm->id }}, {{ $violationFormStudent->id }})">Read</button>
                                            <!--FILL OUT BUTTON-->
                                            <button class="btn btn-default" data-target="#fill-violation-form" data-toggle="modal" style="color: white; background-color: #080743; font-size: 14px; width: 80px;" wire:click="getViolationForm({{ $form->violationForm->id }}, {{ $violationFormStudent->id }})">Fill Out</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            @elseif ($form->homeVisitationForm)
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
                                        <label style="font-size: 18px; line-height: 5%;">{{ $form->teacherName() }}</label> <br>
                                        <label style="font-size: 14px;">{{ $form->created_at->format('F d,Y   h:i A') }}</label>
                                    </td>
                                    <td style="vertical-align: top;" style="width: 20%;">
                                        <label style="font-size: 24px; margin-top: 1rem; color: red; float: left; ">{{ $form->status }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 70%;">
                                        <label style="font-size: 28px; margin-top: 1rem;">{{ $form->formType() }}</label>
                                        <p>ID: HF#{{ $form->homeVisitationForm->id }}</p>
                                    </td>
                                    <td style="vertical-align: bottom; width: 20%;">
                                        <!--READ BUTTON-->
                                        <button class="btn btn-default" data-target="#read-home-visitation-form" data-toggle="modal" style="color: white; background-color: #080743; font-size: 14px; width: 80px; margin-right: 1rem;" wire:click="getHomeVisitationForm({{ $form->id }})">Read</button>
                                        <!--FILL OUT BUTTON-->
                                        <button class="btn btn-default" data-target="#fill-home-visitation-form" data-toggle="modal" style="color: white; background-color: #080743; font-size: 14px; width: 80px;" wire:click="getHomeVisitationForm({{ $form->id }})">Fill Out</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach


        {{-- <div class="col-lg-12">
            <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; display: flex; flex-direction: row; margin-left: 5px; margin-right: 5px;">
                <table cellpadding="20px" cellspacing="10px" style="width: 100%;">
                    <tr>
                        <td rowspan="2" style="width: 10%;">
                            <img alt="user profile" src="images/user-req.png" style="align-self: center;">
                        </td>
                        <td style="vertical-align: top;" style="width: 70%;">
                            <label style="font-size: 18px; line-height: 5%;">Liam Anderson</label> <br>
                            <label style="font-size: 14px;">Tuesday, June 20 at 9:00AM</label>
                        </td>
                        <td style="vertical-align: top;" style="width: 20%;">
                            <label style="font-size: 24px; margin-top: 1rem; color: #3C58FF; float: left; ">COMPLETE</label>
                        </td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top; width: 70%;"><label style="font-size: 28px; margin-top: 1rem;">Home Visitation Form</label></td>
                        <td style=" vertical-align: bottom; width: 20%;">
                            <!--READ BUTTON-->
                            <button class="btn btn-default" data-target="#read-home-visitation-form" data-toggle="modal" style="color: white; background-color: #080743; font-size: 14px; width: 80px; margin-right: 1rem;">Read</button>
                            <!--FILL OUT BUTTON-->
                            <button class="btn btn-default" data-target="#fill-home-visitation-form" data-toggle="modal" style="color: white; background-color: #080743; font-size: 14px; width: 80px;">Fill Out</button>
                        </td>
                    </tr>
                </table>
            </div>
        </div> --}}
    </div>

    @include('livewire.fill_out_forms.filter')
    @include('livewire.fill_out_forms.read-violation-form')
    @include('livewire.fill_out_forms.fill-violation-form')
    @include('livewire.fill_out_forms.read-home-visitation-form')
    @include('livewire.fill_out_forms.fill-home-visitation-form')
</div>
