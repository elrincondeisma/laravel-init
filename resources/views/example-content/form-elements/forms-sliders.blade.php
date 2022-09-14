@extends('layouts/layoutMaster')

@section('title', 'Sliders - Forms')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/nouislider/nouislider.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/nouislider/nouislider.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/forms-sliders.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light"> Forms /</span>
  Sliders
</h4>

<!-- Noui Slider -->
<div class="row">
  <!-- Basic -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Basic</h5>
      <div class="card-body">
        <small class="text-light fw-semibold">Basic</small>
        <div id="slider-basic" class="my-4"></div>
        <small class="text-light fw-semibold">Handles</small>
        <div id="slider-handles" class="mt-4 mb-5"></div>
        <small class="text-light fw-semibold">Snapping between steps</small>
        <div id="slider-steps" class="mt-4"></div>
      </div>
    </div>
  </div>
  <!-- /Basic -->

  <!-- Behaviour -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Behaviour</h5>
      <div class="card-body">
        <small class="text-light fw-semibold">Tap</small>
        <div id="slider-tap" class="mt-4 mb-5"></div>

        <small class="text-light fw-semibold">Drag</small>
        <div id="slider-drag" class="mt-4 mb-5"></div>

        <small class="text-light fw-semibold">Fixed Dragging</small>
        <div id="slider-fixed-drag" class="mt-4 mb-5"></div>

        <small class="text-light fw-semibold">Combined Options</small>
        <div id="slider-combined-options" class="mt-4 mb-5"></div>

        <small class="text-light fw-semibold">Hover</small>
        <div id="slider-hover" class="mt-4 mb-2"></div>
        <small>Hovered value: <span id="slider-val">null</span></small>
      </div>
    </div>
  </div>
  <!-- /Behaviour -->

  <!-- Scale & Pips -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Scale & Pips</h5>
      <div class="card-body pb-5">
        <div class="my-3" id="slider-pips"></div>
      </div>
    </div>
  </div>
  <!-- /Scale & Pips -->

  <!-- Colors -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Colors</h5>
      <div class="card-body pb-5">
        <small class="text-light fw-semibold">Primary</small>
        <div class="noUi-primary mt-4 mb-5" id="slider-primary"></div>
        <small class="text-light fw-semibold">Success</small>
        <div class="noUi-success mt-4 mb-5" id="slider-success"></div>
        <small class="text-light fw-semibold">Danger</small>
        <div class="noUi-danger mt-4 mb-5" id="slider-danger"></div>
        <small class="text-light fw-semibold">Warning</small>
        <div class="noUi-warning mt-4 mb-5" id="slider-warning"></div>
        <small class="text-light fw-semibold">Info</small>
        <div class="noUi-info mt-4 mb-5" id="slider-info"></div>
      </div>
    </div>
  </div>
  <!-- /Colors -->

  <!-- Dynamic -->
  <div class="col-12">
    <div class="card mb-4">
      <h5 class="card-header">Dynamic</h5>
      <div class="card-body">
        <div class="mb-3" id="slider-dynamic"></div>
        <div class="row">
          <div class="col-xl-3 col-md-4 col-sm-12 slider-select d-sm-flex d-block">
            <select class="form-select me-2 mt-2 d-inline-block" id="slider-select">
              <option value="-20">-20</option>
              <option value="-19">-19</option>
              <option value="-18">-18</option>
              <option value="-17">-17</option>
              <option value="-16">-16</option>
              <option value="-15">-15</option>
              <option value="-14">-14</option>
              <option value="-13">-13</option>
              <option value="-12">-12</option>
              <option value="-11">-11</option>
              <option value="-10">-10</option>
              <option value="-9">-9</option>
              <option value="-8">-8</option>
              <option value="-7">-7</option>
              <option value="-6">-6</option>
              <option value="-5">-5</option>
              <option value="-4">-4</option>
              <option value="-3">-3</option>
              <option value="-2">-2</option>
              <option value="-1">-1</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
              <option value="32">32</option>
              <option value="33">33</option>
              <option value="34">34</option>
              <option value="35">35</option>
              <option value="36">36</option>
              <option value="37">37</option>
              <option value="38">38</option>
              <option value="39">39</option>
              <option value="40">40</option>
            </select>
            <input class="form-control d-inline-block mt-2" type="number" min="-20" max="40" step="1" id="slider-input" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Dynamic -->
</div>

<!-- Vertical -->
<div class="row">
  <div class="col-xl-3 col-md-6 col-12">
    <div class="card mb-xl-0 mb-4">
      <h5 class="card-header">Vertical Default</h5>
      <div class="card-body">
        <div class="mx-auto mt-2" id="slider-vertical"></div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 col-12">
    <div class="card mb-xl-0 mb-4">
      <h5 class="card-header">Vertical Upper Connect</h5>
      <div class="card-body">
        <div class="mx-auto mt-2" id="slider-connect-upper"></div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-md-0 mb-4 col-12">
    <div class="card">
      <h5 class="card-header">Vertical Tooltip</h5>
      <div class="card-body">
        <div class="mx-auto mt-2" id="slider-vertical-tooltip"></div>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-md-6 col-12">
    <div class="card">
      <h5 class="card-header">Vertical Limit</h5>
      <div class="card-body">
        <div class="mx-auto mt-2" id="slider-vertical-limit"></div>
      </div>
    </div>
  </div>
</div>
<!-- /Vertical -->
<!-- /Noui Slider -->
@endsection
