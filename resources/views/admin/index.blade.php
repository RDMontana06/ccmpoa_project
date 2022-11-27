@extends('layouts.admin_layout')

@section('content')
	<div class="content-wrapper">
		<!-- Content -->

		<div class="container-fluid flex-grow-1 container-p-y">
			<div class="row">
				<div class="col-lg-6 mb-4 order-0">
					<div class="card">
						<div class="d-flex align-items-end row">
							<div class="col-sm-7">
								<div class="card-body">
									<h5 class="card-title text-primary">Welcome {{ auth()->user()->name }}!</h5>
									<p class="mb-4">
										Your dashboard for today
									</p>

									<a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
								</div>
							</div>
							<div class="col-sm-5 text-center text-sm-left">
								<div class="card-body pb-0 px-0 px-md-4">
									<img src="{{ asset('admin_assets/img/illustrations/man-with-laptop-light.png') }}" height="140"
										alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
										data-app-light-img="{{ asset('admin_assets/img/illustrations/man-with-laptop-light.png') }}" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-4 order-1">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-6 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title d-flex align-items-start justify-content-between">
										<div class="avatar flex-shrink-0">
											{{-- <img src="{{ asset('admin_assets/img/icons/unicons/chart-success.png') }}" alt="chart success"
												class="rounded" /> --}}
												<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAaZJREFUWEftl4FNwzAQRV8noGwAE1AmADaACYAJygbABMAEwAYwQWECGIER6ASgj+LKvTqxk9hKkHpSVaW1ned/5/PdhJHZZGQ8/BugGXAHHBdS8AW4BT7t+iGF9oAPYFoIxi37DewD+l5ZCOiqUqcwz9/yl8BTDOgGuK4GSVY957TG9UMKbYFyukyBL/deVIsqHuTmtUA1/i7qsntgbl74AOhg1FlRICmxY96s33bHBLSM5LCiCo3OZQpq7dgPaj0PFtRdEmZRl0mhI0CXsUyX5ftQCmmnOvL2Epa7FFvKRyEropAS4HnEXxqjy9NadiAF8GNi8JwBqn18yw6kODlIBNLYw9JAP4kwbpitKLIr1LY+suOzA7UUqHxQDwr0BuhTZ6+BzkF5yZYk/nx1Mq6b2SiRQyWsBi8SZVASPPGgBKO5LnPHltEJXGuF6hrFlMTnXuagvlrCPHuX8gq8qXPVLk9rtmjdIigB+cqE3OmWU7LcaBL1Z59WuiljB3cf819fIM0PQXWGyQFkoXrB5AJyUDqdrnJM8U5wTJ8Y6vzSpolboJisv+R6jSXTaF/hAAAAAElFTkSuQmCC"/>
										</div>
										<div class="dropdown">
											<button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
												<a class="dropdown-item" href="javascript:void(0);">View More</a>
											</div>
										</div>
									</div>
									<span class="fw-semibold d-block mb-1">Users</span>
									<h3 class="card-title mb-2">{{ count($users) }}</h3>
									<small class="text-success fw-semibold">As of today</small>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-12 col-6 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title d-flex align-items-start justify-content-between">
										<div class="avatar flex-shrink-0">
											<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAZRJREFUWEftl/ExBTEQh79XASqgE1RACVTAqwAVoAM6oAJ0QAd08FTA/EzOZDKX3OaymTkz9q8393LZ73Z/m92sWJitFsbDnwXaBq6BY0C/vewOWAObYUNrhB6AIy+KZJ974KQW6KsTjLZVdHZ6Ar0FJ/sVH/GbKWvKLBG6Am5iPQCXwIUBzB3oMQh+zLdFf+5Ap4AqZszOQ4WWAuUOdAg8ZzweAE8TaXMH6hahWLyx4KdEregoSu4amgskEFXUbVRlOtHPwvOpQsumrAVocPoaoKQdq3UFskLE67oAfYRKew+e9gBFaddA6Ar0EnRSKnvpq9RK3IA0OqhdWKx0QLoAqXfpy2ss19uagaQXaWSOSWOprpqBdN4oBXNMKdb55FplEnBOxFOQqrz0jGqO0JTT2v8XBfQZXxzSiTHXOixDVm1UhvXFIT8HpEapAUy535rreeQ9wag4stegHJAjQ3kra8r+gYYIKJeeGtG+1qvWD0O62HqPqklhE5AcCUp3bcscYwFrBrI46bamir4bRbTx4oC+AQPmWSWQyMshAAAAAElFTkSuQmCC"/>
										</div>
										<div class="dropdown">
											<button class="btn p-0" type="button" id="cardOpt6" data-bs-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
												<a class="dropdown-item" href="javascript:void(0);">View More</a>
											</div>
										</div>
									</div>
									<span>Account request</span>
									<h3 class="card-title text-nowrap mb-1">{{ count($accountRequests) }}</h3>
									<small class="text-success fw-semibold">As of today</small>
								</div>
							</div>
						</div>
						<div class="col-12 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title d-flex align-items-start justify-content-between">
										<div class="avatar flex-shrink-0">
											 <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAARVJREFUWEftmGENwjAQRt8UgARwgANwgAYc4ABQgAUkgANQABKQAA7ILRtpoFt7KZd0pP2zbLte3767XnOryGxUmfEwaKAtsGkU3QFy3ze09rUvjULaBbT2wwKaAXtgYZT0R0DCfvv07wvZBLgCYyOY1u0DmAJyfQ8f0LpRx5indr8CDiEgNxmtob52q08hF+gCnH9MJXk57yofIaCYeqPl7S0HgwOScFmErC0n6hzShkNrX4BCiv2XQu7XdG3dmOeuakkKFaBWyqzPstAuSX2flEOpi/vmJwGVpA4ldXYKZZdDBahVILuuQ/qxOzCyiJHj8wlIDxjsy2SOdK5yhCyNoE6N/6jO1Yghzq3m70ecx0Sr7IBe7ntyJT9O4NQAAAAASUVORK5CYII="/>
										</div>
										<div class="dropdown">
											<button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
												<a class="dropdown-item" href="javascript:void(0);">View More</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>
									<span class="d-block mb-1">Events</span>
									<h3 class="card-title text-nowrap mb-2">{{ count($events) }}</h3>
									<small class="text-success fw-semibold">As of today</small>
								</div>
							</div>
						</div>
						<div class="col-6 mb-4">
							{{-- <div class="card">
								<div class="card-body">
									<div class="card-title d-flex align-items-start justify-content-between">
										<div class="avatar flex-shrink-0">
											<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAAAAXNSR0IArs4c6QAAAfhJREFUWEftloExBEEQRb8IEAEZIAIyQAZEgAgQARkgAkSADIgAGRAB9ZhRXb0zO713q46q66qrq5qd7nnT8/fPLuiPxcIf49EcqHUiY3foUNKapHtJD5JeWgD++dhAgGymRXYl3cwa6MMALEt6myXQlqS7BPAqaXUoDPPHPDL0c5YgriTtzRoIvWwniCNJ57MG4o1aSRAbkh5/E2hJ0kUS6X5hIfTybMatFC4lLUoirynyiIbWEwz/BIVZxMaOpOs0gP8gcAIdsRGCjpHb27kWEAtRkA7lOJV04oDQy0Eas8+Zd2zm0iGgqv7UB+SLvacdl4r1GSKbyseW2agNeCdKQFkvFMrxlGBq7W4ZIscNFNdKDjbW0ZUH8noh+TbB1AQZNUQ2ClS2hqKuPJB9dUko6cW3eagheinQdWziKzwQD21bq2ftWj/EED0QcshvcAcofNYGKGqIIW3WRN086wTUZ4j2aMPaHPLalzykZogWJuplRQ15wbY8pGaI1m+sMfZ5WQiISV5X9upofSHaq6PlZWEgJmYP4djsd07LEMlFj+STN8rl2vX375GoIdbyi+Oty7Wv2FBDDIFNAzTKF6KnnAYoaoihztSujmhy1BCj9X7mTdqhiCEOhildrtEidIi3jB9e5D9po3U68ybt0MQLthLnQP+uQ597P3wlqYDcdAAAAABJRU5ErkJggg=="/>
										</div>
										<div class="dropdown">
											<button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu" aria-labelledby="cardOpt1">
												<a class="dropdown-item" href="javascript:void(0);">View More</a>
											</div>
										</div>
									</div>
									<span class="fw-semibold d-block mb-1">Under Development</span>
									<h3 class="card-title mb-2">$14,857</h3>
									<small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
								</div>
							</div> --}}
						</div>
					</div>
				</div>
				<!-- Total Revenue -->
				{{-- <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
					<div class="card">
						<div class="row row-bordered g-0">
							<div class="col-md-8">
								<h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>
								<div id="totalRevenueChart" class="px-2"></div>
							</div>
							<div class="col-md-4">
								<div class="card-body">
									<div class="text-center">
										<div class="dropdown">
											<button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="growthReportId"
												data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												2022
											</button>
											<div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
												<a class="dropdown-item" href="javascript:void(0);">2021</a>
												<a class="dropdown-item" href="javascript:void(0);">2020</a>
												<a class="dropdown-item" href="javascript:void(0);">2019</a>
											</div>
										</div>
									</div>
								</div>
								<div id="growthChart"></div>
								<div class="text-center fw-semibold pt-3 mb-2">62% Company Growth</div>

								<div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
									<div class="d-flex">
										<div class="me-2">
											<span class="badge bg-label-primary p-2"><i class="bx bx-dollar text-primary"></i></span>
										</div>
										<div class="d-flex flex-column">
											<small>2022</small>
											<h6 class="mb-0">$32.5k</h6>
										</div>
									</div>
									<div class="d-flex">
										<div class="me-2">
											<span class="badge bg-label-info p-2"><i class="bx bx-wallet text-info"></i></span>
										</div>
										<div class="d-flex flex-column">
											<small>2021</small>
											<h6 class="mb-0">$41.2k</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
				<!--/ Total Revenue -->
				{{-- <div class="col-12 col-md-8 col-lg-4 order-3 order-md-2">
					<div class="row">
						<div class="col-6 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title d-flex align-items-start justify-content-between">
										<div class="avatar flex-shrink-0">
											<img src="../assets/img/icons/unicons/paypal.png" alt="Credit Card" class="rounded" />
										</div>
										<div class="dropdown">
											<button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
												<a class="dropdown-item" href="javascript:void(0);">View More</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>
									<span class="d-block mb-1">Payments</span>
									<h3 class="card-title text-nowrap mb-2">$2,456</h3>
									<small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
								</div>
							</div>
						</div>
						<div class="col-6 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="card-title d-flex align-items-start justify-content-between">
										<div class="avatar flex-shrink-0">
											<img src="../assets/img/icons/unicons/cc-primary.png" alt="Credit Card" class="rounded" />
										</div>
										<div class="dropdown">
											<button class="btn p-0" type="button" id="cardOpt1" data-bs-toggle="dropdown" aria-haspopup="true"
												aria-expanded="false">
												<i class="bx bx-dots-vertical-rounded"></i>
											</button>
											<div class="dropdown-menu" aria-labelledby="cardOpt1">
												<a class="dropdown-item" href="javascript:void(0);">View More</a>
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
											</div>
										</div>
									</div>
									<span class="fw-semibold d-block mb-1">Transactions</span>
									<h3 class="card-title mb-2">$14,857</h3>
									<small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
										<div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
											<div class="card-title">
												<h5 class="text-nowrap mb-2">Profile Report</h5>
												<span class="badge bg-label-warning rounded-pill">Year 2021</span>
											</div>
											<div class="mt-sm-auto">
												<small class="text-success text-nowrap fw-semibold"><i class="bx bx-chevron-up"></i> 68.2%</small>
												<h3 class="mb-0">$84,686k</h3>
											</div>
										</div>
										<div id="profileReportChart"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
			</div>
			{{-- <div class="row">
				<!-- Order Statistics -->
				<div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-4">
					<div class="card h-100">
						<div class="card-header d-flex align-items-center justify-content-between pb-0">
							<div class="card-title mb-0">
								<h5 class="m-0 me-2">Order Statistics</h5>
								<small class="text-muted">42.82k Total Sales</small>
							</div>
							<div class="dropdown">
								<button class="btn p-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									<i class="bx bx-dots-vertical-rounded"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
									<a class="dropdown-item" href="javascript:void(0);">Select All</a>
									<a class="dropdown-item" href="javascript:void(0);">Refresh</a>
									<a class="dropdown-item" href="javascript:void(0);">Share</a>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-center mb-3">
								<div class="d-flex flex-column align-items-center gap-1">
									<h2 class="mb-2">8,258</h2>
									<span>Total Orders</span>
								</div>
								<div id="orderStatisticsChart"></div>
							</div>
							<ul class="p-0 m-0">
								<li class="d-flex mb-4 pb-1">
									<div class="avatar flex-shrink-0 me-3">
										<span class="avatar-initial rounded bg-label-primary"><i class="bx bx-mobile-alt"></i></span>
									</div>
									<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
										<div class="me-2">
											<h6 class="mb-0">Electronic</h6>
											<small class="text-muted">Mobile, Earbuds, TV</small>
										</div>
										<div class="user-progress">
											<small class="fw-semibold">82.5k</small>
										</div>
									</div>
								</li>
								<li class="d-flex mb-4 pb-1">
									<div class="avatar flex-shrink-0 me-3">
										<span class="avatar-initial rounded bg-label-success"><i class="bx bx-closet"></i></span>
									</div>
									<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
										<div class="me-2">
											<h6 class="mb-0">Fashion</h6>
											<small class="text-muted">T-shirt, Jeans, Shoes</small>
										</div>
										<div class="user-progress">
											<small class="fw-semibold">23.8k</small>
										</div>
									</div>
								</li>
								<li class="d-flex mb-4 pb-1">
									<div class="avatar flex-shrink-0 me-3">
										<span class="avatar-initial rounded bg-label-info"><i class="bx bx-home-alt"></i></span>
									</div>
									<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
										<div class="me-2">
											<h6 class="mb-0">Decor</h6>
											<small class="text-muted">Fine Art, Dining</small>
										</div>
										<div class="user-progress">
											<small class="fw-semibold">849k</small>
										</div>
									</div>
								</li>
								<li class="d-flex">
									<div class="avatar flex-shrink-0 me-3">
										<span class="avatar-initial rounded bg-label-secondary"><i class="bx bx-football"></i></span>
									</div>
									<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
										<div class="me-2">
											<h6 class="mb-0">Sports</h6>
											<small class="text-muted">Football, Cricket Kit</small>
										</div>
										<div class="user-progress">
											<small class="fw-semibold">99</small>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!--/ Order Statistics -->

				<!-- Expense Overview -->
				<div class="col-md-6 col-lg-4 order-1 mb-4">
					<div class="card h-100">
						<div class="card-header">
							<ul class="nav nav-pills" role="tablist">
								<li class="nav-item">
									<button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
										data-bs-target="#navs-tabs-line-card-income" aria-controls="navs-tabs-line-card-income" aria-selected="true">
										Income
									</button>
								</li>
								<li class="nav-item">
									<button type="button" class="nav-link" role="tab">Expenses</button>
								</li>
								<li class="nav-item">
									<button type="button" class="nav-link" role="tab">Profit</button>
								</li>
							</ul>
						</div>
						<div class="card-body px-0">
							<div class="tab-content p-0">
								<div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
									<div class="d-flex p-4 pt-3">
										<div class="avatar flex-shrink-0 me-3">
											<img src="../assets/img/icons/unicons/wallet.png" alt="User" />
										</div>
										<div>
											<small class="text-muted d-block">Total Balance</small>
											<div class="d-flex align-items-center">
												<h6 class="mb-0 me-1">$459.10</h6>
												<small class="text-success fw-semibold">
													<i class="bx bx-chevron-up"></i>
													42.9%
												</small>
											</div>
										</div>
									</div>
									<div id="incomeChart"></div>
									<div class="d-flex justify-content-center pt-4 gap-2">
										<div class="flex-shrink-0">
											<div id="expensesOfWeek"></div>
										</div>
										<div>
											<p class="mb-n1 mt-1">Expenses This Week</p>
											<small class="text-muted">$39 less than last week</small>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ Expense Overview -->

				<!-- Transactions -->
				<div class="col-md-6 col-lg-4 order-2 mb-4">
					<div class="card h-100">
						<div class="card-header d-flex align-items-center justify-content-between">
							<h5 class="card-title m-0 me-2">Transactions</h5>
							<div class="dropdown">
								<button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true"
									aria-expanded="false">
									<i class="bx bx-dots-vertical-rounded"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
									<a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
									<a class="dropdown-item" href="javascript:void(0);">Last Month</a>
									<a class="dropdown-item" href="javascript:void(0);">Last Year</a>
								</div>
							</div>
						</div>
						<div class="card-body">
							<ul class="p-0 m-0">
								<li class="d-flex mb-4 pb-1">
									<div class="avatar flex-shrink-0 me-3">
										<img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded" />
									</div>
									<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
										<div class="me-2">
											<small class="text-muted d-block mb-1">Paypal</small>
											<h6 class="mb-0">Send money</h6>
										</div>
										<div class="user-progress d-flex align-items-center gap-1">
											<h6 class="mb-0">+82.6</h6>
											<span class="text-muted">USD</span>
										</div>
									</div>
								</li>
								<li class="d-flex mb-4 pb-1">
									<div class="avatar flex-shrink-0 me-3">
										<img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
									</div>
									<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
										<div class="me-2">
											<small class="text-muted d-block mb-1">Wallet</small>
											<h6 class="mb-0">Mac'D</h6>
										</div>
										<div class="user-progress d-flex align-items-center gap-1">
											<h6 class="mb-0">+270.69</h6>
											<span class="text-muted">USD</span>
										</div>
									</div>
								</li>
								<li class="d-flex mb-4 pb-1">
									<div class="avatar flex-shrink-0 me-3">
										<img src="../assets/img/icons/unicons/chart.png" alt="User" class="rounded" />
									</div>
									<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
										<div class="me-2">
											<small class="text-muted d-block mb-1">Transfer</small>
											<h6 class="mb-0">Refund</h6>
										</div>
										<div class="user-progress d-flex align-items-center gap-1">
											<h6 class="mb-0">+637.91</h6>
											<span class="text-muted">USD</span>
										</div>
									</div>
								</li>
								<li class="d-flex mb-4 pb-1">
									<div class="avatar flex-shrink-0 me-3">
										<img src="../assets/img/icons/unicons/cc-success.png" alt="User" class="rounded" />
									</div>
									<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
										<div class="me-2">
											<small class="text-muted d-block mb-1">Credit Card</small>
											<h6 class="mb-0">Ordered Food</h6>
										</div>
										<div class="user-progress d-flex align-items-center gap-1">
											<h6 class="mb-0">-838.71</h6>
											<span class="text-muted">USD</span>
										</div>
									</div>
								</li>
								<li class="d-flex mb-4 pb-1">
									<div class="avatar flex-shrink-0 me-3">
										<img src="../assets/img/icons/unicons/wallet.png" alt="User" class="rounded" />
									</div>
									<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
										<div class="me-2">
											<small class="text-muted d-block mb-1">Wallet</small>
											<h6 class="mb-0">Starbucks</h6>
										</div>
										<div class="user-progress d-flex align-items-center gap-1">
											<h6 class="mb-0">+203.33</h6>
											<span class="text-muted">USD</span>
										</div>
									</div>
								</li>
								<li class="d-flex">
									<div class="avatar flex-shrink-0 me-3">
										<img src="../assets/img/icons/unicons/cc-warning.png" alt="User" class="rounded" />
									</div>
									<div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
										<div class="me-2">
											<small class="text-muted d-block mb-1">Mastercard</small>
											<h6 class="mb-0">Ordered Food</h6>
										</div>
										<div class="user-progress d-flex align-items-center gap-1">
											<h6 class="mb-0">-92.45</h6>
											<span class="text-muted">USD</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!--/ Transactions -->
			</div> --}}
		</div>
		<!-- / Content -->

		<!-- Footer -->
		{{-- <footer class="content-footer footer bg-footer-theme">
			<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
				<div class="mb-2 mb-md-0">
					©
					<script>
						document.write(new Date().getFullYear());
					</script>
					, made with ❤️ by
					<a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
				</div>
				<div>
					<a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
					<a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

					<a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank"
						class="footer-link me-4">Documentation</a>

					<a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
						class="footer-link me-4">Support</a>
				</div>
			</div>
		</footer> --}}
		<!-- / Footer -->

		<div class="content-backdrop fade"></div>
	</div>
@endsection
