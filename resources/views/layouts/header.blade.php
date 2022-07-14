<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title> CCMPOA.org</title>
	<link rel="icon" sizes="any" type="image/svg+xml" href="{{ asset('assets/img/logo/logo.svg') }}" />
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

	<!-- Scripts -->

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

	<!-- Styles -->

	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- Core CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/core.unmin.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/landing-page.css') }}">


</head>

<body>

	<!-- Pageloader -->
	<div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="app-overlay"></div>

		<!--Fake navigation-->
		<div class="fake-nav">
			<a href="{{ route('login') }}" class="logo">
				<img class="light-image" src="{{ asset('assets/img/logo/logo.svg') }}" width="112" height="28"
					alt="">
				<img class="dark-image" src="{{ asset('assets/img/logo/logo.svg') }}" width="112" height="28"
					alt="">
			</a>
		</div>
		@yield('content')

	</div>

	<!-- Concatenated js plugins and jQuery -->

	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="https://js.stripe.com/v3/"></script>
	<script src="{{ asset('assets/data/tipuedrop_content.js') }}"></script>

	<!-- Core js -->
	<script src="{{ asset('assets/js/global.js') }}"></script>

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
	<script src="{{ asset('assets/js/tour.js') }}"></script>
	<!-- Components js -->
	<script src="{{ asset('assets/js/explorer.js') }}"></script>
	<script src="{{ asset('assets/js/widgets.js') }}"></script>
	<script src="{{ asset('assets/js/modal-uploader.js') }}"></script>
	<script src="{{ asset('assets/js/popovers-users.js') }}"></script>
	<script src="{{ asset('assets/js/popovers-pages.js') }}"></script>
	<script src="{{ asset('assets/js/lightbox.js') }}"></script>
	<script src="{{ asset('assets/app/script.js') }}"></script>
	<script src="{{ asset('assets/app/login.js') }}"></script>
	<script src="{{ asset('assets/js/notify-js.js') }}"></script>

	
    <!-- Feed pages js -->
    <script src="{{ asset('assets/js/feed.js') }}"></script>

    <!-- profile js -->
    <script src="{{ asset('assets/js/profile.js') }}"></script>
	
	<script>
	 if (window.location.hash == '#success') {
	  new NotifyJS({
	   message: "Registration Successful!",
	   duration: 5000
	  }, {
	   color: '#d4edda',
	   textColor: 'black',
	   fontFamily: 'Lexend Deca',
	   customCSSBox: `border-bottom: 5px solid green; background-color: #d4edda;`
	  })
	 } else if (window.location.hash == "#unauthorized") {
	  new NotifyJS({
	   message: "Please login to continue!",
	   duration: 5000
	  }, {
	   color: 'red',
	   textColor: 'red',
	   fontFamily: 'Lexend Deca',
	   customCSSBox: `border-bottom: 5px solid red; background-color: white;`
	  })
	 }
	</script>
	<!-- Landing page js -->

	<!-- Signup page js -->

	<!-- Feed pages js -->

	<!-- profile js -->

	<!-- stories js -->

	<!-- friends js -->

	<!-- questions js -->

	<!-- video js -->

	<!-- events js -->

	<!-- news js -->

	<!-- shop js -->

	<!-- inbox js -->

	<!-- settings js -->

	<!-- map page js -->

	<!-- elements page js -->
</body>

</html>
