@extends('layouts/layoutMaster')

@section('title', 'Selects and tags - Forms')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/typeahead-js/typeahead.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-select/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bloodhound/bloodhound.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/forms-selects.js')}}"></script>
<script src="{{asset('assets/js/forms-tagify.js')}}"></script>
<script src="{{asset('assets/js/forms-typeahead.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Forms /</span> Selects and tags
</h4>

<div class="row">

  <!-- Select2 -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Select2</h5>
      <div class="card-body">
        <div class="row">
          <!-- Basic -->
          <div class="col-md-6 mb-4">
            <label for="select2Basic" class="form-label">Basic</label>
            <select id="select2Basic" class="select2 form-select form-select-lg" data-allow-clear="true">
              <option value="AK">Alaska</option>
              <option value="HI">Hawaii</option>
              <option value="CA">California</option>
              <option value="NV">Nevada</option>
              <option value="OR">Oregon</option>
              <option value="WA">Washington</option>
              <option value="AZ">Arizona</option>
              <option value="CO">Colorado</option>
              <option value="ID">Idaho</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NM">New Mexico</option>
              <option value="ND">North Dakota</option>
              <option value="UT">Utah</option>
              <option value="WY">Wyoming</option>
              <option value="AL">Alabama</option>
              <option value="AR">Arkansas</option>
              <option value="IL">Illinois</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="OK">Oklahoma</option>
              <option value="SD">South Dakota</option>
              <option value="TX">Texas</option>
              <option value="TN">Tennessee</option>
              <option value="WI">Wisconsin</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="IN">Indiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="OH">Ohio</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WV">West Virginia</option>
            </select>
          </div>
          <!-- Multiple -->
          <div class="col-md-6 mb-4">
            <label for="select2Multiple" class="form-label">Multiple</label>
            <select id="select2Multiple" class="select2 form-select" multiple>
              <optgroup label="Alaskan/Hawaiian Time Zone">
                <option value="AK">Alaska</option>
                <option value="HI">Hawaii</option>
              </optgroup>
              <optgroup label="Pacific Time Zone">
                <option value="CA">California</option>
                <option value="NV">Nevada</option>
                <option value="OR">Oregon</option>
                <option value="WA">Washington</option>
              </optgroup>
              <optgroup label="Mountain Time Zone">
                <option value="AZ">Arizona</option>
                <option value="CO" selected>Colorado</option>
                <option value="ID">Idaho</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NM">New Mexico</option>
                <option value="ND">North Dakota</option>
                <option value="UT">Utah</option>
                <option value="WY">Wyoming</option>
              </optgroup>
              <optgroup label="Central Time Zone">
                <option value="AL">Alabama</option>
                <option value="AR">Arkansas</option>
                <option value="IL">Illinois</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="OK">Oklahoma</option>
                <option value="SD">South Dakota</option>
                <option value="TX">Texas</option>
                <option value="TN">Tennessee</option>
                <option value="WI">Wisconsin</option>
              </optgroup>
              <optgroup label="Eastern Time Zone">
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="FL" selected>Florida</option>
                <option value="GA">Georgia</option>
                <option value="IN">Indiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="OH">Ohio</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WV">West Virginia</option>
              </optgroup>
            </select>
          </div>
          <!-- Disabled -->
          <div class="col-md-6 mb-4">
            <label for="select2Disabled" class="form-label">Disabled</label>
            <select id="select2Disabled" class="select2 form-select" disabled>
              <option value="1">Option1</option>
              <option value="2" selected>Option2</option>
              <option value="3">Option3</option>
              <option value="4">Option4</option>
            </select>
          </div>
          <!-- Icons -->
          <div class="col-md-6 mb-4">
            <label for="select2Icons" class="form-label">Icons</label>
            <select id="select2Icons" class="select2-icons form-select">
              <optgroup label="Services">
                <option value="wordpress2" data-icon="bx bxl-wordpress" selected>WordPress</option>
                <option value="codepen" data-icon="bx bxl-codepen">Codepen</option>
                <option value="drupal" data-icon="bx bxl-drupal">Drupal</option>
                <option value="pinterest2" data-icon="bx bxl-css3">CSS3</option>
                <option value="html5" data-icon="bx bxl-html5">HTML5</option>
              </optgroup>
              <optgroup label="File types">
                <option value="pdf" data-icon="bx bxs-file-pdf">PDF</option>
                <option value="word" data-icon="bx bxs-file-doc">Word</option>
                <option value="excel" data-icon="bx bxs-file-json">JSON</option>
                <option value="facebook" data-icon="bx bxl-facebook">Facebook</option>
              </optgroup>
              <optgroup label="Browsers">
                <option value="chrome" data-icon="bx bxl-chrome">Chrome</option>
                <option value="firefox" data-icon="bx bxl-firefox">Firefox</option>
                <option value="safari" data-icon="bx bxl-edge">Edge</option>
                <option value="opera" data-icon="bx bxl-opera">Opera</option>
                <option value="IE" data-icon="bx bxl-internet-explorer">IE</option>
              </optgroup>
            </select>
          </div>
          <!-- Colors -->
          <!-- Primary -->
          <div class="col-md-6 mb-4">
            <label for="select2Primary" class="form-label">Primary</label>
            <div class="select2-primary">
              <select id="select2Primary" class="select2 form-select" multiple>
                <option value="1" selected>Option1</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
            </div>
          </div>
          <!-- Success -->
          <div class="col-md-6 mb-4">
            <label for="select2Success" class="form-label">Success</label>
            <div class="select2-success">
              <select id="select2Success" class="select2 form-select" multiple>
                <option value="1" selected>Option1</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
            </div>
          </div>
          <!-- Info -->
          <div class="col-md-6 mb-4">
            <label for="select2Info" class="form-label">Info</label>
            <div class="select2-info">
              <select id="select2Info" class="select2 form-select" multiple>
                <option value="1" selected>Option1</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
            </div>
          </div>
          <!-- Warning -->
          <div class="col-md-6 mb-4">
            <label for="select2Warning" class="form-label">Warning</label>
            <div class="select2-warning">
              <select id="select2Warning" class="select2 form-select" multiple>
                <option value="1" selected>Option1</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
            </div>
          </div>
          <!-- Danger -->
          <div class="col-md-6 mb-4 mb-md-0">
            <label for="select2Danger" class="form-label">Danger</label>
            <div class="select2-danger">
              <select id="select2Danger" class="select2 form-select" multiple>
                <option value="1" selected>Option1</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
            </div>
          </div>
          <!-- Dark -->
          <div class="col-md-6 ">
            <label for="select2Dark" class="form-label">Dark</label>
            <div class="select2-dark">
              <select id="select2Dark" class="select2 form-select" multiple>
                <option value="1" selected>Option1</option>
                <option value="2" selected>Option2</option>
                <option value="3">Option3</option>
                <option value="4">Option4</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Select2 -->

  <!-- Tagify -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Tagify</h5>
      <div class="card-body">
        <div class="row">
          <!-- Basic -->
          <div class="col-md-6 mb-4">
            <label for="TagifyBasic" class="form-label">Basic</label>
            <input id="TagifyBasic" class="form-control" name="TagifyBasic" value="Tag1, Tag2, Tag3" />
          </div>
          <!-- Readonly Mode -->
          <div class="col-md-6 mb-4">
            <label for="TagifyReadonly" class="form-label">Readonly</label>
            <input id="TagifyReadonly" class="form-control" readonly value="Tag1, Tag2, Tag3" />
          </div>
          <!-- Custom Suggestions: Inline -->
          <div class="col-md-6 mb-4">
            <label for="TagifyCustomInlineSuggestion" class="form-label">Custom Inline Suggestions</label>
            <input id="TagifyCustomInlineSuggestion" name="TagifyCustomInlineSuggestion" class="form-control" placeholder="select technologies" value="css, html, javascript">
          </div>
          <!-- Custom Suggestions: List -->
          <div class="col-md-6 mb-4">
            <label for="TagifyCustomListSuggestion" class="form-label">Custom List Suggestions</label>
            <input id="TagifyCustomListSuggestion" name="TagifyCustomListSuggestion" class="form-control" placeholder="select technologies" value="css, html, php">
          </div>
          <!-- Users List -->
          <div class="col-md-6 mb-4">
            <label for="TagifyUserList" class="form-label">Users List</label>
            <input id="TagifyUserList" name="TagifyUserList" class="form-control" value="abatisse2@nih.gov, Justinian Hattersley" />
          </div>
          <!-- Email -->
          <div class="col-md-6 mb-4">
            <label for="TagifyEmailList" class="form-label d-block">Email List</label>
            <input id="TagifyEmailList" class="tagify-email-list" value="some56.name@website.com">
            <button type="button" class="btn rounded-pill btn-icon btn-sm btn-label-primary"> <span class="tf-icons bx bx-plus"></span> </button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Tagify -->

  <!-- Typeahead -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Typeahead</h5>
      <div class="card-body">
        <div class="row">
          <!-- Basic -->
          <div class="col-md-6 mb-4">
            <label for="TypeaheadBasic" class="form-label">Basic</label>
            <input id="TypeaheadBasic" class="form-control typeahead" type="text" autocomplete="off" placeholder="Enter states from USA" />
          </div>
          <!-- Bloodhound -->
          <div class="col-md-6 mb-4">
            <label for="TypeaheadBloodHound" class="form-label">BloodHound (Suggestion Engine)</label>
            <input id="TypeaheadBloodHound" class="form-control typeahead-bloodhound" type="text" autocomplete="off" placeholder="Enter states from USA" />
          </div>
          <!-- Prefetch -->
          <div class="col-md-6 mb-4">
            <label for="TypeaheadPrefetch" class="form-label">Prefetch</label>
            <input id="TypeaheadPrefetch" class="form-control typeahead-prefetch" type="text" autocomplete="off" placeholder="Enter states from USA" />
          </div>
          <!-- Default Suggestions -->
          <div class="col-md-6 mb-4">
            <label for="TypeaheadSuggestions" class="form-label">Default Suggestions</label>
            <input id="TypeaheadSuggestions" class="form-control typeahead-default-suggestions" type="text" autocomplete="off" />
          </div>
          <!-- Custom Template -->
          <div class="col-md-6 mb-4 mb-md-0">
            <label for="TypeaheadCustom" class="form-label">Custom Template</label>
            <input id="TypeaheadCustom" class="form-control typeahead-custom-template" type="text" autocomplete="off" placeholder="Search For Oscar Winner" />
          </div>
          <!-- Multiple Datasets -->
          <div class="col-md-6">
            <label for="TypeaheadMultipleDataset" class="form-label">Multiple Datasets</label>
            <input id="TypeaheadMultipleDataset" class="form-control typeahead-multi-datasets" type="text" autocomplete="off" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Typeahead -->

  <!-- Bootstrap Select -->
  <div class="col-12">
    <div class="card">
      <h5 class="card-header">Bootstrap Select</h5>
      <div class="card-body">
        <div class="row">
          <!-- Basic -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerBasic" class="form-label">Basic</label>
            <select id="selectpickerBasic" class="selectpicker w-100" data-style="btn-default">
              <option>Rocky</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Group -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerGroups" class="form-label">Groups</label>
            <select id="selectpickerGroups" class="selectpicker w-100" data-style="btn-default">
              <optgroup label="Movies">
                <option>Rocky</option>
                <option>Pulp Fiction</option>
                <option>The Godfather</option>
              </optgroup>
              <optgroup label="Series">
                <option>Breaking Bad</option>
                <option>Black Mirror</option>
                <option>Money Heist</option>
              </optgroup>
            </select>
          </div>
          <!-- Multiple -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerMultiple" class="form-label">Multiple</label>
            <select id="selectpickerMultiple" class="selectpicker w-100" data-style="btn-default" multiple data-icon-base="bx" data-tick-icon="bx-check text-primary">
              <option>Rocky</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Live Search -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerLiveSearch" class="form-label">Live Search</label>
            <select id="selectpickerLiveSearch" class="selectpicker w-100" data-style="btn-default" data-live-search="true">
              <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
              <option data-tokens="mustard">Burger, Shake and a Smile</option>
              <option data-tokens="frosting">Sugar, Spice and all things nice</option>
            </select>
          </div>
          <!-- Icons -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerIcons" class="form-label">Icons</label>
            <select class="selectpicker w-100 show-tick" id="selectpickerIcons" data-icon-base="bx" data-tick-icon="bx-check" data-style="btn-default">
              <option data-icon="bx bxl-instagram">Instagram</option>
              <option data-icon="bx bxl-pinterest-alt">Pinterest</option>
              <option data-icon="bx bxl-twitch">Twitch</option>
            </select>
          </div>
          <!-- Subtext -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerSubtext" class="form-label">Subtext</label>
            <select id="selectpickerSubtext" class="selectpicker w-100" data-style="btn-default" data-show-subtext="true">
              <option data-subtext="Framework">React</option>
              <option data-subtext="Styles">Sass</option>
              <option data-subtext="Markup">HTML</option>
            </select>
          </div>
          <!-- Selection Limit -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerSelection" class="form-label">Selection Limit</label>
            <select id="selectpickerSelection" class="selectpicker w-100" data-style="btn-default" multiple data-max-options="2">
              <option>Rocky</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Select / Deselect All -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerSelectDeselect" class="form-label">Select / Deselect All</label>
            <select id="selectpickerSelectDeselect" class="selectpicker w-100" data-style="btn-default" multiple data-actions-box="true">
              <option>Rocky</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Divider -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerDivider" class="form-label">Divider</label>
            <select id="selectpickerDivider" class="selectpicker w-100" data-style="btn-default">
              <option>Rocky</option>
              <option data-divider="true">divider</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Header -->
          <div class="col-md-6 mb-4">
            <label for="selectpickerHeader" class="form-label">Header</label>
            <select id="selectpickerHeader" class="selectpicker w-100" data-style="btn-default" data-header="Select a Movie">
              <option>Rocky</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Disabled -->
          <div class="col-md-6 mb-4 mb-md-0">
            <label for="selectpickerDisabled" class="form-label">Disabled</label>
            <select id="selectpickerDisabled" class="selectpicker w-100" data-style="btn-default" disabled>
              <option>Rocky</option>
              <option>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
          <!-- Disabled Options -->
          <div class="col-md-6">
            <label for="selectpickerDisabledOptions" class="form-label">Disabled Options</label>
            <select id="selectpickerDisabledOptions" class="selectpicker w-100" data-style="btn-default">
              <option>Rocky</option>
              <option disabled>Pulp Fiction</option>
              <option>The Godfather</option>
            </select>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Bootstrap Select -->
</div>
@endsection
