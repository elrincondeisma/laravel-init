@php
$pricingModal = true;
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Account settings - Pages')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset("assets/vendor/libs/formvalidation/dist/css/formValidation.min.css")}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />

<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>

<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons/datatables-buttons.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-account-settings-billing.js')}}"></script>
<script src="{{asset('assets/js/app-invoice-list.js')}}"></script>
<script src="{{asset('assets/js/modal-edit-cc.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Account Settings /</span> Billings & Plans
</h4>

<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-account')}}"><i class="bx bx-user me-1"></i> Account</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-security')}}"><i class="bx bx-lock-alt me-1"></i> Security</a></li>
      <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="bx bx-detail me-1"></i> Billing & Plans</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-notifications')}}"><i class="bx bx-bell me-1"></i> Notifications</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('pages/account-settings-connections')}}"><i class="bx bx-link-alt me-1"></i> Connections</a></li>
    </ul>
    <div class="card mb-4">
      <!-- Current Plan -->
      <h5 class="card-header">Current Plan</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 mb-1">
            <div class="mb-4">
              <h6 class="fw-semibold mb-2">Your Current Plan is Basic</h6>
              <p>A simple start for everyone</p>
            </div>
            <div class="mb-4">
              <h6 class="fw-semibold mb-2">Active until Dec 09, 2021</h6>
              <p>We will send you a notification upon Subscription expiration</p>
            </div>
            <div class="mb-3">
              <h6 class="fw-semibold mb-2"><span class="me-2">$199 Per Month</span> <span class="badge bg-label-primary">Popular</span></h6>
              <p>Standard plan for small to medium businesses</p>
            </div>
          </div>
          <div class="col-md-6 mb-1">
            <div class="alert alert-warning mb-4" role="alert">
              <h6 class="alert-heading mb-1">We need your attention!</h6>
              <span>Your plan requires update</span>
            </div>
            <div class="plan-statistics">
              <div class="d-flex justify-content-between">
                <span class="fw-semibold mb-2">Days</span>
                <span class="fw-semibold mb-2">24 of 30 Days</span>
              </div>
              <div class="progress">
                <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-1 mb-0">6 days remaining until your plan requires update</p>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary me-2 mt-2" data-bs-toggle="modal" data-bs-target="#pricingModal">Upgrade Plan</button>
            <button class="btn btn-label-secondary cancel-subscription mt-2">Cancel Subscription</button>
          </div>
        </div>
      </div>
      <!-- Modal -->

      <!-- /Modal -->

      <!-- /Current Plan -->
    </div>
    <div class="card mb-4">
      <h5 class="card-header">Payment Methods</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <form id="creditCardForm" class="row g-3" onsubmit="return false">
              <div class="col-12">
                <div class="form-check form-check-inline">
                  <input name="collapsible-payment" class="form-check-input" type="radio" value="" id="collapsible-payment-cc" checked="" />
                  <label class="form-check-label" for="collapsible-payment-cc">Credit/Debit/ATM Card</label>
                </div>
                <div class="form-check form-check-inline">
                  <input name="collapsible-payment" class="form-check-input" type="radio" value="" id="collapsible-payment-cash" />
                  <label class="form-check-label" for="collapsible-payment-cash">Paypal account</label>
                </div>
              </div>
              <div class="col-12">
                <label class="form-label w-100" for="paymentCard">Card Number</label>
                <div class="input-group input-group-merge">
                  <input id="paymentCard" name="paymentCard" class="form-control credit-card-mask" type="text" placeholder="1356 3215 6548 7898" aria-describedby="paymentCard2" />
                  <span class="input-group-text cursor-pointer p-1" id="paymentCard2"><span class="card-type"></span></span>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <label class="form-label" for="paymentName">Name</label>
                <input type="text" id="paymentName" class="form-control" placeholder="John Doe" />
              </div>
              <div class="col-6 col-md-3">
                <label class="form-label" for="paymentExpiryDate">Exp. Date</label>
                <input type="text" id="paymentExpiryDate" class="form-control expiry-date-mask" placeholder="MM/YY" />
              </div>
              <div class="col-6 col-md-3">
                <label class="form-label" for="paymentCvv">CVV Code</label>
                <div class="input-group input-group-merge">
                  <input type="text" id="paymentCvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654" />
                  <span class="input-group-text cursor-pointer" id="paymentCvv2"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                </div>
              </div>
              <div class="col-12">
                <label class="switch">
                  <input type="checkbox" class="switch-input" checked>
                  <span class="switch-toggle-slider">
                    <span class="switch-on"><i class="bx bx-check"></i></span>
                    <span class="switch-off"><i class="bx bx-x"></i></span>
                  </span>
                  <span class="switch-label">Save card for future billing?</span>
                </label>
              </div>
              <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Save Changes</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
              </div>
            </form>
          </div>
          <div class="col-md-6 mt-5 mt-md-0">
            <h6>My Cards</h6>
            <div class="added-cards">
              <div class="cardMaster bg-lighter rounded-3 p-3 mb-3">
                <div class="d-flex justify-content-between flex-sm-row flex-column">
                  <div class="card-information me-2">
                    <img class="mb-3 img-fluid" src="{{asset('assets/img/icons/payments/mastercard.png')}}" alt="Master Card">
                    <div class="d-flex align-items-center mb-1 flex-wrap gap-2">
                      <h6 class="mb-0 me-2">Tom McBride</h6>
                      <span class="badge bg-label-primary">Primary</span>
                    </div>
                    <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; 9856</span>
                  </div>
                  <div class="d-flex flex-column text-start text-sm-end">
                    <div class="d-flex order-sm-0 order-1 mt-sm-0 mt-3">
                      <button class="btn btn-label-primary me-3" data-bs-toggle="modal" data-bs-target="#editCCModal">Edit</button>
                      <button class="btn btn-label-secondary">Delete</button>
                    </div>
                    <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 12/26</small>
                  </div>
                </div>
              </div>
              <div class="cardMaster bg-lighter rounded-3 p-3">
                <div class="d-flex justify-content-between flex-sm-row flex-column">
                  <div class="card-information me-2">
                    <img class="mb-3 img-fluid" src="{{asset('assets/img/icons/payments/visa.png')}}" alt="Visa Card">
                    <h6 class="mb-1">Mildred Wagner</h6>
                    <span class="card-number">&#8727;&#8727;&#8727;&#8727; &#8727;&#8727;&#8727;&#8727; 5896</span>
                  </div>
                  <div class="d-flex flex-column text-start text-sm-end">
                    <div class="d-flex order-sm-0 order-1 mt-sm-0 mt-3">
                      <button class="btn btn-label-primary me-3" data-bs-toggle="modal" data-bs-target="#editCCModal">Edit</button>
                      <button class="btn btn-label-secondary">Delete</button>
                    </div>
                    <small class="mt-sm-auto mt-2 order-sm-1 order-0">Card expires at 10/27</small>
                  </div>
                </div>
              </div>
            </div>
            <!-- Modal -->
            @include('_partials/_modals/modal-edit-cc')
            <!--/ Modal -->
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-4">
      <!-- Billing Address -->
      <h5 class="card-header">Billing Address</h5>
      <div class="card-body">
        <form id="formAccountSettings" onsubmit="return false">
          <div class="row">
            <div class="mb-3 col-sm-6">
              <label for="companyName" class="form-label">Company Name</label>
              <input type="text" id="companyName" name="companyName" class="form-control" placeholder="{{ config('variables.creatorName') }}" />
            </div>
            <div class="mb-3 col-sm-6">
              <label for="billingEmail" class="form-label">Billing Email</label>
              <input class="form-control" type="text" id="billingEmail" name="billingEmail" placeholder="john.doe@example.com" />
            </div>
            <div class="mb-3 col-sm-6">
              <label for="taxId" class="form-label">Tax ID</label>
              <input type="text" id="taxId" name="taxId" class="form-control" placeholder="Enter Tax ID" />
            </div>
            <div class="mb-3 col-sm-6">
              <label for="vatNumber" class="form-label">VAT Number</label>
              <input class="form-control" type="text" id="vatNumber" name="vatNumber" placeholder="Enter VAT Number" />
            </div>
            <div class="mb-3 col-sm-6">
              <label for="mobileNumber" class="form-label">Mobile</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text">US (+1)</span>
                <input class="form-control mobile-number" type="text" id="mobileNumber" name="mobileNumber" placeholder="202 555 0111" />
              </div>
            </div>
            <div class="mb-3 col-sm-6">
              <label for="country" class="form-label">Country</label>
              <select id="country" class="form-select select2" name="country">
                <option selected>USA</option>
                <option>Canada</option>
                <option>UK</option>
                <option>Germany</option>
                <option>France</option>
              </select>
            </div>
            <div class="mb-3 col-12">
              <label for="billingAddress" class="form-label">Billing Address</label>
              <input type="text" class="form-control" id="billingAddress" name="billingAddress" placeholder="Billing Address" />
            </div>
            <div class="mb-3 col-sm-6">
              <label for="state" class="form-label">State</label>
              <input class="form-control" type="text" id="state" name="state" placeholder="California" />
            </div>
            <div class="mb-3 col-sm-6">
              <label for="zipCode" class="form-label">Zip Code</label>
              <input type="text" class="form-control zip-code" id="zipCode" name="zipCode" placeholder="231465" maxlength="6" />
            </div>
          </div>
          <div class="mt-2">
            <button type="submit" class="btn btn-primary me-2">Save changes</button>
            <button type="reset" class="btn btn-label-secondary">Discard</button>
          </div>
        </form>
      </div>
      <!-- /Billing Address -->
    </div>
    <div class="card">
      <!-- Billing History -->
      <h5 class="card-header border-bottom">Billing History</h5>
      <div class="card-datatable table-responsive">
        <table class="invoice-list-table table border-top">
          <thead>
            <tr>
              <th></th>
              <th>#ID</th>
              <th><i class='bx bx-trending-up'></i></th>
              <th>Client</th>
              <th>Total</th>
              <th class="text-truncate">Issued Date</th>
              <th>Balance</th>
              <th>Invoice Status</th>
              <th class="cell-fit">Actions</th>
            </tr>
          </thead>
        </table>
      </div>
      <!--/ Billing History -->
    </div>
  </div>
</div>
@endsection
