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
						<h3 class="form-subtitle">Enter your new password to reset</h3>
					</div>

					<!--Form-->
					<form method="POST" action="{{ route('password.update') }}">
						@csrf

						<input type="hidden" name="token" value="{{ $token }}">
						<div class="form-panel">
							<div class="field was-validated">
								<label for="email">{{ __('E-Mail Address') }}</label>
								<input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
									{{ $errors->has('email') ? ':invalid' : '' }} name="email" value="{{ $email ?? old('email') }}" required
									autofocus>

								@if ($errors->has('email'))
									<span class="invalid-feedback has-text-danger" role="alert">
										<b>{{ $errors->first('email') }}</b>
									</span>
								@endif
							</div>

							<div class="field was-validated">
								<label for="password">{{ __('Password') }}</label>
								<input id="password" type="password"
									class="input form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

								@if ($errors->has('password'))
									<span class="has-text-danger" role="alert">
										<b>{{ $errors->first('password') }}</b>
									</span>
								@endif
							</div>

							<div class="field was-validated">
								<label for="password-confirm">{{ __('Confirm Password') }}</label>
								<input id="password-confirm" type="password" class="input form-control" name="password_confirmation" required>
							</div>

							<div class="field">
								<div class="buttons">
									<button type="submit" class="button is-solid is-success is-fullwidth raised">
										{{ __('Reset Password') }}
									</button>
								</div>
							</div>
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>
@endsection
