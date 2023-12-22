@section('head')
    <title>FLAGMS | Students</title>
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

<div class="content-wrapper pl-1 pr-1" style="background-color:  rgb(253, 253, 253);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 pl-5 pt-3">
                    <p class="text-xl font-weight-bold">Students</p>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="col-12 col-sm-4 mb-2 pl-5 pr-5">
        <div class="input-group mb-5">
            <input class="form-control" name="table_search" placeholder="Search" style="height: 40px;" type="text" wire:model.live.debounce.500ms='search'>
            <div class="input-group-append">
                <button class="btn btn-default" data-target="#table-filter" data-toggle="modal" type="submit">
                    <i aria-hidden="true" class="fa fa-filter"></i>
                </button>

                <!--TABLE FILTER MODAL-->
                <div class="modal fade" id="table-filter">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header border-0 p-2">
                                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form>
                                <div class="modal-body" style="max-height: 500px; overflow-y: auto;">
                                    <!--MODAL FORM TITLE-->
                                    <p class="card-title text-sm" style="color: #252525;">School Level</p> <br><br>
                                    <!--IMPORTANT USER DETAILS FORM SECTION-->
                                    <div class="row">
                                        <!--Junior High-->
                                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                                            <button class="btn btn-block btn-default border-0" style="background-color: rgb(184, 184, 184); color: #252525;"> Junior High School</button>
                                        </div>
                                        <!--Senior High-->
                                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                                            <button class="btn btn-block btn-default border-0" style="background-color: rgb(184, 184, 184); color: #252525;"> Senior High School</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <p class="ml-2"> Grade Level</p>
                                    </div>
                                    <div class="row">
                                        <!--Grade 7-->
                                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                                            <button class="btn btn-block btn-default border-0" style="background-color: rgb(184, 184, 184); color: #252525;"> Grade 7</button>
                                        </div>
                                        <!--Grade 8-->
                                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                                            <button class="btn btn-block btn-default border-0" style="background-color: rgb(184, 184, 184); color: #252525;"> Grade 8</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!--Grade 9-->
                                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                                            <button class="btn btn-block btn-default border-0" style="background-color: rgb(184, 184, 184); color: #252525;"> Grade 9</button>
                                        </div>
                                        <!--Grade 10-->
                                        <div class="form-group col-sm-6" style="font-size: 14px; color: #252525;">
                                            <button class="btn btn-block btn-default border-0" style="background-color: rgb(184, 184, 184); color: #252525;"> Grade 10</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!--Grade 11-->
                                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                                            <button class="btn btn-block btn-default border-0" style="background-color: rgb(184, 184, 184); color: #252525;"> Grade 11</button>
                                        </div>
                                        <!--Grade 12-->
                                        <div class="form-group col-sm-6 text-sm" style="color: #252525;">
                                            <button class="btn btn-block btn-default border-0" style="background-color: rgb(184, 184, 184); color: #252525;"> Grade 12</button>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!--RESET-->
                                        <div class="form-group col-sm-6">
                                            <button class="btn btn-block btn-default border-0" style="background-color: #d9d9f3; color: #0A0863;"> Reset</button>
                                        </div>
                                        <!--DONE-->
                                        <div class="form-group col-sm-6">
                                            <button class="btn btn-block btn-default border-0" style="background-color: #0A0863; color: #252525; color:white;">Done</button>
                                        </div>
                                    </div>
                                </div> <!-- /.card-body -->
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal end-->
            </div>
        </div>
    </div>

    <div class="row mt-2 mr-1">
        <div class="col-12 col-sm-12 pt-2 pr-5 d-flex justify-content-end">
            <label class="font-weight-normal text-sm" for="per-page">Show
                <select class="form-select form-select-sm" id='per-page' wire:model.live.debounce.500ms="per_page">
                    <option>10</option>
                    <option>15</option>
                    <option>20</option>
                    <option>25</option>
                    <option selected>30</option>
                    <option>50</option>
                    <option>100</option>
                </select>
                Entries
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card ml-5 mr-5" style="border-radius: 10px;">
                <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
                    <!-- /.card-header -->
                    <table class="table table-hover text-center">
                        <thead style="background-color: #7684B9; color: white;">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>School Level</th>
                                <th>Grade Level</th>
                                @if (in_array('ViewStudentsAnecdotal', $privileges) || in_array('WriteStudentsAnecdotal', $privileges))
                                    <th>Anecdotal</th>
                                @endif
                                @if (in_array('ViewStudentsInventory', $privileges))
                                    <th>Individual Inventory</th>
                                @endif
                                @if (in_array('ViewStudentSummary', $privileges))
                                    <th>Summary</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
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
                                    @if (in_array('ViewStudentsInventory', $privileges))
                                        <td>
                                            <button class="btn btn-primary action-btn" data-target="#student-inventory" data-toggle="modal" wire:click='getData({{ $student->id }})'>
                                                <i aria-hidden="true" class="fa fa-eye"></i>
                                            </button>
                                        </td>
                                    @endif
                                    @if (in_array('ViewStudentSummary', $privileges))
                                        <td>
                                            <button class="btn btn-primary action-btn" data-target="#summary-btn" data-toggle="modal" wire:click='getData({{ $student->id }})'>
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
        @include('livewire.students.summary-window')
        @include('livewire.students.anecdotal-window')
        @include('livewire.students.student-inventory')
    </div>
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


        function initSelect2() {
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
        }


        Livewire.on('summary', (data) => {

            // Convert the object to an array of entries
            const entries = Object.entries(data[0]);

            // Sort the entries by count in descending order
            entries.sort((a, b) => b[1] - a[1]);

            // Extract the top 3 items (key-value pairs)
            const top5 = entries.slice(0, 5);

            // Extract the top 3 keys (fruit names)
            let offenses = top5.map(([key, value]) => key);
            let offensesData = top5.map(([key, value]) => value);
            setTimeout(() => {
                initChart(offenses, offensesData);
            }, );
        });



        function initChart(offenses, offensesData) {
            var donutData = {
                // labels: [
                //     'Verbal Offense',
                //     'Physical Offense',
                //     'Social Media Offense'
                // ],
                labels: offenses,
                datasets: [{
                    // data: [800, 500, 200],
                    data: offensesData,
                    backgroundColor: ['#3C58FF', '#6256AC', '#05ADC7', '#FA4481', '#FC993E'],
                }]
            }
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChart = $('#pieChart');
            try {
                if (pieChart.length) {
                    var pieChartCanvas = pieChart.get(0).getContext('2d');
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
                } else {
                    console.error("Element #pieChart not found!");
                }
            } catch (error) {
                console.error("Error creating pie chart:", error);
            }

        }
    </script>
@endsection
