@section('head')
    <title>Admin | Guidance Program</title>
@endsection

@section('head-scripts')
    <!-- fullCalendar -->
    <link href="adminLTE-3.2/plugins/fullcalendar/main.css" rel="stylesheet">

    <style>
        /*CALENDAR HEADER*/
        .fc-header-toolbar.fc-toolbar.fc-toolbar-ltr button {
            background-color: transparent;
            border-color: transparent;
            color: #252525;
        }
    </style>


    <!-- fullCalendar 2.2.5 -->
    <script src="adminLTE-3.2/plugins/moment/moment.min.js"></script>
    <script src="adminLTE-3.2/plugins/fullcalendar/main.js"></script>
@endsection


<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem; margin-right: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Guidance Program</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div style="display: flex; flex-direction: column;">
                        <!--ROLE DROPDOWN BUTTON-->
                        <div class="input-group" style="justify-content: flex-end;">
                            <div class="dropdown" style="margin-bottom: 1rem;">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="background-color: white; color:#252525; font-size: 18px;" type="button">
                                    Week
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Day</a>
                                    <a class="dropdown-item" href="#">Week</a>
                                    <a class="dropdown-item" href="#">Month</a>
                                    <a class="dropdown-item" href="#">Agenda</a>
                                </div>
                            </div>
                            <button class="btn btn-default" data-target="#add-event" data-toggle="modal" style="width: 100px; height: 40px; margin-left: 10px; background-color: #0A0863; color: white; font-size: 14px;">
                                <i class="fa fa-solid fa-plus"></i> Add Event
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <!-- THE CALENDAR -->
                            <div id="calendar"></div>
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section> <!-- /.content -->

    @include('livewire.guidance_program.add-event')
</div><!-- /.content-wrapper -->

@section('scripts')
    <script>
        $(function() {
            //- CALENDAR -
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
