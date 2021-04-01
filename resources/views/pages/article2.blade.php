@extends('template')
@section('content')


<!-- Start Section -->
<section class="m-pt-40 m-bg-1 m-pb-40">
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