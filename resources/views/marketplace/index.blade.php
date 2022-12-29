@extends('layouts.marketplace_layout')

@section('content')
	<div class="view-wrapper marketplace">
		<div id="shop-page" class="navbar-v2-wrapper">
			<div class="container shop-page-content columns m-5">
				<div class="container">
					<div class="column">

						<aside class="menu">
							<h3 class="mb-4">Your Picks</h3>
							<ul class="menu-list">
								<li>
									<a href="javascript:void(0);"
										class="button modal-trigger is-solid accent-button raised is-medium post-btn post-property-btn"
										data-modal="post-property">Post Property</a>
								</li>
							</ul>

							<div class="card list has-hoverable-list-items mt-5">
								<div class="list-item">
									<div class="list-item-description pl-1 pr-1">Activities</div>
								</div>
								<div class="list-item">
									<div class="list-item-image">
										<figure class="image is-50x50">
											<img class="is-rounded sidebar-image" src="https://via.placeholder.com/50x50.png?text=Image">
										</figure>
									</div>

									<div class="list-item-content">
										<div class="list-item-description">Interests</div>
									</div>
								</div>

								<div class="list-item">
									<div class="list-item-image">
										<figure class="image is-50x50">
											<img class="is-rounded sidebar-image" src="https://via.placeholder.com/50x50.png?text=Image">
										</figure>
									</div>

									<div class="list-item-content">
										<div class="list-item-description">Buying</div>
									</div>
								</div>

								<div class="list-item">
									<div class="list-item-image">
										<figure class="image is-50x50">
											<img class="is-rounded sidebar-image" src="https://via.placeholder.com/50x50.png?text=Image">
										</figure>
									</div>

									<div class="list-item-content">
										<div class="list-item-description">Selling</div>
									</div>
								</div>
							</div>
							<div class="card list has-hoverable-list-items">
								<div class="list-item">
									<div class="list-item-description pl-1 pr-1">Categories</div>
								</div>
								<div class="list-item">
									<div class="list-item-image">
										<figure class="image is-50x50">
											<img class="is-rounded sidebar-image" src="https://via.placeholder.com/50x50.png?text=Image">
										</figure>
									</div>

									<div class="list-item-content">
										<div class="list-item-description">Industrial</div>
									</div>
								</div>

								<div class="list-item">
									<div class="list-item-image">
										<figure class="image is-50x50">
											<img class="is-rounded sidebar-image" src="https://via.placeholder.com/50x50.png?text=Image">
										</figure>
									</div>

									<div class="list-item-content">
										<div class="list-item-description">Commercial</div>
									</div>
								</div>

								<div class="list-item">
									<div class="list-item-image">
										<figure class="image is-50x50">
											<img class="is-rounded sidebar-image" src="https://via.placeholder.com/50x50.png?text=Image">
										</figure>
									</div>

									<div class="list-item-content">
										<div class="list-item-description">Land</div>
									</div>
								</div>

								<div class="list-item">
									<div class="list-item-image">
										<figure class="image is-50x50">
											<img class="is-rounded sidebar-image" src="https://via.placeholder.com/50x50.png?text=Image">
										</figure>
									</div>

									<div class="list-item-content">
										<div class="list-item-description">Residential</div>
									</div>
								</div>
							</div>
						</aside>
					</div>
				</div>

				<div class="column is-four-fifths">
					<div class="container sidebar-boxed">
						<div class="shop-wrapper">

							<div class="shop-header">
								<div class="container">
									<div class="columns is-half ">
										<div class="column">
											<h3 class="mb-2 has-text-weight-medium">Properties</h3>
										</div>
										<form>
											{{-- <div class="column">
												<h3 class="mb-2 has-text-weight-medium">Price Range</h3>
												<div class="field is-grouped">
													<p class="control">
														<input class="input" type="int" placeholder="Minimum Amount" name='min' value='{{$min}}' required>
													</p>
													<p class="control">
														<input class="input" type="int" placeholder="Maximum Amount" name='max' value='{{$max}}' required>
													</p>
													<p class="control">
														<button class="button is-success" type='submit'>
															Search
														</button>
													</p>
												</div>
											</div> --}}
										</form>

									</div>

									<div class="columns is-two-fifths is-justify-content-space-between pl-3 pr-3 mt-0 ">
										<div class="column is-one-quarter store-tabs p-0">
											<a data-tab="products-tab" class="tab-control is-active pb-0">Listings</a>
											<div class="store-naver"></div>
										</div>

										<!-- displayed modal -->
										<div id="display-modal" class="modal">
											<div class="modal-background"></div>
											<header class="modal-card-head">
												<p class="modal-card-title">Find the location</p>
												<button class="delete" aria-label="close"></button>
											</header>
											<div class="modal-content">
												<div class="modal-card">
													<section class="modal-card-body">
														<!-- Content ... -->
														<div class="pac-card" id="pac-card">
															<div id="pac-container">
																<input id="pac-input" type="text" placeholder="Search ...">
															</div>
														</div>
														<div id="googleMap"></div>
													</section>
													<footer class="modal-card-foot is-align-items-flex-end">
														<button class="button is-success is-align-items-flex-end">Apply</button>
													</footer>
												</div>
											</div>
										</div>

										<!-- -- find the location -->
										{{-- <h3 class="search-location has-text-right">
													<a id="show-modal" class="find-loc">
														<span>Find the location ...</span>
														<i class="fa-solid fa-location-dot"></i>
													</a>
												</h3> --}}
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="store-sections">
						<div class="container">

							<!--Products-->
							<div id="products-tab" class="store-tab-pane is-active">
								<div class="columns is-multiline">
									<!-- /partials/commerce/products/products-list.html -->
									<!--Product-->
									@foreach ($markeplaces as $marketplace)
										<div
											class="column is-one-fifth-quarter is-one-third-widescreen is-half-desktop is-half-tablet is-half-mobile">
											<div class="product-card" data-location='{{ $marketplace->location }}'
												data-description='{{ $marketplace->description }}' data-contact='{{ $marketplace->contact_number }}'
												data-name="{{ $marketplace->property_name }}" data-price="{{ number_format($marketplace->price, 2) }}"
												data-colors="true" data-variants="true" data-path="{{ asset($marketplace->cover_photo) }}"
												data-person='{{ $marketplace->contact_person }}'>
												<a class="quickview-trigger">
													<i data-feather="more-horizontal"></i>
												</a>
												<div class="product-image">
													<img class="image is-128x128" src="{{ asset($marketplace->attachment[0]->attachment) }}" alt="">
												</div>
												<div class="product-info">
													<h3>{{ $marketplace->property_name }}</h3>
													<p>{{ $marketplace->contact_number }}</p>
												</div>
												<div class="product-actions">
													{{-- <div class="left">
																					<i data-feather="heart"></i>
																					<span>147</span>
																			</div> --}}
													<div class="right">
														<a class="button is-solid accent-button raised">
															{{-- <i data-feather="shopping-cart"></i> --}}
															<span>$ {{ number_format($marketplace->price, 2) }}</span>
														</a>
													</div>
													<div class="left">
													@if ($marketplace->user_id == auth()->user()->id)
														<a class="button is-solid is-info raised {{ $marketplace->status == "Sold" ? "is-disabled is-danger": "" }}" id="markSold{{ $marketplace->id }}" onclick="marksold({{ $marketplace->id }})">
															{{-- <i data-feather="shopping-cart"></i> --}}
															<span class="has-text-light" id="spanSold{{ $marketplace->id }}">{{ $marketplace->status == "Sold" ? "Sold" : "Mark as sold" }}</span>
														</a>
													@endif
														
													</div>
												</div>
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

		<div id='product-quickview' class="modal product-quickview is-large has-light-bg">
			<div class="modal-background quickview-background"></div>
			<div class="modal-content">
				<div class="card">
					<div class="left">
						<div class="product-image is-active">
								<img class="image" src="" alt="">		
						</div>
								{{-- <!-- Start Carousel -->
								<div class="section">
								<div class="container">
								<div id="carousel-demo" class="carousel">
									@foreach ( $markeplaces as $marketplace )
										@foreach ($marketplace->attachment as $attachment)
											<div class="item-1">
												<div class="product-image is-active">
														<img class="image is-128x128" src="{{ asset($attachment->attachment) }}" alt="">		
												</div>
											</div>
										@endforeach
									@endforeach
								</div>
								</div>
								</div> --}}
								
						
					</div>
					<div class="right">
						<div class="header">
							<div class="product-info">
								<h3 id="quickview-name">Product Name</h3 id="quickview-price">
								{{-- <p>Product tagline text</p> --}}
							</div>
							<div id="quickview-price" class="price">
								27.00
							</div>
						</div>
						<div class="properties">
						</div>

						<!--Description-->
						<div class="quickview-description content has-slimscroll">
							<p> <b>Contact Person </b> : <span id='contact_person_view'></span>
							</p>
							<p><b> Contact Number/Email </b> : <span id='contacts'></span></p>
							<p><b> Price </b> : $ <span id='price_data'></span></p>
							<p><b> Location </b> : <a href='#' id='google_map_data' target='_blank'><span
										id='location_data'></span></a></p>
							<p><b> Description </b> <br> <span id='description_data'></span></p>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="post-property" class="modal is-medium has-light-bg">
		<div class="modal-background"></div>
		<div class="modal-content">
			<form action="new-property" method="POST" onsubmit='show();' enctype="multipart/form-data">
				@csrf
				<div class="card">
					<div class="card-heading">
						<h3>Post Property</h3>
						<!-- Close X button -->
						<div class="close-wrap">
							<span class="close-modal">
								<i data-feather="x"></i>
							</span>
						</div>
					</div>
					<div class="card-body">
						<div class="field">
							<label class="label">Property Name</label>
							<div class="control">
								<input class="input" type="text" name='property_name' placeholder="Property Name" id="name"
									required>
							</div>
						</div>
						<div class="field">
							<label class="label">Contact Person</label>
							<div class="control">
								<input class="input" type="text" placeholder="Name" name='contact_person' required>
							</div>
						</div>
						<div class="field">
							<label class="label">Contact Number/Email</label>
							<div class="control">
								<input class="input" type="text" placeholder="Contact Number or Email" name='contact_number' required>
							</div>
						</div>
						<div class="field">
							<label class="label">Description</label>
							<div class="control">
								<textarea name="description" id="description" cols="30" rows="10" class="input"
								 style="min-height: 100px;" placeholder="Description" required></textarea>
							</div>
						</div>
						<div class="field">
							<label class="label">Price</label>
							<div class="control">
								<input class="input" type="number" placeholder="Price" name='price' id="price" required>
							</div>
						</div>
						<div class="field">
							<label class="label">Location</label>
							<div class="control">
								<input class="input" type="text" placeholder="Location" id="location" name='location' required>
							</div>
						</div>
						<div class="field">
							<label class="label"> Cover Photo
								<div class="control">
									<input type="file" name="image[]" accept="image/*" required multiple/>
								</div>
							</label>
						</div>

					</div>

					<footer class="modal-card-foot">
						<button class="button is-success" id="submitMarket" type='submit'>Post</button>
						{{-- <button class="button">Cancel</button> --}}
					</footer>
			</form>
		</div>
		</form>
	</div>
	</div>
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
</script>
