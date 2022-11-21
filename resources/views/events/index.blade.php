@extends('layouts.main')

@section('content')
	<div class="view-wrapper">

		<!--Wrapper-->
		<div id="events-page" class="events-wrapper">
			<!--Events Sidebar-->
			<div class="left-panel">
				<div class="left-panel-inner has-slimscroll">
					<!--Event Link-->
					<a href="#event-1" data-event-id="event-1" class="scroll-link is-active">
						<span class="date-block">
							<i data-feather="calendar"></i>
							<span class="month">May 5th</span>
						</span>
						<span class="meta-block">
							<span class="time">at 08:00 pm</span>
						</span>
					</a>
					<!--Event Link-->
					<a href="#event-2" data-event-id="event-2" class="scroll-link">
						<span class="date-block">
							<i data-feather="calendar"></i>
							<span class="month">May 8th</span>
						</span>
						<span class="meta-block">
							<span class="time">at 09:30 am</span>
						</span>
					</a>
					<!--Event Link-->
					<a href="#event-3" data-event-id="event-3" class="scroll-link">
						<span class="date-block">
							<i data-feather="calendar"></i>
							<span class="month">May 10th</span>
						</span>
						<span class="meta-block">
							<span class="time">at 10:45 am</span>
						</span>
					</a>
					<!--Event Link-->
					<a href="#event-4" data-event-id="event-4" class="scroll-link">
						<span class="date-block">
							<i data-feather="calendar"></i>
							<span class="month">May 23rd</span>
						</span>
						<span class="meta-block">
							<span class="time">at 04:00 pm</span>
						</span>
					</a>
					<!--Event Link-->
					<a href="#event-5" data-event-id="event-5" class="scroll-link">
						<span class="date-block">
							<i data-feather="calendar"></i>
							<span class="month">Jun 3rd</span>
						</span>
						<span class="meta-block">
							<span class="time">at 09:30 am</span>
						</span>
					</a>
					<!--Event Link-->
					<a href="#event-6" data-event-id="event-6" class="scroll-link">
						<span class="date-block">
							<i data-feather="calendar"></i>
							<span class="month">Jul 28th</span>
						</span>
						<span class="meta-block">
							<span class="time">at 02:00 pm</span>
						</span>
					</a>
					<!--Add Event-->
					{{-- <div class="add-event">
						<button class="button">New Event</button>
					</div> --}}
				</div>
			</div>

			<!--Event List-->
			<div class="wrapper-inner">
				<div id="event-list" class="event-list">
					<!-- /partials/pages/events/events-1.html -->
					<div id="event-1" class="event-item">
						<div class="event-inner-wrap">
							<!-- /partials/pages/events/event-options-dropdown.html -->
							<div class="dropdown is-spaced event-options is-accent is-right dropdown-trigger">
								<div>
									<div class="button">
										<i data-feather="settings"></i>
									</div>
								</div>
								<div class="dropdown-menu" role="menu">
									<div class="dropdown-content">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="calendar"></i>
												<div class="media-content">
													<h3>View Event</h3>
													<small>Open event details.</small>
												</div>
											</div>
										</a>
										<a class="dropdown-item">
											<div class="media">
												<i data-feather="smile"></i>
												<div class="media-content">
													<h3>Owner</h3>
													<small>View owner details.</small>
												</div>
											</div>
										</a>
										<hr class="dropdown-divider">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="delete"></i>
												<div class="media-content">
													<h3>Leave</h3>
													<small>Leave this event.</small>
												</div>
											</div>
										</a>
										<hr class="dropdown-divider">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="flag"></i>
												<div class="media-content">
													<h3>Report</h3>
													<small>unappropriate content.</small>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<h2 class="event-title">Awesome Pool Party with Friends</h2>
							<div class="event-subtitle">
								<i data-feather="map-pin"></i>
								<h3>Stella Bergmann's place | July 5, 2020.</h3>
							</div>
							<div class="event-content">
								<div class="event-description content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Restatis igitur vos; Putabam equidem
										satis, inquit, me
										dixisse. Sed ea mala virtuti magnitudine obruebantur. Tenent mordicus. Duo Reges:
										constructio interrete. </p>

									<p>Tollitur beneficium, tollitur gratia, quae sunt vincla concordiae. Falli igitur possumus.
										Bonum patria: miserum
										exilium. Sullae consulatum? Eiuro, inquit adridens, iniquum, hac quidem de re; Tu vero,
										inquam, ducas licet, si
										sequetur; </p>

									<p>Quorum altera prosunt, nocent altera. Quis hoc dicit? Hos contra singulos dici est melius.
										Quid iudicant sensus? </p>

								</div>
							</div>
							<div class="event-participants">
								<div class="participants-group">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png"
										data-user-popover="0" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg"
										data-user-popover="4" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg"
										data-user-popover="5" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg"
										data-user-popover="7" alt="">
								</div>
								<div class="participants-text">
									<p>
										<a href="#">You</a>,
										<a href="#">David</a>
									</p>
									<p>and 23 more are participating</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /partials/pages/events/events-2.html -->
					<div id="event-2" class="event-item">
						<div class="event-inner-wrap">
							<!-- /partials/pages/events/event-options-dropdown.html -->
							<div class="dropdown is-spaced event-options is-accent is-right dropdown-trigger">
								<div>
									<div class="button">
										<i data-feather="settings"></i>
									</div>
								</div>
								<div class="dropdown-menu" role="menu">
									<div class="dropdown-content">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="calendar"></i>
												<div class="media-content">
													<h3>View Event</h3>
													<small>Open event details.</small>
												</div>
											</div>
										</a>
										<a class="dropdown-item">
											<div class="media">
												<i data-feather="smile"></i>
												<div class="media-content">
													<h3>Owner</h3>
													<small>View owner details.</small>
												</div>
											</div>
										</a>
										<hr class="dropdown-divider">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="delete"></i>
												<div class="media-content">
													<h3>Leave</h3>
													<small>Leave this event.</small>
												</div>
											</div>
										</a>
										<hr class="dropdown-divider">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="flag"></i>
												<div class="media-content">
													<h3>Report</h3>
													<small>unappropriate content.</small>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<h2 class="event-title">Design & Web of today conference</h2>
							<div class="event-subtitle">
								<i data-feather="map-pin"></i>
								<h3>Parkman Conference Center, Chicago | July 8, 2020.</h3>
							</div>
							<div class="event-content">
								<div class="event-description content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Restatis igitur vos; Putabam equidem
										satis, inquit, me
										dixisse. Sed ea mala virtuti magnitudine obruebantur. Tenent mordicus. Duo Reges:
										constructio interrete. </p>

									<p>Tollitur beneficium, tollitur gratia, quae sunt vincla concordiae. Falli igitur possumus.
										Bonum patria: miserum.</p>

									<p>Quorum altera prosunt, nocent altera. Quis hoc dicit? Hos contra singulos dici est melius.
										Quid iudicant sensus? </p>

								</div>
							</div>
							<div class="event-participants">
								<div class="participants-group">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png"
										data-user-popover="0" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg"
										data-user-popover="4" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg"
										data-user-popover="5" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg"
										data-user-popover="7" alt="">
								</div>
								<div class="participants-text">
									<p>
										<a href="#">You</a>,
										<a href="#">David</a>
									</p>
									<p>and 272 more are participating</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /partials/pages/events/events-3.html -->
					<div id="event-3" class="event-item">
						<div class="event-inner-wrap">
							<!-- /partials/pages/events/event-options-dropdown.html -->
							<div class="dropdown is-spaced event-options is-accent is-right dropdown-trigger">
								<div>
									<div class="button">
										<i data-feather="settings"></i>
									</div>
								</div>
								<div class="dropdown-menu" role="menu">
									<div class="dropdown-content">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="calendar"></i>
												<div class="media-content">
													<h3>View Event</h3>
													<small>Open event details.</small>
												</div>
											</div>
										</a>
										<a class="dropdown-item">
											<div class="media">
												<i data-feather="smile"></i>
												<div class="media-content">
													<h3>Owner</h3>
													<small>View owner details.</small>
												</div>
											</div>
										</a>
										<hr class="dropdown-divider">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="delete"></i>
												<div class="media-content">
													<h3>Leave</h3>
													<small>Leave this event.</small>
												</div>
											</div>
										</a>
										<hr class="dropdown-divider">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="flag"></i>
												<div class="media-content">
													<h3>Report</h3>
													<small>unappropriate content.</small>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<h2 class="event-title">Project review with Edward and Nelly</h2>
							<div class="event-subtitle">
								<i data-feather="map-pin"></i>
								<h3>Office, meeting room | July 10, 2020.</h3>
							</div>
							<div class="event-content">
								<div class="event-description content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Restatis igitur vos; Putabam equidem
										satis, inquit, me
										dixisse. Sed ea mala virtuti magnitudine obruebantur. Tenent mordicus. Duo Reges:
										constructio interrete. </p>

									<p>Tollitur beneficium, tollitur gratia, quae sunt vincla concordiae. Falli igitur possumus.
										Bonum patria: miserum.</p>

								</div>
							</div>
							<div class="event-participants">
								<div class="participants-group">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg"
										data-user-popover="5" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png"
										data-user-popover="9" alt="">
								</div>
								<div class="participants-text">
									<p>
										<a href="#">You</a>,
										<a href="#">Nelly</a>
									</p>
									<p>and 1 more are participating</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /partials/pages/events/events-4.html -->
					<div id="event-4" class="event-item">
						<div class="event-inner-wrap">
							<!-- /partials/pages/events/event-options-dropdown.html -->
							<div class="dropdown is-spaced event-options is-accent is-right dropdown-trigger">
								<div>
									<div class="button">
										<i data-feather="settings"></i>
									</div>
								</div>
								<div class="dropdown-menu" role="menu">
									<div class="dropdown-content">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="calendar"></i>
												<div class="media-content">
													<h3>View Event</h3>
													<small>Open event details.</small>
												</div>
											</div>
										</a>
										<a class="dropdown-item">
											<div class="media">
												<i data-feather="smile"></i>
												<div class="media-content">
													<h3>Owner</h3>
													<small>View owner details.</small>
												</div>
											</div>
										</a>
										<hr class="dropdown-divider">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="delete"></i>
												<div class="media-content">
													<h3>Leave</h3>
													<small>Leave this event.</small>
												</div>
											</div>
										</a>
										<hr class="dropdown-divider">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="flag"></i>
												<div class="media-content">
													<h3>Report</h3>
													<small>unappropriate content.</small>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<h2 class="event-title">Chanel Private Flash Sale</h2>
							<div class="event-subtitle">
								<i data-feather="map-pin"></i>
								<h3>Timothy Palace, Baltimore | July 23, 2020.</h3>
							</div>
							<div class="event-content">
								<div class="event-description content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Restatis igitur vos; Putabam equidem
										satis, inquit, me
										dixisse. Sed ea mala virtuti magnitudine obruebantur. Tenent mordicus. Duo Reges:
										constructio interrete. </p>

									<p>Tollitur beneficium, tollitur gratia, quae sunt vincla concordiae. Falli igitur possumus.
										Bonum patria: miserum
										exilium. Sullae consulatum? Eiuro, inquit adridens, iniquum, hac quidem de re; Tu vero,
										inquam, ducas licet, si
										sequetur; </p>

									<p>Quorum altera prosunt, nocent altera. Quis hoc dicit? Hos contra singulos dici est melius.
										Quid iudicant sensus? </p>

								</div>
							</div>
							<div class="event-participants">
								<div class="participants-group">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png"
										data-user-popover="0" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg"
										data-user-popover="4" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg"
										data-user-popover="5" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg"
										data-user-popover="7" alt="">
								</div>
								<div class="participants-text">
									<p>
										<a href="#">You</a>,
										<a href="#">David</a>
									</p>
									<p>and 128 more are participating</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /partials/pages/events/events-5.html -->
					<div id="event-5" class="event-item">
						<div class="event-inner-wrap">
							<!-- /partials/pages/events/event-options-dropdown.html -->
							<div class="dropdown is-spaced event-options is-accent is-right dropdown-trigger">
								<div>
									<div class="button">
										<i data-feather="settings"></i>
									</div>
								</div>
								<div class="dropdown-menu" role="menu">
									<div class="dropdown-content">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="calendar"></i>
												<div class="media-content">
													<h3>View Event</h3>
													<small>Open event details.</small>
												</div>
											</div>
										</a>
										<a class="dropdown-item">
											<div class="media">
												<i data-feather="smile"></i>
												<div class="media-content">
													<h3>Owner</h3>
													<small>View owner details.</small>
												</div>
											</div>
										</a>
										<hr class="dropdown-divider">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="delete"></i>
												<div class="media-content">
													<h3>Leave</h3>
													<small>Leave this event.</small>
												</div>
											</div>
										</a>
										<hr class="dropdown-divider">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="flag"></i>
												<div class="media-content">
													<h3>Report</h3>
													<small>unappropriate content.</small>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<h2 class="event-title">Vue Js Workshop</h2>
							<div class="event-subtitle">
								<i data-feather="map-pin"></i>
								<h3>Parkman Conference Center, Chicago | July 3, 2020.</h3>
							</div>
							<div class="event-content">
								<div class="event-description content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Restatis igitur vos; Putabam equidem
										satis, inquit, me
										dixisse. Sed ea mala virtuti magnitudine obruebantur. Tenent mordicus. Duo Reges:
										constructio interrete. </p>

									<p>Tollitur beneficium, tollitur gratia, quae sunt vincla concordiae. Falli igitur possumus.
										Bonum patria: miserum.</p>

									<p>Quorum altera prosunt, nocent altera. Quis hoc dicit? Hos contra singulos dici est melius.
										Quid iudicant sensus? </p>

								</div>
							</div>
							<div class="event-participants">
								<div class="participants-group">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png"
										data-user-popover="0" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg"
										data-user-popover="4" alt="">
								</div>
								<div class="participants-text">
									<p>
										<a href="#">You</a> and
										<a href="#"> David</a>
									</p>
									<p>are participating</p>
								</div>
							</div>
						</div>
					</div>
					<!-- /partials/pages/events/events-6.html -->
					<div id="event-6" class="event-item">
						<div class="event-inner-wrap">
							<!-- /partials/pages/events/event-options-dropdown.html -->
							<div class="dropdown is-spaced event-options is-accent is-right dropdown-trigger">
								<div>
									<div class="button">
										<i data-feather="settings"></i>
									</div>
								</div>
								<div class="dropdown-menu" role="menu">
									<div class="dropdown-content">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="calendar"></i>
												<div class="media-content">
													<h3>View Event</h3>
													<small>Open event details.</small>
												</div>
											</div>
										</a>
										<a class="dropdown-item">
											<div class="media">
												<i data-feather="smile"></i>
												<div class="media-content">
													<h3>Owner</h3>
													<small>View owner details.</small>
												</div>
											</div>
										</a>
										<hr class="dropdown-divider">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="delete"></i>
												<div class="media-content">
													<h3>Leave</h3>
													<small>Leave this event.</small>
												</div>
											</div>
										</a>
										<hr class="dropdown-divider">
										<a href="#" class="dropdown-item">
											<div class="media">
												<i data-feather="flag"></i>
												<div class="media-content">
													<h3>Report</h3>
													<small>unappropriate content.</small>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<h2 class="event-title">Lana and Michael's wedding party</h2>
							<div class="event-subtitle">
								<i data-feather="map-pin"></i>
								<h3>Calapura Resort | July 28, 2020.</h3>
							</div>
							<div class="event-content">
								<div class="event-description content">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Restatis igitur vos; Putabam equidem
										satis, inquit, me
										dixisse. Sed ea mala virtuti magnitudine obruebantur. Tenent mordicus. Duo Reges:
										constructio interrete. </p>

									<p>Tollitur beneficium, tollitur gratia, quae sunt vincla concordiae. Falli igitur possumus.
										Bonum patria: miserum
										exilium. Sullae consulatum? Eiuro, inquit adridens, iniquum, hac quidem de re; Tu vero,
										inquam, ducas licet, si
										sequetur; </p>

									<p>Quorum altera prosunt, nocent altera. Quis hoc dicit? Hos contra singulos dici est melius.
										Quid iudicant sensus? </p>

								</div>
							</div>
							<div class="event-participants">
								<div class="participants-group">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/jenna.png"
										data-user-popover="0" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg"
										data-user-popover="4" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg"
										data-user-popover="5" alt="">
									<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg"
										data-user-popover="7" alt="">
								</div>
								<div class="participants-text">
									<p>
										<a href="#">You</a>,
										<a href="#">David</a>
									</p>
									<p>and 78 more are participating</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Activity Panel-->
			<div class="right-panel">
				<div class="panel-header">
					<h3>Events Activity</h3>
				</div>
				<div class="panel-body has-slimscroll">
					<!--Activity-->
					<div class="activity-block">
						<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg"
							data-user-popover="4" alt="">
						<div class="activity-meta">
							<p><a>David Kim</a> is now participating to the <a>Awesome Pool Party with Friends</a> event.</p>
							<span>23 minutes ago</span>
						</div>
					</div>
					<!--Activity-->
					<div class="activity-block">
						<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/icons/logos/fastpizza.svg"
							data-page-popover="0" alt="">
						<div class="activity-meta">
							<p><a>Fast Pizza</a> has scheduled a new event named <a>Family day at your closest Fast Pizza</a>.</p>
							<span>1 hour ago</span>
						</div>
					</div>
					<!--Activity-->
					<div class="activity-block">
						<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg"
							data-user-popover="5" alt="">
						<div class="activity-meta">
							<p><a>Edward Mayers</a> is now participating to the <a>Awesome Pool Party with Friends</a> event.</p>
							<span>2 hours ago</span>
						</div>
					</div>
					<!--Activity-->
					<div class="activity-block">
						<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/nelly.png"
							data-user-popover="9" alt="">
						<div class="activity-meta">
							<p><a>Nelly Scwatrz</a> accepted your invitation to <a>Project review with Edward and Nelly</a>.</p>
							<span>2 hours ago</span>
						</div>
					</div>
					<!--Activity-->
					<div class="activity-block">
						<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/icons/logos/lonelydroid.svg"
							data-page-popover="1" alt="">
						<div class="activity-meta">
							<p><a>Lonely Droid</a> has scheduled a new event named <a>Lonely Droid Days</a>.</p>
							<span>5 hours ago</span>
						</div>
					</div>
					<!--Activity-->
					<div class="activity-block">
						<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/milly.jpg"
							data-user-popover="7" alt="">
						<div class="activity-meta">
							<p><a>Milly Augustine</a> is now participating to the <a>Awesome Pool Party with Friends</a> event.</p>
							<span>8 hours ago</span>
						</div>
					</div>
					<!--Activity-->
					<div class="activity-block">
						<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1"
							alt="">
						<div class="activity-meta">
							<p><a>Dan Walker</a> is now participating to the <a>Awesome Pool Party with Friends</a> event.</p>
							<span>Yesterday</span>
						</div>
					</div>
					<!--Activity-->
					<div class="activity-block">
						<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/edward.jpeg"
							data-user-popover="5" alt="">
						<div class="activity-meta">
							<p><a>Edward Mayers</a> is now participating to <a>2 events</a>.</p>
							<span>Yesterday hours ago</span>
						</div>
					</div>
					<!--Activity-->
					<div class="activity-block">
						<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1"
							alt="">
						<div class="activity-meta">
							<p><a>Dan Walker</a> is now participating to the <a>Super Ball Snack & Drinks</a> event.</p>
							<span>Monday</span>
						</div>
					</div>
					<!--Activity-->
					<div class="activity-block">
						<img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/david.jpg"
							data-user-popover="4" alt="">
						<div class="activity-meta">
							<p><a>David Kim</a> is now participating to the <a>Legacy Of The Void Release Party</a> event.</p>
							<span>Monday</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
