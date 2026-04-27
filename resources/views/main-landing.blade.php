<!DOCTYPE html>
<html lang="en">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Puntang Coffee || @yield('title')</title>	

		<meta name="keywords" content="WebSite Template" />
		<meta name="description" content="Puntang Coffee">
		<meta name="author" content="">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('assets/landing-page/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing-page/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing-page/vendor/animate/animate.compat.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing-page/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing-page/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing-page/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing-page/vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('assets/landing-page/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing-page/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing-page/css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing-page/css/theme-shop.css') }}">

		<!-- Revolution Slider CSS -->
		<link rel="stylesheet" href="{{ asset('assets/landing-page/vendor/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing-page/vendor/rs-plugin/css/layers.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/landing-page/vendor/rs-plugin/css/navigation.css') }}">
		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{ asset('assets/landing-page/vendor/circle-flip-slideshow/css/component.css') }}">

		<!-- Skin CSS -->
		{{-- <link id="skinCSS" rel="stylesheet" href="{{ asset('assets/landing-page/css/skins/default.css') }}"> --}}

		<style>
			{!! $themeCss !!}
		</style>

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('assets/landing-page/css/custom.css') }}">

	</head>
    <body data-plugin-page-transition>

        <div class="body">

            <!-- Header Start -->
            @include('Landing.component.header')
            <!-- Header End -->

            <div role="main" class="main">
                <!-- Main Content Start -->
                @yield('content')
                <!-- Main Content End -->
            </div>

            <!-- Main Footer Section Start -->
            @include('Landing.component.footer')
            <!-- Main Footer Section End -->

        </div>

        <!-- Vendor -->
		<script src="{{ asset('assets/landing-page/vendor/plugins/js/plugins.min.js') }}"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('assets/landing-page/js/theme.js') }}"></script>

		<!-- Revolution Slider Scripts -->
		<script src="{{ asset('assets/landing-page/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('assets/landing-page/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
		<!-- Circle Flip Slideshow Script -->
		<script src="{{ asset('assets/landing-page/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>
		<!-- Current Page Views -->
		<script src="{{ asset('assets/landing-page/js/views/view.home.js') }}"></script>

		<!-- Theme Custom -->
		<script src="{{ asset('assets/landing-page/js/custom.js') }}"></script>

		<!-- Theme Initialization Files -->
		<script src="{{ asset('assets/landing-page/js/theme.init.js') }}"></script>
		<script src="{{ asset('assets/landing-page/js/examples/examples.portfolio.js') }}"></script>
    </body>
</html>