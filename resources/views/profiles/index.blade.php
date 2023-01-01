@extends('layouts.main')
@section('title', 'CCMPOA.org | Profile')

@section('content')
	<div class="view-wrapper">
		<div id="main-feed" class="navbar-v2-wrapper">
			<div class="container is-custom">
				<!-- Profile page main wrapper -->
				<div id="profile-main" class="view-wrap is-headless">
					@include('profiles.profile_header')

					<div class="columns profile-main">
						<div id="profile-timeline-widgets" class="column is-4">

							<!-- Basic Infos widget -->
							<!-- html/partials/pages/profile/timeline/widgets/basic-infos-widget.html -->
							<div class="box-heading">
								<h4>Basic Infos</h4>
								<div class="dropdown is-neutral is-spaced is-right dropdown-trigger">
									<div>
										<div class="button">
											<i data-feather="more-vertical"></i>
										</div>
									</div>
									@if ($user->id == auth()->user()->id)
										<div class="dropdown-menu" role="menu">
											<div class="dropdown-content">
												<a href="javascript:void(0);" data-modal="edit-info" class="dropdown-item modal-trigger">
													<div class="media">
														<i data-feather="eye"></i>
														<div class="media-content">
															<h3>View</h3>
															<small>Update Personal Information.</small>
														</div>
													</div>
												</a>
												<a href="#" class="dropdown-item is-hidden">
													<div class="media">
														<i data-feather="search"></i>
														<div class="media-content">
															<h3>Related</h3>
															<small>Search for related users.</small>
														</div>
													</div>
												</a>
											</div>
										</div>
									@endif
								</div>
							</div>

							<div class="basic-infos-wrapper">
								<div class="card is-profile-info">
									<div class="info-row">
										<div>
											<span>Studied at</span>
											<a class="is-inverted">
												@if ($user->information)
													{{ $user->information->studied_at }}
												@endif
											</a>
										</div>
										<i class="mdi mdi-school"></i>
									</div>
									<div class="info-row is-hidden">
										<div>
											<span>Married to</span>
											<a class="is-inverted">Dan Walker</a>
										</div>
										<i class="mdi mdi-heart"></i>
									</div>
									<div class="info-row">
										<div>
											<span>From</span>
											<a class="is-inverted">
												@if ($user->information)
													{{ $user->information->place_from }}
												@endif
											</a>
										</div>
										<i class="mdi mdi-earth"></i>
									</div>
									<div class="info-row">
										<div>
											<span>Lives in</span>
											<a class="is-inverted">
												@if ($user->information)
													{{ $user->information->lives_in }}
												@endif
											</a>
										</div>
										<i class="mdi mdi-map-marker"></i>
									</div>
									<div class="info-row">
										<div>
											<span>Followers</span>
											<a class="is-muted"><span id='followers-data'>{{ $user->followers->count() }}</span> followers</a>
										</div>
										<i class="mdi mdi-bell-ring"></i>
									</div>
								</div>
							</div>
							<!-- Photos widget -->
							<!-- html/partials/pages/profile/timeline/widgets/photos-widget.html -->
							<div class="box-heading">
								<h4>Photos</h4>
								<div class="dropdown is-neutral is-spaced is-right dropdown-trigger is-hidden">
									<div>
										<div class="button">
											<i data-feather="more-vertical"></i>
										</div>
									</div>
									<div class="dropdown-menu" role="menu">
										<div class="dropdown-content">
											<a class="dropdown-item">
												<div class="media">
													<i data-feather="image"></i>
													<div class="media-content">
														<h3>View Photos</h3>
														<small>View all your photos</small>
													</div>
												</div>
											</a>
											<a href="#" class="dropdown-item">
												<div class="media">
													<i data-feather="tag"></i>
													<div class="media-content">
														<h3>Tagged</h3>
														<small>View photos you are tagged in.</small>
													</div>
												</div>
											</a>
											<a href="#" class="dropdown-item">
												<div class="media">
													<i data-feather="folder"></i>
													<div class="media-content">
														<h3>Albums</h3>
														<small>Open my albums.</small>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="is-photos-widget">
								@foreach ($user->attachments as $attachment)
									<img src="{{ asset($attachment->attachment) }}" data-demo-src="{{ url($attachment->attachment) }}"
										alt="">
								@endforeach
								@if ($user->attachments->count() % 4 == 1)
									<img src="{{ asset('images/white.png') }}" alt="">
									<img src="{{ asset('images/white.png') }}" alt="">
									<img src="{{ asset('images/white.png') }}" alt="">
								@elseif($user->attachments->count() % 4 == 2)
									<img src="{{ asset('images/white.png') }}" alt="">
									<img src="{{ asset('images/white.png') }}" alt="">
								@elseif($user->attachments->count() % 4 == 3)
									<img src="{{ asset('images/white.png') }}" alt="">
								@endif
							</div>
							<!-- Star friends widget -->
							<!-- html/partials/pages/profile/timeline/widgets/star-friends-widget.html -->
							<div class="box-heading">
								<h4>Followers</h4>
								<div class="dropdown is-neutral is-spaced is-right dropdown-trigger is-hidden">
									<div>
										<div class="button">
											<i data-feather="more-vertical"></i>
										</div>
									</div>
									<div class="dropdown-menu" role="menu">
										<div class="dropdown-content">
											<a class="dropdown-item">
												<div class="media">
													<i data-feather="users"></i>
													<div class="media-content">
														<h3>All Friends</h3>
														<small>View all friends.</small>
													</div>
												</div>
											</a>
											<a href="#" class="dropdown-item">
												<div class="media">
													<i data-feather="heart"></i>
													<div class="media-content">
														<h3>Family</h3>
														<small>View family members.</small>
													</div>
												</div>
											</a>
											<a href="#" class="dropdown-item">
												<div class="media">
													<i data-feather="briefcase"></i>
													<div class="media-content">
														<h3>Work Relations</h3>
														<small>View work related friends.</small>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="friend-cards-list">

								<div class="card is-friend-card">
									@foreach ($user->followers as $follower)
										<div class="friend-item">
											<img src="{{ asset($follower->user->profile_picture) }}"
												data-demo-src="{{ asset($follower->user->profile_picture) }}" alt="" data-user-popover="1">
											<div class="text-content">
												<a href='{{ url('profile?id=' . $follower->follower_id) }}' target='_blank'>{{ $follower->user->name }}</a>
												{{-- <span>4 mutual friend(s)</span> --}}
											</div>
											<div class="star-friend is-hidden">
												<i data-feather="star"></i>
											</div>
										</div>
									@endforeach


								</div>
							</div>
							<!-- Videos widget -->
							<!-- html/partials/pages/profile/timeline/widgets/videos-widget.html -->
							<div class="box-heading is-hidden">
								<h4>Videos</h4>
								<div class="dropdown is-neutral is-spaced is-right dropdown-trigger">
									<div>
										<div class="button">
											<i data-feather="more-vertical"></i>
										</div>
									</div>
									<div class="dropdown-menu" role="menu">
										<div class="dropdown-content">
											<a class="dropdown-item">
												<div class="media">
													<i data-feather="video"></i>
													<div class="media-content">
														<h3>View Videos</h3>
														<small>View all your videos</small>
													</div>
												</div>
											</a>
											<a href="#" class="dropdown-item">
												<div class="media">
													<i data-feather="tag"></i>
													<div class="media-content">
														<h3>Tagged</h3>
														<small>View videos you are tagged in.</small>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="is-videos-widget is-hidden">

								<div class="video-container">
									<img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/videos/1.jpg"
										alt="">
									<div class="video-button">
										<img src="assets/img/icons/video/play.svg" alt="">
									</div>
									<div class="video-overlay"></div>
								</div>

								<div class="video-container">
									<img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/videos/2.jpg"
										alt="">
									<div class="video-button">
										<img src="assets/img/icons/video/play.svg" alt="">
									</div>
									<div class="video-overlay"></div>
								</div>

								<div class="video-container">
									<img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/videos/3.jpg"
										alt="">
									<div class="video-button">
										<img src="assets/img/icons/video/play.svg" alt="">
									</div>
									<div class="video-overlay"></div>
								</div>

							</div>
							<!-- Trips widget -->
							<!-- html/partials/pages/profile/timeline/widgets/trips-widget.html -->
							<div class="box-heading is-hidden">
								<h4>Trips</h4>
								<div class="dropdown is-neutral is-spaced is-right dropdown-trigger">
									<div>
										<div class="button">
											<i data-feather="more-vertical"></i>
										</div>
									</div>
									<div class="dropdown-menu" role="menu">
										<div class="dropdown-content">
											<a class="dropdown-item">
												<div class="media">
													<i data-feather="globe"></i>
													<div class="media-content">
														<h3>View my Trips</h3>
														<small>View all your trips</small>
													</div>
												</div>
											</a>
											<a href="#" class="dropdown-item">
												<div class="media">
													<i data-feather="compass"></i>
													<div class="media-content">
														<h3>Suggestions</h3>
														<small>View trendy suggestions.</small>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>

							<div class="trip-cards-list is-hidden">
								<div class="card is-trip-card">

									<div class="trip-item">
										<img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/trips/1.jpg"
											alt="">
										<div class="text-content">
											<a>New York, NY, USA</a>
											<span>4 months ago</span>
										</div>
									</div>
									<div class="trip-item">
										<img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/trips/2.jpg"
											alt="">
										<div class="text-content">
											<a>Paris, France</a>
											<span>8 months ago</span>
										</div>
									</div>
									<div class="trip-item">
										<img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/trips/3.jpg"
											alt="">
										<div class="text-content">
											<a>Madrid, Spain</a>
											<span>a year ago</span>
										</div>
									</div>
									<div class="trip-item">
										<img src="https://via.placeholder.com/200x200" data-demo-src="assets/img/demo/widgets/trips/4.jpg"
											alt="">
										<div class="text-content">
											<a>Marrakech, Morocco</a>
											<span>a year ago</span>
										</div>
									</div>

								</div>
							</div>
							<div class="box-heading is-hidden">
								<h4>Events</h4>
								<div class="dropdown is-neutral is-spaced is-right dropdown-trigger">
									<div>
										<div class="button">
											<i data-feather="more-vertical"></i>
										</div>
									</div>
									<div class="dropdown-menu" role="menu">
										<div class="dropdown-content">
											<a class="dropdown-item">
												<div class="media">
													<i data-feather="calendar"></i>
													<div class="media-content">
														<h3>All Events</h3>
														<small>View all your events</small>
													</div>
												</div>
											</a>
											<a href="#" class="dropdown-item">
												<div class="media">
													<i data-feather="search"></i>
													<div class="media-content">
														<h3>Search</h3>
														<small>Search for events.</small>
													</div>
												</div>
											</a>
											<a href="#" class="dropdown-item">
												<div class="media">
													<i data-feather="compass"></i>
													<div class="media-content">
														<h3>Suggestions</h3>
														<small>View trendy suggestions.</small>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>

							<!-- Schedule calendar widget -->
							<!-- html/partials/widgets/schedule/schedule-widget.html -->
							<div class="schedule is-hidden">
								<div class="schedule-day-container hidden">
									<div class="day-header day-header--large">
										<div class="day-header-bg"></div>
										<div class="day-header-close">
											<i data-feather="x"></i>
										</div>
										<div class="day-header-content">
											<div class="day-header-title">
												<div class="day-header-title-day">24</div>
												<div class="day-header-title-month">October</div>
											</div>
											<div class="day-header-event">Workout Session</div>
										</div>
									</div>
									<div class="day-content has-slimscroll">

										<!-- Event 1 details -->
										<!-- html/partials/widgets/schedule/event-details/event-1.html -->
										<div id="event-1" class="event-details-wrap">
											<div class="meta-block">
												<i class="mdi mdi-lock"></i>
												<div class="meta">
													<span>Private</span>
													<span>This is a private event</span>
												</div>
											</div>
											<div class="meta-block">
												<i class="mdi mdi-map-marker"></i>
												<div class="meta">
													<span>Where</span>
													<span>@ Mom and Dad's house</span>
												</div>
											</div>
											<div class="meta-block">
												<i class="mdi mdi-progress-clock"></i>
												<div class="meta">
													<span>When</span>
													<span>02:00pm - 03:30pm</span>
												</div>
											</div>
											<div class="participants-wrap">
												<label>4 Participants</label>
												<div class="participants">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png"
														alt="" data-user-popover="0">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png"
														alt="" data-user-popover="9">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/stella.jpg"
														alt="" data-user-popover="2">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg"
														alt="" data-user-popover="7">
												</div>
											</div>
											<div class="event-description">
												<label>Description</label>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis commodi accusamus dolores
													itaque repudiandae.</p>
											</div>
											<hr>
											<div class="button-wrap">
												<a class="button is-bold">Participating</a>
												<a class="button is-bold">Details</a>
											</div>
										</div>
										<!-- Event 2 details -->
										<!-- html/partials/widgets/schedule/event-details/event-2.html -->
										<div id="event-2" class="event-details-wrap">
											<div class="meta-block">
												<i class="mdi mdi-lock"></i>
												<div class="meta">
													<span>Private</span>
													<span>This is a private event</span>
												</div>
											</div>
											<div class="meta-block">
												<i class="mdi mdi-map-marker"></i>
												<div class="meta">
													<span>Where</span>
													<span>@ <a class="is-inverted">Wayne's Coffeeshop</a>, LA</span>
												</div>
											</div>
											<div class="meta-block">
												<i class="mdi mdi-progress-clock"></i>
												<div class="meta">
													<span>When</span>
													<span>11:00am - 12:30pm</span>
												</div>
											</div>
											<div class="participants-wrap">
												<label>3 Participants</label>
												<div class="participants">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png"
														alt="" data-user-popover="0">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg"
														alt="" data-user-popover="4">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" alt=""
														data-user-popover="13">
												</div>
											</div>
											<div class="event-description">
												<label>Description</label>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis commodi accusamus dolores
													itaque repudiandae.</p>
											</div>
											<hr>
											<div class="button-wrap">
												<a class="button is-bold">Participating</a>
												<a class="button is-bold">Details</a>
											</div>
										</div>
										<!-- Event 3 details -->
										<!-- html/partials/widgets/schedule/event-details/event-3.html -->
										<div id="event-3" class="event-details-wrap">
											<div class="meta-block">
												<i class="mdi mdi-earth"></i>
												<div class="meta">
													<span>Public</span>
													<span>This is a public event</span>
												</div>
											</div>
											<div class="meta-block">
												<i class="mdi mdi-map-marker"></i>
												<div class="meta">
													<span>Where</span>
													<span>@ Frank's appartment</span>
												</div>
											</div>
											<div class="meta-block">
												<i class="mdi mdi-progress-clock"></i>
												<div class="meta">
													<span>When</span>
													<span>08:00pm - 02:00am</span>
												</div>
											</div>
											<div class="participants-wrap">
												<label>29 Participants</label>
												<div class="participants">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png"
														alt="" data-user-popover="0">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/elise.jpg"
														alt="" data-user-popover="6">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/daniel.jpg"
														alt="" data-user-popover="3">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/rolf.jpg" alt=""
														data-user-popover="13">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg"
														alt="" data-user-popover="7">
													<div class="is-more">+24</div>
												</div>
											</div>
											<div class="event-description">
												<label>Description</label>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis commodi accusamus dolores
													itaque repudiandae.</p>
											</div>
											<hr>
											<div class="button-wrap">
												<a class="button is-bold">Participating</a>
												<a class="button is-bold">Details</a>
											</div>
										</div>
										<!-- Event 4 details -->
										<!-- html/partials/widgets/schedule/event-details/event-4.html -->
										<div id="event-4" class="event-details-wrap">
											<div class="meta-block">
												<i class="mdi mdi-lock"></i>
												<div class="meta">
													<span>Private</span>
													<span>This is a private event</span>
												</div>
											</div>
											<div class="meta-block">
												<i class="mdi mdi-map-marker"></i>
												<div class="meta">
													<span>Where</span>
													<span>@ <a class="is-inverted">Gold Gym</a>, LA</span>
												</div>
											</div>
											<div class="meta-block">
												<i class="mdi mdi-progress-clock"></i>
												<div class="meta">
													<span>When</span>
													<span>05:00pm - 07:00pm</span>
												</div>
											</div>
											<div class="participants-wrap">
												<label>2 Participants</label>
												<div class="participants">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png"
														alt="" data-user-popover="0">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/lana.jpeg"
														alt="" data-user-popover="10">
												</div>
											</div>
											<div class="event-description">
												<label>Description</label>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis commodi accusamus dolores
													itaque repudiandae.</p>
											</div>
											<hr>
											<div class="button-wrap">
												<a class="button is-bold">Participating</a>
												<a class="button is-bold">Details</a>
											</div>
										</div>
										<!-- Event 5 details -->
										<!-- html/partials/widgets/schedule/event-details/event-5.html -->
										<div id="event-5" class="event-details-wrap">
											<div class="meta-block">
												<i class="mdi mdi-lock"></i>
												<div class="meta">
													<span>Private</span>
													<span>This is a private event</span>
												</div>
											</div>
											<div class="meta-block">
												<i class="mdi mdi-map-marker"></i>
												<div class="meta">
													<span>Where</span>
													<span>@ <a class="is-inverted">Massive Dynamics Office</a>, LA</span>
												</div>
											</div>
											<div class="meta-block">
												<i class="mdi mdi-progress-clock"></i>
												<div class="meta">
													<span>When</span>
													<span>08:30am - 10:00am</span>
												</div>
											</div>
											<div class="participants-wrap">
												<label>29 Participants</label>
												<div class="participants">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png"
														alt="" data-user-popover="0">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" alt=""
														data-user-popover="1">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg"
														alt="" data-user-popover="5">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/mike.jpg" alt=""
														data-user-popover="12">
													<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/gaelle.jpeg"
														alt="" data-user-popover="11">
													<div class="is-more">+4</div>
												</div>
											</div>
											<div class="event-description">
												<label>Description</label>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci blanditiis commodi accusamus dolores
													itaque repudiandae.</p>
											</div>
											<hr>
											<div class="button-wrap">
												<a class="button is-bold">Participating</a>
												<a class="button is-bold">Details</a>
											</div>
										</div>
									</div>
								</div>
								<div class="schedule-header">
									<div class="nav-icon">
										<i data-feather="chevron-left"></i>
									</div>
									<div class="month">October</div>
									<div class="nav-icon">
										<i data-feather="chevron-right"></i>
									</div>
								</div>
								<div class="schedule-calendar">
									<div class="calendar-row day-row">
										<div class="day day-name">M</div>
										<div class="day day-name">T</div>
										<div class="day day-name">W</div>
										<div class="day day-name">T</div>
										<div class="day day-name">F</div>
										<div class="day day-name">S</div>
										<div class="day day-name">S</div>
									</div>
									<div class="calendar-row">
										<div class="day">&nbsp;</div>
										<div class="day">&nbsp;</div>
										<div class="day">1</div>
										<div class="day event green" data-content="1" data-day="2" data-event="Eat at mom and dad's">2</div>
										<div class="day">3</div>
										<div class="day">4</div>
										<div class="day">5</div>
									</div>
									<div class="calendar-row">
										<div class="day">6</div>
										<div class="day event purple" data-content="2" data-day="7" data-event="Meet customer in LA">7</div>
										<div class="day">8</div>
										<div class="day">9</div>
										<div class="day">10</div>
										<div class="day">11</div>
										<div class="day">12</div>
									</div>
									<div class="calendar-row">
										<div class="day">13</div>
										<div class="day">14</div>
										<div class="day">15</div>
										<div class="day">16</div>
										<div class="day">17</div>
										<div class="day">18</div>
										<div class="day">19</div>
									</div>
									<div class="calendar-row">
										<div class="day">20</div>
										<div class="day">21</div>
										<div class="day event green" data-content="3" data-day="22" data-event="Frank's birthday">22</div>
										<div class="day">23</div>
										<div class="day event primary" data-content="4" data-day="24" data-event="Workout Session">24</div>
										<div class="day">25</div>
										<div class="day event purple" data-content="5" data-day="26" data-event="Project review">26</div>
									</div>
									<div class="calendar-row">
										<div class="day">27</div>
										<div class="day">28</div>
										<div class="day">29</div>
										<div class="day">30</div>
										<div class="day"></div>
										<div class="day"></div>
										<div class="day"></div>
									</div>
									<div class="next-fab">
										<i data-feather="chevron-down"></i>
									</div>
								</div>
								<div class="schedule-divider"></div>
								<div class="schedule-events">
									<div class="schedule-events-title">
										Upcoming events
									</div>
									<div class="schedule-event">
										<div class="event-date green">2</div>
										<div class="event-title">
											<span>Eat at mom and dad's</span>
											<span>07:30pm | Home</span>
										</div>
									</div>
									<div class="schedule-event">
										<div class="event-date purple">7</div>
										<div class="event-title">
											<span>Meet customer in LA</span>
											<span>11:00am | St Luc Café</span>
										</div>
									</div>
									<div class="schedule-event">
										<div class="event-date green">22</div>
										<div class="event-title">
											<span>Frank's birthday</span>
											<span>03:00pm | Frank's home</span>
										</div>
									</div>
									<div class="schedule-event">
										<div class="event-date primary">24</div>
										<div class="event-title">
											<span>Workout session</span>
											<span>07:00am | Gold Gym</span>
										</div>
									</div>
									<div class="schedule-event">
										<div class="event-date purple">26</div>
										<div class="event-title">
											<span>Project review</span>
											<span>08:00am | Office</span>
										</div>
									</div>
									<div class="button-wrap">
										<a class="button is-fullwidth has-icon"><i data-feather="plus"></i>New Event</a>
									</div>
								</div>
							</div>
						</div>

						<div class="column is-8">
							<div id="profile-timeline-posts" class="box-heading">
								<h4>Posts</h4>
								<div class="button-wrap">
									<button type="button" class="button is-active">Recent</button>
									<button type="button" class="button is-hidden">Popular</button>
								</div>
							</div>

							<div class="profile-timeline">

								<!-- Timeline post 1 -->
								<!-- html/partials/pages/profile/posts/timeline-post1.html -->
								<!-- Timeline POST #1 -->
								@foreach ($user->posts as $post)
									<div class="profile-post">
										<div class="time is-hidden-mobile">
											<div class="img-container">
												<img src="{{ asset($user->profile_picture) }}" data-demo-src="{{ url($user->profile_picture) }}"
													alt="">
											</div>
										</div>
										<div class="card is-post" id='post-{{ $post->id }}'>
											<!-- Main wrap -->
											<div class="content-wrap">
												<!-- Header -->
												<div class="card-heading">
													<!-- User image -->
													<div class="user-block">
														<div class="image">
															<img src="{{ URL::asset($post->user->profile_picture) }}"
																data-demo-src="{{ URL::asset($post->user->profile_picture) }}"
																onerror="this.src='{{ URL::asset('/images/no_image.png') }}';" data-user-popover="0" alt="">
														</div>
														<div class="user-info">
															<a href="{{ url('/profile?id=' . $post->user_id) }}" target="_blank">{!! nl2br($post->user->name) !!}</a>
															<span class="time">{{ date('M d, Y h:i a', strtotime($post->created_at)) }}</span>
														</div>
													</div>
													@if ($post->user_id == auth()->user()->id)
														<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
															<div>
																<div class="button">
																	<i data-feather="more-vertical"></i>
																</div>
															</div>

															<div class="dropdown-menu" role="menu">
																<div class="dropdown-content">
																	<a class="dropdown-item" onclick='removePost({{ $post->id }})'>
																		<div class="media">
																			<i data-feather="x"></i>
																			<div class="media-content">
																				<h3>Remove</h3>
																				<small>Remove this post.</small>
																			</div>
																		</div>
																	</a>

																	<a href="#" class="dropdown-item is-hidden">
																		<div class="media">
																			<i data-feather="bookmark"></i>
																			<div class="media-content">
																				<h3>Bookmark</h3>
																				<small>Add this post to your bookmarks.</small>
																			</div>
																		</div>
																	</a>
																	<a class="dropdown-item is-hidden">
																		<div class="media">
																			<i data-feather="bell"></i>
																			<div class="media-content">
																				<h3>Notify me</h3>
																				<small>Send me the updates.</small>
																			</div>
																		</div>
																	</a>
																	<hr class="dropdown-divider is-hidden">
																	<a href="#" class="dropdown-item is-hidden">
																		<div class="media">
																			<i data-feather="flag"></i>
																			<div class="media-content">
																				<h3>Flag</h3>
																				<small>In case of inappropriate content.</small>
																			</div>
																		</div>
																	</a>
																</div>
															</div>

														</div>
													@endif
												</div>
												<!-- /Header -->

												<!-- Post body -->
												<div class="card-body">
													<!-- Post body text -->
													<div class="post-text">
														<p>{!! nl2br($post->content) !!}
														<p>
													</div>
													@if ($post->attachment->count())
														<div class="post-image">
															<a data-thumb="{{ url($post->attachment[0]->attachment) }}"
																data-demo-href="{{ url($post->attachment[0]->attachment) }}">
																<img src="{{ asset($post->attachment[0]->attachment) }}"
																	data-demo-src="{{ url($post->attachment[0]->attachment) }}" alt="">
															</a>
														</div>
													@endif
													<!-- Post actions -->
													<div class="post-actions">
														<div class="like-wrapper">
															<a href="javascript:void(0);" onclick='like_action({{ $post->id }})'
																id='action-like-{{ $post->id }}'
																class="like-button @if ($post->likes->where('user_id', auth()->user()->id)->first() != null) is-active @endif">
																<i class="mdi mdi-heart not-liked bouncy"></i>
																<i class="mdi mdi-heart is-liked bouncy"></i>
																<span class="like-overlay"></span>
															</a>
														</div>
														<div class="fab-wrapper is-comment">
															<a href="javascript:void(0);" class="small-fab">
																<i data-feather="message-circle"></i>
															</a>
														</div>
													</div>
												</div>
												<!-- /Post body -->

												<!-- Post footer -->
												<div class="card-footer">
													<!-- Followers -->
													<div class="likers-group">
														@foreach ($post->likes->take(3) as $like)
															<img src="{{ asset($like->user->profile_picture) }}"
																data-demo-src="{{ asset($like->user->profile_picture) }}" alt="">
														@endforeach
													</div>
													<div class="likers-text">
														<p>
															@if ($post->likes->count() == 1)
																@foreach ($post->likes as $like)
																	<a href="{{ url('/profile?id=' . $like->user->id) }}" target="_blank">{{ $like->user->name }}</a>
																@endforeach
																liked this
															@elseif($post->likes->count() == 2)
																@foreach ($post->likes as $key => $like)
																	@if ($key == 0)
																		<a href="{{ url('/profile?id=' . $like->user->id) }}" target="_blank">{{ $like->user->name }}</a>
																	@else
																		and <a href="{{ url('/profile?id=' . $like->user->id) }}" target="_blank">{{ $like->user->name }}</a>
																	@endif
																@endforeach
																liked this
															@else
																@foreach ($post->likes as $key => $like)
																	@if ($key == 0)
																		<a href="{{ url('/profile?id=' . $like->user->id) }}" target="_blank">{{ $like->user->name }}</a>
																	@else
																		and Others
																	@break
																@endif
															@endforeach
														@endif

														{{-- <a href="#">Daniel</a> and <a href="#">Elise</a> liked this --}}
													</p>
												</div>
												<div class="social-count">
													<div class="likes-count">
														<i data-feather="heart"></i>
														<span id='like-count-{{ $post->id }}'>{{ count($post->likes) }}</span>
													</div>
													<div class="comments-count">
														<i data-feather="message-circle"></i>
														<span id='comment-count-{{ $post->id }}'
															class='comment-counts-{{ $post->id }}'>{{ count($post->comments) }}</span>
													</div>
												</div>
											</div>
											<!-- /Post footer -->
										</div>
										<!-- /Main wrap -->

										<!-- Post #6 comments -->
										<div class="comments-wrap is-hidden">
											<!-- Header -->
											<div class="comments-heading">
												<h4>Comments (<small class='comment-counts-{{ $post->id }}'>{{ $post->comments->count() }}</small>)
												</h4>
												<div class="close-comments">
													<i data-feather="x"></i>
												</div>
											</div>
											<!-- /Header -->

											<!-- Comments body -->
											<div class="comments-body has-slimscroll">
												@foreach ($post->comments as $comment)
													<div class="media is-comment" id='comment-data-{{ $comment->id }}'>
														<div class="media-left">
															<div class="image">

																<img src="{{ URL::asset($comment->user->profile_picture) }}"
																	data-demo-src="{{ URL::asset($comment->user->profile_picture) }}" data-user-popover="6"
																	alt="">
															</div>
														</div>
														<div class="media-content">
															<a href="#">{{ $comment->user->name }}</a>
															<span class="time">{{ date('M d, Y h:i a', strtotime($comment->created_at)) }}</span>
															<p>{!! nl2br($comment->comment) !!}</p>
															<div class="controls is-hidden">
																<div class="like-count">
																	<i data-feather="thumbs-up"></i>
																	<span>1</span>
																</div>
																<div class="reply">
																	<a href="#">Reply</a>
																</div>
															</div>
														</div>
														@if ($post->user_id == auth()->user()->id)
															<div class="media-right">
																<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
																	<div>
																		<div class="button">
																			<i data-feather="more-vertical"></i>
																		</div>
																	</div>
																	<div class="dropdown-menu" role="menu">
																		<div class="dropdown-content">
																			<a class="dropdown-item" onclick='removeComment({{ $comment->id }},{{ $post->id }})'>
																				<div class="media">
																					<i data-feather="x"></i>
																					<div class="media-content">
																						<h3>Remove</h3>
																						<small>Remove this comment.</small>
																					</div>
																				</div>
																			</a>

																		</div>
																	</div>
																</div>
															</div>
														@endif
													</div>
												@endforeach
											</div>
											<!-- /Comments body -->

											<!-- Comments footer -->
											<form id='submit-comment-{{ $post->id }}' data-id="{{ $post->id }}">
												<div class="card-footer">
													<div class="media post-comment has-emojis">
														<!-- Textarea -->
														<div class="media-content">
															<div class="field">
																<p class="control">
																	<textarea class="textarea comment-textarea" rows="1" placeholder="Write a comment..."></textarea>
																</p>
															</div>
															<!-- Additional actions -->
															<div class="actions">
																<div class="image is-32x32">
																	<img class="is-rounded" src="https://via.placeholder.com/300x300"
																		data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
																</div>
																<div class="toolbar">
																	<div class="action is-auto is-hidden">
																		<i data-feather="at-sign"></i>
																	</div>
																	<div class="action is-emoji is-hidden">
																		<i data-feather="smile"></i>
																	</div>
																	<div class="action is-upload is-hidden">
																		<i data-feather="camera"></i>
																		<input type="file">
																	</div>
																	<a class="button is-solid primary-button raised" onclick='post_comment({{ $post->id }})'>Post
																		Comment</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</form>
											<!-- /Comments footer -->
										</div>
										<!-- /Post #6 comments -->
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<script>
	function show_loading() {
		$(".pageloader").toggleClass("is-active");
	}

	function publishPost(dataFile) {

		$(".pageloader").toggleClass("is-active");
		var publish = document.getElementById('publish').value;

		if (publish.trim() == "") {
			warning_message('Error', 'Please write something.')
			$(".pageloader").removeClass("is-active");
		} else {
			$.ajax({
				url: "publish-post",
				method: "POST",
				data: {
					data: publish,
					// files : files,
				},
				enctype: 'multipart/form-data',
				headers: {
					'X-CSRF-TOKEN': '{{ csrf_token() }}'
				},
				success: function(data) {
					$('.profile-post').prepend(show_post(data));
					$(".app-overlay").removeClass("is-active");
					$("#compose-card").removeClass("is-highlighted");
					document.getElementById('publish').value = "";
					$(".pageloader").removeClass("is-active");
					success_message('Success', 'Your post has been uploaded.');
				},
				error: function(data) {
					$(".pageloader").removeClass("is-active");
					warning_message('Error', 'Something went wrong, Please refresh.')
				},
			});


		}
	}

	function post_comment(postId) {
		// alert(postId);
		var latest_count = document.getElementById("comment-count-" + postId).innerText;
		latest_count = parseInt(latest_count) + 1;

		$(".pageloader").toggleClass("is-active");
		var comment = $('#submit-comment-' + postId + ' textarea').val();

		if (comment.trim() == "") {
			warning_message('Error', 'Please write something.')
			$(".pageloader").removeClass("is-active");
		} else {

			$.ajax({
				url: "comment",
				method: "POST",
				data: {
					post_id: postId,
					comment: comment,
				},
				headers: {
					'X-CSRF-TOKEN': '{{ csrf_token() }}'
				},
				success: function(data) {
					$('.comment-counts-' + postId).text(latest_count);
					$('#submit-comment-' + data.post_id + ' textarea').val('');
					$('.comments-body').append(show_comment(data));
					$(".pageloader").removeClass("is-active");

				},
				error: function(data) {
					$(".pageloader").removeClass("is-active");
					warning_message('Error', 'Something went wrong, Please refresh.')
				},
			});


		}
	}

	function show_comment(data) {

		var comment = "<div class='media is-comment' id='comment-data-" + data.id + "'>";
		comment += "<div class='media-left'>";
		comment += "<div class='image'>";
		comment +=
			'<img src="{{ URL::asset(auth()->user()->profile_picture) }}" data-demo-src="{{ URL::asset(auth()->user()->profile_picture) }}" data-user-popover="6" alt="">';
		comment += '</div>';
		comment += '</div>';
		comment += '<div class="media-content">';
		comment += '<a href="#">{{ auth()->user()->name }}</a>';
		comment += '<span class="time">{{ date('M d, Y h:i a') }}</span>';
		comment += '<p>' + data.comment + '</p>';
		comment += '<div class="controls is-hidden">';
		comment += '<div class="like-count">';
		comment += '<i data-feather="thumbs-up"></i>';
		comment += '<span>1</span>';
		comment += '</div>';
		comment += '<div class="reply">';
		comment += '<a href="#">Reply</a>';
		comment += '</div>';
		comment += '</div>';
		comment += '</div>';
		comment += '<div class="media-right">';
		comment += '<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">';
		comment += '<div>';
		comment += '<div class="button">';
		comment += '<i data-feather="more-vertical"></i>';
		comment += '</div>';
		comment += '<div class="dropdown-menu" role="menu">';
		comment += '<div class="dropdown-content">';
		comment += '<a class="dropdown-item" onclick="removeComment(' + data.id + ',' + data.post_id + ')">';
		comment += '<div class="media">';
		comment += '<i data-feather="x"></i>';
		comment += '<div class="media-content">';
		comment += '<h3>Remove</h3>';
		comment += '<small>Remove this comment.</small>';
		comment += '</div>';
		comment += '</div>';
		comment += '</a>';
		comment += '</div>';
		comment += '</div>';
		comment += '</div>';
		comment += '</div>';
		comment += '</div>';
		comment += '</div>';

		return comment;
	}

	function warning_message(title, Message) {
		return iziToast.warning({
			title: title,
			message: Message,
			position: "topCenter",
		});
	}

	function success_message(title, Message) {
		return iziToast.success({
			title: title,
			message: Message,
			position: "topCenter",
		});
	}

	function like_action(id) {
		$(".pageloader").toggleClass("is-active");
		// alert(id);	
		var class_data = document.getElementById("action-like-" + id).className;
		// alert(class_data);
		var latest_count = document.getElementById("like-count-" + id).innerText;
		if (class_data.includes("is-active")) {
			latest_count = parseInt(latest_count) - 1;
		} else {
			latest_count = parseInt(latest_count) + 1;

		}
		document.getElementById("like-count-" + id).innerText = latest_count;
		$.ajax({
			url: "like-post",
			method: "POST",
			data: {
				id: id,
				class: class_data,
			},
			headers: {
				'X-CSRF-TOKEN': '{{ csrf_token() }}'
			},
			success: function(data) {
				$(".pageloader").removeClass("is-active");
			},
			error: function(data) {
				$(".pageloader").removeClass("is-active");
				warning_message('Error', 'Something went wrong, Please refresh.')
			},
		});
		// alert(latest_count);

	}

	function follow(id) {
		$(".pageloader").toggleClass("is-active");
		// alert(id);	
		var following_data = document.getElementById("follow-pop").className;
		// alert(following_data);
		var latest_count = document.getElementById("followers-data").innerText;
		if (following_data.includes("is-shifted")) {
			latest_count = parseInt(latest_count) - 1;
		} else {
			latest_count = parseInt(latest_count) + 1;

		}

		$.ajax({
			url: "follow-profile",
			method: "POST",
			data: {
				id: id,
				following_data: following_data,
			},
			headers: {
				'X-CSRF-TOKEN': '{{ csrf_token() }}'
			},
			success: function(data) {

				document.getElementById("followers-data").innerText = latest_count;
				$(".pageloader").removeClass("is-active");
			},
			error: function(data) {
				document.getElementById("followers-data").innerText = latest_count;
				$(".pageloader").removeClass("is-active");
			},
		});
	}

	function removePost(id) {
		$('#post-' + id).remove();
		$(".pageloader").toggleClass("is-active");
		$.ajax({
			url: "remove-post",
			method: "POST",
			data: {
				post_id: id,
			},
			headers: {
				'X-CSRF-TOKEN': '{{ csrf_token() }}'
			},
			success: function(data) {
				$(".pageloader").removeClass("is-active");

			},
			error: function(data) {
				$(".pageloader").removeClass("is-active");
				warning_message('Error', 'Something went wrong, Please refresh.')
			},
		});
	}

	function removeComment(id, postId) {
		$('#comment-data-' + id).remove();

		var latest_count = document.getElementById("comment-count-" + postId).innerText;
		latest_count = parseInt(latest_count) - 1;
		$('.comment-counts-' + postId).text(latest_count);

		$.ajax({
			url: "remove-comment",
			method: "POST",
			data: {
				comment_id: id,
			},
			headers: {
				'X-CSRF-TOKEN': '{{ csrf_token() }}'
			},
			success: function(data) {
				$(".pageloader").removeClass("is-active");

			},
			error: function(data) {
				$(".pageloader").removeClass("is-active");
				warning_message('Error', 'Something went wrong, Please refresh.')
			},
		});
	}

	function show_post(data) {
		var post = '<div class="card is-post" id="post-' + data.id + '">';
		post += '<div class="content-wrap">';
		post += '<div class="card-heading">';
		post += '<div class="user-block">';
		post += '<div class="image">';
		post +=
			'<img src="{{ URL::asset(auth()->user()->profile_picture) }}" data-demo-src="{{ URL::asset(auth()->user()->profile_picture) }}" data-user-popover="0" alt="">';
		post += '</div>';
		post += '<div class="user-info">';
		post += '<a href="#">{{ auth()->user()->name }}</a>';
		post += '<span class="time">{{ date('M d, Y h:i a') }}</span>';
		post += '</div>';
		post += '</div>';
		post += '<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">';
		post += '<div>';
		post += '<div class="button">';
		post += '<i data-feather="more-vertical"></i>';
		post += '</div>';
		post += '</div>';
		post += '<div class="dropdown-menu" role="menu">';
		post += '<div class="dropdown-content">';
		post += '<a class="dropdown-item" onclick="removePost(' + data.id + ')">';
		post += '<div class="media">';
		post += '<i data-feather="x"></i>';
		post += '<div class="media-content">';
		post += '<h3>Remove</h3>';
		post += '<small>Remove this post.</small>';
		post += '</div>';
		post += '</div>';
		post += '</a>';
		post += '<a href="#" class="dropdown-item is-hidden">';
		post += '<div class="media">';
		post += '<i data-feather="bookmark"></i>';
		post += '<div class="media-content">';
		post += '<h3>Bookmark</h3>';
		post += '<small>Add this post to your bookmarks.</small>';
		post += '</div>';
		post += '</div>';
		post += '</a>';
		post += '</div>';
		post += '<a class="dropdown-item is-hidden">';
		post += '<div class="media">';
		post += '<i data-feather="bell"></i>';
		post += '<div class="media-content">';
		post += '<h3>Notify me</h3>';
		post += '<small>Send me the updates.</small>';
		post += '</div>';
		post += '</div>';
		post += '</a>';
		post += '<hr class="dropdown-divider is-hidden">';
		post += '<a href="#" class="dropdown-item is-hidden">';
		post += '<div class="media">';
		post += '<i data-feather="flag"></i>';
		post += '<div class="media-content">';
		post += '<h3>Flag</h3>';
		post += '<small>In case of inappropriate content.</small>';
		post += '</div>';
		post += '</div>';
		post += '</a>';
		post += '</div>';
		post += '</div>';
		post += '</div>';
		post += '<div class="card-body">';
		post += '<div class="post-text">';
		post += '<p>' + data.content + '<p>';
		post += '</div>';
		post += '<div class="post-actions">';
		post += '<div class="like-wrapper">';
		post += '<a href="javascript:void(0);" onclick="like_action(' + data.id + ')" id="action-like-' + data.id +
			'" class="like-button">';
		post += '<i class="mdi mdi-heart not-liked bouncy"></i>';
		post += '<i class="mdi mdi-heart is-liked bouncy"></i>';
		post += '<span class="like-overlay"></span>';
		post += '</a>';
		post += '</div>';
		post += '<div class="fab-wrapper is-comment">';
		post += '<a href="javascript:void(0);" class="small-fab">';
		post += '<i data-feather="message-circle"></i>';
		post += '</a>';
		post += '</div>';
		post += '</div>';
		post += '</div>';
		post += '<div class="card-footer">';
		post += '<div class="likers-group">';
		post += '</div>';
		post += '<div class="likers-text">';
		post += '<p>';
		post += '</p>';
		post += '</div>';
		post += '<div class="social-count">';
		post += '<div class="likes-count">';
		post += '<i data-feather="heart"></i>';
		post += '<span id="like-count-' + data.id + '">0</span>';
		post += '</div>';
		post += '<div class="comments-count">';
		post += '<i data-feather="message-circle"></i>';
		post += '<span id="comment-count-' + data.id + '" class="comment-counts-' + data.id + '">0</span>';
		post += '</div>';
		post += '</div>';
		post += '</div>';
		post += '</div>';
		post += '<div class="comments-wrap">';
		post += '<div class="comments-heading">';
		post += '<h4>Comments (<small class="comment-counts-' + data.id + '">0</small>)</h4>';
		post += '</div>';
		post += '<div class="comments-body has-slimscroll">';
		post += '</div>';
		post += '<form id="submit-comment-' + data.id + '" data-id="' + data.id + '">';
		post += '<div class="card-footer">';
		post += '<div class="media post-comment has-emojis">';
		post += '<div class="media-content">';
		post += '<div class="field">';
		post += '<p class="control">';
		post += '<textarea class="textarea comment-textarea"  rows="1" placeholder="Write a comment..."></textarea>';
		post += '</p>';
		post += '</div>';
		post += '<div class="actions">';
		post += '<div class="image is-32x32">';
		post +=
			'<img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">';
		post += '</div>';
		post += '<div class="toolbar">';
		post += '<div class="action is-auto is-hidden">';
		post += '<i data-feather="at-sign"></i>';
		post += '</div>';
		post += '<div class="action is-emoji is-hidden">';
		post += '<i data-feather="smile"></i>';
		post += '</div>';
		post += '<div class="action is-upload is-hidden">';
		post += '<i data-feather="camera"></i>';
		post += '<input type="file">';
		post += '</div>';
		post += '<a class="button is-solid primary-button raised" onclick="post_comment(' + data.id +
		')">Post Comment</a>';
		post += '</div>';
		post += '</div>';
		post += '</div>';
		post += '</div>';
		post += '</div>';
		post += '</form>';
		post += '</div>';
		post += '</div>';

		reloadJs('assets/js/app.js');
		reloadJs('assets/data/tipuedrop_content.js');
		reloadJs('assets/js/global.js');
		reloadJs('assets/js/main.js');
		reloadJs('assets/js/lightbox.js');
		reloadJs('assets/js/profile.js');
		reloadJs('assets/js/widgets.js');


		return post;

	}

	function reloadJs(src) {
		src = $('script[src$="' + src + '"]').attr("src");
		$('script[src$="' + src + '"]').remove();
		$('<script/>').attr('src', src).appendTo('head');
	}
</script>
<script src="{{ url('/js/script.js') }}"></script>
@include('profiles.change_avatar')
@include('profiles.edit_personal_info')
@endsection
