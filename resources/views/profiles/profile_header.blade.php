<div class="columns is-multiline no-margin">
	<!-- Left side column -->
	<div class="column is-paddingless">
		<!-- Timeline Header -->
		<!-- html/partials/pages/profile/timeline/timeline-header.html -->
		<div class="cover-bg">
			<img class="cover-image" src="@if($coverProfile != null){{ asset($coverProfile->image) }}@endif" onerror="this.src='https://via.placeholder.com/1600x460';"
				id='cover-image' data-demo-src="@if($coverProfile != null){{ asset($coverProfile->image) }}@endif" alt="">
			<div class="avatar">
				<img id="user-avatar" class="avatar-image" src="@if($avatarProfile != null){{ asset($avatarProfile->avatar) }}@endif"
					data-demo-src="@if($avatarProfile != null){{ asset($avatarProfile->avatar) }}@endif" onerror="this.src='{{ URL::asset('/images/no_image.png') }}';"
					alt="Profile Picture">
				{{-- @if ($user->id == auth()->user()->id) --}}
				<div class="avatar-button">
					<i data-feather="plus"></i>
				</div>
				{{-- @endif --}}
				@if ($user->id == auth()->user()->id)
					<div class="pop-button is-far-left has-tooltip modal-trigger" data-modal="change-profile-pic-modal"
						data-placement="right" data-title="Change profile picture">
						<a class="inner">
							<i data-feather="camera"></i>
						</a>
					</div>
				@endif
				@if ($user->id != auth()->user()->id)
					<div id="follow-pop" onclick='follow({{ $user->id }})'
						class="pop-button pop-shift is-left has-tooltip @if ($user->followers->where('follower_id', auth()->user()->id)->first() != null) is-shifted @endif"
						data-id='{{ $user->id }}' data-name='{{ $user->name }}' data-placement="top"
						data-title="@if ($user->followers->where('follower_id', auth()->user()->id)->first() != null) Unfollow @else Follow @endif">
						<a class="inner">
							<i class="inactive-icon" data-feather="bell"></i>
							<i class="active-icon" data-feather="bell-off"></i>
						</a>
					</div>
				@endif
				@if ($user->id != auth()->user()->id)
					<div id="invite-pop" class="pop-button pop-shift is-center has-tooltip is-hidden" data-placement="top"
						data-title="Relationship">
						<a href="#" class="inner">
							<i class="inactive-icon" data-feather="plus"></i>
							<i class="active-icon" data-feather="minus"></i>
						</a>
					</div>
				@endif
				<div id="chat-pop" class="pop-button is-right has-tooltip is-hidden" data-placement="top" data-title="Chat">
					<a class="inner">
						<i data-feather="message-circle"></i>
					</a>
				</div>
				<div class="pop-button is-far-right has-tooltip is-hidden" data-placement="right" data-title="Send message">
					<a href="messages-inbox.html" class="inner">
						<i data-feather="mail"></i>
					</a>
				</div>
			</div>
			<div class="cover-overlay"></div>
			@if ($user->id == auth()->user()->id)
				<div class="cover-edit modal-trigger" data-modal="change-cover-modal">
					<i class="mdi mdi-camera"></i>
					<span>Edit cover image</span>
				</div>
			@endif
			<!--/html/partials/pages/profile/timeline/dropdowns/timeline-mobile-dropdown.html-->
			<div class="dropdown is-spaced is-right is-accent dropdown-trigger timeline-mobile-dropdown is-hidden-desktop">
				<div>
					<div class="button">
						<i data-feather="more-vertical"></i>
					</div>
				</div>
				<div class="dropdown-menu" role="menu">
					<div class="dropdown-content">
						<a href="#" class="dropdown-item">
							<div class="media">
								<i data-feather="activity"></i>
								<div class="media-content">
									<h3>Timeline</h3>
									<small>Open Timeline.</small>
								</div>
							</div>
						</a>
						<a href="#" class="dropdown-item">
							<div class="media">
								<i data-feather="align-right"></i>
								<div class="media-content">
									<h3>About</h3>
									<small>See about info.</small>
								</div>
							</div>
						</a>
						<a href="#" class="dropdown-item">
							<div class="media">
								<i data-feather="heart"></i>
								<div class="media-content">
									<h3>Friends</h3>
									<small>See friends.</small>
								</div>
							</div>
						</a>
						<a href="#" class="dropdown-item">
							<div class="media">
								<i data-feather="image"></i>
								<div class="media-content">
									<h3>Photos</h3>
									<small>See all photos.</small>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div class="profile-menu is-hidden-mobile">
			<div class="menu-start">
				<a href="{{ url('profile?id='.$id) }}" class="button has-min-width {{ $header == 'Profile' ? 'is-active' : '' }}">Timeline</a>
				{{-- <a href="#" class="button has-min-width ">About</a> --}}
			</div>
			<div class="menu-end">
				{{-- <a id="profile-friends-link" href="#" class="button has-min-width">Friends</a> --}}
				<a href="{{ url('profilePhotos?id='.$id) }}" class="button has-min-width {{ $header == 'ProfilePhotos' ? 'is-active' : '' }}">Photos</a>
			</div>
		</div>

		<div class="profile-subheader">
			<div class="subheader-start is-hidden-mobile">
				<span>{{ $user->following->count() }}</span>
				<span>Following</span>
			</div>
			<div class="subheader-middle">
				<h2> {{ $user->name }}</h2>
				<span></span>
			</div>
			<div class="subheader-end is-hidden-mobile">
				<a class="button has-icon is-bold">
					<i data-feather="clock"></i>
					History
				</a>
			</div>
		</div>
	</div>

</div>
