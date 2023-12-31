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
    <!-- Select2 CSS -->
    <link href="adminLTE-3.2/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="adminLTE-3.2/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet">
@endsection

@section('head-scripts')
    {{-- Select2 JS --}}
    <script src="adminLTE-3.2/plugins/select2/js/select2.full.min.js"></script>
    <script src="js/jQuery.print.min.js"></script>
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
                        @if (in_array('CreateForms', $privileges))
                            <button class="btn btn-block btn-default" data-target="#create-form" data-toggle="modal" style="border-color: transparent; background-color: #0A0863; color: #252525; color:white; margin-left: 2rem;">Create Form</button>
                        @endif
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
                                            <label style="font-size: 18px; line-height: 5%;">{{ $form->teacher_name }}</label> <br>
                                            <label style="font-size: 14px;">{{ $form->created_at->format('F d,Y   h:i A') }}</label>
                                        </td>
                                        <td style="vertical-align: top;" style="width: 20%;">
                                            <label style="font-size: 24px; margin-top: 1rem; color: red; float: left; ">{{ $form->status }}</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: top; width: 70%;">
                                            <label style="font-size: 28px; margin-top: 1rem;">{{ $form->form_type }}</label>
                                            <p>ID: VF#{{ $form->violationForm->id }}-{{ $violationFormStudent->id }}</p>
                                        </td>
                                        <td style="vertical-align: bottom; width: 20%;">
                                            <!--READ BUTTON-->
                                            <button class="btn btn-default" data-target="#read-violation-form" data-toggle="modal" style="color: white; background-color: #080743; font-size: 14px; width: 80px; margin-right: 1rem;" wire:click="getViolationForm({{ $form->violationForm->id }}, {{ $violationFormStudent->id }})">Read</button>
                                            @if (($role == 'Guidance') | ($role == 'Student'))
                                                <!--FILL OUT BUTTON-->
                                                <button class="btn btn-default" data-target="#fill-violation-form" data-toggle="modal" style="color: white; background-color: #080743; font-size: 14px; width: 80px;" wire:click="getViolationForm({{ $form->violationForm->id }}, {{ $violationFormStudent->id }})">Fill Out</button>
                                            @endif
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
                                        <label style="font-size: 18px; line-height: 5%;">{{ $form->teacher_name }}</label> <br>
                                        <label style="font-size: 14px;">{{ $form->created_at->format('F d,Y   h:i A') }}</label>
                                    </td>
                                    <td style="vertical-align: top;" style="width: 20%;">
                                        <label style="font-size: 24px; margin-top: 1rem; color: red; float: left; ">{{ $form->status }}</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: top; width: 70%;">
                                        <label style="font-size: 28px; margin-top: 1rem;">{{ $form->form_type }}</label>
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
    </div>

    @include('livewire.fill_out_forms.filter')
    @include('livewire.fill_out_forms.read-violation-form')
    @include('livewire.fill_out_forms.fill-violation-form')
    @include('livewire.fill_out_forms.read-home-visitation-form')
    @include('livewire.fill_out_forms.fill-home-visitation-form')
    @include('livewire.fill_out_forms.add-signature')
    @include('livewire.fill_out_forms.create-form')
    @include('livewire.fill_out_forms.submit-home-visitation-form')
    @include('livewire.fill_out_forms.submit-violation-form')
</div>

@section('scripts')
    <script>
        let studentsInvolve = [];
        let selectedStudent = null;
        let selectedTeacher = null;

        function initMultiSelect() {
            $('#multiple-select-optgroup-clear-field').select2({
                theme: "bootstrap4",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: true,
            });

            $('.single-select2').select2({
                theme: "bootstrap4",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: true,
            });

            $('#multiple-select-optgroup-clear-field').on('change', function(e) {
                studentsInvolve = $(this).val();
            });

            $('#student-select').on('change', function(e) {
                selectedStudent = $(this).val();
            });

            $('.teacher-select').on('change', function(e) {
                selectedTeacher = $(this).val();
            });
        }

        Livewire.on('clearSelections', () => {
            $('#multiple-select-optgroup-clear-field').val(null).trigger('change');
            $('#student-select').val(null).trigger('change');
            $('.teacher-select').val(null).trigger('change');
        })
    </script>
    <script>
        function printHomeVisitationForm() {
            $('#home-visitation-form-content').print();
        }

        function printViolationForm() {
            $('#violation-form-content').print();
        }
    </script>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('signaturePad', () => ({
                drawing: false,
                context: null,

                startDrawing(event) {
                    event.preventDefault();
                    this.drawing = true;
                    this.context = this.$refs.canvas.getContext("2d");
                    this.context.lineWidth = 2;
                    this.context.lineCap = "round";

                    const {
                        offsetX,
                        offsetY
                    } = this.getCoordinates(event);
                    this.context.beginPath();
                    this.context.moveTo(offsetX, offsetY);
                },

                draw(event) {
                    if (!this.drawing) return;
                    event.preventDefault();

                    const {
                        offsetX,
                        offsetY
                    } = this.getCoordinates(event);
                    this.context.lineTo(offsetX, offsetY);
                    this.context.stroke();
                },

                stopDrawing() {
                    this.drawing = false;
                },

                clearSignature() {
                    this.context.clearRect(
                        0,
                        0,
                        this.$refs.canvas.width,
                        this.$refs.canvas.height
                    );
                },

                saveSignature() {
                    const dataUrl = this.$refs.canvas.toDataURL("image/png");
                },

                getContent() {
                    return this.$refs.canvas.toDataURL("image/png");
                },

                getCoordinates(event) {
                    const rect = this.$refs.canvas.getBoundingClientRect();
                    let offsetX, offsetY;

                    if (event.touches && event.touches.length > 0) {
                        // Touch event
                        offsetX = (event.touches[0].clientX - rect.left) * (this.$refs.canvas.width / rect.width);
                        offsetY = (event.touches[0].clientY - rect.top) * (this.$refs.canvas.height / rect.height);
                    } else {
                        // Mouse event
                        offsetX = (event.clientX - rect.left) * (this.$refs.canvas.width / rect.width);
                        offsetY = (event.clientY - rect.top) * (this.$refs.canvas.height / rect.height);
                    }

                    return {
                        offsetX,
                        offsetY
                    };
                },
            }));
        });
    </script>
@endsection
