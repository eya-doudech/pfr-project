<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <link rel="stylesheet" href="/assets/vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="/assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

   

    <div class="nav-header">
            <a href="index.html" class="brand-logo">
        
               
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
       <div class="container">
        @include('include.navbar')
        </divd
        @yield('content')
        @include('include.menu')
        
      
        @include('include.footer')

        <script src="/assets/vendor/global/global.min.js"></script>
    <script src="/assets/js/quixnav-init.js"></script>
    <script src="/assets/js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="/assets/vendor/raphael/raphael.min.js"></script>
    <script src="/assets/vendor/morris/morris.min.js"></script>


    <script src="/assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="/assets/vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="/assets/vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="/assets/vendor/flot/jquery.flot.js"></script>
    <script src="/assets/vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="/assets/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="/assets/vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="/assets/vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="/assets/js/dashboard/dashboard-1.js"></script>

</body>

</html>
