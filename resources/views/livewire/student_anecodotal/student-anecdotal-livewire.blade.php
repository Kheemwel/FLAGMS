@section('head')
    <title>FLAGMS | Anecdotal Record</title>
@endsection


<div class="content-wrapper pl-2 pr-2" style="background-color: rgb(253, 253, 253);">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12 pl-5 pr-5">
                    <p class="text-lg text-xl font-weight-bold">Anecdotal Records</p>
                </div>
            </div>
        </div>
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

    <div class="card ml-2 mr-5 ml-5" style="border-radius: 10px;">
        <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-center">
                    <thead class="text-center" style="color: white; background-color: #7684B9;">
                        <tr>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Offenses</th>
                            <th>Disciplinary Action</th>
                            <th>Student Signature</th>
                            <th>Name of Guardian</th>
                            <th>Signature</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anecdotal as $anec)
                            <tr>
                                <td class="text-center">{{ date('F d, Y', strtotime($anec->date)) }}</td>
                                <td class="text-center">{{ date('h:i A', strtotime($anec->time)) }}</td>
                                <td class="text-center">{{ $anec->getOffense->offense_name }}</td>
                                <td class="text-center">{{ $anec->getDisciplinaryAction->action }}</td>
                                <td class="text-center" data-target="#student-signature" data-toggle="modal" wire:click="$set('selectedAnecdotalRow', {{ $anec->id }})">
                                    <button class="btn btn-primary action-btn {{ $anec->student_signature_id ? 'd-none' : '' }}" style="color: #0A0863; font-weight: bold;">
                                        <i class="fa fa-solid fa-file-signature" style="color: #0A0863;"></i> Add Signature
                                    </button>

                                    @if ($anec->student_signature_id)
                                        <img height="150px" src="{{ $anec->student_signature() }}" width='150px'>
                                    @endif
                                </td>
                                <td class="text-center">{{ $anec->guardian_name }}</td>
                                <td class="text-center"><img height="150px" src="{{ $anec->guardian_signature() }}" width="150px"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('livewire.student_anecodotal.student-signature')
</div>

@section('scripts')
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
