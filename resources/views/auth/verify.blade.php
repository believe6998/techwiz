@extends('layouts.app')
<style>
    .auth-container {
        padding: 30px 0;
    }
    .card-header {
        background-color: #92C800;
        color: #ffffff;
        font-size: 18px;
    }
    .submit-btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px #92C800 solid;
        padding: .375rem .75rem;
        font-size: .9rem;
        line-height: 1.6;
        border-radius: .25rem;
        background-color: #ffffff;
        color: #92C800;
    }
    .submit-btn:hover{
        background-color: #92C800;
        color: #ffffff;
    }
</style>
@section('content')
<div class="container">
    <div class="auth-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
