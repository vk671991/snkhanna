@extends('template')
@section('content')
<!-- Start Banner Section -->
<div class="grad-bg--2 banenr position-relative type-1 no-overflows">
    <div class="circle"></div> 
    <div class="circle2"></div>
    <div class="circle3"></div>
    <div class="circle4"></div>
    <div class="container position-relative">
        <img src="{{ url('/') }}/assets/images/banner-img.png" class="banner-image position-absolute" alt="banenr image">
        <div class="row">
            <div class="col-md-12">
                <div class="banenr-slider">
                    <div class="single-banenr-slide">
                        <div class="row">
                            <div class="col-xl-5 col-sm-8 col-md-6">
                                <h6 class="ml12 text-white text-uppercase fadeInDown-slide animated">Cardiac Surgery/ Cardio Thoracic Vascular Surgery</h6>
                                <h1 class="text-white font-weight-bold mb-4 fadeInDown-slide animated">Dr. Surendra Nath Khanna</h1>
                                <p class="text-white fadeInDown-slide animated">
                                    Dr. Surendra Nath Khanna is the Associate Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India. 
                                </p>
                                <div class="xs-flex">
                                    <a href="{{ route('about-me') }}" class="btn fadeInDown-slide animated  medim-btn btn-bordered-white mt-4 text-medium radius-pill bg-transparent text-active text-uppercase text-white">
                                        About Us
                                    </a>
                                    <a href="{{ route('appointment') }}" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-4 text-medium radius-pill text-active text-uppercase text-white">
                                        Appointment
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single-banenr-slide -->
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- Banenr Section -->
<!-- Start Banner Section -->



