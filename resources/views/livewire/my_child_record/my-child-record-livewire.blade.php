@section('head')
    <title>FLAGMS | Child's Records</title>
@endsection

<div class="content-wrapper pl-1 pr-1" style="background-color:  rgb(253, 253, 253);">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 pl-5 pt-3">
                    <h1 style="font-weight: bold;">My Child's Records</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="col-12 col-sm-4 mb-2 pl-5 pr-5">
        <div class="input-group">
            <input class="form-control" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live.debounce.500ms='search'>
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

    <!--MY CHILD'S RECORDS TABLE SECTION-->
    <div class="card ml-5 mr-5" style="border-radius: 10px;">
        <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-center">
                    <thead class="pr-0 text-center" style="color: white; background-color: #7684B9;">
                        <tr>
                            <th>ID</th>
                            <th>Name of Child</th>
                            <th>Anecdotal Record</th>
                            <th>Individual Inventory Report</th>
                            <th>Summary</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($children as $child)
                            <tr>
                                <td>{{ $child->id }}</td>
                                <td><img alt="user" height="30px" src="images/user.png" width="30px">{{ $child->name }}</td>
                                <td class="text-lg text-center">
                                    <button class="btn btn-primary action-btn" data-target="#anecdotal-btn" data-toggle="modal" wire:click='viewAnecdotal({{ $child->id }})'>
                                        <i aria-hidden="true" class="fa fa-eye"></i>
                                    </button>
                                </td>
                                <td class="text-lg text-center">
                                    <button class="btn btn-primary action-btn" data-target="#student-inventory" data-toggle="modal" wire:click='viewInventory({{ $child->id }})'>
                                        <i aria-hidden="true" class="fa fa-eye"></i>
                                    </button>
                                </td>
                                <td class="text-lg text-center">
                                    <button class="btn btn-primary action-btn" data-target="#summary-btn" data-toggle="modal" wire:click='viewSummary({{ $child->id }})'>
                                        <i aria-hidden="true" class="fa fa-eye"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- /.card-body -->
    </div><!-- /.card table -->


    @include('livewire.my_child_record.child-summary')
    @include('livewire.my_child_record.child-anecdotal')
    @include('livewire.my_child_record.child-inventory')
    @include('livewire.my_child_record.guardian-signature')
</div>

@section('scripts')
    <script>
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
            },);
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
