@section('head')
    <title>Admin | Dashboard</title>

    <!-- fullCalendar -->
    <link href="adminLTE-3.2/plugins/fullcalendar/main.css" rel="stylesheet">

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
    <div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem; margin-right: 2rem;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="font-weight: bold;">Overview</h1>
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
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate" style="font-size: .9rem;">Total No. of Students</p>
                                            <p class="mb-0" style="font-size: 1.5rem; font-weight: bold;">5,656</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate" style="font-size: .9rem;">No. of Junior High Students</p>
                                            <p class="mb-0" style="font-size: 1.5rem; font-weight: bold;">2,345</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate" style="font-size: .9rem;">No. of Senior High Students</p>
                                            <p class="mb-0" style="font-size: 1.5rem; font-weight: bold;">1,235</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0,0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate" style="font-size: .9rem;">No. of Anecdotal Reports</p>
                                            <p class="mb-0" style="font-size: 1.5rem; font-weight: bold;">2</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate" style="font-size: .9rem;">No. of Violation Reports</p>
                                            <p class="mb-0" style="font-size: 1.5rem; font-weight: bold;">24</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 80px;">
                                        <div class="inner">
                                            <p class="mb-0 text-truncate" style="font-size: .9rem;">No. of Home Visitation Reports</p>
                                            <p class="mb-0" style="font-size: 1.5rem; font-weight: bold;">5</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p style="font-weight: bold; font-size: 26px;">Student Offenses Analysis</p>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-6">
                                    <div class="card" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; height: 280px;">
                                        <!--Violation PieChart-->
                                        <div class="tab-content p-0">
                                            <canvas id="pieChart" style="min-height: 200px; max-height: 230px; max-width: 100%; margin-bottom: 2rem; margin-top: 2rem;"></canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @elseif ($role === 'Teacher')
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; height: 100px;">
                                        <div class="inner">
                                            <p style="margin: 0;">Total Forms Requested</p>

                                            <p style="font-size: 26px; font-weight: bold; margin: 0;">200</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; height: 100px;">
                                        <div class="inner">
                                            <p style="margin: 0;">No. of Home Visitation Form Requested</p>

                                            <p style="font-size: 26px; font-weight: bold; margin: 0;">100</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; height: 100px;">
                                        <div class="inner">
                                            <p style="margin: 0;">No. of Violation Form Requested</p>

                                            <p style="font-size: 26px; font-weight: bold; margin: 0;">300</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; height: 100px;">
                                        <div class="inner">
                                            <p style="margin: 0;">No. of Offenses Written in Anecdotal Records</p>

                                            <p style="font-size: 26px; font-weight: bold; margin: 0;">150</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; height: 100px;">
                                        <div class="inner">
                                            <p style="margin: 0;">No. of Students Receive Anecdotal</p>

                                            <p style="font-size: 26px; font-weight: bold; margin: 0;">200</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p style="font-weight: bold; font-size: 26px;">Comparing Various Offenses Documented Through Anecdotal</p>
                            <div class="row">
                                <div class="col-lg-12 col-6">
                                    <div class="card" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; ">
                                        <!--Violation PieChart-->
                                        <div class="tab-content p-0">
                                            <canvas id="pieChart" style="min-height: 250px; height: 400px; max-height: 400px; max-width: 100%; margin-bottom: 2rem; margin-top: 2rem;"></canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @elseif ($role === 'Student')
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; height: 100px;">
                                        <div class="inner">
                                            <p style="margin: 0;">Total Forms Signed</p>

                                            <p style="font-size: 26px; font-weight: bold; margin: 0;">2</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; height: 100px;">
                                        <div class="inner">
                                            <p style="margin: 0;">No. of Home Visitation Forms</p>

                                            <p style="font-size: 26px; font-weight: bold; margin: 0;">1</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; height: 100px;">
                                        <div class="inner">
                                            <p style="margin: 0;">No. of Violation</p>

                                            <p style="font-size: 26px; font-weight: bold; margin: 0;">3</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p style="font-weight: bold; font-size: 26px;">Graph Showing Various Offenses You Have Committed</p>
                            <div class="row">
                                <div class="col-lg-12 col-6">
                                    <div class="card" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; ">
                                        <!--Violation PieChart-->
                                        <div class="tab-content p-0">
                                            <canvas id="pieChart" style="min-height: 250px; height: 400px; max-height: 400px; max-width: 100%; margin-bottom: 2rem; margin-top: 2rem;"></canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @elseif ($role === 'Parent')
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; height: 100px;">
                                        <div class="inner">
                                            <p style="margin: 0;">Number of Home Visitation Form</p>

                                            <p style="font-size: 26px; font-weight: bold; margin: 0;">2</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <p style="font-weight: bold; font-size: 26px;">Charts Showing the Different Violations Committed by your Children</p>
                            <div class="row">
                                <div class="col-lg-12 col-6">
                                    <div class="card" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; ">
                                        <!--Violation PieChart-->
                                        <div class="tab-content p-0">
                                            <canvas id="pieChart" style="min-height: 250px; height: 400px; max-height: 400px; max-width: 100%; margin-bottom: 2rem; margin-top: 2rem;"></canvas>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @elseif ($role === 'Principal')
                        <div class="col-lg-7">
                            <div class="row">
                                <div class="col-lg-4 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; height: 100px;">
                                        <div class="inner">
                                            <p style="margin: 0;">Number of Offenses Written in Anecdotal</p>

                                            <p style="font-size: 26px; font-weight: bold; margin: 0;">2</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <p style="font-weight: bold; font-size: 26px;">Fill Out Requests</p>
                                </div>
                                <div class="col-lg-4 text-right">
                                    <a class="btn btn-default" href="{{ route('fill-out-forms-page') }}" style="color: white; background-color: #080743; font-size: 12px; width: 100px;"> View All</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-6">
                                    <div class="card" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; ">
                                        <!--Fill Out Request Overview-->
                                        <div class="tab-content p-0">
                                            <table cellpadding="20px" cellspacing="10px" style="width: 100%;">
                                                <tr>
                                                    <td rowspan="2" style="width: 5%;">
                                                        <img alt="user profile" src="images/user-req.png" style="align-self: center; width: 60px; height: 60px;">
                                                    </td>
                                                    <td style="vertical-align: top;" style="width: 50%;">
                                                        <label style="font-size: 16px; line-height: 10%;">Liam Anderson</label> <br>
                                                        <label style="font-size: 14px;">Tuesday, June 20 at 9:00AM</label>
                                                    </td>
                                                    <td style="vertical-align: top; width: 35%;"><label style="font-size: 20px; margin-top: 1rem;">Violation Form</label></td>
                                                    <td style="vertical-align: top;" style="width: 20%;">
                                                        <label style="font-size: 14px; margin-top: 1rem; color: #FF0000; background-color: #FFC7C7; border-radius: 10px; float: left; padding: 5px;">INCOMPLETE</label>
                                                    </td>
                                                </tr>
                                            </table>

                                            <table cellpadding="20px" cellspacing="10px" style="width: 100%;">
                                                <tr>
                                                    <td rowspan="2" style="width: 5%;">
                                                        <img alt="user profile" src="images/user-req.png" style="align-self: center; width: 60px; height: 60px;">
                                                    </td>
                                                    <td style="vertical-align: top;" style="width: 50%;">
                                                        <label style="font-size: 16px; line-height: 10%;">Liam Anderson</label> <br>
                                                        <label style="font-size: 14px;">Tuesday, June 20 at 9:00AM</label>
                                                    </td>
                                                    <td style="vertical-align: top; width: 35%;"><label style="font-size: 20px; margin-top: 1rem;">Home Visitation Form</label></td>
                                                    <td style="vertical-align: top;" style="width: 20%;">
                                                        <label style="font-size: 14px; margin-top: 1rem; color: #3C58FF; background-color: #D1D8FF; border-radius: 10px; float: left; padding: 5px;">COMPLETED</label>
                                                    </td>
                                                </tr>
                                            </table>

                                            <table cellpadding="20px" cellspacing="10px" style="width: 100%;">
                                                <tr>
                                                    <td rowspan="2" style="width: 5%;">
                                                        <img alt="user profile" src="images/user-req.png" style="align-self: center; width: 60px; height: 60px;">
                                                    </td>
                                                    <td style="vertical-align: top;" style="width: 50%;">
                                                        <label style="font-size: 16px; line-height: 10%;">Liam Anderson</label> <br>
                                                        <label style="font-size: 14px;">Tuesday, June 20 at 9:00AM</label>
                                                    </td>
                                                    <td style="vertical-align: top; width: 35%;"><label style="font-size: 20px; margin-top: 1rem;">Violation Form</label></td>
                                                    <td style="vertical-align: top;" style="width: 20%;">
                                                        <label style="font-size: 14px; margin-top: 1rem; color: #006400; background-color: #BFFFBF; border-radius: 10px; float: left; padding: 5px;">PENDING</label>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endif


                    <div class="col-lg-5">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-6" style="height: 230px; overflow: auto; margin-bottom: 2rem;">
                                <!-- CALENDAR -->
                                <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; padding: 2px; margin-left: 2rem;">
                                    <div id="calendar" style="width: auto; font-size: 10px; padding-left: 1rem; padding-right: 1rem; padding-bottom: 1rem;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="height: 270px; overflow-y: auto; margin-bottom: 1rem;">
                                <!-- UPCOMING EVENTS -->
                                <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); border-radius: 10px; padding: 5px; margin-left: 2rem;">
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-9" style="padding: 1rem;">
                                            <p class="upcoming-event" style="font-size: 20px; font-weight: bold; color: #252525; float: left;">
                                                Upcoming Events</p>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-3" style="padding: 1rem;">
                                            <a class="see-all-link" href="{{ route('guidance-program-page') }}" style="font-size: 14px; color: #252525; float: right;">See All</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 d-flex flex-column justify-content-center" style="padding: 1rem;">
                                            <p style="font-size: 14px; font-weight: bold; color: #006400; text-align: center;">
                                                <i class="fa fa-solid fa-circle"></i>
                                            </p>
                                        </div>
                                        <div class="col-8 d-flex flex-column justify-content-center" style="padding: 1rem;">
                                            <div class="row">
                                                <p style="font-size: 18px; color: #252525; float: left;"> Guidance
                                                    Career Program</p>
                                            </div>
                                            <div class="row">
                                                <p style="font-size: 14px; color: #252525; float: left;"> 10:00AM -
                                                    12:30PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 d-flex flex-column justify-content-center" style="padding: 1rem;">
                                            <p style="font-size: 14px; font-weight: bold; color: #3C58FF; text-align: center;">
                                                <i class="fa fa-solid fa-circle"></i>
                                            </p>
                                        </div>
                                        <div class="col-8 d-flex flex-column justify-content-center" style="padding: 1rem;">
                                            <div class="row">
                                                <p style="font-size: 18px; color: #252525; float: right;"> Mental
                                                    Health Awareness Program</p>
                                            </div>
                                            <div class="row">
                                                <p style="font-size: 14px; color: #252525; float: right;"> 10:00AM
                                                    - 12:30PM</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 d-flex flex-column justify-content-center" style="padding: 1rem;">
                                            <p style="font-size: 14px; font-weight: bold; color: #6256AC; text-align: center;">
                                                <i class="fa fa-solid fa-circle"></i>
                                            </p>
                                        </div>
                                        <div class="col-8 d-flex flex-column justify-content-center" style="padding: 1rem;">
                                            <div class="row">
                                                <p style="font-size: 18px; color: #252525; float: right;"> Academic
                                                    Advising Session</p>
                                            </div>
                                            <div class="row">
                                                <p style="font-size: 14px; color: #252525; float: right;"> 10:00AM
                                                    - 12:30PM</p>
                                            </div>
                                        </div>
                                    </div>
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

            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;

            var containerEl = document.getElementById('external-events');
            var checkbox = document.getElementById('drop-remove');
            var calendarEl = document.getElementById('calendar');

            var calendar = new Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                themeSystem: 'bootstrap',
            });

            calendar.render();
            // $('#calendar').fullCalendar()


        })
    </script>
@endsection
