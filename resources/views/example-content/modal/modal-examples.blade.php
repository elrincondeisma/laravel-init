@php
  $pricingModal = true;
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Modals - UI elements')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset("assets/vendor/libs/cleavejs/cleave-phone.js")}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/modal-add-new-cc.js')}}"></script>
<script src="{{asset('assets/js/modal-add-new-address.js')}}"></script>
<script src="{{asset('assets/js/modal-edit-user.js')}}"></script>
<script src="{{asset('assets/js/modal-enable-otp.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">Modal Examples</h4>

<div class="row mb-4">
  <!--  Pricing -->
  <div class="col-12 col-sm-6 col-lg-4 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <i class='mb-3 bx bx-md bx-bar-chart-alt-2'></i>
        <h5>Pricing</h5>
        <p> Elegant pricing options modal popup example, easy to use in any page.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pricingModal"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Pricing -->

  <!--  Add New Credit Card -->
  <div class="col-12 col-sm-6 col-lg-4 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <i class='mb-3 bx bx-md bx-credit-card'></i>
        <h5>Add New Credit Card</h5>
        <p> Quickly collect the credit card details, built in input mask and form validation support.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewCCModal"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Add New Credit Card -->

  <!--  Add New Address -->
  <div class="col-12 col-sm-6 col-lg-4 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <i class='mb-3 bx bx-md bx-buildings'></i>
        <h5>Add New Address</h5>
        <p> Ready to use form to collect user address data with validation and custom input support.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewAddress"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Add New Address -->

  <!--  Refer & Earn -->
  <div class="col-12 col-sm-6 col-lg-4 mb-lg-0 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <i class='mb-3 bx bx-md bx-gift'></i>
        <h5>Refer & Earn</h5>
        <p>Use Refer & Earn modal to encourage your exiting customers refer their friends & colleague.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#referAndEarn"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Refer & Earn -->

  <!--  Edit User -->
  <div class="col-12 col-sm-6 col-lg-4 mb-md-0 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <i class='mb-3 bx bx-md bx-user'></i>
        <h5>Edit User</h5>
        <p>Easily update the user data on the go, built in form validation and custom controls.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editUser"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Edit User -->

  <!--  Enable OTP -->
  <div class="col-12 col-sm-6 col-lg-4">
    <div class="card">
      <div class="card-body text-center">
        <i class='mb-3 bx bx-md bx-mobile-alt'></i>
        <h5>Enable OTP</h5>
        <p>Use this modal to enhance your application security by enabling authentication with OTP.</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#enableOTP"> Show </button>
      </div>
    </div>
  </div>
  <!--/  Enable OTP -->
</div>

<!-- All Modals -->
@include('_partials/_modals/modal-add-new-cc')
@include('_partials/_modals/modal-add-new-address')
@include('_partials/_modals/modal-refer-earn')
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-enable-otp')
@endsection
