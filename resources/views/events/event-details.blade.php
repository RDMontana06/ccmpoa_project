@extends('layouts.main')

@section('content')
	<div class="view-wrapper is-full">

		<!--Wrapper-->
		<div class="event-page-wrapper">

			<!--Cover-->
			<div class="event-cover">
				<img class="cover-image" src="{{ url('' . $event->cover_photo) }}" onerror="this.src='{{URL::asset('/images/no_image.png')}}';"
        data-demo-src="{{ $event->cover_photo }}"
					alt="">
			</div>
			<!--Main infos-->
			<div class="event-content">
				<div class="event-head">
					<div class="left">
						<h2>{{ $event->name }}</h2>
						<h3>{{ date('g:i a', strtotime($event->date)) }} - {{ date('g:i a', strtotime($event->expiration_date)) }}</h3>
						<div class="button-separator">
							<i data-feather="chevron-right"></i>
						</div>
						<div class="info-block">
							<div class="info-head">
								<div class="event-icon">
									<i data-feather="calendar"></i>
								</div>
								<span>Scheduled on</span>
							</div>
							<div class="info-body">
								<p>{{ date("l, F j Y", strtotime($event->date))}}</p>
							</div>
						</div>
						<div class="info-block">
							<div class="info-head">
								<div class="event-icon">
									<i data-feather="map-pin"></i>
								</div>
								<span>Location</span>
							</div>
							<div class="info-body">
								<a>{{ $event->address }}</a>
							</div>
						</div>
						{{-- <div class="info-block">
							<div class="info-head">
								<div class="event-icon">
									<i data-feather="share-2"></i>
								</div>
								<span>Share</span>
							</div>
							<div class="info-body">
								<div class="socials">
									<a><i data-feather="facebook"></i></a>
									<a><i data-feather="twitter"></i></a>
									<a><i data-feather="linkedin"></i></a>
									<a><i data-feather="instagram"></i></a>
								</div>
							</div>
						</div> --}}
					</div>
					<div class="right">
						<h2>Subscribe Now</h2>
            {{-- {{ dd($event->participant) }} --}}
						<div class="subscribe-block">
							<p>If you are interested to this event click the register button</p>
							<button class="button is-solid is-success raised {{ $eventUser == null ? '' : 'is-disabled' }} " onclick="addCalendar({{ $event->id }})" id="btnAddCalendar">Register</button>
						</div>
						<div class="condition has-text-centered">
							<span></span>
						</div>
						<div class="subscribe-block">
							<p></p>
							{{-- <img
								src="https://cdn.futura-sciences.com/buildsv6/images/largeoriginal/f/6/2/f621f61ff6_50038379_codeqr-futura.jpg"
								alt=""> --}}
                {{-- <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(250)->generate('event/eventDetails/register-event/'.$event->id)) }} "> --}}
						</div>
					</div>
				</div>

				<!--Participants-->
				<div class="event-participants">
					<div class="container-inner" id="participant">
          @if ($event->participant->isNotEmpty())
             @foreach ($event->participant as $participant)
            <a class="participant" >
							<div class="participant-avatar" >
								<img class="avatar" src="{{ asset($participant->user->profile_picture) }}" onerror="this.src='{{URL::asset('/images/no_image.png')}}';" data-demo-src="{{ asset($participant->user->profile_picture )}}"
									data-user-popover="1" alt="">
							</div>
						</a>
          @endforeach
          @endif
         
						{{-- <a class="participant">
							<div class="participant-avatar">
								<img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/dan.jpg"
									data-user-popover="1" alt="">
							</div>
						</a>
						<a class="participant">
							<div class="participant-avatar">
								<img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/bobby.jpg"
									data-user-popover="8" alt="">
							</div>
						</a>
						<a class="participant">
							<div class="participant-avatar">
								<img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/stella.jpg"
									data-user-popover="2" alt="">
							</div>
						</a>
						<a class="participant">
							<div class="participant-avatar">
								<img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/milly.jpg"
									data-user-popover="7" alt="">
							</div>
						</a>
						<a class="participant">
							<div class="participant-avatar">
								<img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/elise.jpg"
									data-user-popover="4" alt="">
							</div>
						</a>
						<a class="participant">
							<div class="participant-avatar">
								<img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/lana.jpeg"
									data-user-popover="10" alt="">
							</div>
						</a>
						<a class="participant">
							<div class="participant-avatar">
								<img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/david.jpg"
									data-user-popover="4" alt="">
							</div>
						</a>
						<a class="participant">
							<div class="participant-avatar">
								<img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/mike.jpg"
									data-user-popover="12" alt="">
							</div>
						</a>
						<a class="participant">
							<div class="participant-avatar">
								<img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/azzouz.jpg"
									data-user-popover="20" alt="">
							</div>
						</a>
						<a class="participant">
							<div class="participant-avatar">
								<img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/jenna.png"
									data-user-popover="0" alt="">
								<div class="more-overlay">
									<span>+26</span>
								</div>
							</div>
						</a> --}}
					</div>
				</div>

				<!--Details-->
				<div class="event-details">
					<!--Left Side-->
					<div class="left">
						<div class="details-block">
							<h3>Event Details</h3>
							<p>{{ $event->description }}</p>
						</div>

						{{-- <div class="details-block">
							<h3>Event Photos and Videos</h3>

							<div class="video-block-wrapper">
								<div id="video-embed" class="video-block-inner" data-url="https://www.youtube.com/watch?v=1neHf-ALfck">
									<div class="video-overlay"></div>
									<div class="playbutton">
										<div class="icon-play">
											<i data-feather="play"></i>
										</div>
									</div>
								</div>
							</div>

							<div class="photo-group">
								<a href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/54.jpg" data-fancybox
									data-caption="">
									<img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/54.jpg"
										alt="">
								</a>
								<a href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/7.jpg" data-fancybox
									data-caption="">
									<img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/7.jpg"
										alt="">
								</a>
								<a href="https://via.placeholder.com/1600x900" data-demo-href="assets/img/demo/unsplash/4.jpg" data-fancybox
									data-caption="">
									<img src="https://via.placeholder.com/1600x900" data-demo-src="assets/img/demo/unsplash/4.jpg"
										alt="">
								</a>
							</div>
						</div> --}}
					</div>

					<!--Right side-->
					<div class="right">
						<div class="event-owner">
							<img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="assets/img/avatars/stella.jpg"
								data-user-popover="2" alt="">
							<div class="meta">
								<span>Event organized by</span>
								<span>{{ $event->organizer }}</span>
							</div>
						</div>

						<div class="side-block">
							<div class="side-head">
								<span>Phone Number</span>
							</div>
							<div class="side-body">
								<a>{{ $event->organizer_number }}</a>
							</div>
						</div>

						<div class="side-block">
							<div class="side-head">
								<span>Email Address</span>
							</div>
							<div class="side-body">
								<a>{{ $event->organizer_email }}</a>
							</div>
						</div>

						<div class="side-block">
							<div class="side-head">
								<span>Website</span>
							</div>
							<div class="side-body">
								<a>{{ $event->organizer_website }}</a>
							</div>
						</div>
					</div>
				</div>
        {{-- <a class="participant">
        <div class="participant-avatar">
          <img class="avatar" src='{{ asset(auth()->user()->profile_picture) }}' 
          data-demo-src='{{ asset(auth()->user()->profile_picture) }}' data-user-popover="1" alt="">
        </div>
        </a> --}}

			</div>
		</div>
	</div>
