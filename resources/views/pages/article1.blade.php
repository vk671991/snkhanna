@extends('template')
@section('content')


<!-- Start Section -->
<section class="m-bg-1 m-pt-40 m-pb-40 position-relative department-area type-4 ">
    <div class="overlay bg-white"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-4">
                <div class="nav flex-column department-pill type-3 bg-white" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" data-toggle="pill" href="#tab1" role="tab" aria-selected="true"><i class="icofont-first-aid"></i>&nbsp;Biatrial Mass Mimicking Myxoma</a>
                    <a class="nav-link" data-toggle="pill" href="#tab2" role="tab"  aria-selected="false"><i class="icofont-first-aid"></i>&nbsp;Ascending Aortic Aneurysm Resection</a>
                    <a class="nav-link"  data-toggle="pill" href="#tab3" role="tab"  aria-selected="false"><i class="icofont-first-aid"></i>&nbsp;Biatrial Drainage of Right Superior Vena Cava </a>
                    <a class="nav-link"  data-toggle="pill" href="#tab4" role="tab"  aria-selected="false"><i class="icofont-first-aid"></i>&nbsp;Early Results With Bilateral </a>
                    <a class="nav-link"  data-toggle="pill" href="#tab5" role="tab" aria-selected="false"><i class="icofont-first-aid"></i>&nbsp;Unstable Angina</a>
                    <a class="nav-link"  data-toggle="pill" href="#tab6" role="tab" aria-selected="false"><i class="icofont-first-aid"></i>&nbsp;Multimodality Targeted Approach</a>
                    <a class="nav-link"  data-toggle="pill" href="#tab7" role="tab" aria-selected="false"><i class="icofont-first-aid"></i>&nbsp;Coronary Artery Disease </a>
                    <a class="nav-link"  data-toggle="pill" href="#tab8" role="tab" aria-selected="false"><i class="icofont-first-aid"></i>&nbsp;Predictors of Early Outcome </a>
                    <a class="nav-link"  data-toggle="pill" href="#tab9" role="tab" aria-selected="false"><i class="icofont-first-aid"></i>&nbsp;Repair of Tricuspid Insufficiency </a>
                    <a class="nav-link"  data-toggle="pill" href="#tab10" role="tab" aria-selected="false"><i class="icofont-first-aid"></i>&nbsp;Surgical Correction of Lutembacher’s Syndrome</a>
                    <a class="nav-link"  data-toggle="pill" href="#tab11" role="tab" aria-selected="false"><i class="icofont-first-aid"></i>&nbsp;Surgical Treatment Of Aneurysms</a>
                </div>

            </div>
            <div class="col-lg-8 offset-lg-1 col-sm-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                        <h4 class="m-text-2 ">A case of biatrial mass mimicking myxoma with rheumatic mitral stenosis with regurgitation of moderate severity</h4>
                        
                        <div class="department-imag type-2 m-mt-40 mb-4 radius-5 mr-0 s-dp-1-3 bg-white">
                            <embed src="{{ url('/') }}/assets/pdf/A-case-of-biatrial-mass-mimicking-myxoma-Indian-college-of-cardiologykhanna2015-1.pdf" width="100%" height="800" type="application/pdf">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2" role="tabpanel"  >
                        <h4 class="m-text-2 ">Ascending Aortic Aneurysm Resection: 15 Years’ Experience</h4>
                        
                        <div class="department-imag type-2 m-mt-40 mb-4 radius-5 mr-0 s-dp-1-3 bg-white">
                            <embed src="{{ url('/') }}/assets/pdf/Ascending-aortic-aneurysm-resection....Asian-Cardiovascular-Thoracic-Annmeharwal2006.pdf" width="100%" height="800" type="application/pdf">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab3" role="tabpanel">
                        <h4 class="m-text-2 ">Biatrial Drainage of Right Superior Vena Cava with Anomalous Right Pulmonary Venous Connection</h4>
                        
                        <div class="department-imag type-2 m-mt-40 mb-4 radius-5 mr-0 s-dp-1-3 bg-white">
                            <embed src="{{ url('/') }}/assets/pdf/Biatrial-drainage-of-right-superior-vena-cava-with-anomalous-right.pdf" width="100%" height="800" type="application/pdf">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab4" role="tabpanel">
                        <h4 class="m-text-2 ">EARLY RESULTS WITH BILATERAL AND * . - SlNGlE INTERNAl MAMMARAYR TERY CRAFTS. ARE THEY DIFFERENT?</h4>
                        
                        <div class="department-imag type-2 m-mt-40 mb-4 radius-5 mr-0 s-dp-1-3 bg-white">
                            <embed src="{{ url('/') }}/assets/pdf/Early-results-with-bilateral-and-single-Asian-Cardiovascular-and-Thoracic-Annals-trehan1997.pdf" width="100%" height="800" type="application/pdf">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab5" role="tabpanel">
                        <h4 class="m-text-2 ">Management of a Patient with Unstable Angina, Left Main Coronary Artery Disease, and Respiratory Insufficiency Due to Eventration of the Diaphragm</h4>
                        
                        <div class="department-imag type-2 m-mt-40 mb-4 radius-5 mr-0 s-dp-1-3 bg-white">
                            <embed src="{{ url('/') }}/assets/pdf/Management-of-Pt-with-unstable-angina-Journal-of-cardiac-surgerykhanna2013.pdf" width="100%" height="800" type="application/pdf">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab6" role="tabpanel">
                        <h4 class="m-text-2 ">Multimodality Targeted Approach in Redo Off-Pump Coronary Artery Bypass Surgery</h4>
                        
                        <div class="department-imag type-2 m-mt-40 mb-4 radius-5 mr-0 s-dp-1-3 bg-white">
                            <embed src="{{ url('/') }}/assets/pdf/Multimodality-targeted-approach-in-redo....-Asian-Cardiovascular-Thoracic-Annalsmishra2003.pdf" width="100%" height="800" type="application/pdf">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab7" role="tabpanel">
                        <h4 class="m-text-2 ">Coronary Artery Disease in South Asians: Evolving Strategies for Treatment and Prevention</h4>
                        
                        <div class="department-imag type-2 m-mt-40 mb-4 radius-5 mr-0 s-dp-1-3 bg-white">
                            <embed src="{{ url('/') }}/assets/pdf/Port-Access-Approach-for-cardiac-surgical-procedure-Indian-Heart-Journal-Page-688Nov-Dec2005-2.pdf" width="100%" height="800" type="application/pdf">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab8" role="tabpanel">
                        <h4 class="m-text-2 ">Predictors of Early Outcome After Coronary Artery Surgery in Patients with Severe Left Ventricular Dysfunction</h4>
                        
                        <div class="department-imag type-2 m-mt-40 mb-4 radius-5 mr-0 s-dp-1-3 bg-white">
                            <embed src="{{ url('/') }}/assets/pdf/Predictors-of-early-outcome-after-coronary-artery-surgery...Journal-of-cardiac-surgery-trehan2003.pdf" width="100%" height="800" type="application/pdf">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab9" role="tabpanel">
                        <h4 class="m-text-2 ">Repair of Tricuspid Insufficiency Following Blunt Trauma Chest - A Case Report and Review of Literature</h4>
                        
                        <div class="department-imag type-2 m-mt-40 mb-4 radius-5 mr-0 s-dp-1-3 bg-white">
                            <embed src="{{ url('/') }}/assets/pdf/Repair-of-Tricuspid-Insufficiency-following-blunt-Trauma-chest-Cardiovascular-Disease-and-diagnosis-nathkhanna2014-1.pdf" width="100%" height="800" type="application/pdf">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab10" role="tabpanel">
                        <h4 class="m-text-2 ">Surgical Correction of Lutembacher’s Syndrome in a Patient with Severe Pulmonary Artery Hypertension</h4>
                        
                        <div class="department-imag type-2 m-mt-40 mb-4 radius-5 mr-0 s-dp-1-3 bg-white">
                            <embed src="{{ url('/') }}/assets/pdf/Surgical-correction-of-Lutembachers-syndrome-Journal-of-cardiac-surgerykhanna2014.pdf" width="100%" height="800" type="application/pdf">
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab11" role="tabpanel">
                        <h4 class="m-text-2 ">SURGICAL TREATMENT OF ANEURYSMS OF THE ASCENDING AORTA AND AORTIC ARCH</h4>
                        
                        <div class="department-imag type-2 m-mt-40 mb-4 radius-5 mr-0 s-dp-1-3 bg-white">
                            <embed src="{{ url('/') }}/assets/pdf/Surgical-treatment-of-aneurysms-Asian-Cardiovascular-Thoracic-Annalsmagotra1996.pdf" width="100%" height="800" type="application/pdf">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

@endsection