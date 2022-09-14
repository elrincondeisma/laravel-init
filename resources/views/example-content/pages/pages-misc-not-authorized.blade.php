@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Not Authorized - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-misc.css')}}">
@endsection


@section('content')
<!-- Not Authorized -->
<div class="container-xxl container-p-y">
  <div class="misc-wrapper">
    <h1 class="mb-2 mx-2">You are not authorized!</h1>
    <p class="mb-4 mx-2">You don’t have permission to access this page. Go Home!!</p>
    <a href="{{url('/')}}" class="btn btn-primary">Back to home</a>
    <div class="mt-5">
      <img src="{{asset('assets/img/illustrations/girl-hacking-site-'.$configData['style'].'.png')}}" alt="page-misc-error-light" width="450" class="img-fluid" data-app-light-img="illustrations/girl-hacking-site-light.png" data-app-dark-img="illustrations/girl-hacking-site-dark.png">
    </div>
  </div>
</div>
<!-- /Not Authorized -->
@endsection
