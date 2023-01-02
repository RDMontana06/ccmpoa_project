<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title> CCMPOA.org | {{ $header }}</title>
	<link rel="icon" sizes="any" type="image/svg+xml" href="{{ asset('assets/img/logo/logo.svg') }}" />
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/fontisto@v3.0.4/css/fontisto/fontisto-brands.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900&display=swap"
		rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/core.css') }}">
	{{-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> --}}

	<link rel="stylesheet" href="{{ asset('assets/vendor/intro.js/introjs.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/bulma-list/css/bulma-list.css') }}">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/new_style/style.css') }}">

	<link href="{{ asset('assets/css/fontawesome6/css/all.min.css') }}" rel="stylesheet">
</head>

<body>
	<!-- Pageloader -->
	<div class="pageloader"></div>

	@include('layouts.nav-feed')
	@yield('content')

	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('assets/js/global.js') }}"></script>
	<script src="{{ asset('assets/js/main.js') }}"></script>

	<!-- Navigation options js -->
	<script src="{{ asset('assets/js/navbar-v1.js') }}"></script>
	<script src="{{ asset('assets/js/navbar-v2.js') }}"></script>
	<script src="{{ asset('assets/js/navbar-mobile.js') }}"></script>
	<script src="{{ asset('assets/js/navbar-options.js') }}"></script>
	<script src="{{ asset('assets/js/sidebar-v1.js') }}"></script>

	<!-- Core instance js -->
	<script src="{{ asset('assets/js/main.js') }}"></script>
	<script src="{{ asset('assets/js/chat.js') }}"></script>
	<script src="{{ asset('assets/js/touch.js') }}"></script>
	{{-- <script src="{{ asset('assets/js/tour.js') }}"></script> --}}

	<!-- Components js -->
	<script src="{{ asset('assets/js/explorer.js') }}"></script>
	<script src="{{ asset('assets/js/widgets.js') }}"></script>
	<script src="{{ asset('assets/js/modal-uploader.js') }}"></script>
	<script src="{{ asset('assets/js/popovers-users.js') }}"></script>
	<script src="{{ asset('assets/js/popovers-pages.js') }}"></script>
	<script src="{{ asset('assets/js/lightbox.js') }}"></script>

	<script src="{{ asset('assets/js/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/jquery-migrate-3.0.1.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('assets/js/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/scrollax.min.js') }}"></script>
	<script src="{{ asset('assets/js/js/bootstrap.min.js') }}"></script>

	{{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
	<script src="{{ asset('assets/js/js/main.js') }}"></script>

	@include('vendor.lara-izitoast.toast')

	<script>
		function show() {
			$(".pageloader").toggleClass("is-active");
			$("#submitMarket").prop("disabled", true);
		}
    // $('.carousel-control-prev').click(function() {
    //   $('#carouselExampleControls').carousel('prev');
    // });

    // $('.carousel-control-next').click(function() {
    //   $('#carouselExampleControls').carousel('next');
    // });
	</script>
</body>

</html>
