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

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/core.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/intro.js/introjs.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/bulma-list/css/bulma-list.css') }}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/modal-fx.css') }}"> --}}


</head>

<body>

	<!-- Pageloader -->
	<div class="pageloader"></div>
	<div class="infraloader is-active"></div>
	<div class="app-overlay"></div>

	@include('layouts.nav-feed')
	@yield('content')


	  <script src="{{ asset('assets/js/app.js') }}"></script>
    {{-- <script src="https://js.stripe.com/v3/"></script> --}}
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
    {{-- <script src="{{ asset('assets/js/tour.js') }}"></script> --}}

    <!-- Components js -->
    <script src="{{ asset('assets/js/explorer.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/modal-uploader.js') }}"></script>
    <script src="{{ asset('assets/js/popovers-users.js') }}"></script>
    <script src="{{ asset('assets/js/popovers-pages.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>

    <script src="{{ asset('assets/js/shop.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.6/dist/sweetalert2.all.min.js"></script>


    @include('sweetalert::alert')
    {{-- <script src="{{ asset('assets/js/modal-fx.js') }}"></script>
    <script src="{{ asset('assets/js/modal-01.js') }}"></script> --}}

  {{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>   --}}

  {{-- <script src="../node_modules/intro.js/intro.js"></script> --}}
  <script>
  function show()
	{
		$(".pageloader").toggleClass("is-active");
    $("#submitMarket").prop("disabled", true);
	}
  </script>
</body>

</html>