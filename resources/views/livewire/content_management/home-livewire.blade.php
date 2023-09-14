@section('title')
    <title>Home</title>
@endsection
@section('icon')
    <link href="{{ $logo }}" rel="icon" type="image/x-icon">
@endsection

<div>
    @include('livewire.content_management.home-navigation-bar')
    <!-- Content Wrapper. Contains page content -->
    <div class="" style="background-color: white; padding: 4rem;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2" style="text-align: left;">
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <row>
                            <p style="font-weight: bold; font-size: 50px; color: #0A0863;">{{ $title }}</p>
                        </row>
                        <row>
                            <p style="font-size: 35px; font-weight: 800px;">
                                {{ $subtitle }}
                            </p>
                        </row>
                        <row>
                            <p style="font-size: 24px; line-height: 30px;">A web-based hybrid guidance
                                management system for Fiat Lux Academe Dasmariñas.</p>
                        </row>
                    </div>
                    <div class="col-6" style="padding-top: 1rem;">
                        <img alt="Hiraya Building" src="images/Home and About/hiraya.png" width="100%">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--INTRO TO GUIDANCE ASSOCIATE-->
    <div class="" style="background-color:  #7684B9;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid" style="padding: 5rem;">
                <div class="row mb-2" style="text-align: center; padding-top: 5rem; padding-bottom: 5rem;">
                    <div class="col-12">
                        <row>
                            <p style="font-size: 40px; color: white;">Mrs. Josephine “Ma’am Josie” Amador</p>
                        </row>
                        <row>
                            <p style="font-size: 24px; font-weight: 800px; color: white;">
                                THE GUIDANCE ASSOCIATE
                            </p>
                            <p style="font-size: 24px; font-weight: 800px; color: white; line-height: 2px;"> 
                                OF FIAT LUX ACADEME DASMARIÑAS
                            </p>
                        </row>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--GUIDANCE ASSOCIATE QUOTE-->
    <div class="" style="background-color: white; padding: 5rem; padding-bottom: 5rem;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid" style="padding: 5rem;">
                <div class="row mb-2" style="text-align: left;">
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <row>
                            <p style="font-size: 40px; color: #252525; font-weight: bold;">“Every Luxian should
                                be reminded that no matter who they are, they are accepted.” </p>
                        </row>
                        <row>
                            <p style="font-size: 24px; line-height: 30px; color: #252525;">- Ma’am Josie</p>
                        </row>
                    </div>
                    <div class="col-6" style="padding-top: 1rem;">
                        <img alt="FLA Kid" src="images/Home and About/fla kid.png" width="100%">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--ROLE DESCRIPTION OF GUIDANCE ASSOCIATE-->
    <div class="" style="background-color:  #7684B9;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid" style="padding: 5rem;">
                <div class="row mb-2" style="text-align: center; padding-top: 5rem; padding-bottom: 5rem;">
                    <div class="col-12">
                        <row>
                            <p style="font-size: 40px; color: white;">“The role and responsibility of the
                                guidance associate of Fiat Lux Academe Dasmariñas is to assure the Luxians’
                                mental health. For them to be free of stress and to have the sense of
                                belongingness to the community of Fiat Lux Academe, for them to feel accepted.”
                            </p>
                        </row>
                        <row>
                            <p style="font-size: 24px; color: white;">- Ma’am Josie</p>
                        </row>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--USE OF FLAGMS-->
    <div class="" style="background-color: white; padding: 5rem; padding-bottom: 5rem;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid" style="padding: 5rem;">
                <div class="row mb-2" style="text-align: left;">
                    <div class="col-6 d-flex flex-column justify-content-center">
                        <row>
                            <p style="font-size: 40px; color: #252525; font-weight: bold;">With the use of
                                FLAGMS, the guidance office can provide a better and more efficient service to
                                all Luxians.</p>
                        </row>
                    </div>
                    <div class="col-6" style="padding-top: 1rem;">
                        <img alt="shape design" src="images/Home and About/shapes.png" width="100%">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
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
