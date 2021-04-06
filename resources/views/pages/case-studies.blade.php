@extends('template')
@section('content')



<section class="m-pt-40 m-bg-1">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <div  class="media align-items-center recent-post-wraper type-1 m-mb-50">

                    <a href="{{ route('case-study-1') }}" class="mr-0">
                        <img class=" lt-radius-25 lb-radius-25" src="{{ url('/') }}/assets/images/diabetic-foot.jpg">
                    </a>
                    <div class="media-body h-dp-10-60 bg-white type1-post pt-40 pb-40 rt-radius-25 rb-radius-25 pr-50 pl-25 s-dp-1-3">
                        <div class="post-meta">
                            <p class="fz-14 text-default mb-1"> <a href="{{ route('case-study-1') }}" class="text-default">7 June, 2020</a> </p>
                        </div>
                        <a href="{{ route('case-study-1') }}">
                            <h5 class="mt-0 text-dark2 text-medium">Diabetic Foot</h5>
                        </a>
                        <p>Concomitant off- pump cabg & below knee amputation in a patient ...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection