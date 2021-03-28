@extends('template')
@section('content')
<!-- Start Section -->
<section class=" position-relative set-bg breadcrumb-container" data-bg="{{ url('/') }}/assets/images/breadcrumb-img1.jpg">
    <div class="overlay op-P9"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-inner align-items-start flex-column justify-content-center   d-flex ">
                    <h3 class="semi-bold text-uppercase text-white">Case Studies</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pl-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('case-studies') }}">Case Studies</a></li>  
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('case-studies') }}">Case Study 1</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Section -->
<section class="m-bg-1 m-pt-140 m-pb-120 m-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="department-imag radius-5 s-dp-1-3 bg-white">
                                    <img src="{{ url('/') }}/assets/images/diabetic-foot.jpg" alt="" style="width: 100%">
                                </div>                   
                            </div>
                            <div class="col-md-7">
                                <div>
                                    <h4 class="m-text-2 ">Concomitant off- pump cabg & below knee amputation in a patient with critical left main coronary artery disease and severe septic diabetic foot- a case report</h4>
                                    <h6 class="text-light-dark ff-roboto pb-40 mb-0">SurendraNath Khanna, Anil Karlekar, K.K Sharma Departments of Cardiac Surgery, Escorts Heart Institute and Research Centre Ltd., New Delhi, India</h6>
                                    <p class="mb-4">
                                        <h6 class="text-light-dark ff-roboto pb-40 mb-0">Abstract</h6>
                                        Severe Left Main coronary artery disease with a Septic diabetic foot is an uncommon and challenging clinical problem. In such patients, if angioplasty is not feasible (as left main), the coronary artery lesions can be treated in a staged or a combined operation. We present the case of a patient operated on for below knee amputation and off pump CABG in a one-stage procedure.
                                    </p>
                                    <p>
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                                    </p>
                                    <p>
                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Case Report</h5>
                                        <p class="mb-2"> A 57-year-old man presented with angina and a diabetic foot on Right leg (Figure 1) with Uncontrolled diabetes. Preoperative coronary angiography showed Distal Left Main stenosis, proximal Total occlusion of left anterior descending artery (LAD), Proximal 80 % stenosis of Dominant left circumflex and the diffusely diseased Non dominant right coronary artery (RCA). On routine Echo-cardiogram LV was found to be severely impaired. The Computed Tomography (CT) of Lower limb revealed severe lesions in Right Anterior Tibial and Posterior Tibial arteries with Multiple Abscesses on Right foot. Carotid Doppler showed Right Internal carotid artery 70% stenosis and Left Internal Carotid artery 40 % stenosis.</p>
                                        <p> As the leg was Severely infected (with multiple abscess) and life-threatening coronary pathology such as left main coronary artery stenosis, Severe Triple Vessel Disease with Severe LV dysfunction and Persistent Angina Pectoris symptoms, it was decided to do right Below knee amputation with Coronary Revascularization in Single Stage to improve his quality of life.</p>
                                        <p>Patient was induced well and Right Below knee amputation was done by Orthopedic team. Through a standard median sternotomy and Intra Aortic Balloon Pump support (as Severe LV Dysfunction) LAD, Ramus Intermedius and second Obtuse Marginal branch of the Circumflex anastomosis were performed on beating heart using Saphenous vein grafts. The left internal mammary artery (LIMA) was not used because of Severe LV Dysfunction and calcific LAD. Good antibiotic therapy was given and the patient was discharged on the 7th postoperative day.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Discussion</h5>
                                        <p class="mb-2">Concomitant CABG and below knee amputation are uncommon. Coronary angioplasty, if feasible, should be the first choice of therapy for such patients. Some studies suggest that staged operations are preferable because of shorter operation time and less technical complexity; accordingly, only patients who cannot be waited pathologically and symptomatically upto a second operation should undergo a combined procedure (1). However, the time delay in staged operations with Critical Coronary Disease may result in worsening ischemia (2, 3) and may be fatal who are treated for diabetic foot first. On the other hand, if the CABG operation is carried out first, it may result in spreading of infection throughout body which may end up in septicemia. Additionally, the need for a second operation means, overall, longer hospital stay and higher costs. For these reasons, combined surgery that includes off-pump CABG is becoming more common.</p>                                        <p>In a combined operation, below knee amputation should be done first, because the chance of spreading of infection is high, but should be prepared to do Emergency CABG too because of Critical CAD. Sequencing the procedures this way reduces postoperative morbidity and mortality. To the best of our knowledge, simultaneous surgical management as presented in this patient has rarely been reported.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Refrences</h5>
                                        <p class="mb-2">
                                        <ul>
                                            <li>Combined operation for lung cancer and cardiac disease. Ann Thorac Surg 1994;58:989–93. Miller DL, Orszulak TA, Pairolero PC, Trastek VF, Schaff HV.</li>
                                            <li>Risk of noncardiac operation in patients with defined coronarydisease: The Coronary Artery Surgery Study (CASS) Registry Experience. Ann Thorac Surg 41:42-50 Foster ED, Davis KB, Carpentier JA, Abele S, Fray D (1986)</li>
                                            <li>A prospective study of risk factors and cardiopulmonary complications associated with anaesthesia and surgery: risk indicators of cardiopulmonary morbidity. Acta Anaesthesiol Scand. 1990 Pedersen T, Eliasen K, Henriksen E (1990)</li>
                                            <li>Coronary-Artery Revascularization before Elective Major Vascular Surgery. New England Journal Of Medicine 2004; 351:2795-2804</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="department-imag radius-5 s-dp-1-3 bg-white">
                                    <img src="{{ url('/') }}/assets/images/department-img2.jpg" alt="">
                                </div>                   
                            </div>
                            <div class="col-md-7">
                                <div>
                                    <h4 class="m-text-2 ">Department of Diagnostics</h4>
                                    <h6 class="text-light-dark ff-roboto pb-40 mb-0">We are the Best in Neurology</h6>
                                    <p class="mb-4">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                                    </p>
                                    <p>
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                                    </p>
                                    <p>
                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1 ">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="department-imag radius-5 s-dp-1-3 bg-white">
                                    <img src="{{ url('/') }}/assets/images/department-img3.jpg" alt="">
                                </div>                   
                            </div>
                            <div class="col-md-7">
                                <div>
                                    <h4 class="m-text-2 ">Department of Cardiology</h4>
                                    <h6 class="text-light-dark ff-roboto pb-40 mb-0">We are the Best in Neurology</h6>
                                    <p class="mb-4">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                                    </p>
                                    <p>
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                                    </p>
                                    <p>
                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1 ">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>               
                    </div>
                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="department-imag radius-5 s-dp-1-3 bg-white">
                                    <img src="{{ url('/') }}/assets/images/department-img4.jpg" alt="">
                                </div>                   
                            </div>
                            <div class="col-md-7">
                                <div>
                                    <h4 class="m-text-2 ">Department of Optometrist</h4>
                                    <h6 class="text-light-dark ff-roboto pb-40 mb-0">We are the Best in Neurology</h6>
                                    <p class="mb-4">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                                    </p>
                                    <p>
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                                    </p>
                                    <p>
                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1 ">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>               
                    </div>
                    <div class="tab-pane fade" id="tab5" role="tabpanel">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="department-imag radius-5 s-dp-1-3 bg-white">
                                    <img src="{{ url('/') }}/assets/images/department-img5.jpg" alt="">
                                </div>                   
                            </div>
                            <div class="col-md-7">
                                <div>
                                    <h4 class="m-text-2 ">Department of Phycology</h4>
                                    <h6 class="text-light-dark ff-roboto pb-40 mb-0">We are the Best in Neurology</h6>
                                    <p class="mb-4">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                                    </p>
                                    <p>
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                                    </p>
                                    <p>
                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1 ">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>               
                    </div>
                    <div class="tab-pane fade" id="tab6" role="tabpanel">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="department-imag radius-5 s-dp-1-3 bg-white">
                                    <img src="{{ url('/') }}/assets/images/department-img6.jpg" alt="">
                                </div>                   
                            </div>
                            <div class="col-md-7">
                                <div>
                                    <h4 class="m-text-2 ">Department of Gerontology</h4>
                                    <h6 class="text-light-dark ff-roboto pb-40 mb-0">We are the Best in Neurology</h6>
                                    <p class="mb-4">
                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. 
                                    </p>
                                    <p>
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                                    </p>
                                    <p>
                                        Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1 ">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="media mt-4 mb-1">
                                    <div class="text-active">
                                        <i class="icofont-first-aid"></i>
                                    </div>
                                    <div class="media-body ml-3">
                                        <h5 class="mt-0 mb-3 text-dark2">Neurology Service - 01</h5>
                                        <p class="mb-2">
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>               
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

@endsection