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

					<div>
						<h2 class="form-title">Reset Password!</h2>
						<h3 class="form-subtitle">Enter your email to reset</h3>
					</div>

					<!--Form-->
					@if (session('status'))
						<div class="notification is-success is-light">
							{{-- <button class="delete"></button> --}}
							{{ session('status') }}
						</div>
					@endif

					<form method="POST" action="{{ route('password.email') }}">
						@csrf

						<div class="form-panel">
							<div class="field">
								<label for="email">{{ __('Email Address') }}</label>
								<input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
									placeholder="Enter your email address" name="email" value="{{ old('email') }}" required>

								@if ($errors->has('email'))
									<span class="invalid-feedback has-text-danger" role="alert">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
							<div class="field">
								<div class="buttons mt-2">
									<button type="submit" style="padding: 0px" class="button is-solid is-success  is-fullwidth raised">
										{{ __('Send Password Reset Link') }}
									</button>
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
								
								<a  href="{{ url('/login') }}" onclick='show()' >Back to Log in</a>
							</div>
							
						</div>

					</form>
					
				</div>
			</div>
		</div>
	</div>
@endsection
