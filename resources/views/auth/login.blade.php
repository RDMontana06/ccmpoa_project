@extends('layouts.login')

@section('content')
	<div class="signup-wrapper">

		<!--Fake navigation-->
		<div class="fake-nav">
			<a href="/" class="logo">
				<img class="light-image" src="{{ asset('assets/img/logo/logo.svg') }}" width="112" height="28" alt="">
				<img class="dark-image" src="{{ asset('assets/img/logo/logo.svg') }}" width="112" height="28" alt="">
			</a>
		</div>

		<div class="container">
			<!--Container-->
			<div class="login-container">
				<div class="columns is-vcentered">
					<div class="column is-6 first-column">

						<div class="lg-header is-hidden-mobile">
							<img src="{{ asset('assets/img/logo/logo.svg') }}" alt="">
							<div>
								<span>Cane Creek Mountain</span><br>
								<span>Property Owners</span>
							</div>
						</div>

						<h2 class="form-title">Welcome!</h2>
						<h3 class="form-subtitle">Enter your credentials to sign in.</h3>

						<!--Form-->
						<form action="" method="POST" action="{{ route('login') }}" class="login-form row" id="login_form">
							@csrf
							<div class="form-panel">
								<div class="field">
									<label>Email</label>
									<div class="control">
										<input type="text" class="input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
											value="{{ old('email') }}" placeholder="Enter your email" required autofocus>

										@if ($errors->has('email'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="field" style="margin-top: 20px">
									<label>Password</label>
									<div class="control">
										<input type="password" class="input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
											placeholder="Enter your password" required>

										@if ($errors->has('password'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
									</div>
								</div>
								<div class="field is-flex">
									<div class="switch-block">
										<label class="f-switch">
											<input type="checkbox" class="is-switch" type="checkbox" name="remember" id="remember"
												{{ old('remember') ? 'checked' : '' }}>
											<i></i>
										</label>
										<div class="meta">
											<p>Remember me?</p>
										</div>
									</div>
									@if (Route::has('password.request'))
										<a class="btn btn-link" href="{{ route('password.request') }}">
											{{ __('Forgot Your Password?') }}
										</a>
									@endif
								</div>
							</div>

							<div class="buttons">
								<!-- <a class="button is-solid primary-button is-fullwidth raised">Login</a> -->
								<input type="submit" value="Login" name="login" class="button is-solid primary-button is-fullwidth raised"
									style="padding: 0px" id="loginbtn">
							</div>

							<div class="account-link has-text-centered" style="margin-bottom: 40px">
								<a href="/signup.html">Don't have an account? Sign Up</a>
							</div>
						</form>
					</div>
					<div class="column is-6 image-column">
						<!--Illustration-->
						<img class="light-image login-image" src="{{ asset('assets/img/login-img/RightSide.jpg') }}" alt="">
						<img class="dark-image login-image" src="{{ asset('assets/img/login-img/RightSide.jpg') }}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
