@section('head')
    <title>Admin | Content Management</title>

    <style>
        /* For Eye Icons of Home Visitation and Summary Section inside the table */
        .btn-primary.action-btn {
            background-color: transparent;
            border-color: transparent;
        }

        .btn-primary.action-btn i {
            color: #252525;
        }

        /* Hover styles */
        .btn-primary.action-btn:hover {
            background-color: transparent;
        }

        .btn-primary.action-btn:hover i {
            color: #0A0863;
        }

        /********************************/

        /* Widen the Home Visitation modal */
        .Home Visitation-dialog {
            max-width: 90%;
        }

        .Home Visitation-modal {
            margin-left: auto;
            margin-right: auto;
        }

        /* Widens the add signature modal */
        .as-dialog {
            max-width: 50%;
        }

        .as-modal {
            margin-left: auto;
            margin-right: auto;
        }

        /* CLEAR BUTTON */
        .clear-button {
            background-color: #ffffff;
            border-color: #080743;
            color: #080743;
        }

        /* Hover effect */
        .clear-button:hover {
            background-color: #1f1b8e;
            border-color: #1f1b8e;
            color: #ffffff;
        }

        /* Clicked effect */
        .clear-button:active {
            background-color: #060554;
            border-color: #060554;
            color: #ffffff;
        }
    </style>
@endsection

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="background-color:  rgb(253, 253, 253); padding-left: 2rem;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6" style="padding-left: 2rem; padding-top: 1rem;">
                    <h1 style="font-weight: bold;">Content Management</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>


    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><strong>Website Logo</strong></h1>
            <br>
            <br>
            <img src="{{ $logo }}" alt="" width='100px' height="100px">
            <br>
            <br>
            <button class="btn btn-primary" data-target='#updateLogoModal' data-toggle='modal'>Update</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><strong>Website Title</strong></h1>
            <br>
            <br>
            <p>{{ $title }}</p>
            <button class="btn btn-primary" data-target='#updateTitleModal' data-toggle='modal'>Update</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><strong>Website Subtitle</strong></h1>
            <br>
            <br>
            <p>{{ $subtitle }}</p>
            <button class="btn btn-primary" data-target='#updateSubtitleModal' data-toggle='modal'>Update</button>
        </div>
    </div>
    
    <div class="card">
        <div class="card-body">
            <h1 class="card-title"><strong>Website School Name</strong></h1>
            <br>
            <br>
            <p>{{ $school_name }}</p>
            <button class="btn btn-primary" data-target='#updateSchoolNameModal' data-toggle='modal'>Update</button>
        </div>
    </div>

    @include('livewire.content_management.update-logo')
    @include('livewire.content_management.update-title')
    @include('livewire.content_management.update-subtitle')
    @include('livewire.content_management.update-school-name')
</div>
