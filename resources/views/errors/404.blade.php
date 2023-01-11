<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="User stories to UML Model/Goal Model">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="us2uml.org">

    <meta name="theme-name" content="navigator" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name') }} -
        @yield('title')
    </title>

    <link rel="icon" href="{{ asset('img/White logo - no background.svg') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('theme/plugins/bootstrap/bootstrap.min.css') }}">

    <!-- Revo Slider CSS
        ================================================== -->
    <!-- RS5.0 Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/plugins/revo-slider/css/settings.css') }}">
    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/plugins/revo-slider/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/plugins/revo-slider/css/navigation.css') }}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/plugins/revo-slider/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/plugins/revo-slider/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/plugins/revo-slider/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/plugins/revo-slider/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/plugins/revo-slider/css/navigation.css') }}">
    <!-- CSS
    ================================================== -->
    <!-- Themefisher Icon font -->
    <link rel="stylesheet" href="{{ asset('theme/plugins/themefisher-font/style.css') }}">
    <!-- Lightbox.min css -->
    <link rel="stylesheet" href="{{ asset('theme/plugins/lightbox2/dist/css/lightbox.min.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('theme/plugins/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/plugins/slick-carousel/slick/slick-theme.css') }}">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{ asset('theme/css/style.css') }}">


    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>

    <section class="page-404 text-center d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>404</h1>
					<h2>Page Not Found</h2>
  					<p>Sorry, but the page you were trying to view does not exist.</p>
					<a href="{{ route('home') }}" class="btn btn-main mt-20">Go Home</a>
				</div>
			</div>
		</div>
	</section>

    <!--
Essential Scripts
=====================================-->
<!-- Main jQuery -->
<script src="{{ asset('theme/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('theme/plugins/bootstrap/bootstrap.min.js') }}"></script>
<!-- Parallax -->
<script src="{{ asset('theme/plugins/parallax/jquery.parallax-1.1.3.js') }}"></script>
<!-- lightbox -->
<script src="{{ asset('theme/plugins/lightbox2/dist/js/lightbox.min.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('theme/plugins/slick-carousel/slick/slick.min.js') }}"></script>
<!-- Portfolio Filtering -->
<script src="{{ asset('theme/plugins/filterzr/jquery.filterizr.min.js') }}"></script>
<!-- Smooth Scroll js -->
<script src="{{ asset('theme/plugins/smooth-scroll/dist/js/smooth-scroll.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI14J_PNWVd-m0gnUBkjmhoQyNyd7nllA"></script>
<!-- Form Validation -->
<script src="{{ asset('theme/plugins/form-validation/jquery.form.js') }}"></script>
<script src="{{ asset('theme/plugins/form-validation/jquery.validate.min.js') }}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ asset('theme/plugins/revo-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme/plugins/revo-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('theme/js/script.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
(Load Extensions only on Local File Systems !
The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{ asset('theme/plugins/revo-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme/plugins/revo-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme/plugins/revo-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme/plugins/revo-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme/plugins/revo-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme/plugins/revo-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme/plugins/revo-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme/plugins/revo-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('theme/plugins/revo-slider/js/extensions/revolution.extension.video.min.js') }}"></script>
<script>
    /* https://learn.jquery.com/using-jquery-core/document-ready/ */
    jQuery(document).ready(function () {
        /* initialize the slider based on the Slider's ID attribute */
        jQuery('#rev_slider_1').show().revolution({

            /* options are 'auto', 'fullwidth' or 'fullscreen' */
            sliderLayout: 'fullscreen',

            /* basic navigation arrows and bullets */
            navigation: {

                arrows: {
                    style: "zeus",
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 600,
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 30,
                        v_offset: 0
                    }
                }
                ,
                bullets: {
                    enable: false,
                    hide_onmobile: true,
                    hide_under: 600,
                    style: "metis",
                    hide_onleave: true,
                    hide_delay: 200,
                    hide_delay_mobile: 1200,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                }
            }
        });
    });
</script>
</body>
</html>
