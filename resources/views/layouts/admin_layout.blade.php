<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
	data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title>CCMPOA.org | Admin Dashboard</title>

	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo/logo.svg') }}" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
		rel="stylesheet" />

	<!-- Icons. Uncomment required icon fonts -->
	<link rel="stylesheet" href="{{ asset('admin_assets/vendor/fonts/boxicons.css') }}" />

	<!-- Core CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
	<link rel="stylesheet" href="{{ asset('admin_assets/vendor/css/theme-default.css') }}"
		class="template-customizer-theme-css" />
	<link rel="stylesheet" href="{{ asset('admin_assets/css/demo.css') }}" />

	<!-- Vendors CSS -->
	<link rel="stylesheet" href="{{ asset('admin_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

	<link rel="stylesheet" href="{{ asset('admin_assets/vendor/libs/apex-charts/apex-charts.css') }}" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/select/1.5.0/css/select.bootstrap5.min.css">
	{{-- <link rel="stylesheet" href="{{ asset('admin_assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
	<link rel="stylesheet"
		href="{{ asset('admin_assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}"> --}}

	<!-- Page CSS -->
	<!-- Helpers -->
	<script src="{{ asset('admin_assets/vendor/js/helpers.js') }}"></script>

	<!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
	<!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
	<script src="{{ asset('admin_assets/js/config.js') }}"></script>
	<!-- SweeatAler2-->
	<link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert2/sweetalert2.min.css') }}">

	<style>
		.loader {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url("{{ asset('assets/img/loader/spinner.gif') }}") 50% 50% no-repeat rgb(249, 249, 249);
			opacity: .8;
			background-size: 130px 130px;
		}
		.swal2-container {
				z-index: X !important;
		}
		/* .img-thumbnail {
			display: block;
			max-width: 100%;
			height: auto;
		} */
	</style>
</head>

<body>
	<div id="myDiv" style="display:none;" class="loader"></div>

	<!-- Layout wrapper -->
	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">
			<!-- Menu -->
			@include('layouts.admin_sidebar')
			<!-- / Menu -->
			<!-- Layout container -->
			<div class="layout-page">
				<!-- Navbar -->
				@include('layouts.admin_nav')
				<!-- / Navbar -->
				<!-- Content wrapper -->
				@yield('content')
				<!-- Content wrapper -->
			</div>
			<!-- / Layout page -->
		</div>
		<!-- Overlay -->
		<div class="layout-overlay layout-menu-toggle"></div>
	</div>
	<!-- / Layout wrapper -->
	{{-- <div class="buy-now">
		<a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"
			class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
	</div> --}}

	<!-- Core JS -->
	<!-- build:js assets/vendor/js/core.js -->
	<script src="{{ asset('admin_assets/vendor/libs/jquery/jquery.js') }}"></script>
	<script src="{{ asset('admin_assets/vendor/libs/popper/popper.js') }}"></script>
	<script src="{{ asset('admin_assets/vendor/js/bootstrap.js') }}"></script>
	<script src="{{ asset('admin_assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

	<script src="{{ asset('admin_assets/vendor/js/menu.js') }}"></script>
	<!-- endbuild -->

	<!-- Vendors JS -->
	<script src="{{ asset('admin_assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

	<!-- Main JS -->
	<script src="{{ asset('admin_assets/js/main.js') }}"></script>

	<!-- Page JS -->
	<script src="{{ asset('admin_assets/js/dashboards-analytics.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
	<script src="https://cdn.datatables.net/select/1.5.0/js/dataTables.select.min.js"></script>

	{{-- <script src="{{ asset('admin_assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
	<script src="{{ asset('admin_assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
	<script src="{{ asset('admin_assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
	<script src="{{ asset('admin_assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script> --}}


	<!-- Place this tag in your head or just before your close body tag. -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<!--SweetAler2 -->
	<script src="{{ asset('assets/vendor/sweetalert2/sweetalert2.all.js') }}"></script>

	@yield('adminScripts')
	@yield('eventScript')
	@include('sweetalert::alert')
	<script>
		function show() {
			document.getElementById("myDiv").style.display = "block";
		}
		$(document).ready(function() {
			$('#userTbl').DataTable({
				select: true
			});
			$('#acctReqTbl').DataTable({
				select: true
			})
		});
	</script>
</body>

</html>
