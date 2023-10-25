@section('head')
    <title>Admin | Content Management</title>

    <!-- summernote -->
    <link href="adminLTE-3.2/plugins/summernote/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('head-scripts')
    <!-- Summernote -->
    <script src="adminLTE-3.2/plugins/summernote/summernote-bs4.min.js"></script>
@endsection

<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-white navbar-light" style="padding: 4rem; padding-left: 8rem;">
        <!-- Brand Logo -->
        <div style="border: transparent; display: flex; align-items: center;">
            <div class="d-flex justify-content-between align-items-start">
                <img alt="AdminLTE Logo" class="brand-image img-circle" src="{{ $logo }}" style="width: 50px; height: 50px; margin-right: 10px;">
                <i class="fa fa-solid fa-pen" data-target='#updateLogoModal' data-toggle="modal" title="Edit Logo" tooltip="enable"></i>
            </div>
            <div class="d-flex justify-content-between align-items-start">
                {!! $school_name !!}
                <i class="fa fa-solid fa-pen" data-target='#updateSchoolNameModal' data-toggle="modal" title="Edit School Name" tooltip="enable"></i>
            </div>
        </div>
    </nav><!--------------- /.navbar ----------------------->


    <!-- Content Wrapper. Contains page content -->
    <div class="" style="background-color: white; padding: 4rem;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2" style="text-align: left;">
                    <div class="col-6 d-flex flex-column justify-content-center" style="padding: 50px;">
                        <div class="row" x-data='{ show: false }'>
                            <div x-on:click='show = !show'>
                                {!! $title !!}
                            </div>
                            <div class="col-4" x-show="show">
                                <button class="btn btn-primary" data-target='#updateTitleModal' data-toggle="modal" style="background-color: white; color:#252525; font-size: 14px; margin-bottom: 1rem;" title="Edit Title" tooltip="enable" type="button">
                                    <i class="fa fa-solid fa-pen"></i> Edit Text
                                </button>
                            </div>
                        </div>
                        <div class="row" x-data='{ show: false }'>
                            <div x-on:click='show = !show'>
                                {!! $subtitle !!}
                            </div>
                            <div class="col-4" x-show="show">
                                <button class="btn btn-primary" data-target='#updateSubtitleModal' data-toggle="modal" style="background-color: white; color:#252525; font-size: 14px; margin-bottom: 1rem;" title="Edit Subtitle" tooltip="enable" type="button">
                                    <i class="fa fa-solid fa-pen"></i> Edit Text
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <p style="font-size: 24px; line-height: 30px; font-family: 'Karla', sans-serif;">A web-based hybrid guidance management system for Fiat Lux Academe Dasmariñas.</p>
                        </div>
                    </div>

                    <div class="col-6" style="padding-top: 1rem; display: flex; justify-content: center; align-items: center;">
                        <img alt="Hiraya Building" src="images/Home and About/hiraya.png" style="width: 90%;">
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--EMBRACING ALL LUXIANS-->
    <div class="" style="background-color: white; padding-bottom: 2rem;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid" style="padding: 5rem;">
                <div class="row mb-2" style="text-align: left;">
                    <div class="col-6 justify-content-center" style="padding-top: 1rem; text-align: center;">
                        <img alt="Embraing Luxians.png" src="images/Home and About/Embracing Luxians.png" width="50%">
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-end" style="padding: 5rem;">
                        <div class="row">
                            <p style="font-size: 30px; color: #252525; font-weight: bold; font-family: 'Lato', sans-serif; text-align: left;">Embracing All Luxians</p>
                        </div>
                        <div class="row">
                            <p style="font-size: 20px; line-height: 30px; color: #252525; font-family: 'Lato', sans-serif; text-align: left;">“Every Luxian should be reminded that no matter who they are, they are accepted.”</p>
                            <p style="font-size: 20px; line-height: 30px; color: #252525; font-family: 'Lato', sans-serif; text-align: left;">
                                Mrs. Josephine “Ma’am Josie” Amador (Guidance Associate)
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--NURTURING LUXIAN WELL-BEING-->
    <div class="" style="background-color: white; padding-bottom: 2rem;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid" style="padding: 5rem;">
                <div class="row mb-2" style="text-align: left;">
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <row>
                            <p style="font-size: 30px; color: #252525; font-weight: bold;">Nurturing Luxian Well-being</p>
                        </row>
                        <row>
                            <p style="font-size: 20px; line-height: 30px; color: #252525;">“The role and responsibility of the guidance associate of Fiat Lux Academe Dasmariñas is to assure the Luxians’ mental health. For them to be free of stress and to have the sense of belongingness to the community of Fiat Lux Academe, for them to feel accepted.”
                                Mrs. Josephine “Ma’am Josie” Amador
                                (Guidance Associate)</p>
                        </row>
                        <row>
                            <p style="font-size: 20px; line-height: 10px; color: #252525;">
                                Mrs. Josephine “Ma’am Josie” Amador
                            </p>
                            <p style="font-size: 20px; line-height: 10px; color: #252525;">
                                (Guidance Associate)
                            </p>
                        </row>
                    </div>
                    <div class="col-6 d-flex justify-content-center" style="padding-top: 1rem;">
                        <img alt="Nurturing Luxian.png" src="images/Home and About/Nurturing Luxians.png" style="width: 70%;">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--OUR VISION-->
    <div class="" style="background-color: white; padding-bottom: 2rem;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid" style="padding: 5rem;">
                <div class="row mb-2" style="text-align: left;">
                    <div class="col-6 d-flex justify-content-center" style="padding-top: 1rem;">
                        <img alt="Embraing Luxians.png" src="images/Home and About/vision.png" style="width: 50%;">
                    </div>

                    <div class="col-6 d-flex flex-column justify-content-center align-items-center" style="padding: 5rem; text-align: left;">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <p style="font-size: 30px; color: #252525; font-weight: bold; font-family: 'Lato', sans-serif;">Our Vision</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <p style="font-size: 20px; line-height: 30px; color: #252525; font-family: 'Lato', sans-serif;">To create a future where guidance is readily available and that can help and empower the individuals who use it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--OUR MISSION-->
    <div class="" style="background-color: white; padding-bottom: 2rem;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid" style="padding: 5rem;">
                <div class="row mb-2" style="text-align: left;">
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <row>
                            <p style="font-size: 30px; color: #252525; font-weight: bold; font-family: 'Lato', sans-serif;">Our Mission</p>
                        </row>
                        <row>
                            <p style="font-size: 20px; line-height: 30px; color: #252525; font-family: 'Lato', sans-serif;">To provide a robust, fully functioning, and user-friendlyhybrid guidance management system that empowers Fiat Lux Academe’s guidance office to achieve their goals efficiently and effectively.</p>
                        </row>
                        <row>
                            <p style="font-size: 20px; line-height: 10px; color: #252525; font-family: 'Lato', sans-serif;">
                                Mrs. Josephine “Ma’am Josie” Amador
                            </p>
                            <p style="font-size: 20px; line-height: 10px; color: #252525; font-family: 'Lato', sans-serif;">
                                (Guidance Associate)
                            </p>
                        </row>
                    </div>
                    <div class="col-6 d-flex justify-content-center" style="padding-top: 1rem;">
                        <img alt="Nurturing Luxian.png" src="images/Home and About/mission.png" style="width: 60%;">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <div class="container d-flex justify-content-center align-items-center" style="background-color: white; padding: 5rem; padding-bottom: 10rem;">
        <section class="content-header">
            <p style="font-size: 30px; color: #252525; font-weight: 500px; font-family: 'Lato', sans-serif; text-align: center;">With the use of FLAGMS, the guidance office can provide a better and more efficient service to all Luxians.</p>
        </section>
    </div>

    @include('livewire.content_management.update-logo')
    @include('livewire.content_management.update-title')
    @include('livewire.content_management.update-subtitle')
    @include('livewire.content_management.update-school-name')
