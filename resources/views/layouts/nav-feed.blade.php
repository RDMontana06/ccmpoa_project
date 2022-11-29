<div id="main-navbar" class="navbar navbar-v1 is-inline-flex is-transparent no-shadow is-hidden-mobile">
	<div class="container is-fluid">
		<div class="navbar-brand">
			<a href="{{ url('/') }}" class="navbar-item">
				<img class="logo light-image" src="{{ asset('assets/img/logo/logo.svg') }}" width="112" height="28"
					alt="">
				<img class="logo dark-image" src="{{ asset('assets/img/logo/logo.svg') }}" width="112" height="28"
					alt="">
			</a>
		</div>
		<div class="navbar-menu">
			<div class="navbar-start" style="flex-grow: 1; justify-content: center;">
				<!-- Navbar Search -->
				<div class="navbar-item is-icon drop-trigger">
					<a class="icon-link {{ $header == 'main' ? 'is-active' : '' }}" href="{{ url('/') }}" title="Main Feed">
						<i data-feather="home"></i>
						<span class="indicator"></span>
					</a>
				</div>
				<div class="navbar-item is-icon drop-trigger">
					<a class="icon-link {{ $header == 'eventSettings' ? 'is-active' : '' }}" href="{{ url('event') }}" title="Events">
						<i data-feather="calendar"></i>
						<span class="indicator"></span>
					</a>
				</div>
				<div class="navbar-item is-icon drop-trigger">
					<a class="icon-link {{ $header == 'Marketplace' ? 'is-active' : '' }}" href="{{ url('marketplace') }}"
						title="Marketplace">
						<i data-feather="shopping-cart"></i>
						<span class="indicator"></span>
					</a>
				</div>
			</div>

			<div class="navbar-end">
				<div id="account-dropdown" class="navbar-item is-account drop-trigger has-caret">
					<div class="user-image">
						<img src="{{ asset(auth()->user()->profile_picture) }}"
							data-demo-src="{{ asset(auth()->user()->profile_picture) }}" alt=""
							onerror="this.src='{{ URL::asset('/images/no_image.png') }}';">
						<span class="indicator"></span>
					</div>

					<div class="nav-drop is-account-dropdown">
						<div class="inner">
							<div class="nav-drop-header">
								<span class="username">{{ auth()->user()->name }}</span>
								<label class="theme-toggle">
									<input type="checkbox">
									<span class="toggler">
										<span class="dark">
											<i data-feather="moon"></i>
										</span>
										<span class="light">
											<i data-feather="sun"></i>
										</span>
									</span>
								</label>
							</div>
							<div class="nav-drop-body account-items">
								<a id="profile-link" href="{{ url('profile') }}" class="account-item">
									<div class="media">
										<div class="media-left">
											<div class="image">
												<img src="{{ asset(auth()->user()->profile_picture) }}"
													data-demo-src="{{ asset(auth()->user()->profile_picture) }}"
													onerror="this.src='{{ URL::asset('/images/no_image.png') }}';" alt="">
											</div>
										</div>
										<div class="media-content">
											<h3>{{ auth()->user()->name }}</h3>
										</div>
										<div class="media-right">
											<i data-feather="check"></i>
										</div>
									</div>
								</a>
								<hr class="account-divider">
								<a href="{{ url('admin_index') }}" class="account-item">
									<div class="media">
										<div class="icon-wrap">
											<i data-feather="settings"></i>
										</div>
										<div class="media-content">
											<h3>Admin Dashboard</h3>
											<small>Access admin settings.</small>
										</div>
									</div>
								</a>
								<a class="account-item" href="{{ route('logout') }}"
									onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
									<div class="media">
										<div class="icon-wrap">
											<i data-feather="power"></i>
										</div>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
										<div class="media-content">
											<h3>Log out</h3>
											<small>Log out from your account.</small>
										</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<nav class="navbar mobile-navbar is-hidden-desktop" aria-label="main navigation">
	<!-- Brand -->
	<div class="navbar-brand">
		<a class="navbar-item" href="/">
			<img class="light-image" src="{{ asset('assets/img/logo/logo.svg') }}" alt="">
			<img class="dark-image" src="{{ asset('assets/img/logo/logo.svg') }}" alt="">
		</a>

		<div class="navbar-item is-icon drop-trigger">
			<div class="navbar-item is-icon drop-trigger">
				<a class="icon-link {{ $header == 'main' ? 'is-active' : '' }}" href="{{ url('/') }}" title="Main Feed">
					<i data-feather="home"></i>
					<span class="indicator"></span>
				</a>
			</div>
			<div class="navbar-item is-icon drop-trigger">
				<a class="icon-link {{ $header == 'eventSettings' ? 'is-active' : '' }}" href="{{ url('event') }}"
					title="Events">
					<i data-feather="calendar"></i>
					<span class="indicator"></span>
				</a>
			</div>
			<div class="navbar-item is-icon drop-trigger">
				<a class="icon-link {{ $header == 'marketplace' ? 'is-active' : '' }}"" href="{{ url('marketplace') }}"
					title="Marketplace">
					<i data-feather="shopping-cart"></i>
					<span class="indicator"></span>
				</a>
			</div>

		</div>
		{{-- <div id="mobile-explorer-trigger" class="navbar-item is-icon">
			<a class="icon-link is-primary">
				<i class="mdi mdi-apps"></i>
			</a>
		</div>

		<div id="open-mobile-search" class="navbar-item is-icon">
			<a class="icon-link is-primary" href="javascript:void(0);">
				<i data-feather="search"></i>
			</a>
		</div> --}}

		<!-- Mobile menu toggler icon -->
		<div class="navbar-burger">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- Navbar mobile menu -->
	<div class="navbar-menu">
		<!-- Account -->
		<div class="navbar-item has-dropdown is-active">
			<a href="{{ url('profile') }}" class="navbar-link">
				<img src="{{ asset(auth()->user()->profile_picture) }}"
					data-demo-src="{{ asset(auth()->user()->profile_picture) }}"
					data-demo-src="{{ asset(auth()->user()->profile_picture) }}" alt="">
				<span class="is-heading">{{ auth()->user()->name }}</span>
			</a>

			<!-- Mobile Dropdown -->
		</div>

		<!-- More -->
		<div class="navbar-item has-dropdown">
			<!-- Mobile Dropdown -->
			<div class="navbar-dropdown">
				<a href="{{ url('adminEvents') }}" class="navbar-item is-flex is-mobile-icon">
					<span><i data-feather="settings"></i>Admin Dashboard</span>
				</a>
				<a href="{{ route('logout') }}"
					onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
					class="navbar-item is-flex is-mobile-icon">
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
					<span><i data-feather="log-out"></i>Logout</span>
				</a>
			</div>
		</div>
	</div>
	<!--Search-->
	{{-- <div class="mobile-search is-hidden">
		<div class="control">
			<input id="tipue_drop_input_mobile" class="input" placeholder="Search...">
			<div class="form-icon">
				<i data-feather="search"></i>
			</div>
			<div class="close-icon">
				<i data-feather="x"></i>
			</div>
			<div id="tipue_drop_content_mobile" class="tipue-drop-content"></div>
		</div>
	</div> --}}
</nav>
