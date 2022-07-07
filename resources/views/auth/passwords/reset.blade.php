@extends('layouts.header')

@section('content')
<div class="container">
    <div class="columns is-vcentered">
        <div class="column is-6 first-column">
            <div class="lg-header is-hidden-mobile logo-details">
                <img src="{{ asset('assets/img/logo/logo.svg') }}" alt="ccmpoalogo">
                <div>
                    <span>Cane Creek Mountain</span><br>
                    <span>Property Owners</span>
                </div>
            </div>

            <div>
                <h2 class="form-title">Reset Password!</h2>
                <h3 class="form-subtitle">Enter your new password to reset</h3>
            </div>
                
            <!--Form-->
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-panel">
                    <div class="field">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback has-text-danger" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="field">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback has-text-danger" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="field">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="input form-control" name="password_confirmation" required>
                    </div>

                    <div class="field">
                        <div class="buttons">
                            <button type="submit" class="button is-solid primary-button is-fullwidth raised">
                                {{ __('Reset Password') }}
                            </button>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
        <div class="column is-6 image-column">
            <!--Illustration-->
            <img class="light-image" src="{{ asset('assets/img/login-img/reset-img-2.jpeg') }}" alt="">
            <img class="dark-image" src="{{ asset('assets/img/login-img/reset-img-2.jpeg') }}" alt="">
        </div>
    </div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
