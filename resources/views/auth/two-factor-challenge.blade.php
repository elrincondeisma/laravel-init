@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', '2 Factor Challenge')

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
        <img src="{{asset('assets/img/pages/two-step-verification-'.$configData['style'].'.png')}}" alt="Auth Cover Bg color" width="520" class="img-fluid authentication-cover-img" data-app-light-img="pages/two-step-verification-light.png" data-app-dark-img="pages/two-step-verification-dark.png">
        <div class="mx-auto">
          <h3>Stronger security for your Account 👩🏻‍💻</h3>
          <p>
            An extra layer of security. Most people only have one layer – their <br> password – to protect their account. With 2-Step Verification,
          </p>
        </div>
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Two Steps Verification -->
    <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-4 p-sm-5">
      <div class="w-px-400 mx-auto">
        <!-- Logo -->
        <div class="app-brand justify-content-center mb-5">
          <a href="{{url('/')}}" class="app-brand-link gap-2 mb-2">
            <span class="app-brand-logo demo">@include('_partials.macros')</span>
            <span class="app-brand-text demo h3 mb-0 fw-bold">{{ config('variables.templateName') }}</span>
          </a>
        </div>
        <!-- /Logo -->
        <h4 class="mb-3">Two Step Verification 💬</h4>
        <div x-data="{ recovery: false }">
          <div class="mb-3" x-show="! recovery">
            Please confirm access to your account by entering the authentication code provided by your authenticator application.
          </div>

          <div class="mb-3" x-show="recovery">
            Please confirm access to your account by entering one of your emergency recovery codes.
          </div>

          <x-jet-validation-errors class="mb-1" />

          <form method="POST" action="{{ route('two-factor.login') }}">
            @csrf

            <div class="mb-3" x-show="! recovery">
              <x-jet-label class="form-label" value="{{ __('Code') }}" />
              <x-jet-input class="{{ $errors->has('code') ? 'is-invalid' : '' }}" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
              <x-jet-input-error for="code"></x-jet-input-error>
            </div>

            <div class="mb-3" x-show="recovery">
              <x-jet-label class="form-label" value="{{ __('Recovery Code') }}" />
              <x-jet-input class="{{ $errors->has('recovery_code') ? 'is-invalid' : '' }}" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
              <x-jet-input-error for="recovery_code"></x-jet-input-error>
            </div>

            <div class="d-flex justify-content-end mt-2">
              <button type="button" class="btn btn-outline-secondary me-1" x-show="! recovery" x-on:click="recovery = true; $nextTick(() => { $refs.recovery_code.focus()})">Use a recovery code
              </button>

              <button type="button" class="btn btn-outline-secondary me-1" x-show="recovery" x-on:click=" recovery = false; $nextTick(() => { $refs.code.focus() })">
                Use an authentication code
              </button>

              <x-jet-button>
                Log in
              </x-jet-button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- / Two Steps Verification -->
  </div>
</div>
@endsection