@extends('layouts.login_layout')

@section('content')
	<div class="container">
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
					<form method="POST" action="{{ route('login') }}" class="login-form">
						@csrf
                        @if(session()->has('status'))
                            <div class="notification is-success">
                                <button class="delete"></button>
                                {{ session()->get('status') }}
                            </div>
                        @endif
						<div class="form-panel">
                        
							<div class="field">
								<label for="email">{{ __('Email Address') }}</label>
								<input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
									name="email" value="{{ old('email') }}" required autofocus>

								@if ($errors->has('email'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
							<div class="field">
								<label for="password">{{ __('Password') }}</label>
								<input id="password" type="password"
									class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

								@if ($errors->has('password'))
									<span class="invalid-feedback" role="alert">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
							</div>
							<div class="field is-flex">
								<div class="switch-block">
									<label class="f-switch">
										<input type="checkbox" name="remember" id="remember" class="is-switch"
											{{ old('remember') ? 'checked' : '' }}>
										<i></i>
									</label>
									<div class="meta">
										<p>{{ __('Remember Me') }}</p>
									</div>
								</div>
								@if (Route::has('password.request'))
									<a href="{{ route('password.request') }}">
										{{ __('Forgot Password?') }}
									</a>
								@endif
							</div>
						</div>
						<div class="buttons">
							<button type="submit" style="padding: 0px" class="button is-solid primary-button is-fullwidth raised"
								id="loginbtn">
								{{ __('Login') }}
							</button>
						</div>

						<div class="account-link has-text-centered" style="margin-bottom: 40px">
							<a href="{{ url('signup') }}">Don't have an account? Sign Up</a>
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
@endsection
<script>
document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    const $notification = $delete.parentNode;

    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });
});
</script>
