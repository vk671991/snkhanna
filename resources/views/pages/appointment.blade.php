@extends('template')
@section('content')
<!-- Start Section -->
<section class=" position-relative set-bg breadcrumb-container" data-bg="{{ url('/') }}/assets/images/breadcrumb-img1.jpg">
    <div class="overlay op-P9"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-inner align-items-start flex-column justify-content-center   d-flex ">
                    <h3 class="semi-bold text-uppercase text-white">Appointment</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pl-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('appointment') }}">Appointment</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Section -->

<!-- Start Section -->
<div class="m-bg-1 m-pt-140 m-pb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="appoint-card border-light type-3 radius-20 bg-white  position-relative m-pt-50 m-pb-50 ">
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
                <div class="bg-white pt-4 pl-4 pb-4 pr-4 info-box m-mb-30  radius-5">
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
<!-- End Section -->

@endsection