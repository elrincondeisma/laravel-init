@extends('layouts/layoutMaster')

@section('title', 'Property Listing - Wizard Examples')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bs-stepper/bs-stepper.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/wizard-ex-property-listing.js')}}"></script>
@endsection

@section('content')

<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Wizard examples /</span> Property Listing
</h4>

<!-- Property Listing Wizard -->
<div id="wizard-property-listing" class="bs-stepper vertical mt-2">
  <div class="bs-stepper-header">
    <div class="step" data-target="#personal-details">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
          <i class='bx bx-user'></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Personal Details</span>
          <span class="bs-stepper-subtitle">Your Name/Email</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-details">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
          <i class='bx bx-home'></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Details</span>
          <span class="bs-stepper-subtitle">Property Type</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-features">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
          <i class='bx bx-star'></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Features</span>
          <span class="bs-stepper-subtitle">Bedrooms/Floor No</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#property-area">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
          <i class='bx bx-map'></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Property Area</span>
          <span class="bs-stepper-subtitle">Covered Area</span>
        </span>
      </button>
    </div>
    <div class="line"></div>
    <div class="step" data-target="#price-details">
      <button type="button" class="step-trigger">
        <span class="bs-stepper-circle">
          <i class='bx bx-dollar'></i>
        </span>
        <span class="bs-stepper-label">
          <span class="bs-stepper-title">Price Details</span>
          <span class="bs-stepper-subtitle">Expected Price</span>
        </span>
      </button>
    </div>
  </div>
  <div class="bs-stepper-content">
    <form id="wizard-property-listing-form" onSubmit="return false">

      <!-- Personal Details -->
      <div id="personal-details" class="content">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-md mb-md-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioBuilder">
                    <span class="custom-option-body">
                      <i class="bx bx-building-house"></i>
                      <span class="custom-option-title">I am the Builder</span>
                      <small>List property as Builder, list your project and get highest reach.</small>
                    </span>
                    <input name="plUserType" class="form-check-input" type="radio" value="1" id="customRadioBuilder" checked />
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioOwner">
                    <span class="custom-option-body">
                      <i class="bx bx-crown"></i>
                      <span class="custom-option-title"> I am the Owner </span>
                      <small>Submit property as an Individual. Lease, Rent or Sell at the best price.</small>
                    </span>
                    <input name="plUserType" class="form-check-input" type="radio" value="2" id="customRadioOwner" />
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioBroker">
                    <span class="custom-option-body">
                      <i class="bx bx-briefcase-alt"></i>
                      <span class="custom-option-title"> I am a Broker </span>
                      <small>Earn highest commission by listing your clients properties at the best price.</small>
                    </span>
                    <input name="plUserType" class="form-check-input" type="radio" value="3" id="customRadioBroker" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFirstName">First Name</label>
            <input type="text" id="plFirstName" name="plFirstName" class="form-control" placeholder="John" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLastName">Last Name</label>
            <input type="text" id="plLastName" name="plLastName" class="form-control" placeholder="Doe" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plUserName">Username</label>
            <input type="text" id="plUserName" name="plUserName" class="form-control" placeholder="john.doe" />
          </div>
          <div class="col-sm-6 form-password-toggle">
            <label class="form-label" for="plPassWord">Password</label>
            <div class="input-group input-group-merge">
              <input type="password" id="plPassWord" class="form-control" name="plPassWord" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="passwordToggler" />
              <span id="passwordToggler" class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plEmail">Email</label>
            <input type="text" id="plEmail" name="plEmail" class="form-control" placeholder="john.doe@example.com" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plContact">Contact</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text">US (+1)</span>
              <input type="text" id="plContact" name="plContact" class="form-control contact-number-mask" placeholder="202 555 0111" />
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-label-secondary btn-prev" disabled> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
              <span class="d-sm-inline-block d-none">Previous</span>
            </button>
            <button class="btn btn-primary btn-next"> <span class="d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Details -->
      <div id="property-details" class="content">
        <div class="row g-3">
          <div class="col-12">
            <div class="row">
              <div class="col-sm mb-sm-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioSell">
                    <span class="custom-option-body">
                      <i class="bx bx-home"></i>
                      <span class="custom-option-title">Sale the property</span>
                      <small>Post your property for sale.<br /> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="1" id="customRadioSell" checked />
                  </label>
                </div>
              </div>
              <div class="col-sm mb-sm-0 mb-2">
                <div class="form-check custom-option custom-option-icon">
                  <label class="form-check-label custom-option-content" for="customRadioRent">
                    <span class="custom-option-body">
                      <i class="bx bx-wallet"></i>
                      <span class="custom-option-title">Rent the property</span>
                      <small>Post your property for rent.<br /> Unlimited free listing.</small>
                    </span>
                    <input name="plPropertySaleRent" class="form-check-input" type="radio" value="2" id="customRadioRent" />
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plPropertyType">Property Type</label>
            <select id="plPropertyType" name="plPropertyType" class="select2 form-select" data-allow-clear="true">
              <option value="">Select Property Type</option>
              <option value="10002">Flat/ Apartment</option>
              <option value="10001">Residential House</option>
              <option value="10017">Villa</option>
              <option value="10003">Builder Floor Apartment</option>
              <option value="10000">Residential Land/ Plot</option>
              <option value="10021">Penthouse</option>
              <option value="10022">Studio Apartment</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plZipCode">Zip Code</label>
            <input type="number" id="plZipCode" name="plZipCode" class="form-control" placeholder="99950" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCountry">Country</label>
            <select id="plCountry" name="plCountry" class="select2 form-select" data-allow-clear="true">
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
          <div class="col-sm-6">
            <label class="form-label" for="plState">State</label>
            <input type="text" id="plState" name="plState" class="form-control" placeholder="California" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plCity">City</label>
            <input type="text" id="plCity" name="plCity" class="form-control" placeholder="Los Angeles" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plLandmark">Landmark</label>
            <input type="text" id="plLandmark" name="plLandmark" class="form-control" placeholder="Nr. Hard Rock Cafe" />
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plAddress">Address</label>
            <textarea id="plAddress" name="plAddress" class="form-control" rows="2" placeholder="12, Business Park"></textarea>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Features -->
      <div id="property-features" class="content">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBedrooms">Bedrooms</label>
            <input type="number" id="plBedrooms" name="plBedrooms" class="form-control" placeholder="3" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFloorNo">Floor No</label>
            <input type="number" id="plFloorNo" name="plFloorNo" class="form-control" placeholder="12" />
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBathrooms">Bathrooms</label>
            <input type="number" id="plBathrooms" name="plBathrooms" class="form-control" placeholder="4" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plFurnishedStatus">Furnished Status</label>
            <select id="plFurnishedStatus" name="plFurnishedStatus" class="form-select">
              <option selected disabled value="">Select furnished status </option>
              <option value="1">Fully furnished</option>
              <option value="2">Furnished</option>
              <option value="3">Semi furnished</option>
              <option value="4">Unfurnished</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="form-label" for="plFurnishingDetails">Furnishing Details</label>
            <input id="plFurnishingDetails" name="plFurnishingDetails" class="form-control" placeholder="select options" value="Fridge, AC, TV, WiFi">
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any common area?</label>
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioYes" checked>
              <label class="form-check-label" for="plCommonAreaRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plCommonAreaRadio" id="plCommonAreaRadioNo">
              <label class="form-check-label" for="plCommonAreaRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is there any attached balcony?</label>
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioYes" checked>
              <label class="form-check-label" for="plAttachedBalconyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plAttachedBalconyRadio" id="plAttachedBalconyRadioNo">
              <label class="form-check-label" for="plAttachedBalconyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Property Area -->
      <div id="property-area" class="content">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plTotalArea">Total Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plTotalArea" name="plTotalArea" placeholder="1000" aria-describedby="pl-total-area">
              <span class="input-group-text" id="pl-total-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plCarpetArea">Carpet Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plCarpetArea" name="plCarpetArea" placeholder="800" aria-describedby="pl-carpet-area">
              <span class="input-group-text" id="pl-carpet-area">sq-ft</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPlotArea">Plot Area</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPlotArea" name="plPlotArea" placeholder="800" aria-describedby="pl-plot-area">
              <span class="input-group-text" id="pl-plot-area">sq-yd</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plAvailableFrom">Available From</label>
            <input type="text" id="plAvailableFrom" name="plAvailableFrom" class="form-control flatpickr" placeholder="YYYY-MM-DD" />
          </div>
          <div class="col-sm-6">
            <label class="form-label">Possession Status</label>
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plUnderConstruction" checked>
              <label class="form-check-label" for="plUnderConstruction">Under Construction</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plPossessionStatus" id="plReadyToMoveRadio">
              <label class="form-check-label" for="plReadyToMoveRadio">Ready to Move</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Transaction Type</label>
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plNewProperty" checked>
              <label class="form-check-label" for="plNewProperty">New Property</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plTransectionType" id="plResaleProperty">
              <label class="form-check-label" for="plResaleProperty">Resale</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Is Property Facing Main Road?</label>
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioYes" checked>
              <label class="form-check-label" for="plRoadFacingRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plRoadFacingRadio" id="plRoadFacingRadioNo">
              <label class="form-check-label" for="plRoadFacingRadioNo">No</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Gated Colony?</label>
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioYes" checked>
              <label class="form-check-label" for="plGatedColonyRadioYes">Yes</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plGatedColonyRadio" id="plGatedColonyRadioNo">
              <label class="form-check-label" for="plGatedColonyRadioNo">No</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-primary btn-next"> <span class="d-sm-inline-block d-none me-sm-1">Next</span> <i class="bx bx-chevron-right bx-sm me-sm-n2"></i></button>
          </div>
        </div>
      </div>

      <!-- Price Details -->
      <div id="price-details" class="content">
        <div class="row g-3">
          <div class="col-sm-6">
            <label class="form-label d-block" for="plExpeactedPrice">Expected Price</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plExpeactedPrice" name="plExpeactedPrice" placeholder="25,000" aria-describedby="pl-expeacted-price">
              <span class="input-group-text" id="pl-expeacted-price">$</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plPriceSqft">Price per Sqft</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plPriceSqft" name="plPriceSqft" placeholder="500" aria-describedby="pl-price-sqft">
              <span class="input-group-text" id="pl-price-sqft">$</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plMaintenenceCharge">Maintenance Charge</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plMaintenenceCharge" name="plMaintenenceCharge" placeholder="50" aria-describedby="pl-mentenence-charge">
              <span class="input-group-text" id="pl-mentenence-charge">$</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="plMaintenencePer">Maintenance</label>
            <select id="plMaintenencePer" name="plMaintenencePer" class="form-select">
              <option value="1" selected>Monthly</option>
              <option value="2">Quarterly</option>
              <option value="3">Yearly</option>
              <option value="3">One-time</option>
              <option value="3">Per sqft. Monthly</option>
            </select>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plBookingAmount">Booking/Token Amount</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plBookingAmount" name="plBookingAmount" placeholder="250" aria-describedby="pl-booking-amount">
              <span class="input-group-text" id="pl-booking-amount">$</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label d-block" for="plOtherAmount">Other Amount</label>
            <div class="input-group input-group-merge">
              <input type="number" class="form-control" id="plOtherAmount" name="plOtherAmount" placeholder="500" aria-describedby="pl-other-amount">
              <span class="input-group-text" id="pl-other-amount">$</span>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Show Price as</label>
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plNagotiablePrice" checked>
              <label class="form-check-label" for="plNagotiablePrice">Negotiable</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="plShowPriceRadio" id="plCallForPrice">
              <label class="form-check-label" for="plCallForPrice">Call for Price</label>
            </div>
          </div>
          <div class="col-sm-6">
            <label class="form-label">Price includes</label>
            <div class="form-check mb-2">
              <input class="form-check-input" type="checkbox" name="plCarParking" id="plCarParking">
              <label class="form-check-label" for="plCarParking">Car Parking</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="plClubMembership" id="plClubMembership">
              <label class="form-check-label" for="plClubMembership">Club Membership</label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="plOtherCharges" id="plOtherCharges">
              <label class="form-check-label" for="plOtherCharges">Stamp Duty & Registration charges excluded.</label>
            </div>
          </div>
          <div class="col-12 d-flex justify-content-between">
            <button class="btn btn-primary btn-prev"> <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i> <span class="d-sm-inline-block d-none">Previous</span> </button>
            <button class="btn btn-success btn-submit btn-next">Submit</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<!--/ Property Listing Wizard -->
@endsection
