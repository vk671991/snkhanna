@extends('template')
@section('content')

<!-- Start Section -->
<section class="m-bg-1 m-pt-40 m-pb-40 m-bg-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="row">
                        <embed src="{{ $path }}" width="100%" height="800" type="application/pdf">
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->

@endsection