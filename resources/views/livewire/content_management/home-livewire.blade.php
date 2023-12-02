@section('head')
    <link href="{{ $logo }}" rel="icon" type="image/x-icon">
    <title>Home</title>
@endsection

<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    @include('livewire.content_management.home-navigation-bar')

    <!-- Content Wrapper. Contains page content -->
    <div class="p-sm-5 p-md-5 p-lg-5 p-xl-5 text-center" style="background-color: white;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row m-1">
                    <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center p-sm-5 p-md-5 p-lg-5 p-xl-5">
                        <div class="row ">
                            <p class="font-weight-bold text-md text-xl" style="color: #0A0863; font-family: 'Lato', sans-serif;">FLAGMS</p>
                            {{-- {!! $title !!} --}}
                        </div>
                        <div class="row">
                            <p class="font-weight-bold text-md text-lg" style="font-family: 'Lato', sans-serif;">(Fiat Lux Academe Guidance Management System)</p>
                            {{-- {!! $subtitle !!} --}}
                        </div>
                        <div class="row">
                            <p class="text-sm text-md text-lg" style="line-height: 30px; font-family: 'Karla', sans-serif;">A web-based hybrid guidance management system for Fiat Lux Academe Dasmariñas.</p>
                        </div>
                    </div>
                
                    <div class="col-12 col-md-6 d-flex flex-column align-items-center justify-content-center text-center pt-1">
                        <div class="img-container">
                            <img alt="Hiraya Building" src="images/Home and About/hiraya.png" class="img-fluid" style="max-width: 70%;">
                        </div>
                    </div>
                </div>
                
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--EMBRACING ALL LUXIANS-->
    <div style="background-color: white;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid pl-sm-5 pr-sm-5 pl-md-5 pr-md-5 pl-lg-5 pr-lg-5 pl-xl-5 pr-lg-5">
                <div class="row m-1">
    
                    <!-- Column 1: Image -->
                    <div class="col-12 col-md-6 text-center pt-5 order-2 order-md-1">
                        <img alt="Embracing Luxians.png" src="images/Home and About/Embracing Luxians.png" class="img-fluid mx-auto" style="max-width: 60%;">
                    </div>
    
                    <!-- Column 2: Text Content -->
                    <div class="col-12 col-md-6 text-center p-lg-5 order-1 order-md-2">
                        <div class="d-flex flex-column align-items-center justify-content-center h-100">
                            <p class="text-sm text-md text-xl" style="color: #252525; font-weight: bold; font-family: 'Lato', sans-serif;">Embracing All Luxians</p>
                            <p class="text-sm text-md text-lg" style="line-height: 30px; color: #252525; font-family: 'Lato', sans-serif;">“Every Luxian should be reminded that no matter who they are, they are accepted.”</p>
                            <p class="text-sm text-md text-lg" style="line-height: 30px; color: #252525; font-family: 'Lato', sans-serif;">
                                Mrs. Josephine “Ma’am Josie” Amador <br> (Guidance Associate)
                            </p>
                        </div>
                    </div>
    
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>
    
    
    <!--NURTURING LUXIAN WELL-BEING-->
    <div style="background-color: white;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid px-sm-5 px-md-5 px-lg-5 px-xl-5">
                <div class="row m-1 align-items-center justify-content-center">
    
                    <!-- Column 1: Text Content -->
                    <div class="col-12 col-md-6 text-center">
                        <div class="d-flex flex-column align-items-center justify-content-center p-lg-5">
                            <p class="text-sm text-md text-xl" style="color: #252525; font-weight: bold;">Nurturing Luxian Well-being</p>
                            <p class="text-sm text-md text-lg" style="line-height: 30px; color: #252525;">“The role and responsibility of the guidance associate of Fiat Lux Academe Dasmariñas is to assure the Luxians’ mental health. For them to be free of stress and to have the sense of belongingness to the community of Fiat Lux Academe, for them to feel accepted.”</p>
                            <p class="text-sm text-md text-lg" style="line-height: 15px; color: #252525;">
                                Mrs. Josephine “Ma’am Josie” Amador
                            </p>
                            <p class="text-sm text-md text-lg" style="line-height: 10px; color: #252525;">
                                (Guidance Associate)
                            </p>
                        </div>
                    </div>
    
                    <!-- Column 2: Image -->
                    <div class="col-12 col-md-6 text-center">
                        <img alt="Nurturing Luxian.png" src="images/Home and About/Nurturing Luxians.png" class="img-fluid" style="max-width: 80%;">
                    </div>
    
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <!--OUR VISION-->
    <div style="background-color: white;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid px-sm-5 px-md-5 px-lg-5 px-xl-5">
                <div class="row mb-5 align-items-center justify-content-center" style="text-align: left;">
    
                    <!-- Column 1: Image -->
                    <div class="col-12 col-md-6 text-center order-2 order-md-1">
                        <img alt="Embracing Luxians.png" src="images/Home and About/vision.png" class="img-fluid" style="max-width: 70%;">
                    </div>
    
                    <!-- Column 2: Text Content -->
                    <div class="col-12 col-md-6 text-center order-1 order-md-2">
                        <div class="d-flex flex-column align-items-center justify-content-center pl-sm-5 pr-lg-5">
                            <div class="row">
                                <div class="col-12">
                                    <p class="text-sm text-md text-xl" style="color: #252525; font-weight: bold; font-family: 'Lato', sans-serif;">Our Vision</p>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <p class="text-sm text-md text-lg" style="line-height: 30px; color: #252525; font-family: 'Lato', sans-serif;">To create a future where guidance is readily available and that can help and empower the individuals who use it.</p>
                                </div>
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
            <div class="container-fluid px-sm-5 px-md-5 px-lg-5 px-xl-5">
                <div class="row mb-2 mt-2 align-items-center justify-content-center text-left">
    
                    <!-- Column 1: Text Content -->
                    <div class="col-12 col-md-6 text-center">
                        <div class="d-flex flex-column align-items-center justify-content-center" style="padding-left: 3rem;">
                            <div class="row">
                                <p class="text-sm text-md text-xl" style="color: #252525; font-weight: bold; font-family: 'Lato', sans-serif;">Our Mission</p>
                            </div>
                            <div class="row">
                                <p class="text-sm text-md text-lg pr-5" style="line-height: 30px; color: #252525; font-family: 'Lato', sans-serif;">To provide a robust, fully functioning, and user-friendly hybrid guidance management system that empowers Fiat Lux Academe’s guidance office to achieve their goals efficiently and effectively.</p>
                            </div>
                        </div>
                    </div>
    
                    <!-- Column 2: Image -->
                    <div class="col-12 col-md-6 text-center">
                        <img alt="Nurturing Luxian.png" src="images/Home and About/mission.png" class="img-fluid" style="max-width: 60%;">
                    </div>
    
                </div>
            </div><!-- /.container-fluid -->
        </section>
    </div>

    <div class="container d-flex justify-content-center align-items-center p-sm-5 p-md-5 p-lg-5 p-xl-5 mb-5" style="background-color: white;">
        <section class="content-header text-center">
            <p class="text-sm text-md text-lg text-xl" style="color: #252525; font-weight: 500; font-family: 'Lato', sans-serif;">
                With the use of FLAGMS, the guidance office can provide a better and more efficient service to all Luxians.
            </p>
        </section>
    </div>
    
</div>

@section('footer')
    <footer class="footer text-white p-3" style="background-color: #0A0863;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-4 d-flex flex-column align-items-center justify-content-center text-center">
                    <a class="brand-link" href="#">
                        <img alt="AdminLTE Logo" class="brand-image img-circle mb-3" src="{{ $logo }}" style="width: auto; height: auto;">
                        <p class="text-md text-sm text-md font-weight-bold mb-0" style="font-family: 'Inria Serif', serif; color: white;">Fiat Lux Academe Cavite</p>
                    </a>
                </div>
                <div class="col-md-4 text-center mx-4">
                    <p class="text-sm text-md mb-2"><i class="fas fa-map-pin"></i> Don Placido Campos Ave., Barangay San Jose, Dasmarinas City, Cavite</p>
                    <p class="text-sm text-md mb-1"><i class="fas fa-phone"></i> 4166905</p>
                </div>
            </div>
        </div>
    </footer>
@endsection

