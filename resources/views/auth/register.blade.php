@extends('layouts.register_layout')

@section('content')
	<div class="container">
    @include('messages.errorMessage')
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" novalidate>
        @csrf
		<div class="outer-panel">
			<div class="outer-panel-inner">
				<div class="process-title mt-6">
					<h2 id="step-title-1" class="step-title is-active">Enter your member code.</h2>
					<h2 id="step-title-2" class="step-title">What should we call you?</h2>
					<h2 id="step-title-3" class="step-title">Upload your profile picture.</h2>
					<h2 id="step-title-4" class="step-title">Secure your account.</h2>
					<h2 id="step-title-5" class="step-title">You're all set. Welcome to the neighborhood!</h2>
				</div>
                    <div id="signup-panel-1" class="process-panel-wrap is-active is-narrow">
                        <div class="account-code">
                            <p class="has-text-centered">This code should be provided to you by the administrator.</p>
                            <div class="field mt-4">
                                <div class="control">
                                    <input type="text" class="input form-control{{ $errors->has('members_code') ? ' is-invalid' : '' }}" " id="members_code" name="members_code" value="{{ old('members_code') }}" placeholder="Enter your members code" required autofocus>
                                    
                                    @if ($errors->has('members_code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('members_code') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <a class="button is-fullwidth process-button" data-step="step-dot-2">
                                Continue
                            </a>
                        </div>
                    </div>

                    <div id="signup-panel-2" class="process-panel-wrap is-narrow">
                        <div class="form-panel">
                            <div class="field">
                                <label>First Name</label>
                                <div class="control">
                                    <input type="text" id="first_name" class="input form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                        value="{{ old('first_name') }}" name="first_name" placeholder="Enter your first name" required>

                                    @if ($errors->has('first_name'))
                                        <span class="invalid-feedback has-text-dangers" role="alert">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <label>Last Name</label>
                                <div class="control">
                                    <input type="text" id="last_name" class="input form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" placeholder="Enter your last name" required>

                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback has-text-dangers" role="alert">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="field">
                                <label>Email</label>
                                <div class="control">
                                    <input type="email" id="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback has-text-dangers" role="alert">
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
                                        <span class="invalid-feedback has-text-dangers" role="alert">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="buttons">
                            <a class="button process-button" data-step="step-dot-1">Back</a>
                            <a class="button process-button is-next" data-step="step-dot-3">Next</a>
                        </div>
                    </div>

                    <div id="signup-panel-3" class="process-panel-wrap is-narrow">
                        <div class="field">
                            <label>Profile Picture</label>
                            <div class="control">
                                 <input type="file" class="" id="profile_picture" name="profile_picture">
                                <br>
                                @if ($errors->has('profile_picture'))
                                    <span class="invalid-feedback has-text-dangers" role="alert">
                                        <strong>{{ $errors->first('profile_picture') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         {{--<div class="form-panel">
                            <div class="photo-upload">
                                <div class="preview">
                                    <a class="upload-button">
                                        <i data-feather="plus"></i>
                                    </a>
                                    <img id="upload-preview" src="https://via.placeholder.com/150x150"
                                        data-demo-src="{{ asset('assets/img/avatars/avatar-w.png') }}" alt="">
                                    <form id="profile-pic-dz" class="dropzone is-hidden" action="/"></form>
                                </div>
                                <div class="limitation">
                                    <small>Only images with a size lower than 3MB are allowed.</small>
                                </div>
                            </div> 
                           
                        </div>--}}

                        <div class="buttons">
                            <a class="button process-button" data-step="step-dot-2">Back</a>
                            <a class="button process-button is-next" data-step="step-dot-4">Next</a>
                        </div>
                    </div>

                    <div id="signup-panel-4" class="process-panel-wrap is-narrow">
                        <div class="form-panel">
                            <div class="field">
                                <label>Password</label>
                                <div class="control">
                                    <input type="password" id="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" value="{{ old('password') }}" name="password" required placeholder="Choose a password">

                                     @if ($errors->has('password'))
                                        <span class="invalid-feedback has-text-dangers" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="field">
                                <label>Repeat Password</label>
                                <div class="control">
                                    <input id="password_confirmation" type="password" class="input form-control" name="password_confirmation"  value="{{ old('password_confirmation') }}""
                                        placeholder="Repeat your password">
                                </div>
                            </div>
                            
                        </div>

                        <div class="buttons">
                            <a class="button process-button" data-step="step-dot-2">Back</a>
                            <a class="button process-button is-next" data-step="step-dot-5">Next</a>
                        </div>
                    </div>

                    <div id="signup-panel-5" class="process-panel-wrap is-narrow">
                        <div class="form-panel">
                            <img class="success-image" src="{{ asset('assets/img/illustrations/signup/mailbox.svg') }}" alt="">
                            <div class="success-text">
                                <!-- <h3>Congratz, you successfully created your account.</h3>
                                    <p> We just sent you a confirmation email. PLease confirm your account within 24 hours.</p> -->
                                {{-- <a id="signup-finish" class="button is-fullwidth">Let Me In</a> --}}
                                <button type="submit" class="button is-fullwidth">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
	</div>


    <!--Edit Credit card Modal-->
    <div id="crop-modal" class="modal is-small crop-modal is-animated">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="modal-card">
                <header class="modal-card-head">
                    <h3>Crop your picture</h3>
                    <div class="close-wrap">
                        <button class="close-modal" aria-label="close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                </header>
                <div class="modal-card-body">
                    <div id="cropper-wrapper" class="cropper-wrapper">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
