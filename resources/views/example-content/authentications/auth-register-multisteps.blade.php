@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Multi Steps Sign-up - Pages')

@section('vendor-style')
<!-- Vendor -->
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('page-style')
<!-- Page -->
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-auth.css')}}">
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/pages-auth-multisteps.js')}}"></script>
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <div class="authentication-inner row m-0">

    <!-- Left Text -->
    <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-end p-5 pe-0">
      <div class="w-px-400">
        <img src="{{asset('assets/img/illustrations/create-account-'.$configData['style'].'.png')}}" class="img-fluid scaleX-n1-rtl" alt="multi-steps" width="600" data-app-light-img="illustrations/create-account-light.png" data-app-dark-img="illustrations/create-account-dark.png">
      </div>
    </div>
    <!-- /Left Text -->

    <!--  Multi Steps Registration -->
    <div class="d-flex col-lg-8 authentication-bg p-sm-5 p-3">
      <div class="d-flex flex-column w-px-700 mx-auto">
        <!-- Logo -->
        <div class="app-brand border-bottom mx-3 mb-4">
          <a href="{{url('/')}}" class="app-brand-link gap-2 mb-3">
            <span class="app-brand-logo demo">
              @include('_partials.macros')
            </span>
            <span class="app-brand-text demo h3 mb-0 fw-bold">
              {{config('variables.templateName')}}
            </span>
          </a>
        </div>
        <!-- /Logo -->

        <div class="my-auto">
          <div id="multiStepsValidation" class="bs-stepper shadow-none">
            <div class="bs-stepper-header">
              <div class="step" data-target="#accountDetailsValidation">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle">
                    <i class="bx bx-home"></i>
                  </span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Account</span>
                    <span class="bs-stepper-subtitle">Account Details</span>
                  </span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#personalInfoValidation">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle">
                    <i class="bx bx-user"></i>
                  </span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Personal</span>
                    <span class="bs-stepper-subtitle">Enter Information</span>
                  </span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#billingLinksValidation">
                <button type="button" class="step-trigger">
                  <span class="bs-stepper-circle">
                    <i class="bx bx-detail"></i>
                  </span>
                  <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Billing</span>
                    <span class="bs-stepper-subtitle">Payment Details</span>
                  </span>
                </button>
              </div>
            </div>
            <div class="bs-stepper-content pt-4">
              <form id="multiStepsForm" onSubmit="return false">
                <!-- Account Details -->
                <div id="accountDetailsValidation" class="content">
                  <div class="content-header mb-3">
                    <h4>Account Information</h4>
                    <span>Enter Your Account Details</span>
                  </div>
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsUsername">Username</label>
                      <input type="text" name="multiStepsUsername" id="multiStepsUsername" class="form-control" placeholder="johndoe" />
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsEmail">Email</label>
                      <input type="email" name="multiStepsEmail" id="multiStepsEmail" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe" />
                    </div>
                    <div class="col-sm-6 form-password-toggle">
                      <label class="form-label" for="multiStepsPass">Password</label>
                      <div class="input-group input-group-merge">
                        <input type="password" id="multiStepsPass" name="multiStepsPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsPass2" />
                        <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i class="bx bx-hide"></i></span>
                      </div>
                    </div>
                    <div class="col-sm-6 form-password-toggle">
                      <label class="form-label" for="multiStepsConfirmPass">Confirm Password</label>
                      <div class="input-group input-group-merge">
                        <input type="password" id="multiStepsConfirmPass" name="multiStepsConfirmPass" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multiStepsConfirmPass2" />
                        <span class="input-group-text cursor-pointer" id="multiStepsConfirmPass2"><i class="bx bx-hide"></i></span>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <label class="form-label" for="multiStepsURL">Profile Link</label>
                      <input type="text" name="multiStepsURL" id="multiStepsURL" class="form-control" placeholder="johndoe/profile" aria-label="johndoe" />
                    </div>
                    <div class="col-12 d-flex justify-content-between mt-4">
                      <button class="btn btn-label-secondary btn-prev" disabled> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                        <span class="d-sm-inline-block d-none">Previous</span>
                      </button>
                      <button class="btn btn-primary btn-next"> <span class="d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Personal Info -->
                <div id="personalInfoValidation" class="content">
                  <div class="content-header mb-3">
                    <h4>Personal Information</h4>
                    <span>Enter Your Personal Information</span>
                  </div>
                  <div class="row g-3">
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsFirstName">First Name</label>
                      <input type="text" id="multiStepsFirstName" name="multiStepsFirstName" class="form-control" placeholder="John" />
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsLastName">Last Name</label>
                      <input type="text" id="multiStepsLastName" name="multiStepsLastName" class="form-control" placeholder="Doe" />
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsMobile">Mobile</label>
                      <div class="input-group input-group-merge">
                        <span class="input-group-text">US (+1)</span>
                        <input type="text" id="multiStepsMobile" name="multiStepsMobile" class="form-control multi-steps-mobile" placeholder="202 555 0111" />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsPincode">Pincode</label>
                      <input type="text" id="multiStepsPincode" name="multiStepsPincode" class="form-control multi-steps-pincode" placeholder="Postal Code" maxlength="6" />
                    </div>
                    <div class="col-md-12">
                      <label class="form-label" for="multiStepsAddress">Address</label>
                      <input type="text" id="multiStepsAddress" name="multiStepsAddress" class="form-control" placeholder="Address" />
                    </div>
                    <div class="col-md-12">
                      <label class="form-label" for="multiStepsArea">Landmark</label>
                      <input type="text" id="multiStepsArea" name="multiStepsArea" class="form-control" placeholder="Area/Landmark" />
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsCity">City</label>
                      <input type="text" id="multiStepsCity" class="form-control" placeholder="Jackson" />
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label" for="multiStepsState">State</label>
                      <select id="multiStepsState" class="select2 form-select" data-allow-clear="true">
                        <option value="">Select</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                      </select>
                    </div>
                    <div class="col-12 d-flex justify-content-between mt-4">
                      <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                        <span class="d-sm-inline-block d-none">Previous</span>
                      </button>
                      <button class="btn btn-primary btn-next"> <span class="d-sm-inline-block d-none me-sm-1 me-0">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
                    </div>
                  </div>
                </div>
                <!-- Billing Links -->
                <div id="billingLinksValidation" class="content">
                  <div class="content-header mb-3">
                    <h4>Select Plan</h4>
                    <span>Select plan as per your requirement</span>
                  </div>
                  <!-- Custom plan options -->
                  <div class="row gap-md-0 gap-3 mb-4">
                    <div class="col-md">
                      <div class="form-check custom-option custom-option-icon">
                        <label class="form-check-label custom-option-content" for="basicOption">
                          <span class="custom-option-body">
                            <span class="d-block h4">Basic</span>
                            <small>A simple start for start ups & Students</small>
                            <span class="d-flex justify-content-center">
                              <sup class="text-primary fs-big lh-1 mt-4">$</sup>
                              <span class="display-5 h1 fw-normal mb-0 text-primary">0</span>
                              <span class="mt-auto mb-2">/month</span>
                            </span>
                          </span>
                          <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="basicOption" />
                        </label>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-check custom-option custom-option-icon">
                        <label class="form-check-label custom-option-content" for="standardOption">
                          <span class="custom-option-body">
                            <span class="d-block h4">Standard</span>
                            <small>For small to medium businesses</small>
                            <span class="d-flex justify-content-center">
                              <sup class="text-primary fs-big lh-1 mt-4">$</sup>
                              <span class="display-5 h1 fw-normal mb-0 text-primary">99</span>
                              <span class="mt-auto mb-2">/month</span>
                            </span>
                          </span>
                          <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="standardOption" checked />
                        </label>
                      </div>
                    </div>
                    <div class="col-md">
                      <div class="form-check custom-option custom-option-icon">
                        <label class="form-check-label custom-option-content" for="enterpriseOption">
                          <span class="custom-option-body">
                            <span class="d-block h4">Enterprise</span>
                            <small>Solution for enterprise & organizations</small>
                            <span class="d-flex justify-content-center">
                              <sup class="text-primary fs-big lh-1 mt-4">$</sup>
                              <span class="display-5 h1 fw-normal mb-0 text-primary">499</span>
                              <span class="mt-auto mb-2">/year</span>
                            </span>
                          </span>
                          <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="enterpriseOption" />
                        </label>
                      </div>
                    </div>
                  </div>
                  <!--/ Custom plan options -->
                  <div class="content-header mb-3">
                    <h4 class="mb-0">Payment Information</h4>
                    <small>Enter your card information</small>
                  </div>
                  <!-- Credit Card Details -->
                  <div class="row g-3">
                    <div class="col-md-12">
                      <label class="form-label w-100" for="multiStepsCard">Card Number</label>
                      <div class="input-group input-group-merge">
                        <input id="multiStepsCard" class="form-control multi-steps-card" name="multiStepsCard" type="text" placeholder="1356 3215 6548 7898" aria-describedby="multiStepsCardImg" />
                        <span class="input-group-text cursor-pointer" id="multiStepsCardImg"><span class="card-type"></span></span>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <label class="form-label" for="multiStepsName">Name On Card</label>
                      <input type="text" id="multiStepsName" class="form-control" name="multiStepsName" placeholder="John Doe" />
                    </div>
                    <div class="col-6 col-md-4">
                      <label class="form-label" for="multiStepsExDate">Expiry Date</label>
                      <input type="text" id="multiStepsExDate" class="form-control multi-steps-exp-date" name="multiStepsExDate" placeholder="MM/YY" />
                    </div>
                    <div class="col-6 col-md-3">
                      <label class="form-label" for="multiStepsCvv">CVV Code</label>
                      <div class="input-group input-group-merge">
                        <input type="text" id="multiStepsCvv" class="form-control multi-steps-cvv" name="multiStepsCvv" maxlength="3" placeholder="654" />
                        <span class="input-group-text cursor-pointer" id="multiStepsCvvHelp"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                      </div>
                    </div>
                    <div class="col-12 d-flex justify-content-between mt-4">
                      <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                        <span class="d-sm-inline-block d-none">Previous</span>
                      </button>
                      <button type="submit" class="btn btn-success btn-next btn-submit">Submit</button>
                    </div>
                  </div>
                  <!--/ Credit Card Details -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Multi Steps Registration -->
  </div>
</div>

<script>
  // Check selected custom option
  window.Helpers.initCustomOptionCheck();

</script>
@endsection
