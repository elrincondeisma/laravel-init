@extends('layouts/layoutMaster')

@section('title', 'Toasts - UI elements')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/toastr/toastr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/toastr/toastr.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/ui-toasts.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">UI elements /</span> Toasts</h4>

<!-- Toast with Animation -->
<div class="bs-toast toast toast-ex animate__animated my-2" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2000">
  <div class="toast-header">
    <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
    <div class="me-auto fw-semibold">Bootstrap</div>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
<!--/ Toast with Animation -->

<!-- Toast with Placements -->
<div class="bs-toast toast toast-placement-ex m-2" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="2000">
  <div class="toast-header">
    <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
    <div class="me-auto fw-semibold">Bootstrap</div>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
<!-- Toast with Placements -->

<!-- Bootstrap Toasts with Animation -->
<div class="card mb-4">
  <h5 class="card-header">Bootstrap Toasts Example with Animation</h5>
  <div class="card-body">
    <div class="row gx-3 gy-2 align-items-center">
      <div class="col-md-3">
        <label class="form-label" for="selectType">Type</label>
        <select id="selectType" class="form-select color-dropdown">
          <option value="bg-primary" selected>Primary</option>
          <option value="bg-secondary">Secondary</option>
          <option value="bg-success">Success</option>
          <option value="bg-danger">Danger</option>
          <option value="bg-warning">Warning</option>
          <option value="bg-info">Info</option>
          <option value="bg-dark">Dark</option>
        </select>
      </div>
      <div class="col-md-3">
        <label class="form-label" for="selectAnimation">Animation</label>
        <select id="selectAnimation" class="form-select animation-dropdown">
          <optgroup label="Attention Seekers">
            <option value="animate__fade">fade</option>
            <option value="animate__bounce">bounce</option>
            <option value="animate__flash">flash</option>
            <option value="animate__pulse">pulse</option>
            <option value="animate__rubberBand">rubberBand</option>
            <option value="animate__shakeX">shake</option>
            <option value="animate__swing">swing</option>
            <option value="animate__tada" selected>tada</option>
            <option value="animate__wobble">wobble</option>
            <option value="animate__jello">jello</option>
            <option value="animate__heartBeat">heartBeat</option>
          </optgroup>

          <optgroup label="Bouncing Entrances">
            <option value="animate__bounceIn">bounceIn</option>
            <option value="animate__bounceInDown">bounceInDown</option>
            <option value="animate__bounceInLeft">bounceInLeft</option>
            <option value="animate__bounceInRight">bounceInRight</option>
            <option value="animate__bounceInUp">bounceInUp</option>
          </optgroup>

          <optgroup label="Fading Entrances">
            <option value="animate__fadeIn">fadeIn</option>
            <option value="animate__fadeInDown">fadeInDown</option>
            <option value="animate__fadeInDownBig">fadeInDownBig</option>
            <option value="animate__fadeInLeft">fadeInLeft</option>
            <option value="animate__fadeInLeftBig">fadeInLeftBig</option>
            <option value="animate__fadeInRight">fadeInRight</option>
            <option value="animate__fadeInRightBig">fadeInRightBig</option>
            <option value="animate__fadeInUp">fadeInUp</option>
            <option value="animate__fadeInUpBig">fadeInUpBig</option>
          </optgroup>

          <optgroup label="Flippers">
            <option value="animate__flip">flip</option>
            <option value="animate__flipInX">flipInX</option>
            <option value="animate__flipInY">flipInY</option>
          </optgroup>

          <optgroup label="Lightspeed">
            <option value="animate__lightSpeedInRight">lightSpeedIn</option>
          </optgroup>

          <optgroup label="Rotating Entrances">
            <option value="animate__rotateIn">rotateIn</option>
            <option value="animate__rotateInDownLeft">rotateInDownLeft</option>
            <option value="animate__rotateInDownRight">rotateInDownRight</option>
            <option value="animate__rotateInUpLeft">rotateInUpLeft</option>
            <option value="animate__rotateInUpRight">rotateInUpRight</option>
          </optgroup>

          <optgroup label="Sliding Entrances">
            <option value="animate__slideInUp">slideInUp</option>
            <option value="animate__slideInDown">slideInDown</option>
            <option value="animate__slideInLeft">slideInLeft</option>
            <option value="animate__slideInRight">slideInRight</option>
          </optgroup>

          <optgroup label="Zoom Entrances">
            <option value="animate__zoomIn">zoomIn</option>
            <option value="animate__zoomInDown">zoomInDown</option>
            <option value="animate__zoomInLeft">zoomInLeft</option>
            <option value="animate__zoomInRight">zoomInRight</option>
            <option value="animate__zoomInUp">zoomInUp</option>
          </optgroup>

          <optgroup label="Specials">
            <option value="animate__jackInTheBox">jackInTheBox</option>
            <option value="animate__rollIn">rollIn</option>
          </optgroup>
        </select>
      </div>
      <div class="col-md-3">
        <label class="form-label" for="showToastPlacement">&nbsp;</label>
        <button id="showToastAnimation" class="btn btn-primary d-block">Show Toast</button>
      </div>
    </div>
  </div>
