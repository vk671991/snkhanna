<header class="bg-white">
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
</header>