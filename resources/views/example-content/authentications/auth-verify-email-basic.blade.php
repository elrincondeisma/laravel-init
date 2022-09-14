@php
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Verify Email Basic - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('content')
<div class="authentication-wrapper authentication-basic px-4">
  <div class="authentication-inner py-4">

    <!-- Verify Email -->
    <div class="card">
      <div class="card-body">
        <!-- Logo -->
        <div class="app-brand justify-content-center">
          <a href="{{url('/')}}" class="app-brand-link gap-2">
            <span class="app-brand-logo demo">
              @include('_partials.macros')
            </span>
            <span class="app-brand-text demo h3 mb-0 fw-bold">{{ config('variables.templateName') }}</span>
          </a>
        </div>
        <!-- /Logo -->
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
    <!-- /Verify Email -->
  </div>
</div>
@endsection
