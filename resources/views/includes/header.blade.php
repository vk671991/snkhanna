{{-- <header class="bg-white">
    <!-- Start Toolbar Section -->
    <div class="toolbar">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ url('/') }}/assets/images/logo.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-8 d-none d-md-block">
                    <div class="toolbar-right text-right">
                        <div class="media align-items-center d-inline-flex">
                            <div class="tolbar-icon text-active s-dp-1-3 justify-content-center  rounded-circle">
                                <i class="icofont-envelope"></i>
                            </div>
                            <div class="media-body">
                                <a href="mailto:surendrank@hotmail.com" class="text-default text-Underline">surendrank@hotmail.com</a>
                            </div>
                        </div>
                        <div class="media align-items-center d-inline-flex">
                            <div class="tolbar-icon text-active s-dp-1-3 justify-content-center  rounded-circle">
                                <i class="icofont-ui-call"></i>
                            </div>
                            <div class="media-body">
                                <a href="javascript:void(0)" class="text-default">+91 98109 43535 / +91 98189 55777</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Toolbar Section -->

    <!-- Start Navigation Section -->
    <nav class="navbar grad-bg--2 s-dp-1-3 navbar-sticky navbar-expand-lg m-navbar bcbd_navbar">
        <div class="container position-relative">
            <a href="{{ route('home') }}" class="menu-logo" >
                <img src="{{ url('/') }}/assets/images/logo.jpg" alt="">
            </a>
            <div class="burger_menu">
                <span class="navbar-toggler-icon"></span>
            </div><!-- burger menu -->

            <div class="collapse navbar-collapse bcbd_collpase_nav" id="navbarSupportedContent">

                <div class="nav_outer  mr-auto">
                    <ul class="navbar-nav bcbd_nav mr-auto">
                        <li class="nav-item {{ (request()->segment(1) =='home') ? 'active' :'' }}">
                            <a class="nav-link" href="{{ route('home') }}">Home  </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(1) =='about-me') ? 'active' :'' }}">
                            <a class="nav-link" href="{{ route('about-me') }}"> About Me </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(1) =='case-studies') ? 'active' :'' }}">
                            <a class="nav-link" href="{{ route('case-studies') }}"> Case Studies </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(1) =='articles') ? 'active' :'' }}">
                            <a class="nav-link" href="{{ route('articles') }}"> Articles </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(1) =='gallery') ? 'active' :'' }}">
                            <a class="nav-link" href="{{ route('gallery') }}"> Gallery </a>
                        </li>
<!--                        <li class="nav-item {{ (request()->segment(1) =='blog') ? 'active' :'' }}">
                            <a class="nav-link" href="{{ route('blog') }}"> Blog </a>
                        </li>-->
                        <li class="nav-item {{ (request()->segment(1) =='contact-us') ? 'active' :'' }}">
                            <a class="nav-link" href="{{ route('contact-us') }}"> Contact Us </a>
                        </li>
                        <li class="nav-item {{ (request()->segment(1) =='appointment') ? 'active' :'' }}">
                            <a class="nav-link" href="{{ route('appointment') }}"> Appointment </a>
                        </li>
                    </ul>
                    <div class="toolbar-right mobile-view text-left d-block d-md-none">
                        <div class="media align-items-center d-inline-flex">
                            <div class="tolbar-icon text-active s-dp-1-3 justify-content-center  rounded-circle">
                                <i class="icofont-envelope"></i>
                            </div>
                            <div class="media-body">
                                <a href="mailto:surendrank@hotmail.com" class="text-default text-Underline">surendrank@hotmail.com</a>
                            </div>
                        </div>
                        <div class="media align-items-center d-inline-flex">
                            <div class="tolbar-icon text-active s-dp-1-3 justify-content-center  rounded-circle">
                                <i class="icofont-ui-call"></i>
                            </div>
                            <div class="media-body">
                                <a href="javascript:void(0)" class="text-default">+91 98109 43535 / +91 98189 55777</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> <!-- navbar collpase -->
        </div> <!-- container -->
    </nav>
    <!-- Start Navigation Section -->
</header> --}}


