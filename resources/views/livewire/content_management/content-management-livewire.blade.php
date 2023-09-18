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
    <!-- summernote -->
    <link href="adminLTE-3.2/plugins/summernote/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('head-scripts')
    <!-- Summernote -->
    <script src="adminLTE-3.2/plugins/summernote/summernote-bs4.min.js"></script>
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
            <img alt="" height="100px" src="{{ $logo }}" width='100px'>
            <br>
            <br>
            <button class="btn btn-primary" data-target='#updateLogoModal' data-toggle='modal'>Update</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body" wire:ignore>
            <h1 class="card-title"><strong>Website Title</strong></h1>
            <br>
            <textarea id='titleEditor' name="editordata" wire:model='title'></textarea>
            <button class="btn btn-primary" wire:click='updateTitle()'>Update</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body" wire:ignore>
            <h1 class="card-title"><strong>Website Subtitle</strong></h1>
            <br>
            <textarea id='subtitleEditor' name="editordata" wire:model='subtitle'></textarea>
            <button class="btn btn-primary" wire:click='updateSubtitle()'>Update</button>
        </div>
    </div>

    <div class="card">
        <div class="card-body" wire:ignore>
            <h1 class="card-title"><strong>Website School Name</strong></h1>
            <br>
            <textarea id='schoolNameEditor' name="editordata" wire:model='school_name'></textarea>
            <button class="btn btn-primary" wire:click='updateSchoolName()'>Update</button>
        </div>
    </div>



    @include('livewire.content_management.update-logo')
    @include('livewire.content_management.update-title')
    @include('livewire.content_management.update-subtitle')
    @include('livewire.content_management.update-school-name')
</div>

@section('scripts')
    <script>
        $(document).ready(function() {
            const toolbar = [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ];

            const fontSizes = ['8', '9', '10', '11', '12', '14', '16', '18', '20', '22', '24', '26', '28',
                '36', '48', '72'
            ];

            $('#titleEditor').summernote({
                toolbar: toolbar,
                fontSizes: fontSizes,
                callbacks: {
                    onChange: function(contents, $editable) {
                        Livewire.dispatch('titleChange', [contents]);
                    }
                }
            });
            $('#subtitleEditor').summernote({
                toolbar: toolbar,
                fontSizes: fontSizes,
                callbacks: {
                    onChange: function(contents, $editable) {
                        Livewire.dispatch('subtitleChange', [contents]);
                    }
                }
            });
            $('#schoolNameEditor').summernote({
                toolbar: toolbar,
                fontSizes: fontSizes,
                callbacks: {
                    onChange: function(contents, $editable) {
                        Livewire.dispatch('schoolNameChange', [contents]);
                    }
                }
            });
        });
    </script>
@endsection
