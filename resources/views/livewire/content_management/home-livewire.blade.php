@section('head')
    <link href="{{ $logo }}" rel="icon" type="image/x-icon">
    <title>Home</title>
@endsection

<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    @include('livewire.content_management.home-navigation-bar')

    <!-- Content Wrapper. Contains page content -->
    <div class="" style="background-color: white; padding: 5rem;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2" style="text-align: left;">
                    <div class="col-6 d-flex flex-column justify-content-center" style="padding: 50px;">
                        <div class="row">
                            {{-- <p class="font-weight-bold" style="font-size: 50px; color: #0A0863; font-family: 'Lato', sans-serif;">FLAGMS</p> --}}
                            {!! $title !!}
                        </div>
                        <div class="row">
                            {{-- <p style="font-size: 35px; font-weight: 800; font-family: 'Lato', sans-serif;">(Fiat Lux Academe Guidance Management System)</p> --}}
                            {!! $subtitle !!}
                        </div>
                        <div class="row">
                            <p style="font-size: 24px; line-height: 30px; font-family: 'Karla', sans-serif;">A web-based hybrid guidance management system for Fiat Lux Academe Dasmariñas.</p>
                        </div>
                    </div>

                    <div class="col-6 d-flex flex-column justify-content-center" style="padding-top: 1rem; display: flex; justify-content: center; align-items: center;">
                        <img alt="Hiraya Building" src="images/Home and About/hiraya.png" style="width: 80%;">
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--EMBRACING ALL LUXIANS-->
    <div class="" style="background-color: white;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid" style="padding-left: 5rem; padding-right: 5rem;">
                <div class="row mb-2" style="text-align: left;">
                    <div class="col-6 justify-content-center text-center" style="padding-top: 1rem;">
                        <img alt="Embracing Luxians.png" src="images/Home and About/Embracing Luxians.png" width="70%">
                    </div>
                    <div class="col-6 d-flex flex-column justify-content-end text-center" style="padding: 4rem; padding-left: 6rem;">
                        <div class="row">
                            <p style="font-size: 30px; color: #252525; font-weight: bold; font-family: 'Lato', sans-serif; text-align: left;">Embracing All Luxians</p>
                        </div>
                        <div class="row">
                            <p style="font-size: 20px; line-height: 30px; color: #252525; font-family: 'Lato', sans-serif; text-align: left;">“Every Luxian should be reminded that no matter who they are, they are accepted.”</p>
                            <p style="font-size: 20px; line-height: 30px; color: #252525; font-family: 'Lato', sans-serif; text-align: left;">
                                Mrs. Josephine “Ma’am Josie” Amador &nbsp;(Guidance Associate)
                            </p>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--NURTURING LUXIAN WELL-BEING-->
    <div class="" style="background-color: white;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid" style="padding-left: 5rem; padding-right: 5rem; padding-top: 4rem;">
                <div class="row mb-2" style="text-align: left;">
                    <div class="col-6 d-flex flex-column justify-content-center" style="padding-left: 4rem;">
                        <row>
                            <p style="font-size: 30px; color: #252525; font-weight: bold;">Nurturing Luxian Well-being</p>
                        </row>
                        <row>
                            <p style="font-size: 20px; line-height: 30px; color: #252525;">“The role and responsibility of the guidance associate of Fiat Lux Academe Dasmariñas is to assure the Luxians’ mental health. For them to be free of stress and to have the sense of belongingness to the community of Fiat Lux Academe, for them to feel accepted.”</p> &nbsp;
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
                        <img alt="Nurturing Luxian.png" src="images/Home and About/Nurturing Luxians.png" style="width: 90%;">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--OUR VISION-->
    <div class="" style="background-color: white; padding-bottom: 2rem;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid" style="padding-left: 5rem; padding-right: 5rem; padding-top: 4rem;">
                <div class="row mb-2" style="text-align: left;">
                    <div class="col-6 d-flex justify-content-center" style="padding-top: 1rem;">
                        <img alt="Embraing Luxians.png" src="images/Home and About/vision.png" style="width: 80%;">
                    </div>

                    <div class="col-6 d-flex flex-column justify-content-center" style="padding-left: 5rem;">
                        <div class="row ">
                            <div class="col-12">
                                <p style="font-size: 30px; color: #252525; font-weight: bold; font-family: 'Lato', sans-serif;">Our Vision</p>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <p style="font-size: 20px; line-height: 30px; color: #252525; font-family: 'Lato', sans-serif;">To create a future where guidance is readily available and that can help and empower the individuals who use it.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--OUR MISSION-->
    <div class="" style="background-color: white;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid" style="padding-left: 5rem; padding-right: 5rem; padding-top: 4rem;">
                <div class="row mb-2" style="text-align: left;">
                    <div class="col-6 d-flex flex-column justify-content-center" style="padding-left: 3rem;">
                        <row>
                            <p style="font-size: 30px; color: #252525; font-weight: bold; font-family: 'Lato', sans-serif;">Our Mission</p>
                        </row>
                        <row>
                            <p style="font-size: 20px; line-height: 30px; color: #252525; font-family: 'Lato', sans-serif;padding-right: 2rem">To provide a robust, fully functioning, and user-friendly hybrid guidance management system that empowers Fiat Lux Academe’s guidance office to achieve their goals efficiently and effectively.</p>
                        </row>
                    </div>
                    <div class="col-6 d-flex justify-content-center" style="padding-top: 1rem;">
                        <img alt="Nurturing Luxian.png" src="images/Home and About/mission.png" style="width: 70%;">
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
</div>

@section('footer')
    <footer class="footer layout-*-footer-fixed p-0 m-0">
        <table class="table table-sm p-0 m-0" style="text-align: center; background: linear-gradient(180deg, #000000 -129.53%, #0A0863 100%);">
            <tbody>
                <tr>
                    <td style="padding-top: 2rem; text-align: center;">
                        <a class="brand-link" href="#" style="border: transparent;">
                            <img alt="AdminLTE Logo" class="brand-image img-circle" src="{{ $logo }}" style="width: auto; height: auto;">
                            <p style="font-size: 18px; color: white; font-weight: bold; font-family: 'Inria Serif', serif;">Fiat Lux Academe Cavite</p>
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