<!-- Start Department Section -->
<section class="m-bg-1 intro-area type-1 position-relative">
    <div class="intro-overlay position-absolute set-bg" data-bg="assets/images/intro-bg.jpg" ></div>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="department-tab-pill m-pt-140  m-pb-140 position-relative ">
                    <h2 class="text-white pb-md-5">
                        About 
                        <br>
                        Doctor
                    </h2>
                    <div class="nav  pt-md-0 flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active"  data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <i class="icofont-doctor"></i>
                            <span>
                                About Me
                            </span>
                        </a>
                        <a class="nav-link"  data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <i class="icofont-bullseye"></i>
                            <span>
                                Speciality
                            </span>
                        </a>
                        <a class="nav-link"  data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <i class="icofont-badge"></i>
                            <span>
                                Experience
                            </span>
                        </a>
                        <a class="nav-link"  data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="icofont-trophy-alt"></i>
                            <span>
                                Awards
                            </span>
                        </a>
                        <a class="nav-link"  data-toggle="pill" href="#eye-care" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                            <i class="icofont-education"></i>
                            <span>
                                Education
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content m-pt-140 m-pb-140 " >
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" >
                        <h4 class="m-text-2 ">Dr. Surendra Nath Khanna </h4>
                        <h6 class="text-light-dark ff-roboto pb-40 mb-0">Associate Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>
                        <p class="m-mb-30">
                            He specialises in all types of adult cardiac surgical work. He is one of the leading and most experienced cardiac surgeon with expertise in Beating Heart Surgeries, Cardiac Valvular Surgery--Mitral Valve, Aortic Valve, Tricuspid valve, Double Valve Replacements and Redo-valve surgeries. He also has special interest in Valve Repairs, Minimally Invasive Cardiac Surgery, Aortic Aneurysm Surgery, and Heart-Failure Surgery. His has relentless quest to bring the best in cardiac surgery to India and within the reach of common man.
                        </p>
                        <p>
                            He is a Graduate of King George's Medical College, Lucknow. After completing his MS (Gen. Surgery) he was trained in cardiac surgery at King Edward Memorial Hospital, Mumbai; Christian Medical College, Vellore. Thereafter he went abroad and was trained under Prof. Ottavio Alfieri, internationally known for his pioneering work in heart valve techniques.
                        </p>
                        <a href="{{ route('about-me') }}" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                            View more
                        </a>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" >
                        <h4 class="m-text-2 ">Dr. Surendra Nath Khanna </h4>
                        <h6 class="text-light-dark ff-roboto pb-40 mb-0">Associate Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>

                        <ul>
                            <li>Coronary Artery Bypass Graft Surgery.</li>	
                            <li>Valve replacement and repair.</li>	
                            <li>Minimal Invasive Cardiac Surgery. </li>	
                            <li>Off Pump Coronary Artery Bypass Surgery.</li>	
                            <li>Complex Valve Replacement and Repair.</li>	
                            <li>CABG in patients with poor ventricular function. Beating Heart CABG.</li>	
                            <li>Valvular Heart surgery (Trained under Prof. Dr. Ottavio Alfieri,pioneer in valve surgery).</li>	
                            <li>Aortic Surgery.</li>	
                            <li>Heart Failure surgery.</li>	
                        </ul>

                        <a href="{{ route('about-me') }}" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                            View more
                        </a>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" >
                        <h4 class="m-text-2 ">Dr. Surendra Nath Khanna </h4>
                        <h6 class="text-light-dark ff-roboto pb-40 mb-0">Associate Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>

                        <ul>
                            <li>Head of the department – Cardiovascular Thoracic surgery Fortis Hospital NOIDA.</li>	
                            <li>Associate Director, Cardiac Surgery -Fortis Escorts Heart Institute, New Delhi.</li>	
                            <li>Principal Consultant- Cardiac Surgery -Escorts Heart Institute, New Delhi.(2010-2014).</li>	
                            <li>Senior Consultant Cardiac Surgeon- Max Heart Institute, New Delhi (2006 -2010).</li>	
                            <li>Senior Consultant Cardiac Surgeon, Escorts Heart Institute & Research Centre, New Delhi (1995-2006).</li>	
                            <li>Head of the department of Cardio Vascular Thoracic Surgeon, Escorts Heart Centre, Kanpur (2004- 2005).</li>	
                            <li>Fellow Cardiac Surgeon, SAN RAFFAELE Hospital, MILAN, ITALY(1998).</li>	
                        </ul>

                        <a href="{{ route('about-me') }}" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                            View more
                        </a>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" >
                        <h4 class="m-text-2 ">Dr. Surendra Nath Khanna </h4>
                        <h6 class="text-light-dark ff-roboto pb-40 mb-0">Associate Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>

                        <ul>
                            <li>Award of Excellence in Cardiology from World Congress on clinical,Preventive,Geriatric Cardiology and Imaging (WCCPGCI 2010)-, October 24,2010.</li>	
                            <li>Honorary Professor Faculty of Medical Sciences,Indira Gandhi Technological and Medical Scinces University, Arunachal Pradesh.</li>	
                            <li>Distinguished Service Award- Heart Care Foundation of India BSNL Dl ka Darbar – September 26,2010.</li>	
                            <li>National Excellence Award – Heart Care Foundation of India MTNL Perfect Health Mela – Oct 23rd 2011.</li>	
                            <li>Senior Proficiency Certificate- Sept.1977- Indian Council for International Amity.</li>	
                            <li>Senior Proficiency Certificate- Sept.1979 - Indian Council for International Amity.</li>	
                            <li>Award for Incomparable.</li>	
                        </ul>
                        <a href="{{ route('about-me') }}" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                            View more
                        </a>
                    </div>
                    <div class="tab-pane fade" id="eye-care" role="tabpanel" >
                        <h4 class="m-text-2 ">Dr. Surendra Nath Khanna </h4>
                        <h6 class="text-light-dark ff-roboto pb-40 mb-0">Associate Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>

                        <ul>
                            <li>Bachelor of Medicine & Bachelor of Surgery (MBBS), Lucknow University,India,1986.</li>	
                            <li>Master of Surgery (M.S), General Surgery, King’s Medical College,Lucknow,India,1990.</li>	
                            <li>Master of Chirugerie (M.Ch),Cardiovascular & Thoracic Surgery,Mumbai University,India,1995.</li>	
                            <li>FICS(USA),FIACS,FAMS,FICC.</li>	
                            <li>Fellow Cardiac Surgeon,SAN RAFFAELE HOSPITAL,MILAN,ITALY.</li>	
                        </ul>






                        <a href="{{ route('about-me') }}" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                            View more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Department Section -->


