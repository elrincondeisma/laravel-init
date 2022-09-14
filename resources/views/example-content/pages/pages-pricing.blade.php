@php
  $configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Pricing - Pages')

<!-- Page -->
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-pricing.css')}}" />
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-pricing.js')}}"></script>
@endsection

@section('content')
<div class="card">
  <!-- Pricing Plans -->
  <div class="pricing-plans pb-sm-5 pb-2 rounded-top">
    <div class="container py-5">
      <h2 class="text-center mb-4">Find the right plan for your site</h2>
      <p class="text-center"> Get started with us - it's perfect for individuals and teams. Choose a subscription plan that meets your needs. </p>
      <div class="d-flex align-items-center justify-content-center mt-5 pt-2 mb-4 pb-1 flex-wrap gap-2">
        <label class="switch switch-primary switch-lg ms-3 ms-sm-0">
          <span class="switch-label fw-semibold fs-6">Monthly</span>
          <input type="checkbox" class="switch-input price-duration-toggler" checked />
          <span class="switch-toggle-slider">
            <span class="switch-on"></span>
            <span class="switch-off"></span>
          </span>
          <span class="switch-label fw-semibold fs-6">Annual</span>
        </label>
      </div>

      <div class="row mx-0 gy-3">
        <!-- Starter -->
        <div class="col-xl mb-lg-0 lg-4">
          <div class="card border shadow-none">
            <div class="card-body">
              <h5 class="text-start text-uppercase">Starter</h5>

              <div class="text-center position-relative mb-4 pb-1">
                <div class="mb-2 d-flex">
                  <h1 class="price-toggle text-primary price-yearly mb-0">$49</h1>
                  <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$99</h1>
                  <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                </div>
                <small class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$ 588 / year</small>
              </div>

              <p>All the basics for business that are just getting started</p>

              <hr>

              <ul class="list-unstyled pt-2 pb-1">
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                    <i class="bx bx-check bx-xs"></i>
                  </span>
                  Up to 10 users
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                    <i class="bx bx-check bx-xs"></i>
                  </span>
                  150+ components
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                    <i class="bx bx-check bx-xs"></i>
                  </span>
                  Basic support on Github
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                    <i class="bx bx-x fs-5 lh-1"></i>
                  </span>
                  Monthly updates
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                    <i class="bx bx-x fs-5 lh-1"></i>
                  </span>
                  Integrations
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                    <i class="bx bx-x fs-5 lh-1"></i>
                  </span>
                  Full Support
                </li>
              </ul>

              <a href="{{url('auth/register-basic')}}" class="btn btn-label-primary d-grid w-100">Get Started</a>
            </div>
          </div>
        </div>

        <!-- Exclusive -->
        <div class="col-xl mb-lg-0 lg-4">
          <div class="card border border-2 border-primary">
            <div class="card-body">
              <div class="d-flex justify-content-between flex-wrap mb-3">
                <h5 class="text-start text-uppercase mb-0">Pro / 15% OFF</h5>
                <span class="badge bg-primary rounded-pill">Popular</span>
              </div>

              <div class="text-center position-relative mb-4 pb-1">
                <div class="mb-2 d-flex">
                  <h1 class="price-toggle text-primary price-yearly mb-0">$99</h1>
                  <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$199</h1>
                  <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                </div>
                <small class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$ 1,188 / year</small>
              </div>
              <p>Batter for growing business that want to more customers</p>

              <hr>

              <ul class="list-unstyled pt-2 pb-1">
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                    <i class="bx bx-check bx-xs"></i>
                  </span>
                  Up to 10 users
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                    <i class="bx bx-check bx-xs"></i>
                  </span>
                  150+ components
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                    <i class="bx bx-check bx-xs"></i>
                  </span>
                  Basic support on Github
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                    <i class="bx bx-check bx-xs"></i>
                  </span>
                  Monthly updates
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                    <i class="bx bx-x fs-5 lh-1"></i>
                  </span>
                  Integrations
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-secondary me-2">
                    <i class="bx bx-x fs-5 lh-1"></i>
                  </span>
                  Full Support
                </li>
              </ul>

              <a href="{{url('auth/register-basic')}}" class="btn btn-primary d-grid w-100">Get Started</a>
            </div>
          </div>
        </div>

        <!-- Enterprise -->
        <div class="col-xl mb-lg-0 lg-4">
          <div class="card border shadow-none">
            <div class="card-body">
              <h5 class="text-start text-uppercase">ENTERPRISE</h5>

              <div class="text-center position-relative mb-4 pb-1">
                <div class="mb-2 d-flex">
                  <h1 class="price-toggle text-primary price-yearly mb-0">$149</h1>
                  <h1 class="price-toggle text-primary price-monthly mb-0 d-none">$499</h1>
                  <sub class="h5 text-muted pricing-duration mt-auto mb-2">/mo</sub>
                </div>
                <small class="position-absolute start-0 m-auto price-yearly price-yearly-toggle text-muted">$ 1,788 / year</small>
              </div>
              <p>Advance features for enterprise who need more customization</p>

              <hr>

              <ul class="list-unstyled pt-2 pb-1">
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                    <i class="bx bx-check bx-xs"></i>
                  </span>
                  Up to 10 users
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                    <i class="bx bx-check bx-xs"></i>
                  </span>
                  150+ components
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                    <i class="bx bx-check bx-xs"></i>
                  </span>
                  Basic support on Github
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                    <i class="bx bx-check bx-xs"></i>
                  </span>
                  Monthly updates
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                    <i class="bx bx-check bx-xs"></i>
                  </span>
                  Integrations
                </li>
                <li class="mb-2">
                  <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2">
                    <i class="bx bx-check bx-xs"></i>
                  </span>
                  Full Support
                </li>
              </ul>

              <a href="{{url('auth/register-basic')}}" class="btn btn-label-primary d-grid w-100">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Pricing Plans -->
  <!-- Pricing Free Trial -->
  <div class="pricing-free-trial">
    <div class="container">
      <div class="position-relative">
        <div class="d-flex justify-content-between flex-column flex-md-row align-items-center px-5 pt-3">
          <!-- image -->
          <div class="text-center">
            <img src="{{asset('assets/img/illustrations/boy-working-'.$configData['style'].'.png')}}" class="img-fluid scaleX-n1" alt="Api Key Image" width="300" data-app-light-img="illustrations/boy-working-light.png" data-app-dark-img="illustrations/boy-working-dark.png">
          </div>
          <div class="text-center text-md-end mt-3">
            <h3 class="text-primary">Still not convinced? Start with a 14-day FREE trial!</h3>
            <p class="fs-5">You will get full access to with all the features for 14 days.</p>
            <a href="{{url('auth/register-basic')}}" class="btn btn-primary my-3 my-md-5">Start 14-day FREE trial</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Pricing Free Trial -->
  <!-- Plans Comparison -->
  <div class="pricing-plans-comparison">
    <div class="container py-5 mt-0 my-md-4">
      <div class="row">
        <div class="col-12 text-center mb-4">
          <div class="badge bg-label-primary badge-sm">Plans</div>
          <h2 class="my-2">Pick a plan that works best for you</h2>
          <p>Stay cool, we have a 48-hour money back guarantee!</p>
        </div>
      </div>
      <div class="row mx-0">
        <div class="col-12">
          <div class="table-responsive">
            <table class="table text-center mb-0">
              <thead>
                <tr>
                  <th scope="col">
                    <p class="h5 mb-2">Features</p>
                    <span class="text-body">Native front features</span>
                  </th>
                  <th scope="col">
                    <p class="h5 mb-2">Starter</p>
                    <span class="text-body">Free</span>
                  </th>
                  <th scope="col" class="pt-3">
                    <p class="h5 mb-2 position-relative">Pro
                      <span class="badge rounded-pill bg-warning badge-center mt-n3 position-absolute"><i class="bx bxs-star"></i></span>
                    </p>
                    <span class="text-body">$49/Mo</span>
                  </th>
                  <th scope="col">
                    <p class="h5 mb-2">Enterprise</p>
                    <span class="text-body">$99/Mo</span>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>14-days free trial</td>
                  <td>
                    <i class="bx bx-check text-success bx-sm"></i>
                  </td>
                  <td>
                    <i class="bx bx-check text-success bx-sm"></i>
                  </td>
                  <td>
                    <i class="bx bx-check text-success bx-sm"></i>
                  </td>
                </tr>
                <tr>
                  <td>No user limit</td>
                  <td>
                    <i class="bx bx-x text-secondary bx-sm"></i>
                  </td>
                  <td>
                    <i class="bx bx-x text-secondary bx-sm"></i>
                  </td>
                  <td>
                    <i class="bx bx-check text-success bx-sm"></i>
                  </td>
                </tr>
                <tr>
                  <td>Product Support</td>
                  <td>
                    <i class="bx bx-x text-secondary bx-sm"></i>
                  </td>
                  <td>
                    <i class="bx bx-check text-success bx-sm"></i>
                  </td>
                  <td>
                    <i class="bx bx-check text-success bx-sm"></i>
                  </td>
                </tr>
                <tr>
                  <td>Email Support</td>
                  <td>
                    <i class="bx bx-x text-secondary bx-sm"></i>
                  </td>
                  <td>
                    <span class="badge bg-label-primary badge-sm text-uppercase">Add-on Available</span>
                  </td>
                  <td>
                    <i class="bx bx-check text-success bx-sm"></i>
                  </td>
                </tr>
                <tr>
                  <td>Integrations</td>
                  <td>
                    <i class="bx bx-x text-secondary bx-sm"></i>
                  </td>
                  <td>
                    <i class="bx bx-check text-success bx-sm"></i>
                  </td>
                  <td>
                    <i class="bx bx-check text-success bx-sm"></i>
                  </td>
                </tr>
                <tr>
                  <td>Removal of Front branding</td>
                  <td>
                    <i class="bx bx-x text-secondary bx-sm"></i>
                  </td>
                  <td>
                    <span class="badge bg-label-primary badge-sm text-uppercase">Add-on Available</span>
                  </td>
                  <td>
                    <i class="bx bx-check text-success bx-sm"></i>
                  </td>
                </tr>
                <tr>
                  <td>Active maintenance & support</td>
                  <td>
                    <i class="bx bx-x text-secondary bx-sm"></i>
                  </td>
                  <td>
                    <i class="bx bx-x text-secondary bx-sm"></i>
                  </td>
                  <td>
                    <i class="bx bx-check text-success bx-sm"></i>
                  </td>
                </tr>
                <tr>
                  <td>Data storage for 365 days</td>
                  <td>
                    <i class="bx bx-x text-secondary bx-sm"></i>
                  </td>
                  <td>
                    <i class="bx bx-x text-secondary bx-sm"></i>
                  </td>
                  <td>
                    <i class="bx bx-check text-success bx-sm"></i>
                  </td>
                </tr>
                <tr>
                  <td class="border-0"></td>
                  <td class="border-0">
                    <a href="{{url('auth/register-basic')}}" class="btn text-nowrap btn-label-primary">Choose Plan</a>
                  </td>
                  <td class="border-0">
                    <a href="{{url('auth/register-basic')}}" class="btn text-nowrap btn-primary">Choose Plan</a>
                  </td>
                  <td class="border-0">
                    <a href="{{url('auth/register-basic')}}" class="btn text-nowrap btn-label-primary">Choose Plan</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Plans Comparison -->
  <!-- FAQS -->
  <div class="pricing-faqs bg-alt-pricing rounded-bottom">
    <div class="container py-5">
      <div class="row mt-0 mt-md-5">
        <div class="col-12 text-center mb-4">
          <div class="badge bg-label-primary badge-sm">FAQ</div>
          <h4 class="my-2">Frequently Asked Questions</h4>
          <p>Let us help answer the most common questions you might have.</p>
        </div>
      </div>
      <div class="row mx-0">
        <div class="col-12">
          <div id="faq" class="accordion accordion-header-primary">
            <div class="card accordion-item active">
              <h6 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#faq-1" aria-controls="faq-1">
                  What counts towards the 100 responses limit?
                </button>
              </h6>

              <div id="faq-1" class="accordion-collapse collapse show" data-bs-parent="#faq">
                <div class="accordion-body">
                  We count all responses submitted through all your forms in a month.
                  If you already received 100 responses this month, you won’t be able to receive any more of them until next
                  month when the counter resets.
                </div>
              </div>
            </div>

            <div class="card accordion-item">
              <h6 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-2" aria-expanded="false" aria-controls="faq-2">
                  How do you process payments?
                </button>
              </h6>
              <div id="faq-2" class="accordion-collapse collapse" data-bs-parent="#faq">
                <div class="accordion-body">
                  We accept Visa®, MasterCard®, American Express®, and PayPal®.
                  So you can be confident that your credit card information will be kept
                  safe and secure.
                </div>
              </div>
            </div>

            <div class="card accordion-item">
              <h6 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
                  What payment methods do you accept?
                </button>
              </h6>
              <div id="faq-3" class="accordion-collapse collapse" data-bs-parent="#faq">
                <div class="accordion-body">
                  2Checkout accepts all types of credit and debit cards.
                </div>
              </div>
            </div>

            <div class="card accordion-item">
              <h6 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-4" aria-expanded="false" aria-controls="faq-4">
                  Do you have a money-back guarantee?
                </button>
              </h6>
              <div id="faq-4" class="accordion-collapse collapse" data-bs-parent="#faq">
                <div class="accordion-body">
                  Yes. You may request a refund within 30 days of your purchase without any additional explanations.
                </div>
              </div>
            </div>

            <div class="card accordion-item">
              <h6 class="accordion-header">
                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq-5" aria-expanded="false" aria-controls="faq-5">
                  I have more questions. Where can I get help?
                </button>
              </h6>
              <div id="faq-5" class="accordion-collapse collapse" data-bs-parent="#faq">
                <div class="accordion-body">
                  Please <a href="javascript:void(0);">contact</a> us if you have any other questions or concerns. We’re
                  here to help!
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ FAQS -->
</div>
@endsection
