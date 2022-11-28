@extends('layouts.main')
@section('title', 'CCMPOA.org | Feed')

@section('content')
	<div class="view-wrapper">
		<div id="main-feed" class="navbar-v2-wrapper">

			<!-- Container -->
			<div class="container">

				<!-- Content placeholders at page load -->
				<!-- this holds the animated content placeholders that show up before content -->
				{{-- <div id="shadow-dom" class="view-wrap">
					<div class="columns">

						<div class="column is-3">

							<!-- Placeload element -->
							<div class="placeload weather-widget-placeload">
								<div class="header">
									<div class="inner-wrap">
										<div class="img loads"></div>
										<div class="content-shape loads"></div>
										<div class="content-shape loads"></div>
									</div>
								</div>
								<div class="body">
									<div class="inner-wrap">
										<div class="rect loads"></div>
										<div class="content-shape loads"></div>
										<div class="content-shape loads"></div>
									</div>
								</div>
							</div>
							<!-- Placeload element -->
							<div class="placeload list-placeload">
								<div class="header">
									<div class="content-shape loads"></div>
								</div>
								<div class="body">
									<div class="flex-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
									<div class="flex-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
									<div class="flex-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
									<div class="flex-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="column is-6">

							<!-- Placeload element -->
							<div class="placeload compose-placeload">
								<div class="header">
									<div class="content-shape is-lg loads"></div>
									<div class="content-shape is-lg loads"></div>
									<div class="content-shape is-lg loads"></div>
								</div>
								<div class="body">
									<div class="img loads"></div>
									<div class="inner-wrap">
										<div class="content-shape loads"></div>
										<div class="content-shape loads"></div>
									</div>
								</div>
							</div>
							<!-- Placeload element -->
							<div class="placeload post-placeload">
								<div class="header">
									<div class="img loads"></div>
									<div class="header-content">
										<div class="content-shape loads"></div>
										<div class="content-shape loads"></div>
									</div>
								</div>
								<div class="image-placeholder loads"></div>
								<div class="placeholder-footer">
									<div class="footer-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- Placeload element -->
							<div class="placeload post-placeload">
								<div class="header">
									<div class="img loads"></div>
									<div class="header-content">
										<div class="content-shape loads"></div>
										<div class="content-shape loads"></div>
									</div>
								</div>
								<div class="image-placeholder loads"></div>
								<div class="placeholder-footer">
									<div class="footer-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- Placeload element -->
							<div class="placeload post-placeload">
								<div class="header">
									<div class="img loads"></div>
									<div class="header-content">
										<div class="content-shape loads"></div>
										<div class="content-shape loads"></div>
									</div>
								</div>
								<div class="image-placeholder loads"></div>
								<div class="placeholder-footer">
									<div class="footer-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- Placeload element -->
							<div class="placeload post-placeload">
								<div class="header">
									<div class="img loads"></div>
									<div class="header-content">
										<div class="content-shape loads"></div>
										<div class="content-shape loads"></div>
									</div>
								</div>
								<div class="image-placeholder loads"></div>
								<div class="placeholder-footer">
									<div class="footer-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="column is-3">

							<!-- Placeload element -->
							<div class="placeload stories-placeload">
								<div class="header">
									<div class="content-shape loads"></div>
								</div>
								<div class="body">
									<div class="flex-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
									<div class="flex-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
									<div class="flex-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
									<div class="flex-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- Placeload element -->
							<div class="placeload mini-widget-placeload">
								<div class="body">
									<div class="inner-wrap">
										<div class="img loads"></div>
										<div class="content-shape loads"></div>
										<div class="content-shape loads"></div>
										<div class="content-shape loads"></div>
										<div class="button-shape loads"></div>
									</div>
								</div>
							</div>
							<!-- Placeload element -->
							<div class="placeload list-placeload">
								<div class="header">
									<div class="content-shape loads"></div>
								</div>
								<div class="body">
									<div class="flex-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
									<div class="flex-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
									<div class="flex-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
									<div class="flex-block">
										<div class="img loads"></div>
										<div class="inner-wrap">
											<div class="content-shape loads"></div>
											<div class="content-shape loads"></div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div> --}}
				<!-- Feed page main wrapper -->
				<div id="activity-feed" class="view-wrap ">
					<div class="columns">
						<!-- Left side column -->
						<div class="column is-3 is-hidden-mobile">
							<!-- Weather widget -->
							<!-- /partials/widgets/weather-widget.html -->
							<div class="card has-background-image is-bottom"
								data-background="{{ asset('assets/img/illustrations/characters/friends2.svg') }}" id="profile-card">
								<div class="pc-first">
									<img src="{{ asset(auth()->user()->profile_picture) }}"
										onerror="this.src='{{ URL::asset('/images/no_image.png') }}';" alt="">
									<div class="pc-first-text">
										<h3 id="userName">{{ auth()->user()->first_name }}</h3>
										{{-- <p>Owner</p> --}}
									</div>
								</div>
								<div class="pc-second" style="background-color:rgba(59,167,103,0.9);">
									<h4>Following</h4>
									<h5 id="following">{{ auth()->user()->following->count() }}</h5>
								</div>
								<div class="pc-third" style="background-color:rgba(59,167,103,0.9);">
									<h4>Followers</h4>
									<h5 id="followers">{{ auth()->user()->followers->count() }}</h5>
								</div>
								<div class="pc-fourth" style="background-color:rgba(59,167,103,0.9);">
									<h4><a href="{{ url('profile') }}">View Profile</a></h4>
								</div>
							</div>
							<!-- Pages widget -->
							<!-- /partials/widgets/recommended-pages-1-widget.html -->
							<div class="card">
								<div class="card-heading is-bordered">
									<h4>Recommended Properties</h4>
									<div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
										<div>
											<div class="button">
												<i data-feather="more-vertical"></i>
											</div>
										</div>
										<div class="dropdown-menu" role="menu">
											<div class="dropdown-content">
												<a href="#" class="dropdown-item">
													<div class="media">
														<i data-feather="file-text"></i>
														<div class="media-content">
															<h3>All Recommandations</h3>
															<small>View all properties.</small>
														</div>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body no-padding">
									<!-- Recommended Page -->
									<div class="page-block transition-block">
										<img src="{{ asset('assets/img/groups/1.jpg') }}"
											data-demo-src="{{ asset('assets/img/icons/logos/fastpizza.svg') }}" data-page-popover="0" alt="">
										<div class="page-meta">
											<span>Property 1</span>
										</div>
									</div>
									<!-- Recommended Page -->
									<div class="page-block transition-block">
										<img src="{{ asset('assets/img/groups/2.jpg') }}"
											data-demo-src="{{ asset('assets/img/icons/logos/lonelydroid.svg') }}" data-page-popover="1" alt="">
										<div class="page-meta">
											<span>Property 2</span>
										</div>
									</div>
									<!-- Recommended Page -->
									<div class="page-block transition-block">
										<img src="{{ asset('assets/img/groups/5.jpg') }}"
											data-demo-src="{{ asset('assets/img/icons/logos/metamovies.svg') }}" data-page-popover="2" alt="">
										<div class="page-meta">
											<span>Property 3</span>
										</div>
									</div>
									<!-- Recommended Page -->
									<div class="page-block transition-block">
										<img src="{{ asset('assets/img/groups/3.jpg') }}"
											data-demo-src="{{ asset('assets/img/icons/logos/nuclearjs.svg') }}" data-page-popover="3" alt="">
										<div class="page-meta">
											<span>Property 4</span>
										</div>
									</div>
									<!-- Recommended Page -->
									<div class="page-block transition-block">
										<img src="{{ asset('assets/img/groups/56.jpg') }}"
											data-demo-src="{{ asset('assets/img/icons/logos/slicer.svg') }}" data-page-popover="4" alt="">
										<div class="page-meta">
											<span>Property 6</span>
										</div>
									</div>
								</div>
							</div>

						</div>
						<!-- /Left side column -->

						<!-- Middle column -->
						<div class="column is-6">

							<!-- Publishing Area -->
							<!-- /partials/pages/feed/compose-card.html -->

							<div id="compose-card" class="card is-new-content">
								<!-- Top tabs -->
								<form id="upload_form" method="post" action="publish-post" onsubmit='show_loading();'
									enctype="multipart/form-data">
									@csrf
									<div class="tabs-wrapper">
										<div class="tabs is-boxed is-fullwidth">
											<ul>
												<li class="is-active">
													<a>
														<span class="icon is-small"><i data-feather="edit-3"></i></span>
														<span>Publish</span>
													</a>
												</li>

												<!-- Close X button -->
												<li class="close-wrap">
													<span class="close-publish">
														<i data-feather="x"></i>
													</span>
												</li>
											</ul>
										</div>

										<!-- Tab content -->
										<div class="tab-content">
											<!-- Compose form -->
											<div class="compose">
												<div class="compose-form">
													<img src="{{ asset(auth()->user()->profile_picture) }} "
														onerror="this.src='{{ URL::asset('/images/no_image.png') }}';"
														data-demo-src="{{ asset(auth()->user()->profile_picture) }}" alt="">
													<div class="control">
														<textarea id="publish" class="textarea" name="textarea" rows="3" placeholder="Write something about you..."></textarea>
													</div>
												</div>

												<div id="feed-upload" class="feed-upload">

												</div>
											</div>
											<div id="basic-options" class="compose-options">
												<!-- Upload action -->
												<div class="compose-option">
													<i data-feather="camera"></i>
													<span>Media</span>
													<input id="feed-upload-input-2" type="file" name='images' accept=".png, .jpg, .jpeg"
														onchange="readURL(this)">
												</div>
											</div>
											<!-- /General basic options -->

											<!-- Footer buttons -->
											<div class="more-wrap">
												<button id="publish-button" type="submit" class="button is-solid accent-button is-fullwidth is-disabled">
													Publish
												</button>
											</div>
										</div>
									</div>
								</form>
							</div>
							<!-- /partials/pages/feed/posts/feed-post6.html -->
							<!-- POST #6 -->

							<div class="profile-post is-simple">

								<!-- Post -->
								@foreach ($posts as $post)
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
															<img style='width:100%;' src="{{ asset($post->attachment[0]->attachment) }}"
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
																	<a href="{{ url('/profile?id=' . $like->user->id) }}">{{ $like->user->name }}</a>
																@else
																	and <a href="{{ url('/profile?id=' . $like->user->id) }}">{{ $like->user->name }}</a>
																@endif
															@endforeach
															liked this
														@else
															@foreach ($post->likes as $key => $like)
																@if ($key == 0)
																	<a href="{{ url('/profile?id=' . $like->user->id) }}">{{ $like->user->name }}</a>
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
																<img class="is-rounded" src="{{ asset($post->user->profile_picture) }}"
																	data-demo-src="{{ url($post->user->profile_picture) }}" data-user-popover="0" alt="">
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
							@endforeach
							<!-- /Post -->
						</div>
						{{-- <div class=" load-more-wrap narrow-top has-text-centered">
								<a href="#" class="load-more-button">Load More</a>
							</div> --}}
					</div>
					<div class="column is-3">

						<!-- Stories widget -->
						<!-- /partials/widgets/stories-widget.html -->
						<div class="card">
							<div class="card-heading is-bordered">
								<h4>Events</h4>
								<div class="dropdown is-spaced is-neutral is-right dropdown-trigger">
									<div>
										<div class="button">
											<i data-feather="more-vertical"></i>
										</div>
									</div>
									<div class="dropdown-menu" role="menu">
										<div class="dropdown-content">
											<a href="#" class="dropdown-item">
												<div class="media">
													<i data-feather="tv"></i>
													<div class="media-content">
														<h3>Browse Events</h3>
														<small>View all recent events.</small>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body no-padding">
								<!-- Story block -->
								<div class="story-block">
									<div class="img-wrapper">
										<img src="{{ asset('assets/img/avatars/dan.jpg') }}"
											data-demo-src="{{ asset('assets/img/avatars/dan.jpg') }}" data-user-popover="1" alt="">
									</div>
									<div class="story-meta">
										<span>Event 1</span>
										<span>1 hour ago</span>
									</div>
								</div>
								<!-- Story block -->
								<div class="story-block">
									<div class="img-wrapper">
										<img src="{{ asset('assets/img/avatars/bobby.jpg') }}"
											data-demo-src="{{ asset('assets/img/avatars/bobby.jpg') }}" data-user-popover="8" alt="">
									</div>
									<div class="story-meta">
										<span>Evente 2</span>
										<span>3 days ago</span>
									</div>
								</div>
								<!-- Story block -->
								<div class="story-block">
									<div class="img-wrapper">
										<img src="{{ asset('assets/img/avatars/elise.jpg') }}"
											data-demo-src="{{ asset('assets/img/avatars/elise.jpg') }}"data-user-popover="6" alt="">
									</div>
									<div class="story-meta">
										<span>Event 3</span>
										<span>Last week</span>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyAGLO_M5VT7BsVdjMjciKoH1fFJWWdhDPU&libraries=places"></script>
	<script>
		function show_loading() {
			$(".pageloader").toggleClass("is-active");
		}

		function publishPost(dataFile) {
			// return false;
			// var d = new FormData($('#upload_form'));
			// var files = [];
			// if(document.getElementById("feed-upload-input-2").files.length > 0)
			// {
			// 	files = new FormData();
			// 	files.append('file', $('#feed-upload-input-2')[0].files[0]);
			// }


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

		function removePost(id) {
			$(".pageloader").toggleClass("is-active");
			$('#post-' + id).remove();
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

</div>
{{-- @include('main.chat')
	@include('main.conversation')
	@include('main.explorer')
	@include('main.tour') --}}
@endsection
@section('footerjs')
@endsection
