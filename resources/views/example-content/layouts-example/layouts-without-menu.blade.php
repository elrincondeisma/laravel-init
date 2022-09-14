@php
$configData = Helper::appClasses();
$isMenu = false;
$navbarHideToggle = false;
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Without menu - Layouts')

@section('content')

<!-- Layout Demo -->
<div class="layout-demo-wrapper">
  <div class="layout-demo-placeholder">
    @if ($configData['layout'] === 'horizontal')
    <img src="{{asset('assets/img/layouts/layout-horizontal-without-menu-'.$configData['style'].'.png')}}" class="img-fluid" alt="Layout without menu" data-app-light-img="layouts/layout-horizontal-without-menu-light.png" data-app-dark-img="layouts/layout-horizontal-without-menu-dark.png">
    @else
    <img src="{{asset('assets/img/layouts/layout-without-menu-'.$configData['style'].'.png')}}" class="img-fluid" alt="Layout without menu" data-app-light-img="layouts/layout-without-menu-light.png" data-app-dark-img="layouts/layout-without-menu-dark.png">
    @endif
  </div>
  <div class="layout-demo-info">
    <h4>Layout without Menu (Navigation)</h4>
    <button class="btn btn-primary" type="button" onclick="history.back()">Go Back</button>
  </div>
</div>
<!--/ Layout Demo -->

@endsection
