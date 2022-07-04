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
					<form method="POST" action="{{ route('register') }}" class="login-form">
						@csrf
						<div class="form-panel">
							<div class="field">
                                <label for="members_code">Members Code</label>
                                <div class="control">
                                    <input type="text" class="input form-control{{ $errors->has('members_code') ? ' is-invalid' : '' }}" " id="members_code" name="members_code" value="{{ old('members_code') }}" placeholder="Enter your members code" required autofocus>
                                    
                                    @if ($errors->has('members_code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('members_code') }}</strong>
                                    </span>
                                    @endif
                                </div>
								
							</div>
							<div class="field">
								<label for="first_name">First Name</label>
                                <div class="control">
                                    <input type="text" id="first_name" class="input form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                        value="{{ old('first_name') }}" name="first_name" placeholder="Enter your first name" required>

                                    @if ($errors->has('first_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
								
							</div>
                            <div class="field">
								<label for="last_name">Last Name</label>
                                <div class="control">
                                    <input type="text" id="last_name" class="input form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" placeholder="Enter your last name" required>

                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
								
							</div>
                            <div class="field">
								<label for="email">Email</label>
                                <div class="control">
                                    <input type="email" id="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
							</div>
                            <div class="field">
                                <label>Phone Number</label>
                                <div class="control">
                                    <input type="text" class="input form-control{{ $errors->has('phone_number') ? ' is-invalid' : '' }}"" id="phone_number" name="phone_number" value="{{ old('phone_number') }}" required placeholder="Enter your phone number">

                                    @if ($errors->has('phone_number'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <div class="form-panel">
                                    <div class="photo-upload">
                                        <div class="preview">
                                            <a class="upload-button">
                                                <i data-feather="plus"></i>
                                            </a>
                                            <img id="upload-preview" src="https://via.placeholder.com/150x150" name="profile_picture" required
                                                data-demo-src="{{ asset('assets/img/avatars/avatar-w.png') }}" alt="">
                                            <form id="profile-pic-dz" class="dropzone is-hidden" action="/"></form>
                                        </div>
                                        <div class="limitation">
                                            <small>Only images with a size lower than 3MB are allowed.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label>Password</label>
                                <div class="control">
                                    <input type="password" id="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            name="password" required placeholder="Choose a password">
                                </div>
                            </div>
                             <div class="field">
                                <label>Repeat Password</label>
                                <div class="control">
                                    <input id="password-confirm" type="password" class="input form-control" name="password_confirmation" required
                                        placeholder="Repeat your password">
                                </div>
                            </div>
							{{-- <div class="field is-flex">
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
							</div> --}}
						</div>
						<div class="buttons">
							<button type="submit" style="padding: 0px" class="button is-solid primary-button is-fullwidth raised">
								{{ __('Register') }}
							</button>
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