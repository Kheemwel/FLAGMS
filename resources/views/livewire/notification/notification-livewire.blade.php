@section('head')
    <title>FLAGMS | Notification</title>
@endsection

<!-- Content Wrapper. Contains page content -->
<div class="container-fluid px-4"> <!-- Add 'px-4' for left and right padding -->
    <div class="content-wrapper" style="background-color:  rgb(253, 253, 253);">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6  pt-3">
                        <p class="font-weight-bold text-xl">Notifications</p>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="card-tools d-flex justify-content-center justify-content-sm-end mb-4">
                    <!-- MARKED AS READ BUTTON -->
                    <button class="btn btn-default text-sm btn-sm" data-target="#" data-toggle="modal" style="background-color: #0A0863; color: white;" type="button">
                        <i class="fa fa-solid fa-check"></i> Mark as read
                    </button>

                    <!-- DELETE BUTTON -->
                    <button class="btn btn-default text-sm btn-sm ml-2" data-target="#" data-toggle="modal" style="background-color: #0A0863; color: white;" type="button">
                        <i class="fa fa-solid fa-trash"></i> Delete
                    </button>

                    <!-- CLEAR BUTTON -->
                    <button class="btn btn-default text-sm btn-sm ml-2" data-target="#" data-toggle="modal" style="background-color: #0A0863; color: white;" type="button">
                        <i class="fa fa-solid fa-xmark"></i> Clear
                    </button>
                </div>
            </div>
        </div>

        <!-- HOME VISITATION TABLE SECTION -->
        <div class="card" style="border-radius: 10px;">
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="border: 1px solid #252525; border-radius: 10px;">
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0 m-0">
                    <table class="table table-hover text-center">
                        <thead style="background-color: #7684B9; color: white;">
                            <tr>
                                <th> <input type="checkbox"></th>
                                <th>From</th>
                                <th>Message</th>
                                <th>Sent</th>
                                <th>isRead</th>
                            </tr>
                        </thead>
                        <tbody wire:poll.5s>
                            @foreach ($notifications as $notif)
                                <tr style="text-align: center;" wire:click='read({{ $notif->id }})'>
                                    <td> <input class="form-check-input" id="cbPass" type="checkbox"></td>
                                    <td><img alt="profile" src="{{ $notif->sender_profile() }}" style="width: 50px; height: 50px;">{{ $notif->sender_name() }}</td>
                                    <td>{{ $notif->message }}</td>
                                    <td>{{ $notif->created_at->format('F d,Y   h:i A') }}</td>
                                    <td>
                                        @if ($notif->is_read)
                                            <i class="fa fa-solid fa-check text-md" style="color: #3C58FF;"></i>
                                        @else
                                            <i class="fa fa-solid fa-circle text-sm" style="color: #3C58FF;"></i>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card table -->

        <!-- PAGINATION -->
        <div style="margin-top: 10rem;">
            <ul class="pagination justify-content-center">
                <li class="paginate_button page-item previous" id="example1_previous">
                    <a aria-controls="example1" class="page-link" data-dt-idx="0" href="#" tabindex="0">Previous</a>
                </li>
                <li class="paginate_button page-item ">
                    <a aria-controls="example1" class="page-link" data-dt-idx="1" href="#" tabindex="0">1</a>
                </li>
                <li class="paginate_button page-item ">
                    <a aria-controls="example1" class="page-link" data-dt-idx="2" href="#" tabindex="0">2</a>
                </li>
                <li class="paginate_button page-item ">
                    <a aria-controls="example1" class="page-link" data-dt-idx="3" href="#" tabindex="0">3</a>
                </li>
                <li class="paginate_button page-item ">
                    <a aria-controls="example1" class="page-link" data-dt-idx="4" href="#" tabindex="0">4</a>
                </li>
                <li class="paginate_button page-item ">
                    <a aria-controls="example1" class="page-link" data-dt-idx="5" href="#" tabindex="0">5</a>
                </li>
                <li class="paginate_button page-item ">
                    <a aria-controls="example1" class="page-link" data-dt-idx="6" href="#" tabindex="0">6</a>
                </li>
                <li class="paginate_button page-item next" id="example1_next">
                    <a aria-controls="example1" class="page-link" data-dt-idx="7" href="#" tabindex="0">Next</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@section('scripts')
    <script>

    </script>
@endsection
