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
                            <li class="breadcrumb-item "><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('articles') }}">Articles</a></li>
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
            
            <div class="col-md-6">
                <div  class="media align-items-center recent-post-wraper type-1 m-mb-50">

                    <a href="{{ route('articles.papers-published-by-dr-s-n-khanna') }}" class="mr-0">
                        <img class=" lt-radius-25 lb-radius-25" src="{{ url('/') }}/assets/images/recent-post-sm-img1.jpg" alt="Papers Published By Dr. S.N Khanna">
                    </a>
                    <div class="media-body h-dp-10-60 bg-white type1-post pt-40 pb-40 rt-radius-25 rb-radius-25 pr-50 pl-25 s-dp-1-3">
                        <div class="post-meta">
                            <p class="fz-14 text-default mb-1"> <a href="{{ route('articles.papers-published-by-dr-s-n-khanna') }}" class="text-default">7 June, 2020</a> </p>
                        </div>
                        <a href="{{ route('articles.papers-published-by-dr-s-n-khanna') }}">
                            <h5 class="mt-0 text-dark2 text-medium">Papers Published By Dr. S.N Khanna</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div  class="media align-items-center recent-post-wraper type-1  m-mb-50">

                    <a href="{{ route('articles.docs-revive-50-year-old-bypass-patient-dead-for-30-minutes') }}" class="mr-0">
                        <img class=" lt-radius-25 lb-radius-25" src="{{ url('/') }}/assets/images/recent-post-sm-img2.jpg" alt="Doctors revive 50 year old bypass patient dead for 30 minutes">
                    </a>
                    <div class="media-body h-dp-10-60 bg-white type1-post pt-40 pb-40 rt-radius-25 rb-radius-25 pr-50 pl-25 s-dp-1-3">
                        <div class="post-meta">
                            <p class="fz-14 text-default mb-1"> <a href="{{ route('articles.docs-revive-50-year-old-bypass-patient-dead-for-30-minutes') }}" class="text-default">7 June, 2020</a> </p>
                        </div>
                        <a href="{{ route('articles.docs-revive-50-year-old-bypass-patient-dead-for-30-minutes') }}">
                            <h5 class="mt-0 text-dark2 text-medium">Doctors revive 50 year old bypass patient dead for 30 minutes</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div  class="media align-items-center recent-post-wraper type-1  m-mb-50">

                    <a href="{{ route('articles.cardiac-surgery-in-patients') }}" class="mr-0">
                        <img class=" lt-radius-25 lb-radius-25" src="{{ url('/') }}/assets/images/recent-post-sm-img3.jpg" alt="Cardiac surgery in patients with severe valvular and coronary heart disease.">
                    </a>
                    <div class="media-body h-dp-10-60 bg-white type1-post pt-40 pb-40 rt-radius-25 rb-radius-25 pr-50 pl-25 s-dp-1-3">
                        <div class="post-meta">
                            <p class="fz-14 text-default mb-1"> <a href="{{ route('articles.cardiac-surgery-in-patients') }}" class="text-default">27 June, 2020</a> </p>
                        </div>
                        <a href="{{ route('articles.cardiac-surgery-in-patients') }}">
                            <h5 class="mt-0 text-dark2 text-medium">Cardiac surgery in patients with severe valvular and coronary heart disease.</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

@endsection