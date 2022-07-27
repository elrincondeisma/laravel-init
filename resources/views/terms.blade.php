@extends('layouts/blankLayout')

@section('title', 'Login')

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="authentication-wrapper authentication-basic px-4">
  <div class="authentication-inner py-4">
    <!-- Logo -->
    <div class="app-brand justify-content-center mb-5">
      <a href="index.html" class="app-brand-link gap-2">
        <span class="app-brand-logo demo bg-primary">@include('_partials.macros',["height"=>20,"withbg"=>'fill: #fff;'])</span>
        <span class="app-brand-text demo text-body fw-bold">{{config('variables.templateName')}}</span>
      </a>
    </div>
    <!-- /Logo -->
    <div class="card">
      <div class="card-body">
       {!! $terms !!}
      </div>
    </div>
  </div>
</div>
@endsection
