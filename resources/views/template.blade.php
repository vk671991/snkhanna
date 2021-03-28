<!doctype html>
<html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <!-- Favicons-->
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/assets/images/apple-touch-icon-32x32.png">
        <link rel="shortcut icon" type="image/x-icon" sizes="72x72" href="{{ url('/') }}/assets/images/apple-touch-icon-72x72.png">

        <!-- web fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto:400,500" rel="stylesheet"> 

        <!-- plugins css -->
        <link rel="stylesheet" href="{{ url('/') }}/assets/css/plugins.css">
        <!-- style css -->
        <link rel="stylesheet" href="{{ url('/') }}/style.css">
        @yield('css')
    </head>

    <body>

        <!-- Start Preloader -->
        <div class="preloader">
            <div class="preloader-inner">
                <div class="loader-content">
                    <span class="icon-section-wave d-inline-block text-active  mt-3 "></span>
                </div>
            </div>
        </div>

        <div class="preloader">
            <div class="preloader-inner">
                <div class="loader-content">
                    <span class="icon-section-wave d-inline-block text-active  mt-3 "></span>
                </div>
            </div>
        </div>
        @include('includes.header')

        @yield('content')

        @include('includes.footer')

        <!-- js file -->
        <script src="{{ url('/') }}/assets/js/jquery-2.2.4.min.js"></script>
        <!-- plugins js -->
        <script src="{{ url('/') }}/assets/js/plugins.js"></script>
        <!-- main js -->
        <script src="{{ url('/') }}/assets/js/main.js"></script>
        @yield('script')
    </body>


</html>