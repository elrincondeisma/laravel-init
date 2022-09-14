@php
$configData = Helper::appClasses();
$isNavbar = false;
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Without navbar - Layouts')

@section('content')

<!-- Layout Demo -->
<div class="layout-demo-wrapper">
  <div class="layout-demo-placeholder">
    <img src="{{asset('assets/img/layouts/layout-without-navbar-'.$configData['style'].'.png')}}" class="img-fluid" alt="Layout without navbar" data-app-light-img="layouts/layout-without-navbar-light.png" data-app-dark-img="layouts/layout-without-navbar-dark.png">
  </div>
  <div class="layout-demo-info">
    <h4>Layout without Navbar</h4>
    <p>Layout does not contain Navbar component.</p>
  </div>
</div>
<!--/ Layout Demo -->

@endsection