</div>
<!--/ Bootstrap Toasts with Animation -->

<!-- Bootstrap Toasts with Placement -->
<div class="card mb-4">
  <h5 class="card-header">Bootstrap Toasts Example With Placement</h5>
  <div class="card-body">
    <div class="row gx-3 gy-2 align-items-center">
      <div class="col-md-3">
        <label class="form-label" for="selectTypeOpt">Type</label>
        <select id="selectTypeOpt" class="form-select color-dropdown">
          <option value="bg-primary" selected>Primary</option>
          <option value="bg-secondary">Secondary</option>
          <option value="bg-success">Success</option>
          <option value="bg-danger">Danger</option>
          <option value="bg-warning">Warning</option>
          <option value="bg-info">Info</option>
          <option value="bg-dark">Dark</option>
        </select>
      </div>
      <div class="col-md-3">
        <label class="form-label" for="selectPlacement">Placement</label>
        <select class="form-select placement-dropdown" id="selectPlacement">
          <option value="top-0 start-0">Top left</option>
          <option value="top-0 start-50 translate-middle-x">Top center</option>
          <option value="top-0 end-0">Top right</option>
          <option value="top-50 start-0 translate-middle-y">Middle left</option>
          <option value="top-50 start-50 translate-middle">Middle center</option>
          <option value="top-50 end-0 translate-middle-y">Middle right</option>
          <option value="bottom-0 start-0">Bottom left</option>
          <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
          <option value="bottom-0 end-0">Bottom right</option>
        </select>
      </div>
      <div class="col-md-3">
        <label class="form-label" for="showToastPlacement">&nbsp;</label>
        <button id="showToastPlacement" class="btn btn-primary d-block">Show Toast</button>
      </div>
    </div>
  </div>
</div>
<!--/ Bootstrap Toasts with Placement -->

<!-- Bootstrap Toasts Styles -->
<div class="card mb-4">
  <h5 class="card-header">Bootstrap Toasts Styles</h5>
  <div class="row g-0">
    <div class="col-md-6 p-4">
      <div class="text-light small fw-semibold mb-3">Default</div>
      <div class="toast-container">

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-primary">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-secondary">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-success">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-danger">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-warning">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-info">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-dark">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 ui-bg-overlay-container p-4">
      <div class="ui-bg-overlay bg-dark opacity-75 rounded-end-bottom"></div>
      <div class="text-white small fw-semibold mb-3">Translucent</div>

      <div class="toast-container">
        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-primary">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-secondary">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-success">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-danger">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-warning">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-info">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>

        <div class="bs-toast toast fade show" role="alert" aria-live="assertive" aria-atomic="true">
          <div class="toast-header bg-dark">
            <img src="{{asset('assets/img/avatars/1.png')}}" class="d-block w-px-20 h-auto rounded me-2" alt="" />
            <div class="me-auto fw-semibold">Bootstrap</div>
            <small>11 mins ago</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
          </div>
          <div class="toast-body">
            Hello, world! This is a toast message.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Bootstrap Toasts Styles -->

