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
                <h3 class="form-subtitle">Enter your email to reset</h3>
            </div>
                
            <!--Form-->
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-panel">
                    <div class="field">
                        <label for="email" >{{ __('Email Address') }}</label>
                        <input id="email" type="email" class="input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Enter your email address" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback has-text-danger" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="field">
                        <div class="buttons mt-2">
                            <button type="submit"  style="padding: 0px" class="button is-solid primary-button is-fullwidth raised">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>
                </div>
                
            </form>
        </div>
        <div class="column is-6 image-column">
            <!--Illustration-->
            <img class="light-image" src="{{ asset('assets/img/login-img/reset-img.jpeg') }}" alt="">
            <img class="dark-image" src="{{ asset('assets/img/login-img/reset-img.jpeg') }}" alt="">
        </div>
    </div>
</div>
@endsection
