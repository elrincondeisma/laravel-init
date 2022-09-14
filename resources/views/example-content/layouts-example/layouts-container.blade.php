@php
$configData = Helper::appClasses();
$container = 'container-xxl';
$containerNav = 'container-xxl';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Container - Layouts')

@section('content')
<!-- Layout Demo -->
<div class="layout-demo-wrapper">
  <div class="layout-demo-placeholder">
    @if ($configData['layout'] === 'horizontal')
    <img src="{{asset('assets/img/layouts/layout-horizontal-container-'.$configData['style'].'.png')}}" class="img-fluid" alt="Layout container" data-app-light-img="layouts/layout-horizontal-container-light.png" data-app-dark-img="layouts/layout-horizontal-container-dark.png">
    @else
    <img src="{{asset('assets/img/layouts/layout-container-'.$configData['style'].'.png')}}" class="img-fluid" alt="Layout container" data-app-light-img="layouts/layout-container-light.png" data-app-dark-img="layouts/layout-container-dark.png">
    @endif
  </div>
  <div class="layout-demo-info">
    <h4>Layout container</h4>
    <p>Container layout sets a <code>max-width</code> at each responsive breakpoint.</p>
  </div>
</div>
<!--/ Layout Demo -->


@endsection
