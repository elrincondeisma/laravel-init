@extends('layouts/layoutMaster')

@section('title', 'Cards Analytics- UI elements')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/cards-analytics.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">UI Elements /</span> Cards Analytics
</h4>

<div class="row">
  <!-- Website Analytics-->
  <div class="col-lg-6 col-md-12 mb-4 order-0">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Website Analytics</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="analyticsOptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="analyticsOptions">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-around align-items-center flex-wrap mb-4 pb-1">
          <div class="user-analytics text-center me-2">
            <i class="bx bx-user me-1"></i>
            <span>Users</span>
            <div class="d-flex align-items-center mt-2">
              <div class="chart-report" data-color="success" data-series="35"></div>
              <h3 class="mb-0">61K</h3>
            </div>
          </div>
          <div class="sessions-analytics text-center me-2">
            <i class="bx bx-pie-chart-alt me-1"></i>
            <span>Sessions</span>
            <div class="d-flex align-items-center mt-2">
              <div class="chart-report" data-color="warning" data-series="76"></div>
              <h3 class="mb-0">92K</h3>
            </div>
          </div>
          <div class="bounce-rate-analytics text-center">
            <i class="bx bx-trending-up me-1"></i>
            <span>Bounce Rate</span>
            <div class="d-flex align-items-center mt-2">
              <div class="chart-report" data-color="danger" data-series="65"></div>
              <h3 class="mb-0">72.6%</h3>
            </div>
          </div>
        </div>
        <div id="analyticsBarChart"></div>
      </div>
    </div>

  </div>
  <!-- Referral, conversion, impression & growth charts -->
  <div class="col-lg-6 col-md-12 order-0">
    <div class="row">
      <!-- Referral Chart-->
      <div class="col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body text-center">
            <h2 class="mb-0">$32,690</h2>
            <small class="text-muted">Referral 40%</small>
            <div id="referralLineChart"></div>
          </div>
        </div>
      </div>
      <!-- Conversion Chart-->
      <div class="col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-header d-flex justify-content-between pb-3">
            <div class="conversion-title">
              <h5 class="card-title mb-0">Conversion</h5>
              <p class="mb-0 text-muted">60%
                <i class="bx bx-chevron-up text-success"></i>
              </p>
            </div>
            <h2 class="mb-0">89k</h2>
          </div>
          <div class="card-body">
            <div id="conversionBarchart"></div>
          </div>
        </div>
      </div>
      <!-- Impression Radial Chart-->
      <div class="col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body text-center">
            <div id="impressionDonutChart"></div>
          </div>
        </div>
      </div>
      <!-- Growth Chart-->
      <div class="col-sm-6 col-12 mb-4">
        <div class="card">
          <div class="card-body text-center">
            <div class="dropdown">
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButtonSec" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                2020
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButtonSec">
                <a class="dropdown-item" href="javascript:void(0);">2022</a>
                <a class="dropdown-item" href="javascript:void(0);">2021</a>
                <a class="dropdown-item" href="javascript:void(0);">2020</a>
              </div>
            </div>
            <div id="growthRadialChart"></div>
            <h6 class="mb-0"> 62% Growth in 2022</h6>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Multi Radial Chart -->
  <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4 order-0">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Visits of 2022</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="visitsOptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="visitsOptions">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div id="visitsRadialChart"></div>
      </div>
    </div>
  </div>
  <!-- Statistics Radial Chart -->
  <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-4 order-0">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Statistics</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="statisticsOptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="statisticsOptions">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body text-center">
        <div id="statisticsRadialChart"></div>
        <h5 class="mb-1">Awesome</h5>
        <span>Close to reach 1000k followers !</span>
      </div>
    </div>
  </div>
  <!-- Gauge Chart -->
  <div class="col-lg-4 col-md-6 col-sm-6 col-12 mb-0 mb-sm-4 order-2 order-lg-0">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0">Gauge Chart</h5>
        <div class="dropdown">
          <button class="btn p-0" type="button" id="timeSpentGaugeOptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bx bx-dots-vertical-rounded"></i>
          </button>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="timeSpentGaugeOptions">
            <a class="dropdown-item" href="javascript:void(0);">Select All</a>
            <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
            <a class="dropdown-item" href="javascript:void(0);">Share</a>
          </div>
        </div>
      </div>
      <div class="card-body text-center">
        <div id="timeSpentGaugeChart"></div>
        <small>Throughout 2020 and 2021, Profound shifts in the tech landscape. </small>
      </div>
    </div>
  </div>
  <!-- Revenue Growth & Total Earning Chart -->
  <div class="col-lg-4 col-md-6 col-sm-6 col-12 order-1 order-lg-0">
    <!-- Revenue Growth Chart -->
    <div class="col-xl-12 col-12 mb-4">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center pb-0">
          <h5 class="card-title mb-0">Revenue Growth</h5>
          <span>$25,980</span>
        </div>
        <div class="card-body pb-0">
          <div id="revenueGrowthChart"></div>
        </div>
      </div>
    </div>
    <!-- Total Earning Chart -->
    <div class="col-xl-12 col-12 mb-4 mb-sm-0">
      <div class="card">
        <div class="card-body d-flex justify-content-center align-items-center">
          <div id="totalEarningChart" class="me-3"></div>
          <div class="chart-info">
            <p class="mb-3">Total Earning</p>
            <div class="d-flex align-items-center flex-wrap gap-1">
              <h4 class="mb-0 me-2">$24,697</h4>
              <span class="text-success flex-nowrap">
                <i class="bx bx-trending-up text-success"></i>
                10%
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Weekly Order Summary -->
  <div class="col-lg-8 col-12 order-0 mb-lg-0 mb-4">
    <div class="card">
      <div class="row row-bordered m-0">
        <!-- Order Summary -->
        <div class="col-md-8 col-12 px-0">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Weekly Order Summary</h5>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="orderSummaryOptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orderSummaryOptions">
                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
              </div>
            </div>
          </div>
          <div class="card-body p-0">
            <div id="orderSummaryChart"></div>
          </div>
        </div>
        <!-- Sales History -->
        <div class="col-md-4 col-12 px-0">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Sales Overview</h5>
            <div class="dropdown">
              <button class="btn p-0" type="button" id="salesOverviewOptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-dots-vertical-rounded"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="salesOverviewOptions">
                <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                <a class="dropdown-item" href="javascript:void(0);">Share</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <h6 class="mt-3">Last Week</h6>
            <p class="mb-4">Performance 45% 🤩 better compare to last month</p>
            <ul class="list-unstyled mb-2 pt-2">
              <li class="mb-4">
                <div class="d-flex align-items-center mb-2">
                  <div class="avatar avatar-sm flex-shrink-0 me-2">
                    <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-trending-up"></i></span>
                  </div>
                  <div>
                    <p class="mb-0 lh-1 text-muted text-nowrap">Earnings This Month</p>
                    <small class="fw-semibold text-nowrap">$84,789</small>
                  </div>
                </div>
                <div class="progress" style="height:6px;">
                  <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </li>
              <li>
                <div class="d-flex align-items-center mb-2">
                  <div class="avatar avatar-sm flex-shrink-0 me-2">
                    <span class="avatar-initial rounded bg-label-success"><i class="bx bx-dollar"></i></span>
                  </div>
                  <div>
                    <p class="mb-0 lh-1 text-muted text-nowrap">Average Daily Sales</p>
                    <small class="fw-semibold text-nowrap">$12,398</small>
                  </div>
                </div>
                <div class="progress" style="height:6px;">
                  <div class="progress-bar bg-success" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
