@extends('layouts/layoutMaster')

@section('title', 'Validation - Forms')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-validation.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Forms /</span> Validation
</h4>
<div class="row mb-4">
  <!-- Browser Default -->
  <div class="col-md mb-4 mb-md-0">
    <div class="card">
      <h5 class="card-header">Browser Default</h5>
      <div class="card-body">
        <form class="browser-default-validation">
          <div class="mb-3">
            <label class="form-label" for="basic-default-name">Name</label>
            <input type="text" class="form-control" id="basic-default-name" placeholder="John Doe" required />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-email">Email</label>
            <input type="text" id="basic-default-email" class="form-control" placeholder="john.doe" required />
          </div>
          <div class="mb-3 form-password-toggle">
            <label class="form-label" for="basic-default-password">Password</label>
            <div class="input-group input-group-merge">
              <input type="password" id="basic-default-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="basic-default-password3" required />
              <span class="input-group-text cursor-pointer" id="basic-default-password3"><i class="bx bx-hide"></i></span>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-country">Country</label>
            <select class="form-select" id="basic-default-country" required>
              <option value="">Select Country</option>
              <option value="usa">USA</option>
              <option value="uk">UK</option>
              <option value="france">France</option>
              <option value="australia">Australia</option>
              <option value="spain">Spain</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-dob">DOB</label>
            <input type="text" class="form-control flatpickr-validation" id="basic-default-dob" required />
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-upload-file">Profile pic</label>
            <input type="file" class="form-control" id="basic-default-upload-file" required />
          </div>
          <div class="mb-3">
            <label class="d-block form-label">Gender</label>
            <div class="form-check mb-2">
              <input type="radio" id="basic-default-radio-male" name="basic-default-radio" class="form-check-input" required />
              <label class="form-check-label" for="basic-default-radio-male">Male</label>
            </div>
            <div class="form-check">
              <input type="radio" id="basic-default-radio-female" name="basic-default-radio" class="form-check-input" required />
              <label class="form-check-label" for="basic-default-radio-female">Female</label>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-bio">Bio</label>
            <textarea class="form-control" id="basic-default-bio" name="basic-default-bio" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="basic-default-checkbox" required />
              <label class="form-check-label" for="basic-default-checkbox">Agree to our terms and conditions</label>
            </div>
          </div>
          <div class="mb-3">
            <label class="switch switch-primary">
              <input type="checkbox" class="switch-input" required />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Send me related emails</span>
            </label>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Browser Default -->

  <!-- Bootstrap Validation -->
  <div class="col-md">
    <div class="card">
      <h5 class="card-header">Bootstrap Validation</h5>
      <div class="card-body">
        <form class="needs-validation" novalidate>
          <div class="mb-3">
            <label class="form-label" for="bs-validation-name">Name</label>
            <input type="text" class="form-control" id="bs-validation-name" placeholder="John Doe" required />
            <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please enter your name. </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="bs-validation-email">Email</label>
            <input type="email" id="bs-validation-email" class="form-control" placeholder="john.doe" aria-label="john.doe" required />
            <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please enter a valid email </div>
          </div>
          <div class="mb-3 form-password-toggle">
            <label class="form-label" for="bs-validation-password">Password</label>
            <div class="input-group input-group-merge">
              <input type="password" id="bs-validation-password" class="form-control" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" required />
              <span class="input-group-text cursor-pointer" id="basic-default-password4"><i class="bx bx-hide"></i></span>
            </div>
            <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please enter your password. </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="bs-validation-country">Country</label>
            <select class="form-select" id="bs-validation-country" required>
              <option value="">Select Country</option>
              <option value="usa">USA</option>
              <option value="uk">UK</option>
              <option value="france">France</option>
              <option value="australia">Australia</option>
              <option value="spain">Spain</option>
            </select>
            <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please select your country </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="bs-validation-dob">DOB</label>
            <input type="text" class="form-control flatpickr-validation" id="bs-validation-dob" required />
            <div class="valid-feedback"> Looks good! </div>
            <div class="invalid-feedback"> Please Enter Your DOB </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="bs-validation-upload-file">Profile pic</label>
            <input type="file" class="form-control" id="bs-validation-upload-file" required />
          </div>
          <div class="mb-3">
            <label class="d-block form-label">Gender</label>
            <div class="form-check mb-2">
              <input type="radio" id="bs-validation-radio-male" name="bs-validation-radio" class="form-check-input" required />
              <label class="form-check-label" for="bs-validation-radio-male">Male</label>
            </div>
            <div class="form-check">
              <input type="radio" id="bs-validation-radio-female" name="bs-validation-radio" class="form-check-input" required />
              <label class="form-check-label" for="bs-validation-radio-female">Female</label>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label" for="bs-validation-bio">Bio</label>
            <textarea class="form-control" id="bs-validation-bio" name="bs-validation-bio" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="bs-validation-checkbox" required />
              <label class="form-check-label" for="bs-validation-checkbox">Agree to our terms and conditions</label>
              <div class="invalid-feedback"> You must agree before submitting. </div>
            </div>
          </div>
          <div class="mb-3">
            <label class="switch switch-primary">
              <input type="checkbox" class="switch-input" required />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Send me related emails</span>
            </label>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /Bootstrap Validation -->