<!-- Start About Section -->
<section class="m-pt-135  position-relative set-bg" data-bg="assets/images/bg-img1.jpg">
    <div class="overlay op-P9"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="text-center pb-75">
                    <p class="m-0 text-white  text-uppercase  lt-space">Book an appointment for a consultation</p>
                    <h2 class="m-0  text-white ">Book Appointment</h2>
                    <span class="icon-section-wave d-inline-block text-white section-wave mt-3"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 perspective--400">
                <div class="appoint-card radius-20 bg-white  position-relative m-pt-70 m-pb-70 s-10-80">
                    <img src="{{ url('/') }}/assets/images/doctor-img.png" alt="">
                    <form action="{{ route('appointment') }}">
                        <div class="row">

                            <div class="col-lg-7 offset-lg-5  col-md-9 offset-md-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control m-mb-20" required="" placeholder="Your Name:">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone" class="form-control m-mb-20" required="" placeholder="Your Phone:">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email" class="form-control m-mb-20" required="" placeholder="Your Mail:">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="position-relative m-mb-20">
                                            <label  class="position-absolute m-label">
                                                <i class="icofont-calendar"></i>
                                            </label>
                                            <input type="text" name="date"  placeholder="Date:" required="" class="form-control datepicker " >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="transactiondid" class="form-control m-mb-20" required="" placeholder="Transaction Id:">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="pt-2">
                                            Please Call Us:  <a href="javascript:void(0)" class="text-active d-inline-block pl-3 fz-poppins">+91 98109 43535 /<br> +91 98189 55777</a>
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn text-medium radius-pill  text-uppercase text-white">
                                            make appointment
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> <!-- appoint-card -->
            </div>
        </div>
    </div>
</section>
<!-- Start About Section -->

<!-- Start recent post Section -->
<section class="m-bg-1 m-pt-275 m-pb-60 recent-post-area type-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="text-center pb-75 ">
                    <p class="m-0  text-uppercase text-light-dark lt-space">Aricles</p>
                    <h2 class="m-0  text-dark">Recent Posts</h2>
                    <span class="icon-section-wave d-inline-block text-active section-wave mt-3"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div  class="media align-items-center recent-post-wraper type-1">

                    <a href="{{ route('articles.papers-published-by-dr-s-n-khanna') }}" class="mr-0">
                        <img class=" lt-radius-25 lb-radius-25" src="{{ url('/') }}/assets/images/recent-post-sm-img1.jpg" alt="Papers Published By Dr. S.N Khanna">
                    </a>
                    <div class="media-body h-dp-10-60 bg-white type1-post pt-40 pb-40 rt-radius-25 rb-radius-25 pr-50 pl-25 s-dp-1-3">
                        <div class="post-meta">
                            <p class="fz-14 text-default mb-1"> <a href="{{ route('articles.papers-published-by-dr-s-n-khanna') }}" class="text-default">7 June, 2020</a> </p>
                        </div>
                        <a href="{{ route('articles.papers-published-by-dr-s-n-khanna') }}">
                            <h5 class="mt-0 text-dark2 text-medium">Papers Published By Dr. S.N Khanna</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div  class="media align-items-center recent-post-wraper type-1">

                    <a href="{{ route('articles.docs-revive-50-year-old-bypass-patient-dead-for-30-minutes') }}" class="mr-0">
                        <img class=" lt-radius-25 lb-radius-25" src="{{ url('/') }}/assets/images/recent-post-sm-img2.jpg" alt="Doctors revive 50 year old bypass patient dead for 30 minutes">
                    </a>
                    <div class="media-body h-dp-10-60 bg-white type1-post pt-40 pb-40 rt-radius-25 rb-radius-25 pr-50 pl-25 s-dp-1-3">
                        <div class="post-meta">
                            <p class="fz-14 text-default mb-1"> <a href="{{ route('articles.docs-revive-50-year-old-bypass-patient-dead-for-30-minutes') }}" class="text-default">7 June, 2020</a> </p>
                        </div>
                        <a href="{{ route('articles.docs-revive-50-year-old-bypass-patient-dead-for-30-minutes') }}">
                            <h5 class="mt-0 text-dark2 text-medium">Doctors revive 50 year old bypass patient dead for 30 minutes</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End recent post Section -->
@endsection