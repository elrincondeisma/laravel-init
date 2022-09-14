@extends('layouts/layoutMaster')

@section('title', 'Cards Statistics- UI elements')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/cards-statistics.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">UI Elements /</span> Cards Statistics
</h4>
<!-- Cards with few info -->
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="avatar">
              <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bx-user fs-4'></i></span>
            </div>
            <div class="card-info">
              <h5 class="card-title mb-0 me-2">$38,566</h5>
              <small class="text-muted">Conversion</small>
            </div>
          </div>
          <div id="conversationChart"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="avatar">
              <span class="avatar-initial rounded-circle bg-label-warning"><i class='bx bx-dollar fs-4'></i></span>
            </div>
            <div class="card-info">
              <h5 class="card-title mb-0 me-2">$53,659</h5>
              <small class="text-muted">Income</small>
            </div>
          </div>
          <div id="incomeChart"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="avatar">
              <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-wallet fs-4'></i></span>
            </div>
            <div class="card-info">
              <h5 class="card-title mb-0 me-2">$12,452</h5>
              <small class="text-muted">Profit</small>
            </div>
          </div>
          <div id="profitChart"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div class="d-flex align-items-center gap-3">
            <div class="avatar">
              <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bx-cart fs-4'></i></span>
            </div>
            <div class="card-info">
              <h5 class="card-title mb-0 me-2">$8,125</h5>
              <small class="text-muted">Expenses</small>
            </div>
          </div>
          <div id="expensesLineChart"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Cards with few info -->
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <h5 class="card-title mb-0">Profit Report</h5>
      </div>
      <div class="card-body d-flex align-items-end justify-content-between">
        <div class="d-flex justify-content-between align-items-center gap-3 w-100">
          <div class="d-flex align-content-center">
            <div class="chart-report" data-color="danger" data-series="25"></div>
            <div class="chart-info ms-2">
              <h5 class="mb-0">$12k</h5>
              <small class="text-muted">2020</small>
            </div>
          </div>
          <div class="d-flex align-content-center">
            <div class="chart-report" data-color="info" data-series="50"></div>
            <div class="chart-info ms-2">
              <h5 class="mb-0">$64k</h5>
              <small class="text-muted">2021</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
    <div class="card">
      <div class="card-header pb-2">
        <h5 class="card-title mb-0">Registration</h5>
      </div>
      <div class="card-body pb-2">
        <div class="d-flex justify-content-between align-items-center gap-3">
          <div>
            <div class="d-flex align-content-center">
              <h5 class="mb-1">58.4k</h5>
              <i class="bx bx-chevron-up text-success"></i>
            </div>
            <small class="text-success">12.8%</small>
          </div>
          <div id="registrationsBarChart"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <h5 class="card-title mb-0">Earning Report</h5>
      </div>
      <div class="card-body d-flex align-items-end justify-content-between">
        <div class="d-flex align-items-end justify-content-between align-items-center gap-3 w-100">
          <div class="d-flex align-content-center">
            <div class="chart-report" data-color="primary" data-series="65"></div>
            <div class="chart-info ms-2">
              <h5 class="mb-0">$28k</h5>
              <small class="text-muted">2020</small>
            </div>
          </div>
          <div class="d-flex align-content-center">
            <div class="chart-report" data-color="success" data-series="85"></div>
            <div class="chart-info ms-2">
              <h5 class="mb-0">$82k</h5>
              <small class="text-muted">2021</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-4">
    <div class="card">
      <div class="card-header pb-2">
        <h5 class="card-title mb-0">Visits</h5>
      </div>
      <div class="card-body pb-2">
        <div class="d-flex justify-content-between align-items-center gap-3">
          <div>
            <div class="d-flex align-content-center">
              <h5 class="mb-1">58.4k</h5>
              <i class="bx bx-chevron-up text-success"></i>
            </div>
            <small class="text-success">12.8%</small>
          </div>
          <div id="visitsBarChart"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Cards with badge -->
<div class="row">
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-info"><i class='bx bx-edit fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">New Posts</span>
        <h2 class="mb-0">48</h2>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-warning"><i class='bx bx-dock-top fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Attached Files</span>
        <h2 class="mb-0">17</h2>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bx-message-square-detail fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Comments</span>
        <h2 class="mb-0">29</h2>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-primary"><i class='bx bx-cube fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Sales</span>
        <h2 class="mb-0">72</h2>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-success"><i class='bx bx-purchase-tag fs-3'></i></span>
        </div>
        <span class="d-block mb-1 text-nowrap">Purchase</span>
        <h2 class="mb-0">65</h2>
      </div>
    </div>
  </div>
  <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
    <div class="card">
      <div class="card-body text-center">
        <div class="avatar avatar-md mx-auto mb-3">
          <span class="avatar-initial rounded-circle bg-label-danger"><i class='bx bx-cart fs-3'></i></span>
        </div>

        <span class="d-block mb-1 text-nowrap">Order</span>
        <h2 class="mb-0">40</h2>
      </div>
    </div>
  </div>
</div>
<!--/ Cards with badge -->

<!-- Cards with Charts -->
<div class="row">
  <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-lg-0">
    <div class="card">
      <div class="card-header d-flex align-items-start justify-content-between">
        <div class="m-0 me-2">
          <h5 class="card-title mb-0">Registrations</h5>
          <small class="text-muted">New entry in a day</small>
        </div>
        <div class="d-flex flex-row gap-2">
          <h5 class="mb-0">245k</h5>
          <span class="badge bg-label-success">+32%</span>
        </div>
      </div>
      <div class="card-body">
        <div id="registrationsChart"></div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 mb-4 mb-md-0">
    <div class="card">
      <div class="card-header d-flex align-items-start justify-content-between">
        <div class="m-0 me-2">
          <h5 class="card-title mb-0">Expenses</h5>
          <small class="text-muted">Spending on a day</small>
        </div>
        <div class="d-flex flex-row gap-2">
          <h5 class="mb-0">86k</h5>
          <span class="badge bg-label-danger">-58%</span>
        </div>
      </div>
      <div class="card-body">
        <div id="expensesChart"></div>
      </div>
    </div>
  </div>
  <div class="col-lg-4 col-md-6 col-sm-6 mb-0">
    <div class="card">
      <div class="card-header d-flex align-items-start justify-content-between">
        <div class="m-0 me-2">
          <h5 class="card-title mb-0">Users</h5>
          <small class="text-muted">React users in a day</small>
        </div>
        <div class="d-flex flex-row gap-2">
          <h5 class="mb-0">615k</h5>
          <span class="badge bg-label-success">+67%</span>
        </div>
      </div>
      <div class="card-body">
        <div id="usersChart"></div>
      </div>
    </div>
  </div>
</div>
<!--/ Cards with Chart -->
@endsection
