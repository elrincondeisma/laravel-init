@extends('layouts/layoutMaster')

@section('title', 'Help Center Categories - Pages')

<!-- Page -->
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-help-center.css')}}" />
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Help Center /</span> Categories
</h4>

<div class="row">
  <!-- Categories -->
  <div class="col-xl-3 col-lg-4 col-md-4 mb-lg-0 mb-4">
    <h5>eCommerce</h5>
    <div class="nav-align-left">
      <ul class="nav nav-pills w-100 gap-1">
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Setup</button>
        </li>
        <li class="nav-item">
          <button class="nav-link active" data-bs-target="javascript:void(0);">Items & Categories</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Payments & Checkout</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Fulfillment</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Manage Orders</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Coupons & Other Gifts</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Store Emails</button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-target="javascript:void(0);">Taxes</button>
        </li>
      </ul>
    </div>
  </div>
  <!-- /Categories -->

  <!-- Article list -->
  <div class="col-xl-9 col-lg-8 col-md-8">
    <div class="card overflow-hidden">
      <div class="card-body">
        <h4 class="d-flex align-items-center">
          <span class="badge bg-label-secondary p-2 rounded  me-3">
            <i class="bx bx-cube bx-sm"></i>
          </span>
          Items & Categories
        </h4>
        <ul class="list-unstyled my-4">
          <li class="mb-3">
            <a href="{{url('pages/help-center-article')}}" class="d-flex fw-semibold">
              <i class="bx bx-chevron-right scaleX-n1-rtl text-muted bx-sm me-1"></i>
              Pricing Wizard
            </a>
          </li>
          <li class="mb-3">
            <a href="{{url('pages/help-center-article')}}" class="d-flex fw-semibold">
              <i class="bx bx-chevron-right scaleX-n1-rtl text-muted bx-sm me-1"></i>
              Shopping on Instagram
            </a>
          </li>
          <li class="mb-3">
            <a href="{{url('pages/help-center-article')}}" class="d-flex fw-semibold">
              <i class="bx bx-chevron-right scaleX-n1-rtl text-muted bx-sm me-1"></i>
              Square sync
            </a>
          </li>
          <li class="mb-3">
            <a href="{{url('pages/help-center-article')}}" class="d-flex fw-semibold">
              <i class="bx bx-chevron-right scaleX-n1-rtl text-muted bx-sm me-1"></i>
              Change theme & fonts of the app
            </a>
          </li>
          <li class="mb-3">
            <a href="{{url('pages/help-center-article')}}" class="d-flex fw-semibold">
              <i class="bx bx-chevron-right scaleX-n1-rtl text-muted bx-sm me-1"></i>
              Calculate and track your material costs
            </a>
          </li>
          <li class="mb-3">
            <a href="{{url('pages/help-center-article')}}" class="d-flex fw-semibold">
              <i class="bx bx-chevron-right scaleX-n1-rtl text-muted bx-sm me-1"></i>
              eCommerce tracking with google analytics
            </a>
          </li>
          <li>
            <a href="{{url('pages/help-center-article')}}" class="d-flex fw-semibold">
              <i class="bx bx-chevron-right scaleX-n1-rtl text-muted bx-sm me-1"></i>
              How many sites can I have? How do I Delete one?
            </a>
          </li>
        </ul>

        <a class="btn btn-label-primary" href="{{url('pages/help-center-landing')}}">
          <i class="bx bx-chevron-left bx-sm scaleX-n1-rtl"></i>
          <span>Back to help center</span>
        </a>
      </div>
    </div>
  </div>
  <!-- /Article list -->
</div>
@endsection
