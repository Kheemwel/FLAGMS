@section('head')
    <title>FLAGMS | Physical Records</title>

    <style>
        .ui-autocomplete {
            z-index: 215000000 !important;
        }
    </style>


    <link href="adminLTE-3.2/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
@endsection

@section('head-scripts')
    <!-- jQuery UI -->
    <script src="adminLTE-3.2/plugins/jquery-ui/jquery-ui.min.js"></script>
@endsection

<div class="content-wrapper pl-1 pr-1" style="background-color: rgb(253, 253, 253);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 pl-5 pt-3">
                    <p class="font-weight-bold text-xl">Physical Records</p>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-tabs  ml-4 mr-4" style="background-color: rgb(253, 253, 253);">
                <div class="card-header p-0 pt-1" style="background-color: #7684B9 !important">
                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                        <li class="nav-item" wire:ignore>
                            <a aria-controls="custom-tabs-one-anecdotal" aria-selected="true" class="nav-link active" data-toggle="pill" href="#custom-tabs-one-anecdotal" id="custom-tabs-one-anecdotal-tab" role="tab">
                                <p class="font-weight-bold text-lg">Anecdotal Records</p>
                            </a>
                        </li>
                        <li class="nav-item" wire:ignore>
                            <a aria-controls="custom-tabs-one-inventory" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-inventory" id="custom-tabs-one-inventory-tab" role="tab">
                                <p class="font-weight-bold text-lg">Individual Inventory</p>
                            </a>
                        </li>
                        <li class="nav-item" wire:ignore>
                            <a aria-controls="custom-tabs-one-home" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-home" id="custom-tabs-one-home-tab" role="tab">
                                <p class="font-weight-bold text-lg">Home Visitation Forms</p>
                            </a>
                        </li>
                        <li class="nav-item" wire:ignore>
                            <a aria-controls="custom-tabs-one-violation" aria-selected="false" class="nav-link" data-toggle="pill" href="#custom-tabs-one-violation" id="custom-tabs-one-violation-tab" role="tab">
                                <p class="font-weight-bold text-lg">Violation Forms</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-one-tabContent">
                        <div aria-labelledby="custom-tabs-one-anecdotal-tab" class="tab-pane fade active show" id="custom-tabs-one-anecdotal" role="tabpanel" wire:ignore.self>
                            @include('livewire.physical_records.anecdotal-records')
                        </div>
                        <div aria-labelledby="custom-tabs-one-inventory-tab" class="tab-pane fade" id="custom-tabs-one-inventory" role="tabpanel" wire:ignore.self>
                            @include('livewire.physical_records.individual-inventory')
                        </div>
                        <div aria-labelledby="custom-tabs-one-home-tab" class="tab-pane fade" id="custom-tabs-one-home" role="tabpanel" wire:ignore.self>
                            @include('livewire.physical_records.home-visitation-forms')
                        </div>
                        <div aria-labelledby="custom-tabs-one-violation-tab" class="tab-pane fade" id="custom-tabs-one-violation" role="tabpanel" wire:ignore.self>
                            @include('livewire.physical_records.violation-forms')
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('studentInfo', () => ({
                schoolLevels: @json($school_levels),
                gradeLevels: @json($grade_levels),
                selectedSchoolLevel: '',
                selectedGradeLevel: '',
                studentName: '',
                teacherName: '',
                init() {
                    const grade_levels = @json($grade_levels);
                    const users = @json($users_name);
                    const self = this;

                    $(this.$refs.studentName).autocomplete({
                        source: users,
                        select: function(event, ui) {
                            self.studentName = ui.item.value;
                        },
                    });

                    $(this.$refs.teacherName).autocomplete({
                        source: users,
                        select: function(event, ui) {
                            self.teacherName = ui.item.value;
                        },
                    });

                    this.$watch('selectedSchoolLevel', value => {
                        if (value) {
                            this.gradeLevels = grade_levels.filter(level => level['school_level'] == value);
                            this.selectedGradeLevel = `${this.gradeLevels[0].grade_level}`;
                        } else {
                            this.gradeLevels = grade_levels;
                        }
                    });

                    this.$watch('selectedGradeLevel', value => {
                        if (!this.selectedSchoolLevel) {
                            this.selectedSchoolLevel = grade_levels.find(level => level['grade_level'] == value).school_level;
                        }
                    });

                    Livewire.on('resetInputs', () => {
                        this.studentName = '';
                        this.teacherName = '';
                        this.selectedSchoolLevel = '';
                        this.selectedGradeLevel = '';
                    });

                    Livewire.on('getRecord', (data) => {
                        this.studentName = data[0];
                        this.selectedSchoolLevel = data[1];
                        this.selectedGradeLevel = data[2];
                        this.teacherName = data[3];
                    });
                },
            }))
        })
    </script>
@endsection
