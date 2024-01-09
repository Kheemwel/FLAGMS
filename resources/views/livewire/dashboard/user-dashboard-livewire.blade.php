@section('head')
    <title>FLAGMS | Dashboard</title>

    <!-- fullCalendar -->
    <link href="adminLTE-3.2/plugins/fullcalendar/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@400;700&display=swap">

    <style>
        /*FOR CALENDAR*/
        .fc-header-toolbar {
            font-size: 12px;
            font-weight: bold;
        }

        .fc-header-toolbar.fc-toolbar.fc-toolbar-ltr button {
            font-size: 12px;
            font-weight: bold;
            background-color: transparent;
            border-color: transparent;
            color: #252525;
        }
    </style>
@endsection()

<div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pl-1 pr-1" style="background-color:  rgb(253, 253, 253);">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <p class="text-xl font-weight-bold">Overview</p>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    @if (!in_array($role, ['Teacher', 'Parent', 'Student', 'Principal']))
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">Total No. of Students</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">{{ $numJuniorHigh + $numSeniorHigh }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">No. of Junior High Students</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">{{ $numJuniorHigh }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">No. of Senior High Students</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">{{ $numSeniorHigh }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0,0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">No. of Anecdotal Reports</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">{{ $numAnecdotalReports }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">No. of Violation Reports</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">{{ $numViolationReports }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">No. of Home Visitation Reports</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">{{ $numHomeVisitationReports }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="font-weight-bold text-lg">Student Offenses Analysis</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                                        <div class="card" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 295px;">
                                            <!-- Violation PieChart -->
                                            <div class="tab-content p-0">
                                                <canvas class="mt-4 mb-4" id="pieChart" style="min-height: 230px; max-height: 250px; max-width: 100%;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @elseif ($role === 'Teacher')
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">Total Forms Requested</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">350</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">No. of Home Visitation Forms Requested</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">245</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">No. of Violation Forms Requested</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">200</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">Total No. of Offenses Written in Anecdotal Records</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">100</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">No. of Students Receive Anecdotal</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">90</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="font-weight-bold text-lg">Comparing Various Offenses Documented Through Anecdotal</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                                        <div class="card" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 295px;">
                                            <!-- Violation PieChart -->
                                            <div class="tab-content p-0">
                                                <canvas class="mt-4 mb-4" id="pieChart" style="min-height: 230px; max-height: 250px; max-width: 100%;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif ($role === 'Student')
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">Total Forms Signed</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">2</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">No. of Home Visitation Forms</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">2</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate text-sm">No. of Violation</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="font-weight-bold text-lg">Graph Showing Various Offenses You Have Committed</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                                        <div class="card" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 395px;">
                                            <!-- Violation PieChart -->
                                            <div class="tab-content p-0">
                                                <canvas class="mt-4 mb-4" id="pieChart" style="min-height: 280px; max-height: 310px; max-width: 100%;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @elseif ($role === 'Parent')
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner text-center">
                                            <p class="mb-0 text-sm">No. of Home Visitation Form</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">5</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-lg font-weight-bold">Charts Showing the Different Violations Committed by your Children</p>

                            <div class="row">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <div class="card" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 395px;">
                                                <!-- Violation PieChart -->
                                                <div class="tab-content p-0">
                                                    <canvas class="mt-4 mb-4" id="pieChart" style="min-height: 270px; max-height: 310px; max-width: 100%;"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @elseif ($role === 'Principal')
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner text-center">
                                            <p class="mb-0 text-sm">No. of Offenses Written in Anecdotal</p>
                                            <p class="mb-0 font-weight-bold" style="font-size: 1.5rem;">5</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <p class="text-lg font-weight-bold">Fill Out Requests</p>
                                    </div>
                                    <div class="col-lg-4 d-flex flex-row justify-content-end align-self-center mb-2">
                                        <a class="btn btn-default text-sm" href="{{ route('fill-out-forms-page') }}" style="color: white; background-color: #080743; min-width: 100px;"> View All</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card p-2" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; ">
                                            <!-- Fill Out Request Overview -->
                                            <div class="tab-content p-0">
                                                <div class="row">
                                                    <div class="col-md-3  d-flex flex-row justify-content-center align-self-center">
                                                        <div class="text-center">
                                                            <img alt="user profile" class="img-fluid" src="images/user-req.png" style="max-width: 80px;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div>
                                                            <div class="d-flex flex-row justify-content-center align-self-center">
                                                                <label class="text-md">Liam Anderson</label>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-center align-self-center">
                                                            <label class="text-sm">Tuesday, June 20 at 9:00AM</label>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-center align-self-center">
                                                            <label class="text-lg mt-2">Violation Form</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 d-flex flex-row justify-content-end align-self-center pr-4">
                                                        <label class="text-sm mt-2 p-1 text-center" style="color: #FF0000; background-color: #FFC7C7; width: 100px; border-radius: 10px; float: left;">INCOMPLETE</label>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-md-3  d-flex flex-row justify-content-center align-self-center">
                                                        <div class="text-center">
                                                            <img alt="user profile" class="img-fluid" src="images/user-req.png" style="max-width: 80px;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div>
                                                            <div class="d-flex flex-row justify-content-center align-self-center">
                                                                <label class="text-md">Liam Anderson</label>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-center align-self-center">
                                                            <label class="text-sm">Tuesday, June 20 at 9:00AM</label>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-center align-self-center">
                                                            <label class="text-lg mt-2">Home Visitation Form</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 d-flex flex-row justify-content-end align-self-center pr-4">
                                                        <label class="text-sm mt-2 p-1 text-center" style="color: #3C58FF; background-color: #D1D8FF; width: 100px; border-radius: 10px; float: left;">COMPLETED</label>
                                                    </div>
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-md-3  d-flex flex-row justify-content-center align-self-center">
                                                        <div class="text-center">
                                                            <img alt="user profile" class="img-fluid" src="images/user-req.png" style="max-width: 80px;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div>
                                                            <div class="d-flex flex-row justify-content-center align-self-center">
                                                                <label class="text-md">Liam Anderson</label>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-center align-self-center">
                                                            <label class="text-sm">Tuesday, June 20 at 9:00AM</label>
                                                        </div>
                                                        <div class="d-flex flex-row justify-content-center align-self-center">
                                                            <label class="text-lg mt-2">Violation Form</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 d-flex flex-row justify-content-end align-self-center pr-4">
                                                        <label class="text-sm mt-2 p-1 text-center" style="color: #006400; background-color: #BFFFBF; width: 100px; border-radius: 10px; float: left;">PENDING</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div class="col-lg-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 mb-0 pb-0 pl-0 pr-0">
                                    <div class="card" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px;">
                                        <!-- CALENDAR -->
                                        <div class="card-body p-2" style="height: 250px; overflow: auto; margin-bottom: 2rem;">
                                            <div class="text-sm pl-3 pr-3 pb-2" id="calendar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-2 mt-1" style="max-height: 350px; overflow-y: auto;">
                                <!-- UPCOMING EVENTS -->
                                <div class="small-box bg-info p-2" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px;">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-9 pl-4">
                                            <p class="upcoming-event text-md text-lg font-weight-bold text-left" style="color: #252525;">Upcoming Events</p>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-3">
                                            <a class="see-all-link text-sm" href="{{ route('guidance-program-page') }}" style="color: #252525; float: right;">See All</a>
                                        </div>
                                    </div>
                                    @foreach ($upcomingEvents as $events)
                                        
                                    <div class="row">
                                        <div class="col-3 d-flex align-items-center justify-content-center">
                                            <div class="p-2">
                                                <p class="text-sm text-center font-weight-bold" style="color: {{ $events->color() }};">
                                                    <i class="fa fa-solid fa-circle"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col d-flex flex-column justify-content-center">
                                            <div class="p-2">
                                                <div class="row">
                                                    <p class="h6 mb-0 text-truncate" style="color: #252525;">{{ $events->title }}</p>
                                                </div>
                                                <div class="row">
                                                    <p class="text-muted mb-0 small">{{ date('F d,Y   h:i A', strtotime($events->program_start)) . " to " . date('F d,Y   h:i A', strtotime($events->program_end)) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    <!-- /.content -->
    <!-- /.content-wrapper -->
</div>

@section('scripts')
    <!-- jQuery UI -->
    <script src="adminLTE-3.2/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- fullCalendar 2.2.5 -->
    <script src="adminLTE-3.2/plugins/moment/moment.min.js"></script>
    <script src="adminLTE-3.2/plugins/fullcalendar/main.js"></script>

    <!-- overlayScrollbars -->
    <script src="adminLTE-3.2/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- ChartJS -->
    <script src="adminLTE-3.2/plugins/chart.js/Chart.min.js"></script>

    <!----------------------------------------------------->

    <script>
        let offenses = [];
        let offensesData = [];

        Livewire.on('offensesData', (data) => {

            // Convert the object to an array of entries
            const entries = Object.entries(data[0]);

            // Sort the entries by count in descending order
            entries.sort((a, b) => b[1] - a[1]);

            // Extract the top 3 items (key-value pairs)
            const top5 = entries.slice(0, 5);

            // Extract the top 3 keys (fruit names)
            offenses = top5.map(([key, value]) => key);
            offensesData = top5.map(([key, value]) => value);
        });

        $(function() {
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

            var Calendar = FullCalendar.Calendar;

            var calendarEl = document.getElementById('calendar');

            try {
                if (calendarEl) {
                    var calendar = new Calendar(calendarEl, {
                        headerToolbar: {
                            left: 'prev today',
                            center: 'title',
                            right: 'customMonthButton next'
                        },
                        themeSystem: 'bootstrap',
                        height: 'auto', // Let FullCalendar manage the height,
                        customButtons: {
                            customMonthButton: {
                                text: ' ', // Empty string as text
                                click: function() {
                                    calendar.changeView('dayGridMonth');
                                }
                            }
                        }
                    });

                    // Optionally, make the calendar container responsive
                    var container = document.querySelector('.card-body');
                    container.classList.add('d-flex', 'flex-column', 'align-items-stretch'); // Apply Bootstrap flex classes

                    // Hide the custom month button using CSS
                    var style = document.createElement('style');
                    style.innerHTML = '.fc-customMonthButton-button { display: none; } .fc-next-button { margin-left: auto; }';
                    document.head.appendChild(style);

                    calendar.render();
                } else {
                    console.error("Element #calendar not found!");
                }
            } catch (error) {
                console.error("Error creating calendar:", error);
            }
        })
    </script>
@endsection
