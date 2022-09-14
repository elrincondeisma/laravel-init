@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Create Deal - Wizard Examples')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/wizard-ex-create-deal.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Wizard examples /</span> Create Deal
</h4>

<!-- Create Deal Wizard -->
<div id="wizard-create-deal" class="bs-stepper vertical mt-2">
  <div class="bs-stepper-header">
    <div class="step" data-target="#deal-type">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
          <i class='bx bx-purchase-tag'></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Deal Type</span>
          <span class="bs-stepper-subtitle">Choose type of deal</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#deal-details">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
          <i class='bx bx-detail'></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Deal Details</span>
          <span class="bs-stepper-subtitle">Provide deal details</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#deal-usage">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
          <i class='bx bx-credit-card'></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Deal Usage</span>
          <span class="bs-stepper-subtitle">Limitations & Offers</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#review-complete">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
          <i class='bx bx-rocket'></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Review & Complete</span>
          <span class="bs-stepper-subtitle">Launch a deal!</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-create-deal-form" onSubmit="return false">
      <!-- Deal Type -->
      <div id="deal-type" class="content">
        <div class="row g-3">
          <div class="col-12">
            <img src="{{asset('assets/img/illustrations/shopping-girl-'.$configData['style'].'.png')}}" class="img-fluid w-100 border rounded-2" alt="shopping girl" data-app-light-img="illustrations/shopping-girl-light.png" data-app-dark-img="illustrations/shopping-girl-dark.png">
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-md mb-md-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioPercentage">
                    <span class="custom-option-body">
                      <i class='bx bx-purchase-tag'></i>
                      <span class="custom-option-title">Percentage</span>
                      <small>Create a deal which offer uses some % off (i.e 5% OFF) on total.</small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioPercentage" checked />
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioFlat">
                    <span class="custom-option-body">
                      <i class='bx bx-dollar'></i>
                      <span class="custom-option-title"> Flat Amount </span>
                      <small>Create a deal which offer uses flat $ off (i.e $5 OFF) on the total.</small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioFlat" />
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioPrime">
                    <span class="custom-option-body">
                      <i class='bx bx-user'></i>
                      <span class="custom-option-title"> Prime Member </span>
                      <small>Create prime member only deal to encourage the prime members.</small>
                    </span>
                    <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioPrime" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="dealAmount">Discount</label>
            <input type="number" name="dealAmount" id="dealAmount" class="form-control" placeholder="25" min="0" max="100" aria-describedby="dealAmountHelp" />
            <div id="dealAmountHelp" class="form-text">Enter the discount percentage. 10 = 10%</div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="dealRegion">Region</label>
            <select id="dealRegion" name="dealRegion" class="select2 form-select" multiple aria-describedby="dealRegionHelp">
              <option disabled value="">Select targeted region</option>
              <option value="asia">Asia</option>
              <option value="africa">Africa</option>
              <option value="europe">Europe</option>
              <option value="north america">North America</option>
              <option value="south america">South America</option>
              <option value="australia">Australia</option>
            </select>
            <div id="dealRegionHelp" class="form-text">Select applicable regions for the deal.</div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-label-secondary btn-prev" disabled> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>
      <!-- Deal Details -->
      <div id="deal-details" class="content">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label" for="dealTitle">Deal Title</label>
            <input type="text" id="dealTitle" name="dealTitle" class="form-control" placeholder="Black friday sale, 25% off" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="dealCode">Deal Code</label>
            <input type="text" id="dealCode" name="dealCode" class="form-control" placeholder="25PEROFF" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="dealDescription">Deal Description</label>
            <textarea id="dealDescription" name="dealDescription" class="form-control" rows="5" placeholder="To sell or distribute something as a business deal"></textarea>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-12 mb-3">
                <label class="form-label" for="dealOfferedItem">Offered Items</label>
                <select class="select2" id="dealOfferedItem" name="dealOfferedItem" multiple>
                  <option disabled value="">Select offered item</option>
                  <option value="65328">Apple iPhone 12 Pro Max (256GB)</option>
                  <option value="25612">Apple iPhone 12 Pro (512GB)</option>
                  <option value="65454">Apple iPhone 12 Mini (256GB)</option>
                  <option value="12365">Apple iPhone 11 Pro Max (256GB)</option>
                  <option value="85466">Apple iPhone 11 (64GB)</option>
                  <option value="98564">OnePlus Nord CE 5G (128GB)</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label" for="dealCartCondition">Cart condition</label>
                <select class="form-select" id="dealCartCondition" name="dealCartCondition">
                  <option disabled value="">Select cart condition</option>
                  <option value="all">Cart must contain all selected Downloads</option>
                  <option value="any">Cart needs one or more of the selected Downloads</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <label for="dealDuration" class="form-label">Deal Duration</label>
            <input type="text" id="dealDuration" name="dealDuration" class="form-control" placeholder="YYYY-MM-DD to YYYY-MM-DD" />
          </div>
          <div class="col-sm-6">
            <label class="form-label">Notify Users</label>
            <div class="row">
              <div class="col mt-2">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="dealNotifyEmail" name="dealNotifyEmail" value="email">
                  <label class="form-check-label" for="dealNotifyEmail">Email</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="dealNotifySMS" name="dealNotifySMS" value="sms">
                  <label class="form-check-label" for="dealNotifySMS">SMS</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="dealNotifyPush" name="dealNotifyPush" value="push">
                  <label class="form-check-label" for="dealNotifyPush">Push Notification</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>
      <!-- Deal Usage -->
      <div id="deal-usage" class="content">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label" for="dealUserType">User Type</label>
            <select id="dealUserType" name="dealUserType" class="form-select">
              <option selected disabled value="">Select user type</option>
              <option value="all">All</option>
              <option value="registered">Registered</option>
              <option value="unregistered">Unregistered</option>
              <option value="prime-members">Prime members</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="dealMaxUsers">Max Users</label>
            <input type="number" id="dealMaxUsers" name="dealMaxUsers" class="form-control" placeholder="500" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="dealMinimumCartAmount">Minimum Cart Amount</label>
            <input type="number" id="dealMinimumCartAmount" name="dealMinimumCartAmount" class="form-control" placeholder="$99" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="dealPromotionalFee">Promotional Fee</label>
            <input type="number" id="dealPromotionalFee" name="dealPromotionalFee" class="form-control" placeholder="$9" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="dealPaymentMethod">Payment Method</label>
            <select id="dealPaymentMethod" name="dealPaymentMethod" class="form-select">
              <option selected disabled value="">Select payment method</option>
              <option value="any">Any</option>
              <option value="credit-card">Credit Card</option>
              <option value="net-banking">Net Banking</option>
              <option value="wallet">Wallet</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="dealStatus">Deal Status</label>
            <select id="dealStatus" name="dealStatus" class="form-select">
              <option selected disabled value="">Select status</option>
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
              <option value="suspend">Suspend</option>
              <option value="abandon">Abandone</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="switch">
              <input type="checkbox" class="switch-input" id="dealLimitUser" name="dealLimitUser">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label"> Limit this discount to a single-use per customer?</span>
            </label>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>
      <!-- Review & Complete -->
      <div id="review-complete" class="content">
        <div class="row g-3">

          <div class="col-lg-6">
            <dl class="row">
              <dd class="col-12 mb-0">
                <h3>Almost done! 🚀</h3>
                <p>Confirm your deal details information and submit to create it.</p>
              </dd>

              <dt class="col-sm-3">Deal Type</dt>
              <dd class="col-sm-9">Percentage</dd>

              <dt class="col-sm-3">Amount</dt>
              <dd class="col-sm-9">25%</dd>

              <dt class="col-sm-3">Deal Code</dt>
              <dd class="col-sm-9">
                <div class="badge bg-label-warning">25PEROFF</div>
              </dd>

              <dt class="col-sm-3">Deal Title</dt>
              <dd class="col-sm-9">Black friday sale, 25% OFF</dd>

              <dt class="col-sm-3">Deal Duration</dt>
              <dd class="col-sm-9"><span class="fw-semibold">2021-07-14</span> to <span class="fw-semibold">2021-07-30</span></dd>
            </dl>
            <label class="switch">
              <input type="checkbox" class="switch-input" id="dealConfirmed" name="dealConfirmed">
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label"> I have confirmed the deal details.</span>
            </label>
          </div>
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <img src="{{asset('assets/img/illustrations/boy-deal-review-'.$configData['style'].'.png')}}" class="img-fluid w-px-300 p-4" alt="shopping girl" data-app-light-img="illustrations/boy-deal-review-light.png" data-app-dark-img="illustrations/boy-deal-review-dark.png">
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-success btn-submit btn-next">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- /Create Deal Wizard -->
@endsection
