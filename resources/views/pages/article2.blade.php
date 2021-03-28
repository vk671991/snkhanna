@extends('template')
@section('content')
<!-- Start Section -->
<section class=" position-relative set-bg breadcrumb-container" data-bg="{{ url('/') }}/assets/images/breadcrumb-img1.jpg">
    <div class="overlay op-P9"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-inner align-items-start flex-column justify-content-center   d-flex ">
                    <h3 class="semi-bold text-uppercase text-white">Articles</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pl-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('articles') }}">Articles</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('articles.docs-revive-50-year-old-bypass-patient-dead-for-30-minutes') }}">Doctors revive 50 year old bypass patient dead for 30 minutes</a></li>
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
        <div class="row grid ">
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item diabetes">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/article10.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                    </div>
                    <img src="{{ url('/') }}/assets/images/article10.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item cardiology">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/article1-2.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                    </div>
                    <img src="{{ url('/') }}/assets/images/article1-2.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item  dental">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/article4.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                    </div>
                    <img src="{{ url('/') }}/assets/images/article4.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item survey cardiology">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/article5.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                    </div>
                    <img src="{{ url('/') }}/assets/images/article5.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item  cardiology">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/article6.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                    </div>
                    <img src="{{ url('/') }}/assets/images/article6.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->
            <div class="col-md-6 col-sm-6 col-lg-3 m-mb-30 grid-item  dental">
                <div class="position-relative">
                    <div class="gallery-overlay position-absolute"></div>
                    <div class="gallery-hoveralble-content d-flex align-items-center flex-column justify-content-end position-absolute">
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/article2-1.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                    </div>
                    <img src="{{ url('/') }}/assets/images/article2-1.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->

        </div>
    </div>
</section>
<!-- End Section -->

@endsection