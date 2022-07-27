@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Verify Email')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">

    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
      <div class="flex-row text-center mx-auto">
        <img src="{{asset('assets/img/pages/verify-email-'.$configData['style'].'.png')}}" alt="Auth Cover Bg color" width="520" class="img-fluid authentication-cover-img" data-app-light-img="pages/verify-email-light.png" data-app-dark-img="pages/verify-email-dark.png">
        <div class="mx-auto">
          <h3>Your frest starts here 👩🏻‍💻</h3>
          <p>
            Connects to the mail server and checks <br>
            whether the mailbox exists or not.
          </p>
        </div>
      </div>
    </div>
    <!-- /Left Text -->

    <!--  Verify email -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-4 p-sm-5">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand mb-4">
          <a href="{{url('/')}}" class="app-brand-link gap-2 mb-2">
            <span class="app-brand-logo demo">@include('_partials.macros')</span>
            <span class="app-brand-text demo h3 mb-0 fw-bold">{{ config('variables.templateName') }}</span>
          </a>
        </div>
        <!-- /Logo -->

        <h4 class="mb-3">Verify your email ✉️</h4>

        @if (session('status') == 'verification-link-sent')
        <div class="alert alert-success" role="alert">
          <div class="alert-body">
            A new verification link has been sent to the email address you provided during registration.
          </div>
        </div>
        @endif
        <p class="text-start">
          Account activation link sent to your email address: <strong>{{Auth::user()->email}}</strong> Please follow the link inside to continue.
        </p>
        <div class="mt-4 d-flex justify-content-between">
          <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="btn btn-label-secondary">
              click here to request another
            </button>
          </form>

          <form method="POST" action="{{route('logout')}}">
            @csrf

            <button type="submit" class="btn btn-danger">
              Log Out
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- /Verify Email -->
  </div>
</div>
@endsection