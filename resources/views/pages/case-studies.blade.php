@extends('template')
@section('content')


<!-- Start Section -->
<section class="m-pt-40 m-bg-1">
    <div class="container">
        <div class="row">
            
            <div class="col-sm-10 offset-sm-1 col-md-6 offset-md-0 col-xl-4">
                <div class="single-service bg-white type-3 radius-10 position-relative service-wrapper s-dp-1-3 h-dp-10-60 m-mb-50">
                    <div class="media">
                     <div class="service-circle position-relative mb-4 text-active bg-white rounded-circle d-flex align-items-center justify-content-center s-dp-1-3">
                        <span class="icon-heart-beat"></span>
                    </div>
                      <div class="media-body">
                         <h4 class="text-dark2 mb-3 position-relative pt-2">Diabetic Foot</h4>
                            <p class="mb-4">
                                Concomitant off- pump cabg & below knee amputation in a patient with critical left main coronary artery disease and severe septic diabetic foot- a case report
                            </p>
                            <a href="{{ route('case-study-1') }}" class="text-default d-inline-block pt-2 fz-poppins text-Underline">
                                Read More
                            </a>
                      </div>
                    </div>
                </div> <!-- col-->
            </div>
        </div>
    </div>
</section>
<!-- End Section -->
@endsection