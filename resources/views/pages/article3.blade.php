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
                        <a  class="venobox" data-gall="gall1" data-title="" href="{{ url('/') }}/assets/images/recent-post-sm-img.jpg">
                            <i class="icofont-search-2"></i>
                        </a>
                    </div>
                    <img src="{{ url('/') }}/assets/images/recent-post-sm-img.jpg" alt="">
                </div><!-- content -->
            </div> <!-- col -->

        </div>
    </div>
</section>
<!-- End Section -->

@endsection