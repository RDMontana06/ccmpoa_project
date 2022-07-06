@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card verification">
                <div class="col-md-12">
                    <img class="verify-logo" src="{{ asset('assets/img/verified/verified.svg') }}" alt="verified">
                </div>

                <h1 class="align-center verify-title">{{ __('Verify Your Email Address') }}</h1>

                <div class="card-body align-center">

                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                    <p>{{ __('If you did not receive the email, please click the button below.') }}</p>
                </div>

                <div class="buttons justify-content-center">
                    <button type="submit" class="button is-solid primary-button raised" href="{{ route('verification.resend') }}">
                        {{ __('Request Another') }}
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection 
