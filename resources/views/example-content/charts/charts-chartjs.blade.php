@extends('layouts/layoutMaster')

@section('title', 'Chart.js - Charts')

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/chartjs/chartjs.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/charts-chartjs.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Charts /</span> Chart.js
</h4>

<div class="row gy-4">
  <!-- Bar Charts -->
  <div class="col-xl-6 col-12">
    <div class="card">
      <div class="card-header header-elements">
        <h5 class="card-title mb-0">Latest Statistics</h5>
        <div class="card-action-element ms-auto py-0">
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-calendar"></i></button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <canvas id="barChart" class="chartjs" data-height="400"></canvas>
      </div>
    </div>
  </div>
  <!-- /Bar Charts -->

  <!-- Horizontal Bar Charts -->
  <div class="col-xl-6 col-12">
    <div class="card">
      <div class="card-header header-elements">
        <div class="d-flex flex-column">
          <p class="card-subtitle text-muted mb-1">Balance</p>
          <h5 class="card-title fw-bold mb-0">$74,123</h5>
        </div>
        <div class="card-action-element ms-auto py-0">
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle px-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-calendar"></i></button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <canvas id="horizontalBarChart" class="chartjs" data-height="400"></canvas>
      </div>
    </div>
  </div>
  <!-- /Horizontal Bar Charts -->

  <!-- Line Charts -->
  <div class="col-12">
    <div class="card">
      <div class="card-header header-elements">
        <div>
          <h5 class="card-title mb-0">Statistics</h5>
          <small class="text-muted">Commercial networks and enterprises</small>
        </div>
        <div class="card-header-elements ms-auto py-0">
          <h5 class="fw-bold mb-0 me-3">$ 78,000</h5>
          <span class="badge bg-label-secondary">
            <i class='bx bx-up-arrow-alt bx-xs text-success'></i>
            <span class="align-middle">37%</span>
          </span>
        </div>
      </div>
      <div class="card-body">
        <canvas id="lineChart" class="chartjs" data-height="500"></canvas>
      </div>
    </div>
  </div>
  <!-- /Line Charts -->

  <!-- Radar Chart -->
  <div class="col-lg-6 col-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title mb-0">Radar Chart</h5>
      </div>
      <div class="card-body">
        <canvas class="chartjs" id="radarChart" data-height="355"></canvas>
      </div>
    </div>
  </div>
  <!-- /Radar Chart -->

  <!-- Polar Area Chart -->
  <div class="col-lg-6 col-12">
    <div class="card">
      <div class="card-header header-elements">
        <h5 class="card-title mb-0">Average Skills</h5>
        <div class="card-header-elements ms-auto py-0 dropdown">
          <button type="button" class="btn dropdown-toggle hide-arrow p-0" id="heat-chart-dd" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="heat-chart-dd">
            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <canvas id="polarChart" class="chartjs" data-height="337"></canvas>
      </div>
    </div>
  </div>
  <!-- /Polar Area Chart -->

  <!-- Bubble Chart -->
  <div class="col-12">
    <div class="card">
      <div class="card-header header-elements">
        <h5 class="card-title mb-0">Bubble Chart</h5>
        <div class="card-header-elements ms-auto py-0">
          <h5 class="fw-bold mb-0 me-3">$ 100,000</h5>
          <span class="badge bg-label-secondary">
            <i class='bx bx-down-arrow-alt bx-xs text-danger'></i>
            <span class="align-middle">20%</span>
          </span>
        </div>
      </div>
      <div class="card-body">
        <canvas id="bubbleChart" class="chartjs" data-height="500"></canvas>
      </div>
    </div>
  </div>
  <!-- /Bubble Chart -->

  <!-- Doughnut Chart -->
  <div class="col-lg-4 col-12">
    <div class="card">
      <h5 class="card-header">User by Devices</h5>
      <div class="card-body">
        <canvas id="doughnutChart" class="chartjs mb-4" data-height="350"></canvas>
        <ul class="doughnut-legend d-flex justify-content-around ps-0 mb-2 pt-1">
          <li class="ct-series-0 d-flex flex-column">
            <h5 class="mb-0 fw-bold">Desktop</h5>
            <span class="badge badge-dot my-2 cursor-pointer rounded-pill" style="background-color: rgb(102, 110, 232);width:35px; height:6px;"></span>
            <div class="text-muted">80 %</div>
          </li>
          <li class="ct-series-1 d-flex flex-column">
            <h5 class="mb-0 fw-bold">Tablet</h5>
            <span class="badge badge-dot my-2 cursor-pointer rounded-pill" style="background-color: rgb(40, 208, 148);width:35px; height:6px;"></span>
            <div class="text-muted">10 %</div>
          </li>
          <li class="ct-series-2 d-flex flex-column">
            <h5 class="mb-0 fw-bold">Mobile</h5>
            <span class="badge badge-dot my-2 cursor-pointer rounded-pill" style="background-color: rgb(253, 172, 52);width:35px; height:6px;"></span>
            <div class="text-muted">10 %</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- /Doughnut Chart -->

  <!-- Scatter Chart -->
  <div class="col-lg-8 col-12">
    <div class="card">
      <div class="card-header flex-nowrap header-elements">
        <h5 class="card-title mb-0">New Product Data</h5>
        <div class="card-header-elements ms-auto py-0 d-none d-sm-block">
          <div class="btn-group" role="group" aria-label="radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="dailyRadio" checked autocomplete="off">
            <label class="btn btn-outline-secondary" for="dailyRadio">Daily</label>

            <input type="radio" class="btn-check" name="btnradio" id="monthlyRadio" autocomplete="off">
            <label class="btn btn-outline-secondary" for="monthlyRadio">Monthly</label>

            <input type="radio" class="btn-check" name="btnradio" id="yearlyRadio" autocomplete="off">
            <label class="btn btn-outline-secondary" for="yearlyRadio">Yearly</label>
          </div>
        </div>
      </div>
      <div class="card-body">
        <canvas id="scatterChart" class="chartjs" data-height="435"></canvas>
      </div>
    </div>
  </div>
  <!-- /Scatter Chart -->

  <!-- Line Area Charts -->
  <div class="col-12">
    <div class="card">
      <div class="card-header header-elements">
        <h5 class="card-title mb-0">Data Science</h5>
        <div class="card-header-elements py-0 ms-auto">
          <div class="dropdown">
            <button type="button" class="btn dropdown-toggle p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-calendar"></i></button>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Today</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Yesterday</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 7 Days</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last 30 Days</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Current Month</a></li>
              <li><a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">Last Month</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <canvas id="lineAreaChart" class="chartjs" data-height="450"></canvas>
      </div>
    </div>
  </div>
  <!-- /Line Area Charts -->
</div>
@endsection
