@extends('template')
@section('css')
<link rel="stylesheet" href="{{ url('/') }}/assets/css/skdslider.css">
@stop
@section('content')
<!-- Start Banner Section -->
<div class="grad-bg--2 banenr position-relative type-1 no-overflows" style="background: url('assets/images/fortis-hospital.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div id="imageSlider">
        <div class="slide">
            <img src="{{ url('/') }}/assets/images/milan.jpg" />
             <div class="slide-desc">
                <h2>Dr.(Prof.) Surendra Nath Khanna</h2>
                <p>Internationally known for his pioneering work in heart valve techniques and coronary artery bypass grafting</p>
            </div>
        </div>
        <div class="slide">
            <img src="{{ url('/') }}/assets/images/fortis.jpg" />
             <div class="slide-desc">
                <h2>Dr.(Prof.) Surendra Nath Khanna</h2>
                <p>Internationally known for his pioneering work in heart valve techniques and coronary artery bypass grafting</p>
            </div>
        </div>
        <div class="slide">
            <img src="{{ url('/') }}/assets/images/kemh.jpg" />
             <div class="slide-desc">
                <h2>Dr.(Prof.) Surendra Nath Khanna</h2>
                <p>Internationally known for his pioneering work in heart valve techniques and coronary artery bypass grafting</p>
            </div>
        </div>
        <div class="slide">
            <img src="{{ url('/') }}/assets/images/vellore.jpg" />
             <div class="slide-desc">
                <h2>Dr.(Prof.) Surendra Nath Khanna</h2>
                <p>Internationally known for his pioneering work in heart valve techniques and coronary artery bypass grafting</p>
            </div>
        </div>
        <div class="slide">
            <img src="{{ url('/') }}/assets/images/max.jpg" />
             <div class="slide-desc">
                <h2>Dr.(Prof.) Surendra Nath Khanna</h2>
                <p>Internationally known for his pioneering work in heart valve techniques and coronary artery bypass grafting</p>
            </div>
        </div>
    </div>
</div> <!-- Banenr Section -->
<!-- Start Banner Section -->



