@section('head')
    <title>FLAGMS | Approval Forms</title>
@endsection

<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Approval Forms</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="row">
        <div class="col-12">
            <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
                <!--SEARCH FEATURE-->
                <div class="input-group input-group-sm" style="max-width: 30%;">
                    <!--SEARCH INPUT-->
                    <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text">
                    <div class="input-group-append">
                        <button class="btn btn-default" data-target="#filter" data-toggle="modal" style="height: 35px;" type="submit">
                            <i aria-hidden="true" class="fa fa-filter"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="align-content: center; margin-left: 1rem; margin-right: 1rem;">
        @foreach ($requestforms as $request)
            <div class="col-12">
                <!--REQUEST LIST-->
                <div class="col-lg-12">
                    <div class="small-box bg-info" style="background-color: white !important; color: #252525 !important; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); border-radius: 10px; display: flex; flex-direction: row;">
                        <table cellpadding="20px" cellspacing="10px" style="width: 100%;">
                            <tr>
                                <td rowspan="2" style="width: 10%;">
                                    <img alt="user profile" src="images/user-req.png" style="align-self: center;">
                                </td>
                                <td style="vertical-align:middle;" style="width: 80%;">
                                    <label style="font-size: 16px; line-height: 5%;">{{ $request->teacher->getUserAccount->getNameAttribute() }}</label> <br>
                                    <label style="font-size: 14px; line-height: 5%;">{{ $request->created_at->format('F d,Y   h:i A') }}</label> <br>
                                    <label style="font-size: 24px; margin-top: 1rem;">{{ $request->form_type }}</label>
                                </td>
                                <td style="vertical-align: top;" style="width: 20%;">
                                    <label style="font-size: 24px; margin-top: 1rem; color: #252525; float: right; background-color: {{ $request->is_approve ? '#d1d8ff' : '#BFFFBF' }}; color: {{ $request->is_approve ? '#3C58FF' : '#006400' }}; padding: 3px 20px; border-radius: 10px">{{ $request->is_approve ? 'APPROVED' : 'PENDING' }}</label>
                                </td>
                            </tr>
                            <td>ID: RF#{{ $request->id }}</td>
                            <td style="vertical-align: bottom; float: right; width: 100%;">
                                <button class="btn btn-default" data-target="#read-request-form" data-toggle="modal" style="float: right;color: white; background-color: #080743; font-size: 14px; width: 80px;" wire:click="read('{{ $request->form_type }}', {{ $request->id }})">Read</button>
                            </td>
                        </table>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    @include('livewire.approval_forms.read-form')
    @include('livewire.approval_forms.filter')
</div>
