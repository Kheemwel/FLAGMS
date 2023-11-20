@section('head')
    <title>Admin | Students</title>
    <!-- Select2 CSS -->
    <link href="adminLTE-3.2/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="adminLTE-3.2/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet">

    <style>
        /* For Eye Icons of Anecdotal and Summary Section inside the table */
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

        /* Widen the anecdotal modal */
        .anecdotal-dialog {
            max-width: 90%;
        }

        .anecdotal-modal {
            margin-left: auto;
            margin-right: auto;
        }

        /* Widens the add signature modal */
        .as-dialog {
            max-width: 50%;
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

@section('head-scripts')
    {{-- Select2 JS --}}
    <script src="adminLTE-3.2/plugins/select2/js/select2.full.min.js"></script>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Students</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 3rem;">
                <!--SEARCH FEATURE-->
                <div class="input-group input-group-sm" style="max-width: 20%;">
                    <!--SEARCH INPUT-->
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text">
                    <div class="input-group-append">
                        <button class="btn btn-default" data-target="#table-filter" data-toggle="modal" type="submit">
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
                                            <p class="card-title" style="color: #252525; font-size: 16px;">School Level</p> <br><br>
                                            <!--IMPORTANT USER DETAILS FORM SECTION-->
                                            <div class="row">
                                                <!--Junior High-->
                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                    <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Junior High School</button>
                                                </div>
                                                <!--Senior High-->
                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                    <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Senior High School</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p style="margin-left: 5px;">Grade Level</p>
                                            </div>
                                            <div class="row">
                                                <!--Grade 7-->
                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                    <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 7</button>
                                                </div>
                                                <!--Grade 8-->
                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                    <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 8</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!--Grade 9-->
                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                    <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 9</button>
                                                </div>
                                                <!--Grade 10-->
                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                    <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 10</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <!--Grade 11-->
                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                    <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 11</button>
                                                </div>
                                                <!--Grade 12-->
                                                <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                                    <button class="btn btn-block btn-default" style="border-color: transparent; background-color: rgb(184, 184, 184); color: #252525;"> Grade 12</button>
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
                </div>
            </div>

            <!--PROFILING TABLE SECTION-->
            <div class="card" style="margin-left: 2rem; margin-right: 3rem; border-radius: 10px;">
                <div class="card-body table-responsive p-0"style="border: 1px solid #252525; border-radius: 10px;">
                    <!-- /.card-header -->
                    <table class="table table-hover" style="text-align: center;">
                        <thead style="background-color: #7684B9; color: white;">
                            <tr>
                                <th
                                    x-on:click="selectAll = !selectAll; Object.keys(rows).forEach(function(key) {rows[key] = selectAll;})">
                                    <input type="checkbox" x-model="selectAll">
                                </th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>School Level</th>
                                <th>Grade Level</th>
                                @if (in_array('ViewStudentsAnecdotal', $privileges) || in_array('WriteStudentsAnecdotal', $privileges))
                                    <th>Anecdotal</th>
                                @endif
                                @if (in_array('ViewStudentSummary', $privileges))
                                    <th>Summary</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td></td>
                                    <th scope="row">{{ $student->id }}</th>
                                    <td>{{ $student->getUserAccount->name }}</td>
                                    <td>{{ $student->schoolLevel->school_level }}</td>
                                    <td>Grade {{ $student->gradeLevel->grade_level }}</td>
                                    @if (in_array('ViewStudentsAnecdotal', $privileges) || in_array('WriteStudentsAnecdotal', $privileges))
                                        <td>
                                            <button class="btn btn-primary action-btn" data-target="#anecdotal-btn" data-toggle="modal" wire:click='getData({{ $student->id }})'>
                                                <i aria-hidden="true" class="fa fa-eye"></i>
                                            </button>
                                        </td>
                                    @endif

                                    @if (in_array('ViewStudentSummary', $privileges))
                                        <td>
                                            <button class="btn btn-primary action-btn" data-target="#summary-btn" data-toggle="modal">
                                                <i aria-hidden="true" class="fa fa-eye"></i>
                                            </button>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('livewire.users.students.anecdotal-window')
    @include('livewire.users.students.summary-window')
    @include('livewire.users.students.edit-student')
    @include('livewire.users.students.add-signature')
</div> <!-- /.card-body -->

@section('scripts')
    <script>
        $(document).ready(function() {
            const today = new Date();
            const lastYear = new Date(new Date().getFullYear(), 0, 2);
            const dateInput = $('#datePicker');
            dateInput.attr('min', lastYear.toISOString().split('T')[0]); // Set the min to Junuary of this year
            dateInput.attr('max', today.toISOString().split('T')[0]); // Set the max attribute to today's date
            dateInput.attr('wire:ignore.self', '');
        });


        $(function() {
            $('#single-select-optgroup-clear-field').select2({
                theme: "bootstrap4",
                placeholder: $(this).data('placeholder'),
                allowClear: true,
            });

            $('#single-select-optgroup-clear-field').on('change', function(e) {
                let data = new Array($(this).val());
                Livewire.dispatch('setInputOffense', data);
            });

            Livewire.on('clearSelection', () => {
                $('#single-select-optgroup-clear-field').val(null).change();
            });
        });

        $(function() {
            var donutData = {
                labels: [
                    'Verbal Offense',
                    'Physical Offense',
                    'Social Media Offense'
                ],
                datasets: [{
                    data: [800, 500, 200],
                    backgroundColor: ['#0A0863', '#7684B9', '#F5C91A'],
                }]
            }
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
            var pieData = donutData;
            var pieOptions = {
                maintainAspectRatio: false,
                responsive: true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            new Chart(pieChartCanvas, {
                type: 'pie',
                data: pieData,
                options: pieOptions
            })
        })
    </script>
@endsection