@endsection
@section('addCalendar')
<script>
function addCalendar(id) {
			// alert('IDIDIIDDI');
			Swal.fire({
				title: 'Register to this event',
				text: "Are you sure about this?",
				icon: 'question',
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes'
			}).then((result) => {
				if (result.isConfirmed) {
					$(".pageloader").toggleClass("is-active");
					$.ajax({
						url: "register-event/" + id,
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
								'Registered!',
								'Event has been registered to this event!',
								'success'
							).then(function() {
                let div = document.querySelector('#participant');
                // let html = ''
                div.insertAdjacentHTML( 'beforeend', 
                '<a class="participant"> <div class="participant-avatar"><img class="avatar" src="{{URL::asset(("") . auth()->user()->profile_picture)}}" data-demo-src="{{URL::asset(("") . auth()->user()->profile_picture)}}" data-user-popover="1" alt=""></div></a>');
                    // div.append('<a class="participant"><div class="participant-avatar"><img class="avatar" src='{{ asset(auth()->user()->profile_picture) }}' data-demo-src='{{ asset(auth()->user()->profile_picture) }}' data-user-popover="1" alt=""></div></a>');
                 document.querySelector('#btnAddCalendar').disabled = true;
                // 
							});
						}
					})
				} else if (
					result.dismiss === Swal.DismissReason.cancel
				) {
					swal.fire(
						'Cancelled',
						'Event is safe',
						'error'
					)
				}
			})
		}
</script>
@endsection