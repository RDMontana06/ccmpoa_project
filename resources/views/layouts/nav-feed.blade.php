<div class="navbar-v2">
	<div class="top-nav">
		<div class="left">
			<div class="brand">
				<a href="/" class="navbar-logo">
					<img class="logo light-image" src="{{ asset('assets/img/logo/logo.svg') }}" width="112" height="28"
						alt="">
					<img class="logo dark-image" src="{{ asset('assets/img/logo/logo.svg') }}" width="112" height="28"
						alt="">
				</a>
			</div>
			<div class="search">
				<div class="navbar-item">
					<div id="global-search" class="control">
						<input id="tipue_drop_input" class="input is-rounded" type="text" placeholder="Search" required>
						<span id="clear-search" class="reset-search">
							<i data-feather="x"></i>
						</span>
						<span class="search-icon">
							<i data-feather="search"></i>
						</span>

						<div id="tipue_drop_content" class="tipue-drop-content"></div>
					</div>

				</div>
			</div>
		</div>
		<div class="right">
			<div id="open-mobile-search" class="navbar-item is-icon">
				<a class="icon-link is-primary" href="javascript:void(0);">
					<i data-feather="search"></i>
				</a>
			</div>
			<div class="navbar-item is-icon drop-trigger">
				<a class="icon-link" title="Click to tour this page" onclick="tourFeed()" href="javascript:void(0);">
					<i data-feather="info"></i>
					<span class="indicator"></span>
				</a>
			</div>
			<div id="account-dropdown" class="navbar-item is-account drop-trigger has-caret">
				<div class="user-image">
					<img src="{{ asset(auth()->user()->profile_picture) }}"
						data-demo-src="{{ asset(auth()->user()->profile_picture) }}"
						onerror="this.src='{{ URL::asset('/assets/img/avatar/no-user-image.png') }}';"
						alt=">
					<span class="indicator"></span>

				</div>

				<div class="nav-drop is-account-dropdown">
					<div class="inner">
						<div class="nav-drop-header">
							<span class="username"> {{ auth()->user()->name }}</span>
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
												onerror="this.src='{{ URL::asset('assets/img/avatar/no-user-image.png') }}';" alt="">
										</div>
									</div>
									<div class="media-content">
										<h3> {{ auth()->user()->name }}</h3>
										<small>Main account</small>
									</div>
									<div class="media-right">
										<i data-feather="check"></i>
									</div>
								</div>
							</a>
							<hr class="account-divider">
							@if (auth()->user()->role_id == 1)
								<a href="{{ 'admin_index' }}" class="account-item">
									<div class="media">
										<div class="icon-wrap">
											<i data-feather="settings"></i>
										</div>
										<div class="media-content">
											<h3>Admin Dashboard</h3>
											<small>Access administrator dashboard</small>
										</div>
									</div>
								</a>
							@endif

							{{-- <a class="account-item">
								<div class="media">
									<div class="icon-wrap">
										<i data-feather="life-buoy"></i>
									</div>
									<div class="media-content">
										<h3>Help</h3>
										<small>Contact our support.</small>
									</div>
								</div>
							</a> --}}
							<a class="account-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
								<div class="media">
									<div class="icon-wrap">
										<i data-feather="power"></i>
									</div>
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
		<!--Search-->
		<div class="mobile-search is-hidden">
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
		</div>
	</div>
	<div class="sub-nav">
		<div class="sub-nav-tabs">
			<div class="tabs is-centered">
				<ul>
					<li class="@if ($header == 'main') is-active @endif">
						<a href="{{ url('/') }}">Feed</a>
					</li>
					<li class="@if ($header == 'events') is-active @endif">
						<a href="{{ url('event') }}">Events</a>
					</li>
					<li class="@if ($header == 'marketplace') is-active @endif">
						<a href="{{ url('marketplace') }}">Marketplace</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
