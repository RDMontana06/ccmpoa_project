@extends('layouts.main')
@section('title', 'CCMPOA.org | Events')

@section('content')
	<div class="view-wrapper">

		<!--Wrapper-->
		<div id="events-page" class="events-wrapper">
			<!--Events Sidebar-->
			<div class="left-panel">
				<div class="left-panel-inner has-slimscroll">
					<!--Event Link-->

					@if ($events != null)
						@foreach ($events as $event)
							<a href="#event-{{ $event->id }}" data-event-id="event-{{ $event->id }}" class="scroll-link">
								<span class="date-block">
									<i data-feather="calendar"></i>
									<span class="month">{{ date('M d', strtotime($event->date)) }}</span>
								</span>
								<span class="meta-block">
									<span class="time">at {{ date('g:i a', strtotime($event->date)) }}</span>
								</span>
							</a>
						@endforeach
					@endif
					<div class="add-event">
						<button class="button modal-trigger" data-modal="new-event-modal">New Event</button>
					</div>

				</div>
			</div>

			<!--Event List-->
			<div class="wrapper-inner">
				<div id="event-list" class="event-list">
					<!-- /partials/pages/events/events-1.html -->
					@if ($events != null)
						@foreach ($events as $event)
							<div id="event-{{ $event->id }}" class="event-item">
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
												<a href="{{ URL('event/eventDetails/' . $event->id) }}" class="dropdown-item">
													<div class="media">
														<i data-feather="calendar"></i>
														<div class="media-content">
															<h3>View Event</h3>
															<small>Open event details.</small>
														</div>
													</div>
												</a>
												<a class="dropdown-item modal-trigger" id="{{ $event->id }}" onclick="ownerModal(this.id)">
													<div class="media">
														<i data-feather="smile"></i>
														<div class="media-content">
															<h3>Owner</h3>
															<small>View owner details.</small>
														</div>
													</div>
												</a>
												@foreach ($event->participant as $participant )
													@if ($participant->user_id === auth()->user()->id)
														<hr class="dropdown-divider">
														<a href="#" class="dropdown-item" id="leaveId{{ $event->id }}"onclick="leave({{ $event->id }})">
															<div class="media">
																<i data-feather="delete"></i>
																<div class="media-content">
																	<h3>Leave</h3>
																	<small>Leave this event.</small>
																</div>
															</div>
														</a>
													@endif
												@endforeach
												{{-- @if ($event->participant->isNotEmpty())
												
													
												@endif --}}
											</div>
										</div>
									</div>
									<h2 class="event-title">{{ $event->name }}</h2>
									<div class="event-subtitle">
										<i data-feather="map-pin"></i>
										<h3>{{ $event->address }} | {{ date('M d, Y', strtotime($event->date)) }}</h3>
									</div>
									<div class="event-content">
										<div class="event-description content">
											<p>{{ $event->description }}</p>
										</div>
									</div>
									<div class="event-participants">
										@foreach ($event->participant as $participant)
											<div class="participants-group" id="userImage{{ $participant->event_id }}">
												<img src="{{ url('') . $participant->user->profile_picture }}"
													onerror="this.src='{{ URL::asset('/images/no_image.png') }}';"
													data-demo-src="{{ url('') . $participant->user->profile_picture }}"data-user-popover="0" alt="">
											</div>
										@endforeach

										<div class="participants-text" id="participants-text{{ $event->id }}">
											@if ($event->participant->count() == 1)
												@foreach ($event->participant as $participant)
													@if ($participant->user->id == auth()->user()->id && $participant->deleted_at != null)
														<p id="you{{ $participant->event_id }}"><a href="#">You</a></p>
													@else
														<p><a href="#">{{ $participant->user->first_name }}</a></p>
													@endif
												@endforeach
												<p id="participate{{ $participant->event_id }}">is participating</p>
											@elseif ($event->participant->count() == 2)
												@foreach ($event->participant as $key => $participant)
													@if ($key == 0)
														<p><a href="#">{{ $participant->user->first_name }}</a>
													@else
														and <a href="#">{{ $participant->user->first_name }}</p>
													@endif
												@endforeach
												<p id="participate{{ $participant->event_id }}">are participating</p>
											@else
												<p>No Participants</p>
											@endif
										</div>
									</div>
								</div>
							</div>
						@endforeach
					@else
						<span>No events found</span>
					@endif
				</div>
			</div>

			<!--Activity Panel-->
			<div class="right-panel">
				<div class="panel-header">
					<h3>Events History</h3>
				</div>
				<div class="panel-body has-slimscroll">
					<!--Activity-->
					@foreach ($events as $event)
						@foreach ($event->participant as $participant)
							<div class="activity-block" id="activity{{ $event->id }}">
								<img src="{{ url('') . $participant->user->profile_picture }}"
									onerror="this.src='{{ URL::asset('/images/no_image.png') }}';"
									data-demo-src="{{ url('') . $participant->user->profile_picture }}" data-user-popover="4" alt="">
								<div class="activity-meta">
									<p><a>{{ $participant->user->name }}</a> is now participating to the <a>{{ $event->name }}</a> event.</p>
									<span>{{ Carbon\Carbon::parse($participant->updated_at)->diffForHumans() }}</span>
								</div>
							</div>
						@endforeach
					@endforeach
				</div>
			</div>
		</div>
	</div>
	@include('events.new-event')
	@include('events.event-owner')
	@if (count($errors) > 0)
		<script type="text/javascript">
			document.getElementById("new-event-modal").classList.add("is-active");
		</script>
	@endif
@endsection
@section('eventScript')
	<script>
		function ownerModal(idx) {
			var events = {!! json_encode($events->toArray()) !!};
			console.log(events);
			var obj = events.find(event => event.id == idx);
			console.log(obj);
			var source = "{!! asset('/') !!}";
			$('#profile').attr("src", source + obj.user.profile_picture);
			$('#name').append(obj.user.name)
			$('#emailId').attr("href", "mailto:" + obj.user.email).text(obj.user.email)

			$('#org_name').append(obj.organizer)
			$('#org_emailId').attr("href", "mailto:" + obj.organizer_email).text(obj.organizer_email)
			$('#org_number').append(obj.organizer_number)
			$('#org_website').append(obj.organizer_website)
			document.getElementById("owner-modal").classList.add("is-active");
		}

		function leave(id) {
			Swal.fire({
				title: 'Leave this event',
				text: "Are you sure about this?",
				icon: 'question',
				confirmButtonColor: '#3085d6',
				showCancelButton: true,
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes'
			}).then((result) => {
				if (result.isConfirmed) {
					$(".pageloader").toggleClass("is-active");
					$.ajax({
						url: "leave-event/" + id,
						method: "POST",
						data: {
							id: id
						},
						headers: {
							'X-CSRF-TOKEN': '{{ csrf_token() }}'
						},
						success: function(data) {
							$(".pageloader").removeClass("is-active");
							swal.fire(
								'Success',
								'You have successfully leave this event!',
								'success'
							).then(function() {
								let div = document.querySelector('#participant');

								document.querySelector('#leaveId' + id).remove();
								document.querySelector('#activity' + id).remove();
								document.querySelector('#userImage' + id).remove();
								document.querySelector('#you' + id).remove();

							});
						}
					})
				} else if (
					result.dismiss === Swal.DismissReason.cancel
				) {
					swal.fire(
						'Cancelled',
						'You are still a participant to this event',
						'error'
					)
				}
			})
		}
	</script>
@endsection
