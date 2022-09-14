@extends('layouts/layoutMaster')

@section('title', 'Custom Options - Forms')

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Forms /</span> Custom Options
</h4>

<div class="row gy-4">
  <!-- Basic Custom Radios -->
  <div class="col-xl-6">
    <div class="card">
      <h5 class="card-header">Basic Radio</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="customRadioTemp1">
                <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioTemp1" checked />
                <span class="custom-option-header">
                  <span class="h6 mb-0">Basic</span>
                  <span>Free</span>
                </span>
                <span class="custom-option-body">
                  <small>Get 1 project with 1 teams members.</small>
                </span>
              </label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="customRadioTemp2">
                <input name="customRadioTemp" class="form-check-input" type="radio" value="" id="customRadioTemp2" />
                <span class="custom-option-header">
                  <span class="h6 mb-0">Premium</span>
                  <span>$ 5.00</span>
                </span>
                <span class="custom-option-body">
                  <small>Get 5 projects with 5 team members.</small>
                </span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Basic Custom Radios -->

  <!-- Basic Custom Checkboxes -->
  <div class="col-xl-6">
    <div class="card">
      <h5 class="card-header">Basic Checkboxes</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="customCheckTemp3">
                <input class="form-check-input" type="checkbox" value="" id="customCheckTemp3" checked />
                <span class="custom-option-header">
                  <span class="h6 mb-0">Discount</span>
                  <span>20%</span>
                </span>
                <span class="custom-option-body">
                  <small class="option-text">wow Get 20% off on your next purchases!</small>
                </span>
              </label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="customCheckTemp4">
                <input class="form-check-input" type="checkbox" value="" id="customCheckTemp4" />
                <span class="custom-option-header">
                  <span class="h6 mb-0">Updates</span>
                  <span>Free</span>
                </span>
                <span class="custom-option-body">
                  <small>Get Updates regarding related products.</small>
                </span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Basic Custom Checkboxes -->

  <!-- Custom Icon Radios -->
  <div class="col-xl-6">
    <div class="card">
      <h5 class="card-header">Custom Option Radios With Icons</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customRadioIcon1">
                <span class="custom-option-body">
                  <i class="bx bx-rocket"></i>
                  <span class="custom-option-title">Starter</span>
                  <small> Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
                </span>
                <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioIcon1" checked />
              </label>
            </div>
          </div>
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customRadioIcon2">
                <span class="custom-option-body">
                  <i class="bx bx-user"></i>
                  <span class="custom-option-title"> Personal </span>
                  <small> Cake sugar plum fruitcake I love sweet roll jelly-o. </small>
                </span>
                <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioIcon2" />
              </label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customRadioIcon3">
                <span class="custom-option-body">
                  <i class="bx bx-crown"></i>
                  <span class="custom-option-title"> Enterprise </span>
                  <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
                </span>
                <input name="customRadioIcon" class="form-check-input" type="radio" value="" id="customRadioIcon3" />
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Custom Icon Radios -->

  <!-- Custom Icon Checkbox -->
  <div class="col-xl-6">
    <div class="card">
      <h5 class="card-header">Custom Option Checkboxes With Icons</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customCheckboxIcon1">
                <span class="custom-option-body">
                  <i class="bx bx-server"></i>
                  <span class="custom-option-title"> Backup </span>
                  <small> Cake sugar plum fruitcake I love sweet roll jelly-o. </small>
                </span>
                <input class="form-check-input" type="checkbox" value="" id="customCheckboxIcon1" checked />
              </label>
            </div>
          </div>
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customCheckboxIcon2">
                <span class="custom-option-body">
                  <i class="bx bx-shield"></i>
                  <span class="custom-option-title"> Encrypt </span>
                  <small> Cake sugar plum fruitcake I love sweet roll jelly-o. </small>
                </span>
                <input class="form-check-input" type="checkbox" value="" id="customCheckboxIcon2" />
              </label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customCheckboxIcon3">
                <span class="custom-option-body">
                  <i class="bx bx-lock"></i>
                  <span class="custom-option-title"> Site Lock </span>
                  <small> Cake sugar plum fruitcake I love sweet roll jelly-o. </small>
                </span>
                <input class="form-check-input" type="checkbox" value="" id="customCheckboxIcon3" />
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Custom Icon Checkbox -->

  <!-- Custom Svg Icon Radios -->
  <div class="col-xl-6">
    <div class="card">
      <h5 class="card-header">Custom Option Radios With SVG Icons</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customRadioSvg1">
                <span class="custom-option-body">
                  <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" class="w-px-40 mb-2" alt="paypal" />
                  <span class="custom-option-title"> Design </span>
                  <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
                </span>
                <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg1" checked />
              </label>
            </div>
          </div>
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customRadioSvg2">
                <span class="custom-option-body">
                  <img src="{{asset('assets/img/icons/unicons/wallet.png')}}" class="w-px-40 mb-2" alt="wallet" />
                  <span class="custom-option-title"> Development </span>
                  <small> Cake sugar plum fruitcake I love sweet roll jelly-o. </small>
                </span>
                <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg2" />
              </label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customRadioSvg3">
                <span class="custom-option-body">
                  <img src="{{asset('assets/img/icons/unicons/cc-success.png')}}" class="w-px-40 mb-2" alt="cc-success" />
                  <span class="custom-option-title"> Native App </span>
                  <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
                </span>
                <input name="customRadioSvg" class="form-check-input" type="radio" value="" id="customRadioSvg3" />
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Custom Svg Icon Radios -->

  <!-- Custom SVG Icon Checkbox -->
  <div class="col-xl-6">
    <div class="card">
      <h5 class="card-header">Custom Option Checkboxes With SVG Icons</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customCheckboxSvg1">
                <span class="custom-option-body">
                  <img src="{{asset('assets/img/icons/unicons/chart.png')}}" class="w-px-40 mb-2" alt="chart" />
                  <span class="custom-option-title"> Design </span>
                  <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
                </span>
                <input class="form-check-input" type="checkbox" value="" id="customCheckboxSvg1" checked />
              </label>
            </div>
          </div>
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customCheckboxSvg2">
                <span class="custom-option-body">
                  <img src="{{asset('assets/img/icons/unicons/cc-warning.png')}}" class="w-px-40 mb-2" alt="cc-warning" />
                  <span class="custom-option-title"> Development </span>
                  <small>Cake sugar plum fruitcake I love sweet roll jelly-o.</small>
                </span>
                <input class="form-check-input" type="checkbox" value="" id="customCheckboxSvg2" />
              </label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-check custom-option custom-option-icon">
              <label class="form-check-label custom-option-content" for="customCheckboxSvg3">
                <span class="custom-option-body">
                  <img src="{{asset('assets/img/icons/unicons/paypal.png')}}" class="w-px-40 mb-2" alt="paypal" />
                  <span class="custom-option-title"> Native App </span>
                  <small> Cake sugar plum fruitcake I love sweet roll jelly-o. </small>
                </span>
                <input class="form-check-input" type="checkbox" value="" id="customCheckboxSvg3" />
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Custom SVG Icon Checkbox -->

  <!-- Custom Option Radio Image -->
  <div class="col-xl-6">
    <div class="card">
      <h5 class="card-header">Custom Options Radio With Images</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-image custom-option-image-radio">
              <label class="form-check-label custom-option-content" for="customRadioImg1">
                <span class="custom-option-body">
                  <img src="{{asset('assets/img/backgrounds/3.jpg')}}" alt="radioImg" />
                </span>
              </label>
              <input name="customRadioImage" class="form-check-input" type="radio" value="customRadioImg1" id="customRadioImg1" checked />
            </div>
          </div>
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-image custom-option-image-radio">
              <label class="form-check-label custom-option-content" for="customRadioImg2">
                <span class="custom-option-body">
                  <img src="{{asset('assets/img/backgrounds/8.jpg')}}" alt="radioImg" />
                </span>
              </label>
              <input name="customRadioImage" class="form-check-input" type="radio" value="customRadioImg2" id="customRadioImg2" />
            </div>
          </div>
          <div class="col-md">
            <div class="form-check custom-option custom-option-image custom-option-image-radio">
              <label class="form-check-label custom-option-content" for="customRadioImg3">
                <span class="custom-option-body">
                  <img src="{{asset('assets/img/backgrounds/5.jpg')}}" alt="radioImg" />
                </span>
              </label>
              <input name="customRadioImage" class="form-check-input" type="radio" value="customRadioImg3" id="customRadioImg3" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Custom Option Radio Image -->

  <!-- Custom Option Checkbox Image -->
  <div class="col-xl-6">
    <div class="card">
      <h5 class="card-header">Custom Options Checkbox With Images</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-image custom-option-image-check">
              <input class="form-check-input" type="checkbox" value="" id="customCheckboxImg1" checked />
              <label class="form-check-label custom-option-content" for="customCheckboxImg1">
                <span class="custom-option-body">
                  <img src="{{asset('assets/img/backgrounds/3.jpg')}}" alt="cbImg" />
                </span>
              </label>
            </div>
          </div>
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-image custom-option-image-check">
              <input class="form-check-input " type="checkbox" value="" id="customCheckboxImg2" />
              <label class="form-check-label custom-option-content" for="customCheckboxImg2">
                <span class="custom-option-body">
                  <img src="{{asset('assets/img/backgrounds/5.jpg')}}" alt="cbImg" />
                </span>
              </label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-check custom-option custom-option-image custom-option-image-check">
              <input class="form-check-input" type="checkbox" value="" id="customCheckboxImg3" />
              <label class="form-check-label custom-option-content" for="customCheckboxImg3">
                <span class="custom-option-body">
                  <img src="{{asset('assets/img/backgrounds/8.jpg')}}" alt="cbImg" />
                </span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Custom Option Checkbox Image -->
</div>

<script>
// Check selected custom option
window.Helpers.initCustomOptionCheck();
</script>

@endsection
