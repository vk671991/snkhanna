@extends('template')
@section('content')

<section class="intro-area type2 m-pt-60 m-bg-1 ">
        <div class="container position-relative m-pb-120">
            <img src="assets/images/doctors-image5.png" class="intro-doctor position-absolute" alt="">
            <div class="row">
                <div class="col-lg-4 col-sm-5 col-md-4">
                    <h2 class="text-dark mb-0 semi-bold pb-5"> 
                        About Me
                    </h2>
                    <p class="mb-4">
                    Associate Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India
                    </p>
                    <div class="media align-items-center text-medium">
                        <i class="icofont-check-circled mr-3 text-active"></i>
                        <div class="media-body">
                            <p class="mb-0 text-medium">Fellow Cardiac Surgeon, San Raffaele Hospital, Milan, Italy.</p>
                        </div>
                    </div>
                    <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">MBBS, M.S, M.Ch, FICS(USA), FIACS, FAMS, FICC.</p>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-5">
                    <div class="intro-box bg-white radius-5">
                        <div class="intro-icon rounded-circle grad-bg--5">
                           <span class="icon-clock text-white"></span>
                        </div>
                        <h3 class="m-text-2 mb-3">WORKING DAYS</h3>
                            <p><span>Mon - Fri: </span>  <span>09:00am - 06:00pm </span></p>
                            <p><span>Saturday: </span>  <span>09:00am - 03:00pm </span></p>
                            <p><span>Sunday: </span>  <span>Emergency Only </span></p>
                    </div>
                </div>

            </div>
        </div>
    </section>

   

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
                        <h4 class="m-text-2 ">Dr. Surendra Nath Khanna </h4>
                        <h6 class="text-light-dark ff-roboto pb-40 mb-0">Associate Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>
                        
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Fellow Cardiac Surgeon, SAN RAFFAELE Hospital, MILAN, ITALY(1998).</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Head of the department – Cardiovascular Thoracic surgery Fortis Hospital NOIDA.</p>
                            </div>
                        </div>
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Associate Director, Cardiac Surgery -Fortis Escorts Heart Institute, New Delhi.</p>
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
                        <h4 class="m-text-2 ">Dr. Surendra Nath Khanna </h4>
                        <h6 class="text-light-dark ff-roboto pb-40 mb-0">Associate Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>
                        
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
                                <p class="mb-0 text-medium">Senior Proficiency Certificate- Sept.1977- Indian Council for International Amity.</p>
                            </div>
                        </div>
                        
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Senior Proficiency Certificate- Sept.1979 - Indian Council for International Amity.</p>
                            </div>
                        </div>
                        
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Award for Incomparable.</p>
                            </div>
                        </div>
                        <a href="{{ route('about-me') }}" class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-3 text-medium radius-pill text-active text-uppercase text-white">
                            View more
                        </a>
                    </div>
                    <div class="tab-pane fade" id="eye-care" role="tabpanel" >
                        <h4 class="m-text-2 ">Dr. Surendra Nath Khanna </h4>
                        <h6 class="text-light-dark ff-roboto pb-40 mb-0">Associate Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>
                        
                        <div class="media align-items-center text-medium">
                            <i class="icofont-check-circled mr-3 text-active"></i>
                            <div class="media-body">
                                <p class="mb-0 text-medium">Fellow Cardiac Surgeon,SAN RAFFAELE HOSPITAL,MILAN,ITALY.</p>
                            </div>
                        </div>
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
                                <p class="mb-0 text-medium">FICS(USA),FIACS,FAMS,FICC.</p>
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
<!-- End Section -->
<section class="m-pt-40 m-bg-1 m-pb-40">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12">
                <h4 class="m-text-2 m-mb-30">Certifications</h4>
            </div>
        </div>
        <div class="row grid ">
            
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/maharashtra-medical-council-bombay-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover="  Maharashtra Medical Council License ">   Maharashtra Medical Council License   </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/maharashtra-medical-council-bombay-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/ima-academy-of-medical-specialities-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover="  Master of Chirurgiae (M.Ch.)  ">   Master of Chirurgiae (M.Ch.)  </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/ima-academy-of-medical-specialities-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/university-of-lucknow-bachelor-of-medicine-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover="   Bachelor Of Medicine & Bachelor Of Surgery  ">   Bachelor Of Medicine & Bachelor Of Surgery   </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/university-of-lucknow-bachelor-of-medicine-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/university-of-lucknow-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover="  Master of Surgery (M.S.) ">   Master of Surgery (M.S.)   </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/university-of-lucknow-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/the-society-of-thoracic-surgeons-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover=" The Society Of Thoracic Surgeons "> The Society Of Thoracic Surgeons  </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/the-society-of-thoracic-surgeons-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/Lucknow-vishwavidyalay-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover=" Master of Surgery (M.S.)    ">  Master of Surgery (M.S.)  </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/Lucknow-vishwavidyalay-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/indira-gandhi-technological-and-medical-univesity-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover=" Indira Gandhi Technological and Medical Sciences Univesity ">   Indira Gandhi Technological and Medical Sciences Univesity </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/indira-gandhi-technological-and-medical-univesity-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/fiacs-fellow-of-the-associatioon-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover="  Fellow Indian Association of Cardiovascular-thoracic Surgeons (FIACS) ">   Fellow Indian Association of Cardiovascular-thoracic Surgeons (FIACS)  </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/fiacs-fellow-of-the-associatioon-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            
        </div>
        
    </div>
</section>
@endsection