</div>
<div class="row">
  <!-- FormValidation -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">FormValidation</h5>
      <div class="card-body">

        <form id="formValidationExamples" class="row g-3">

          <!-- Account Details -->

          <div class="col-12">
            <h6 class="fw-normal">1. Account Details</h6>
            <hr class="mt-0" />
          </div>


          <div class="col-md-6">
            <label class="form-label" for="formValidationName">Full Name</label>
            <input type="text" id="formValidationName" class="form-control" placeholder="John Doe" name="formValidationName" />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="formValidationEmail">Email</label>
            <input class="form-control" type="email" id="formValidationEmail" name="formValidationEmail" placeholder="john.doe" />
          </div>

          <div class="col-md-6">
            <div class="form-password-toggle">
              <label class="form-label" for="formValidationPass">Password</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="password" id="formValidationPass" name="formValidationPass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-password2" />
                <span class="input-group-text cursor-pointer" id="multicol-password2"><i class="bx bx-hide"></i></span>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-password-toggle">
              <label class="form-label" for="formValidationConfirmPass">Confirm Password</label>
              <div class="input-group input-group-merge">
                <input class="form-control" type="password" id="formValidationConfirmPass" name="formValidationConfirmPass" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="multicol-confirm-password2" />
                <span class="input-group-text cursor-pointer" id="multicol-confirm-password2"><i class="bx bx-hide"></i></span>
              </div>
            </div>
          </div>


          <!-- Personal Info -->

          <div class="col-12">
            <h6 class="mt-2 fw-normal">2. Personal Info</h6>
            <hr class="mt-0" />
          </div>

          <div class="col-md-6">
            <label for="formValidationFile" class="form-label">Profile Pic</label>
            <input class="form-control" type="file" id="formValidationFile" name="formValidationFile">
          </div>
          <div class="col-md-6">
            <label class="form-label" for="formValidationDob">DOB</label>
            <input type="text" class="form-control flatpickr-validation" name="formValidationDob" id="formValidationDob" required />
          </div>

          <div class="col-md-6">
            <label class="form-label" for="formValidationSelect2">Country</label>
            <select id="formValidationSelect2" name="formValidationSelect2" class="form-select select2" data-allow-clear="true">
              <option value="">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
          </div>
          <div class="col-md-6">
            <label class="form-label" for="formValidationLang">Languages</label>
            <input type="text" value="" class="form-control" name="formValidationLang" id="formValidationLang" />
          </div>

          <div class="col-md-6">
            <label class="form-label" for="formValidationTech">Tech</label>
            <input class="form-control typeahead" type="text" id="formValidationTech" name="formValidationTech" autocomplete="off" />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="formValidationHobbies">Hobbies</label>
            <select class="selectpicker hobbies-select w-100" id="formValidationHobbies" data-style="btn-default" data-icon-base="bx" data-tick-icon="bx-check text-white" name="formValidationHobbies" multiple>
              <option>Sports</option>
              <option>Movies</option>
              <option>Books</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="form-label" for="formValidationBio">Bio</label>
            <textarea class="form-control" id="formValidationBio" name="formValidationBio" rows="3"></textarea>
          </div>
          <div class="col-md-6">
            <label class="form-label">Gender</label>
            <div class="form-check custom mb-2">
              <input type="radio" id="formValidationGender" name="formValidationGender" class="form-check-input" />
              <label class="form-check-label" for="formValidationGender">Male</label>
            </div>

            <div class="form-check custom">
              <input type="radio" id="formValidationGender2" name="formValidationGender" class="form-check-input" />
              <label class="form-check-label" for="formValidationGender2">Female</label>
            </div>
          </div>


          <!-- Choose Your Plan -->

          <div class="col-12">
            <h6 class="mt-2 fw-normal">3. Choose Your Plan</h6>
            <hr class="mt-0" />
          </div>
          <div class="row gy-3 mt-0">
            <div class="col-xl-3 col-md-5 col-sm-6 col-12">
              <div class="form-check custom-option custom-option-icon">
                <label class="form-check-label custom-option-content" for="basicPlanMain1">
                  <span class="custom-option-body">
                    <i class="bx bx-rocket"></i>
                    <span class="custom-option-title"> Starter </span>
                    <small> Get 5gb of space and 1 team member. </small>
                  </span>
                  <input name="formValidationPlan" class="form-check-input" type="radio" value="" id="basicPlanMain1" checked />
                </label>
              </div>
            </div>
            <div class="col-xl-3 col-md-5 col-sm-6 col-12">
              <div class="form-check custom-option custom-option-icon">
                <label class="form-check-label custom-option-content" for="basicPlanMain2">
                  <span class="custom-option-body">
                    <i class="bx bx-user"></i>
                    <span class="custom-option-title"> Personal </span>
                    <small> Get 15gb of space and 5 team member. </small>
                  </span>
                  <input name="formValidationPlan" class="form-check-input" type="radio" value="" id="basicPlanMain2" />
                </label>
              </div>
            </div>
            <div class="col-xl-3 col-md-5 col-sm-6 col-12">
              <div class="form-check custom-option custom-option-icon">
                <label class="form-check-label custom-option-content" for="basicPlanMain3">
                  <span class="custom-option-body">
                    <i class="bx bx-crown"></i>
                    <span class="custom-option-title"> Premium </span>
                    <small> Get 25gb of space and 15 members. </small>
                  </span>
                  <input name="formValidationPlan" class="form-check-input" type="radio" value="" id="basicPlanMain3" />
                </label>
              </div>
            </div>
          </div>

          <div class="col-12">
            <label class="switch switch-primary">
              <input type="checkbox" class="switch-input" name="formValidationSwitch" />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">Send me related emails</span>
            </label>
          </div>
          <div class="col-12">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="formValidationCheckbox" name="formValidationCheckbox" />
              <label class="form-check-label" for="formValidationCheckbox">Agree to our terms and conditions</label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /FormValidation -->
</div>
@endsection
