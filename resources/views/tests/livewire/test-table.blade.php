@section('head')
    <title>Test | Table</title>

    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@section('head-scripts')
    <!--Sorting Table-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
@endsection

<div>
    <p>Count: {{ $count }}</p>
    <input id='textbox' type="text" wire:model.live='text'>
    {{-- <input id='textbox' type="text"> --}}
    <p id='textdisplay'>Text: {{ $text }}</p>

    <button wire:click='textChange("ss")'>sasa</button>

    <br><br><br>

    <table class="table table-hover" id="user-table">
    </table>
</div>

@section('scripts')
    <script>
        $('#textbox').on("input", function() {
            const val = $(this).val();
            // $('#textdisplay').text(val);
            // Livewire.dispatch('textChange', [val]);
            // @this.textChange(val);
            // @this.set('text', val);
        });
        console.log(@json($users));
        var users = @json($users);
        var userData = [];
        users.forEach(element => {
            userData.push([
                element.id,
                element.name,
                element.email,
                element.role
            ]);
        });
        console.log(userData);
    </script>
    <script>
        $(document).ready(function() {
            const datas = [
                [
                    "1",
                    "Kim Bell",
                    "#sdksds",
                    "Student",
                    null
                ]
            ]
            console.log(datas);
            $('#user-table').DataTable({
                "paging": true,
                "info": true,
                "searching": true,
                "data": userData,
                columns: [{
                        title: "ID",
                        "render": function(data, type, row, meta) {
                            return `<h4>${data}</h4>`;
                        }
                    },
                    {
                        title: "Name"
                    },
                    {
                        title: "Email"
                    },
                    {
                        title: "Role"
                    },
                    {
                        title: "Action",
                        "render": function(data, type, row, meta) {
                            return '<button class="btn btn-primary action-btn" data-target="#view-user-btn" data-toggle="modal" wire:click="runme()">' +
                                '<i aria-hidden="true" class="fa fa-eye"></i>' +
                                '</button>' +
                                '<a class="btn btn-primary action-btn" data-target="#stud-info-edit" data-toggle="modal" href="#">' +
                                '<i class="fa fa-solid fa-pen"></i>' +
                                '</a>' +
                                '<a class="btn btn-primary action-btn" data-target="#delete" data-toggle="modal" href="#">' +
                                '<i class="fa fa-solid fa-trash"></i>' +
                                '</a>';
                        }
                    }
                ]
            });
        });
    </script>
@endsection
