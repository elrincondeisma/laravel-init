@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Coming Soon - Pages')

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-misc.css')}}">
@endsection

@section('content')
<!-- Under Maintenance -->
<div class="container-xxl py-3">
  <div class="misc-wrapper">
    <h1 class="mb-2 mx-2">We are launching soon</h1>
    <p class="mb-5 mx-2">Our website is opening soon. Please register to get notified when it's ready!</p>
    <form onsubmit="return false">
      <div class="mb-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="email" autofocus>
          <button type="submit" class="btn btn-primary">Notify</button>
        </div>
      </div>
    </form>
    <div class="mt-4">
      <img src="{{asset('assets/img/illustrations/girl-manage-task-'.$configData['style'].'.png')}}" alt="boy-with-rocket-light" width="500" class="img-fluid" data-app-light-img="illustrations/girl-manage-task-light.png" data-app-dark-img="illustrations/girl-manage-task-dark.png">
    </div>
  </div>
</div>
<!-- /Under Maintenance -->
@endsection