<!-- Toastr Demo -->
<div class="card">
  <h5 class="card-header">Toastr</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-6 col-xl-3">
        <div class="mb-3">
          <label class="form-label" for="title">Title</label>
          <input id="title" type="text" class="form-control" placeholder="Enter a title ..." />
        </div>
        <div class="mb-3">
          <label class="form-label" for="message">Message</label>
          <textarea class="form-control" id="message" rows="3" placeholder="Enter a message ..." spellcheck="false"></textarea>
        </div>
        <div class="mb-3">
          <div class="form-check">
            <input id="closeButton" class="form-check-input" type="checkbox" value="checked" />
            <label class="form-check-label" for="closeButton">Close Button</label>
          </div>
          <div class="form-check">
            <input id="addBehaviorOnToastClick" class="form-check-input" type="checkbox" value="checked" />
            <label class="form-check-label" for="addBehaviorOnToastClick">Add behavior on toast click</label>
          </div>
          <div class="form-check">
            <input id="debugInfo" class="form-check-input" type="checkbox" value="checked" />
            <label class="form-check-label" for="debugInfo">Debug</label>
          </div>
          <div class="form-check">
            <input id="progressBar" class="form-check-input" type="checkbox" value="checked" />
            <label class="form-check-label" for="progressBar">Progress Bar</label>
          </div>
          <div class="form-check">
            <input id="preventDuplicates" class="form-check-input" type="checkbox" value="checked" />
            <label class="form-check-label" for="preventDuplicates">Prevent Duplicates</label>
          </div>
          <div class="form-check">
            <input id="addClear" class="form-check-input" type="checkbox" value="checked" />
            <label class="form-check-label" for="addClear">Add button to force clearing a toast, ignoring
              focus</label>
          </div>
          <div class="form-check">
            <input id="newestOnTop" class="form-check-input" type="checkbox" value="checked" />
            <label class="form-check-label" for="newestOnTop">Newest on top</label>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-3">
        <div class="mb-3" id="toastTypeGroup">
          <label class="form-label">Toast Type</label>
          <div class="form-check">
            <input type="radio" id="successRadio" name="toastsRadio" class="form-check-input" checked value="success" />
            <label class="form-check-label" for="successRadio">Success</label>
          </div>
          <div class="form-check">
            <input type="radio" id="infoRadio" name="toastsRadio" class="form-check-input" value="info" />
            <label class="form-check-label" for="infoRadio">Info</label>
          </div>
          <div class="form-check">
            <input type="radio" id="warningRadio" name="toastsRadio" class="form-check-input" value="warning" />
            <label class="form-check-label" for="warningRadio">Warning</label>
          </div>
          <div class="form-check">
            <input type="radio" id="errorRadio" name="toastsRadio" class="form-check-input" value="error" />
            <label class="form-check-label" for="errorRadio">Error</label>
          </div>
        </div>
        <div class="mb-3" id="positionGroup">
          <label class="form-label">Position</label>
          <div class="form-check">
            <input type="radio" id="topRightRadio" name="positionsRadio" class="form-check-input" value="toast-top-right" />
            <label class="form-check-label" for="topRightRadio">Top Right</label>
          </div>
          <div class="form-check">
            <input type="radio" id="bottomRightRadio" name="positionsRadio" class="form-check-input" value="toast-bottom-right" />
            <label class="form-check-label" for="bottomRightRadio">Bottom Right</label>
          </div>
          <div class="form-check">
            <input type="radio" id="bottomLeftRadio" name="positionsRadio" class="form-check-input" value="toast-bottom-left" />
            <label class="form-check-label" for="bottomLeftRadio">Bottom Left</label>
          </div>
          <div class="form-check">
            <input type="radio" id="topLeftRadio" name="positionsRadio" class="form-check-input" value="toast-top-left" />
            <label class="form-check-label" for="topLeftRadio">Top Left</label>
          </div>
          <div class="form-check">
            <input type="radio" id="topFullWidthRadio" name="positionsRadio" class="form-check-input" value="toast-top-full-width" />
            <label class="form-check-label" for="topFullWidthRadio">Top Full Width</label>
          </div>
          <div class="form-check">
            <input type="radio" id="bottomFullWidthRadio" name="positionsRadio" class="form-check-input" value="toast-bottom-full-width" />
            <label class="form-check-label" for="bottomFullWidthRadio">Bottom Full Width</label>
          </div>
          <div class="form-check">
            <input type="radio" id="topCenterRadio" name="positionsRadio" class="form-check-input" value="toast-top-center" />
            <label class="form-check-label" for="topCenterRadio">Top Center</label>
          </div>
          <div class="form-check">
            <input type="radio" id="bottomCenterRadio" name="positionsRadio" class="form-check-input" value="toast-bottom-center" />
            <label class="form-check-label" for="bottomCenterRadio">Bottom Center</label>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xl-3">
        <div class="mb-3">
          <label class="form-label" for="showEasing">Show Easing</label>
          <input id="showEasing" type="text" class="form-control" placeholder="swing, linear" value="swing" />
        </div>
        <div class="mb-3">
          <label class="form-label" for="hideEasing">Hide Easing</label>
          <input id="hideEasing" type="text" class="form-control" placeholder="swing, linear" value="linear" />
        </div>
        <div class="mb-3">
          <label class="form-label" for="showMethod">Show Method</label>
          <input id="showMethod" type="text" class="form-control" placeholder="show, fadeIn, slideDown" value="fadeIn" />
        </div>
        <div class="mb-3">
          <label class="form-label" for="hideMethod">Hide Method</label>
          <input id="hideMethod" type="text" class="form-control" placeholder="hide, fadeOut, slideUp" value="fadeOut" />
        </div>
      </div>
      <div class="col-lg-6 col-xl-3">
        <div class="mb-3 kt-form__grou">
          <label class="form-label" for="showDuration">Show Duration</label>
          <input id="showDuration" type="text" class="form-control" placeholder="ms" value="300" />
        </div>
        <div class="mb-3 kt-form__grou">
          <label class="form-label" for="hideDuration">Hide Duration</label>
          <input id="hideDuration" type="text" class="form-control" placeholder="ms" value="1000" />
        </div>
        <div class="mb-3 kt-form__grou">
          <label class="form-label" for="timeOut">Time out</label>
          <input id="timeOut" type="text" class="form-control" placeholder="ms" value="5000" />
        </div>
        <div class="mb-3 kt-form__grou">
          <label class="form-label" for="extendedTimeOut">Extended time out</label>
          <input id="extendedTimeOut" class="form-control" type="text" placeholder="ms" value="1000" />
        </div>
      </div>
    </div>
    <hr />

    <a href="javascript:;" class="btn btn-primary mb-1" id="showtoast">Show Toast</a>
    <a href="javascript:;" class="btn btn-danger mb-1" id="cleartoasts">Clear Toasts</a>
    <a href="javascript:;" class="btn btn-danger mb-1" id="clearlasttoast">Clear Last Toast</a>
  </div>
</div>
<!--/ Toastr Demo -->
@endsection
