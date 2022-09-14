@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Verify Email Cover - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
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
        <div class="app-brand mb-4">
          <a href="{{url('/')}}" class="app-brand-link gap-2 mb-2">
            <span class="app-brand-logo demo">
              @include('_partials.macros')
            </span>
            <span class="app-brand-text demo h3 mb-0 fw-bold">{{ config('variables.templateName') }}</span>
          </a>
        </div>
        <h4 class="mb-2">Verify your email ✉️</h4>
        <p class="text-start">
          Account activation link sent to your email address: hello@example.com Please follow the link inside to continue.
        </p>
        <a class="btn btn-primary w-100 my-3" href="{{url('/')}}">
          Skip for now
        </a>
        <p class="text-center">Didn't get the mail?
          <a href="javascript:void(0);">
            Resend
          </a>
        </p>
      </div>
    </div>
    <!-- / Verify email -->
  </div>
</div>
@endsection
