@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Collapsed menu - Layouts')

@section('content')


<!-- Layout Demo -->
<div class="layout-demo-wrapper">
  <div class="layout-demo-placeholder">
    <img src="{{asset('assets/img/layouts/layout-collapsed-menu-'.$configData['style'].'.png')}}" class="img-fluid" alt="Layout collapsed menu" data-app-light-img="layouts/layout-collapsed-menu-light.png" data-app-dark-img="layouts/layout-collapsed-menu-dark.png">
  </div>
  <div class="layout-demo-info">
    <h4>Layout collapsed menu</h4>
    <div class="alert alert-primary mt-4" role="alert">
      <strong>Important:</strong> If you have enabled localStorage then the menu (navigation) will be synced with localStorage value.
    </div>
  </div>
</div>
<!--/ Layout Demo -->

@endsection
