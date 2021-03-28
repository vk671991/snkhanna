@extends('template')
@section('content')
<!-- Start Section -->
<section class=" position-relative set-bg breadcrumb-container" data-bg="{{ url('/') }}/assets/images/breadcrumb-img1.jpg">
    <div class="overlay op-P9"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-inner align-items-start flex-column justify-content-center   d-flex ">
                    <h3 class="semi-bold text-uppercase text-white">Contact Us</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pl-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('contact-us') }}">Contact Us</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Section -->

<!-- Start Section -->
<section class="m-bg-1 m-pt-140 m-pb-140">
    <div class="container">
        <div class="row m-mb-60">
            <div class="col-md-12">
                <div class="contact-inner bg-white radius-5">
                    <h3 class="m-text-2 m-mb-30">Drop a line</h3>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="First name:" class="form-control medim-field fz-poppins m-mb-20">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Last name:" class="form-control medim-field fz-poppins m-mb-20">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Your Mail:" class="form-control medim-field fz-poppins m-mb-20">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="Website:" class="form-control medim-field fz-poppins m-mb-20">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" placeholder="Subject:" class="form-control fz-poppins m-mb-20 medim-field">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="message" class="form-control fz-poppins medim-field" data-box-name="contact-message" placeholder="Your message here:"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right">
                                <button  class="btn fadeInDown-slide animated no-border bg-transparent medim-btn grad-bg--3 solid-btn mt-4 text-medium radius-pill text-active text-uppercase text-white">send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="bg-white pt-4 pl-4 pb-4 pr-4 m-mtb-20 radius-5 info-box">
                    <h5 class="m-text-2 mb-3">Address</h5>
                    <div class="media ">
                        <i class="icofont-location-pin mr-2 mt-2 "></i>
                        <div class="media-body">
                            <p class="m-0  fz-poppins">Fortis Escorts Heart Institute
                                & Research Centre, New Delhi, India</p>
                        </div>
                    </div>
                </div> <!-- col-->
            </div> <!-- col-->
            <div class="col-md-4">
                <div class="bg-white pt-4 pl-4 pb-4 pr-4 info-box m-mtb-20  radius-5">
                    <h5 class="m-text-2 mb-3">Contact</h5>
                    <div class="media ">
                        <i class="icofont-location-pin mr-2 mt-2 "></i>
                        <div class="media-body">
                            <p class="m-0  fz-poppins">+91 98109 43535 /<br> +91 98189 55777</p>
                        </div>
                    </div>
                    <div class="media ">
                        <i class="icofont-location-pin mr-2 mt-2 "></i>
                        <div class="media-body">
                            <p class="m-0  fz-poppins">surendrank@hotmail.com</p>
                        </div>
                    </div>
                </div> <!-- col-->
            </div> <!-- col-->
            <div class="col-md-4">
                <div class="bg-white pt-4 pl-4 pb-4 pr-4 info-box m-mtb-20 radius-5">
                    <h5 class="m-text-2 mb-3">Social Connect</h5>
                    <div class="footer-widget">
                    <p style="margin-bottom: 0px !important">
                    <div class="social-icon circle-link position-relative">
                        <a href="https://www.facebook.com/surendra.khanna.14" class="text-default rounded-circle s-dp-1-3-15">
                            <i class="icofont-facebook"></i>
                        </a>
                        <a href="https://twitter.com/SSurendrank" class="text-default rounded-circle s-dp-1-3-15">
                            <i class="icofont-twitter"></i>
                        </a>
                        <a href="https://in.linkedin.com/in/dr-prof-surendra-nath-khanna-0611b675" class="text-default rounded-circle s-dp-1-3-15">
                            <i class="icofont-linkedin"></i>
                        </a>
                        <a href="https://www.youtube.com/channel/UCUljFRBm2LdW1te3044ZBYw" class="text-default rounded-circle s-dp-1-3-15">
                            <i class="icofont-youtube"></i>
                        </a>
                    </div>
                    </p>
                    <br>
                </div>
                </div> <!-- col-->
            </div> <!-- col-->
        </div>
    </div>
</section>
<!-- End Section -->

@endsection