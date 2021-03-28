@extends('template')
@section('content')
<!-- Start Section -->
<section class=" position-relative set-bg breadcrumb-container" data-bg="{{ url('/') }}/assets/images/breadcrumb-img1.jpg">
    <div class="overlay op-P9"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-inner align-items-start flex-column justify-content-center   d-flex ">
                    <h3 class="semi-bold text-uppercase text-white">Gallery</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pl-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('gallery') }}">Gallery</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Section -->

<!-- Start Section -->
<section class="m-pt-140 m-bg-1 m-pb-140">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="m-text-2 ">Photo Gallery</h4>
            </div>
        </div>
        <div class="row grid ">
            
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/gal1-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover=" Addressing heart specialists at IMA Haridwar "> Addressing heart specialists at IMA Haridwar </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/gal1-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/gal2-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover=" OPD at Fortis, Delhi ">  OPD at Fortis, Delhi  </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/gal2-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/gal6.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover="  Talk at Cardiology meet at Haridwani ">  Talk at Cardiology meet at Haridwani  </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/gal6.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/Dr-Khanna-inaugurating-preventive-cardiac-check-up-camp-at-Parmarth-Ashram-Rishikesh-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover="  Dr Khanna inaugurating preventive cardiac check up camp at Parmarth Ashram, Rishikesh ">  Dr Khanna inaugurating preventive cardiac check up camp at Parmarth Ashram, Rishikesh  </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/Dr-Khanna-inaugurating-preventive-cardiac-check-up-camp-at-Parmarth-Ashram-Rishikesh-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/Dr-Khanna-addressing-at-IGTMSU-Arunachal-Pradesh.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover="  Dr Khanna addressing at IGTMSU, Arunachal Pradesh ">  Dr Khanna addressing at IGTMSU, Arunachal Pradesh  </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/Dr-Khanna-addressing-at-IGTMSU-Arunachal-Pradesh.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/Dr-S-N-Khanna-Panelist-Indian-Medical-Association-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover="  Dr S N Khanna, Panelist - Indian Medical Association ">  Dr S N Khanna, Panelist - Indian Medical Association </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/Dr-S-N-Khanna-Panelist-Indian-Medical-Association-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/Dr-S-N-Khanna-fecilitated-at-BSNL-function-at-Maulana-Azad-Medical-College-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover=" Dr S N Khanna fecilitated at BSNL function at Maulana Azad Medical College  ">  Dr S N Khanna fecilitated at BSNL function at Maulana Azad Medical College </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/Dr-S-N-Khanna-fecilitated-at-BSNL-function-at-Maulana-Azad-Medical-College-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/Dr-S-N-Khanna-addressing-meeting-on-cardiology-at-Indian-Medical-Association-rotated-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover="  Dr S N Khanna addressing meeting on cardiology at Indian Medical Association ">  Dr S N Khanna addressing meeting on cardiology at Indian Medical Association  </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/Dr-S-N-Khanna-addressing-meeting-on-cardiology-at-Indian-Medical-Association-rotated-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/Dr-S-N-Khanna-addressing-Indian-Medical-Association-220x220.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                        <h6 class="" data-hover="  Dr S N Khanna addressing, Indian Medical Association ">  Dr S N Khanna addressing, Indian Medical Association </h6>
                    </div>
                    <img src="{{ url('/') }}/assets/images/Dr-S-N-Khanna-addressing-Indian-Medical-Association-220x220.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <h4 class="m-text-2 ">Video Gallery</h4>
            </div>
        </div>
        <div class="row grid">
            <div class="col-md-6 col-sm-6 col-lg-6 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <iframe width="500" height="329" src="https://www.youtube.com/embed/vWn7bnq-Rdc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-6 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <iframe width="500" height="329" src="https://www.youtube.com/embed/zjgaKGyRUFg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-6 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <iframe width="500" height="329" src="https://www.youtube.com/embed/MXoXL2cQwwA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-6 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <iframe width="500" height="329" src="https://www.youtube.com/embed/U-2uBjev-JY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-6 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <iframe width="500" height="329" src="https://www.youtube.com/embed/vHkQZYdYz_E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div><!-- content -->
            </div> <!-- col -->
            
        </div>
    </div>
</section>
<!-- End Section -->

@endsection