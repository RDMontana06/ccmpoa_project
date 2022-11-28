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
									<a href="javascript:void(0);" class="button modal-trigger is-solid accent-button raised is-medium post-btn post-property-btn"
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
										<div class="column">
											<h3 class="mb-2 has-text-weight-medium">Price Range</h3>
											<div class="field is-grouped">
												<p class="control">
													<input class="input" type="int" placeholder="Minimum Amount">
												</p>
												<p class="control">
													<input class="input" type="int" placeholder="Maximum Amount">
												</p>
												<p class="control">
													<a class="button is-success">
														Search
													</a>
												</p>
											</div>
										</div>

									</div>

									<div class="columns is-two-fifths is-justify-content-space-between pl-3 pr-3 mt-0 ">
										<div class="column is-one-quarter store-tabs p-0">
											<a data-tab="products-tab" class="tab-control is-active pb-0">Listings</a>
											<a data-tab="brands-tab" class="tab-control pb-0" style="display: none;">Brands</a>
											<a data-tab="followers-tab" class="tab-control pb-0" style="display: none;">Followers</a>
											<div class="store-naver"></div>
										</div>
										<div class="column">
										</div>
										<div class="columns pl-3">
											<div class="column" id="price-range">
												<div class="price-data mb-1">
													<input type="number" id="amount_min">
													<input type="number" id="amount_max">
												</div>
												<div id="slider-range"></div>
											</div>
											<div class="column location">

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
												<h3 class="search-location has-text-right">
													<a id="show-modal" class="find-loc">
														<span>Find the location ...</span>
														<i class="fa-solid fa-location-dot"></i>
													</a>
												</h3>
											</div>
										</div>
									</div>

								</div>
							</div>

							<div class="store-sections">
								<div class="container">

									<!--Products-->
									<div id="products-tab" class="store-tab-pane is-active">
										<div class="columns is-multiline" id="marketplace_listing">
											<!--Product-->
										

											<!--Product-->
											<div class="column is-one-fifth-quarter is-one-third-widescreen is-half-desktop is-half-tablet is-half-mobile">
												<div class="product-card p-0" data-name="Spring Red Dress" data-price="42,500.00" data-colors="true"
													data-variants="true" data-path="{{ asset('assets/img/products/sample-property.png') }}">

													{{-- <div class="set-options">
                                                        <img class="go-to-products pointer" src="../assets/img/forward.svg" href="#">
                                                        <img class="heart pointer" src="../assets/img/heart.svg" href="#">
                                                    </div> --}}

													<div class="product-image">
														<img class="m-0" src="{{ asset('assets/img/products/sample-property.png') }}" alt="">
													</div>

													<div class="product-info">
														<div class="columns mb-1 pl-3 pr-3 mt-1 price-classify">
															<div class="column pb-0">
																<h2 class="tag-price">$42,500</h2>
															</div>
															<div class="column has-text-right pb-0">
																{{-- <span class="product-classification">Selling</span> --}}
															</div>
														</div>
														<div class="product-title mb-1 pl-3 pr-3">
															<h2 class="has-text-weight-medium">Sigh Field Property</h2>
														</div>
														<div class="product-sub-details columns pl-3 pr-3 mb-1">
															<div class="column">
																<p>from <span class="tag-location">Seiser Aim, Kasteiruth, Italy.</span></p>
															</div>
															<div class="column is-one-third has-text-right">
																<p class="date-posted">Jul 1, 2022</p>
															</div>
														</div>
													</div>

													<div class="posted-by-info pl-3 pr-3 pt-2 pb-2">
														<img class="posted-by-image mr-3" src="https://via.placeholder.com/50x50.png?text=Image">
														<a class="posted-by" href="#">posted by <span class="posted-name">Vish Singh</span></a>
													</div>
												</div>
											</div>

											<!--Product-->
											<div
												class="column is-one-fifth-quarter is-one-third-widescreen is-half-desktop is-half-tablet is-half-mobile">
												<div class="product-card p-0" data-name="Spring Red Dress" data-price="42,500.00" data-colors="true"
													data-variants="true" data-path="../assets/img/products/sample-property">
													{{-- 
                                                    <div class="set-options">
                                                        <img class="go-to-products pointer" src="../assets/img/forward.svg" href="#">
                                                        <img class="heart pointer" src="../assets/img/heart.svg" href="#">
                                                    </div> --}}

													<div class="product-image">
														<img class="m-0" src="{{ asset('assets/img/products/sample-property.png') }}" alt="">
													</div>

													<div class="product-info">
														<div class="columns mb-1 pl-3 pr-3 mt-1 price-classify">
															<div class="column pb-0">
																<h2 class="tag-price">$42,500</h2>
															</div>
															<div class="column has-text-right pb-0">
																<span class="product-classification">Selling</span>
															</div>
														</div>
														<div class="product-title mb-1 pl-3 pr-3">
															<h2 class="has-text-weight-medium">Sigh Field Property</h2>
														</div>
														<div class="product-sub-details columns pl-3 pr-3 mb-1">
															<div class="column">
																<p>from <span class="tag-location">Seiser Aim, Kasteiruth, Italy.</span></p>
															</div>
															<div class="column is-one-third has-text-right">
																<p class="date-posted">Jul 1, 2022</p>
															</div>
														</div>
													</div>

													<div class="posted-by-info pl-3 pr-3 pt-2 pb-2">
														<img class="posted-by-image mr-3" src="https://via.placeholder.com/50x50.png?text=Image">
														<a class="posted-by" href="#">posted by <span class="posted-name">Vish Singh</span></a>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--Followers-->
									<div id="followers-tab" class="store-tab-pane">
										<div class="columns is-multiline followers-wrap">
											<!-- /partials/commerce/products/products-followers.html -->
											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
													</div>
													<h3>Jenna Davis</h3>
													<p>From Melbourne</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
													</div>
													<h3>Dan Walker</h3>
													<p>From New York</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
													</div>
													<h3>Stella Bergmann</h3>
													<p>From Berlin</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">
													</div>
													<h3>Daniel Wellington</h3>
													<p>From London</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/nelly.png" data-user-popover="9" alt="">
													</div>
													<h3>Nelly Schwartz</h3>
													<p>From Melbourne</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/milly.jpg" data-user-popover="7" alt="">
													</div>
													<h3>Milly Augustine</h3>
													<p>From Rome</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/david.jpg" data-user-popover="4" alt="">
													</div>
													<h3>David Kim</h3>
													<p>From Chicago</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="">
													</div>
													<h3>Elise Walker</h3>
													<p>From London</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">
													</div>
													<h3>Rolf Krupp</h3>
													<p>From Berlin</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/ken.jpg" data-user-popover="14" alt="">
													</div>
													<h3>Ken Rogers</h3>
													<p>From Chicago</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/lana.jpeg" data-user-popover="10" alt="">
													</div>
													<h3>Lana Henrikssen</h3>
													<p>From Helsinki</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/leana.jpg" data-user-popover="15" alt="">
													</div>
													<h3>Leana Marks</h3>
													<p>From Nashville</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/mike.jpg" data-user-popover="17" alt="">
													</div>
													<h3>Mike Donovan</h3>
													<p>From San Francisco</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/azzouz.jpg" data-user-popover="20" alt="">
													</div>
													<h3>Azzouz El Paytoun</h3>
													<p>From Montreal</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">
													</div>
													<h3>Edward Mayers</h3>
													<p>From Dublin</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/gaelle.jpeg" data-user-popover="11" alt="">
													</div>
													<h3>Gaelle Morris</h3>
													<p>From Lyon</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">
													</div>
													<h3>Bobby Brown</h3>
													<p>From Paris</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/cathy.png" data-user-popover="21" alt="">
													</div>
													<h3>Cathy Smith</h3>
													<p>From Seattle</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/bob.png" data-user-popover="22" alt="">
													</div>
													<h3>Bob Barker</h3>
													<p>From Tijuana</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/hisashi.jpg" data-user-popover="24" alt="">
													</div>
													<h3>Hisashi Yokida</h3>
													<p>From Tokyo</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/aline.jpg" data-user-popover="16" alt="">
													</div>
													<h3>Aline Cambell</h3>
													<p>From Seattle</p>
												</div>
											</div>

											<!--Follower-->
											<div
												class="column is-one-fifth-fullhd is-one-quarter-widescreen is-one-third-desktop is-one-third-tablet is-half-mobile">
												<div class="follower-block">
													<div class="avatar-container">
														<img class="avatar" src="https://via.placeholder.com/150x150"
															data-demo-src="../assets/img/avatars/brian.jpg" data-user-popover="19" alt="">
													</div>
													<h3>Brian Stevenson</h3>
													<p>From Seattle</p>
												</div>
											</div>
										</div>
									</div>

									<!--Brands-->
									<div id="brands-tab" class="store-tab-pane">
										<div class="columns is-multiline">
											<!-- /partials/commerce/products/products-brands.html -->
											<!--Brand-->
											<div
												class="column is-one-fifth-quarter is-one-third-widescreen is-half-desktop is-half-tablet is-half-mobile">
												<div class="brand-card">
													<img src="../assets/img/icons/shop/brands/1.svg" alt="">
													<div class="meta">
														<h3>Adventure</h3>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="brand-stats">
														<div class="brand-stat">
															<span>10</span>
															<span>Products</span>
														</div>
														<div class="brand-stat">
															<span>800</span>
															<span>Sales</span>
														</div>
														<div class="brand-stat">
															<span>4K</span>
															<span>Likes</span>
														</div>
													</div>
												</div>
											</div>

											<!--Brand-->
											<div
												class="column is-one-fifth-quarter is-one-third-widescreen is-half-desktop is-half-tablet is-half-mobile">
												<div class="brand-card">
													<img src="../assets/img/icons/shop/brands/2.svg" alt="">
													<div class="meta">
														<h3>Ludicrous</h3>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="brand-stats">
														<div class="brand-stat">
															<span>10</span>
															<span>Products</span>
														</div>
														<div class="brand-stat">
															<span>800</span>
															<span>Sales</span>
														</div>
														<div class="brand-stat">
															<span>4K</span>
															<span>Likes</span>
														</div>
													</div>
												</div>
											</div>

											<!--Brand-->
											<div
												class="column is-one-fifth-quarter is-one-third-widescreen is-half-desktop is-half-tablet is-half-mobile">
												<div class="brand-card">
													<img src="../assets/img/icons/shop/brands/3.svg" alt="">
													<div class="meta">
														<h3>Fashion Store</h3>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="brand-stats">
														<div class="brand-stat">
															<span>10</span>
															<span>Products</span>
														</div>
														<div class="brand-stat">
															<span>800</span>
															<span>Sales</span>
														</div>
														<div class="brand-stat">
															<span>4K</span>
															<span>Likes</span>
														</div>
													</div>
												</div>
											</div>

											<!--Brand-->
											<div
												class="column is-one-fifth-quarter is-one-third-widescreen is-half-desktop is-half-tablet is-half-mobile">
												<div class="brand-card">
													<img src="../assets/img/icons/shop/brands/4.svg" alt="">
													<div class="meta">
														<h3>Anna Morris</h3>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="brand-stats">
														<div class="brand-stat">
															<span>10</span>
															<span>Products</span>
														</div>
														<div class="brand-stat">
															<span>800</span>
															<span>Sales</span>
														</div>
														<div class="brand-stat">
															<span>4K</span>
															<span>Likes</span>
														</div>
													</div>
												</div>
											</div>

											<!--Brand-->
											<div
												class="column is-one-fifth-quarter is-one-third-widescreen is-half-desktop is-half-tablet is-half-mobile">
												<div class="brand-card">
													<img src="../assets/img/icons/shop/brands/5.svg" alt="">
													<div class="meta">
														<h3>Explorer</h3>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="brand-stats">
														<div class="brand-stat">
															<span>10</span>
															<span>Products</span>
														</div>
														<div class="brand-stat">
															<span>800</span>
															<span>Sales</span>
														</div>
														<div class="brand-stat">
															<span>4K</span>
															<span>Likes</span>
														</div>
													</div>
												</div>
											</div>

											<!--Brand-->
											<div
												class="column is-one-fifth-quarter is-one-third-widescreen is-half-desktop is-half-tablet is-half-mobile">
												<div class="brand-card">
													<img src="../assets/img/icons/shop/brands/6.svg" alt="">
													<div class="meta">
														<h3>Cherry Pick</h3>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="brand-stats">
														<div class="brand-stat">
															<span>10</span>
															<span>Products</span>
														</div>
														<div class="brand-stat">
															<span>800</span>
															<span>Sales</span>
														</div>
														<div class="brand-stat">
															<span>4K</span>
															<span>Likes</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="product-quickview" class="modal product-quickview is-large has-light-bg">
			<div class="modal-background quickview-background"></div>
			<div class="modal-content">

				<div class="card">
					<div class="quickview-loader is-active">
						<div class="loader is-loading"></div>
					</div>
					<div class="left">
						<div class="product-image is-active">
							<img src="../assets/img/products/1.svg" alt="">
						</div>
					</div>
					<div class="right">
						<div class="header">
							<div class="product-info">
								<h3 id="quickview-name">Product Name</h3 id="quickview-price">
								<p>Product tagline text</p>
							</div>
							<div id="quickview-price" class="price">
								27.00
							</div>
						</div>
						<div class="properties">
							<!--Colors-->
							<div id="color-properties" class="property-group is-hidden">
								<h4>Colors</h4>
								<div class="property-box is-colors">
									<!--item-->
									<div class="property-item">
										<input type="radio" name="quickview_colors" id="red">
										<div class="item-inner">
											<div class="color-dot">
												<div class="dot-inner is-red"></div>
											</div>
										</div>
									</div>
									<!--item-->
									<div class="property-item">
										<input type="radio" name="quickview_colors" id="blue">
										<div class="item-inner">
											<div class="color-dot">
												<div class="dot-inner is-blue"></div>
											</div>
										</div>
									</div>
									<!--item-->
									<div class="property-item">
										<input type="radio" name="quickview_colors" id="green">
										<div class="item-inner">
											<div class="color-dot">
												<div class="dot-inner is-green"></div>
											</div>
										</div>
									</div>
									<!--item-->
									<div class="property-item">
										<input type="radio" name="quickview_colors" id="yellow">
										<div class="item-inner">
											<div class="color-dot">
												<div class="dot-inner is-yellow"></div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--Colors-->
							<div id="size-properties" class="property-group">
								<h4>Sizes</h4>
								<div class="property-box is-sizes">
									<!--item-->
									<div class="property-item">
										<input type="radio" name="quickview_sizes" id="S">
										<div class="item-inner">
											<span class="size-label">S</span>
										</div>
									</div>
									<!--item-->
									<div class="property-item">
										<input type="radio" name="quickview_sizes" id="M" checked>
										<div class="item-inner">
											<span class="size-label">M</span>
										</div>
									</div>
									<!--item-->
									<div class="property-item">
										<input type="radio" name="quickview_sizes" id="L">
										<div class="item-inner">
											<span class="size-label">L</span>
										</div>
									</div>
									<!--item-->
									<div class="property-item">
										<input type="radio" name="quickview_sizes" id="XL">
										<div class="item-inner">
											<span class="size-label">XL</span>
										</div>
									</div>
								</div>
							</div id="color-properties">
						</div>

						<!--Description-->
						<div class="quickview-description content has-slimscroll">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Scrupulum, inquam, abeunti; Ubi ut eam
								caperet aut quando? Erat enim
								Polemonis. Utram tandem linguam nescio? Duo Reges: constructio interrete. </p>

							<p>Alio modo Non est igitur voluptas bonum. Estne, quaeso, inquam, sitienti in bibendo
								voluptas? Erat enim Polemonis. Minime vero,
								inquit ille, consentit. Hic ambiguo ludimur. Numquam facies. Ea possunt paria non esse. </p>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scrupulum, inquam, abeunti; Ubi ut eam
								caperet aut quando? Erat enim
								Polemonis. Utram tandem linguam nescio? Duo Reges: constructio interrete.</p>
						</div>

						<div class="quickview-controls">
							<div class="spinner">
								<button class="remove">
									<i data-feather="minus"></i>
								</button>
								<span class="value">1</span>
								<button class="add">
									<i data-feather="plus"></i>
								</button>
								<input class="spinner-input" type="hidden" value="1">
							</div>
							<a class="button is-solid accent-button raised">
								<span>Add To Cart</span>
								<var id="quickview-button-price">27.00</var>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="post-property" class="modal is-medium has-light-bg">
		<div class="modal-background"></div>
		<div class="modal-content">
			<form >
				<div class="card">
					<div class="card-heading">
						<h3>Property Form</h3>
						<!-- Close X button -->
						<div class="close-wrap">
							<span class="close-modal">
								<i data-feather="x"></i>
							</span>
						</div>
					</div>
					<div class="card-body">
						<form action="new-propert" method="POST">
							<div class="field">
								<label class="label">Name</label>
								<div class="control">
									<input class="input" type="text" placeholder="Name" id="name" required>
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
									<input class="input" type="number" placeholder="Price" id="price" required>
								</div>
							</div>
							<div class="field">
								<label class="label">Location</label>
								<div class="control">
									<input class="input" type="text" placeholder="Location" id="location" required>
								</div>
							</div>
							<div class="field">
								<label class="label">
									<div class="control file">
										<input type="file" name="sample_image" id="property_img" required />
									</div>
								</label>
							</div>
						</form>
					</div>

					<footer class="modal-card-foot">
						<button class="button is-success" type='submit'>Post</button>
						{{-- <button class="button">Cancel</button> --}}
					</footer>
				</div>
			</form>
		</div>
	</div>
@endsection
