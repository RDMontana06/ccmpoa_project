@extends('layouts.main')

@section('content')
	<div class="view-wrapper">
		@if (auth()->user()->created_at == auth()->user()->updated_at)
			{
			<button type="button" id="btnClick" onclick="alertDetails()" hidden></button>
			}
		@endif

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
						<div class="column is-3 -mobile">
							<!-- Weather widget -->
							<!-- /partials/widgets/weather-widget.html -->
							<div class="card has-background-image is-bottom"
								data-background="{{ asset('assets/img/illustrations/characters/friends2.svg') }}" id="profile-card">
								<div class="pc-first">

									<img src="{{ asset(auth()->user()->profile_picture) }}"
										onerror="this.src='{{ URL::asset('/images/no_image.png') }}';" alt="">
									<div class="pc-first-text">
										<h3 id="userName">{{ auth()->user()->name }}</h3>
										{{-- <p>Owner</p> --}}

									</div>
								</div>
								<div class="pc-second" style="background-color:rgba(59,167,103,0.9);">
									<h4>Following</h4>
									<h5 id="following">0</h5>
								</div>
								<div class="pc-third" style="background-color:rgba(59,167,103,0.9);">
									<h4>Followers</h4>
									<h5 id="followers">0</h5>
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


												<img src="{{ asset(auth()->user()->profile_picture) }}"
													onerror="this.src='{{ URL::asset('assets/img/avatar/no-user-image.png') }}';"
													data-demo-src="{{ asset(auth()->user()->profile_picture) }}" alt="">

												<div class="control">
													<textarea id="publish" class="textarea" rows="3" placeholder="Write something about you..."></textarea>
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
												<input id="feed-upload-input-2" type="file" accept=".png, .jpg, .jpeg" onchange="readURL(this)"
													required>
											</div>
										</div>
										<!-- /General basic options -->

										<!-- Footer buttons -->
										<div class="more-wrap">
											<button id="publish-button" onclick='publishPost();' type="button"
												class="button is-solid accent-button is-fullwidth is-disabled">
												Publish
											</button>
										</div>
									</div>
								</div>
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
														<a href="#">{!! nl2br($post->user->name) !!}</a>
														<span class="time">{{ date('M d, Y h:i a', strtotime($post->created_at)) }}</span>
													</div>
												</div>

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
											</div>
											<!-- /Header -->

											<!-- Post body -->
											<div class="card-body">
												<!-- Post body text -->
												<div class="post-text">
													<p>{!! nl2br($post->content) !!}
													<p>
												</div>
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
																<a href="#">{{ $like->user->first_name }}</a>
															@endforeach
															liked this
														@elseif($post->likes->count() == 2)
															@foreach ($post->likes as $key => $like)
																@if ($key == 0)
																	<a href="#">{{ $like->user->first_name }}</a>
																@else
																	and <a href="#">{{ $like->user->first_name }}</a>
																@endif
															@endforeach
															liked this
														@else
															@foreach ($post->likes as $key => $like)
																@if ($key == 0)
																	<a href="#">{{ $like->user->first_name }}</a>
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
																<textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>
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
		function publishPost() {
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
						data: publish
					},
					headers: {
						'X-CSRF-TOKEN': '{{ csrf_token() }}'
					},
					success: function(data) {
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

			var latest_count = document.getElementById("comment-count-" + postId).innerText;
			latest_count = parseInt(latest_count) + 1;
			$('.comment-counts-' + postId).text(latest_count);
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
	</script>
</div>
{{-- @include('main.chat')
	@include('main.conversation')
	@include('main.explorer')
	@include('main.tour') --}}
@endsection