</div>

@section('footer')
    <footer class="footer layout-*-footer-fixed">
        <table class="table table-sm" style="text-align: center; background: linear-gradient(180deg, #000000 -129.53%, #0A0863 100%);">
            <tbody>
                <tr>
                    <td style="padding-top: 2rem; text-align: center;">
                        <a class="brand-link" href="#" style="border: transparent;">
                            <img alt="AdminLTE Logo" class="brand-image img-circle" src="{{ $logo }}" style="width: auto; height: auto;">
                            <p style="font-size: 20px; color: white; font-weight: bold;">Fiat Lux Academe</p>
                        </a>
                    </td>
                    <td style="padding-top: 2rem;">
                        <p style="font-size: 16px; color: white; font-weight: bold;"><iconify-icon icon="ph:map-pin-fill"></iconify-icon> Don Placido Campos Ave., Barangay San</p>
                        <p style="font-size: 16px; color: white; font-weight: bold;">Jose, Dasmarinas City, Cavite
                        </p>
                    </td>
                    <td style="padding-top: 2rem;">
                        <a class="brand-link" href="#" style="border: transparent;">
                            <p style="font-size: 16px; color: white; font-weight: bold;"><iconify-icon icon="teenyicons:phone-solid"></iconify-icon> 4166905</p>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </footer>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            const toolbar = [
                // [groupName, [list of button]]
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ];

            const fontSizes = ['8', '9', '10', '11', '12', '14', '16', '18', '20', '22', '24', '26', '28',
                '36', '48', '72'
            ];

            $('#titleEditor').summernote({
                height: '300px',
                disableDragAndDrop: true,
                toolbar: toolbar,
                fontSizes: fontSizes,
                callbacks: {
                    onChange: function(contents, $editable) {
                        Livewire.dispatch('titleChange', [contents]);
                    }
                }
            });
            
            $('#subtitleEditor').summernote({
                height: '300px',
                toolbar: toolbar,
                fontSizes: fontSizes,
                callbacks: {
                    onChange: function(contents, $editable) {
                        Livewire.dispatch('subtitleChange', [contents]);
                    }
                }
            });

            $('#schoolNameEditor').summernote({
                height: '300px',
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
    <script>
        Livewire.on('resetField', (data) => {
            const content = data[0];
            $('#titleEditor').summernote('code', content['title']);
            $('#subtitleEditor').summernote('code', content['subtitle']);
            $('#schoolNameEditor').summernote('code', content['school_name']);
        });
    </script>
@endsection
