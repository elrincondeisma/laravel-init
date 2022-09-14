@extends('layouts/layoutMaster')

@section('title', 'User View - Pages')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/modal-edit-user.js')}}"></script>
<script src="{{asset('assets/js/modal-edit-cc.js')}}"></script>
<script src="{{asset('assets/js/modal-add-new-cc.js')}}"></script>
<script src="{{asset('assets/js/modal-add-new-address.js')}}"></script>
<script src="{{asset('assets/js/app-user-view.js')}}"></script>
<script src="{{asset('assets/js/app-user-view-billing.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">User / View /</span> Billing & Plans
</h4>
<div class="row gy-4">
  <!-- User Sidebar -->
  <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- User Card -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="user-avatar-section">
          <div class=" d-flex align-items-center flex-column">
            <img class="img-fluid rounded my-4" src="{{asset('assets/img/avatars/10.png')}}" height="110" width="110" alt="User avatar" />
            <div class="user-info text-center">
              <h5 class="mb-2">Violet Mendoza</h5>
              <span class="badge bg-label-secondary">Author</span>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-around flex-wrap my-4 py-3">
          <div class="d-flex align-items-start me-4 mt-3 gap-3">
            <span class="badge bg-label-primary p-2 rounded"><i class='bx bx-check bx-sm'></i></span>
            <div>
              <h5 class="mb-0">1.23k</h5>
              <span>Tasks Done</span>
            </div>
          </div>
          <div class="d-flex align-items-start mt-3 gap-3">
            <span class="badge bg-label-primary p-2 rounded"><i class='bx bx-customize bx-sm'></i></span>
            <div>
              <h5 class="mb-0">568</h5>
              <span>Projects Done</span>
            </div>
          </div>
        </div>
        <h5 class="pb-2 border-bottom mb-4">Details</h5>
        <div class="info-container">
          <ul class="list-unstyled">
            <li class="mb-3">
              <span class="fw-bold me-2">Username:</span>
              <span>violet.dev</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Email:</span>
              <span>vafgot@vultukir.org</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Status:</span>
              <span class="badge bg-label-success">Active</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Role:</span>
              <span>Author</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Tax id:</span>
              <span>Tax-8965</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Contact:</span>
              <span>(123) 456-7890</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Languages:</span>
              <span>French</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Country:</span>
              <span>England</span>
            </li>
          </ul>
          <div class="d-flex justify-content-center pt-3">
            <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
            <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /User Card -->
    <!-- Plan Card -->
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start">
          <span class="badge bg-label-primary">Standard</span>
          <div class="d-flex justify-content-center">
            <sup class="h5 pricing-currency mt-3 mt-sm-4 mb-0 me-1 text-primary">$</sup>
            <h1 class="display-3 fw-normal mb-0 text-primary">99</h1>
            <sub class="fs-6 pricing-duration mt-auto mb-4">/month</sub>
          </div>
        </div>
        <ul class="ps-3 g-2 mb-3">
          <li class="mb-2">10 Users</li>
          <li class="mb-2">Up to 10 GB storage</li>
          <li>Basic Support</li>
        </ul>
        <div class="d-flex justify-content-between align-items-center mb-1">
          <h6 class="mb-0">Days</h6>
          <h6 class="mb-0">65% Completed</h6>
        </div>
        <div class="progress mb-1" style="height: 8px;">
          <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <span>4 days remaining</span>
        <div class="d-grid w-100 mt-3 pt-2">
          <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</button>
        </div>
      </div>
    </div>
    <!-- /Plan Card -->
  </div>
  <!--/ User Sidebar -->


  <!-- User Content -->
  <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
    <!-- User Pills -->
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/account')}}"><i class="bx bx-user me-1"></i>Account</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/security')}}"><i class="bx bx-lock-alt me-1"></i>Security</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-detail me-1"></i>Billing & Plans</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/notifications')}}"><i class="bx bx-bell me-1"></i>Notifications</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('app/user/view/connections')}}"><i class="bx bx-link-alt me-1"></i>Connections</a></li>
    </ul>
    <!--/ User Pills -->

    <!-- Current Plan -->
    <div class="card mb-4">
      <h5 class="card-header">Current Plan</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-xl-6 order-1 order-xl-0">
            <div class="mb-4">
              <h6 class="mb-1">Your Current Plan is Basic</h6>
              <p>A simple start for everyone</p>
            </div>
            <div class="mb-4">
              <h6 class="mb-1">Active until Dec 09, 2021</h6>
              <p>We will send you a notification upon Subscription expiration</p>
            </div>
            <div class="mb-4">
              <h6 class="mb-1"><span class="me-2">$199 Per Month</span> <span class="badge bg-label-primary">Popular</span></h6>
              <p>Standard plan for small to medium businesses</p>
            </div>
          </div>
          <div class="col-xl-6 order-0 order-xl-0">
            <div class="alert alert-warning mb-4" role="alert">
              <h6 class="alert-heading mb-1">We need your attention!</h6>
              <span>Your plan requires update</span>
            </div>
            <div class="plan-statistics">
              <div class="d-flex justify-content-between">
                <h6 class="mb-2">Days</h6>
                <h6 class="mb-2">24 of 30 Days</h6>
              </div>
              <div class="progress mb-1">
                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>6 days remaining until your plan requires update</p>
            </div>
          </div>
          <div class="col-12 order-2 order-xl-0">
            <button class="btn btn-primary me-2 my-2" data-bs-toggle="modal" data-bs-target="#upgradePlanModal">Upgrade Plan</button>
            <button class="btn btn-label-danger cancel-subscription">Cancel Subscription</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /Current Plan -->

    <!-- Payment Methods -->
    <div class="card card-action mb-4">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0">Payment Methods</h5>
        <div class="card-action-element">
          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addNewCCModal"><i class="bx bx-plus bx-xs me-1"></i>Add Card</button>
        </div>
      </div>
      <div class="card-body">
        <div class="added-cards">
          <div class="cardMaster border p-3 rounded mb-3">
            <div class="d-flex justify-content-between flex-sm-row flex-column">
              <div class="card-information">
                <img class="mb-3 img-fluid" src="{{asset('assets/img/icons/payments/mastercard.png')}}" alt="Master Card">
                <h6 class="mb-1">Kaith Morrison</h6>
                <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; 9856</span>
              </div>
              <div class="d-flex flex-column text-start text-lg-end">
                <div class="d-flex order-sm-0 order-1 mt-3">
                  <button class="btn btn-label-primary me-3" data-bs-toggle="modal" data-bs-target="#editCCModal">Edit</button>
                  <button class="btn btn-label-secondary">Delete</button>
                </div>
                <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 12/26</small>
              </div>
            </div>
          </div>
          <div class="cardMaster border p-3 rounded mb-3">
            <div class="d-flex justify-content-between flex-sm-row flex-column">
              <div class="card-information">
                <img class="mb-3 img-fluid" src="{{asset('assets/img/icons/payments/visa.png')}}" alt="Master Card">
                <div class="d-flex align-items-center mb-1">
                  <h6 class="mb-0 me-3">Tom McBride</h6>
                  <span class="badge bg-label-primary me-1">Primary</span>
                </div>
                <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; 6542</span>
              </div>
              <div class="d-flex flex-column text-start text-lg-end">
                <div class="d-flex order-sm-0 order-1 mt-3">
                  <button class="btn btn-label-primary me-3" data-bs-toggle="modal" data-bs-target="#editCCModal">Edit</button>
                  <button class="btn btn-label-secondary">Delete</button>
                </div>
                <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 10/24</small>
              </div>
            </div>
          </div>
          <div class="cardMaster border p-3 rounded">
            <div class="d-flex justify-content-between flex-sm-row flex-column">
              <div class="card-information">
                <img class="mb-3 img-fluid" src="{{asset('assets/img/icons/payments/american-ex.png')}}" alt="Visa Card">
                <h6 class="mb-1">Mildred Wagner</h6>
                <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; 5896</span>
              </div>
              <div class="d-flex flex-column text-start text-lg-end">
                <div class="d-flex order-sm-0 order-1 mt-3">
                  <button class="btn btn-label-primary me-3" data-bs-toggle="modal" data-bs-target="#editCCModal">Edit</button>
                  <button class="btn btn-label-secondary">Delete</button>
                </div>
                <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 10/27</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Payment Methods -->

    <!-- Billing Address -->
    <div class="card card-action">
      <div class="card-header align-items-center">
        <h5 class="card-action-title mb-0">Billing Address</h5>
        <div class="card-action-element">
          <button class="btn btn-primary btn-sm edit-address" type="button" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit address</button>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-xl-7 col-12">
            <dl class="row mb-0">
              <dt class="col-sm-4 mb-3">Company Name:</dt>
              <dd class="col-sm-8">{{ config('variables.templateName') }}</dd>

              <dt class="col-sm-4 mb-3">Billing Email:</dt>
              <dd class="col-sm-8">user@ex.com</dd>

              <dt class="col-sm-4 mb-3">Tax ID:</dt>
              <dd class="col-sm-8">TAX-357378</dd>

              <dt class="col-sm-4 mb-3">VAT Number:</dt>
              <dd class="col-sm-8">SDF754K77</dd>

              <dt class="col-sm-4 mb-3">Billing Address:</dt>
              <dd class="col-sm-8">100 Water Plant <br>Avenue, Building 1303<br> Wake Island</dd>
            </dl>
          </div>
          <div class="col-xl-5 col-12">
            <dl class="row mb-0">
              <dt class="col-sm-4 mb-3">Contact:</dt>
              <dd class="col-sm-8">+1 (605) 977-32-65</dd>

              <dt class="col-sm-4 mb-3">Country:</dt>
              <dd class="col-sm-8">Wake Island</dd>

              <dt class="col-sm-4 mb-3">State:</dt>
              <dd class="col-sm-8">Capholim</dd>

              <dt class="col-sm-4 mb-3">Zipcode:</dt>
              <dd class="col-sm-8">403114</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!--/ Billing Address -->

  </div>
  <!--/ User Content -->
</div>

<!-- Modal -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-edit-cc')
@include('_partials/_modals/modal-add-new-address')
@include('_partials/_modals/modal-add-new-cc')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modal -->

@endsection