<!-- Start Department Section -->
<section class="m-bg-1 intro-area type-1 position-relative">
    <div class="intro-overlay position-absolute set-bg" data-bg="assets/images/intro-bg.jpg" ></div>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="department-tab-pill m-pt-60  m-pb-60 position-relative ">
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
                                Expertise
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
                <div class="tab-content m-pt-60 m-pb-60 " >
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" >
                        <h4 class="m-text-2 ">Dr.(Prof.) Surendra Nath Khanna </h4>
                        <h6 class="text-light-dark ff-roboto pb-40 mb-0"> Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>
                        <p class="m-mb-30">He has been practicing cardiac surgery since the last 30years. He has carried out more than 17,000 cardiac surgeries. He has been working as Consultant cardian surgen at various prestigious hospitals which includes San Raffaele Hospital, Milan, Italy; where he was trained under Prof. Ottavio Alfieri, internationally renowned for his pioneering techniques in valve repairs and valve surgery in servere left ventricular dysfunctionality. <br>
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
                        <h4 class="m-text-2 ">Dr.(Prof.) Surendra Nath Khanna </h4>
                        <h6 class="text-light-dark ff-roboto pb-40 mb-0">Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Coronary Artery Bypass Graft Surgery.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Valve replacement and repair.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Minimal Invasive Cardiac Surgery.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Off Pump Coronary Artery Bypass Surgery.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Complex Valve Replacement and Repair.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">CABG in patients with poor ventricular function. Beating Heart CABG.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Valvular Heart surgery (Trained under Prof. Dr. Ottavio Alfieri,pioneer in valve surgery).</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Aortic Surgery.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Heart Failure surgery.</p>
                            </div>
                        </div>

                        <a href="{{ route('about-me') }}" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                            View more
                        </a>
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" >
                        <h4 class="m-text-2 ">Dr.(Prof.) Surendra Nath Khanna </h4>
                        <h6 class="text-light-dark ff-roboto pb-40 mb-0"> Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>
                        
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Fellow Cardiac Surgeon, SAN RAFFAELE Hospital, MILAN, ITALY(1998).</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium"> Director, Cardiac Surgery -Fortis Escorts Heart Institute, New Delhi. (2015 to till date)</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Head of the department – Cardiovascular Thoracic surgery Fortis Hospital NOIDA.(2014-2015)</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Principal Consultant- Cardiac Surgery -Escorts Heart Institute, New Delhi.(2010-2014).</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Senior Consultant Cardiac Surgeon- Max Heart Institute, New Delhi (2006 -2010).</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Senior Consultant Cardiac Surgeon, Escorts Heart Institute & Research Centre, New Delhi (1995-2006).</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Head of the department of Cardio Vascular Thoracic Surgeon, Escorts Heart Centre, Kanpur (2004- 2005).</p>
                            </div>
                        </div>

                        <a href="{{ route('about-me') }}" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                            View more
                        </a>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" >
                        <h4 class="m-text-2 ">Dr.(Prof.) Surendra Nath Khanna </h4>
                        <h6 class="text-light-dark ff-roboto pb-40 mb-0"> Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>
                        
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Award of Excellence in Cardiology from World Congress on clinical,Preventive,Geriatric Cardiology and Imaging (WCCPGCI 2010)-, October 24,2010.</p>
                            </div>
                        </div>
                        
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Honorary Professor Faculty of Medical Sciences,Indira Gandhi Technological and Medical Scinces University, Arunachal Pradesh.</p>
                            </div>
                        </div>
                        
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Distinguished Service Award- Heart Care Foundation of India BSNL Dl ka Darbar – September 26,2010.</p>
                            </div>
                        </div>
                        
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">National Excellence Award – Heart Care Foundation of India MTNL Perfect Health Mela – Oct 23rd 2011.</p>
                            </div>
                        </div>
                        
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Senior Proficiency Certificatem- Indian Council for International Amity.</p>
                            </div>
                        </div>
                        
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Senior Proficiency Certificate- Indian Council for International Amity.</p>
                            </div>
                        </div>
                        
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Award for Incomparable for contribution to humanity.</p>
                            </div>
                        </div>
                        <a href="{{ route('about-me') }}" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                            View more
                        </a>
                    </div>
                    <div class="tab-pane fade" id="eye-care" role="tabpanel" >
                        <h4 class="m-text-2 ">Dr.(Prof.) Surendra Nath Khanna </h4>
                        <h6 class="text-light-dark ff-roboto pb-40 mb-0"> Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Bachelor of Medicine & Bachelor of Surgery (MBBS), Lucknow University,India,1986.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Master of Surgery (M.S), General Surgery, King’s Medical College,Lucknow,India,1990.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Master of Chirugerie (M.Ch),Cardiovascular & Thoracic Surgery,Mumbai University,India,1995.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Fellow Cardiac Surgeon,SAN RAFFAELE HOSPITAL,MILAN,ITALY (1998)</p>
                            </div>
                        </div>  
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Fellow, International College of Surgeons (USA) FICS(USA)  2000.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Fellow, Indian Association of Cardiovascular & Thoracic Surgeons FIACS  2001.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Fellow, Academy of Medical Specialities FAMS 2004.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Fellow, Indian College of Cardiology FICC  2012.</p>
                            </div>
                        </div>

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

<div class="m-bg-1 m-pt-40 m-pb-40">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="appoint-card shadow border-light type-3 radius-20 bg-white  position-relative m-pt-50 m-pb-160 ">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="m-text-2 pb-35 mb-0">Make Appointment</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control fz-poppins m-mb-20" placeholder="Your Name:">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control fz-poppins m-mb-20" placeholder="Your Phone:">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control fz-poppins m-mb-20" placeholder="Your Mail:">
                                </div>
                                <div class="col-md-6">
                                    <div class="position-relative m-mb-20">
                                        <label   class="position-absolute m-label">
                                            <i class="icofont-calendar"></i>
                                        </label>
                                        <input type="text" placeholder="Booking Date:" class="form-control fz-poppins datepicker" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="transactiondid" class="form-control m-mb-20" required="" placeholder="Transaction Id:">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <button  class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-2 text-medium radius-pill text-active text-uppercase text-white">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- appoint-card -->
            </div>
            <div class="col-md-4">
                <div class="bg-white shadow pt-4 pl-4 pb-4 pr-4 info-box m-mb-20  radius-5">
                    <h5 class="m-text-2 mb-3">Payment Details</h5>
                    <div class="media ">
                        <div class="media-body">
                            <img src="{{ url('/') }}/assets/images/doctor-img.png" alt="">
                        </div>
                    </div>
                </div> <!-- col-->
            </div>
        </div>
    </div>
</div>



<!-- Start recent post Section -->
<section class="m-bg-1 m-pt-60 m-pb-60 recent-post-area type-1">
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
@section('script')
<script src="{{ url('/') }}/assets/js/skdslider.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#imageSlider').skdslider({
          slideSelector: '.slide',
          delay:3000, 
          animationSpeed: 1000,
          showNextPrev:true,
          showPlayButton:false,
          autoSlide:true,
          animationType:'sliding'
        });
    });
</script>
@stop
@endsection