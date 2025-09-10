<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simas">

    <!-- ========== Page Title ========== -->
    <title>SIMISI</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="{{ asset('source/assets/img/logo.jpg') }}" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('source/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('source/assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('source/assets/css/themify-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('source/assets/css/elegant-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('source/assets/css/flaticon-set.css') }}" rel="stylesheet" />
    <link href="{{ asset('source/assets/css/magnific-popup.css') }}" rel="stylesheet" />
    <link href="{{ asset('source/assets/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('source/assets/css/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('source/assets/css/animate.css') }}" rel="stylesheet" />
    <link href="{{ asset('source/assets/css/bootsnav.css') }}" rel="stylesheet" />
    <link href="{{ asset('source/style.css') }}" rel="stylesheet">
    <link href="{{ asset('source/assets/css/responsive.css') }}" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js') }} for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ asset('source/assets/js/html5/html5shiv.min.js') }}') }}"></script>
      <script src="{{ asset('source/assets/js/html5/respond.min.js') }}') }}"></script>
    <![endif]-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap"
        rel="stylesheet">
    @yield('styles')
    <!-- Matomo -->
    <script>
        var _paq = window._paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "//simisianalytics.undesia.com/";
            _paq.push(['setTrackerUrl', u + 'matomo.php']);
            _paq.push(['setSiteId', '1']);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.async = true;
            g.src = u + 'matomo.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->

</head>

<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    @include('layout.header')
    <!-- End Header -->
    @yield('content')
    <!-- Start Banner
    ============================================= -->

    <!-- End Banner -->



    @include('layout.footer')



    <!-- jQuery Frameworks
    ============================================= -->
    <script src="{{ asset('source/assets/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('source/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('source/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('source/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('source/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('source/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('source/assets/js/modernizr.custom.13711.js') }}"></script>
    <script src="{{ asset('source/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('source/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('source/assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('source/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('source/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('source/assets/js/count-to.js') }}"></script>
    <script src="{{ asset('source/assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('source/assets/js/bootsnav.js') }}"></script>
    <script src="{{ asset('source/assets/js/main.js') }}"></script>
    @yield('scripts')

</body>

</html>
