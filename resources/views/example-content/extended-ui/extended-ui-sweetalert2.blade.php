@extends('layouts/layoutMaster')

@section('title', 'SweetAlert2 - Extended UI')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/extended-ui-sweetalert2.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Extended UI /</span> SweetAlert2
</h4>

<div class="row">
  <!-- Basic example section -->
  <div class="col-12 mb-4">
    <div class="card">
      <h5 class="card-header">Basic Examples</h5>
      <div class="card-body">
        <span>
          SweetAlert automatically centers itself on the page and looks great
          no matter if you're using a desktop computer, mobile or tablet. It's
          even highly customizable, as you can see below!
        </span>
        <div class="demo-inline-spacing">
          <button type="button" class="btn btn-primary" id="basic-alert">
            Basic
          </button>
          <button type="button" class="btn btn-primary" id="with-title">
            With Title
          </button>
          <button type="button" class="btn btn-primary" id="footer-alert">
            With Footer
          </button>
          <button type="button" class="btn btn-primary" id="html-alert">
            HTML
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Basic example section -->

  <!-- Sweet alert Positions -->
  <div class="col-12 mb-4">
    <div class="card">
      <h5 class="card-header">Position</h5>
      <div class="card-body">
        <span>
          You can specify position of your alert with
          <code>{position : top-start | top-end | bottom-start | bottom-end
              }</code>
          in js
        </span>
        <div class="demo-inline-spacing">

          <button class="btn btn-primary" id="position-top-start">
            Top Start
          </button>
          <button class="btn btn-primary" id="position-top-end">
            Top End
          </button>
          <button class="btn btn-primary" id="position-bottom-start">
            Bottom Starts
          </button>
          <button class="btn btn-primary" id="position-bottom-end">
            Bottom End
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Sweet alert Positions -->

  <!-- SweetAlert Animations -->
  <div class="col-12 mb-4">
    <div class="card">
      <h5 class="card-header">Animations</h5>
      <div class="card-body">
        <span>
          Use <code>popup</code> inside <code>showClass</code> parameter to add animation to alert
        </span>
        <div class="demo-inline-spacing">

          <button class="btn btn-primary" id="bounce-in-animation">
            Bounce In
          </button>
          <button class="btn btn-primary" id="fade-in-animation">
            Fade In
          </button>
          <button class="btn btn-primary" id="flip-x-animation">
            Flip In
          </button>
          <button class="btn btn-primary" id="tada-animation">
            Tada
          </button>
          <button class="btn btn-primary" id="shake-animation">
            Shake
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- /SweetAlert Animations -->

  <!-- Types section -->
  <div class="col-12 mb-4">
    <div class="card">
      <h5 class="card-header">Types</h5>
      <div class="card-body">
        <span>
          Use <code>icon</code> parameter to create a alert with type.
        </span>
        <div class="demo-inline-spacing">

          <button type="button" class="btn btn-success" id="type-success">
            Success
          </button>
          <button type="button" class="btn btn-info" id="type-info">
            Info
          </button>
          <button type="button" class="btn btn-warning" id="type-warning">
            Warning
          </button>
          <button type="button" class="btn btn-danger" id="type-error">
            Error
          </button>
          <button type="button" class="btn btn-secondary" id="type-question">
            Question
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Types section -->

  <!-- Options section -->
  <div class="col-12 mb-4">
    <div class="card">
      <h5 class="card-header">Options</h5>
      <div class="card-body">
        <div class="demo-inline-spacing">

          <button type="button" class="btn btn-primary" id="custom-image">
            Custom Image
          </button>
          <button type="button" class="btn btn-primary" id="auto-close">
            Auto Close
          </button>
          <button type="button" class="btn btn-primary" id="outside-click">
            Click Outside
          </button>
          <button type="button" class="btn btn-primary" id="progress-steps">
            Progress Steps
          </button>
          <button type="button" class="btn btn-primary" id="ajax-request">
            Ajax
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Options section -->

  <!-- Confirm option section -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Confirm Options</h5>
      <div class="card-body">
        <div class="row g-2">
          <div class="col-md-6 col-sm-12">
            <p>Confirm Button Action</p>
            <button type="button" class="btn btn-primary" id="confirm-text">
              Alert
            </button>
          </div>
          <div class="col-md-6 col-sm-12">
            <p>Confirm & Cancel Button Action</p>
            <button type="button" class="btn btn-primary" id="confirm-color">
              Alert
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Confirm option section -->
</div>
@endsection
