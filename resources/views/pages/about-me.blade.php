@extends('template')
@section('content')

<!-- Start Section -->
<div class=" position-relative set-bg breadcrumb-container" data-bg="{{ url('/') }}/assets/images/breadcrumb-img1.jpg">
    <div class="overlay op-P9"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-inner align-items-start flex-column justify-content-center   d-flex ">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Section -->

<!-- Start Section -->
<div class="m-bg-1 single-doctor-container type-2 m-pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="doctors-image mb-1 d-inline-block bg-white rounded-circle p-2 s-10-80">
                    <img src="{{ url('/') }}/assets/images/doctors-image5.jpg" alt="">
                </div>
                <h3 class="text-dark mt-4 font-weight-bold">Dr. S N Khanna</h3>
                <h6 class="fz-18 text-uppercase font-weight-normal">Associate Director, Department of Cardiovascular Surgery, Fortis Escorts Heart Institute, New Delhi, India</h6>
                <div class="social-icon mt-3 circle-link position-relative">
                    <a href="https://www.facebook.com/surendra.khanna.14" class="text-default bg-white rounded-circle s-dp-1-3-15">
                        <i class="icofont-facebook"></i>
                    </a>
                    <a href="https://twitter.com/SSurendrank" class="text-default bg-white rounded-circle s-dp-1-3-15">
                        <i class="icofont-twitter"></i>
                    </a>
                    <a href="https://in.linkedin.com/in/dr-prof-surendra-nath-khanna-0611b675" class="text-default bg-white rounded-circle s-dp-1-3-15">
                        <i class="icofont-linkedin"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UCUljFRBm2LdW1te3044ZBYw" class="text-default bg-white rounded-circle s-dp-1-3-15">
                        <i class="icofont-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row m-mb-60 m-mt-60 ">
            <div class="col-md-4">
                <div class="bg-white mb-0 position-relative has-float-icon pt-4 pl-4 pb-4 pr-4 info-box m-mtb-20  radius-5">
                    <span class="position-absolute flaot-icon">
                        <i class="icofont-stethoscope-alt text-active"></i>
                    </span>
                    <h5 class="m-text-2 mb-3 text-uppercase">Education</h5>
                    <div class="media ">
                        <div class="media-body">
                            <p class="m-0 ">MBBS, M.S, M.Ch,FICS(USA),FIACS,FAMS,FICC.</p>
                            <p class="m-0 ">Fellow Cardiac Surgeon,SAN RAFFAELE HOSPITAL,MILAN,ITALY.</p>
                        </div>
                    </div>
                </div> <!-- col-->
            </div> <!-- col-->
            <div class="col-md-4">
                <div class="bg-white position-relative has-float-icon pt-4 pl-4 pb-4 pr-4 info-box m-mtb-20  radius-5">
                    <span class="position-absolute flaot-icon">
                        <i class="icofont-stethoscope-alt"></i>
                    </span>
                    <h5 class="m-text-2 mb-3 text-uppercase">WORKING DAYS</h5>
                    <div class="media ">
                        <div class="media-body">
                            <p class="m-0 ">Monday – Friday : 9am to 6pm</p>
                            <p class="m-0 ">Saturday  : 9am to 3pm</p>
                            <p class="m-0 ">Sunday  :  Emergency Only</p>
                        </div>
                    </div>
                </div> <!-- col-->
            </div> <!-- col-->
            <div class="col-md-4">
                <div class="bg-white position-relative has-float-icon pt-4 pl-4 pb-4 pr-4 info-box m-mtb-20  radius-5">
                    <span class="position-absolute flaot-icon">
                        <i class="icofont-stethoscope-alt"></i>
                    </span>
                    <h5 class="m-text-2 mb-3 text-uppercase">CONTACT ADDRESS</h5>
                    <div class="media ">
                        <div class="media-body">
                            <p class="m-0 ">Phone: +91 98109 43535 / <br>+91 98189 55777
                                <br>
                                E-mail: surendrank@hotmail.com</p>
                        </div>
                    </div>
                </div> <!-- col-->
            </div> <!-- col-->
        </div><!-- row-->
    </div>
</div>
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
                            Dr. Surendra Nath Khanna is the Associate Director, Department of Cardiovascular Surgery, Fortis
                            Escorts Heart Institute, New Delhi, India. He specialises in all types of adult cardiac surgical work.
                            He is one of the leading and most experienced cardiac surgeon with expertise in Beating Heart
                            Surgeries, Cardiac Valvular Surgery--Mitral Valve, Aortic Valve, Tricuspid valve, Double Valve
                            Replacements and Redo-valve surgeries. He also has special interest in Valve Repairs, Minimally
                            Invasive Cardiac Surgery, Aortic Aneurysm Surgery, and Heart-Failure Surgery. His has relentless
                            quest to bring the best in cardiac surgery to India and within the reach of common man.
                        </p>
                        <p>
                            He is a Graduate of King George&#39;s Medical College, Lucknow. After completing his MS (Gen.
                            Surgery) he was trained in cardiac surgery at King Edward Memorial Hospital, Mumbai; Christian
                            Medical College, Vellore. Thereafter he went abroad and was trained under Prof. Ottavio Alfieri,
                            internationally known for his pioneering work in heart valve techniques.
                        </p>
                        <p>Dr. Surendra Nath Khanna has been practicing cardiac surgery since the last 26 years. He has carried out more than 17,000 cardiac surgeries. He has been working as Consultant cardiac surgeon at various prestigious hospitals which includes San Raffaele Hospital, Milan, Italy; where he was trained under Prof. Ottavio Alfieri, internationally reknowned for his pioneering techniques in valve repairs and valve surgery in severe left ventricular dysfunction. He has worked with Luminaries like Prof Stanley John. His work experience encompasses operating at prestigious centres which include- King Edward Memorial Hospital, Mumbai; Christian Medical College, Vellore; Max Heart and research Institute, New Delhi and Fortis Escorts Heart Institute New Delhi.</p>
                        <p>He is passionately involved in the Community Outreach Services and creating mass awareness toward cardiac diseases for last 26 years. He has been regularly reaching out to the masses of India, a fact which has been widely acknowledged by media and society at large. He has rendered free cardiac care in far and remote areas on North India.</p>
                        <p>His experience in cardiac surgery amalgamated with quest to train junior cardiac surgeon in India. Dr. Khanna has trained many cardiac surgeons from various parts of India and is actively involved in training the undergraduate and post-graduate students. He also has a keen interest in academic and research work, which includes publications in various reputed international journals.He has been invited as speaker on many international forums.</p>

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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->
@endsection