<header>
        <!-- Start Toolbar Section -->
        <div class="toolbar grad-bg--2 type-2 pt-2 pb-2 d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2">
                       <div class="social-icon  ">
                        <a href="https://www.facebook.com/surendra.khanna.14" class="text-white">
                            <i class="icofont-facebook"></i>
                        </a>
                        <a href="https://twitter.com/SSurendrank" class="text-white">
                            <i class="icofont-twitter"></i>
                        </a>
                        <a href="https://in.linkedin.com/in/dr-prof-surendra-nath-khanna-0611b675" class="text-white">
                            <i class="icofont-linkedin"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCUljFRBm2LdW1te3044ZBYw" class="text-white">
                            <i class="icofont-youtube"></i>
                        </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-10">
                        <div class="toolbar-right justify-content-end d-md-flex text-right d-none">
                            <div class="media align-items-center d-inline-flex">
                                <div class="tolbar-icon mr-1 text-white  justify-content-center  rounded-circle">
                                    <i class="icofont-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <a href="mailto:surendrank@hotmail.com" class="text-default text-white ">surendrank@hotmail.com</a>
                                </div>
                            </div>
                            <div class="media align-items-center  d-inline-flex">
                                <div class="tolbar-icon mr-1 text-white  justify-content-center  rounded-circle">
                                    <i class="icofont-ui-call"></i>
                                </div>
                                <div class="media-body">
                                    <a href="#" class="text-default text-white">+91 98109 43535 / +91 98189 55777</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Toolbar Section -->

        <!-- Start Navigation Section -->
        <nav class="navbar bg-white s-dp-1-3 navbar-sticky type-3 navbar-expand-lg m-navbar bcbd_navbar">
            <div class="container position-relative">
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{ url('/') }}/assets/images/logo.jpg" alt="">
                    </a>
                <div class="burger_menu">
                    <span class="navbar-toggler-icon"></span>
                </div><!-- burger menu -->
               
                <div class="collapse navbar-collapse bcbd_collpase_nav" id="navbarSupportedContent">
                     <div class="nav_outer   mr-auto ml-lg-auto mr-lg-0">
                        <img src="assets/images/logo-white.png" class="d-block d-md-none" alt="">
                          <ul class="navbar-nav bcbd_nav mr-lg-4 ">
                            <li class="nav-item {{ (request()->segment(1) =='home') ? 'active' :'' }}">
                                <a class="nav-link" href="{{ route('home') }}">Home  </a>
                            </li>
                            <li class="nav-item {{ (request()->segment(1) =='about-me') ? 'active' :'' }}">
                                <a class="nav-link" href="{{ route('about-me') }}"> About Me </a>
                            </li>
                            <li class="nav-item {{ (request()->segment(1) =='case-studies') ? 'active' :'' }}">
                                <a class="nav-link" href="{{ route('case-studies') }}"> Case Studies </a>
                            </li>
                            <li class="nav-item {{ (request()->segment(1) =='articles') ? 'active' :'' }}">
                                <a class="nav-link" href="{{ route('articles') }}"> Articles </a>
                            </li>
                            <li class="nav-item {{ (request()->segment(1) =='gallery' || request()->segment(1) =='videos') ? 'active' :'' }}">
                                <a class="nav-link" href="javascript:void(0)"> Gallery </a>
                                <ul class="bcbd_dropdown">
                                    <li>
                                        <a href="{{ route('videos') }}">
                                           Educational Vides
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('gallery') }}">
                                          Photo Gallery
                                        </a>
                                    </li>
                                     
                                </ul>
                            </li>
    <!--                        <li class="nav-item {{ (request()->segment(1) =='blog') ? 'active' :'' }}">
                                <a class="nav-link" href="{{ route('blog') }}"> Blog </a>
                            </li>-->
                            <li class="nav-item {{ (request()->segment(1) =='contact-us') ? 'active' :'' }}">
                                <a class="nav-link" href="{{ route('contact-us') }}"> Contact Us </a>
                            </li>
                        </ul> <!-- navbar nav -->
                    </div> <!-- navbar outer -->
                    <div class="navigation_right_area position-relative d-none d-lg-block  navbar-search  my-lg-0">
                        
                        <a href="{{ route('appointment') }}" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 position-relative solid-btn mt-0 text-medium radius-pill text-active text-uppercase text-white">
                            Appointment
                        </a>
                    </div> 
                </div> <!-- navbar collpase -->
            </div> <!-- container -->
        </nav>
        <!-- Start Navigation Section -->
    </header>