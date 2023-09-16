@section('head')
    <title>Admin | Notification</title>
@endsection

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Notifications</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    

    <div class="position-fixed p-3" style="z-index: 1100; right: 0; top: 0;">
        <div aria-atomic="true" aria-live="assertive" class="toast hide" data-delay="3000" id="liveToast" role="alert">
            <div class="toast-header">
                <img class="rounded mr-2" src="favicon.ico" width="24">
                <strong class="mr-auto">FLAGMS</strong>
                <small>{{ now()->format('h:i A') }}</small>
                <button aria-label="Close" class="ml-2 mb-1 close" data-dismiss="toast" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body bg-success">
                @if (session()->has('message'))
                    {{ session('message') }}
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card-tools"
                style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                <!--MARKED AS READ BUTTON-->
                <button class="btn btn-default" data-target="#" data-toggle="modal"
                    style="max-width: 7rem; height: 35px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;"
                    type="button"><i class="fa fa-solid fa-check"></i> Mark as read</button>

                <!--DELETE BUTTON-->
                <button class="btn btn-default" data-target="#" data-toggle="modal"
                    style="max-width: 5rem; height: 35px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;"
                    type="button"><i class="fa fa-solid fa-trash"></i> Delete</button>

                <!--CLEAR BUTTON-->
                <button class="btn btn-default" data-target="#" data-toggle="modal"
                    style="max-width: 5rem; height: 35px; font-size: 12px; margin-left: 1rem; background-color: #0A0863; color: white;"
                    type="button"><i class="fa fa-solid fa-xmark"></i>Clear</button>
            </div>
        </div>
    </div>

    <!--HOME VISITATION TABLE SECTION-->
    <div class="card" style="margin-left: 2rem; margin-right: 2rem;">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
            <table class="table text-nowrap" style="text-align: center;">
                <thead style="background-color: #7684B9; color: white;">
                    <tr>
                        <th style="border-right: 1px solid #252525;">*checkbox*</th>
                        <th style="border-right: 1px solid #252525;">From</th>
                        <th style="border-right: 1px solid #252525;">Message</th>
                        <th style="border-right: 1px solid #252525;">Sent</th>
                        <th style="border-right: 1px solid #252525;">isRead</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="text-align: center;">
                        <td> <input class="form-check-input" id="cbPass" type="checkbox"> </td>
                        <td><img alt="profile" src="images/notif-profile.png"
                                style="width: 50px; height: 50px;"> &nbsp; Val Dela Cruz</td>
                        <td></td>
                        <td>June 14, 2023 at 10:00AM</td>
                        <td><i class="fa fa-solid fa-check" style="color: #3C58FF; font-size: 18px;"></i></td>
                    </tr>
                    <tr style="text-align: center;">
                        <td> <input class="form-check-input" id="cbPass" type="checkbox"> </td>
                        <td><img alt="profile" src="images/notif-profile2.png"
                                style="width: 50px; height: 50px;"> &nbsp; Anne Lopez</td>
                        <td></td>
                        <td>June 14, 2023 at 10:00AM</td>
                        <td><i class="fa fa-solid fa-circle" style="color: #3C58FF; font-size: 12px;"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card table -->

    <!--PAGINATION-->
    <div style="margin-top: 10rem;">
        <ul class="pagination justify-content-center">
            <li class="paginate_button page-item previous" id="example1_previous">
                <a aria-controls="example1" class="page-link" data-dt-idx="0" href="#"
                    tabindex="0">Previous</a>
            </li>
            <li class="paginate_button page-item ">
                <a aria-controls="example1" class="page-link" data-dt-idx="1" href="#"
                    tabindex="0">1</a>
            </li>
            <li class="paginate_button page-item ">
                <a aria-controls="example1" class="page-link" data-dt-idx="2" href="#"
                    tabindex="0">2</a>
            </li>
            <li class="paginate_button page-item ">
                <a aria-controls="example1" class="page-link" data-dt-idx="3" href="#"
                    tabindex="0">3</a>
            </li>
            <li class="paginate_button page-item ">
                <a aria-controls="example1" class="page-link" data-dt-idx="4" href="#"
                    tabindex="0">4</a>
            </li>
            <li class="paginate_button page-item ">
                <a aria-controls="example1" class="page-link" data-dt-idx="5" href="#"
                    tabindex="0">5</a>
            </li>
            <li class="paginate_button page-item ">
                <a aria-controls="example1" class="page-link" data-dt-idx="6" href="#"
                    tabindex="0">6</a>
            </li>
            <li class="paginate_button page-item next" id="example1_next">
                <a aria-controls="example1" class="page-link" data-dt-idx="7" href="#"
                    tabindex="0">Next</a>
            </li>
        </ul>
    </div>
</div>

@section('scripts')
    <script>
        Livewire.on('showToast', () => {
            setTimeout(function() {
                $('.toast').toast('show');
            });
        });
    </script>
@endsection
