@extends('layouts.log_layout')

@section('content')
	<div class="container">
		<!--Container-->
		<div class="login-container">
			<div class="columns is-vcentered">
				<div class="column is-6 image-column">
					<!--Illustration-->
					<img class="light-image login-image" src="{{ asset('assets/img/login-img/login.png') }}" alt="">
					<img class="dark-image login-image" src="{{ asset('assets/img/login-img/login.png') }}" alt="">
				</div>
				<div class="column is-6">

					<h2 class="form-title">Welcome Back</h2>
					<h3 class="form-subtitle">Enter your credentials to sign in.</h3>

					<!--Form-->

					<div class="login-form">
						<form method="POST" action="{{ route('login') }}" class="login-form">
							@csrf
							@if (session()->has('status'))
								<div class="notification is-success">
									<button class="delete"></button>
									{{ session()->get('status') }}
								</div>
							@endif
							<div class="form-panel">
								<div class="field">
									<label>Email</label>
									<div class="control">
										<input id="email" type="email" placeholder="Enter your email"
											class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
											value="{{ old('email') }}" required autofocus>

										@if ($errors->has('email'))
											<span class="has-text-danger" role="alert">
												<b>{{ $errors->first('email') }}</b>
											</span>
										@endif
									</div>
								</div>
								<div class="field">
									<label>Password</label>
									<div class="control">
										<input id="password" type="password" placeholder="Enter your password"
											class="input {{ $errors->has('password') ? ' is-danger' : '' }}" name="password" required>

										@if ($errors->has('password'))
											<span class="has-text-danger" role="alert">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="field is-flex">
									<div class="switch-block">
										{{-- <label class="f-switch">
											<input type="checkbox" class="is-switch">
											<i></i>
										</label>
										<div class="meta">
											<p>Remember me?</p>
										</div> --}}
									</div>
									<a href="{{ route('password.request') }}">Forgot Password?</a>
								</div>
							</div>

							<div class="buttons mt-3">
								<button type="submit" style="padding: 0px" class="button is-success is-fullwidth raised">
									{{ __('Login') }}
								</button>
							</div>
						</form>


						<div class="account-link has-text-centered">

							<a href="#req-account-modal" class="modal-trigger" data-modal="req-account-modal">Don't have an account? Request
								an Account</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="req-account-modal" class="modal change-profile-pic-modal is-small has-light-bg">
			<div class="modal-background"></div>
			<div class="modal-content">

				<div class="card">
					<div class="card-heading">
						<h3>Request Account</h3>
						<!-- Close X button -->
						<div class="close-wrap">
							<span class="close-modal">
								<i data-feather="x"></i>
							</span>
						</div>
					</div>
					<div class="card-body">
						<!-- Placeholder -->
						<div class="selection-placeholder">
							@if ($errors->has('user_email'))
								@foreach ($errors->all() as $error)
									<div class="notification is-danger is-light">
										{{ $error }}
									</div>
								@endforeach
							@endif
							<form method="POST" action="requestAccount" class="">
								{{ csrf_field() }}
								<div class="field">
									<label class="label">Name</label>
									<div class="control">
										<input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text"
											placeholder="Enter your name" name="name" value="{{ old('name') }}" required>
									</div>
								</div>
								<div class="field">
									<label class="label">Email</label>
									<div class="control">
										<input class="input {{ $errors->has('user_email') ? ' is-danger' : '' }}" type="email"
											placeholder="e.g. nodata@gmail.com" name="user_email" value="{{ old('user_email') }}" required>
									</div>
								</div>
								<div class="field">
									<label class="label">Message</label>
									<div class="control">
										<textarea class="textarea" placeholder="Enter message..." name="message" required></textarea>
									</div>
								</div>
						</div>
					</div>
					<div class="card-footer">
						<button type="submit" class="button is-solid is-success ">Send Request</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	@if ($errors->has('user_email'))
		<script type="text/javascript">
			document.getElementById("req-account-modal").classList.add("is-active");
		</script>
	@endif
@endsection
@section('loginScript')
	<script>
		function send() {
			Swal.fire({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
				if (result.isConfirmed) {
					Swal.fire(
						'Deleted!',
						'Your file has been deleted.',
						'success'
					)
				}
			})
		}
	</script>
@endsection
