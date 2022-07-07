<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title> CCMPOA.org | Sign Up</title>
	<link rel="icon" type="image/png" href="{{ asset('assets/img/logo/logo.svg') }}" />
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
	<!-- Core CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/core.unmin.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/landing-page.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/toastr/toastr.min.css') }}">
</head>

<body>

	<!-- Pageloader -->
	<div class="pageloader"></div>
	<div class="infraloader is-active"></div>
	<div class="signup-wrapper">

		<div class="fake-nav">
			<a href="{{ url('/') }}" class="logo">
				<img src="{{ asset('assets/img/logo/logo.svg') }}" width="112" height="28" alt="">
			</a>
		</div>
		<div class="process-bar-wrap mt-6">
			<div class="process-bar">
				<div class="progress-wrap">
					<div class="track"></div>
					<div class="bar"></div>
					<div id="step-dot-1" class="dot is-first is-active is-current" data-step="0">
						<i data-feather="key"></i>
					</div>
					<div id="step-dot-2" class="dot is-second" data-step="25">
						<i data-feather="user-check"></i>
					</div>
					<div id="step-dot-3" class="dot is-third" data-step="50">
						<i data-feather="smile"></i>
					</div>
					<div id="step-dot-4" class="dot is-fourth" data-step="75">
						<i data-feather="lock"></i>
					</div>
					<div id="step-dot-5" class="dot is-fifth" data-step="100">
						<i data-feather="flag"></i>
					</div>
				</div>
			</div>
		</div>
        @yield('content')

	</div>

	<!-- Concatenated js plugins and jQuery -->
    
	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('https://js.stripe.com/v3/') }}"></script>
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
    <script src="{{ asset('assets/toastr/toastr.min.js') }}"></script>
    

	<!-- Landing page js -->

	<!-- Signup page js -->
    <script src="assets/js/signup.js"></script>
     <script>
        
        $(document).ready(function() {
          toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
          }
           $('.toastrDefaultError').trigger('click');
        });
      
      </script>

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
