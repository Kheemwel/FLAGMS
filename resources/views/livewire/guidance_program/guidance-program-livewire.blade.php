@section('head')
    <title>Admin | Guidance Program</title>

    <style>
        /* Hide the default radio button */
        input[type="radio"].color-radio {
            display: none;
        }

        /* Customize the radio button container */
        label.color-radio-input {
            display: flex;
            width: 20px;
            height: 20px;
            border: 2px solid #ccc;
            /* Set default border color */
            border-radius: 50%;
            position: relative;
            cursor: pointer;
        }

        /* Style the checked state */
        label.color-radio-input input.color-radio:checked+.color-radio-checkmark::before {
            content: '\2713';
            /* Checkmark character */
            font-size: 14px;
            color: #fff;
            /* Set the color of the checkmark */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Change the fill color based on accent color */
        label.color-radio-input input.color-radio:checked+.color-radio-checkmark {
            background-color: #your-accent-color;
            /* Change this to your desired accent color */
            border-color: #your-accent-color;
            /* Change this to your desired accent color */
        }
    </style>
    <!-- Select2 CSS -->
    <link href="adminLTE-3.2/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="adminLTE-3.2/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" rel="stylesheet">
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
    {{-- Select2 JS --}}
    <script src="adminLTE-3.2/plugins/select2/js/select2.full.min.js"></script>
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
    <!-- Example usage with different colors -->
    <!-- Main content -->
    <section class="content" x-data='{ showCalendar : true}'>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div style="display: flex; flex-direction: column;">
                        <div class="input-group d-flex justify-content-end">
                            <!--ROLE DROPDOWN BUTTON-->
                            <div class="dropdown" style="margin-bottom: 1rem;">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="background-color: white; color: #252525; font-size: 12px;" type="button">
                                    Agenda
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" x-on:click='showCalendar=true'>Day</a>
                                    <a class="dropdown-item" href="#" x-on:click='showCalendar=true'>Week</a>
                                    <a class="dropdown-item" href="#" x-on:click='showCalendar=true'>Month</a>
                                    <a class="dropdown-item" href="#" x-on:click='showCalendar=false'>Agenda</a>
                                </div>
                            </div>

                            <!--ADD BUTTON-->
                            @if (in_array('AddGuidanceProgram', $privileges))
                                <button class="btn btn-default" data-target="#add-event" id="btn-AddEvent" data-toggle="modal" style="width: 100px; height: 30px; margin-left: 10px; background-color: #0A0863; color: white; font-size: 12px;">
                                    <i class="fa fa-solid fa-plus"></i> Add Event
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>


            <div x-cloak x-show='!showCalendar'>
                @include('livewire.guidance_program.calendar-agenda')
            </div>

            <div class="row" x-show='showCalendar'>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body p-0" wire:ignore>
                            <!-- THE CALENDAR -->
                            <div id="calendar"></div>
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </section> <!-- /.content -->

    @include('livewire.guidance_program.add-event')
    @include('livewire.guidance_program.view-event')
    @include('livewire.guidance_program.edit-event')
</div><!-- /.content-wrapper -->

@section('scripts')
    <script>
        let users = [];

        Livewire.on('addEvent', (data) => {
            $("#add-event").modal('show');
            users = data[0];
        });

        Livewire.on('selectedUsers', (data) => {
            users = data[0];
        });

        Livewire.on('clearSelection', () => {
            users = [];
            $('.multiple-select-optgroup-clear-field').val(null).trigger('change');
        });

        function initMultiSelect() {
            $('.multiple-select-optgroup-clear-field').select2({
                theme: "bootstrap4",
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: true,
            });

            $('.multiple-select-optgroup-clear-field').on('change', function(e) {
                @this.set('selected_users', $(this).val());
            });

            $('.multiple-select-optgroup-clear-field').val(users).trigger('change');
        }
    </script>
    <script>
        $(document).ready(function() {
            const today = new Date();
            $('.datePicker').each(function() {
                $(this).attr('min', today.toISOString().slice(0, 16)); // Set the max attribute to today's date
                $(this).attr('wire:ignore.self', '');
            });
        });

        Livewire.on('calendar', (data) => {
            const programs = data[0];
            var program_events = [];

            // Use forEach to add events to the array
            programs.forEach(element => {
                program_events.push({
                    id: element.id,
                    title: element.title,
                    start: element.program_start,
                    end: element.program_end,
                    backgroundColor: element.color ? element.color : '#6256AC',
                    borderColor: element.color ? element.color : '#6256AC',
                    description: element.description
                });
            });
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
                events: program_events,
                eventContent: function(info) {
                    var event = info.event;

                    // Create a container for the event
                    var containerEl = document.createElement('div');

                    if (info.view.type === 'dayGridMonth') {
                        // Display only the title in the month view
                        var titleEL = document.createElement('strong');
                        titleEL.innerText = event.title;
                        containerEl.appendChild(titleEL);
                    } else {
                        // Display complete details in week and day views
                        var titleEL = document.createElement('strong');
                        titleEL.innerText = event.title;

                        var descriptionEl = document.createElement('div');
                        descriptionEl.innerText = event.extendedProps.description;

                        var timeEl = document.createElement('div');
                        timeEl.innerText = moment(event.start).format('h:mm a') + ' - ' + moment(event.end).format('h:mm a');

                        containerEl.appendChild(titleEL);
                        containerEl.appendChild(descriptionEl);
                        containerEl.appendChild(timeEl);
                    }

                    // Apply CSS styles to the event container
                    containerEl.style.overflow = 'auto'; // Make the container scrollable
                    containerEl.style.height = '100%'; // Set a maximum height for the container
                    containerEl.style.width = '100%';
                    containerEl.style.padding = '5px';
                    containerEl.style.borderRadius = '3px';

                    // Apply background color to the event container
                    containerEl.style.backgroundColor = event.backgroundColor; // Apply the event's background color
                    containerEl.style.color = 'white';
                    containerEl.setAttribute('wire:click', `get_event(${event.id})`);
                    containerEl.setAttribute('data-toggle', 'modal');
                    containerEl.setAttribute('data-target', '#view-event');

                    return {
                        domNodes: [containerEl],
                    };
                },
            });

            calendar.render();
        })
    </script>
@endsection
