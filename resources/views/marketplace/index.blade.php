@extends('layouts.marketplace_main')

@section('content')
	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-12 heading-section text-center ftco-animate mb-5">
					<span class="subheading">Check some properties for sale</span>
					<h2 class="mb-2">Properties</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<button class="btn btn-success" data-toggle="modal" data-target="#property-modal">Post Property</button>
				</div>
				<div class="col-md-6">
					<div class="input-group input-group-sm mb-3">
						<input type="text" class="form-control" id="Search" placeholder="Search Property" onkeyup="myFunction()" aria-label="Recipient's username"
							aria-describedby="button-addon2">
						{{-- <button class="btn btn-outline-success" type="button" id="button-addon2">Search</button> --}}
					</div>
				</div>
			</div>
			<br>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-properties owl-carousel">
						@foreach ($markeplaces as $marketplace)
							@foreach ($marketplace->attachment as $attachment)
								<div class="item target">
									<div class="property-wrap ftco-animate">
										<a href="#" class="img" style="background-image: url({{ asset($attachment->attachment) }});">
											<div class="rent-sale">
												<button class="button is-success {{ $marketplace->status == 'Sold' ? 'is-disabled is-danger' : '' }}"
													id="markSold{{ $marketplace->id }}" onclick="marksold({{ $marketplace->id }})">
													<span class="has-text-light"
														id="spanSold{{ $marketplace->id }}">{{ $marketplace->status == 'Sold' ? 'Sold' : 'Mark as sold' }}</span>
												</button>
											</div>
											<p class="price"><span class="orig-price">${{ $marketplace->price }}</span></p>
										</a>
										<div class="text">
											{{-- <ul class="property_list">
												<li><span class="fas fa-bed"></span>3</li>
												<li><span class="fas fa-bathtub"></span>2</li>
												<li><span class="fas fa-floor-plan"></span>1,878 sqft</li>
											</ul> --}}
											<h3><a href="#">{{ $marketplace->property_name }}</a></h3>
											<span class="location">{{ $marketplace->location }}</span>
											<a href="#" title="View Details" class="d-flex align-items-center justify-content-center btn-custom"
												data-toggle="modal" data-target="#property-details{{ $marketplace->id }}">
												<span class="fa fa-link"></span>
											</a>
											<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
												<div class="d-flex align-items-center">
													<div class="img" style="background-image: url({{ url($marketplace->user->profile_picture) }});"
														onerror="this.src='{{ URL::asset('/images/no_image.png') }}';"></div>
													<h3 class="ml-2">{{ auth()->user()->name }}</h3>
												</div>
												<span class="text-right">{{ Carbon\Carbon::parse($marketplace->updated_at)->diffForHumans() }}</span>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						@endforeach
						{{-- <div class="item">
                <div class="property-wrap ftco-animate">
		        			<a href="#" class="img" style="background-image: url(images/work-4.jpg);">
		        				<div class="rent-sale">
		        					<span class="rent">Rent</span>
		        				</div>
		        				<p class="price"><span class="orig-price">$300<small> / mo</small></span></p>
		        			</a>
		        			<div class="text">
		        				<ul class="property_list">
		        					<li><span class="flaticon-bed"></span>3</li>
		        					<li><span class="flaticon-bathtub"></span>2</li>
		        					<li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
		        				</ul>
		        				<h3><a href="#">The Blue Sky Home</a></h3>
		        				<span class="location">Oakland</span>
		        				<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
		        					<span class="fa fa-link"></span>
		        				</a>
		        				<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
		        					<div class="d-flex align-items-center">
			        					<div class="img" style="background-image: url(images/person_1.jpg);"></div>
			        					<h3 class="ml-2">John Dorf</h3>
			        				</div>
			        				<span class="text-right">2 weeks ago</span>
		        				</div>
		        			</div>
		        		</div>
              </div>
              <div class="item">
                <div class="property-wrap ftco-animate">
		        			<a href="#" class="img" style="background-image: url(images/work-5.jpg);">
		        				<div class="rent-sale">
		        					<span class="rent">Rent</span>
		        				</div>
		        				<p class="price"><span class="orig-price">$300<small> / mo</small></span></p>
		        			</a>
		        			<div class="text">
		        				<ul class="property_list">
		        					<li><span class="flaticon-bed"></span>3</li>
		        					<li><span class="flaticon-bathtub"></span>2</li>
		        					<li><span class="flaticon-floor-plan"></span>1,878 sqft</li>
		        				</ul>
		        				<h3><a href="#">The Blue Sky Home</a></h3>
		        				<span class="location">Oakland</span>
		        				<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
		        					<span class="fa fa-link"></span>
		        				</a>
		        				<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
		        					<div class="d-flex align-items-center">
			        					<div class="img" style="background-image: url(images/person_1.jpg);"></div>
			        					<h3 class="ml-2">John Dorf</h3>
			        				</div>
			        				<span class="text-right">2 weeks ago</span>
		        				</div>
		        			</div>
		        		</div>
              </div> --}}
					</div>
				</div>
			</div>
		</div>
		@foreach ($markeplaces as $marketplace)
			@include('marketplace.property_details')
		@endforeach
		@include('marketplace.new-property')
	</section>
@endsection
<script>
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

	function marksold(id) {
		// console.log("idx: " id);
		Swal.fire({
			title: 'Mark this property as sold',
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
					url: "mark-sold/" + id,
					method: "POST",
					data: {
						id: id
					},
					headers: {
						'X-CSRF-TOKEN': '{{ csrf_token() }}'
					},
					success: function(data) {
						$(".pageloader").removeClass("is-active");
						// document.getElementById("markSold" + id).disabled = true;
						// document.getElementById('markSold' + id).setAttribute("disabled","disabled");
						var element = document.getElementById('markSold' + id);
						element.classList.add("is-danger");
						element.classList.add("is-disabled");
						var div = document.getElementById('spanSold' + id).textContent = "Sold";

						success_message('Success', 'Property has been sold');
					}
				})
			} else if (
				result.dismiss === Swal.DismissReason.cancel
			) {
				swal.fire(
					'Cancelled',
					'Mark as sold was cancelled',
					'error'
				)
			}
		})
	}

	function myFunction() {
		var input = document.getElementById("Search");
		var filter = input.value.toLowerCase();
		var nodes = document.getElementsByClassName('target');

		for (i = 0; i < nodes.length; i++) {
			if (nodes[i].innerText.toLowerCase().includes(filter)) {
				nodes[i].style.display = "";
			} else {
				nodes[i].style.display = "none";
			}
		}
	}
</script>
