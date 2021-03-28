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
                            <li class="breadcrumb-item "><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('case-studies') }}">Case Studies</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start Section -->

<!-- Start Section -->
<section class="m-pt-140 m-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="article-box type-1 bg-white m-mb-50  h-dp-10-60 radius-5">
                                    <img src="{{ url('/') }}/assets/images/diabetic-foot.jpg" alt="" style="width:100%">
                    <div class="m-p-30">
                        <p class="mb-1">
                            <a href="{{ route('case-study-1') }}" class="text-default fz-14">8 Jan, 2020</a>
                        </p>
                        <a href="{{ route('case-study-1') }}">
                            <h5 class="text-dark2 mb-3">
                                Concomitant off- pump cabg & below knee amputation in a patient with critical left main coronary artery disease and severe septic diabetic foot- a case report
                            </h5>
                        </a>
                        <a href="{{ route('case-study-1') }}" class="text-default fz-poppins text-Underline">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->
@endsection